<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <title>车主服务-河北旅游网</title>
  <meta name="keywords" content="洗车,打蜡,汽车后服务" />
  <meta name="description" content="河北旅游网,为石家庄车主提供洗车、打蜡等汽车后服务优惠" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

  {Common::css('common/bootstrap-min.css,common/public.css,mycss/chejiache/car.css')}

  {Common::js('chejiache/jquery.min.js,chejiache/bootstrap.min.js,chejiache/jquery-1.8.3.min.js,chejiache/jquery.select.js')}
</head>
<body>
{request "pub/header"}
<div id="banner"> </div>


<div class="container">
  <p class="gbmTab1 bg1">&nbsp;</p>
  <div class="carList">
    <ul>
      <?php foreach ($info as $v) {?>
      <?php if($v['id']>6){continue;
      }else{ ?>
      <li>
        <a target="_blank" href="/che/show_{$v['id']}.html">
        <p class="clPic"> <img src="{$v['litpic']}"> <span>{$v['business_name']}</span> </p>
        <div class="clInfo">
          <p class="clMes">{if !empty($v['area'])}<em>{$v['area']}</em>{/if}{$v['describes']} </p>
          <p class="clPrice"> <span class="fl color9">￥&nbsp;<em style="color: #F10027">{$v['minprice']}</em>&nbsp;元起洗车</span> <span class="clpBtn fr">查看商家</span>
          <div class="clearfix"></div>
          </p>
        </div>
        </a>
      </li>
      <?php }}?>

      <div class="clearfix"></div>
    </ul>
  </div>
</div>



<div class="container">
<p class="gbmTab bg2">&nbsp;</p>
  <div class="carList">
    <ul>
      <?php foreach ($info as $v) {?>
      <?php if($v['id']<7||$v['id']>15){
          continue;
      }else{ ?>
      <li> <a target="_blank" href="/che/show_{$v['id']}.html">
        <p class="clPic"> <img src="{$v['litpic']}"> <span>{$v['business_name']}</span> </p>
        <div class="clInfo">
          <p class="clMes">{if !empty($v['area'])}<em>{$v['area']}</em>{/if}{$v['describes']}
          <p class="clPrice"> <span class="fl color9">￥&nbsp;<em style="color: #F10027">{$v['minprice']}</em>&nbsp;元起洗车</span> <span class="clpBtn fr">查看商家</span>
          <div class="clearfix"></div>
          </p>
        </div>
        </a>
      </li>
        <?php }}?>
      <div class="clearfix"></div>
    </ul>
  </div>
</div>


<!--底部-->
{request "pub/footer"}

</body>
</html>