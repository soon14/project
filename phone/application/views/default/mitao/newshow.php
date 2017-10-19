<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>{$info['title']}</title>
  {Common::css('mitao/bootstrap.css')}
  {Common::css('mitao/public.css')}
  {Common::css('mitao/mitao_v1_1.css,mitao/swiper.min.css')}
  {Common::js('mitao/jquery-1.11.3.min.js,mitao/mitao_v1_1.js,mitao/swiper.min.js')}
    {Common::js('layer_mobile/layer.js')}
    <style>

        .layui-btn{
            text-align: center;
            width: 100%;
            height: 40px;
            float: left;
            line-height: 40px;
        }
        .layui-m-layerchild h3{ height:40px; line-height:40px; background:#8bc53f; color:#fff; border-radius:0;}
        .layui-m-layerchild{
            background-color:transparent
        }
        .layui-m-layercont a{ border-bottom:1px solid #e1e1e1; background: url(/phone/public/images/mitao/ui-page-in.png) no-repeat right center;
            background-size: 15px;}
    </style>
</head>
<body class="detailPage">
<!-- 产品详情页 头部 -->
{request "pub/header2/typeid/$typeid"}

<!-- 产品详情页 幻灯 -->
<div class="mt_banner">
  <div class="swiper-container swiper-container-horizontal">
    <div class="swiper-wrapper">

      {loop $info['piclist'] $pic}
      <div class="swiper-slide"><img src="{Common::img($pic[0])}"></div>
      {/loop}

    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination picnum swiper-pagination-fraction"><span class="swiper-pagination-current">4</span> / <span class="swiper-pagination-total">10</span></div>
  </div>
  <script>
   $(document).ready(function() {
	  putToper();
	//  desc_tabs();
   });
  </script> 
  <script>
    var swiper = new Swiper('.swiper-container', {
		height: 300,//你的slide高度
        pagination: '.swiper-pagination',
        paginationType: 'fraction'
    });
  </script>

    {if empty($is_collect)}
<!--    <i class="ic_mark"></i>-->
 {else}
<!--    <i class="ic_mark ic_mark2"></i>-->
    {/if}

</div>
<!-- 产品详情页 内容 -->
<section>
    <?php $time=time();
    // 报价结束日期
    $endtime    = strtotime($info['linedate']['endtime1']);
    //  报名 截止日期
    $linebefore = $info['linebefore'];
    ?>
  <!-- 产品标题展示 -->
  <div class="mt_title">
    <h2>{$info['title']}</h2>
    <p class="c9">{$info['sellpoint']}</p>
    <p class="m_bot"><i class="money">{$info['price']}</i>
        <i class="dw">起</i>
        <i class="right red">{$info['sellnum']}人报名 |&nbsp;{if $info['stock']>0} <span class="green">剩余{$info['stock']}份</span>{else}<span class="green">不限</span>{/if}</i></p>
  </div>


  <!-- tag标签位 -->
  <div class="mt_tags mt10">
    <div class="ico botl ic_child"><i class="c9">{$info['childrule']}</i></div>
    <div class="ico botl ic_time"><i class="c9">活动时间：{$info['act_time']} </i></div>
    <div class="ico botl ic_add"><i class="c9">{$info['selfDriMdd']}</i></div>
    <div class="ico botl ic_tel">
        活动咨询：
        {if empty($info['kefuphone'])}
        <i class="tel"><a href="tel:183985475123">183985475123</a></i>
        <i class="tel"><a href="tel:0311-87885822">0311-87885822</a></i>
        {else}
           {if $countPhone>1}
                 {loop $info['kefuphoneArr'] $kefu}
                 <i class="tel"><a href="tel:{$kefu}">{$kefu}</a></i>
                 {/loop}
           {else}
             <i class="tel"><a href="tel:{$info['kefuphone']}">{$info['kefuphone']}</a></i>
           {/if}
        {/if}
    </div>
    <div class="ico ic_warn"> <i class="c9">活动说明</i>
      {$info['biaozhun']}
    </div>
  </div>
    <div class="mt_product mt10">
        {if count($ticketInfo)>1}
            {loop $ticketInfo $tf}
            <div class="product_box">
                <p class="tit"><b>{$tf['suitname']}</b></p>
                <p class="price"><i class="money">{$tf['price']}</i><span>{if $tf['paytype']==4}景区支付{else}在线支付{/if}</span></p>

                {if  $time>$endtime}

                {else}
                {if $tf['number']>0||$tf['number']=='-1'}
                <a class="actbox_con" onclick="select_suit(this)" data-suitid="{$tf['id']}">购买</a>
                {/if}
                {/if}

            </div>
            {/loop}
        {else}

            {loop $ticketInfo $tf}
            {if $tf['lastoffer']['adultprice']}
            <div class="product_box">
                <p class="tit"><b>成人票</b></p>
                <p class="price"><i class="money">{$tf['lastoffer']['adultprice']}</i><span>{if $tf['paytype']==4}景区支付{else}在线支付{/if}</span></p>

                {if  $time>$endtime}

                {else}
                {if $tf['number']>0||$tf['number']=='-1'}
                <a class="actbox_con" onclick="select_suit(this)" data-suitid="{$tf['id']}">购买</a>
                {/if}
                {/if}
            </div>
             {/if}
          <!----------儿童票----------------->
            {if $tf['lastoffer']['childprice']}
            <div class="product_box">
                <p class="tit"><b>儿童票</b></p>
                <p class="price"><i class="money">{$tf['lastoffer']['childprice']}</i><span>{if $tf['paytype']==4}景区支付{else}在线支付{/if}</span></p>

                {if  $time>$endtime}

                {else}
                {if $tf['number']>0||$tf['number']=='-1'}
                <a class="actbox_con" onclick="select_suit(this)" data-suitid="{$tf['id']}">购买</a>
                {/if}
                {/if}
            </div>
            {/if}
           <!-----------老人票-------------->
            {if $tf['lastoffer']['oldprice']}
            <div class="product_box">
                <p class="tit"><b>老人票</b></p>
                <p class="price"><i class="money">{$tf['lastoffer']['oldprice']}</i><span>{if $tf['paytype']==4}景区支付{else}在线支付{/if}</span></p>

                {if  $time>$endtime}

                {else}
                {if $tf['number']>0||$tf['number']=='-1'}
                <a class="actbox_con" onclick="select_suit(this)" data-suitid="{$tf['id']}">购买</a>
                {/if}
                {/if}
            </div>
            {/if}
            {/loop}
        {/if}
    </div>
  <!-- 详情、评价、留言选项卡 -->
  <div class="mt_desc mt10 clearfix">
    <ul class="mt_desc_tabs clearfix" data-toggle="tab" data-target="mt_desc01" id="mt_desc2" data-spy="scrollNav" >
      <li class="active"><a href="javascript:void(0)">详情</a></li>
      <li class=""><a href="javascript:void(0)">评价({$info['commentnum']})</a></li>
      <li class=""><a href="javascript:void(0)">客服咨询</a></li>
    </ul>
    <div class="mt_desc_con" id="mt_desc01" data-spy="scrollCon">
      <div class="tab-pane active">
        <div class="desc-Article">
              {$info['features']}
         </div>
        <?php $arr=array(0=>"取消条款",1=>"免责申明")?>
        {st:detailcontent action="get_content" typeid="106" productinfo="$info"}
           {loop $data $row}
            <?php if(in_array($row['chinesename'],$arr)){?>

              <div class="bgf topl botl mt10">
                <div class="mt-module-title">
                  <div class="place"></div>
                  <h1>{$row['chinesename']}</h1>
                </div>
                <div class="disclaimer">
                    {$row['content']}
                 </div>
              </div>

            <?php }?>
           {/loop}
        {/st}

      </div>
      <div class="tab-pane">
        <div class="desc-comment">

<!--          <div class="comment-score">整体评分<i class="score"><i class="score_in" style="width:50%;"></i></i>5</div>-->
          <!-- 评论 item 开始 -->
            <?php $comment=Model_Comment::get_comments($info['id'],106,"desc");?>
            <?php //var_dump($comment);?>
         {if !empty($comment)}
         {loop $comment $v}
          <div class="com_item">
            <div class="user-top clearfix">
                <a href="javascript:;">
                    <img class="left user-img" src="{$v['wx_imgurl']}">
                </a>
                <a href="javascript:;">
                    <i class="user-name">{$v['wx_nickname']}
<!--                        <i class="user-gender"></i>-->
                    </i></a>
              <div class="right"><i class="score">

                      {if $v['score1']=='1.0'}
                      <i class="score_in" style="width:20%;"></i>
                      {/if}
                      {if $v['score1']=='2.0'}
                      <i class="score_in" style="width:40%;"></i>
                      {/if}
                      {if $v['score1']=='3.0'}
                      <i class="score_in" style="width:60%;"></i>
                      {/if}
                      {if $v['score1']=='4.0'}
                      <i class="score_in" style="width:80%;"></i>
                      {/if}
                      {if $v['score1']=='5.0'}
                      <i class="score_in" style="width:100%;"></i>
                      {/if}

                  </i></div>
              <div class="com-data"><i class="c9"><?php echo date("Y-m-d",$v['addtime']) ?></i></div>
            </div>
            <div class="user-com">
              <div class="com-desc">
                <p>{$v['content']}</p>
              </div>
              <div class="com-imgs clearfix">
                   {if !empty($v['piclist'])}
                      <?php $piclist = explode(",",$v['piclist'])?>
                  {loop $piclist $ve}
                  <img src="{$ve}" >
                 {/loop}
                {/if}
              </div>
            </div>
          </div>
          {/loop}
         {else}
             <div style="height: 40px;"></div>
         {/if}
          <!-- 评论 item 结束 -->
        </div>
      </div>
      <div class="tab-pane" >
         <a name="kefu"></a>
        <div class="desc-code"><img src="/phone/public/images/mitao/code1.png"></div>
        <p class="desc-code-tip">长按图片添加客服微信号</p>
        <a href="tel:0311-87885822" class="btn desc-tel">0311-87885822</a>
        <a href="tel:18630172332" class="btn desc-tel">18630172332</a>
      </div>
    </div>
  </div>
</section>

<!--隐藏域-->

<input type="hidden" name="suitid" id="suitid" class="suitid" value="0"/>

<input type="hidden" name="openidid" id="openid" value="{$openid}"/>
<!-- 底部预定按钮 -->
<footer>
  <div class="mt-botBtn">
    <i class="bot-btnl">
      <i class="icbtn ic-serve"><a href="#kefu" style="color: black">客服</a></i>
      <i class="icbtn ic-share">分享</i>
    </i>

       {if  $time>$endtime}
        <i class="btn-pay" style="background:#ccc ">已过期</i>
       {else}
             {if $time>$linebefore}
             <i class="btn-pay" data-id="{$info['id']}">报名已截止</i>
             {else}

                {if count($ticketInfo)>1}
                 <i class="btn-pay order" data-id="{$info['id']}" >立即购买</i>
                {else}
                  <i class="btn-pay" data-suitid="{$ticketInfo[0]['id']}" onclick="select_suit(this)">立即购买</i>
                {/if}
             {/if}
      {/if}
  </div>
</footer>
<!-- 米淘页面 置顶按钮 -->

<script>
    var SITEURL = "{URL::site()}";
    $(".ic-serve").click(function(){
        $("#mt_desc2").find("li").removeClass("active").eq(2).addClass("active");
        $("#mt_desc01 .tab-pane").removeClass("active").eq(2).addClass("active");
    })
  //预订按钮
  $('.order').click(function(){
              //页面层
              layer.open({
                  type: 1,
                  title:['选择套餐'],
                  className: 'layui-btn',
                  content: '{st:mitao action="suit" productid="$info['id']"}'+
                           '{loop $data $r}'+
                            '<a href="javascript:;" class="layui-btn" onclick="select_suit(this)" data-suitid="{$r['id']}">{$r['title']}</a>'+
                           '{/loop}'+
                           '{/st}'
                  ,
                  anim: 'up',
                  style: 'position:fixed; bottom:0; left:0; width: 100%; height:auto; padding:0; border:none;background:#fff;',
              });
      })

    function select_suit(th){
        var suitid= $(th).attr('data-suitid');
        var typeid = "{$typeid}";
        var productid = "{$info['id']}";
        $("#suitid").val(suitid);
        if(suitid > 0){
            $.ajax({
                type:'POST',
                data:{typeid:typeid,suitid:suitid,productid:productid,containdiv:'startdate'},
                url:SITEURL+'pub/ajax_calendar2',
                dataType:'html',
                success:function(data){
                    layer.open({
                        type: 1,
                        content: data,
                        // time:5,
                        style: 'width: 100%; height: 100%; border:none;',
                    });
                }
            });
        }else{
            layer.open({
                content: '请选择产品类型',
                btn: ['{__("OK")}']
            });
        }
    }


    //选择天数
    function choose_day(day,containdiv)
    {
        var productid = "{$info['id']}";
        var suitid    =$("#suitid").val();
        url = '/phone/mitao/book/id/'+productid+"?day="+day+"&suitid="+suitid;
        window.location.href = url;
    }
    $(".ic-share").click(function(){
        layer.open({
            type: 1,
            closeBtn: 0,
            time:4,
           // style: 'border:none; background-color:#fff; color:#fff;padding:15px',
            area: '516px',
            skin: 'layui-layer-rim', //没有背景色
            shadeClose: true,
            content:'<img src="/phone/public/images/mitao/share.png" onclick="layer.closeAll()">'
        });
    })


    $(".ic_mark").click(function () {
        var openid = $("#openid").val();
        var typeid =106;
        var product="{$info['aid']}";

        $.ajax({
            type:'POST',
            data:{openid:openid,productid:product},
            url:SITEURL+'mitao/like',
            dataType:'json',
            success:function(data){
                if(data.status==1){
                    $(".ic_mark").addClass('ic_mark2');
                }else{
                    $(".ic_mark").removeClass('ic_mark2');
                }
                layer.open({
                    content: data.msg
                    ,skin: 'msg'
                    ,time: 3 //2秒后自动关闭
                });

            }
        });
    })

    /* ========================================================================
     导航/内容 监听
     * ======================================================================== */
    $(document).ready(function() {
        //try {
        var scrollSpy_nav = $('[data-spy="scrollNav"]');
        var scrollSpy_con = $('[data-spy="scrollCon"]');
        var SpyNavTop = scrollSpy_nav.offset().top;
        var SpyConHeight = scrollSpy_con.height();
        var SpyNavHide = SpyNavTop + SpyConHeight

        function NavScrollCon() { //*菜单浮动 函数*//
            if ($(document).scrollTop() > SpyNavTop && $(document).scrollTop() < SpyNavHide) {
                scrollSpy_nav.addClass("navFixed");
            } else {
                scrollSpy_nav.removeClass("navFixed");
            }
        }
        // 浮动置顶 函数调用
        // ===============
        $(window).scroll(function () {
            NavScrollCon();

        });
        //}catch(e){
        //     console.log(e);
        //}
    });
</script>

<script>
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

    (function ($) {

        var aa = [];
        var i = 0;
        var src = [];
        var json = null;
        aa = $(".tab-pane").eq(0).find('img');
        for (i = 0; i < aa.length; i++) {
            src[i] = aa[i].src;    //把所有的src存到数组里
        }
        var srcList = arrayToJson(src); //转换成json并赋值给srcList

        aa.each(function (index) {
            $(this).on('click',function(){
                imagePreview(this.src, srcList);
            })
        })


    })(jQuery);
</script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
<script >
    wx.config({
        debug:false,
        appId: '{$signPackage["appId"]}',
        timestamp: "{$signPackage['timestamp']}",
        nonceStr: '{$signPackage["nonceStr"]}',
        signature:'{$signPackage["signature"]}',
        jsApiList:['onMenuShareTimeline','onMenuShareAppMessage']
        // 所有要调用的 API 都要加到这个列表中
    });
    wx.ready(function(){
        wx.onMenuShareTimeline({
            title: "{$info['title']}",// 111
            desc: "{$info['sellpoint']}", // 分享描述
            link: "http://www.aitto.net/phone/mitaos/show_{$info['aid']}.html", // ''
            imgUrl: "http://www.aitto.net{$info['piclist'][0][0]}", // 分享图标
            success: function () {

            },
            cancel: function () {
                // 用户取消分享后执行的回调函数

            }
        });
        wx.onMenuShareAppMessage({
            title: "{$info['title']}",// 111
            desc: "{$info['sellpoint']}", // 分享描述
            link: "http://www.aitto.net/phone/mitaos/show_{$info['aid']}.html", // ''
            imgUrl: "http://www.aitto.net{$info['piclist'][0][0]}", // 分享图标
            type: 'link', // 分享类型,music、video或link，不填默认为link
            dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
            success: function () {
                // 用户确认分享后执行的回调函数

            },
            cancel: function () {
                // 用户取消分享后执行的回调函数

            }
        });


    })
    wx.error(function(res){

        // config信息验证失败会执行error函数，如签名过期导致验证失败，具体错误信息可以打开config的debug模式查看，也可以在返回的res参数中查看，对于SPA可以在这里更新签名。
        console.log(res);
    });
</script>
</body>
</html>
