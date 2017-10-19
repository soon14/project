<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>{$info['title']}-{$webname}</title>
    {include "pub/varname"}
    {Common::css('youji.css,base.css,extend.css')}
    {Common::js('jquery.min.js,base.js,common.js')}
</head>

<body>

{request "pub/header"}
  

  <div class="fb_top_bg" style=" background:url({$info['bannerpic']}) center no-repeat">
  	<div class="show_tit"><strong>{$info['title']}</strong></div>
  </div>
  
  <div class="big msg_shadow">
  	<div class="show_msg">
    	<img src="{$member['litpic']}" alt="{$member['nickname']}" width="130" height="130" />
    	<span class="name">{$member['nickname']}</span>
    	<span class="date">{Common::mydate('Y-m-d H:i',$info['modtime'])}</span>
    	<span class="num">{$info['shownum']}人已阅</span>

      <div class="bdsharebuttonbox fr">
        <a href="#" class="bds_more" data-cmd="more"></a>
        <a href="#" class="bds_qzone" data-cmd="qzone"></a>
        <a href="#" class="bds_tsina" data-cmd="tsina"></a>
        <a href="#" class="bds_tqq" data-cmd="tqq"></a>
        <a href="#" class="bds_renren" data-cmd="renren"></a>
        <a href="#" class="bds_weixin" data-cmd="weixin"></a>
      </div>
      <script>
        window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
      </script>
    </div>
  </div>
  
	<div class="big">
  	<div class="wm-1200">
    	
			<div class="show_txt_con">
      	<div class="show_js">
        	<span class="qm"></span>
          <span class="hm"></span>
        	{$info['description']}
        </div>
        <div class="show_nr">
            {$info['content']}
        </div>
      </div>
      
      <div class="st-sidebox">

          {st:right action="get" typeid="$typeid" data="$templetdata" pagename="show"}
      </div><!-- 右侧自定义内容 -->
      
    </div>
  </div>

{request "pub/footer"}

<script>
    $(function(){
        var typeid = "{$typeid}";
        var productid = "{$info['id']}";
        $.getJSON(SITEURL+'pub/ajax_add_shownum',{typeid:typeid,productid:productid},function(){});
    })
</script>

</body>
</html>
