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
  {include "pub/varname"}
  {Common::css('common/bootstrap-min.css,common/public.css,mycss/selfDriving/SelfDriving.css')}
  {Common::js('common/jquery-1.11.3.min.js,common/bootsAitto-min.js')}

  {$GLOBALS['cfg_tongjicode']}
</head>
<body>
<!-- 登陆代码 开始 -->
{request "pub/header"}
<!-- 登陆代码 结束 -->

<div class="notebox"></div>
<section>
  <div class="self-calendar">
    <h1></h1>
  </div>
</section>

<?php $time  = time(); ?>
<?php //var_dump($linelist[0]['piclist']);exit?>
{loop $linelist $k $value}

<?php
//fengjishu 08.02 jia
$linedate = strtotime($value['linedate']);
$cha      = ($time -$linedate)*1;
?>
<section>
  <div class="SelfDriving-page{$k+1}">
    <div class="SelfDriving-con" onclick="window.location.href='/lines/self_show_{$value[aid]}.html'" style="cursor: pointer">
      <div class="SelfDriving-img">
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="64%" rowspan="2" valign="top"><div class="bigimg"><img src="{$value['piclist'][0][0]}"></div></td>
            <td width="18%"><div class="smallimg" style="margin-bottom:6px;"><img src="{$value['piclist'][1][0]}"></div></td>
            <td width="18%"><div class="smallimg" style="margin-bottom:6px;"><img src="{$value['piclist'][2][0]}"></div></td>
          </tr>
          <tr>
            <td><div class="smallimg" style="margin-top:6px;"><img src="{$value['piclist'][3][0]}"></div></td>
            <td><div class="smallimg" style="margin-top:6px;"><img src="{$value['piclist'][4][0]}"></div></td>
          </tr>
        </table>
      </div>
      <div class="SelfDriving-tit">
        <h1>{$value['title']} | <span class="data"><i></i>{$value['linedate']}</span> | <span class="add"><i></i>{$value['selfDriMdd']}</span></h1>
        <p> {Common::cutstr_html($value['sellpoint'],200)}</p>
        <div class="SelfDriving-but"><a href="/lines/self_show_{$value['aid']}.html" style="color: #fff">查看详情</a></div>
      </div>
    </div>
    {if $k==count($linelist)-1}

    <div class="more-box"> <a  href="/lines/self/all" class="more-self" style="color: #fff">查看往期活动</a></div>
    {/if}
  </div>

</section>

{/loop}

<!---------------自驾回顾 开始------------------>
<section>
  <div class="SelfDriving-pagehome">
    <div class="SelfDriving-main ">
      <div class="SelfPast-tit">
        <h1>自驾回顾</h1>
      </div>
      <div class="home-nr-r">
        <ul class="clearfix">
          {loop  $selfDriving $sd}
          <li onclick="window.location.href='/raiders/show_{$sd[aid]}.html'">
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
      <div class="more-box"> <a  href="/raiders/all-19-1" class="more-self" style="color: #fff">查看更多回顾</a></div>
    </div>
  </div>
</section>
{request "pub/footer"}

</body>
</html>
{Common::js('myjs/selfDriving/bootstrap-SelfDriving.js')}