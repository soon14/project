
<footer>
  <!-- 网站底部 开始-->
  <div style="clear: both"></div>
  <div class="footer-server">
    <div class="J-navbar">
      <ul>
        <li>
          <div class="J-btn-inner"><i class="J-ico01"></i><span class="J-btn-text">丰富品质游</span></div>
        </li>
        <li>
          <div class="J-btn-inner"><i class="J-ico02"></i><span class="J-btn-text">河北领先</span></div>
        </li>
        <li>
          <div class="J-btn-inner"><i class="J-ico03"></i><span class="J-btn-text">旅游一站式服务</span></div>
        </li>
        <li>
          <div class="J-btn-inner"><i class="J-ico04"></i><span class="J-btn-text">价格优惠</span></div>
        </li>
        <li>
          <div class="J-btn-inner"><i class="J-ico05"></i><span class="J-btn-text">资源丰富</span></div>
        </li>
        <div class="clearfix"></div>
      </ul>
    </div>
  </div>
  <div class="container J-top">
    <div class="footer-box">
      <div class="footer-about">
        <div class="footer-logo">
          <img src="/res/images/common/footer-logo.png" width="278" height="74" class="left">
          <span>

             {st:footnav action="pc" row="10"}
             {loop $data $k $row}
             <a href="{$row['url']}">{$row['title']}</a>|
             {/loop}
             {/st}

          </span>
        </div>
        <p>2004-2016 © 河北旅游网 ™ aitto.net All rights reserved. Version v5.57 冀ICP备16007967号-1 </p>
        {request "pub/flink"}
      </div>
      <div class="tel"><img src="/res/images/common/con-tel.png" ></div>
    </div>
  </div>
  <!-- 网站底部 结束-->
</footer>
<!-- 网站置顶 开始-->
<div class="mfw-toolbar toolbar-item-a" id="_j_mfwtoolbar" style="display: block;">
  <div class="toolbar-item-code"><a class="toolbtn _j_code"> <i class="icon-code"></i> </a>
    <div class="code-box">
      <h2 class="drop-tit">扫二维码 关注官方微信</h2>
      <div class="WeChat"></div>
    </div>
  </div>
  <div class="toolbar-item-top"> <a class="toolbtn _j_gotop"> <i class="icon-top"></i> </a> </div>
</div>
<!-- 网站置顶 结束-->
<script>
//登陆下拉
$(document).ready(function(){
  $(".drop").mouseover(function(){	
      $(this).addClass("hover");
	  $(this).next(".dropdown2").show()
  });
  $(".drop").mouseout(function(){	
      $(this).removeClass("hover");
	  $(this).next(".dropdown2").hide()
  });
});
</script> 
