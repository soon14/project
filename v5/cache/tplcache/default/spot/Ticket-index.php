<!DOCTYPE html>
<html>
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
  <?php echo Common::css('common/bootstrap-min.css,common/public.css,mycss/spot/Ticket.css');?>
  <?php echo Common::js('common/jquery-1.11.3.min.js,common/bootsAitto-min.js');?>
  <script>
    $(document).ready(function () {
     $('.ctd-ticket-scenic:eq(1)').find('div[class=ctd-tickets]:eq(0)').css('display','block');
     $('.ctd-ticket-scenic:eq(2)').find('div[class=ctd-tickets]:eq(0)').css('display','block');
    })
        function change(th){
          var  index = $(th).index();
          $(th).parent().parent().siblings('div[class=ctd-tickets]').css({'display':'none'});
          $(th).parent().parent().siblings('div[class=ctd-tickets]:eq('+index+')').css('display',"block")
        }
  </script>
  <?php echo $GLOBALS['cfg_tongjicode'];?>
</head>
<body>
<!-- 登陆代码 开始 -->
<?php echo Request::factory("pub/header")->execute()->body(); ?>
<!-- 登陆代码 结束 -->
<div class="notebox"></div>
<div class="ctd-head-box"> 
  <!-- 图片相册上下切换开始 -->
  <?php require_once ("/home/wwwroot/www.aitto.net/taglib/ad.php");$ad_tag = new Taglib_Ad();if (method_exists($ad_tag, 'getad')) {$data = $ad_tag->getad(array('action'=>'getad','name'=>'s_spot_index_1','pc'=>'1',));}?>
  <div class="ck-slide">
    <ul class="ck-slide-wrapper">
      <?php $src  = $data['aditems'];?>
      <?php for($i=0;$i<count($src);$i++):?>
      <li <?php if($i>0) { ?>style="display:none"<?php } ?>
><a href="<?php echo $src[$i]['adlink'];?>"><img src="<?php echo $src[$i]['adsrc'];?>" width="100%" height="100%"></a></li>
      <?php endfor?>
    </ul>
    <a href="javascript:;" class="ctrl-slide ck-prev">上一张</a>
    <a href="javascript:;" class="ctrl-slide ck-next">下一张</a>
    <div class="ck-slidebox">
      <div class="slideWrap">
        <ul class="dot-wrap">
          <?php for($i=0;$i<count($src);$i++):?>
          <li <?php if($i==0) { ?>class="current"<?php } ?>
><em><?php echo $i+1;?></em></li>
          <?php endfor?>
        </ul>
      </div>
    </div>
  </div>
  
  <!-- js --> 
  
  
  <!-- 图片相册上下切换结束 --> 
    <!-- 搜索条 开始 -->
  <div class="ticket-search-container">
    <div class="search-group"> 
      
      <!-- 全部 begin -->
      
      <div class="ticket-search-hot">
        <ul>
          <li class="md hot-line">
            <h4><i></i>目的地</h4>
            <?php require_once ("/home/wwwroot/www.aitto.net/taglib/dest.php");$dest_tag = new Taglib_Dest();if (method_exists($dest_tag, 'query')) {$hotdest = $dest_tag->query(array('action'=>'query','flag'=>'hot','typeid'=>$typeid,'destid'=>'0','row'=>'11','return'=>'hotdest',));}?>
            <?php $n=1; if(is_array($hotdest)) { foreach($hotdest as $dest) { ?>
            <a href="<?php echo $cmsurl;?>spots/<?php echo $dest['pinyin'];?>" style="color: #FFFFff"><?php echo $dest['kindname'];?></a>
            <?php $n++;}unset($n); } ?>
            
          </li>
          <li class="zt hot-line">
            <h4><i></i>主题</h4>
            <?php require_once ("/home/wwwroot/www.aitto.net/taglib/attr.php");$attr_tag = new Taglib_Attr();if (method_exists($attr_tag, 'query')) {$attrlist = $attr_tag->query(array('action'=>'query','flag'=>'childitem','typeid'=>'5','groupid'=>'13','row'=>'10','return'=>'attrlist',));}?>
            <?php $n=1; if(is_array($attrlist)) { foreach($attrlist as $k => $attr) { ?>
            <a href="/spots/all-0-0-<?php echo $attr['id'];?>-1" style="color: #FFFFff"><?php echo $attr['attrname'];?></a>
            <?php $n++;}unset($n); } ?>
            
          </li>
          <li class="sj">
            <h4><i></i>热门景区</h4>
            <!------07.06 fengjishu  设置热门同网站首页热门景点一致 s------->
            <?php require_once ("/home/wwwroot/www.aitto.net/taglib/usernav.php");$usernav_tag = new Taglib_Usernav();if (method_exists($usernav_tag, 'childnav')) {$childnav = $usernav_tag->childnav(array('action'=>'childnav','parentid'=>'1','row'=>'11','return'=>'childnav',));}?>
            <?php if(!empty($childnav)) { ?>
            <?php $n=1; if(is_array($childnav)) { foreach($childnav as $c) { ?>
            <a href="<?php echo $c['url'];?>" target="_blank"> <?php echo $c['kindname'];?> </a>
            <?php $n++;}unset($n); } ?>
            <?php } ?>
            
            <!------07.06 fengjishu  e------->
            </li>
        </ul>
      </div>
      <!-- 全部 end -->
      <div class="clearfix"></div>
    </div>
  </div>
  <!-- 搜索条 结束 --> 
</div>
<?php //exit?>
<div class="container">
  <section>
    <div class="ctd-ticket-subject">
      <ul>
        <?php require_once ("/home/wwwroot/www.aitto.net/taglib/ad.php");$ad_tag = new Taglib_Ad();if (method_exists($ad_tag, 'getad')) {$data = $ad_tag->getad(array('action'=>'getad','name'=>'s_spot_index_2','pc'=>'1',));}?>
        <?php $src  = $data['aditems'];?>
        <?php for($i=0;$i<count($src);$i++):?>
        <li><a href="<?php echo $src[$i]['adlink'];?>"><img src="<?php echo $src[$i]['adsrc'];?>"></a></li>
        <?php endfor?>
        
        <div class="clearfix"></div>
      </ul>
    </div>
  </section>
  <section>
    <div class="ctd-ticket-TimeSale">
      <div class="Ticket-title"><span>精选热卖</span>河北最热门的景区</div>
      <div class="Ticket-Index-warp">
        <ul>
          <?php require_once ("/home/wwwroot/www.aitto.net/taglib/spot.php");$spot_tag = new Taglib_Spot();if (method_exists($spot_tag, 'query')) {$data = $spot_tag->query(array('action'=>'query','flag'=>'sellmore','row'=>'4',));}?>
          <?php $n=1; if(is_array($data)) { foreach($data as $v) { ?>
          <li  onclick="window.location.href='<?php echo $v['url'];?>'" style="cursor: pointer">
            <div class="Ticket-IBox">
              <div class="Ticket-IBut"><a href="<?php echo $v['url'];?>"><img src="/res/images/spot/Ticket-IBut.png"></a></div>
              <div class="Ticket-IPic">
                <div class="MaskTit">
                  <p><?php echo $v['title'];?></p>
                </div>
                <div class="add"><i></i><span class="big"><?php echo $v['mdd'];?></span></div>
                <img src="<?php echo Common::img($v['litpic']);?>"> </div>
              <div class="Ticket-Iprice"> <?php if(!empty($v['price'])) { ?><dfn>抢购价:&nbsp;¥</dfn><span><?php echo $v['price'];?><?php } else { ?><dfn>电询</dfn><?php } ?>
</span></div>
            </div>
          </li>
          <?php $n++;}unset($n); } ?>
          
          <div class="clearfix"></div>
        </ul>
      </div>
    </div>
  </section>
  <section> 
    <!-- 门票首页 推荐景点-->
    <div class="ctd-ticket-scenic">
      <div class="J-con-tit">
        <h2>周<span>末</span>游</h2>
        <div class="more"><a href="/spots/all">查看更多内容</a></div>
      </div>
      <div class="ctd-tickets">
        <ul>
          <?php require_once ("/home/wwwroot/www.aitto.net/taglib/spot.php");$spot_tag = new Taglib_Spot();if (method_exists($spot_tag, 'query')) {$holidays = $spot_tag->query(array('action'=>'query','flag'=>'attr','row'=>'3','attrid'=>'31','return'=>'holidays',));}?>
          <?php //var_dump($holidays)?>
          <?php $n=1; if(is_array($holidays)) { foreach($holidays as $day) { ?>
          <li onclick="window.location.href='<?php echo $day['url'];?>'" style="cursor: pointer">
            <div class="J-inner">
              <div class="J-img"><img src="<?php echo Common::img($day['litpic']);?>">
                <div class="J-magazine">
                  <p><?php echo $day['mdd'];?></p>
                </div>
              </div>
              <div class="J-price">
                <p class="price"><?php if($day['price']) { ?>&yen;<i><?php echo $day['price'];?></i><?php } else { ?>电询<?php } ?>
</p>
                <div class="ticket-tit">
                  <h2><a href="javascript:;"><?php echo $day['title'];?></a></h2>
                  <h3><?php if($day['grade']) { ?><?php echo $day['grade'];?>级景区<?php } ?>
</h3>
                </div>
              </div>
            </div>
          </li>
          <?php $n++;}unset($n); } ?>
          
        </ul>
      </div>
    </div>
  </section>
  <section> 
    <!-- 门票首页 推荐景点-->
    <div class="ctd-ticket-scenic">
      <div class="J-con-tit">
        <h2>热门<span>目的</span>地</h2>
        <ul class="J-con-nav" data-toggle="tabs" data-target="tab-content1">
          <?php $n=1; if(is_array($hot_mdd)) { foreach($hot_mdd as $k => $attr) { ?>
          <li <?php if($k == 0) { ?>class="current"<?php } ?>
 onclick='change(this)'><a href="javascript:void(0)"><?php echo $attr['kindname'];?></a></li>
          <?php $n++;}unset($n); } ?>
        </ul>
        <div class="more"><a href="/spots/all">查看更多内容</a></div>
      </div>
      <?php $n=1; if(is_array($hot_mdd)) { foreach($hot_mdd as $k => $attr) { ?>
      <?php require_once ("/home/wwwroot/www.aitto.net/taglib/spot.php");$spot_tag = new Taglib_Spot();if (method_exists($spot_tag, 'query')) {$hotspot = $spot_tag->query(array('action'=>'query','flag'=>'mdd','row'=>'3','destid'=>$attr['kindid'],'return'=>'hotspot',));}?>
      <div class="ctd-tickets" style="display: none">
        <ul>
          <?php $n=1; if(is_array($hotspot)) { foreach($hotspot as $hot) { ?>
          <li onclick="window.location.href='<?php echo $hot['url'];?>'" style="cursor: pointer">
            <div class="J-inner">
              <div class="J-img"><img src="<?php echo Common::img($hot['litpic']);?>">
                <div class="J-magazine">
                  <p><?php echo $hot['mdd'];?></p>
                </div>
              </div>
              <div class="J-price">
                <p class="price"><?php if($hot['price']) { ?>&yen;<i><?php echo $hot['price'];?></i> <?php } else { ?>电询<?php } ?>
</p>
                <div class="ticket-tit">
                  <h2><a href="javascript:;"><?php echo $hot['title'];?></a></h2>
                  <h3><?php if($hot['grade']) { ?><?php echo $hot['grade'];?>级景区<?php } ?>
</h3>
                </div>
              </div>
            </div>
          </li>
          <?php $n++;}unset($n); } ?>
        </ul>
      </div>
      
      <?php $n++;}unset($n); } ?>
    </div>
  </section>
  <section> 
    <!-- 门票首页 推荐景点-->
    <div class="ctd-ticket-scenic">
      <div class="J-con-tit">
        <h2>热门<span>主</span>题</h2>
        <ul class="J-con-nav" data-toggle="tabs" data-target="tab-content1">
          <?php require_once ("/home/wwwroot/www.aitto.net/taglib/attr.php");$attr_tag = new Taglib_Attr();if (method_exists($attr_tag, 'query')) {$attrlist = $attr_tag->query(array('action'=>'query','flag'=>'childitem','typeid'=>'5','groupid'=>'13','row'=>'4','return'=>'attrlist',));}?>
          <?php $n=1; if(is_array($attrlist)) { foreach($attrlist as $k => $attr) { ?>
          <li <?php if($k == 0) { ?>class="current" <?php } ?>
 onclick='change(this)'><a href="javascript:void(0)"><?php echo $attr['attrname'];?></a></li>
          <?php $n++;}unset($n); } ?>
          
        </ul>
        <div class="more"><a href="/spots/all">查看更多内容</a></div>
      </div>
      <?php $n=1; if(is_array($attrlist)) { foreach($attrlist as $k => $attr) { ?>
      <?php require_once ("/home/wwwroot/www.aitto.net/taglib/spot.php");$spot_tag = new Taglib_Spot();if (method_exists($spot_tag, 'query')) {$hotspot = $spot_tag->query(array('action'=>'query','flag'=>'attr','row'=>'3','attrid'=>$attr['id'],'return'=>'hotspot',));}?>
      <div class="ctd-tickets" style="display: none">
        <ul>
          <?php $n=1; if(is_array($hotspot)) { foreach($hotspot as $hot) { ?>
          <li onclick="window.location.href='<?php echo $hot['url'];?>'" style="cursor: pointer">
            <div class="J-inner">
              <div class="J-img"><img src="<?php echo Common::img($hot['litpic']);?>">
                <div class="J-magazine">
                  <p><?php echo $hot['mdd'];?></p>
                </div>
              </div>
              <div class="J-price">
                <p class="price"><?php if($hot['price']) { ?>&yen;<i><?php echo $hot['price'];?></i> <?php } else { ?>电询<?php } ?>
</p>
                <div class="ticket-tit">
                  <h2><a href="javascript:;"><?php echo $hot['title'];?></a></h2>
                  <h3><?php if($hot['grade']) { ?><?php echo $hot['grade'];?>级景区<?php } ?>
</h3>
                </div>
              </div>
            </div>
          </li>
          <?php $n++;}unset($n); } ?>
        </ul>
      </div>
      
      <?php $n++;}unset($n); } ?>
    </div>
  </section>
</div>
<?php echo Request::factory("pub/footer")->execute()->body(); ?>
</body>
</html>
<?php echo Common::js('myjs/spot/bootstrap-Ticket.js');?>
<script>$('.ck-slide').ckSlide({autoPlay: true});</script>