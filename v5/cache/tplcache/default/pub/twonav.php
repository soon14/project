<div class="ctd-head-city">
  <div class="container">
    <div class="ctd-title">
      <div class="ctd-name">
        <h1><?php echo $info['kindname'];?></h1>
        <br>
        <span class="en"><?php echo $info['pinyins'];?></span></div>
      <div class="ctd-Season">  </div>
    </div>
    <div class="navbar-con">
      <ul class="navbar clearfix">
        <li class="city-guide"> <a class="navbar-btn" href="<?php echo $cmsurl;?><?php echo $info['pinyin'];?>?param=survey" <?php if($params=='survey') { ?>style="border-bottom: 3px solid #aea181;padding-bottom: 10px;"<?php } ?>
> <i class="navbar-icon"></i><span>概况</span> </a> </li>
        <li class="human-guide"> <a class="navbar-btn" href="<?php echo $cmsurl;?><?php echo $info['pinyin'];?>?param=human" <?php if($params=='human') { ?>style="border-bottom: 3px solid #ba7ae4;padding-bottom: 10px;"<?php } ?>
> <i class="navbar-icon"></i><span>人文历史</span> </a> </li>
        <li class="map-guide"> <a class="navbar-btn" href="<?php echo $cmsurl;?><?php echo $info['pinyin'];?>?param=map" <?php if($params=='map') { ?>style="border-bottom: 3px solid #63c799;padding-bottom: 10px;"<?php } ?>
> <i class="navbar-icon"></i><span>地图</span> </a> </li>
        <li class="scenic-guide"> <a class="navbar-btn" href="<?php echo $cmsurl;?><?php echo $info['pinyin'];?>?param=spot" <?php if($params=='spot') { ?>style="border-bottom: 3px solid #bada25;padding-bottom: 10px;"<?php } ?>
> <i class="navbar-icon"></i><span>景点</span> </a> </li>
        <li class="hotel-guide"> <a class="navbar-btn" href="<?php echo $cmsurl;?><?php echo $info['pinyin'];?>?param=hotel" <?php if($params=='hotel') { ?>style="border-bottom: 3px solid #e7788e;padding-bottom: 10px;"<?php } ?>
> <i class="navbar-icon"></i><span>酒店</span> </a> </li>
        <li class="restaurant-guide"> <a class="navbar-btn" href="<?php echo $cmsurl;?><?php echo $info['pinyin'];?>?param=restaurant" <?php if($params=='restaurant') { ?>style="border-bottom: 3px solid #f07d6c;padding-bottom: 10px;"<?php } ?>
> <i class="navbar-icon"></i><span>饭店</span> </a> </li>
        <li class="Specialty-guide"> <a class="navbar-btn" href="<?php echo $cmsurl;?><?php echo $info['pinyin'];?>?param=specialty" <?php if($params=='specialty') { ?>style="border-bottom: 3px solid #ff9d00;padding-bottom: 10px;"<?php } ?>
> <i class="navbar-icon"></i><span>特产</span> </a> </li>
        <li class="Raiders-guide"> <a class="navbar-btn" href="<?php echo $cmsurl;?><?php echo $info['pinyin'];?>?param=raider" <?php if($params=='raider') { ?>style="border-bottom: 3px solid #7cacf5;padding-bottom: 10px;"<?php } ?>
> <i class="navbar-icon"></i><span>攻略</span> </a> </li>
        <li class="travels-guide"> <a class="navbar-btn" href="<?php echo $cmsurl;?><?php echo $info['pinyin'];?>?param=note" <?php if($params=='note') { ?>style="border-bottom: 3px solid #f5c500;padding-bottom: 10px;"<?php } ?>
> <i class="navbar-icon"></i><span>游记</span> </a> </li>
      </ul>
    </div>
  </div>
</div>
<script>
  $(function(){
    /*
     * 1.输入城市名
     * 2，点击的时候发送请求
     * 3.响应成功渲染页面
     * */
    var city = "<?php echo $info['kindname'];?>"||'石家庄';
    $.ajax({
      type:'get',
      url:'http://api.map.baidu.com/telematics/v3/weather?output=json&ak=0A5bc3c4fb543c8f9bc54b77bc155724',
      data:{location:city},
      dataType:'jsonp',
      success:function(data){
        var  html='';
        if(data.error==0){// 查询成功
          var weather_data = data.results[0].weather_data[0];
         // html += "<span>"+weather_data.temperature+"</span><span>"+weather_data.weather+"</span>";
          html += "<span class='weather'>"+weather_data.weather+"&nbsp;&nbsp;"+weather_data.temperature+"</span>";
          html += "<span class='month'>(最佳旅游月份：<em><?php echo $info['best_travel_month'];?></em>&nbsp;&nbsp;最佳旅游天数：<em><?php echo $info['best_travel_day'];?></em>)</span>";
        }else{
          html += "<span class='month'>(最佳旅游月份：<em><?php echo $info['best_travel_month'];?></em>&nbsp;&nbsp;最佳旅游天数：<em><?php echo $info['best_travel_day'];?></em>)</span>";
          
        }
        $('.ctd-Season').html(html);
      }
    });
  });
</script>