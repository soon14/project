<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>验单历史记录</title>
<meta name="viewport" id="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php echo Common::css("style.css,base.css");?>
    <?php echo Common::js("jquery.min.js");?>
</head>
<body>

  <header class="header-top">
  <div class="ht-back"></div>
    <h1 class="ht-h1">验单记录</h1>
    <span class="top-search"></span>
  </header>

  <section class="content">
  <div class="mark-list-box">
    
    <div class="search-tc-box">
      <input type="text" class="" id="smscode" placeholder="请输入短信消费码" value="<?php echo $_GET['searchKey'];?>" />
        <span id="searchbtn" style="cursor: pointer;">确定</span>
      </div><!-- search -->
      
      <div class="mark-list-con">
      <ul>
            <?php $n=1; if(is_array($data['list'])) { foreach($data['list'] as $v) { ?>
        <li>
          <div class="num"><span>消费码：<?php echo $v['smscode'];?></span><em><?php if($v['isconsume']==1 ) { ?>已消费<?php } else { ?>未消费<?php } ?>
</em></div>
            <div class="nr">
                <a href="<?php echo $cmsurl;?>mobile/order/show?id=<?php echo $v['id'];?>"><div class="pic"><img src="<?php echo $v['litpic'];?>" alt="asdf" /></div></a>
              <div class="txt">
              <p> <?php echo $v['productname'];?></p>
                <p class="order"></p>
              </div>
              <div class="jg"><strong>&yen;<?php echo $v['unitprice'];?></strong><span>x<?php echo $v['num'];?></span></div>
            </div>
            <div class="hj">合计：<span>&yen;<?php echo $v['total'];?></span></div>
            </a>
          </li>
         <?php $n++;}unset($n); } ?>
        </ul>
      </div><!-- list -->
      
    </div>
  </section>
  <script>
      $(function(){
          $('.ht-back').click(function(){
              history.go(-1);
          })
          //搜索
          $("#searchbtn").click(function(){
              var code = $("#smscode").val();
              if(code==''){
                  $("#smscode").focus();
              }else{
                  url = "<?php echo $cmsurl;?>"+'mobile/order/check_history?searchKey='+code;
                  window.location.href = url;
              }
          })
      })
  </script>
</body>
</html>
