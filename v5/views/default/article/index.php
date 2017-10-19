<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <title>河北旅游攻略大全_自助游攻略_游记攻略-河北旅游网</title>
  <meta name="keywords" content="河北旅游攻略大全,自助游攻略,游记攻略,石家庄旅游攻略" />
  <meta name="description" content="河北旅游网攻略,为旅游爱好者提供全面和详细的旅行攻略大全,您可以详细了解到景区攻略、游记、指南、地图、门票、美食、特产、交通等旅游信息。" />
  {include "pub/varname"}
  {Common::css('mycss/base2.css,mycss/travels-strategy.css')}
  {Common::js('myjs/jquery-1.8.3.min.js,myjs/jquery.select-1.js')}
</head>
<body bgcolor="#f5f5f5">
{request "pub/header"}
<section class="bgf2f2f2">
    <div class="banner">
      <img src="/res/images/myimages/gonglv.jpg" height="360">
      <div class="travel_search">
        <p>热门搜索:&nbsp;&nbsp;&nbsp;{loop $hotSearch $k $hs}<a href="/raiders/all?keyword={$hs['keyword']}">{$hs['keyword']}</a>{/loop}</p>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="91%" name="input">
              <input class="placesearch_txt"  type="text" placeholder="&nbsp;&nbsp;搜索攻略题目">
            </td>
            <td width="9%">
              <img src="/res/images/img/button.png" width="36" height="36" style="margin-top:3px;" id="img">
            </td>
          </tr>
        </table>
      </div>
    </div>
  <div class="container">
    <div class="FreeTour_List_body">
      <div class="main_title">
        <h2 class="index_title"><a href="/raiders/all-37-1">更多精彩内容</a><span>河北全攻略</span></h2>


        <div class="FreeTour_List_warp">
          {loop $all_raiders $hb}
          <a href ="/raiders/show_{$hb['aid']}.html">
            <div class="Free_L_box">
              <div class="Free_L_warp">
                <div class="Free_L_img">
                  <div class="peo-ico"><img src="{$hb['Author_head']}"></div>
                  <img src="{$hb['litpic']}"></div>
                <div class="c-bd">
                  <div class="c-title">
                    <p class="title">{$hb["title"]}</p>
                  </div>
                  <div class="c-info"><span class="ads"><i></i>{$hb['gl_mdd']}</span><span class="num">{$hb['shownum']}</span><span class="data">{$hb['addtime']}</span></div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </a>
          {/loop}
          <div class="clearfix"></div>
        </div>

      </div>
      <div class="main_title">
        <h2 class="index_title"><a href="/raiders/all-16-1">更多精彩内容</a><span>河北游记</span></h2>


            <div class="FreeTour_List_warp">
              {loop $Hb_Travels $hb}
              <a href ="/raiders/show_{$hb['aid']}.html">
              <div class="Free_L_box">
                <div class="Free_L_warp">
                  <div class="Free_L_img">
                    <div class="peo-ico"><img src="{$hb['Author_head']}"></div>
                    <img src="{$hb['litpic']}"></div>
                  <div class="c-bd">
                    <div class="c-title">
                      <p class="title">{$hb["title"]}</p>
                    </div>
                    <div class="c-info"><span class="ads"><i></i>{$hb['gl_mdd']}</span><span class="num">{$hb['shownum']}</span><span class="data">{$hb['addtime']}</span></div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
                </a>
              {/loop}
              <div class="clearfix"></div>
            </div>

      </div>
      <div class="main_title">
        <h2 class="index_title"><a href="/raiders/all-17-1">更多精彩内容</a><span>你没见过的风景</span></h2>
        <div class="FreeTour_List_warp">
          {loop $no_see_spot $ns}
          <a href ="/raiders/show_{$ns['aid']}.html">
          <div class="Free_L_box">
            <div class="Free_L_warp">
              <div class="Free_L_img">
                <div class="peo-ico"><img src="{$ns['Author_head']}"></div>
                <img src="{$ns['litpic']}"></div>
              <div class="c-bd">
                <div class="c-title">
                  <p class="title">{$ns['title']}</p>
                </div>
                <div class="c-info"><span class="ads"><i></i>{$ns['gl_mdd']}</span><span class="num">{$ns['shownum']}</span><span class="data">{$ns['addtime']}</span></div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
            </a>
          {/loop}
          <div class="clearfix"></div>
        </div>

      </div>
      <div class="main_title">
        <h2 class="index_title"><a href="/raiders/all-18-1">更多精彩内容</a><span>逃票攻略</span></h2>
        <div class="FreeTour_List_warp">
          {loop $run_spot_raider $rs}
          <a href ="/raiders/show_{$rs['aid']}.html">
          <div class="Free_L_box">
            <div class="Free_L_warp">
              <div class="Free_L_img">
                <div class="peo-ico"><img src="{$rs['Author_head']}"></div>
                <img src="{$rs['litpic']}"></div>
              <div class="c-bd">
                <div class="c-title">
                  <p class="title">{$rs['title']}</p>
                </div>
                <div class="c-info"><span class="ads"><i></i>{$rs['gl_mdd']}</span><span class="num">{$rs['shownum']}</span><span class="data">{$rs['addtime']}</span></div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
            </a>
          {/loop}
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="main_title">
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
    </div>
  </div>
</section>
{request "pub/footer"}
{request "pub/flink"}
</body>
</html>
<script>
  $("#img").click(function(){
      var keyword   = $(this).parent().siblings('td[name=input]').find('input').val();
      var url       = "/raiders/all?keyword="+keyword;
      window.location.href = url ;
  });
</script>