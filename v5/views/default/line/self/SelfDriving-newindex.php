<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>{$seoinfo['seotitle']}</title>
  {if $seoinfo['keyword']}
  <meta name="keywords" content="{$seoinfo['keyword']}"/>
  {/if}
  {if $seoinfo['description']}
  <meta name="description" content="{$seoinfo['description']}"/>
  {/if}

  {Common::css('common/bootstrap-min.css,common/public.css')}
  {Common::css('mycss/selfDriving/SelfDriving1.css')}
  {Common::js('common/jquery-1.11.3.min.js,common/bootsAitto-min.js')}
  {$GLOBALS['cfg_tongjicode']}
</head>
<body>
<!-- 登陆代码 开始 -->
{request "pub/header"}
<!-- 登陆代码 结束 -->

<div class="notebox"></div>

<!-- 幻灯项目 开始 -->
{st:ad action="getad" name="s_line_index_1" pc="1"}

<div class="ntd-name-items carousel" data-slide=""><!-- slide值有 空:“” 自动:"auto" 左右切换:"x"-->
  <ul class="slideImg-hd">
    <?php $src  =$data['aditems'];?>
    <?php for($i=0;$i<count($src);$i++):?>
    <li {if $i>0}style="display:none"{/if} onclick="window.location.href='{$src[$i]['adlink']}'"><a href="{$src[$i]['adlink']}"><img src="{$src[$i]['adsrc']}" alt="" width="100%" ></a></li>
      <div class="mtd-user-info">
        <h2>{$src[$i]['adname']}</h2>
      </div>
    </li>
    <?php endfor?>
  </ul>
  <a href="javascript:;" class="ctrl-slide Page-prev">上一张</a> <a href="javascript:;" class="ctrl-slide Page-next">下一张</a> 
  <!-- 图片导航 水平 -->
  <div class="slideNav-bd navMx-img" data-dir="level">
    <div class="navMx-panel">
      <ul>
        <?php for($i=0;$i<count($src);$i++):?>
        <li {if $i==0}class="current"{/if}><em><img src="{$src[$i]['adsrc']}" alt=""></em></li>
        <?php endfor?>
      </ul>
    </div>
  </div>
</div>
{/st}
<!-- 幻灯项目 结束 -->
<section>
  <div class="SelfDriving-main  clearfix">
    <div class="J-con-tit clearfix">
      <h2>流年<span>自</span>驾</h2>
<!--      <ul class="J-con-nav" data-toggle="tabs" data-target="tab-content1">-->
<!--        <li class="current" data-panel="1" onclick="tab_raiders(this)"><a href="javascript:">正在进行</a><span class="down-arrow"></span><span class="down-arrow"></span></li>-->
<!--        <li data-panel="2" onclick="tab_raiders(this)"><a href="javascript:">往期活动</a></li>-->
<!--      </ul>-->
      <div class="more"><a href="/lines/self/all">查看更多内容</a></div>
    </div>
    <?php $time  = time(); ?>

    <div class="SelfDriving-main-list">
      <ul class="clearfix">
        {loop $linelist $k $value}
        <?php
        $linedate = strtotime($value['linedate']);
        $cha      = ($time -$linedate)*1;
        ?>
        <li>

          <div class="SelfDrive-box">
            <a href="/lines/self_show_{$value[aid]}.html">
              <div class="SelfDrive-top">
                <div class="pic"><img src="{$value['piclist'][1][0]}" width="100%" />
                  <h2><span>{$value['title']}</span></h2>
                </div>
              </div>
            </a>
            <div class="SelfDrive-bot">
              <dl class="clearfix">
                <dd><b class="bLine">
                    <h4>费用</h4>
                    <em>{if !empty($value['storeprice'])}&yen;{$value['storeprice']}{else}&nbsp;&yen;0&nbsp;{/if}</em></b></dd>
                <dd><b class="bLine">
                    <h4>目的地</h4>
                    <em>{$value['selfDriMdd']}</em></b></dd>
                <dd><b>
                    <h4>自驾时间</h4>
                    <em>{$value['linedate']}</em></b></dd>
              </dl>
            </div>
            {if $cha<0}
            <div class="SelfDrive-btn"><a href="/lines/self_show_{$value[aid]}.html" class="more-SelfDrive">我要报名</a></div>
            {else}
            <div class="SelfDrive-btn"><a href="/lines/self_show_{$value[aid]}.html" class="more-noSelfDrive">活动结束</a></div>
            {/if}
          </div>
        </li>
        {/loop}
      </ul>
    </div>
  </div>
</section>


<section>
  <div class="SelfDriving-main  clearfix">
    <div class="J-con-tit">
      <h2>自驾<span>回</span>顾<span class="small-tit">精彩的自驾活动 美好的回忆</span></h2>
      <div class="more"><a href="/raiders/all-19-0-1">查看往期活动</a></div>
    </div>
    <div class="home-nr-r">
      <ul class="clearfix">
        {loop  $selfDriving $sd}
        <li onclick="window.location.href='/raiders/show_{$sd[aid]}.html'" style="cursor: pointer">
          <div class="mod-ImgHItem clearfix" >
            <div class="hd-pic" data-slide="left"> <a href="/raiders/show_{$sd['aid']}.html"><img src="{Common::img($sd['piclist'][1][0])}" /></a>
              <div class="kd-tit"> <a href="/raiders/show_{$sd['aid']}.html" class="title">{$sd['title']}</a>
                <div class="c-info"><span class="num">{$sd['shownum']}</span><span class="data">{$sd['addtime']}</span></div>
              </div>
              <div class="kd-cut"> <a href="/raiders/show_{$sd['aid']}.html" class="title">{$sd['title']}</a>
                <p>{Common::cutstr_html($sd['content'],80)}</p>
                <a href="/raiders/show_{$sd['aid']}.html" class="but-look">查看详情</a> </div>
            </div>
          </div>
        </li>
        {/loop}
      </ul>
    </div>
  </div>
</section>
{request "pub/footer"}

</body>
</html>
{Common::js('myjs/selfDriving/bootstrap-SelfDriving.js')}