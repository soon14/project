<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>地图</title>
  {Common::css('2017common/bootstrap.css,2017common/public.css')}

  {Common::css('2017new_ver/layout.css')}
  {Common::js('jquery-1.11.3.min.js')}
  <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Nv7ePdYOGgT28WZqsGZOeBuH"></script>
    {$GLOBALS['cfg_tongjicode']}
</head>
<body>
<header id="_j_search_nav" class="Dest-search-head">
  <div class="searchBox">
    <div class="search_p">
      <form>
        <div class="search_box"> <span class="dest_search_txt">搜索</span>
          <input id="dest_search_input" class="search_text" placeholder="搜索题目或地址" type="text" value="{if $keyword}{$keyword}{/if}" onkeyup="onkeys()">
          <a href="javascript:;" style="" class="dest_search_btn"></a> </div>
      </form>
        <script>
            function onkeys(){
                var event = window.event || arguments.callee.caller.arguments[0];
                if (event.keyCode == 13)
                {
                    $(".dest_search_btn").click();
                }
            }
        </script>
    </div>
  </div>
  <div class="map-searchNav">
    <ul class="clearfix">
      <li data-name="sMap" data-value="2" onclick="refalsh(this)" {if $mes[2]=="2"}class='current'{/if}><span><i></i>景点</span></li>
      <li data-name="hMap" data-value="1" onclick="refalsh(this)" {if $mes[1]=="1"}class='current'{/if}><span><i></i>酒店</span></li>

    </ul>
  </div>
</header>
<section class="ctd-map clearfix">
  <div id="destmap">

    </div>

  <ul class="map_list" id="map_data">

  </ul>

</section>
</body>
</html>

<?php
$point =array();
$maker =array();
$i= 0;
foreach($out[0] as $K=>$v){

  if(!empty($v['lng'])&&!empty($v['lat'])) {
    $point[$i] = 'new BMap.Point(' . $v['lng'] . ',' . $v['lat'] . ')';
    $maker[$i] = 'var marker' . $i . ' = new BMap.Marker(point|' . $i . '+)';
    $maker[$i] .= ';map.addOverlay(marker' . $i . ')';
    $i++;
  }
}
$s = json_encode($point,true);
$point = str_replace("\"","",$s);
$maker = json_encode($maker,true);
$maker = str_replace(array("\"","[","]"),"",$maker);
$maker = str_replace(array(",","|","+"),array(";","[","]"),$maker);
//echo $maker;
//exit;
?>
<script>
  var j =true;
  function a(){
    var phoneHeight =document.documentElement.clientHeight;//获取 手机端的 高度

    var headerHeight = document.getElementById('_j_search_nav').offsetHeight;
    var i = phoneHeight-headerHeight;
    var mapss  = document.getElementById('destmap');
    mapss.setAttribute('style','width:100%;height:'+i+'px;');
    j=true;
  }

  window.addEventListener("resize", function(){
    if(j){
      j=false;
     // a();
    }
  });
  a();
  var map = new BMap.Map("destmap");
  //==========================================
  map.centerAndZoom("{$destinfo['kindname']}", 8);
  setTimeout(function(){
    map.setZoom(10);
  }, 2000);  //2秒后放大到14级
  var  icon1= new BMap.Icon('http://api0.map.bdimg.com/images/marker_red_sprite.png',new BMap.Size(40,28),{
      anchor :new BMap.Size(11, 30)
  });
  var  icon2= new BMap.Icon('/phone/public/images/20170301/mapIcon.png',new BMap.Size(60,48),{
      anchor:  new BMap.Size(15,40)
  });


  <?php
     echo "var point=".$point.";\n";
     echo $maker."\n";
       $wininfo ='';
       $j=0;
       foreach($out[0] as $Ke=>$va){

          $wininfo .= " var opts".$j." =\"<li class='clearfix'> <a href='".$va['url']."' target='blank'>\"\n";
          $wininfo .= "     opts".$j."+=\"<div class='ticket-pic'>\"\n";
          $wininfo .= "     opts".$j."+=\"<div class='ticket-txt'>".$va['mdd']."</div>\"\n";
          $wininfo .= "     opts".$j."+=\"<img class='Ticket-itemimg' src='".$va['litpic']."'></div>\"\n";
          $wininfo .= "     opts".$j."+=\"<div class='ticket-info'>\"\n";
          $wininfo .= "     opts".$j."+=\"<h3 class='ticket-tit'>".$va['title']."</h3>\"\n";
          $wininfo .= "     opts".$j."+=\"<p class='ticket-address'>".$va['address']."</p>\"\n";
          $wininfo .= "     opts".$j."+=\"<p class='ticket-servicetag'><span>电话:".$va['telephone']."</span></p>\"\n";
          if($va['price']){
          $wininfo .= "     opts".$j."+=\"<p class='ticket_price'><dfn>¥</dfn><strong>".$va['price']."</strong>起</p>\"\n";
          }
          $wininfo .= "     opts".$j."+=\"</div></a></li>\"\n";
       //   $wininfo .= "     opts".$j."+=\"<div style='text-align: center;'><a href='javascript:;' onclick='next()' style='border:1px solid;padding:3px'>换一批</a></div>\"\n";
          $wininfo .=" marker".$j.".addEventListener(\"click\", function(){

                 $('#map_data').empty().append(opts".$j.");
                  marker0.setIcon(icon1);
                  marker1.setIcon(icon1);
                  marker2.setIcon(icon1);
                  marker3.setIcon(icon1);
                  marker4.setIcon(icon1);
                  marker5.setIcon(icon1);
                  marker6.setIcon(icon1);
                  marker7.setIcon(icon1);
                  marker8.setIcon(icon1);
                  marker9.setIcon(icon1);
                  this.setIcon(icon2);

             });\n";
          $j++;

       }
       echo $wininfo;
       echo "\n";
     ?>

  $(document).ready(function() {
      function icon(){
      var icon1 = marker1.getIcon();
      icon1.size = new BMap.Size(155, 85)
      icon1.imageSize = new BMap.Size(40, 28)
      icon1.anchor = new BMap.Size(11, 30)
      }
      icon();
  });
  function refalsh(th){

    var page = "{$page}";
    $(th).toggleClass('current');
    var  keyword = $('#dest_search_input').val();
    var tag =new Array();
    $(th).parent().children('li[class=current]').each(function () {
      tag.push($(this).attr('data-name')+'='+$(this).attr('data-value'));
    });
    var url = "/phone/{$destinfo['pinyin']}/des-map?page="+page+"&keyword="+keyword+"&"+tag.join("&");
   window.location.href =url;
  }
  function next(){
    var total  = "{$alltotal}";
    var  keyword = $('#dest_search_input').val();
    var page = "{$page}";
    if(total==page){
      alert('没有更多数据了');
      return false;
    }else {
      page = page * 1 + 1;
      var tag = new Array();
      $('.map-searchNav ul').find('li[class=current]').each(function () {
        tag.push($(this).attr('data-name') + '=' + $(this).attr('data-value'));
      });
      var url = "/phone/{$destinfo['pinyin']}/des-map?page=" + page + "&keyword=" + keyword + "&" + tag.join("&");
      window.location.href = url;
    }
  }
$('.dest_search_btn').click(function(){
     suosou();
});
  $(".dest_search_txt").click(function(){
    suosou();
  })
function suosou(){
    var page = "{$page}";

    var  keyword = $('#dest_search_input').val();
    if(keyword.length==''){
        alert('请输入您搜索的内容');
        $('#dest_search_input').focus();
        return false;
    }else{
        var tag =new Array();
        $('.map-searchNav ul').find('li[class=current]').each(function () {
            tag.push($(this).attr('data-name')+'='+$(this).attr('data-value'));
        });
        var url = "/phone/{$destinfo['pinyin']}/des-map?page="+page+"&keyword="+keyword+"&"+tag.join("&");
        window.location.href =url;
    }

}

</script>



{Common::js('20170301_new/bootstrap-min.js')}