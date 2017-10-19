<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $seoinfo['seotitle'];?>-<?php echo $GLOBALS['cfg_webname'];?></title>
  <?php echo  Stourweb_View::template("pub/varname");  ?>
  <?php echo Common::css('common/bootstrap-min.css,common/public.css,mycss/selfDriving/SelfDriving.css');?>
  <?php echo Common::js('common/jquery-1.11.3.min.js,common/bootsAitto-min.js,myjs/selfDriving/bootstrap-SelfDriving.js');?>
<style>
  .box2{
    display: none;
    width: 100%;
    height: 100%;
    margin: 0 auto;
    z-index: 999;
    position: fixed;
    top: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.52) none repeat scroll 0% 0%;
    opacity: 1;
  }
  .login5{
    width: 404px;
    height: 262px;
    background: #fff;
    border-radius: 5px;
    overflow: hidden;
    text-align: center;
    position: relative;
    margin: 150px auto 0px auto;
  }
  .login5 .close{
    background: url(/res/images/img/login_reg.png) 0px 0px no-repeat;
    position: absolute;
    width: 33px;
    height: 33px;
    right: 10px;
    top: 15px;
  }
</style>
  <?php echo $GLOBALS['cfg_tongjicode'];?>
</head>
<body class="Color-fafafa">
<!-- 登陆代码 开始 -->
<?php echo Request::factory("pub/header")->execute()->body(); ?>
<!-- 登陆代码 结束 -->
<div class="notebox"></div>
<section> 
  <!-- 面包屑 开始 -->
  <div  class="BreadCrumb Color-fff">
    <ul >
      <li><a href="<?php echo $cmsurl;?>"><?php echo $GLOBALS['cfg_indexname'];?><i class="icon-gt">&gt;</i></a></li>
      <li><a href="/lines/self"><?php echo $channelname;?><i class="icon-gt">&gt;</i></a></li>
      <?php $n=1; if(is_array($predest)) { foreach($predest as $dest) { ?>
      <li class="current"><a href="/lines/self/<?php echo $dest['pinyin'];?>/"><?php echo $dest['kindname'];?></a></li>
      <?php $n++;}unset($n); } ?>
    </ul>
    <div class="clearfix"></div>
  </div>
  <!--  面包屑 结束 --> 
</section>
<section>
  <div class="ctd-head-SelfDriving">
    <div class="container"> 
    <!--自驾游标题 开始 -->
    <div class="SelfDriving-Head">
      <h1><em></em><?php echo $info['title'];?></h1>
      <div class="d-nav">
        <ul>
          <li class="trip-ico"><i></i><span>自驾日期：<?php echo $info['linedate']['starttime'];?>~<?php echo $info['linedate']['endtime'];?></span></li>
        </ul>
      </div>
      <div class="d-price">
        <div class="d-priceA"></div>
        <div class="d-priceM"><i>¥</i><b><?php echo $info['storeprice'];?></b><dfn>/人起</dfn></div>
        <div class="d-priceB"  style="padding: 0px 0px">
          <a href="#orderID" style="padding: 20px 20px">我要<br>
          预定</a>
        </div>
    </div>
    </div>
    <!--自驾游标题 结束 --> 
    </div>
  </div>
</section>
<div class="container">
      <div class="SelfDriving-img">
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
<?php //var_dump($info['piclist'])?>
          <tr>
            <td width="64%" rowspan="2" valign="top"><div class="bigimg"><img src="<?php echo $info['piclist']['0']['0'];?>"></div></td>
            <td width="18%"><div class="smallimg" style="margin-bottom:6px;"><img src="<?php echo $info['piclist']['1']['0'];?>"></div></td>
            <td width="18%"><div class="smallimg" style="margin-bottom:6px;"><img src="<?php echo $info['piclist']['2']['0'];?>"></div></td>
          </tr>
          <tr>
            <td><div class="smallimg"style="margin-top:6px;"><img src="<?php echo $info['piclist']['3']['0'];?>"></div></td>
            <td><div class="smallimg"style="margin-top:6px;"><img src="<?php echo $info['piclist']['4']['0'];?>"></div></td>
          </tr>
        </table>
      </div>
  <section> 
    <!--门票内容 开始-->
    <div  class="ctd-SelfDrive-booking" id="orderID" >
      <div class="tab-nav">
        <ul data-toggle="tabs">
          <li class="current"><a href="javascript:void(0)" >预定价格</a></li>          
        </ul>
      </div>
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tbody>
          <tr>
            <th><div class="text-left">套餐名称</div>
            </th>
            <th width="15%">成人价/人</th>
            <th width="10%">儿童价/人</th>
            <th width="10%">老人价/人</th>
            <th width="15%">预定 </th>
          </tr>
          <?php require_once ("/home/wwwroot/www.aitto.net/taglib/line.php");$line_tag = new Taglib_Line();if (method_exists($line_tag, 'suit')) {$data = $line_tag->suit(array('action'=>'suit','row'=>'5','productid'=>$info['id'],));}?>
          <?php //var_dump($data);?>
          <?php $n=1; if(is_array($data)) { foreach($data as $type) { ?>
          <?php $lastoffer   = unserialize($type['lastoffer']);//var_dump($lastoffer);exit?>
          <tr>
            <td>
              <div class="text-left"><?php echo $type['title'];?>
                <a href="javascript:;" class="TableDetail-btn" ><i></i></a>
              </div>
            </td>
            <td><?php echo Currency_Tool::symbol();?><?php echo $lastoffer['adultprice'];?></td>
            <td><?php if(empty($lastoffer['childprice'])) { ?>暂无<?php } else { ?><?php echo Currency_Tool::symbol();?><?php echo $lastoffer['childprice'];?><?php } ?>
</td>
            <td><?php if(empty($lastoffer['oldprice'])) { ?>暂无<?php } else { ?><?php echo Currency_Tool::symbol();?><?php echo $lastoffer['oldprice'];?><?php } ?>
</td>
            <td><div class="booking-but"><a class="booking-btn one" href="javascript:;" data-suitid="<?php echo $info['suitid'];?>" data-lineid="<?php echo $info['id'];?>" data-endtime="<?php echo $info['linedate']['endtime'];?>"  data-chatime="<?php echo $info['cha_time'];?>" >在线预定</a></div></td>
          </tr>
          <tr class="ticket-detail">
            <td colspan="5" class="show-TableDetail"><div class="TableDetail-box"> <i class="arrow"></i>
                <div class="TableDetail-pane">
                 <p>
                   <?php echo $type['description'];?>
                 </p>
                </div>
                <div class="TableDetail-back">收起<i></i></div>
              </div></td>
          </tr>
          <?php $n++;}unset($n); } ?>
          
        </tbody>
      </table>
    </div>
    <!--门票内容 结束--> 
  </section>
  <?php require_once ("/home/wwwroot/www.aitto.net/taglib/detailcontent.php");$detailcontent_tag = new Taglib_Detailcontent();if (method_exists($detailcontent_tag, 'get_content')) {$linecontent = $detailcontent_tag->get_content(array('action'=>'get_content','pc'=>'1','typeid'=>$typeid,'productinfo'=>$info,'return'=>'linecontent',));}?>
  <?php //var_dump($linecontent);?>
  <section>
    <div class="ctd-SelfDrive-body"> 
      <!-- 导航随屏置顶开始 -->
      <div id="ctd-SelfDriveM-box">
        <div class="ctdF-Case J-relative">
          <div class="ctdF-nav" >
            <ul data-toggle="J-tabs">
              <?php foreach($linecontent as $k=>$row){ ?>
              <?php if($row['chinesename']=='行程附件'||$row['chinesename']=='签约付款'||$row['chinesename']=='线路特色') {
                continue;
              }else{
              ?>
              <li <?php if($k<1) { ?>class="current"<?php } ?>
><a href="#p<?php echo $k;?>"><?php echo $row['chinesename'];?></a></li>
                <?php } ?>
              <?php  }?>
              <li><a href="#p7">用户点评<?php if(!empty($info['commentnum'])) { ?>(<?php echo $info['commentnum'];?>)<?php } ?>
</a></li>
            </ul>
            <a href="#orderID" class="btn PresetBtn" >我要购买</a> </div>
        </div>
      </div>
      <!-- 导航随屏置顶结束 -->
      <div class="ctd-main"> 
        <!--门票详情 开始-->
        <div class="ctd-content">
          <?php foreach($linecontent as $k=>$rows){ ?>
          <?php if($rows['chinesename']=='行程附件'||$rows['chinesename']=='签约付款'||$row['chinesename']=='线路特色') {
            continue;
          }else{
          ?>
          <div class="ctd-chapter"><a class="ctd-anchor0" id="p<?php echo $k;?>"></a>
            <div class="SelfDriveM-Tit"> <span> <i class="detail-icon-2"><?php echo $rows['chinesename'];?> </i> <i class="detail-icon-t"> </i></span></div>
            <div class="ctd-con">
              <?php echo $rows['content'];?>
            </div>
          </div>
            <?php } ?>
          <?php  }?>
          <!---------用户点评------->
          <div class="ctd-chapter"><a class="ctd-anchor0" href="#" id="p7"></a>
            <div class="SelfDriveM-Tit"> <span> <i class="detail-icon-4"> 用户点评 </i> <i class="detail-icon-t"> </i> </span></div>
            <div class="ctd-comment">
              <div class="ebmc-content">
                <div class="ebm-title">发表评论</div>
                <div class="nchcomments-box nch-box">
                  <a title="" class="nchimg">
                    <img src="<?php if($userinfo['litpic']) { ?> $userinfo['litpic']<?php } else { ?><?php echo Common::nopic();?><?php } ?>
">
                  </a>
                  <div class="nchtextarea right">
                    <i class="tip-icon--left-sangle"></i>
                    <textarea class="ebmc-textarea" cols="30" rows="10" placeholder="说点什么吧..."  maxlength="500" id="report_area" onkeyup="zifu(this)"></textarea>
                    <span class="tbmac-tip tbmac-tip-normal">已输入<b><em>0</em>/500</b>字</span>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="ebmc-info">
                  <a href="javascript:;" class="ebmc-button tj-btn">评论</a>
                </div>
              </div>
              <div class="ebmc-list">
                <ul id="result_list">
                </ul>
                <div class="pages Pagination" >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ctd-side">
        <div class="side-box sid-Recommend">
          <h4>精彩活动推荐</h4>
          <ul>
            <?php $n=1; if(is_array($huodong)) { foreach($huodong as $h) { ?>
            <a href="/lines/self_show_<?php echo $h['aid'];?>.html">
              <li>
                <div class="note-img"><img src="<?php echo Common::img($h['piclist']['1']['0']);?>"/><div class="note-price"><strong><?php if(!empty($h['startcity'])) { ?>出发地:<?php echo $h['startcity'];?><?php } ?>
</strong><span>￥<em><?php echo $h['storeprice'];?></em></span> </div></div>
                <div class="note-con">
                  <h5><?php echo $h['title'];?></h5>
                </div>
              </li>
            </a>
            <?php $n++;}unset($n); } ?>
          </ul>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </section>
</div>
<div class="box2">
  <div class="login5">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><img src="/res/images/myimages/active_01.jpg"></td>
      </tr>
      <tr>
        <td><a href="/lines/self/all"><img src="/res/images/myimages/active_02.jpg"></a></td>
      </tr>
    </table>
    <a class="close"></a>
  </div>
</div>
<!-----评论用到的参数-------->
<input type="hidden" id="dockid" value="0"/>
<input type="hidden" id="user" value="<?php echo $userinfo['mid'];?>"/>
<input type="hidden" id="productid" value="<?php echo $info['id'];?>"/>
<!-----评论用到的参数-------->
<!----分页----->
<input type="hidden" name="offset" id="offset" value="">
<input type="hidden" name="page" id="page" value="1">
<input type='hidden' id='next1' value="">
<!----分页------->
<?php echo Request::factory("pub/footer")->execute()->body(); ?>
</body>
</html>
<?php echo Common::js('floatmenu/floatmenu.js,myjs/jquery.jcarousel.min.js,myjs/jcarousel.connected-carousels.js');?>
<?php echo Common::css('/res/js/floatmenu/floatmenu.css',0,0);?>
<?php echo Common::js('SuperSlide.min.js,template.js,scorll.img.js');?>
<?php echo Common::js('layer/layer.js',0);?>
<script type="text/javascript">
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
<script>
  //  这段 js  是 提交评论的
  $(function(){
    $('.one').click(function(){
      var cha_time  =$(this).attr("data-chatime");
      var suitid    = $(this).attr("data-suitid");
      var lineid    = $(this).attr("data-lineid");
      var endtime   = $(this).attr("data-endtime");
      if(cha_time==-1){
         $('.box2').show();
        // alert("活动已过期，请选择其他活动")
       }else{
           var url ="/lines/book/?usedate="+endtime+"&lineid="+lineid+"&suitid="+suitid;
        window.location.href =url;
      }
    });
    $(".close").click(function () {
      $(".box2").hide();
    });
    //回复
    $(".reply_btn").click(function(){
      $("#dockid").val($(this).attr('data-replyid'));
    })
    //登陆状态
    $.ajax({
      type:"POST",
      url:SITEURL+"member/login/ajax_is_login",
      dataType:'json',
      success:function(data){
        if(data.status){
          var txt = data.user.mid;
        }else{
          var txt = '';
        }
        $("#user").val(txt);
      }
    })
    //提交问答
    $(".tj-btn").click(function(){
      var user      = $("#user").val();
      var urls      = window.location.href;//获取当前页面的地址 当做重定向地址
      if(user.length!=0){
        var url = '/member/login/?redirecturl='+urls;//
        window.location.href  =url ;
      }else {
        var articleid = $("#productid").val();
        var dockid = $("#dockid").val();
        var checkcode = $("#checkcode").val();
        var typeid = 1;
        var nickname = $("#nickname").val();
        var content = $("#report_area").val();
        if (content.length < 5) {
          layer.msg('<?php echo __("回复内容最少5个字符");?>', {
            icon: 5
          })
          return false;
        }
        $.ajax({
          type: 'POST',
          url: SITEURL + 'spot/ajax_add_comment',
          data: {
            articleid: articleid,
            content: content,
            checkcode: checkcode,
            nickname: nickname,
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
            $("#limit").val(1);//在每个 模块的的show 页面都要写上这个
          }
        })
      }
    })
  });
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
    var articleid = "<?php echo $info['id'];?>";//   门票的 id
    var typeid    = 1;//  模型的 id
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
            if(data[i].litpic==null){
              itemHtml +="<div class='user-img'><img src='<?php echo Common::nopic();?>'></div>";
            }else{
              itemHtml +="<div class='user-img'><img src='"+data[i].litpic+"'></div>";
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