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
  <?php echo $GLOBALS['cfg_tongjicode'];?>
</head>
<body>
<!-- 登陆代码 开始 -->
<?php echo Request::factory("pub/header")->execute()->body(); ?>
<!-- 登陆代码 结束 -->
<div class="notebox"></div>
<div class="ctd-head-box"> 
  <!-- 图片相册上下切换开始 -->
  
  <div class="ck-slide">
<!--    <?php require_once ("/home/wwwroot/www.aitto.net/taglib/ad.php");$ad_tag = new Taglib_Ad();if (method_exists($ad_tag, 'getad')) {$data = $ad_tag->getad(array('action'=>'getad','name'=>'s_article_index_1','pc'=>'1',));}?>-->
    <ul class="ck-slide-wrapper">
      <?php //var_dump($data);exit;?>
      <?php //$src  =unserialize($data['adsrc']); $link=unserialize($data['adlink']);?>
      <?php //$adname  =unserialize($data['adname']); $admdd=unserialize($data['admdd']);?>
      <?php for($i=0;$i<count($ad_articlie);$i++):?>
      <li <?php if($i>0) { ?>style="display:none"<?php } ?>
>
        <div class="ctd-head-main"><a href="<?php echo $ad_articlie[$i]['url'];?>"><img src="<?php echo $ad_articlie[$i]['litpic'];?>"></a>
          <div class="mtd-info"><a href="<?php echo $ad_articlie[$i]['url'];?>">
              <div class="mtd-user-info">
                <div class="mtd-user-bot"> <span class="mtd-user-name"></span> </div>
                <h2><?php echo $ad_articlie[$i]['title'];?></h2>
                <p class="mtd-location">
                  <span style="font-size:24px"><?php echo date('d/m.Y',$ad_articlie[$i]['addtime']);?></span>&nbsp;&nbsp;
                  <span class="user-name"><?php echo $ad_articlie[$i]['author'];?></span>&nbsp;&nbsp;
                  <span class="user-lv">LV<?php echo $ad_articlie[$i]['author_lv'];?></span>&nbsp;&nbsp;
                  <span class="user-num"><?php echo $ad_articlie[$i]['all_article'];?>篇攻略</span>
                </p>
                <div class="mtd-more" onclick="window.location.href='<?php echo $ad_articlie[$i]['url'];?>'"></div>
              </div>
            </a>
          </div>
        </div>
      </li>
      <?php endfor?>
    </ul>
    <a href="javascript:;" class="ctrl-slide ck-prev">上一张</a> <a href="javascript:;" class="ctrl-slide ck-next">下一张</a>
    <div class="ck-slidebox">
      <div class="slideWrap">
        <ul class="dot-wrap">
          <?php //$src  =unserialize($data['adsrc']); $link=unserialize($data['adlink']);?>
          <?php for($i=0;$i<count($ad_articlie);$i++):?>
          <li <?php if($i==0) { ?>class="current"<?php } ?>
><em><?php echo $i+1;?></em></li>
          <?php endfor?>
        </ul>
      </div>
    </div>
    
  </div>
  
  <!-- js --> 
  
  <script>$('.ck-slide').ckSlide({autoPlay: true});</script> 
  
  <!-- 图片相册上下切换结束 --> 
  
  <!-- 搜索条 开始 -->
  <div class="searchPlace-box" style="z-index: 5">
    <div class="search-place"> 
      <!-- 全部 begin -->
      <div class="place-search-hot">
        <ul>
          <li class="md">
            <h4><i></i>目的地</h4>
            <?php $n=1; if(is_array($kindlist)) { foreach($kindlist as $kind) { ?>
            <a href="/raiders/<?php echo $kind['pinyin'];?>"><?php echo $kind['kindname'];?></a>
            <?php $n++;}unset($n); } ?>
          </li>
          <?php  $model =array(2=>'zt',3=>'sj',4=>'jl')?>
          <?php $n=1; if(is_array($arattrid)) { foreach($arattrid as $key => $attr) { ?>
          <?php if($attr['attrname']!='目的地') { ?>
          <?php if($attr['attrname']!='游记·攻略') { ?>
          <li class="<?php echo $model[$key];?>">
            <h4><i></i><?php echo $attr['attrname'];?></h4>
            <?php $n=1; if(is_array($attr['child'])) { foreach($attr['child'] as $ch) { ?>
            <a href="/raiders/all-<?php echo $ch['id'];?>-0-1"><?php echo $ch['attrname'];?></a>
            <?php $n++;}unset($n); } ?>
          </li>
          <?php } ?>
          <?php } ?>
          <?php $n++;}unset($n); } ?>
        </ul>
      </div>
      <div class="searchbar">
        <div class="search-wrapper">
          <div class="search-input">
            <input  placeholder="输入景区、目的搜索攻略" id="search" autocomplete="off" type="text" onkeyup="onkeys()">
          </div>
        </div>
        <div class="search-button"> <a role="button" href="javascript:"><i class="icon-search"></i></a> </div>
        <div class="clearfix"></div>
      </div>
      <!-- 全部 end --> 
      
    </div>
  </div>
  <!-- 搜索条 结束 --> 
</div>
<div class="container">
  <section> 
    <!-- 热门游记-->
    <div class="M-Hot-Trategy J-top">
      <div class="ctd-title-bd">
        <h1>热门攻略<span>给你一个不一样的旅游</span>
          <div class="english">Gonglue Travels</div>
        </h1>
        <ul class="J-con-nav J-con-navM " data-toggle="tabs" data-target="tab-content1">
          <?php $n=1; if(is_array($kindlist)) { foreach($kindlist as $k => $v) { ?>
          <?php if($k<3) { ?>
          <li <?php if($k<1) { ?>class="current"<?php } ?>
><a href="javascript:" data-id="panel-<?php echo $k+1;?>" onclick="tabcity(this)"><?php echo $v['kindname'];?></a></li>
          <?php } ?>
          <?php $n++;}unset($n); } ?>
        </ul>
        <div class=" clearfix"></div>
      </div>
      <?php //var_dump($kindlist)?>
      <?php $n=1; if(is_array($kindlist)) { foreach($kindlist as $ke => $ve) { ?>
      <?php if($ke<3) { ?>
      <div class="ctd-Trategy-List" id="panel-<?php echo $ke+1;?>" <?php if($ke>0) { ?>style='display:none'<?php } ?>
>
        <?php require_once ("/home/wwwroot/www.aitto.net/taglib/article.php");$article_tag = new Taglib_Article();if (method_exists($article_tag, 'query')) {$data = $article_tag->query(array('action'=>'query','flag'=>'mdd','row'=>'3','destid'=>$ve['id'],));}?>
        <ul>
          <?php $n=1; if(is_array($data)) { foreach($data as $j) { ?>
          <li onclick="window.location.href='<?php echo $j['url'];?>'" style="cursor: pointer">
            <div class="ctd-inner">
              <div class="J-img"><img src="<?php echo $j['piclist']['1']['0'];?>" height="100%">
                <div class="J-title">
                  <h2><?php echo $j['title'];?></h2>
                  <p><?php if($j['gl_mdd']) { ?><?php echo $j['gl_mdd'];?><?php } else { ?><?php echo $j['mdd'];?><?php } ?>
 <?php if($j['jiriyou']) { ?>/<?php echo $j['jiriyou'];?><?php } ?>
</p>
                </div>
              </div>
              <div class="J-shots">
                <?php $n=1; if(is_array($j['piclist'])) { foreach($j['piclist'] as $key => $g) { ?>
                <?php //var_dump($g);?>
                <?php if($key<5&&$key>1) { ?>
                <span class="bshape">
                  <img src="<?php echo $g['0'];?>" height="64">
                </span>
                <?php } ?>
                <?php $n++;}unset($n); } ?>
                <span class="bshape last-child">
                  <a href="<?php echo $j['url'];?>">查看<br />
                详细内容
                  </a>
                </span>
              </div>
              <div class="clearfix"></div>
            </div>
          </li>
          <?php $n++;}unset($n); } ?>
        </ul>
        
      </div>
      <?php } ?>
      <?php $n++;}unset($n); } ?>
      <div class=" clearfix"></div>
    </div>
  </section>
  <section> 
    <!--区域选择 开始 --><!--区域选择 结束 -->
    <div class="clearfix"></div>
  </section>
  <section>
    <div class="ctd-TrategyNotes-body">
      <div class="ctd-main">
        <div class="ctd-TrategyNotes-list">
          <h4 class=""><span>精华攻略</span><a class="more" href="/raiders/all">更多</a></h4>
          <ul class="listItem" style="cursor: pointer">
            <?php $n=1; if(is_array($jing_hua)) { foreach($jing_hua as $jh) { ?>
            <li onclick="window.location.href='<?php echo $jh['url'];?>'">
              <div class="pic"><a href="javascript:" ><img src="<?php echo $jh['piclist']['1']['0'];?>" ></a></div>
              <div class="info">
                <h3><a href="<?php echo $jh['url'];?>"><?php echo $jh['title'];?></a></h3>
                <p class="user-line"><a href="<?php echo $jh['url'];?>" target="-blank"><?php echo $jh['author'];?></a><span>|</span>发表于<?php echo date("Y-m-d",$jh['addtime']);?><span>|</span><?php echo $jh['tuceNum'];?>张照片</p>
                <p class="user-con"><span>攻略简述：</span> 
                <?php echo Common::cutstr_html($jh['content'],200);?>
                </p>
                <p class="count-line"> <span class="icon-pic"><i></i>图片<?php echo $jh['tuceNum'];?></span> <span class="icon-comment"><i></i>评论<?php echo $jh['commentnum'];?></span> <span class="icon-view"><i></i>浏览<?php echo $jh['shownum'];?></span> </p>
              </div>
            </li>
            <?php $n++;}unset($n); } ?>
          </ul>
          
          
        </div>
      </div>
      <div class="ctd-side">
        <div class="side-border sid-Recommend">
          <h4>热门攻略推荐</h4>
          <ul>
            <?php $n=1; if(is_array($hotRaiders)) { foreach($hotRaiders as $k => $hotR) { ?>
            <?php if($k<4) { ?>
            <li style="cursor: pointer" onclick="window.location.href='<?php echo $hotR['url'];?>'">
              <div class="note-img"><img src="<?php echo Common::img($hotR['piclist']['1']['0']);?>"/></div>
              <div class="note-con">
                <h5 title="<?php echo $hotR['title'];?>"><?php echo $hotR['title'];?></h5>
                <div class="note-name"><span><?php echo $hotR['author'];?></span>&nbsp;&nbsp;&nbsp;<?php echo date("Y-m-d",$hotR['addtime']);?> </div>
              </div>
            </li>
            <?php } ?>
            <?php $n++;}unset($n); } ?>
          </ul>
        </div>
        <div onclick="location.href='/spots/show_41.html'" style="cursor: pointer">
          <img src="/res/images/index/ad_tuoliang.jpg" alt="驼梁">
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
   $(".search-button").click(function(){
       var button = $("#search").val();
       if(button.length==''){
          return ;
       }
       window.location.href = '/raiders/all?keyword='+button;
   });
   function onkeys(){
     var event = window.event || arguments.callee.caller.arguments[0];
     if (event.keyCode == 13)
     {
       $(".search-button").click();
     }
   }
  function tabcity(th){
    // 获取 应该显示的div  id
     var id  = $(th).attr('data-id');
   //  alert(id);
     $(".ctd-Trategy-List").each(function(){
            $(this).css('display','none');
     });
     $("#"+id).css('display','block');
    //alert(length)
  }
</script>