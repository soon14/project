<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>{$searchtitle}-{$GLOBALS['cfg_webname']}</title>
  {include "pub/varname"}
  {Common::css('base.css')}<!---分页的样式 在这个文件里面--->
  {Common::css('mycss/article/base.css,mycss/article/travels-strategy.css,mycss/travels-strategy.css')}
  {Common::js('myjs/jquery-1.8.3.min.js,myjs/jquery.select.js,jquery.jcarousel.min.js,strateg.js')}
  <style>
    .on{
      background: #2577e3 none repeat scroll 0 0;
      color: #fff;}
    .chooseitem{
      background: #00b7ee none repeat scroll 0 0;
      color: #fff;
      float: left;
      height: 24px;
      line-height: 24px;
      margin: 0 10px 10px 0;
      padding: 0 8px 0 10px;
    }
    .con{
      background: rgba(0, 0, 0, 0) url("/res/images/st-line-ico.png") no-repeat scroll 0 0;
      cursor: pointer;
      display: block;
      float: right;
      height: 7px;
      margin: 9px 0 0 5px;
      width: 7px;}
    .s{
      background: rgba(0, 0, 0, 0) url("/res/images/img/icon_ctd_bg.png") repeat scroll 0 -483px;
      height: 16px;
      width: 15px;
    }
    .btn_srhs{
      background: #ff6537 none repeat scroll 0 0;
      color: #fff;
      font-family: "微软雅黑";
      font-size: 15px;
      width: 100px;
      border: medium none;
      float: left;
      height: 35px;
      line-height: 35px;
      padding-left: 10px;
    }
  </style>
</head>
<body bgcolor="#f5f5f5">
{request "pub/header"}
<div style="clear:both"></div>
<!-- 图片相册上下切换开始 -->
{st:ad action="getad" name="s_article_index_1" pc="1"}
<?php //var_dump($data);?>
<div class="connected-carousels">
  <!-- 大图 -->
  <div class="stage">
    <div class="prev-stage"><span></span></div>
    <div class="next-stage"><span></span></div>
    
    <div class="carousel carousel-stage">    
      <ul>
        {loop $data['aditems'] $val}
          <li>
            <img src="{$val['adsrc']}" alt="">
            <div class="car-txt">
             <h2>飞狐峪、小五台金河景区二日游</h2>
             <p>地址：石家庄&nbsp;&nbsp;时间：2016/3/6</p>
            </div>
          </li>
        {/loop}
        <li><img src="/res/images/test-img/img2.jpg" alt="">
        <div class="car-txt">
         <h2>武安长寿村、朝阳沟两日游</h2>
         <p>地址：石家庄&nbsp;&nbsp;时间：2016/3/6</p>
        </div></li>
        <li><img src="/res/images/test-img/img3.jpg" alt="">
        <div class="car-txt">
         <h2>邢台绿水池村、峡沟村二日游</h2>
         <p>地址：石家庄&nbsp;&nbsp;时间：2016/3/6</p>
        </div></li>
        <li><img src="/res/images/test-img/img4.jpg" alt="">
        <div class="car-txt">
         <h2>惊险 刺激！现实版的盗墓笔记竟发生在</h2>
         <p>地址：石家庄&nbsp;&nbsp;时间：2016/3/6</p>
        </div></li>
        <li><img src="/res/images/test-img/img5.jpg" alt="">
        <div class="car-txt">
         <h2>飞狐峪、小五台金河景区二日游</h2>
         <p>地址：石家庄&nbsp;&nbsp;时间：2016/3/6</p>
        </div></li>
      </ul>
     
    </div>
      
  </div>
  <!-- 小图 -->
  <div class="navigation">    
    <div class="carousel carousel-navigation">
      <ul>
        {loop $data['aditems'] $v}
        <li><img src="{$v['adsrc']}" width="86" height="60" alt=""></li>
        {/loop}
        <li><img src="/res/images/test-img/img2_thumb.jpg" width="86" height="60" alt=""></li>
        <li><img src="/res/images/test-img/img3_thumb.jpg" width="86" height="60" alt=""></li>
        <li><img src="/res/images/test-img/img4_thumb.jpg" width="86" height="60" alt=""></li>
        <li><img src="/res/images/test-img/img5_thumb.jpg" width="86" height="60" alt=""></li>
      </ul>
    </div>
  </div>  
  

    
</div>
{/st}
<!-- 图片相册上下切换结束 -->





<section>

  <!-- <div class="container crumbs">
     <a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a>
     <span class="songti">-&gt;</span>
     <a href="{$cmsurl}raiders/">{$channelname}</a>
     {loop $predest $pre}
     <span class="songti">-&gt;</span>
      <a href="{$cmsurl}raiders/{$pre['pinyin']}/">
        {$pre['kindname']}
      </a>
      {/loop}
   </div>-->
  <div class="container">
    <div class="tlist_left">


      <div class="sublist">

        <div class="ticket_search">
          <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tbody>
            <tr>
              <td width="16%"></td>
            </tr>
            <tr>
              <td class="ticket_b_b" bgcolor="#eff4fa" width="16%">已选条件：</td>
              <td width="84%">
                <div class="ticket_city">
                  <span class="chooseitem" <?php if(isset($_GET['keyword'])){?>style="display: block"<?php }else{?>style="display: none"<?php }?>><?php if(isset($_GET['keyword'])){echo $_GET['keyword']; }?></span>
                  {loop $chooseitem $item}
                  <span class="chooseitem" data-url="{$item['url']}">{$item['itemname']}<i class="con"></i></span>
                  {/loop}
                  <a href="javascript:;" class="clearc">清空筛选条件 </a>
                </div>
              </td>
            </tr>
            <!-----------以后下面目的地的需要打开 封冀蜀 06.28 2016  start--------------->
            <tr>
              <td class="ticket_b_b" bgcolor="#eff4fa" width="16%">目的地：</td>
              <td width="84%"><div class="ticket_city">
                  <ul class="ticket_ab">
                    {st:dest action="query" typeid="$typeid" flag="nextsame" row="30" pid="$destid" return="destlist"}
                    {loop $destlist $dest}
                    <li {if $predest[0]['pinyin']==$dest['pinyin']}class="on"{/if}> <a href="{$cmsurl}raiders/{$dest['pinyin']}/" >{$dest['kindname']}</a> </li>
                    {/loop}
                    {/st}
                    {if count($destlist)>10}
                    <em><b>展开</b><i></i></em>
                    {/if}
                    <div class="clearfix"></div>
                  </ul>
                </div>
              </td>
            </tr>
            <!-----------以后下面目的地的需要打开 封冀蜀 06.28 2016 END--------------->
            <!--属性组读取-->
            {st:attr action="query" flag="grouplist" typeid="$typeid" return="grouplist"}
            {loop $grouplist $group}
            {if $group['attrname']!='目的地'}
            {if $group['attrname']!='游记·攻略'}
            <tr>
              <td class="ticket_b_b" bgcolor="#eff4fa" width="16%">{if $group['attrname']=='攻略'}主题：{else}{$group['attrname']}{/if}</td>
              <td width="84%">
                <div class="ticket_city">
                  <ul class="ticket_ab">
                    {st:attr action="query" flag="childitem" typeid="$typeid" groupid="$group['id']" return="attrlist"}
                    {loop $attrlist $attr}
                    <li {if Common::check_in_attr($param['attrid'],$attr['id'])!==false}CLASS="on"{/if}><a href="{Model_Article::get_search_url($attr['id'],'attrid',$param)}" >{$attr['attrname']}</a> </li>
                    {/loop}
                    {/st}
                    <div class="clearfix"></div>
                  </ul>
                </div>
              </td>
            </tr>
            {/if}
            {/if}
            {/loop}
            {/st}
            <tr>
              <td class="ticket_b_b" bgcolor="#eff4fa" width="16%">目的地搜索</td>
              <td width="84%">
                <div class="search-tip">石家庄-</div>
                <div class="search1">
                  <input class="inp_srh" id="keyboard" name="keyboard"  placeholder="输入景区、目的搜索攻略" >
                  <input class="btn_srhs" id="submit"type="submit" name="submit" value="搜索">
                </div>
              </td>
            </tr>

            </tbody>
          </table>
        </div>


      </div>

      <!---选项卡插件多种tab标签切换开始---><!--tabbox end-->

      <div class="ticket_list">
        {if !empty($list)}
        <ul>
          {loop $list $a}
          <li><a href="{$a['url']}">
              <div class="img_contain"><img src="{$a['litpic']}"  alt="{$a['title']}" width="100%"></div>
              <div class="ticket_detail">
                <h4>{$a['title']}</h4>
                <div class="col-info1">
                  <div>
                    <p>{Common::cutstr_html($a['content'],100)}</p>
                  </div>
                  <div class="about-tit">
                    <p>
                      <span class="icon_view"><i class="s"></i>评论{$a['commentnum']}</span>
                      <span class="icon_comment"><i></i>浏览{$a['shownum']}</span>
                      <span class="icon_add"><i></i>目的地&nbsp;:&nbsp;{$a['gl_mdd']}</span>
                      <span class="icon_time"><i></i>时间：{date("Y-m-d",$a['addtime'])}</span>
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </a>
          </li>
          {/loop}
        </ul>
        <div class="main_mod_page clear">
          {$pageinfo}
        </div><!-- 翻页 -->
        <!---分页显示开始-->

        <!---分页显示结束--->
        {else}
        <div class="no-content">
          <p><i></i>抱歉，没有找到相关攻略！<a href="/raiders/all">查看全部攻略</a></p>
        </div>
        {/if}
      </div>



    </div>
    <div class="tlist_right">
      <div class="sider-tit">热门游记</div>
      {loop $hotRaiders $hotR}
      <div class="sider-con" style="margin-bottom:-35px">
        <div class="col-box" style="margin-bottom:15px;"> <a href="{$hotR['url']}" title="{$hotR['title']}">
            <div class="col-img-box" >
              <div class="col-img"><img src="{Common::img($hotR['litpic'])}" alt="{$hotR['title']}"> </div>
              <div class="col-bottom">
                <div class="col-tt" style="margin-top: -38px;">
                  <p >{$hotR['title']}</p>
                </div>
              </div>
            </div>
          </a>
        </div>

      </div>
      {/loop}
    </div>
    <div class="clearfix"></div>
  </div>

</section>
{request "pub/footer"}
{request "pub/flink"}
</body>
</html>
<script>
  $(function(){

    $("#keyboard").keydown(function(e){
      if(e.keyCode==13){
        $('#submit').click();
      }
    });
    //搜索
    $("#submit").click(function(){

      var  keyword  = $("#keyboard").val();

      var url  = "/raiders/all?keyword="+encodeURIComponent(keyword)
      location.href = url ;

    })
    //搜索条件去掉最后一条边框
    $('.line-search-tj').find('dl').last().addClass('bor_0')
    $(".line-search-tj dl dd em").toggle(function(){
      $(this).prev().height('auto');
      $(this).children('b').text('收起');
      $(this).children('i').addClass('up')
    },function(){
      $(this).prev()().height('24px');
      $(this).children('b').text('展开');
      $(this).children('i').removeClass('up')
    });

    //排序方式点击
    $('.sort-sum').find('a').click(function(){
      var url = $(this).find('i').attr('data-url');
      window.location.href = url;
    })
    //删除已选
    $(".chooseitem").find('i').click(function(){
      var url = $(this).parent().attr('data-url');
      window.location.href = url;
    })
    //清空筛选条件
    $('.clearc').click(function(){
      var url = SITEURL+'raiders/all/';
      window.location.href = url;
    })
    //隐藏没有属性下级分类
    $(".type").each(function(i,obj){
      var len = $(obj).find('dd p a').length;
      if(len<1){
        $(obj).hide();
      }
    })
  })

</script>