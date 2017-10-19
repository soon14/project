<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>{$searchtitle}-{$GLOBALS['cfg_webname']}</title>
    {include "pub/varname"}
    {Common::css('mycss/driving.css,mycss/base.css')}
    {Common::js('jquery.min.js,base.js,common.js')}
</head>
<body>
   {request "pub/header"}
   <section>
       <div class="container crumbs"> <a href="#" class="current">旅游套餐</a><sub class="songti">-&gt;</sub><a href="#" class="current">石家庄周边游</a><sub class="songti">-&gt;</sub>自驾游</div>
       <div class="container">
           <div class="tlist_left">


               <!---选项卡插件多种tab标签切换开始---><!--tabbox end-->

               <div class="ticket_list">
                   <ul>
                       <?php $time  = time(); ?>
                       {loop $list $line}
                       <?php
                       //fengjishu 08.02 jia
                       $linedate = strtotime($value['linedate']);
                       $cha      = ($time -$linedate)*1;
                       ?>
                       <li>
                           <div class="img_contain"><img src="{Common::img($line['litpic'])}" width="100%"></div>
                           <div class="ticket_detail">
                               <h4>{$line['title']}</h4>
                               <div class="detail_text">
                                   <p>组织&nbsp;:&nbsp;&nbsp;一起留念俱乐部</p>
                                   <div class="clearfix"></div>
                               </div>
                               <div class="col-info1">
                                   <div class="col-ma-3 col-line1">
                                       <p class="red">
                                           {if !empty($line['storeprice'])}
                                           {Currency_Tool::symbol()}{$line['storeprice']}元
                                           {else}
                                           电询
                                           {/if}
                                       </p>
                                       费用</div>
                                   <div class="col-ma-3 col-line1">
                                       <p>{$line['selfDriMdd']}</p>
                                       目的地</div>
                                   <div class="col-ma-3">
                                       <p>{$line['linedate']}</p>
                                       自驾时间</div>
                                   <div class="clearfix"></div>
                               </div>

                           </div>
                           <?php if($cha>0){  ?>
                               <div class="ticket_yuding1" ><a class="a_book"  href="{$line['url']}" style="background: #ccc;">活动已结束</a></div>
                           <?php }else{?>
                           <div class="ticket_yuding1"><a class="a_book" target="_blank" href="{$line['url']}">报名</a></div>
                           <?php }?>
                       </li>
                       {/loop}
                   </ul>
               </div>


               <!---分页显示开始--->
               <div class="uPageBox">
                   <div class="uPage">
                       {$pageinfo}
                   </div>
               </div>
               <!---分页显示结束--->


           </div>
           <div class="tlist_right">


               <div class="sider-tit">热门推荐门票</div>
               <div class="sider-con">
                   {st:spot action="query" flag="order" row="4" return="spotlist"}
                   {loop $spotlist $spot}
                   <div class="col-box" style="margin-bottom:15px;">
                       <a href="{$spot['url']}" title="{$spot['title']}">
                           <div class="col-img-box" >
                               <div class="col-img"><img src="{Common::img($spot['litpic'])}"> </div>
                               <div class="col-bottom">
                                   <div class="col-tt">
                                       <p>门票</p>
                                   </div>
                                   <div class="col-price"><span>¥{$spot['price']}</span>
                                       <yuan>元</yuan>
                                   </div>
                               </div>
                           </div>
                       </a>
                       <div class="col-tit"><a href="{$spot['url']}" title="{$spot['title']}">{$spot['title']}</a></div>
                   </div>
                   {/loop}
                   {/st}
               </div>


           </div>
           <div class="clearfix"></div>
       </div>
   </section>
   {request "pub/footer"}
   {request "pub/flink"}
</body>
</html>
