<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>{$destinfo['kindname']}评论</title>
  {Common::css('2017common/bootstrap.css,2017common/public.css')}

  {Common::css('2017new_ver/city.css')}
  {Common::js('jquery-1.11.3.min.js')}
  <style>
    .ctd-star li.onaa  {
      background-position: 0 0px;

    }
  </style>
  {$GLOBALS['cfg_tongjicode']}
</head>
<body>
<section>
  <header class="comm-city-head">
    <p class="head-pic"><img src="{$destinfo['litpic']}" height="204"></p>
    <div class="head-cityName"><h2>{$destinfo['kindname']}印象</h2></div>


<!--    <div class="head-mask"></div>-->
  </header>
  <div class="ctd-common-warp">

    <div class="head-impress" style="padding-left: 0px;" id="star">
      <span>城市印象:</span>
      <ul class="ctd-star" style="display:inline;" >
        <li><a href="javascript:;"></a></li>
        <li><a href="javascript:;"></a></li>
        <li><a href="javascript:;"></a></li>
        <li><a href="javascript:;"></a></li>
        <li><a href="javascript:;"></a></li>
      </ul>
      <span></span>
      <p></p>
    </div>
    <!--城市标签 开始-->
  <div class="city-label" id="checkbox">
    
    <h4>石家庄标签：（最多选择3个标签）</h4>
    <ul class="options">

      <?php foreach($destinfo['tag'] as $k=>$v){?>
      <li>

        <input type="hidden" name="tags<?php echo $k+1?>" value="<?php echo $v['id']?>">
        <i class="checkbox-icon"></i><?php echo $v['tag_name']?>
      </li>
     <?php }?>
    </ul>
    <div class="clearfix"></div>
  </div>
  <!--城市标签 结束-->
  </div>
  <div class="ctd-no-content"></div>

  <div class="ctd-comment-btn">
    <div class="comment-ico">
      <span><i class="num">{$destinfo['commentnum']}</i></span>
    </div>
    <div class="comment-com" onclick="show_textarea(1)">写评论</div>
  </div>
  
  <div class="comment-active" id ="com" style="bottom:0px">
    <div class="act-top"><textarea name="" cols="" rows="" class="act-text"></textarea></div>
    <div class="act-bot"><a class="act-cancel" href="javascript:" onclick="show_textarea()">取消</a><a class="act-report tj-btn" href="javascript:" >发表</a></div>
  </div>
</section>

<input type="hidden" id="user" name="user" value="{$user['mid']}">
</body>
</html>
{Common::js('layer/layer.js',0)}
<script>
  var textArea = document.getElementById('com');
  function  show_textarea(_index){
    _index ?
       textArea.setAttribute('style','bottom: 0')
       // textArea.style.bottom = '0';
    :
    textArea.setAttribute('style','bottom: -161px');
  }

  //提交问答
  $(".tj-btn").click(function(){
    var user      = $("#user").val();
    var urls      = window.location.href;//获取当前页面的地址 当做重定向地址
    if(user.length==0){
      var url = '/phone/member/login/?redirecturl='+urls;//
      window.location.href  =url ;
    }else {
      var kindid = "{$destinfo['id']}";

      var code = "{$checkcode}";

      var typeid = 20;//  定义 此项  的模型 为 20  注 模型表里没有 该项

      var content = $("textarea[class=act-text]").val();

      var tags     = $("li[class=checked]").length;

      var  level   = $("li[class=onaa]").length;

      if (content.length < 5) {
        layer.msg('{__("回复内容太少")}', {
          icon: 5
        })
        return false;
      }
      if(level<1||level>5){
        layer.msg('{__("选择你的城市印象")}', {
          icon: 5
        })
        return false;
      }
      if(tags>3){
        layer.msg('{__("最多选择3个标签")}', {
          icon: 5
        })
        return false;
      }
      if(tags==0){
        layer.msg('{__("请选择标签")}', {
          icon: 5
        })
        return false;
      }
      var tag =new  Array();
      var i=1;
      $("li[class=checked]").each(function(){

        tag.push('tag'+i+'='+$(this).find('input').val());
        ++i;
      });

      var   ta="kindid="+kindid+"&typeid="+typeid+"&content="+content+"&tags="+tags+"&level="+level+"&code="+code;
      ta+="&"+tag.join("&");
//alert(ta);
      $.ajax({
        type: 'POST',
        url: '/phone/destination/kind_comments',
        data:ta,
        dataType:'json',
        success: function (data) {
          if(data['status']==111) {

            layer.msg("评论成功");
            location.href='/phone/{$destinfo[pinyin]}/des-comment';

          }else if(data['status']==112){

            layer.msg(data['msg']);
          }

        }

      })

    }
  })
</script>
{Common::js('20170301_new/bootstrap-min.js')}
<script type="text/javascript">
  window.onload = function() {

    var oStar = document.getElementById("star");
    var oLi = oStar.getElementsByTagName("li");

    //这里标签后面的数组表示同一类标签的第一个元素

    var oUl = oStar.getElementsByTagName("ul")[0];
    var oSpan = oStar.getElementsByTagName("span")[1];
    var oP = oStar.getElementsByTagName("p")[0];

    var iScore = iStar = 0;

    var aMsg = ['很不满意', '不满意', '一般', '满意', '非常满意'];

    for(var i = 0; i < oLi.length; i++) {

      oLi[i].index = i + 1;
      //
      //保证当前数字从从1开始，实际位置为0（因为是数组）
      oLi[i].onmousemove = function() {
        showStar(this.index);
      };
      //当鼠标离开后，那么当前调用函数无参数，选择默认样式
      oLi[i].onmouseout = function() {
        showStar();
      };

      // 单击时，用全局变量暂存对应的数字，这样下一次滑动，
      // 单击的数字颜色就会改变
      oLi[i].onclick = function() {
        iStar = this.index;
      }
    }



    //这里主要控制星星的变色问题，如果参数为真值，那么就选择带有颜色的样式，否则反之

    function showStar(_index) {

      //因为isStar始终为零，所以或运算结果为左边的数字

      iScore = _index || iStar

      for(var i = 0; i < oLi.length; i++) {

        oLi[i].className = i < iScore ? "onaa" : "";
        // oLi[i].css("background-position","0 1px")
      }

    }

  }
  function zifu(th){
    var thisval=$(th).val().length*1;
    var shengyu = 500-thisval;
    if(shengyu>0) {
      var html = "已输入<b><em>" + thisval + "</em>/" + shengyu + "</b>字";
      $(th).next('span').html(html);
    }else{
      layer.msg('{__("不能输入了")}', {
        icon: 5
      })
      return false;
    }
  }
</script>