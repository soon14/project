function loginInfo_getAccountInfo(a) {
    if (a.userId) {
        loginInfo.data.userName = a.uniqName ? a.uniqName: a.userId;
        var b = {
            path: "/",
            domain: ".xiaomi.com"
        };
        xmCookie("XM_" + loginInfo.data.userid + "_UN", loginInfo.data.userName, b),
            loginInfo.upUserInfo()
    }
}
function hoverShow(a) {
    var b = null,
        c = {
            hoverObj: $(".J_hoverTrigger"),
            showObj: $(".J_showObj"),
            speed: 300,
            onover: function() {},
            onout: function() {}
        };
    $.extend(!0, c, a),
        c.hoverObj.hover(function() {
                "function" == typeof c.onover && c.onover(c.hoverObj, c.showObj),
                    c.showObj.show(),
                    b && clearTimeout(b)
            },
            function() {
                b = setTimeout(function() {
                        c.showObj.hide(),
                            "function" == typeof c.onout && c.onout(c.hoverObj, c.showObj)
                    },
                    c.speed)
            }),
        c.showObj.hover(function() {
                clearTimeout(b)
            },
            function() {
                c.showObj.hide(),
                    "function" == typeof c.onout && c.onout(c.hoverObj, c.showObj)
            })
}
function getQueryString(a) {
    var b = new RegExp("(^|&)" + a + "=([^&]*)(&|$)", "i"),
        c = window.location.search.substr(1).match(b);
    return null !== c ? unescape(c[2]) : null
}
function Slide(a) {
    var b = null,
        c = function() {},
        d = 0,
        e = {
            obj: $(".J_slide"),
            autoPlay: !1,
            btnPrve: $(".J_btnPrve"),
            btnNext: $(".J_btnNext"),
            speed: 5e3
        };
    $.extend(!0, e, a),
        e.con = e.obj.children(".J_slideCon"),
        e.item = e.con.find(".item"),
        e.len = e.item.length,
        e.nav = e.obj.children(".J_slideNav"),
        e.btnPrve.on("click",
            function() {
                d -= 1,
                    0 > d && (d = e.len - 1),
                    c(d)
            }),
        e.btnNext.on("click",
            function() {
                d += 1,
                    d >= e.len && (d = 0),
                    c(d)
            }),
        c = function(a) {
            e.item.eq(a).fadeIn(300).siblings().fadeOut(300),
                e.nav.children(".item").eq(a).addClass("on").siblings().removeClass("on")
        },
        e.autoPlay === !0 && (b = setInterval(function() {
                d += 1,
                    d >= e.len && (d = 0),
                    c(d)
            },
            e.speed)),
        c(d)
}
function choosePro() {
    $("#proNav").on("click", ".item",
        function() {
            var a = $(this).attr("data-pro"),
                b = ["mitv", "note", "hm1s", "miwifi", "miboxs", "mi3", "mipad", "mi4"];
            return - 1 === $.inArray(a, b) ? !1 : ($(this).addClass("current").siblings().removeClass("current"), $("#J_content").children(".item-" + a).show().siblings().hide(), $("#J_goodsDetail").find(".item-" + a).show().siblings().hide(), void("mitv" === a ? $(".tv-service").show() : $(".tv-service").hide()))
        })
}
var openBuyHome = {
        config: {
            startTime: new Date("2014/7/29 12:00:00").getTime() / 1e3,
            siteDomain: ".mi.com",
            preLogMin: 3600,
            preResetMin: 600,
            changeResetTime: !1,
            hdstatus: 1,
            hdDate: "7月29日",
            nextDate: "8月5日",
            urls: {
                getTime: "http://tp.hd.mi.com/gettimestamp?_=" + (new Date).getTime(),
                hdinfo: "http://tp.hd.mi.com/hdinfo/cn?_=" + (new Date).getTime(),
                pay: "http://order.mi.com/cart",
                phonePay: "buySucc.html?pro=",
                rule: "http://bbs.xiaomi.cn/thread-10375159-1-1.html",
                choosePhone: "choosePhone.html",
                choosePro: "choosePro.html?pro=",
                login: "http://s1.mi.com/zt/xm_account/limitfacade.html?third=http%253A%252F%252Forder.mi.com%252Flogin%252Fcallback%253Ffollowup%253Dhttp%25253A%25252F%25252Fs1.mi.com%25252Fopen%25252Findex.html%2526sign%253DNjEzYmU3ZTJkOWRlY2FiZDQ5NDEwNzEyZjNiMjg0NDA0MGYxYWY3Mg%252C%252C%26sid%3Dmi_eshop&sid=mi_eshop&callback=http%253A%252F%252Forder.mi.com%252Flogin%252Fcallback%253Ffollowup%253Dhttp%25253A%25252F%25252Fs1.mi.com%25252Fopen%25252Findex.html%2526sign%253DNjEzYmU3ZTJkOWRlY2FiZDQ5NDEwNzEyZjNiMjg0NDA0MGYxYWY3Mg%252C%252C&sign=dK3nqW%252FKhFM3Tl7Jyt9%252FGt3jOI8%253D"
            },
            productInfo: {
                hongmi: {
                    sku: ["2141600006", "2142300024", "2142300025", "2140700031", "2141800004"],
                    status: 1
                },
                note: {
                    sku: ["2141800008"],
                    status: 1
                },
                miboxs: {
                    sku: ["2141800011"],
                    status: 1
                },
                mitv: {
                    sku: ["1142000007"],
                    status: 1
                },
                mipad: {
                    sku: ["2142300001", "2142700020", "2142700019"],
                    status: 1
                },
                mi4: {
                    sku: ["2143000004"],
                    status: 1
                }
            },
            cookies: {
                app: "orgin",
                over: "XM_Hd_Stop",
                isStart: "XM_Hd_Start",
                buySucc_1: "XM_Buy_Succ_MI4",
                buySucc_2: "XM_Buy_Succ_MINOTE",
                buySucc_3: "XM_Buy_Succ_mipad",
                buySucc_4: "XM_Buy_Succ_MIRED1S",
                buySucc_5: "XM_Buy_Succ_miboxs",
                buySucc_6: "XM_Buy_Succ_mitv",
                userid: "userId"
            },
            bookCheck: [{
                txt: "小米手机预约查询",
                url: "http://a.hd.mi.com/product/book/a/75"
            },
                {
                    txt: "小米电视预约查询",
                    url: "http://a.hd.mi.com/product/book/a/73"
                },
                {
                    txt: "小米平板预约查询",
                    url: "http://a.hd.mi.com/product/book/a/74"
                },
                {
                    txt: "小米盒子预约查询",
                    url: "http://a.hd.mi.com/product/book/a/74"
                }]
        },
        init: function() {
            var a = this;
            if ("undefined" != typeof CNOVER && CNOVER === !0) return a.config.hdstatus = 0,
                a.checkStatus(),
                !1;
            xmCookie(a.config.cookies.isStart) ? a.getHdInfo() : a.getTimestamp(),
                $(".J_title").html(a.config.hdDate + "星期二 中午12点开放购买");
            for (var b = 0; b < a.config.bookCheck.length; b += 1) $(".J_dropMenu").append('<a href="' + a.config.bookCheck[b].url + '" target="_blank">' + a.config.bookCheck[b].txt + "</a>");
            $("#J_ruleLink").attr("href", a.config.urls.rule)
        },
        getTimestamp: function() {
            var a = this;
            $.ajax({
                type: "GET",
                url: a.config.urls.getTime,
                dataType: "jsonp",
                error: function() {},
                success: function() {}
            }),
                window.listenServerTime = setInterval(function() {
                        "undefined" != typeof servertime && servertime && (a.checkTime(), clearInterval(window.listenServerTime), clearTimeout(window.listenTimeout))
                    },
                    500),
                window.listenTimeout = setTimeout(function() {
                        clearInterval(window.listenServerTime),
                            a.getTimestampError()
                    },
                    5e3)
        },
        getTimestampError: function() {
            var a = (new Date).getTime() / 1e3;
            servertime = a,
                this.checkTime()
        },
        checkTime: function() {
            if (servertime < this.config.startTime) {
                var a = servertime + 3600 * (8 - (new Date).getTimezoneOffset() / 60 * -1);
                servertime = a,
                    this.countDown();
                var b = this;
                window.countDownTimer && clearInterval(window.countDownTimer),
                    window.countDownTimer = setInterval(function() {
                            b.countDown()
                        },
                        1e3)
            } else this.setCookie(this.config.cookies.isStart, "1"),
                this.getHdInfo()
        },
        countDown: function() {
            var a = this,
                b = a.config.startTime;
            if (surplusTime = b - servertime, surplusTime >= 0) {
                var c = Math.floor(surplusTime % 60),
                    d = Math.floor(surplusTime / 60 % 60),
                    e = Math.floor(surplusTime / 3600 % 24),
                    f = Math.floor(surplusTime / 86400 % 30);
                f > 0 && (e += 24 * f),
                    servertime++;
                var g = [c.toString(), d.toString(), e.toString(), f.toString()],
                    h = "距活动开始还剩<ins>" + g[2] + "</ins>小时<ins>" + g[1] + "</ins>分<ins>" + g[0] + "</ins></span>秒";
                0 === e && (a.listenCountDown(), h = "距活动开始还剩<span><ins>" + g[1] + "</ins>分<ins>" + g[0] + "</ins></span>秒", 0 === d && (h = "距活动开始还剩<span><ins>" + g[0] + "</ins></span>秒")),
                    $(".J_countdown").html(h)
            } else a.timeUp()
        },
        listenCountDown: function() {
            var a = this,
                b = a.config.startTime - a.config.preLogMin,
                c = a.config.startTime - a.config.preResetMin;
            return servertime >= b && !xmCookie(a.config.cookies.userid) ? ($(".J_btnWrap").html('<a class="btn btn-primary" href="' + a.config.urls.login + '" title="提前登录" >提前登录</a>'), clearInterval(window.countDownTimer), !1) : void(servertime >= c && (a.config.changeResetTime || (window.resetTime && clearInterval(window.resetTime), window.resetTime = setInterval(function() {
                    a.getTimestamp()
                },
                12e4), a.config.changeResetTime = !0)))
        },
        timeUp: function() {
            clearInterval(window.countDownTimer),
                clearInterval(window.resetTime),
                this.setCookie(this.config.cookies.isStart, "1"),
                $(".J_countdown").html("正在加载..."),
                this.checkStatus()
        },
        getHdInfo: function() {
            var a = this;
            $.ajax({
                type: "GET",
                url: a.config.urls.hdinfo,
                dataType: "jsonp",
                jsonp: "jsonpcallback",
                jsonpCallback: "hdinfo",
                timeout: 1e4,
                error: function() {
                    a.getInfoError()
                },
                success: function(b) {
                    b && a.checkInfoData(b.status)
                }
            })
        },
        getInfoError: function() {
            this.checkStatus()
        },
        checkInfoData: function(a) {
            var b, c = !0,
                d = this;
            for (var e in d.config.productInfo) {
                b = !0;
                for (var f = 0; f < d.config.productInfo[e].sku.length; f += 1) a[d.config.productInfo[e].sku[f]] || (a[d.config.productInfo[e].sku[f]] = {},
                    a[d.config.productInfo[e].sku[f]].hdstart = !1, a[d.config.productInfo[e].sku[f]].hdstop = !0),
                    a[d.config.productInfo[e].sku[f]].hdstart === !0 && a[d.config.productInfo[e].sku[f]].hdstop === !1 && (b = !1);
                b === !0 ? d.config.productInfo[e].status = 0 : (d.config.productInfo[e].status = 1, c = !1)
            }
            d.config.hdstatus = c === !0 ? 0 : 1,
                d.checkStatus()
        },
        checkStatus: function() {
            var a = !1;
            xmCookie(this.config.cookies.buySucc_1) && xmCookie(this.config.cookies.buySucc_4) ? a = this.config.urls.pay: xmCookie(this.config.cookies.buySucc_4) ? a = this.config.urls.phonePay + xmCookie(this.config.cookies.buySucc_4) : xmCookie(this.config.cookies.buySucc_1) && (a = this.config.urls.phonePay + xmCookie(this.config.cookies.buySucc_1));
            var b = {
                    hongmi: {
                        buy: '<a href="' + this.config.urls.choosePhone + '" class="btn btn-primary">立即购买</a>',
                        over: xmCookie(this.config.cookies.buySucc_4) ? '<a href="' + this.config.urls.phonePay + xmCookie(this.config.cookies.buySucc_4) + '" class="btn btn-primary">立即支付</a>': '<span class="btn btn-disabled">已售罄</span>'
                    },
                    note: {
                        buy: '<a href="' + this.config.urls.choosePhone + '" class="btn btn-primary">立即购买</a>',
                        over: xmCookie(this.config.cookies.buySucc_2) ? '<a href="' + this.config.urls.phonePay + xmCookie(this.config.cookies.buySucc_2) + '" class="btn btn-primary">立即支付</a>': '<span class="btn btn-disabled">已售罄</span>'
                    },
                    mipad: {
                        buy: '<a href="' + this.config.urls.choosePro + 'mipad" class="btn btn-primary">立即购买</a>',
                        over: xmCookie(this.config.cookies.buySucc_3) ? '<a href="' + this.config.urls.pay + '" class="btn btn-primary">立即支付</a>': '<span class="btn btn-disabled">已售罄</span>'
                    },
                    miboxs: {
                        buy: '<a href="' + this.config.urls.choosePro + 'miboxs" class="btn btn-primary">立即购买</a>',
                        over: xmCookie(this.config.cookies.buySucc_5) ? '<a href="' + this.config.urls.pay + '" class="btn btn-primary">立即支付</a>': '<span class="btn btn-disabled">已售罄</span>'
                    },
                    mitv: {
                        buy: '<a href="' + this.config.urls.choosePro + 'mitv" class="btn btn-primary">立即购买</a>',
                        over: xmCookie(this.config.cookies.buySucc_6) ? '<a href="' + this.config.urls.pay + '" class="btn btn-primary">立即支付</a>': '<span class="btn btn-disabled">已售罄</span>'
                    },
                    mi4: {
                        buy: '<a href="' + this.config.urls.choosePhone + '" class="btn btn-primary">立即购买</a>',
                        over: xmCookie(this.config.cookies.buySucc_1) ? '<a href="' + this.config.urls.phonePay + xmCookie(this.config.cookies.buySucc_1) + '" class="btn btn-primary">立即支付</a>': '<span class="btn btn-disabled">已售罄</span>'
                    }
                },
                c = ({
                    pmOver: "",
                    over: "本次开放购买已结束，下轮开放购买" + this.config.nextDate + "周二中午12点"
                },
                {
                    start: "成功购买用户请在2小时内下单，下单后2小时内支付",
                    over: "成功购买用户请在2小时内下单，下单后2小时内支付"
                });
            0 === this.config.hdstatus ? ($("#booklink").hide(), $(".J_hdMsg").html(c.over)) : $(".J_hdMsg").html(c.start);
            for (var d in this.config.productInfo) {
                var e = $(".J_btnWrap-" + d);
                1 === this.config.productInfo[d].status ? e.html(b[d].buy) : 0 === this.config.productInfo[d].status && (e.html(b[d].over), $(".J_proBar-" + d).find(".txt").html("已售罄"))
            }
        },
        setCookie: function(a, b, c) {
            var d = {
                path: "/",
                domain: this.config.siteDomain,
                expires: 1
            };
            $.extend(d, c),
                xmCookie(a, b, d)
        }
    },
    loginInfo = {
        data: {
            userId: 0,
            userName: ""
        },
        init: function() {
            if (this.data.userId = xmCookie(openBuyHome.config.cookies.userid), !this.data.userId) return ! 1;
            if (this.data.userName = this.data.userId ? xmCookie("XM_" + this.data.userId + "_UN") : "", null == this.data.userName || "" == this.data.userName) {
                var a = document.createElement("script");
                a.src = "https://account.xiaomi.com/pass/userInfoJsonP?userId=" + this.data.userId + "&callback=loginInfo_getAccountInfo",
                    a.type = "text/javascript",
                    a.async = !0,
                    document.getElementsByTagName("head")[0].appendChild(a)
            } else this.upUserInfo()
        },
        upUserInfo: function() {
            var a = this.data.userName;
            $("#LoginArea") && $("#LoginArea").html("欢迎你！ " + a + "！<a href='http://order.mi.com/site/logout'>退出</a>")
        },
        getAccountInfo: function(a) {
            if (a.userId) {
                this.data.userName = a.uniqName ? a.uniqName: a.userId;
                var b = {
                    path: "/",
                    domain: ".xiaomi.com"
                };
                xmCookie("XM_" + this.data.userid + "_UN", this.data.userName, b),
                    this.upUserInfo()
            }
        }
    },
    xmCookie = function(a, b, c) {
        if (arguments.length > 1 && "[object Object]" !== String(b)) {
            if (c = jQuery.extend({},
                c), (null === b || void 0 === b) && (c.expires = -1), "number" == typeof c.expires) {
                var d = c.expires,
                    e = c.expires = new Date;
                e.setDate(e.getDate() + d)
            }
            return b = String(b),
                document.cookie = [encodeURIComponent(a), "=", c.raw ? b: encodeURIComponent(b), c.expires ? "; expires=" + c.expires.toUTCString() : "", c.path ? "; path=" + c.path: "", c.domain ? "; domain=" + c.domain: "", c.secure ? "; secure": ""].join("")
        }
        c = b || {};
        var f, g = c.raw ?
            function(a) {
                return a
            }: decodeURIComponent;
        return (f = new RegExp("(?:^|; )" + encodeURIComponent(a) + "=([^;]*)").exec(document.cookie)) ? g(f[1]) : null
    };
$(document).ready(function() {
    $(window).scrollTop(0),
        openBuyHome.init(),
        loginInfo.init(),
        choosePro(),
        hoverShow({
            hoverObj: $(".J_dropTrigger"),
            showObj: $(".J_dropMenu"),
            onover: function(a) {
                a.addClass("on")
            },
            onout: function(a) {
                a.removeClass("on")
            }
        }),
        Slide({});
    var a = getQueryString("pro");
    a && $("#proNav").children('.item[data-pro="' + a + '"]').trigger("click");
    var b = $('<iframe src="http://hd.account.xiaomi.com/lmt/limit-for-account.html" height="0" width="0" frameborder="0" class="hide"></iframe>');
    $(".wrap").before(b)
});/**
 * Created by Administrator on 14-7-29.
 */
