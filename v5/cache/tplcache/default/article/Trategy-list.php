<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php echo $seoinfo['seotitle'];?></title>
  <?php if($seoinfo['keyword']) { ?>
  <meta name="keywords" content="<?php echo $seoinfo['keyword'];?>"/>
  <?php } ?>
  <?php if($seoinfo['description']) { ?>
  <meta name="description" content="<?php echo $seoinfo['description'];?>"/>
  <?php } ?>
 <?php echo  Stourweb_View::template("pub/varname");  ?>
  <?php echo Common::css('common/bootstrap-min.css,common/public.css');?>
  <?php echo Common::css('mycss/strategy/Trategy2.css');?>
  <?php echo Common::js('common/jquery-1.11.3.min.js,common/bootsAitto-min.js,strategy/Trategy2.js');?>
  <style>.ctd-sort-view {
      height: 50px;
      background: #FFF;
      line-height: 50px;
      border-bottom: 1px solid #eee;
      margin-bottom: 10px;
    }
    .ctd-sort-view li {
      float: left;
      height: 50px;
      line-height: 50px;
      border-right: 1px solid #eee;
    }
    .ctd-sort-view .current a {
      background: #fd8800;
      color: #FFF;
      padding: 15px;
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
  <div  class="BreadCrumb">
    <ul>
      <li><a href="/">首页<i class="icon-gt">&gt;</i></a></li>
      <li><a href="<?php echo $cmsurl;?>raiders/"><?php echo $channelname;?><i class="icon-gt">&gt;</i></a></li>
      <?php $n=1; if(is_array($predest)) { foreach($predest as $pre) { ?>
      <li class="current"><a href="<?php echo $cmsurl;?>raiders/<?php echo $pre['pinyin'];?>/"><?php echo $pre['kindname'];?></a></li>
      <?php $n++;}unset($n); } ?>
    </ul>
    <div class="clearfix"></div>
  </div>
  <!--  面包屑 结束 --> 
</section>
<div class="container">
  <section> 
    <!--区域选择 开始 -->
    <div class="category" >
      <div class="top-category" <?php if(count($chooseitem)<1) { ?>style="display:none"<?php } ?>
>
        <span>一共
        <dnf><?php echo $total;?></dnf>
        条结果&nbsp;&nbsp;您已选择:</span>
        <span style="margin-top: -2px">
            <?php $n=1; if(is_array($chooseitem)) { foreach($chooseitem as $item) { ?>
              <span class="crumb-select-item chooseitem"><a href="javascript:" data-url="<?php echo $item['url'];?>"><b><?php echo $item['attr'];?></b>：<em><?php echo $item['itemname'];?></em><i class=""></i></a></span>
<!--           <strong class="chooseitem" data-url="<?php echo $item['url'];?>"><?php echo $item['itemname'];?><i></i></strong>-->
             <?php $n++;}unset($n); } ?>
        </span>
        <a href="javascript:void(0)" class="del-all clearc" >删除全部搜索</a>
      </div>
      <div class="by-category">
        <?php if($param['attrid']!=19) { ?>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <?php require_once ("/home/wwwroot/www.aitto.net/taglib/dest.php");$dest_tag = new Taglib_Dest();if (method_exists($dest_tag, 'query')) {$destlist = $dest_tag->query(array('action'=>'query','typeid'=>$typeid,'flag'=>'nextsame','row'=>'30','pid'=>$destid,'return'=>'destlist',));}?>
            <td width="120" valign="top" class="text-right td-tit">目的地</td>
            <td class=""><b>不限</b>
              <ul>
                <?php $n=1; if(is_array($destlist)) { foreach($destlist as $dest) { ?>
                <li <?php if($param['destpy']==$dest['pinyin']) { ?>class="current"<?php } ?>
><a href="<?php echo Model_Article::get_search_url($dest['pinyin'],'destpy',$param);?>"><?php echo $dest['kindname'];?></a></li>
                <?php $n++;}unset($n); } ?>
              </ul>
            </td>
            
          </tr>
          <?php require_once ("/home/wwwroot/www.aitto.net/taglib/attr.php");$attr_tag = new Taglib_Attr();if (method_exists($attr_tag, 'query')) {$grouplist = $attr_tag->query(array('action'=>'query','flag'=>'grouplist','typeid'=>$typeid,'return'=>'grouplist',));}?>
          <?php $n=1; if(is_array($grouplist)) { foreach($grouplist as $group) { ?>
          <?php if($group['attrname']!='目的地') { ?>
          <?php if($group['attrname']!='游记·攻略') { ?>
          <tr>
            <td valign="top"  class="text-right td-tit"><?php echo $group['attrname'];?>：</td>
            <td class="">
              <?php require_once ("/home/wwwroot/www.aitto.net/taglib/attr.php");$attr_tag = new Taglib_Attr();if (method_exists($attr_tag, 'query')) {$attrlist = $attr_tag->query(array('action'=>'query','flag'=>'childitem','typeid'=>$typeid,'groupid'=>$group['id'],'return'=>'attrlist',));}?>
              <?php if(count($attrlist)>14) { ?>
              <div class="show-more"> <span>更多</span><i class="icon-angle-down"></i></div>
              <?php } ?>
              <b>不限</b>
              <ul>
                <?php $n=1; if(is_array($attrlist)) { foreach($attrlist as $attr) { ?>
                <li <?php if(Common::check_in_attr($param['attrid'],$attr['id'])!==false) { ?>class="current"<?php } ?>
><a href="<?php echo Model_Article::get_search_url($attr['id'],'attrid',$param);?>"><?php echo $attr['attrname'];?></a></li>
                <?php $n++;}unset($n); } ?>
                
              </ul>
            </td>
          </tr>
          <?php } ?>
          <?php } ?>
          <?php $n++;}unset($n); } ?>
          
        </table>
        <?php } ?>
      </div>
    </div>
    <!--区域选择 结束 -->
    <div class="clearfix"></div>
  </section>
  <section>
    <div class="ctd-TrategyNotes-body">
      <div class="ctd-main">
        <div class="ctd-sort-view">
          <ul class="tabs" style=" ">
            <?php //var_dump($param['sorttype'])?>
            <li  <?php if($param['sorttype']==0) { ?>class="current"<?php } ?>
 ><a href="<?php echo Model_Article::get_search_url(0,'sorttype',$param,$currentpage);?>" >默认排序</a></li>
            <li <?php if($param['sorttype']==1) { ?>class="current"<?php } ?>
>
            <a href="<?php echo Model_Article::get_search_url(1,'sorttype',$param,$currentpage);?>" >&nbsp;最&nbsp;&nbsp;热&nbsp;<i></i></a>
            </li>
          </ul>
        </div>
        <div class="ctd-TrategyNotes-list">
          <?php if(!empty($list)) { ?>
          <ul class="listItem">
            <?php $n=1; if(is_array($list)) { foreach($list as $a) { ?>
            <li style="cursor: pointer" onclick="window.location.href='<?php echo $a['url'];?>'">
              <?php //var_dump($a['piclist']);exit?>
              <div class="pic"><a href="<?php echo $a['url'];?>"><img src="<?php echo $a['piclist']['1']['0'];?>" alt="<?php echo $a['title'];?>" ></a></div>
              <div class="info">
                <h3><a href="<?php echo $a['url'];?>"><?php echo $a['title'];?></a></h3>
                <p class="user-line"><a href="#" target="-blank"><?php echo $a['author'];?></a><span>|</span>发表于 <?php echo Common::mydate('Y-m-d',$a['addtime']);?><span>|</span><?php echo $a['tuceNum'];?>张照片</p>
                <p class="user-con"><span>游记简述：</span>
                  <?php echo Common::cutstr_html($a['content'],300);?>
                </p>
                <p class="count-line"> <span class="icon-pic"><i></i>图片<?php echo $a['tuceNum'];?></span> <span class="icon-comment"><i></i>评论<?php echo $a['commentnum'];?></span> <span class="icon-view"><i></i>浏览<?php echo $a['shownum'];?></span> </p>
              </div>
            </li>
            <?php $n++;}unset($n); } ?>
          </ul>
          <!--分页 结束 -->
          <div class="pages">
            <?php echo $pageinfo;?>
          </div>
          <!--分页 结束 -->
          <?php } else { ?>
          <div class="no-content">
            <p><i></i>抱歉，没有找到相关攻略！<a href="/raiders/all">查看全部攻略</a></p>
          </div>
          <?php } ?>
          
        </div>
      </div>
      <div class="ctd-side">
        <div class="side-box side-About">
          <div class="wy-notice-img"><i></i><span><?php echo $total;?></span>篇攻略</div>
          <div class="wy-notice-btns">
            <a href="/notes/WRITE" class="Publish-Travels" rel="nofollow" target="-blank">
              <i class="icon icon-publish"></i>写游记
            </a>
<!--            <a href="javascript:" target="-blank" rel="nofollow">-->
<!--              <i class="icon icon-comments"></i>写点评-->
<!--            </a>-->
          </div>
        </div>
        <div class="side-box sid-Recommend">
          <h4>热门攻略推荐</h4>
          <ul>
            <?php $n=1; if(is_array($hotRaiders)) { foreach($hotRaiders as $k => $hotR) { ?>
            <?php if($k<4) { ?>
            <li style="cursor: pointer" onclick="window.location.href='<?php echo $hotR['url'];?>'">
              <div class="note-img"><img src="<?php echo Common::img($hotR['piclist']['1']['0']);?>" title="<?php echo $hotR['title'];?>"/></div>
              <div class="note-con">
                <h5 style="overflow: hidden"><?php echo $hotR['title'];?></h5>
                <div class="note-name"><span><?php echo $hotR['author'];?></span> <?php echo date("Y-m-d",$hotR['addtime']);?></div>
              </div>
            </li>
            <?php } ?>
            <?php $n++;}unset($n); } ?>
          </ul>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </section>
</div>
<?php echo Request::factory("pub/footer")->execute()->body(); ?>
</body>
</html>
<script>
  //清空筛选条件
  $('.clearc').click(function(){
    var url = SITEURL+'raiders/all/';
    window.location.href = url;
  })
  //删除已选
  $(".chooseitem").find('i').click(function(){
    var url = $(this).parent().attr('data-url');
    window.location.href = url;
  })
</script>
