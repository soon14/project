function arrayToJson(o) {
    var r = [];
    if (typeof o == "string") return "\"" + o.replace(/([\'\"\\])/g, "\\$1").replace(/(\n)/g, "\\n").replace(/(\r)/g, "\\r").replace(/(\t)/g, "\\t") + "\"";
    if (typeof o == "object") {
        if (!o.sort) {
            for (var i in o)
                r.push(i + ":" + arrayToJson(o[i]));
            if (!!document.all && !/^\n?function\s*toString\(\)\s*\{\n?\s*\[native code\]\n?\s*\}\n?\s*$/.test(o.toString)) {
                r.push("toString:" + o.toString.toString());
            }
            r = "{" + r.join() + "}";
        } else {
            for (var i = 0; i < o.length; i++) {
                r.push(arrayToJson(o[i]));
            }
            r = "[" + r.join() + "]";
        }
        return r;
    }
    return o.toString();
}
//这个是调用微信图片浏览器的函数
function imagePreview(curSrc, srcList) {
    if (!curSrc || !srcList || srcList.length == 0) {
        return;
    }

    WeixinJSBridge.invoke('imagePreview', {
        'current': curSrc,
        'urls': srcList
    });
};

function wx_slide(img_array) {

    var aa = [];
    var i = 0;
    var src = [];
    var json = null;
    aa =img_array;// $(".ctd-page-body").find('img');
    for (i = 0; i < aa.length; i++) {
        src[i] = aa[i].src;    //把所有的src存到数组里
    }
    var srcList = arrayToJson(src); //转换成json并赋值给srcList

    aa.each(function (index) {
        $(this).on('click', function () {
            imagePreview(this.src, srcList);
        })
    })
}

