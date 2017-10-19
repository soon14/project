<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title><?php echo $info['title'];?></title>
  <?php echo Common::css('index/bootstrap.css');?>
  <?php echo Common::css('index/public.css');?>
  <?php echo Common::css('ticket/mitao_v1_1.css,line/swiper.min.css');?>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Nv7ePdYOGgT28WZqsGZOeBuH"></script>
  <?php echo Common::js('mitao/jquery-1.11.3.min.js,mitao/mitao_v1_1.js,mitao/swiper.min.js');?>
    <?php echo Common::js('layer_mobile/layer.js');?>
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
        .sss .desc-code{
            padding: 10px 0px;
            text-align: center;
        }
        .sss .desc-code img{
            width: 70%;
        }
        .sss .desc-code-tip{
            height: 30px;
            line-height: 30px;
            text-align: center;
            font-size: 18px;
        }
        .sss .desc-tel{
            background: #8cc641;
            border-radius: 20px;
            margin: 10px auto;
            width: 60%;
            color: #FFF;
            display: block;
            font-size: 18px;
        }
    </style>
</head>
<body class="detailPage">
<!-- 产品详情页 头部 -->
<?php echo Request::factory("pub/header3/typeid/$typeid")->execute()->body(); ?>
<!-- 产品详情页 幻灯 -->
<div class="mt_banner">
  <div class="swiper-container swiper-container-horizontal">
    <div class="swiper-wrapper">
      <?php $n=1; if(is_array($info['piclist'])) { foreach($info['piclist'] as $pic) { ?>
      <div class="swiper-slide"><img src="<?php echo Common::img($pic['0']);?>"></div>
      <?php $n++;}unset($n); } ?>
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
    <?php if(empty($is_collect)) { ?>
<!--    <i class="ic_mark"></i>-->
 <?php } else { ?>
<!--    <i class="ic_mark ic_mark2"></i>-->
    <?php } ?>
</div>
<?php $time=time();
$endtime = strtotime($info['linedate1']['endtime']);
?>
<!-- 产品详情页 内容 -->
<section> 
  <!-- 产品标题展示 -->
  <div class="mt_title">
    <h2><?php echo $info['title'];?></h2>
    <p class="c9"><?php echo $info['sellpoint'];?></p>
    <p class="m_bot">
        <?php if($info['price']) { ?>
        <i class="money"><?php echo $info['price'];?></i>
         <?php if(count($ticketInfo)>1) { ?>
        <i class="dw">起</i>
        <?php } ?>
        <?php } ?>
        <?php if(count($ticketInfo)==1) { ?>
            <?php if($info['sellprice']) { ?>
              <del><?php echo $info['sellprice'];?>元</del>
            <?php } ?>
        <?php } ?>
        <i class="right red"><?php echo $info['sellnum'];?>人报名 |
            &nbsp;<?php if($info['stock']==-1) { ?>
           <span class="green">不限</span>
            <?php } else { ?> <span class="green">剩余<?php echo $info['stock'];?></span>
            <?php } ?>
        </i>
    </p>
  </div>
    <?php require_once ("/home/wwwroot/www.aitto.net/phone/taglib/detailcontent.php");$detailcontent_tag = new Taglib_Detailcontent();if (method_exists($detailcontent_tag, 'get_content')) {$spotcontent = $detailcontent_tag->get_content(array('action'=>'get_content','pc'=>'1','typeid'=>$typeid,'productinfo'=>$info,'return'=>'spotcontent',));}?>
  <!-- tag标签位 -->
  <div class="mt_tags mt10">
      <!--    <div class="ico botl ic_child"><i class="c9"><?php echo $info['childrule'];?></i></div>-->
    <div class="ico botl ic_time"><i class="c9">门票有效期：<?php echo $info['linedate1']['starttime'];?>~ <?php echo $info['linedate1']['endtime'];?></i></div>
    <div class="ico botl ic_time"><i class="c9">营业时间：<?php echo $extendinfo['e_business_time'];?> </i></div>
    <div class="ico botl ic_add"><i class="c9"><?php echo $info['address'];?></i></div>
    <div class="ico botl ic_tel">
        <?php if(empty($info['kefuphone'])) { ?>
        <i class="tel"><a href="tel:18630172332">18630172332</a></i>
        <i class="tel"><a href="tel:0311-87885822">0311-87885822</a></i>
        <?php } else { ?>
           <?php if($countPhone>1) { ?>
                 <?php $n=1; if(is_array($info['kefuphoneArr'])) { foreach($info['kefuphoneArr'] as $kefu) { ?>
                 <i class="tel"><a href="tel:<?php echo $kefu;?>"><?php echo $kefu;?></a></i>
                 <?php $n++;}unset($n); } ?>
           <?php } else { ?>
             <i class="tel"><a href="tel:<?php echo $info['kefuphone'];?>"><?php echo $info['kefuphone'];?></a></i>
           <?php } ?>
        <?php } ?>
    </div>
      <div class="ico ic_warn"> <i class="c9">购买须知</i>
          <?php echo $spotcontent['1']['content'];?>
      </div>
  </div>
    <div class="mt_product mt10">
        <?php $n=1; if(is_array($ticketInfo)) { foreach($ticketInfo as $tf) { ?>
        <div class="product_box">
            <p class="tit"><b><?php echo $tf['title'];?></b></p>
            <p class="price"><i class="money"><?php echo $tf['price'];?></i><del>&nbsp;&nbsp;&nbsp;<?php echo $tf['sellprice'];?></del><span><?php if($tf['paytype']==4) { ?>景区支付<?php } else { ?>在线支付<?php } ?>
</span></p>
            <?php if($time>$endtime) { ?>
            <?php } else { ?>
               <?php if($info['stock']>0) { ?>
               <a class="actbox_con" onclick="select_suit(this)" data-suitid="<?php echo $tf['id'];?>"><?php if($info['iconlist']==6) { ?>抢购<?php } else { ?>购买<?php } ?>
</a>
               <?php } else { ?>
                <?php if($info['stock']==-1) { ?>
                <a class="actbox_con" onclick="select_suit(this)" data-suitid="<?php echo $tf['id'];?>"><?php if($info['iconlist']==6) { ?>抢购<?php } else { ?>购买<?php } ?>
</a>
                <?php } else { ?>
                <a class="actbox_con" style="background:#ccc "><?php if($info['iconlist']==6) { ?>抢购完毕<?php } else { ?>库存不足<?php } ?>
</a>
                 <?php } ?>
            <?php } ?>
            <?php } ?>
        </div>
        <?php $n++;}unset($n); } ?>
    </div>
  <!-- 详情、评价、留言选项卡 -->
  <div class="mt_desc mt10 clearfix">
    <ul class="mt_desc_tabs clearfix" data-toggle="tab" data-target="mt_desc01" id="mt_desc2" data-spy="scrollNav" >
      <li class="active"><a href="javascript:void(0)">景区简介</a></li>
      <li class=""><a href="javascript:void(0)">交通指南</a></li>
      <li class=""><a href="javascript:void(0)">购买须知</a></li>
      <li class=""><a href="javascript:void(0)">用户点评</a></li>
    </ul>
    <div class="mt_desc_con" id="mt_desc01" data-spy="scrollCon">
        <div class="tab-pane  active">
            <div class="desc-Article">
                <?php echo $spotcontent['0']['content'];?>
            </div>
        </div>
        <div class="tab-pane">
            <div class="panel-bd" id="destmap" style="height: 300px">
            </div>
        </div>
        <div class="tab-pane" >
            <div class="desc-Article">
                <?php echo $spotcontent['1']['content'];?>
            </div>
        </div>
        <div class="tab-pane">
            <div class="desc-comment">
                <?php $comment=Model_Comment::get_comments($info['id'],5,"desc");?>
                <?php $allComment = count($comment);
                      $score =0;
                      foreach($comment as $k=>$v){
                            $score +=$v['score1'];
                      }
                 $scores=round($score/$allComment);
                ?>
               <div class="comment-score">整体评分<i class="score">
                       <?php if($scores=='1') { ?>
                       <i class="score_in" style="width:20%;"></i>
                       <?php } ?>
                       <?php if($scores=='2') { ?>
                       <i class="score_in" style="width:40%;"></i>
                       <?php } ?>
                       <?php if($scores=='3') { ?>
                       <i class="score_in" style="width:60%;"></i>
                       <?php } ?>
                       <?php if($scores=='4') { ?>
                       <i class="score_in" style="width:80%;"></i>
                       <?php } ?>
                       <?php if($scores=='5') { ?>
                       <i class="score_in" style="width:100%;"></i>
                       <?php } ?>
</i><?php if($scores) { ?><?php echo $scores;?>星<?php } ?>
</div>
                <!-- 评论 item 开始 -->
                <?php if(!empty($comment)) { ?>
                <?php $n=1; if(is_array($comment)) { foreach($comment as $v) { ?>
                <div class="com_item">
                    <div class="user-top clearfix">
                        <a href="javascript:;">
                            <img class="left user-img" src="<?php if($v['wx_imgurl']) { ?><?php echo $v['wx_imgurl'];?><?php } else { ?><?php echo Common::member_nopic();?><?php } ?>
">
                        </a>
                        <a href="javascript:;">
                            <i class="user-name">
                                <?php if($v['wx_nickname']) { ?>
                                <?php echo $v['wx_nickname'];?>
                                <i class="user-gender"></i>
                                <?php } ?>
                            </i>
                        </a>
                        <div class="right"><i class="score">
                                <?php if($v['score1']=='1.0') { ?>
                                <i class="score_in" style="width:20%;"></i>
                                <?php } ?>
                                <?php if($v['score1']=='2.0') { ?>
                                <i class="score_in" style="width:40%;"></i>
                                <?php } ?>
                                <?php if($v['score1']=='3.0') { ?>
                                <i class="score_in" style="width:60%;"></i>
                                <?php } ?>
                                <?php if($v['score1']=='4.0') { ?>
                                <i class="score_in" style="width:80%;"></i>
                                <?php } ?>
                                <?php if($v['score1']=='5.0') { ?>
                                <i class="score_in" style="width:100%;"></i>
                                <?php } ?>
                            </i></div>
                        <div class="com-data"><i class="c9"><?php echo date("Y-m-d",$v['addtime']) ?></i></div>
                    </div>
                    <div class="user-com">
                        <div class="com-desc">
                            <p><?php echo $v['content'];?></p>
                        </div>
                        <div class="com-imgs clearfix">
                            <?php if(!empty($v['piclist'])) { ?>
                            <?php $piclist = explode(",",$v['piclist'])?>
                            <?php $n=1; if(is_array($piclist)) { foreach($piclist as $ve) { ?>
                            <img src="<?php echo $ve;?>" >
                            <?php $n++;}unset($n); } ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php $n++;}unset($n); } ?>
                <?php } else { ?>
                <div style="height: 40px;"></div>
                <?php } ?>
                <!-- 评论 item 结束 -->
            </div>
        </div>
    </div>
  </div>
</section>
<!--隐藏域-->
<input type="hidden" name="suitid" id="suitid" class="suitid" value="0"/>
<input type="hidden" name="openidid" id="openid" value="<?php echo $openid;?>"/>
<!-- 底部预定按钮 -->
<footer>
  <div class="mt-botBtn">
    <i class="bot-btnl">
      <i class="icbtn ic-serve" style="width: 50%"><a href="javascript:;" style="color: black">客服</a></i>
      <i class="icbtn ic-share" style="width: 50%">分享</i>
    </i>
       <?php if($time>$endtime) { ?>
      <i class="btn-pay" style="background:#ccc ">报价已过期</i>
       <?php } else { ?>
         <?php if($info['stock']>0) { ?>
            <?php if(count($ticketInfo)>1) { ?>
            <i class="btn-pay order" data-id="<?php echo $info['id'];?>">立即购买</i>
            <?php } else { ?>
            <i class="btn-pay" data-suitid="<?php echo $ticketInfo['0']['id'];?>" onclick="select_suit(this)">立即购买</i>
            <?php } ?>
         <?php } else { ?>
            <i class="btn-pay" style="background:#ccc "><?php if($info['iconlist']==6) { ?>抢购完毕<?php } else { ?>库存不足<?php } ?>
</i>
         <?php } ?>
       <?php } ?>
  </div>
</footer>
<!-- 米淘页面 置顶按钮 -->
<script>
    var SITEURL = "<?php echo URL::site();?>";
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
                  content: '<?php $n=1; if(is_array($ticketInfo)) { foreach($ticketInfo as $tf) { ?>'+
                            '<a href="javascript:;" class="layui-btn" onclick="select_suit(this)" data-suitid="<?php echo $tf['id'];?>"><?php echo $tf['title'];?></a>'+
                           '<?php $n++;}unset($n); } ?>'
                  ,
                  anim: 'up',
                  style: 'position:fixed; bottom:0; left:0; width: 100%; height:auto; padding:0; border:none;background:#fff;',
              });
      })
    function select_suit(th){
        var suitid= $(th).attr('data-suitid');
        var typeid = "<?php echo $typeid;?>";
        var productid = "<?php echo $info['id'];?>";
        $("#suitid").val(suitid);
        if(suitid >0){
            $.ajax({
                type:'POST',
                data:{typeid:typeid,suitid:suitid,productid:productid,containdiv:'startdate'},
                url:SITEURL+'pub/ajax_calendar3',
                dataType:'html',
                success:function(data){
                    layer.open({
                        type: 1,
                        content: data,
                        // time:5,
                        style: 'width: 100%; height: 100%; border:none;overflow-y:auto',
                    });
                }
            });
        }else{
            layer.open({
                content: '请选择产品类型',
                skin: 'msg',
                style:"top:0px",
                time: 3 //2秒后自动关闭
            });
        }
    }
    //选择天数
    function choose_day(day,containdiv)
    {
        var productid = "<?php echo $info['id'];?>";
        var suitid    =$("#suitid").val();
        url = '/phone/spot/book/id/'+productid+"?day="+day+"&suitid="+suitid;
        window.location.href = url;
    }
    
    $(".ic-serve").click(function(){
        layer.open({
            type: 1,
            closeBtn: 0,
          //  time:4,
            style: 'color:#fff;',
            className: 'sss',
            area: '516px',
            skin: 'layui-layer-rim', //没有背景色
            shadeClose: true,
            content:' <div class="tab-pane"><div class="desc-code"><img src="/phone/public/images/mitao/code1.png"></div><p class="desc-code-tip">长按图片添加客服微信号</p><a href="tel:0311-87885822" class="btn desc-tel">0311-87885822</a><a href="tel:18630172332" class="btn desc-tel">18630172332</a></div>'
        });
    })
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
        var product="<?php echo $info['aid'];?>";
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
        var SpyNavTop = scrollSpy_nav.offset().top;
        function NavScrollCon() { //*菜单浮动 函数*//
            var scrollSpy_con = $('[data-spy="scrollCon"]');
            var SpyConHeight = scrollSpy_con.height();
            var SpyNavHide = SpyNavTop + SpyConHeight;
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
        aa = $("#mt_desc01").find('img');
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
        appId: '<?php echo $signPackage["appId"];?>',
        timestamp: "<?php echo $signPackage['timestamp'];?>",
        nonceStr: '<?php echo $signPackage["nonceStr"];?>',
        signature:'<?php echo $signPackage["signature"];?>',
        jsApiList:['onMenuShareTimeline','onMenuShareAppMessage']
        // 所有要调用的 API 都要加到这个列表中
    });
    wx.ready(function(){
        wx.onMenuShareTimeline({
            title: "<?php echo $info['title'];?>",// 111
            desc: "<?php echo $info['sellpoint'];?>", // 分享描述
            link: "http://www.aitto.net/phone/spots/show_<?php echo $info['aid'];?>.html", // ''
            imgUrl: "http://www.aitto.net<?php echo $info['piclist']['0']['0'];?>", // 分享图标
            success: function () {
            },
            cancel: function () {
                // 用户取消分享后执行的回调函数
            }
        });
        wx.onMenuShareAppMessage({
            title: "<?php echo $info['title'];?>",// 111
            desc: "<?php echo $info['sellpoint'];?>", // 分享描述
            link: "http://www.aitto.net/phone/spots/show_<?php echo $info['aid'];?>.html", // ''
            imgUrl: "http://www.aitto.net<?php echo $info['piclist']['0']['0'];?>", // 分享图标
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
<script type="text/javascript">
    var map = new BMap.Map("destmap");
    var point = new BMap.Point(<?php echo $info['lng'];?>,<?php echo $info['lat'];?>);
    map.centerAndZoom(point, 12);
    var marker = new BMap.Marker(point);
    map.addOverlay(marker);
    marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
    var opts = {
        width : 220,     // 信息窗口宽度
        height: 30,     // 信息窗口高度
        offset :new BMap.Size(-4,-13),
        title : ""  // 信息窗口标题
    }
    var img  = document.getElementsByName("img");
    var mcon ="<div style='margin-top: 6px'></div><span style='font-size:12px;color:#4D4D4D;'>景区地址：<?php echo $info['address'];?></span>";
    var infoWindow = new BMap.InfoWindow(mcon, opts);     // 创建信息窗口对象
    map.openInfoWindow(infoWindow, map.getCenter());      // 打开信息窗口
    //===========================================
    //自定义控件
    function ZoomControl(){
        this.defaultAnchor = BMAP_ANCHOR_TOP_LEFT;
        this.defaultOffset = new BMap.Size(10, 10);
    }
    ZoomControl.prototype = new BMap.Control();
    ZoomControl.prototype.initialize = function(map){
        var div = document.createElement("div");
        div.appendChild(document.createTextNode("放大2级"));
        div.style.cursor = "pointer";
        div.style.border = "1px solid gray";
        div.style.backgroundColor = "white";
        div.onclick = function(e){
            map.zoomTo(map.getZoom() + 2);
        }
        map.getContainer().appendChild(div);
        return div;
    }
    var myZoomCtrl = new ZoomControl();
    //===============================================
</script>
</body>
</html>
