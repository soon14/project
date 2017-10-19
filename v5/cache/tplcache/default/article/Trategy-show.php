<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $seoinfo['seotitle'];?>-<?php echo $GLOBALS['cfg_webname'];?></title>
  <!-- 页面公用 public CSS 文件 -->
  <?php echo Common::css('common/bootstrap-min.css,common/public.css');?>
  <?php echo Common::css("mycss/strategy/Trategy.css");?>
  <?php echo Common::js('common/jquery-1.11.3.min.js,common/bootsAitto-min.js');?>
  <?php echo Common::js('strategy/Trategy.js');?>
  <?php echo $GLOBALS['cfg_tongjicode'];?>
</head>
<body class="Color-fafafa" >
<!-- 登陆代码 开始 -->
<?php echo Request::factory("pub/header")->execute()->body(); ?>
<!-- 登陆代码 结束 -->
<div class="notebox"></div>
<section> 
  <!-- 面包屑 开始 -->
  <div  class="BreadCrumb">
    <ul >
      <li><a href="/"><?php echo $GLOBALS['cfg_indexname'];?><i class="icon-gt">&gt;</i></a></li>
      <li><a href="/raiders"><?php echo $channelname;?><i class="icon-gt">&gt;</i></a></li>
      <li class="current"><a href="#">攻略正文</a></li>
    </ul>
    <div class="clearfix"></div>
  </div>
  <!--  面包屑 结束 --> 
</section>
<div class="ctd-TrategyFloat-nav">
  <div class="nav-warp">
    <div class="nav-title"> <span class="home"><a href="#"><em></em></a></span> <span class="nav-h2"><?php echo $info['title'];?></span> </div>
    <div class="ui-navArea-btn ">
      <ul>
        <li class="link-share bdsharebuttonbox" data-tag="share_1"><a href="javascript:;" class="ui-btn bds_more" title="一键分享" rel="nofollow" style="cursor:auto" data-cmd="more" onclick="shareStyle(this)" onmouseout="reStyle(this)" onmouseover="shareStyle(this)">&nbsp;分享</a></li>
        <li class="link-like"><a href="javascript:" class="ui-btn link_like" data-link="2" data-id="<?php echo $info['id'];?>"><i></i><span class="ui-btn-text">喜欢<b>(<?php echo $info['likeNum'];?>)</b></span></a></li>
        <li class="link-comment" onclick="foc()"><a href="javascript:void (0)" class="ui-btn"><i></i><span class="ui-btn-text" >评论<b>(<?php echo $info['commentnum'];?>)</b></span></a></li>
        <li class="link-browse"><a href="javascript;" class="ui-btn"><i></i><span class="ui-btn-text">浏览<b>(<?php echo $info['shownum'];?>)</b></span></a></li>
      </ul>
    </div>
  </div>
</div>
<script>
  //  设置 页面的  划词 和图片分享
  /*
   百度 分享bdUrl 里面的地址不能拿带 http://www
   亲测  火狐下 将按这个地址 跳转
   */
  window._bd_share_config={
    common:{
      bdText : "<?php echo $info['title'];?>",
      bdDesc : "这攻略写得太棒了！",
      bdUrl  : "aitto.net/raiders/show_<?php echo $info['aid'];?>.html",
      bdPic  : "aitto.net<?php echo $info['litpic'];?>",
      bdMini :2,
      "onBeforeClick" :function(cmd,config){
        //  user 在用户点击分享按钮时执行代码，更改配置。
        //  cmd为分享目标id，config为当前设置，返回值为更新后的设置。
      },
      "onAfterClick" : function(cmd){
        //在用户点击分享按钮后执行代码，cmd为分享目标id。可用于统计等
      }
    },
    share:[{
      tag : "share_1",
      bdCustomStyle:"/res/css/mycss/strategy/TravelNotes2.css"
    }
    ],
    image:{
      viewList:'',
      viewText:"分享到：",
      viewSize:"24"},
    selectShare:{
      bdContainerClass:null,
      bdSelectMiniList:["qzone","tsina","tqq","renren","weixin"]
    }
  };
  with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
  function shareStyle(th){
    $(th).css({
      'padding-left': '2px',
      'width': '66px',
      'height':"100%",
      'margin' :"0px 0px",
      'color' : 'white',
      'float': 'left',
      'font-size': '13px',
      'line-height': '89px',
      'background-image': 'url(/res/images/TravelNotes/travelNotes2.png)',
      'background-repeat': 'no-repeat',
      'background-position-x':  '28px',
      'background-position-y': '5px'
    })
  }
  function reStyle(th){
    $(th).css({
      'padding-left': '2px',
      'width': '66px',
      'height':"100%",
      'margin' :"0px 0px",
      'color' : '#666',
      'float': 'left',
      'font-size': '13px',
      'line-height': '89px',
      'background-image': 'url(/res/images/TravelNotes/travelNotes2.png)',
      'background-repeat': 'no-repeat',
      'background-position-x':  '28px',
      'background-position-y': '-30px'
    })
  }
</script>
<div class="container">
  <section>
    <div class="ctd-head-TrategyNotes"><img src="<?php echo $info['litpic'];?>" width="100%">
      <div class="ctd-mask"></div>
      <div class="ctd-info">
        <div class="user-img"><img src="<?php if(!empty($info['authorhead'])) { ?><?php echo $info['authorhead'];?><?php } else { ?><?php echo $info['litpic'];?><?php } ?>
" ></div>
        <div class="user-info">
          <h2><?php echo $info['title'];?></h2>
          <div class="user-bot">
            <div class="user-l">
              <span class="user-data"><?php echo date("j/M.Y",$info['addtime']);?></span>
              <span class="user-name"><?php if(empty($info['author'])) { ?>匿名<?php } else { ?><?php echo $info['author'];?><?php } ?>
</span>
              <span class="user-lv">LV <?php echo $info['author_lv'];?></span><span class="user-num"><?php echo $info['all_article'];?>篇攻略</span>
            </div>
            <div class="user-r">
              <span class="link-box">
<!--                <a class="link-share bds_more" href="javascript:;" > <i></i>分享 </a>-->
                <a class="link-like link_like" href="javascript:;" data-id="<?php echo $info['id'];?>"  title="喜欢就点击一下"> <i></i><?php if(!empty($info['islike'])) { ?>取消喜欢<?php } else { ?>喜欢<?php } ?>
<span><?php echo $info['likeNum'];?></span> </a>
                <a class="link-comment" href="javascript:;"  title="我要评论" onclick="foc()"><i></i>评论<span><?php echo $info['commentnum'];?></span></a>
                <a class="link-browse" href="javascript:;"> <i></i> 浏览 <span><?php echo $info['shownum'];?></span> </a> </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="ctd-Travel-body">
      <div class="ctd-Travel-nav">
        <div class="sideToolbar">
          <div class="sideCatalog">
            <div class="ebn-button-box" style="display: block;bottom: -55px">
              <a class="ebn-button ebn-button-up sideCatalog-up-disable" href="javascript:;"></a>
              <a class="ebn-button ebn-button-down sideCatalog-down-enable"  href="javascript:;"></a>
            </div>
            <div class="ebn-Catalog"></div>
            <div class="sideCatalog-catalog">
              <dl>
              </dl>
            </div>
            <!--<div class="ebn-tip ebn-tip-bottom" style="display: block;">
            <div class="ebnt-point"><i></i></div>
            <div class="ebnt-day"><i></i>大理环海铁佛寺驿</div>
          </div>   --> 
          </div>
        </div>
      </div>
      <div class="ctd-Travel-article">
        <div class="ctd-content">
          <div class="ebma-chapter ebma-preface"> <a class="ebma-anchor0" href="#" id="p0"></a>
            <h4 class="CatalogHd-main"><i></i><span class="head-con">旅游概况</span></h4>
            <ul class="Survey">
              <li class="time"><i></i><span>目的地： <?php echo $extendinfo['e_travel_mdd'];?></span></li>
              <li class="day"><i></i><span>出行天数： <?php echo $extendinfo['e_travel_day'];?></span></li>
              <li class="cost"><i></i><span>人均花费： <?php echo $extendinfo['e_travel_sonsume'];?></span></li>
              <li class="people"><i></i><span>最佳出游时间：<?php echo $extendinfo['e_travel_time'];?></span></li>
              <li class="jingqu"><i></i><span>景点：<?php echo $extendinfo['e_travel_spot'];?></span> </li>
              <div class="clearfix"></div>
            </ul>
          </div>
          <div class="ebma-chapter chapter-main"> <a class="ebma-anchor0" href="#" id="p1"></a>
            <h4 class="CatalogHd-main"><i></i><span class="head-con">景区简介</span></h4>
            <div class="ebma-con">
              <?php echo $info['content'];?>
            </div>
          </div>
          <div class="ebma-chapter chapter-main"> <a class="ebma-anchor0" href="#" id="p2"></a>
            <h4 class="CatalogHd-main"><i></i><span class="head-con">交通路线</span></h4>
            <div class="ebma-con">
              <?php echo $extendinfo['e_travel_traffic'];?>
            </div>
          </div>
          <?php $n=1; if(is_array($mulu)) { foreach($mulu as $k => $m) { ?>
          <div class="ebma-chapter chapter-main"> <a class="ebma-anchor0" href="#" id="p<?php echo $k+4;?>"></a>
            <h4 class="CatalogHd-main"><i></i><span class="head-con"><?php echo $m['title'];?></span></h4>
          </div>
          <div><?php echo $m['content'];?> </div>
          <?php if(!empty($m['child'])) { ?>
          <?php $n=1; if(is_array($m['child'])) { foreach($m['child'] as $ke => $j) { ?>
          <div class="ebma-chapter chapter-child"> <a class="ebma-anchor1" href="#" id="p<?php echo $k+4;?>-<?php echo $ke;?>"></a>
            <h4 class="CatalogHd-child"><span class="head-con"><?php echo $j['title'];?></span></h4>
            <div class="ebma-con">
              <?php echo $j['content'];?>
            </div>
          </div>
          <?php $n++;}unset($n); } ?>
          <?php } ?>
          <?php $n++;}unset($n); } ?>
          <div class="ctd-theend"></div>
        </div>
        <div class="ctd-comment">
          <div class="TicketM-Tit"> <span> <i class="detail-icon-4"> 用户点评 </i> <i class="detail-icon-t"> </i> </span></div>
          <div class="ebmc-content">
            <div class="ebm-title">发表评论</div>
            <div class="nchcomments-box">
              <a title="" class="nchimg">
                <img src="<?php if(!empty($userinfo['litpic'])) { ?><?php echo $userinfo['litpic'];?><?php } else { ?><?php echo Common::nopic();?><?php } ?>
">
              </a>
              <div class="nchtextarea right">
                <i class="tip-icon--left-sangle"></i>
                <textarea class="ebmc-textarea" id="report_area" cols="30" rows="10" maxlength="500" placeholder="喜欢这篇攻略吗？说点什么吧..." onkeyup="zifu(this)"></textarea>
                <span class="tbmac-tip tbmac-tip-normal">已输入<b><em>0</em>/500</b>字</span>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="ebmc-info"> <a href="javascript:;" class="ebmc-button tj-btn">评论</a> </div>
          </div>
          <div class="ebmc-list">
            <ul id="result_list">
            </ul>
            <div class="pages Pagination" >
            </div>
          </div>
        </div>
      </div>
      <div class="ctd-Travel-sider">
        <div class="notes-box">
          <div class="side-box side-About">
            <div class="wy-notice-img"><i></i><span><?php echo $info['allraider'];?></span>篇攻略</div>
            <div class="wy-notice-btns">
              <a href="/notes/WRITE/" class="Publish-Travels" rel="nofollow" target="-blank">
                <i class="icon icon-publish"></i>发游记</a>
              <a href="javascript:" rel="nofollow" id="com"><i class="icon icon-comments"></i>写点评</a>
            </div>
          </div>
          <div class="side-box sid-Recommend">
            <h4>河北全攻略</h4>
            <ul>
              <?php $n=1; if(is_array($hotRaiders)) { foreach($hotRaiders as $hotR) { ?>
              <li>
                <a target="_blank" href="<?php echo $hotR['url'];?>" title="<?php echo $hotR['title'];?>">
                <div class="note-img"><img src="<?php echo Common::img($hotR['piclist']['1']['0']);?>"/></div>
                <div class="note-con">
                  <h5><?php echo $hotR['title'];?></h5>
                  <div class="note-name"><span><?php echo $hotR['author'];?></span>&nbsp;&nbsp;<?php echo $hotR['addtime'];?> </div>
                </div>
                </a>
              </li>
              <?php $n++;}unset($n); } ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </section>
</div>
<?php echo Request::factory("pub/footer")->execute()->body(); ?>
<input type="hidden" id="articleid" value="<?php echo $info['aid'];?>">
<input type="hidden" id="user" value="<?php echo $userinfo['mid'];?>"/>
<!----分页----->
<input type="hidden" name="offset" id="offset" value="">
<input type="hidden" name="page" id="page" value="1">
<input type='hidden' id='next1' value="">
<!----分页------->
<?php echo Common::js('layer/layer.js',0);?>
</body>
</html>
<script>
  //  点击 评论
  $("#com").click(function () {
    foc();
  });
  function  foc(){
    $("#report_area").focus();
  }
  /******
   *  评论  是 按照  文章的id
   *  喜欢是 按照 文章 的aid
   */
  $(".link_like").click(function(){
    var  th  = this;
    $.ajax({
      type:"POST",
      url:SITEURL+"member/login/ajax_is_login",
      dataType:'json',
      success:function(data){
        if(data.status){//已经 登录
          addlike(th);
        }else{  //没有登录
          layer.confirm('是否登录，将游记添加到收藏？', {
            btn: ['是','否'] //按钮
          }, function(){
            var url  = window.location.href;//获取当前页面的地址
            var login_url  =SITEURL+"member/login/?redirecturl="+url; //www.aitto.net/member/login/?redirecturl=
            window.location.href=login_url;
          }, function(){
            // addlike(th);
          });
        }
      }
    })
  });
  function addlike(th){
    var i  = 1 ;
    var infoid  = $(th).attr("data-id");
    var this_link = $(th).attr("data-link");
    //  alert(infoid);
    if(this_link=='2'){
      var s  = $(th).find("span").find('b').text().replace('(',"").replace(")","");
    }else{
      var s  = $(th).find("span").text();
    }
    var arid = $("#articleid").val();
    //alert(arid);
    $.ajax({
      type: "POST",
      url: SITEURL+"article/ajax_add_like",
      dataType:'json',
      data: {l_num:s,arId:arid,infoid:infoid,typeid:'4'},
      success:function(data){
        if(this_link=='2'){
          if(data.status){
            layer.msg(data.msg);
           // $(th).html("<i></i>取消喜欢<span>"+data.likenum+"</span>");
            $(th).html("<i></i><span class='ui-btn-text'>取消喜欢<b>("+data.likenum+")</b></span>");
          }else{
            layer.msg(data.msg);
           // $(th).html("<i></i>喜欢<span>"+data.likenum+"</span>");
            $(th).html("<i></i><span class='ui-btn-text'>喜欢<b>("+data.likenum+")</b></span>");
          }
        }else{
          if(data.status){
            layer.msg(data.msg);
            $(th).html("<i></i>取消喜欢<span>"+data.likenum+"</span>");
          }else{
            layer.msg(data.msg);
            $(th).html("<i></i>喜欢<span>"+data.likenum+"</span>");
          }
        }
      }
    });
  }
  //提交问答
  $(".tj-btn").click(function(){
    var user      = $("#user").val();
    // return false;
    var urls      = window.location.href;//获取当前页面的地址 当做重定向地址
    if(user.length==0){
      var url = '/member/login/?redirecturl='+urls;//
      window.location.href  =url ;
    }else {
      var articleid = "<?php echo $info['id'];?>";
      var dockid = $("#dockid").val();
      //var checkcode = $("#checkcode").val();
      var typeid = 4;
      //var nickname = $("#nickname").val();
      var content = $("#report_area").val();
      if (content.length < 5) {
        if(content.length==0){
          layer.msg('<?php echo __("reply_not_empty");?>', {
            icon: 5
          })
          return false;
        }else{
          layer.msg('<?php echo __("至少五个字符");?>', {
            icon: 5
          })
          return false;
        }
      }
      $.ajax({
        type: 'POST',
        url: SITEURL + 'article/ajax_add_comment',
        data: {
          articleid: articleid,
          content: content,
          typeid: typeid,
          dockid: dockid
        },
        success: function (data) {
          if (data == 1) {
            layer.msg('<?php echo __("checkcode_error");?>', {
              icon: 5
            })
            //重新加载验证码
            $("#imgcheckcode").attr('src', "<?php echo $cmsurl;?>captcha?" + Math.random());
          } else if (data == 3) {
            layer.msg('<?php echo __("reply_success");?>', {
              icon: 6,
              time: 1500
            });
            location.reload();
          } else {
            layer.msg('<?php echo __("reply_failure");?>', {
              icon: 5
            })
          }
        }
      })
    }
  })
</script>
<script>
  function zifu(th){
    var thisval=$(th).val().length*1;
    var shengyu = 500-thisval;
    if(shengyu>0) {
      var html = "已输入<b><em>" + thisval + "</em>/" + shengyu + "</b>字";
      $(th).next('span').html(html);
    }else{
      layer.msg('<?php echo __("不能输入了");?>', {
        icon: 5
      })
      return false;
    }
  }
</script>
<script type="text/javascript">
  var pagesize  = 5;//0;//0;//0;//每页的页数
  $(document).ready(function(){
    $(function () {
      var  s ='';
      //第一次加载数据
      get_data(s);
    });
  });
  function get_data(s) {
    var offset    = $("#offset").val().length==""? 0:$("#offset").val();//  每页的开始 也是 limit 第1个参数
    var articleid = "<?php echo $info['id'];?>";//    攻略 的 id
    var typeid    = "<?php echo $typeid;?>";//  模型的 id
    $.ajax({
      type: "POST",
      url: SITEURL + 'article/ajax_get_comment',
      async:false,
      dataType: "json",
      data: {pagesize:pagesize,offset:offset,articled:articleid,typeid:typeid},
      success: function(data){
        var page1      =$("#page").val()*1;//   当前页面
        var itemHtml = "";
        var pages    = "";
        $("#result_list").empty();
        $(".Pagination").empty();
        if(s==''){
        }else if(s=='pre'){
          $("#page").val(page1*1-1);
        }else if(s=='next'){
          $("#page").val(page1*1+1);
        }else{
          $("#page").val(s*1);
        }
//        var  page3 =  $("#page").val()*1;//   当前页面
//        var  p    = (page3-1)*pagesize;
        if(data.length!=0){
          for(var i=0;i<data.length;i++){
            itemHtml +="<li>";
              if(data[i].userlitpic==null){
                    itemHtml +="<div class='user-img'><img src='<?php echo Common::nopic();?>'></div>";
              }else{
                itemHtml +="<div class='user-img'><img src='"+data[i].userlitpic+"'></div>";
              }
            if(data[i].nickname==null){
              itemHtml +="<div class='textarea-box'> <span class='comments-name'>"+data[i].wx_nickname+"</span>";
            }else{
              itemHtml +="<div class='textarea-box'> <span class='comments-name'>"+data[i].nickname+"</span>";
            }
            itemHtml +="<span class='comments-h2'>"+data[i].content+"</span>";
            itemHtml +="<span class='comments-time'>"+data[i].addtime+"</span></div>";
            itemHtml +="</li>";
          }
        }else{
          itemHtml +="<li>";
          itemHtml +="没有相关数据";
          itemHtml +="</li>";
        }
        var page2      =$("#page").val()*1;//   当前页面
        //  定义 系数
        var coefficient = Math.floor((page2-1)/pagesize);
        //   定义 开始和结束 页面
        var startpage    = coefficient*pagesize+1;
        var endpage      = coefficient*pagesize+2;
            endpage   =  endpage>data[0]['totalpage'] ? data[0]['totalpage'] : endpage;
        if(data[0]['totalpage']!=0){
          pages  +="<div id='Pagination'><div class='pagination'>";
          pages  +="<a class='uPrevpage' onclick='page(1)'><i></i>首页</a>";
          pages  += "<a class='uPrevpage' onclick='pre()'><i></i>上一页</a>";
             for(var j=startpage;j<=endpage;j++){
               pages  += "<a href='javascript:' onclick='page("+j+")' ";
               if(page2==j) {
                 pages += " class='current' ";
               }
               pages  += ">"+j+"</a>" ;
             }
          pages  += "<a class='next' onclick='next()'>下一页 <i></i></a>";
          pages  += "<a class='next' onclick='page("+data[0]['totalpage']+")'>尾页 <i></i></a>";
          pages  += "</div></div>";
          pages  += "<div class='searchPage'>";
          pages  += "<span class='page-sum'>共<strong class='allPage'>"+data[0]['totalpage']+"</strong>页</span>";
          pages  += "<span class='page-go'>跳转<input type='text'>页</span>";
          pages  += "<a href='javascript:;' class='page-btn' data-all='"+data[0]['totalpage']+"' onclick='skip(this)'>GO</a>";
          pages  += "</div>&nbsp;&nbsp;";
        }
        $("#result_list").append(itemHtml);
        $(".Pagination").append(pages);
        $("#next1").val(data[0]['totalpage']);
      }
    });
  }
  function page(s){
    var offset ="";
    offset = (s*1-1) * pagesize;//  2 位每页显示数；
    $("#offset").val(offset);
    get_data(s);
  }
  function pre(){
    var offset ="";
    var s   ='pre';
    var cur_page    = $("#page").val();
    var prepage = cur_page*1-1;
    if(prepage==0){
      return false;
    }else {
      offset = (prepage - 1) * pagesize;//  2 位每页显示数；
      $("#offset").val(offset);
      get_data(s);
    }
  }
  function next(){
    var offset ="";
    var s   ='next';
    // var cur_page    = $(".on").attr("data-page");
    var cur_page    = $("#page").val()*1;//attr("data-page");
    var total    = $("#next1").val()*1;//("data-total")*1;
    var nextpage = cur_page*1+1;
    if(total+1<=nextpage){
      return false;
    }else{
      offset =(nextpage-1)*pagesize;//  2 位每页显示数；
      $("#offset").val(offset);
      get_data(s);
    }
  }
  /*
    跳转
   */
  function  skip(th){
       var  pages =  $(th).prev('span').find('input').val()*1;
    if(!isNaN(pages)){
      var  allpages = $(th).attr('data-all')*1;
      if(pages<1){layer.msg('<?php echo __("请输入 数字");?>', {icon: 5  }); return false;}
      if( pages >allpages){layer.msg('<?php echo __("请输入 数字");?>', {icon: 5  }); return false;}
      page(pages);
    }else{
      layer.msg('<?php echo __("请输入 数字");?>', {
        icon: 5
      })
    }
  }
</script>