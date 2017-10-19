/**
 * Created by Administrator on 15-10-22.
 */


(function($){

    var ST = {};

    var Util ={

           openWin:function(url){

                window.open(url);

           },
           dateDiff: function(sDate1,sDate2){

                var arrDate,arrdate2,objDate1,objDate2,intDays;
                arrDate=sDate1.split("-");

                objDate1=new Date(arrDate[0],arrDate[1]-1,arrDate[2]);

                var arrDate2=sDate2.split("-");

                objDate2=new Date(arrDate2[0],arrDate2[1]-1,arrDate2[2]);

                intDays=Number(Math.abs(objDate1-objDate2)/1000/60/60/24);

                return intDays;
            },
            createFade:function(){
                $('body').append('<div class="fade"></div>');
                $('.fade').fadeIn();

            },
            closeFade:function(){
                $('.fade').remove();
            }



    }
    var STMath={
       add:function(a, b) {
        var c, d, e;
        try {
            c = a.toString().split(".")[1].length;
        } catch (f) {
            c = 0;
        }
        try {
            d = b.toString().split(".")[1].length;
        } catch (f) {
            d = 0;
        }
        return e = Math.pow(10, Math.max(c, d)), (this.mul(a, e) + this.mul(b, e)) / e;
    },
   sub:function(a, b) {
        var c, d, e;
        try {
            c = a.toString().split(".")[1].length;
        } catch (f) {
            c = 0;
        }
        try {
            d = b.toString().split(".")[1].length;
        } catch (f) {
            d = 0;
        }
        return e = Math.pow(10, Math.max(c, d)), (this.mul(a, e) - this.mul(b, e)) / e;
    },
    mul:function(a, b) {
        var c = 0,
            d = a.toString(),
            e = b.toString();
        try {
            c += d.split(".")[1].length;
        } catch (f) {}
        try {
            c += e.split(".")[1].length;
        } catch (f) {}
        return Number(d.replace(".", "")) * Number(e.replace(".", "")) / Math.pow(10, c);
    },
    div: function(a, b){
        var c, d, e = 0,
            f = 0;
        try {
            e = a.toString().split(".")[1].length;
        } catch (g) {}
        try {
            f = b.toString().split(".")[1].length;
        } catch (g) {}
        return c = Number(a.toString().replace(".", "")), d = Number(b.toString().replace(".", "")), this.mul(c / d, Math.pow(10, f - e));
        }
    }
    ST.Util = Util;
    ST.Math = STMath;
    window.ST = ST;
})(jQuery)

//hover延迟插件

$.fn.hoverDelay = function(fnOver, fnOut,timeIn,timeOut) {

    var timeIn = timeIn || 200,
        timeOut = timeOut || 200,
        fnOut = fnOut || fnOver;

    var inTimer = [],outTimer=[];

    return this.each(function(i) {
        $(this).mouseenter(function() {
            var that = this;
            clearTimeout(outTimer[i]);
            inTimer[i] = setTimeout(function() {
                fnOver.apply(that);
            }, timeIn);
        }).mouseleave( function() {
                var that = this;
                clearTimeout(inTimer[i]);
                outTimer[i] = setTimeout(function() {
                    fnOut.apply(that)
                }, timeOut);
            });
    })
}
