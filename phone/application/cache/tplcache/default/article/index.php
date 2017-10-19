<!doctype html><html><head><meta charset="utf-8"><title><?php echo $seoinfo['seotitle'];?>-<?php echo $GLOBALS['cfg_webname'];?></title><?php if($seoinfo['keyword']) { ?><meta name="keywords" content="<?php echo $seoinfo['keyword'];?>" /><?php } ?>
<?php if($seoinfo['description']) { ?><meta name="description" content="<?php echo $seoinfo['description'];?>" /><?php } ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"><?php echo Common::css('amazeui.css,style.css,extend.css');?><?php echo Common::js('jquery.min.js,amazeui.js,template.js,delayLoading.min.js');?><script>$(function(){$('#my-st-slide').offCanvas('close');$('.st-slider').flexslider({pauseOnAction: false});})</script>    <?php echo $GLOBALS['cfg_tongjicode'];?></head><body>  <?php echo Request::factory("pub/header/typeid/$typeid")->execute()->body(); ?>    <section>        <div class="mid_content">            <div data-am-widget="slider" class="am-slider am-slider-default" data-am-slider='{}' >                <ul class="am-slides">                    <?php require_once ("/home/wwwroot/www.aitto.net/phone/taglib/ad.php");$ad_tag = new Taglib_Ad();if (method_exists($ad_tag, 'getad')) {$data = $ad_tag->getad(array('action'=>'getad','name'=>'s_article_index_1',));}?>                        <?php $n=1; if(is_array($data['aditems'])) { foreach($data['aditems'] as $v) { ?>                        <li><a href="<?php echo $v['adlink'];?>"><img src="/public/images/grey.gif" st-src="<?php echo Common::img($v['adsrc'],640,300);?>" title="<?php echo $v['adname'];?>"></a></li>                        <?php $n++;}unset($n); } ?>                                    </ul>            </div><!--轮播图-->            <div class="st_search_box">                <input type="text" class="st_home_txt keyword" placeholder="搜索攻略" />                <input type="button" class="st_home_btn" value="搜索" />            </div><!--搜索-->            <div class="hot_cp_slide">                <h3><span>最新<?php echo $channelname;?></span></h3>                <div class="news_random">                     <ul>                    </ul>                    <div class="next_btn"><a href="javascript:;" id="btnNextNewArticle"><img src="<?php echo $cmsurl;?>public/images/shuaxin_ico.png" />换一个</a></div>                </div>            </div><!--最新攻略-->            <?php require_once ("/home/wwwroot/www.aitto.net/phone/taglib/dest.php");$dest_tag = new Taglib_Dest();if (method_exists($dest_tag, 'query')) {$data = $dest_tag->query(array('action'=>'query','flag'=>'channel_nav','typeid'=>'4','row'=>'3',));}?>            <?php $n=1; if(is_array($data)) { foreach($data as $row) { ?>            <div class="gl_hot_list">                <h3 class="tit"><span><?php echo $row['kindname'];?></span></h3>                <ul>                    <?php require_once ("/home/wwwroot/www.aitto.net/phone/taglib/article.php");$article_tag = new Taglib_Article();if (method_exists($article_tag, 'query')) {$articlelist = $article_tag->query(array('action'=>'query','flag'=>'mdd','destid'=>$row['id'],'offset'=>'0','row'=>'3','return'=>'articlelist','havepic'=>'false',));}?>                    <?php $n=1; if(is_array($articlelist)) { foreach($articlelist as $articlerow) { ?>                    <li>                        <a href="<?php echo $articlerow['url'];?>">                            <div class="pic"><img src="/public/images/grey.gif" st-src="<?php echo Common::img($articlerow['litpic'],246,244);?>" alt="<?php echo $articlerow['title'];?>" /></div>                            <div class="con">                                <p class="bt"><?php echo $articlerow['title'];?></p>                                <p class="txt"><?php echo Common::cutstr_html($articlerow['summary'],30);?></p>                                <p class="data">                                    <span class="mdd"><?php echo $articlerow['lastdest']['0']['kindname'];?></span>                                    <span class="num"><?php echo $articlerow['shownum'];?></span>                                </p>                            </div>                        </a>                    </li>                    <?php $n++;}unset($n); } ?>                                    </ul>                <div class="list_more"><a href="<?php echo $cmsurl;?>raiders/<?php echo $row['pinyin'];?>">查看更多</a></div>            </div><!--成都攻略-->            <?php $n++;}unset($n); } ?>                        <div class="hot_city">                <h3 class="tit"><span>热门目的地</span></h3>                <ul class="hot_list">                    <?php require_once ("/home/wwwroot/www.aitto.net/phone/taglib/dest.php");$dest_tag = new Taglib_Dest();if (method_exists($dest_tag, 'query')) {$data = $dest_tag->query(array('action'=>'query','flag'=>'hot','typeid'=>'4','offset'=>'0','row'=>'16',));}?>                    <li>                        <?php $n=1; if(is_array($data)) { foreach($data as $row) { ?>                        <?php if($n % 4 == 0) { ?>                            <a href="<?php echo $cmsurl;?>raiders/<?php echo $row['pinyin'];?>"><?php echo $row['kindname'];?></a>                            </li><li>                        <?php } else { ?>                            <a href="<?php echo $cmsurl;?>raiders/<?php echo $row['pinyin'];?>"><?php echo $row['kindname'];?></a>                        <?php } ?>
                        <?php $n++;}unset($n); } ?>                    </li>                                    </ul>            </div><!--热门目的地-->        </div>    </section>    <?php echo Request::factory("pub/footer")->execute()->body(); ?>    <script type="text/html" id="tpl_new_article">        {{each list as value i}}        <li>            <a href="{{value.url}}">                <span class="pic"><img src="{{value.litpic}}" alt="{{value.title}}" /></span>                <p class="tit">{{value.title}}</p>                <p class="txt">{{value.summary}}</p>            </a>        </li>        {{/each}}    </script>    <?php echo Common::js('layer/layer.m.js');?>    <script>        var new_article_index = 0;        $(function(){            $("#btnNextNewArticle").click(function(){                get_new_article();            })            get_new_article();            $(".st_home_btn").click(function(){jump_search();})        })        function get_new_article()        {            layer.open({                type: 2,                content: '正在加载数据...',                time :20            });            var url = SITEURL+'article/ajax_article_order';            $.getJSON(url,{offset:new_article_index,count:1,havepic:false},function(data){                if(data){                    var html = template("tpl_new_article",data);                    $(".news_random ul").html(html);                    new_article_index++;                }                layer.closeAll();            })        }        function jump_search()        {            var keyword = $(".keyword").val();            var url = SITEURL+'raiders/all';            if(url!=''){                url+='?keyword='+encodeURIComponent(keyword);            }            location.href = url;        }    </script></body></html>