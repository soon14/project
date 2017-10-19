<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>{$seoinfo['seotitle']}-{$GLOBALS['cfg_webname']}</title>
{if $seoinfo['keyword']}
<meta name="keywords" content="{$seoinfo['keyword']}" />
{/if}
    {if $seoinfo['description']}
<meta name="description" content="{$seoinfo['description']}" />
{/if}
    {include "pub/varname"}
    {Common::css('mycss/driving.css,mycss/base.css')}
    {Common::js('jquery.min.js')}
    </head>
    <body>
{request "pub/header"}
<div id="banner" style=" background: url(/res/images/myimages/banner1.jpg) no-repeat center; height:360px;"></div>
<div class="container" >
      <div class="main_title text-center">
    <div class="main_more" style="top:5px;"><a href="/lines/all"><img src="/res/images/img/more.png"></a></div>
    <h2 class="index_title"><i class="main_t_ico4"></i>自驾游</h2>
    <span>一起流年，遇见不一样的风景</span> </div>
      <div class="container-fluid">
    <div class="row-fluid">
          <div class="tabbable " id="tabs-687555"> 
        <!--ul class="nav nav-pills">
                    <li class="active"> <a href="#panel-502216" data-toggle="tab">正在进行</a> </li>
                    <li> <a href="#panel-80964" data-toggle="tab">已过期</a> </li>
                </ul-->
        <div class="tab-content">
              <div class="tab-pane  active" id="panel-502216">
             {st:line action="query" flag="new" row="3" return="linelist"}
             <?php $time  = time(); ?>
            {loop $linelist $value}
                  <?php
                        //fengjishu 08.02 jia
                         $linedate = strtotime($value['linedate']);
                         $cha      = ($time -$linedate)*1;
                  ?>
            <div class="col-md-3" >
                  <div class="col-box"> <a href="{$value['url']}" title="{$value['title']}">
                    <div class="col-img-box1">
                    <div class="col-img1"><img src="{Common::img($value['litpic'])}"> </div>
                    <div class="col-bottom">
                        <div class="col-com">
                        <p>{$value['title']}</p>
                      </div>
                      </div>
                  </div>
                    </a>
                <div class="col-info">
                      <div class="col-ma-3 col-line">
                    <p> {if $value['storeprice']}
                          {$value['storeprice']}元
                          {else}
                          电询
                          {/if} </p>
                    费用</div>
                      <div class="col-ma-3 col-line">
                    <p>{$value['selfDriMdd']}</p>
                    目的地</div>
                      <div class="col-ma-3">
                    <p>{$value['linedate']}</p>
                    自驾时间</div>
                      <div class="clearfix"></div>
                    </div>
                 <?php if($cha>0){  ?>
                    <div class="col-but" style="background: #ccc;"><a href="javascript:void(0)">活动已结束</a></div>
                 <?php }else{?>
                   <div class="col-but"><a href="{$value['url']}">我要报名</a></div>
                 <?php }?>
              </div>
                </div>
            {/loop}
            {/st} </div>
              <!--div class="tab-pane" id="panel-80964">内容1 </div--> 
            </div>
      </div>
        </div>
  </div>
  
  <div class="container-fluid">
  <div class="row-fluid" style="margin-left:20px;">

<div class="main_title1">
  <h2 class="index_title"><a href="/raiders/all-19-1">更多精彩内容</a><span>自驾回顾</span></h2>
</div>

      <div class="FreeTour_List_warp">
          {loop  $selfDriving $sd}
          <a href="/raiders/show_{$sd['aid']}.html">
        <div class="Free_L_box">
          <div class="Free_L_warp">
            <div class="Free_L_img">
              <div class="peo-ico"><img src="{$sd['Author_head']}"></div>
              <img src="{$sd['litpic']}"></div>
            <div class="c-bd">
              <div class="c-title">
                <p class="title">{$sd['title']}</p>
              </div>
              <div class="c-info"><span class="ads"><i></i>{$sd['gl_mdd']}</span><span class="num">{$sd['shownum']}</span><span class="data">{$sd['addtime']}</span></div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        </a>
          {/loop}
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>


    </div>
<setion>
<!--<div class="main_title">
        <h2 class="index_title"><a href="/raiders/all-19-1">更多精彩内容</a><span>自驾回顾</span></h2>
        <div class="FreeTour_List_warp">
            {loop $selfDriving $sd}
            <a href ="/raiders/show_{$sd['aid']}.html">
                <div class="Free_L_box">
                    <div class="Free_L_warp">
                        <div class="Free_L_img">
                            <div class="peo-ico"><img src="{$sd['Author_head']}"></div>
                            <img src="{$sd['litpic']}"></div>
                        <div class="c-bd">
                            <div class="c-title">
                                <p class="title">{$sd['title']}</p>
                            </div>
                            <div class="c-info"><span class="ads"><i></i>{$sd['gl_mdd']}</span><span class="num">{$sd['shownum']}</span><span class="data">{$sd['addtime']}</span></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </a>
            {/loop}
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container" >-->

<div class="discount">
<!--<div class="title">
<h2>
<em>自驾回顾</em><i>足不出户看世界</i>
<div id="outer">
<ul id="tab">
<!--li class="current">河北游记</li>
                            <li>你没见过的风景</li>
                            <li>逃票攻略</li>
                            <li-- class="current">&nbsp;&nbsp;&nbsp;&nbsp;自驾回顾</li>
                        </ul-->
<!--</div>
<span class="fr"><a href="/raiders/all" style="display: block;">更多精彩内容>></a></span>
<div class="clearfix"></div>
</h2>
</div>-->
</div>
<div id="content"> {st:article action="query" flag="byattrid"  row="5" attrid="16" return="attrlist"} 
      <!--ul-- style="display: block;">
                <div class="getyearbox-l">

                    <a href="{$attrlist[0]['url']}" title="{$attrlist[0]['title']}">
                        <div class="tt-img-box1">
                            <div class="tt-img1"><img src="/res/images/myimages/tian1.jpg"></div>
                            <div class="tt-bottom1">
                                <div class="tt-com1">
                                    <p>
                                    <h2>{$attrlist[0]['title']}</h2>
                                    <div class="peo-box">
                                        <div class="col-ico"><img src="/res/images/img/ico01.jpg"></div>
                                        <div class="fl">
                                            <div class="col-dz">阅读:{$attrlist[0]['shownum']}&nbsp;&nbsp;&nbsp;评论:{$attrlist[0]['commentnum']}</div>
                                            <div class="col-t">{Common::cutstr_html($attrlist[0]['content'],40)}</div>
                                        </div>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="getyearbox-r">
                    <div class="col-md-2">

                        <a href="{$attrlist[1]['url']}" title="{$attrlist[1]['title']}">
                            <div class="tt-img-box">
                                <div class="tt-img"><img src="{Common::img($attrlist[1]['litpic'])}"> </div>
                                <div class="tt-bottom">
                                    <div class="tt-com">
                                        <p>{$attrlist[1]['title']}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="{$attrlist[2]['url']}" title="{$attrlist[2]['title']}">
                            <div class="tt-img-box">
                                <div class="tt-img"><img src="{Common::img($attrlist[2]['litpic'])}"> </div>
                                <div class="tt-bottom">
                                    <div class="tt-com">
                                        <p>{$attrlist[2]['title']}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="{$attrlist[3]['url']}" title="{$attrlist[3]['title']}">
                            <div class="tt-img-box">
                                <div class="tt-img"><img src="{Common::img($attrlist[3]['litpic'])}"> </div>
                                <div class="tt-bottom">
                                    <div class="tt-com">
                                        <p>{$attrlist[3]['title']}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="{$attrlist[4]['url']}" title="{$attrlist[4]['title']}">
                            <div class="tt-img-box">
                                <div class="tt-img"><img src="{Common::img($attrlist[4]['litpic'])}"> </div>
                                <div class="tt-bottom">
                                    <div class="tt-com">
                                        <p>{$attrlist[4]['title']}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </ul-->
      {/st}
      {st:article action="query" flag="byattrid"  row="5" attrid="18" return="attrlist"} 
      <!--ul>

                <div class="getyearbox-l">

                    <a href="{$attrlist[0]['url']}" title="{$attrlist[0]['title']}">
                        <div class="tt-img-box1">
                            <div class="tt-img1"><img src="/res/images/myimages/tian2.jpg"></div>
                            <div class="tt-bottom1">
                                <div class="tt-com1">
                                    <p>
                                    <h2>{$attrlist[0]['title']}</h2>
                                    <div class="peo-box">
                                        <div class="col-ico"><img src="/res/images/img/ico01.jpg"></div>
                                        <div class="fl">
                                            <div class="col-dz">阅读:{$attrlist[0]['shownum']}&nbsp;&nbsp;&nbsp;评论:{$attrlist[0]['commentnum']}</div>
                                            <div class="col-t">{Common::cutstr_html($attrlist[0]['content'],40)}</div>
                                        </div>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="getyearbox-r">
                    <div class="col-md-2">

                        <a href="{$attrlist[1]['url']}" title="{$attrlist[1]['title']}">
                            <div class="tt-img-box">
                                <div class="tt-img"><img src="{Common::img($attrlist[1]['litpic'])}"> </div>
                                <div class="tt-bottom">
                                    <div class="tt-com">
                                        <p>{$attrlist[1]['title']}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="{$attrlist[2]['url']}" title="{$attrlist[2]['title']}">
                            <div class="tt-img-box">
                                <div class="tt-img"><img src="{Common::img($attrlist[2]['litpic'])}"> </div>
                                <div class="tt-bottom">
                                    <div class="tt-com">
                                        <p>{$attrlist[2]['title']}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="{$attrlist[3]['url']}" title="{$attrlist[3]['title']}">
                            <div class="tt-img-box">
                                <div class="tt-img"><img src="{Common::img($attrlist[3]['litpic'])}"> </div>
                                <div class="tt-bottom">
                                    <div class="tt-com">
                                        <p>{$attrlist[3]['title']}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="{$attrlist[4]['url']}" title="{$attrlist[4]['title']}">
                            <div class="tt-img-box">
                                <div class="tt-img"><img src="{Common::img($attrlist[4]['litpic'])}"> </div>
                                <div class="tt-bottom">
                                    <div class="tt-com">
                                        <p>{$attrlist[4]['title']}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </ul-->
      {/st}
      {st:article action="query" flag="byattrid"  row="5" attrid="17" return="attrlist"} 
      <!--ul>

                <div class="getyearbox-l">

                    <a href="{$attrlist[0]['url']}" title="{$attrlist[0]['title']}">
                        <div class="tt-img-box1">
                            <div class="tt-img1"><img src="/res/images/myimages/tian3.jpg"></div>
                            <div class="tt-bottom1">
                                <div class="tt-com1">
                                    <p>
                                    <h2>{$attrlist[0]['title']}</h2>
                                    <div class="peo-box">
                                        <div class="col-ico"><img src="/res/images/img/ico01.jpg"></div>
                                        <div class="fl">
                                            <div class="col-dz">阅读:{$attrlist[0]['shownum']}&nbsp;&nbsp;&nbsp;评论:{$attrlist[0]['commentnum']}</div>
                                            <div class="col-t">{Common::cutstr_html($attrlist[0]['content'],40)}</div>
                                        </div>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="getyearbox-r">
                    <div class="col-md-2">

                        <a href="{$attrlist[1]['url']}" title="{$attrlist[1]['title']}">
                            <div class="tt-img-box">
                                <div class="tt-img"><img src="{Common::img($attrlist[1]['litpic'])}"> </div>
                                <div class="tt-bottom">
                                    <div class="tt-com">
                                        <p>{$attrlist[1]['title']}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="{$attrlist[2]['url']}" title="{$attrlist[2]['title']}">
                            <div class="tt-img-box">
                                <div class="tt-img"><img src="{Common::img($attrlist[2]['litpic'])}"> </div>
                                <div class="tt-bottom">
                                    <div class="tt-com">
                                        <p>{$attrlist[2]['title']}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="{$attrlist[3]['url']}" title="{$attrlist[3]['title']}">
                            <div class="tt-img-box">
                                <div class="tt-img"><img src="{Common::img($attrlist[3]['litpic'])}"> </div>
                                <div class="tt-bottom">
                                    <div class="tt-com">
                                        <p>{$attrlist[3]['title']}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="{$attrlist[4]['url']}" title="{$attrlist[4]['title']}">
                            <div class="tt-img-box">
                                <div class="tt-img"><img src="{Common::img($attrlist[4]['litpic'])}"> </div>
                                <div class="tt-bottom">
                                    <div class="tt-com">
                                        <p>{$attrlist[4]['title']}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </ul-->
      {/st}
      {st:article action="query" flag="byattrid"  row="5" attrid="19" return="attrlist"}
      <ul style="display: block">
   <!-- <div class="getyearbox-l" > <a href="{$attrlist[0]['url']}" title="{$attrlist[0]['title']}">
      <div class="tt-img-box1">
        <div class="tt-img1"><img src="/res/images/myimages/tian4.jpg"></div>
        <div class="tt-bottom1">
          <div class="tt-com1">
            <p>
            <h2>{$attrlist[0]['title']}</h2>
            <div class="peo-box">
              <div class="col-ico"><img src="/res/images/img/ico01.jpg"></div>
              <div class="fl">
                <div class="col-dz">阅读:{$attrlist[0]['shownum']}&nbsp;&nbsp;&nbsp;评论:{$attrlist[0]['commentnum']}</div>
                <div class="col-t">{Common::cutstr_html($attrlist[0]['content'],40)}</div>
              </div>
            </div>
            </p>
          </div>
        </div>
      </div>
      </a> </div>-->
    <!--<div class="getyearbox-r">
                    <div class="col-md-2">

                        <a href="{$attrlist[1]['url']}" title="{$attrlist[1]['title']}">
                            <div class="tt-img-box">
                                <div class="tt-img"><img src="{Common::img($attrlist[1]['litpic'])}"> </div>
                                <div class="tt-bottom">
                                    <div class="tt-com">
                                        <p>{$attrlist[1]['title']}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="{$attrlist[2]['url']}" title="{$attrlist[2]['title']}">
                            <div class="tt-img-box">
                                <div class="tt-img"><img src="{Common::img($attrlist[2]['litpic'])}"> </div>
                                <div class="tt-bottom">
                                    <div class="tt-com">
                                        <p>{$attrlist[2]['title']}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="{$attrlist[3]['url']}" title="{$attrlist[3]['title']}">
                            <div class="tt-img-box">
                                <div class="tt-img"><img src="{Common::img($attrlist[3]['litpic'])}"> </div>
                                <div class="tt-bottom">
                                    <div class="tt-com">
                                        <p>{$attrlist[3]['title']}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="{$attrlist[4]['url']}" title="{$attrlist[4]['title']}">
                            <div class="tt-img-box">
                                <div class="tt-img"><img src="{Common::img($attrlist[4]['litpic'])}"> </div>
                                <div class="tt-bottom">
                                    <div class="tt-com">
                                        <p>{$attrlist[4]['title']}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>-->
  </ul>
      {/st} </div>
</div>
</setion>
{request "pub/footer"}
{request "pub/flink"}
{Common::js('myjs/bootstrap.min.js,myjs/jquery-1.8.3.min.js')} 
<script>
    $(function(){
        window.onload = function()
        {
            var $li = $('#tab li');
            var $ul = $('#content ul');

            $li.mouseover(function(){
                var $this = $(this);
                var $t = $this.index();
                $li.removeClass();
                $this.addClass('current');
                $ul.css('display','none');
                $ul.eq($t).css('display','block');
            })
        }
    });
</script>
</body>
</html>