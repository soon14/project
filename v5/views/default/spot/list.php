<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{$searchtitle}-{$GLOBALS['cfg_webname']}</title>
    {include "pub/varname"}
    {Common::css('mycss/bootstrap.min.css,mycss/responsive.tabs.css,mycss/base.css,mycss/ticket.css')}
    {Common::js('jquery.min.js,base.js,common.js,myjs/bootstrap.min.js,myjs/jquery-1.8.3.min.js,myjs/responsive.tabs.js')}
</head>
<body>
{request "pub/header"}
<section>
    <div class="container crumbs">
        <a href="{$cmsurl}" class="current">{$GLOBALS['cfg_indexname']}</a><sub class="songti">-&gt;</sub>
        <a href="{$cmsurl}spots/" class="current">{$channelname}</a>
    </div>
    <div class="container">
        <div class="tlist_left">

            <!---选项卡插件多种tab标签切换开始--->

            <div class="demo" id="bye">
                <ul class="tabbtn" id="normaltab">
                    <li class="current"><a href="#">景区门票</a></li>
                    <!--li><a href="#">酒店</a></li>
                    <li><a href="#">自驾游</a></li-->
                </ul>
                <!--tabbtn end-->
                <div class="tabcon" id="normalcon">
                    <div class="sublist">
                        <div class="ticket_search">
                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                <td width="16%"><tr {if count($chooseitem)<1}style="display:none"{/if}>
                                    <td width="16%" bgcolor="#eff4fa" class="ticket_b_b">已选条件：</td>
                                    <td width="84%">
                                        <div class="ticket_city">
                                            {loop $chooseitem $item}
                                            <span class="chooseitem" data-url="{$item['url']}">{$item['itemname']}<i></i></span>
                                            {/loop}
                                            <a href="javascript:;" class="clearc">清空筛选条件 </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="16%" bgcolor="#eff4fa" class="ticket_b_b">目的地：</td>
                                    <td width="84%">
                                        <div class="ticket_city">
                                            <!--span class="tic-all"><a href="#">全部</a></span-->
                                            <ul class="ticket_ab">
                                                {st:dest action="query" typeid="$typeid" flag="nextsame" row="30" pid="$destid" return="destlist"}
                                                {loop $destlist $dest}
                                                <li <?php if($param["destpy"]==$dest['pinyin']){?>class="on"<?php } ?> >
                                                <a href="{$cmsurl}spots/{$dest['pinyin']}/" >{$dest['kindname']}</a>
                                                </li>
                                                {/loop}
                                                {/st}
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <!--属性组读取-->
                                {st:attr action="query" flag="grouplist" typeid="$typeid" return="grouplist"}
                                {loop $grouplist $group}
                                <tr>
                                    <td width="16%" bgcolor="#eff4fa" class="ticket_b_b">{$group['attrname']}：</td>
                                    <td width="84%">
                                        <div class="ticket_city">
                                            <!--span class="tic-all"><a href="#">全部</a></span-->
                                      
                                            {st:attr action="query" flag="childitem" typeid="$typeid" groupid="$group['id']" return="attrlist"}
                                             <ul class="ticket_ab">
                                             {loop $attrlist $attr}                                           
                                             <li {if Common::check_in_attr($param['attrid'],$attr['id'])!==false}class="on"{/if}>
                                            <a href="{Model_Spot::get_search_url($attr['id'],'attrid',$param)}" >{$attr['attrname']}</a>
                                            </li>
                                             {/loop}
                                             </ul>
                                            {/st}
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                {/loop}
                                {/st}
                            </table>


                        </div>

                    </div>
                    <!--tabcon end-->
                    <!--div class="sublist">酒店</div>
                    <!--tabcon end-->
                    <!--tabcon end-->
                    <!--div class="sublist">自驾游</div>
                    <!--tabcon end-->
                </div>
                <!--tabcon end-->

            </div>
            <!--tabbox end-->



            <div class="dp-sort">
                <div class="dp-value" id="dpValue">
                    <div typeid="1" class="dp-v-s dp-v-at"><a href="{$cmsurl}spots/all" <?php $p=$param['sorttype'];if($p<1||$p>4){?>style="color:#FE7834"<?php }?>>默认排序</a></div>
                    <div typeid="6" class="dp-v-s dp-c">
                            {if $param['sorttype']!=1 && $param['sorttype']!=2}
                            <a class="jg-default" href="{Model_Spot::get_search_url(1,'sorttype',$param)}" >价格</a>
                            {/if}
                            {if $param['sorttype']==1}
                            <a class="jg-up" href="{Model_Spot::get_search_url(2,'sorttype',$param)}" style="color:#FE7834">价格</a>
                            {/if}
                            {if $param['sorttype']==2}
                            <a class="jg-down" href="{Model_Spot::get_search_url(0,'sorttype',$param)}" style="color:#FE7834">价格</a>
                            {/if}
                    </div>
                    <div typeid="6" class="dp-v-s dp-c">
                            {if $param['sorttype']!=3}
                            <a class="xl-default" href="{Model_Spot::get_search_url(3,'sorttype',$param)}">销量</a>
                            {/if}
                            {if $param['sorttype']==3}
                            <a class="xl-down" href="{Model_Spot::get_search_url(0,'sorttype',$param)}" style="color:#FE7834">销量</a>
                            {/if}
                    </div>
                    <div typeid="6" class="dp-v-s dp-c">
                            {if $param['sorttype']!=4}
                            <a class="tj-default" href="{Model_Spot::get_search_url(4,'sorttype',$param)}">推荐</a>
                            {/if}
                            {if $param['sorttype']==4}
                            <a class="tj-down" href="{Model_Spot::get_search_url(0,'sorttype',$param)}" style="color:#FE7834">推荐</a>
                            {/if}
                    </div>
                </div>
            </div>

            <div class="ticket_list">
                {if !empty($list)}
                <ul>
                    {loop $list $row}
                    <li>
                        <div class="img_contain"><a href="{$row['url']}" target="_blank"><img src="{Common::img($row['litpic'],265,180)}" alt="{$row['title']}" /></a></div>
                        <div class="ticket_detail">
                            <h4>{$row['title']}</h4>
                            <div class="detail_text">
                                <dl>
                                    <dt>景点地址</dt>
                                    <dd>
                                        <p>{$row['address']}</p>
                                    </dd>
                                </dl>
                                <?php //var_dump($row['themeName']);exit;?>
                                <dl class="detail_text index3">
                                    <dt>营业时间</dt>
                                    <dd class="xlesstime">
                                        <p>{$row['bus_time']['e_business_time']}</p>
                                        <span style="display: none;" class="icon_arrow"></span></dd>
                                </dl>
                                <dl>
                                    <dt>主　题</dt>
                                    <dd>
                                        <p title="园林"><?php foreach ($row['themeName'] as $p){echo $p['attrname']."&nbsp;&nbsp;";}?></p>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>景点特色</dt>
                                    <dd class="xlesstime">
                                        <p>{$row['sellpoint']}</p>
                                        <span style="display: inline;" class="icon_arrow"></span></dd>
                                </dl>
                            </div>
                        </div>
                        <div class="ticket_yuding">

                            <div class="tc_price">
                                {if !empty($row['price'])}
                                    <span><i class="currency_sy">{Currency_Tool::symbol()}</i><b>{$row['price']}</b>起</span>
                                {else}
                                    <span>电询</span>
                                {/if}
                            </div>
                            <a class="a_book" target="_blank" href="{$row['url']}">查看详情</a>
<!--                            <div class="star" style="text-align:center;"><div class="vote-star"><i style="width:90%"></i></div></div>-->
                        </div>
                    </li>
                    {/loop}

                </ul>
                {else}
                <div class="no-content">
                    <p><i></i>抱歉，没有找到符合条件的产品！<a href="/spots/all">查看全部产品</a></p>
                </div>
                {/if}
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
            <div class="sever-bz" >


                <div class="about-box1">
                    <div class="about1-ico01"></div>
                    <h2>专业保证</h2>
                    <h3>我们收集er的真实</h3>
                </div>
                <div class="about-box1">
                    <div class="about1-ico02"></div>
                    <h2>专业保证</h2>
                    <h3>我们收集er的真实</h3>
                </div>
                <div class="about-box1">
                    <div class="about1-ico03"></div>
                    <h2>专业保证</h2>
                    <h3>我们收集er的真实</h3>
                </div>
            </div>
            <div class="sider-tit">热门推荐门票</div>
            <div class="sider-con">
                {st:spot action="query" flag="order" row="4" return="spotlist"}
                {loop $spotlist $spot}
                <div class="col-box" style="margin-bottom:15px;">
                    <a href="{$spot['url']}" title="{$spot['title']}">
                        <div class="col-img-box" >
                            <div class="col-img"><img src="{Common::img($spot['litpic'],283,195)}"> </div>
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
<script>
    $(function(){
        //套餐点击
        $(".type-tit").click(function(){
            $(this).parents('tr').first().next().toggle();
        })

        //排序方式点击
        $('.sort-sum').find('a').click(function(){
            var url = $(this).find('i').attr('data-url');
            if(url==undefined){
                url = location.href;
            }
            window.location.href = url;
        })
        //删除已选
        $(".chooseitem").find('i').click(function(){
            var url = $(this).parent().attr('data-url');
            window.location.href = url;
        })
        //清空筛选条件
        $('.clearc').click(function(){
            var url = SITEURL+'spots/all/';
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
</body>
</html>