
<?php
$point =array();
$maker =array();
$i= 0;
foreach($out[0] as $K=>$v){

  $point[$i] ='new BMap.Point('.$v['lng'].','.$v['lat'].')';
  $maker[$i] ='var marker'.$i.' = new BMap.Marker(point|'.$i.'+)';
  $maker[$i] .= ';map.addOverlay(marker'.$i.')';
  $i++;
}
$s = json_encode($point,true);
$point = str_replace("\"","",$s);
$maker = json_encode($maker,true);
$maker = str_replace(array("\"","[","]"),"",$maker);
$maker = str_replace(array(",","|","+"),array(";","[","]"),$maker);
//echo $maker;
//exit;
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$info['kindname']}旅游地图-河北旅游网</title>
    <meta name="keywords" content="{$info['kindname']}旅游地图" />
    <meta name="description" content="河北旅游网，为您提供{$info['kindname']}景区旅游地图" />
  {Common::css('common/bootstrap-min.css,common/public.css,mycss/destination/Destination.css')}

  {Common::js('common/jquery-1.11.3.min.js,common/bootsAitto-min.js,myjs/destination/Destination.js')}

  <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Nv7ePdYOGgT28WZqsGZOeBuH">

  </script>
    {$GLOBALS['cfg_tongjicode']}
</head>
<body class="Color-fafafa">
<!-- 登陆代码 开始 -->
{request "pub/header"}
<!-- 登陆代码 结束 -->
<div class="notebox"></div>
<section> 
  <!-- 面包屑 开始 -->
  <div  class="BreadCrumb Color-fff">
    <ul >
      <li><a href="/">首页<i class="icon-gt">&gt;</i></a></li>
      <li><a href="/{$info['pinyin']}?param=survey">{$info['kindname']}<i class="icon-gt">&gt;</i></a></li>
      <li class="current"><a href="#">地图</a></li>
    </ul>
    <div class="clearfix"></div>
  </div>
  <!--  面包屑 结束 --> 
</section>
<section>
  {request "pub/CommonNav"}
</section>
<div class="container">
  <section> 
    <!-- 内容备注-->
    <div class="ctd-map-body">
      <h2><i></i>石家庄旅游地图</h2>
      <div class="ctd-side">
        <div class="ctd-map-tab">
          <ul>
            <li><input type="checkbox"  name = "sMap" value="1" {if $mes[0]=="1"}checked="checked"{else}{/if}>景点</li>
            <li><input type="checkbox"  name = "hMap" value="2" {if $mes[1]=="2"}checked="checked"{else}{/if}>酒店</li>
            <li><input type="checkbox"  name = "rMap" value="3" {if $mes[2]=="3"}checked="checked"{else}{/if}>饭店</li>
          </ul>
        </div>
        <div class="ctd-map-search">
          <input name="" id="serach" type="text" placeholder="请输入题目、地址" value="{$keyword}"  onkeydown="entersearch()"/>
          <div class="but search"><a href="javascript:" >搜索</a></div>
        </div>
        <div class="ctd-map-list">
          <ul>
            {loop $out[0] $k $data}
            <li onclick="opens({$k})" style="cursor: pointer">
              <div class="box-img"><img src="{if $data[litpic]}{$data['litpic']}{else}{Common::nopic()}{/if}"/></div>
              <div class="box-con">
                <h5>{$data['title']}</h5>
                <div class="price">价格：<span>&yen;{$data['price']}</span></div>
                <div class="scr-tag"><span class="tag-name">地址：</span><a href="javascript:;" class="tag" title="{$data['address']}">{$data['address']}</a></div>
              </div>
            </li>
            {/loop}
          </ul>
        </div>
        <div class="ctd-map-page">{if $page==1}<span class="prev" style="background: grey"><a href="javascript:" style="color: white;">首页</a></span>{else}<span class="prev"><a href="javascript:" onclick="pre()">上一页</a></span>{/if}{if $page==$alltotal}<span class="prev" style="background: grey"><a href="javascript:" style="color: white;" >尾&nbsp;&nbsp;页</a></span>{else}<span class="prev"><a href="javascript:" onclick="next()">下一页</a></span>{/if}</div>
      </div>
      <div class="ctd-main" >
        <div class="cdt-map" id="destmap"></div>
      </div>
      <div class="clearfix"></div>
    </div>
  </section>
</div>

{request "pub/footer"}
</body>
</html>
<script type="text/javascript">

  var map = new BMap.Map("destmap");
  //==========================================
  map.centerAndZoom("{$info['kindname']}", 8);
  setTimeout(function(){
      map.setZoom(11);
  }, 2000);  //2秒后放大到14级
  map.addControl(new BMap.NavigationControl());//地图平移缩放控件
  map.enableScrollWheelZoom();
<?php
echo "var point=".$point.";";
echo $maker;
?>
  //  var opts1 = {offset : new BMap.Size(0, -25), title : '<span style="font-size:14px;color:#0A8021">{$out[0][0]['title']}</span>'};
  //  var opts2 = {offset : new BMap.Size(0, -25), title : '<span style="font-size:14px;color:#0A8021">{$out[0][1]['title']}</span>'};
  //  var opts3 = {offset : new BMap.Size(0, -25), title : '<span style="font-size:14px;color:#0A8021">{$out[0][2]['title']}</span>'};
  //  var opts4 = {offset : new BMap.Size(0, -25), title : '<span style="font-size:14px;color:#0A8021">{$out[0][3]['title']}</span>'};
  //  var opts5 = {offset : new BMap.Size(0, -25), title : '<span style="font-size:14px;color:#0A8021">{$out[0][4]['title']}</span>'};
  //  var infoWindow1 = new BMap.InfoWindow("<div style='line-height:1.8em;font-size:12px;'><b>地址:</b>{$out[0][0]['address']}</br><b>电话:</b>{$out[0][0]['telephone']}</br><img src='{$out[0][0][litpic]}' width='350' height='200'><br/> <a style='text-decoration:none;color:#2679BA;float:right' href='#'>详情>></a></div>", opts1);  // 创建信息窗口对象，引号里可以书写任意的html语句。
  //  var infoWindow2 = new BMap.InfoWindow("<div style='line-height:1.8em;font-size:12px;'><b>地址:</b>{$out[0][1]['address']}</br><b>电话:</b>{$out[0][0]['telephone']}</br><a style='text-decoration:none;color:#2679BA;float:right' href='#'>详情>></a></div>", opts2);
  //  var infoWindow3 = new BMap.InfoWindow("<div style='line-height:1.8em;font-size:12px;'><b>地址:</b>{$out[0][2]['address']}</br><b>电话:</b>{$out[0][0]['telephone']}</br><a style='text-decoration:none;color:#2679BA;float:right' href='#'>详情>></a></div>", opts3);
  //  var infoWindow4 = new BMap.InfoWindow("<div style='line-height:1.8em;font-size:12px;'><b>地址:</b>{$out[0][3]['address']}</br><b>电话:</b>{$out[0][0]['telephone']}</br><a style='text-decoration:none;color:#2679BA;float:right' href='#'>详情>></a></div>", opts4);
  //  var infoWindow5 = new BMap.InfoWindow("<div style='line-height:1.8em;font-size:12px;'><b>地址:</b>{$out[0][4]['address']}</br><b>电话:</b>{$out[0][0]['telephone']}</br><a style='text-decoration:none;color:#2679BA;float:right' href='#'>详情>></a></div>", opts5);
  //
  //  marker1.addEventListener("mouseover", function(){this.openInfoWindow(infoWindow1);});
  //  marker2.addEventListener("mouseover", function(){this.openInfoWindow(infoWindow2);});
  //  marker3.addEventListener("mouseover", function(){this.openInfoWindow(infoWindow3);});
  //  marker4.addEventListener("mouseover", function(){this.openInfoWindow(infoWindow4);});
  //  marker5.addEventListener("mouseover", function(){this.openInfoWindow(infoWindow5);});
  map.setViewport(point);

  <?php
     $wininfo ='';
     $j=0;
     foreach($out[0] as $Ke=>$va){

        $wininfo .= " var opts".$j." = {offset : new BMap.Size(0, -25), title : '<span style=\"font-size:14px;\"><b><a href=\"".$va['url']."\" style=\"color:black\">".$va['title']."</a><b></span>'};";
        $wininfo .=" var infoWindow".$j." = new BMap.InfoWindow(\"<div style='line-height:1.8em;font-size:12px;'><b>地址:&nbsp;&nbsp;</b>".$va['address']."</br><b>电话:&nbsp;&nbsp;</b>".$va['telephone']."</br><a href='".$va['url']."'><img src='".$va['litpic']."' width='350' height='200'></a><br/> </div>\", opts".$j.");";  // 创建信息窗口对象，引号里可以书写任意的html语句。
        $wininfo .=" marker".$j.".addEventListener(\"mouseover\", function(){this.openInfoWindow(infoWindow".$j.");});";
        $j++;
        echo $wininfo;
     }

 ?>
  function opens(k){
      switch (k){
          case 0 :   marker0.openInfoWindow(infoWindow0);break;
          case 1 :   marker1.openInfoWindow(infoWindow1);break;
          case 2 :   marker2.openInfoWindow(infoWindow2);break;
          case 3 :   marker3.openInfoWindow(infoWindow3);break;
          case 4 :   marker4.openInfoWindow(infoWindow4);break;
      }

  }
</script>
<script>
  $(".search").click(function () {
    var  keyword = $(this).siblings("input").val();
          var tag =new Array();

          $("input[type=checkbox]:checked").each(function () {
                tag.push($(this).attr('name')+'='+$(this).val());
          })
       var url  = "/{$info['pinyin']}?param=map&keyword="+keyword+"&"+tag.join("&");

    window.location =url;

  })
  function pre(){
      var  keyword = $("#serach").val();
      var tag =new Array();
      $("input[type=checkbox]:checked").each(function () {
          tag.push($(this).attr('name')+'='+$(this).val());
      })
      var url  = "/{$info['pinyin']}?param=map&page={$page-1}&keyword="+keyword+"&"+tag.join("&");

      window.location =url;
    }
  function next(){
      var  keyword = $("#serach").val();
      var tag =new Array();
      $("input[type=checkbox]:checked").each(function () {
          tag.push($(this).attr('name')+'='+$(this).val());
      })
      var url  = "/{$info['pinyin']}?param=map&page={$page+1}&keyword="+keyword+"&"+tag.join("&");

      window.location =url;
  }
  function entersearch(){
      //alert(dd);
      var event = window.event || arguments.callee.caller.arguments[0];
      if (event.keyCode == 13)
      {
          $(".search").click();
      }
  }
</script>