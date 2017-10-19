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
    ST.Util = Util;
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
