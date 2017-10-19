<!doctype html>
<html xmlns:ice="http://ns.adobe.com/incontextediting">
<head>
<meta charset="utf-8">
<meta content="telephone=no" name="format-detection" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<title>{$info['business_name']}</title>
  {Common::css('global.css,car-phone.css')}
  {$GLOBALS['cfg_tongjicode']}
</head>
<body>
<div class="banner"><img src="{$info['litpic']}">
  <div class="ticke-tit">
    <p>{$info['business_name']}</p>
  </div>
</div>
<section> 
  
  <!-- tab切换开始 -->
  <div class="fixedTabbox">
    <div class="tab-container">
      <div class="tab-content" >
        <div class="container-fluid ticke-box">
          <div class="show-name">
            <h2 class="ico01">商家介绍</h2>
          </div>
          <div class="con-box">
            <!-----商家介绍内容----->
            <p>联系电话&nbsp;:&nbsp;&nbsp;{$info['tel']}</p>
            <p>商家地址&nbsp;:&nbsp;&nbsp;{$info['address']}</p>

          </div>
        </div>
      </div>
      <?php
      $start  =  strtotime("2017-01-15");

      $over   =  strtotime("2017-02-12");

      $time    =  time();

      ?>
      <?php if($time<$over){?>
      <div class="tab-content" >
        <div class="container-fluid ticke-box">
          <div class="show-name1">
            <h2>2017.01.15-02.12暂停使用</h2>
          </div>
        </div>
      </div>
      <?php }else{?>
        <div class="tab-content" >
        <div class="container-fluid ticke-box">
          <div class="show-name1">
            <h2>出示此页面即可获得优惠</h2>
          </div>
        </div>
      </div>
      <?php }?>
      <div class="tab-content" style="display:block;">
        <div class="container-fluid ticke-box">
          <div class="show-name">
            <h2 class="ico02">优惠价格</h2>
          </div>
          <div class="order-ticket" ice:editable="*">
            <table class="table table-hover" width="100%">
              <tr>
                <th width="25%"><div class="text-left">商家名称</div>
                </th>
                <th width="15%">车型</th>
                <th width="15%">服务</th>
                <th width="15%">优惠价</th>
                <th width="15%">VIP价</th>
                <th width="15%">原价</th>
              </tr>
              {loop $type $v}
              <tr>
                <td><div class="text-left">{$info['business_name']}</div></td>
                <td>{$v['model']}</td>
                <td>{$v['type']}</td>
                <td><i>￥{$v['price']}</i></td>
                <td><del>￥{$v['vipprice']}</del></td>
                <td><del>￥{$v['costprice']}</del></td>
              </tr>
              {/loop}

            </table>
          </div>
        </div>
      </div>

      <div class="tab-content" >
        <div class="container-fluid ticke-box">
          <div class="show-name">
            <h2 class="ico03">优惠详情</h2>
          </div>
          <div class="con-box">
           {$info['detail']}
          </div>
        </div>
      </div>

    </div>
  </div>
  
  <!-- tab切换结束 -->
  </div>
</section>
</body>
</html>
