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
    <style>
        .layui-btn{
            text-align: center;
            width: 100%;
            height: 40px;
            float: left;
            line-height: 40px;
        }
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
  <!-- 产品标题展示 -->
  <div class="mt_title">
    <h2>{$info['title']}</h2>
    <p class="c9">{$info['sellpoint']}</p>
    <p class="m_bot"><i class="money">{$info['price']}</i><i class="dw">起</i><i class="right red">已售{$info['sellnum']}份 |&nbsp;{if $info['stock']>0} <span class="green">剩余{$info['stock']}份</span>{else}<span class="green">不限</span>{/if}</i></p>
  </div>
  <!-- tag标签位 -->
  <div class="mt_tags mt10">
    <div class="ico botl ic_child"><i class="c9">{$info['childrule']}</i></div>
    <div class="ico botl ic_time"><i class="c9">{$info['act_time']} </i></div>
    <div class="ico botl ic_add"><i class="c9">{$info['selfDriMdd']}</i></div>
    <div class="ico botl ic_tel">

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
{st:mitao action="suit" productid="$info['id']"}
{loop $data $r}
<input type="hidden" name="suitid" id="suitid" class="suitid" value="{$r['id']}"/>
{/loop}
{/st}
<input type="hidden" name="openidid" id="openid" value="{$openid}"/>
<!-- 底部预定按钮 -->
<footer>
  <div class="mt-botBtn">
    <i class="bot-btnl">
      <i class="icbtn ic-serve"><a href="#kefu" style="color: black">客服</a></i>
      <i class="icbtn ic-share">分享</i>
    </i>
      <?php $time=time();
            $endtime = strtotime($info['linedate']['endtime1']);
      ?>
       {if  $time>$endtime}
      <i class="btn-pay" style="background:#ccc ">已过期</i>
       {else}
        <i class="btn-pay order" data-id="{$info['id']}" onclick="select_suit()">立即购买</i>
       {/if}
  </div>
</footer>
<!-- 米淘页面 置顶按钮 -->
{Common::js('layer_mobile/layer.js')}
<script>
    var SITEURL = "{URL::site()}";
    $(".ic-serve").click(function(){
        $("#mt_desc2").find("li").removeClass("active").eq(2).addClass("active");
        $("#mt_desc01 .tab-pane").removeClass("active").eq(2).addClass("active");
    })
  //预订按钮
  $('.order111').click(function(){
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
                  style: 'position:fixed; bottom:0; left:0; width: 100%; height: 200px; padding:10px 0; border:none;',
              });
      })

    function select_suit(){
        var suitid= $(".suitid").eq(0).val();
        var typeid = "{$typeid}";
        var productid = "{$info['id']}";
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
            style: 'border:none; background-color:#fff; color:#fff;padding:15px',
            area: '516px',
            skin: 'layui-layer-rim', //没有背景色
            shadeClose: true,
            content:'<img src="/phone/public/images/mitao/share.png">'
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
</body>
</html>
