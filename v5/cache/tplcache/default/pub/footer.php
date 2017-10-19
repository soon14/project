
<div style="clear: both"></div>
<div class="footer">
  <!-- 网站底部 开始-->
  <div class="container">
    <div class="footer-top">
      <div class="footer-r">
        <div class="code">
          <p><img src="/res/images/erweima.jpg"></p>
          <h3>河北旅游网微信公众号</h3>
        </div>
        <div class="code">
          <p><img src="/res/images/erweima2.jpg"></p>
          <h3>米淘亲子游微信公众号</h3>
        </div>
      </div>
      <ul class="footer-l">
        <li>
          <h2>联系我们</h2>
          <p>全国统一客服电话：<span>0311-87885822</span></p>
          <p>意见邮箱：3011930149@qq.com</p>
        </li>
        <li class="ab-list"><h2>关于我们</h2>
          <?php require_once ("/home/wwwroot/www.aitto.net/taglib/footnav.php");$footnav_tag = new Taglib_Footnav();if (method_exists($footnav_tag, 'pc')) {$data = $footnav_tag->pc(array('action'=>'pc','row'=>'10',));}?>
          <?php $n=1; if(is_array($data)) { foreach($data as $k => $row) { ?>
          <a href="<?php echo $row['url'];?>"><?php echo $row['title'];?></a>
          <?php $n++;}unset($n); } ?>
          
        <li class="dh-list"><h2>站点导航</h2>
          <?php require_once ("/home/wwwroot/www.aitto.net/taglib/channel.php");$channel_tag = new Taglib_Channel();if (method_exists($channel_tag, 'pc')) {$data = $channel_tag->pc(array('action'=>'pc','row'=>'20',));}?>
          <?php $n=1; if(is_array($data)) { foreach($data as $row) { ?>
          <a href="<?php echo $row['url'];?>"><?php echo $row['title'];?></a>
          <?php $n++;}unset($n); } ?>
          
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <span style="color:#c2c2c2;margin-bottom: 4px;display: inline-block;">友情连接：</span>
    <div class="footer-link">
      <?php echo Request::factory("pub/flink")->execute()->body(); ?>
    </div>
    <div class="footer-bottom">
      <p>2004-2016 © 河北旅游网 ™ aitto.net All rights reserved. Version v5.57 冀ICP备16007967号-1<br />
        营业执照新出网证（京）字242号 </p>
    </div>
  </div>
  <!-- 网站底部 结束-->
</div>
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
