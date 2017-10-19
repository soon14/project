<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title>订单详情-<?php echo $webname;?></title>
    <?php echo Common::css("style.css,base.css");?>
    <?php echo Common::js("jquery.min.js");?>
</head>
<body>
<div class="page-box">
        <?php echo Request::factory('pc/pub/header')->execute()->body(); ?>
        <?php echo  Stourweb_View::template('pc/pub/sidemenu');  ?>
    
    <div class="main">
    <div class="content-box">
            <?php echo  Stourweb_View::template("pc/pub/qualifyalert");  ?>
        <div class="frame-box">
        <div class="frame-con">
          
            <div class="order-box">
              <div class="order-show-tit"><strong class="bt">订单详情</strong></div>
              <div class="order-con">
                
                <div class="order-msg">
<ul>
                  <li><strong>订单号：</strong><?php echo $info['ordersn'];?></li>
                  <li><strong>产品名称：</strong><?php echo $info['productname'];?></li>
                  <li><strong>下单时间：</strong><?php echo date('Y-m-d H:i',$info['addtime']);?></li>
                  <li><strong>订单总额：</strong><span class="jg">&yen;<?php echo $info['total'];?></span></li>
                  <li><strong>订单状态：</strong>
                        <?php if($info['status']==1) { ?>
                        <span class="dfk">待付款</span>
                        <?php } else if($info['status']==0) { ?>
                        <span class="dcl">待处理</span>
                        <?php } else if($info['status']==3) { ?>
                        <span class="yqx">已取消</span>
                        <?php } else if($info['status']==5 && $info['ispinlun']==0) { ?>
                        <span class="wdp">未点评</span>
                        <?php } else { ?>
                        <span class="ywc">已完成</span>
                        <?php } ?>
                    </li>
                  </ul>
                </div><!-- 订单信息 -->
                  <?php echo  Stourweb_View::template("pc/order/tongyong_detail");  ?>
                  <div class="order-item">
                      <div class="os-tit">联系人信息</div>
                      <div class="item-con">
                          <ul class="nr">
                              <li>姓名：<?php echo $info['linkman'];?></li>
                              <li>手机号码：<?php echo $info['linktel'];?></li>
                              <li>电子邮箱：<?php echo $info['linkemail'];?></li>
                          </ul>
                          <?php if(!empty($info['remark'])) { ?>
                          <div class="remarks">订单留言：<?php echo $info['remark'];?></div>
                          <?php } ?>
                      </div>
                  </div><!-- 联系人信息 -->
                
              </div>
              
              <div class="back-prev"><a class="back-btn" href="#">返回</a></div>
              
            </div><!-- 订单详情 -->
          
          </div>
        </div>
        
        <div class="st-record">Copyright@2015思途CMS</div>
        
      </div>
    </div><!-- 主体内容 -->
  
  </div>
</body>
</html>
