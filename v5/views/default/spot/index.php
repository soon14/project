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
    {Common::css('mycss/responsive.tabs.css,mycss/base.css,mycss/ticket.css')}
    {Common::css("mycss/layout.css,mycss/index.css")}
    {Common::js('jquery.min.js,myjs/bootstrap.min.js,myjs/jquery-1.8.3.min.js,myjs/responsive.tabs.js')}
    {Common::js("myjs/lubotu.js")}
    <script type="text/javascript">
        $(document).ready(function(){
            $('.tabs').respTabs();
        });
    </script>
    </head>
    <body>
{request "pub/header"}
<section>
      <div class="container mt20 mb20"  >
    <div class="sider_left">
          <div class="scenic-box">
        <div style="padding:5px 15px;">
              <div class="scenic-mid1">
            <h3 class="ter-ico1">热门景点</h3>
            <div class="termini1">
                  <ul>
                <!------07.06 fengjishu  设置热门同网站首页热门景点一致 s-------> 
                {st:usernav action="childnav" parentid="1" row="6" return="childnav"}
                {if !empty($childnav)}
                {loop $childnav $c}
                <li> <a href="{$c['url']}" target="_blank">{$c['kindname']}</a></li>
                {/loop}
                {/if}
                {/st} 
                <!------07.06 fengjishu  e------->
              </ul>
                  <div class="clearfix"></div>
                </div>
          </div>
              <div class="scenic-mid1">
            <h3  class="ter-ico2">目的地</h3>
            <div class="termini1">
                  <ul>
                {st:dest action="query" flag="hot" typeid="0" destid="0" row="8" return="hotdest"}
                {loop $hotdest $dest}
                <li> <a href="{$cmsurl}spots/{$dest['pinyin']}/">{$dest['kindname']}</a></li>
                {/loop}
                {/st}
              </ul>
                  <div class="clearfix"></div>
                </div>
          </div>
              <div class="scenic-mid1">
            <h3  class="ter-ico3">主题游</h3>
            <div class="termini1">
                  <ul>
                {st:attr action="query" flag="childitem" typeid="5" groupid="13" row="8" return="attrlist"}
                {loop $attrlist $k $attr}
                <li> <a href="/spots/all-0-0-{$attr['id']}-1">{$attr['attrname']}</a></li>
                {/loop}
                {/st}
              </ul>
                  <div class="clearfix"></div>
                </div>
          </div>
            </div>
      </div>
        </div>
    <div class="main_right">
          <div class="country-item"> 
        
        <!--                <div class="lubo" style="min-width: 900px">--> 
        <!--                    <ul class="lubo_box">--> 
        <!--                        --> 
        <!--                        {loop $data['aditems'] $v}--> 
        <!--                        <li style="opacity: 1;filter:alpha(opacity=100);"><a href="{$v['adlink']}" style="background:url({$v['adsrc']}) 0px 0px no-repeat;background-size:95% 100%;"></a></li>--> 
        <!--                        {/loop}--> 
        <!--                        {/st}--> 
        <!--                        <!--li style=" opacity: 1;filter:alpha(opacity=100);"><a href="/raiders/show_20.html" style="background:url(/res/images/img/4.jpeg) center top no-repeat"></a></li>--> 
        <!--                        <li><a href="/spots/" style="background:url(/res/images/img/1.jpeg) center top no-repeat"></a></li--> 
        <!--                    </ul>--> 
        <!--                </div>-->
        <table width="100%" >
              {st:ad action="getad" name="s_spot_index_1" pc="1"}
              <?php $src  =unserialize($data['adsrc']); $link=unserialize($data['adlink']);?>
              <tr>
            <td width="33%"><a href="{$link[0]}"><img src="{$src[0]}" width="100%"></a></td>
            <td width="33%"><a href="{$link[5]}"><img src="{$src[5]}" width="100%"></a></td>
            <td width="33%"><a href="{$link[2]}"><img src="{$src[2]}" width="100%"></a></td>
          </tr>
              <tr>
            <td colspan="2"><a href="{$link[3]}"><img src="{$src[3]}" width="100%"></a></td>
            <td width="33%"><a href="{$link[4]}"><img src="{$src[4]}" width="100%"></a></td>
          </tr>
              {/st}
            </table>
        <script type="text/javascript">

//                    $(function(){
//
//                        $(".lubo").lubo({
//
//                        });
//
//                    })

                </script> 
      </div>
        </div>
    <div class="clearfix"></div>
  </div>
      <div class="clearfix"></div>
      <div class="container">
    <div class="discount mt20">
          <div class="discount_wrap">
        <div class="title">
              <h2>周末游<span class="fr"><a href="/spots/all">更多精彩内容>></a></span></h2>
        </div>
        <div class="tab-pane  active"> {st:spot action="query" flag="attr" row="4" attrid="31" return="holidays"}
              {loop $holidays $day}
              <div class="col-md-4">
            <div class="proud-box"> <a href="{$day['url']}" target="_blank" title="{$day['title']}">
              <div class="proud-b-img"> <img src="{Common::img($day['litpic'],386,219)}"></div>
              <div class="zw-module-smallcard-mask">{$day['shortname']}</div>
              <h3>{$day['title']}</h3>
              <div class="zw-module-smallcard-infobar clearfix ">
                <div class="zw-module-smallcard-timebar">
                  <p class="traveltime">已售{$day['sellnum']}件</p>
                </div>
                <p class="zw-module-smallcard-price"><em>{$day['price']}</em>元起</p>
              </div>
              </a> </div>
          </div>
              {/loop}
              {/st} </div>
      </div>
        </div>
  </div> 
      <!--div class="container">
        <div class="discount mt20">
            <div class="discount_wrap">
                <div class="title">
                    <h2><i class="fl">热门目的地</i>
                        <ul class="tabs-list">
                            {loop $hot_mdd $k $attr}
                            <li {if $k == 0}class="active"{/if}><a href="javascript:;">{$attr['kindname']}</a></li>
                            {/loop}
                            {/st}
                        </ul> <span><a href="/spots/all">更多精彩内容>></a></span> </h2>
                    <div class="clearfix"></div>
                </div>
                <div class="tab-pane  active">
                    {loop $hot_mdd $k $attr}
                    {st:spot action="query" flag="order" row="4" return="spotlist"}
                    {loop $spotlist $spot}
                    <div class="col-md-4">
                        <div class="proud-box"> <a target="_blank" href="{$spot['url']}" title="{$spot['title']}">
                                <div class="proud-b-img"><img src="{Common::img($spot['litpic'],386,219)}"></div>
                                <div class="zw-module-smallcard-mask">{$spot['shortname']}</div>
                                <h3>{$spot['title']}</h3>
                                <div class="zw-module-smallcard-infobar clearfix ">
                                    <div class="zw-module-smallcard-timebar">

                                        <p class="traveltime">已售{$spot['sellnum']}件</p>
                                    </div>
                                    <p class="zw-module-smallcard-price"><em>{$spot['price']}</em>元起</p>
                                </div>
                            </a> </div>
                    </div>
                    {/loop}
                    {/st}
                    {/loop}
                </div>
            </div>
        </div>
    </div--> <div class="clearfix"></div>
      <div class="container">
    <div class="discount mt20">
          <div class="discount_wrap">
        <div class="tabs">
              <div class="title">
            <h2><i class="fl">热门目的地</i>
                  <ul class="tabs-list">
                <?php  //exit;// var_dump($hot_mdd); ?>
                {loop $hot_mdd $k $attr}
                <li {if $k == 0}class="active"{/if}><a href="javascript:;">{$attr['kindname']}</a></li>
                {/loop}
              </ul>
                  <span><a href="/spots/all">更多精彩内容>></a></span></h2>
            <div class="clearfix"></div>
          </div>
              <div class="tabs-container"> {loop $hot_mdd $k $attr}
            {st:spot action="query" flag="mdd"  row="4" destid="$attr['kindid']" return="hotspot"}
            <div class="tab-content" style="display:block;">
                  <div class="tab-pane  active"> {loop $hotspot $hot}
                <div class="col-md-4">
                      <div class="proud-box"> <a href="{$hot['url']}" target="_blank" title="{$hot['title']}">
                        <div class="proud-b-img"><img src="{Common::img($hot['litpic'],386,219)}"></div>
                        <div class="zw-module-smallcard-mask">{$hot['shortname']}</div>
                        <h3>{$hot['title']}</h3>
                        <div class="zw-module-smallcard-infobar clearfix ">
                        <div class="zw-module-smallcard-timebar">
                            <p class="traveltime">已售{$hot['sellnum']}件</p>
                          </div>
                        <p class="zw-module-smallcard-price"><em>{$hot['price']}</em>元起</p>
                      </div>
                        </a> </div>
                    </div>
                {/loop} </div>
                </div>
            {/st}
            {/loop} </div>
            </div>
      </div>
        </div>
  </div>
  
  
  
      <div class="container">
    <div class="discount mt20">
          <div class="discount_wrap">
        <div class="tabs">
              <div class="title">
            <h2><i class="fl">热门主题</i>
                  <ul class="tabs-list">
                {st:attr action="query" flag="childitem" typeid="5" groupid="13" row="4" return="attrlist"}
                {loop $attrlist $k $attr}
                <li {if $k == 0}class="active"{/if}><a href="javascript:;">{$attr['attrname']}</a></li>
                {/loop}
                {/st}
              </ul>
                  <span><a href="/spots/all">更多精彩内容>></a></span></h2>
            <div class="clearfix"></div>
          </div>
              <div class="tabs-container"> {loop $attrlist $k $attr}
            {st:spot action="query" flag="attr" row="4" attrid="$attr['id']" return="hotspot"}
            <div class="tab-content" style="display:block;">
                  <div class="tab-pane  active"> {loop $hotspot $hot}
                <div class="col-md-4">
                      <div class="proud-box"> <a href="{$hot['url']}" target="_blank" title="{$hot['title']}">
                        <div class="proud-b-img"><img src="{Common::img($hot['litpic'],269,159)}"></div>
                        <div class="zw-module-smallcard-mask">{$hot['shortname']}</div>
                        <h3>{$hot['title']}</h3>
                        <div class="zw-module-smallcard-infobar clearfix ">
                        <div class="zw-module-smallcard-timebar">
                            <p class="traveltime">已售{$hot['sellnum']}件</p>
                          </div>
                        <p class="zw-module-smallcard-price"><em>{$hot['price']}</em>元起</p>
                      </div>
                        </a> </div>
                    </div>
                {/loop} </div>
                </div>
            {/st}
            {/loop} </div>
            </div>
      </div>
        </div>
  </div>
    </section>
{request "pub/footer"}
{request "pub/flink"}
</body>
</html>