<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{$info['kindname']}旅游景点大全_景点门票_景点介绍_景点图片-河北旅游网</title>
    <meta name="keywords" content="{$info['kindname']}旅游景点大全,旅游景点介绍,旅游景点图片,景点门票" />
    <meta name="description" content="河北旅游网为旅游爱好者提供{$info['kindname']}旅游景点大全,著名旅游景点介绍,旅游景点推荐,旅游景点图片等旅游信息。告诉你有哪些好玩的景点！" />
    {Common::css('mycss/bootstrap.min.css,mycss/responsive.tabs.css,mycss/base.css,mycss/ticket.css')}

    {Common::js('jquery.min.js,base.js,common.js,myjs/bootstrap.min.js,myjs/jquery-1.8.3.min.js,myjs/responsive.tabs.js')}
    {$GLOBALS['cfg_tongjicode']}
</head>
<body>
{request "pub/header"}
<div class="notebox"></div>
<section>
    <!-- 面包屑 开始 -->
    <div  class="BreadCrumb Color-fff">
        <ul >
            <li><a href="/">首页<i class="icon-gt">&gt;</i></a></li>
            <!--      <li><a href="#">目的地<i class="icon-gt">&gt;</i></a></li>-->
            <li><a href="/{$info['pinyin']}?param=survey">{$info['kindname']}<i class="icon-gt">&gt;</i></a></li>
            <li class="current"><a href="#">景点</a></li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <!--  面包屑 结束 -->
</section>
<section>
    {request "pub/CommonNav"}
</section>


<section>

    <div class="container">
        <div class="tlist_left">

            <!---选项卡插件多种tab标签切换开始--->

            <div class="demo" id="bye">

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
                                            <span class="chooseitem" data-url="/{$info['pinyin']}?param={$params}&p={$currentpage}&attrid=">{$item['itemname']}<i></i></span>
                                            {/loop}
                                            <a href="javascript:;" class="clearc">清空筛选条件 </a>
                                        </div>
                                    </td>
                                </tr>


                                <!--属性组读取-->
                                {st:attr action="query" flag="grouplist" typeid="5" return="grouplist"}
                                {loop $grouplist $group}
                                <tr>
                                    <td width="16%" bgcolor="#eff4fa" class="ticket_b_b">{$group['attrname']}：</td>
                                    <td width="84%">
                                        <div class="ticket_city">
                                            <!--span class="tic-all"><a href="#">全部</a></span-->

                                            {st:attr action="query" flag="childitem" typeid="5" groupid="$group['id']" return="attrlist"}
                                             <ul class="ticket_ab">
                                             {loop $attrlist $attr}
                                             <li>
                                            <a href="/{$info['pinyin']}?param={$params}&p={$currentpage}&attrid={$attr['id']}" >{$attr['attrname']}</a>
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


            <!--分页 结束 -->
            <div class="pages">
                <div id="Pagination">
                    <div class="pagination">
                        <?php echo 11111111;exit;?>
                        <a class="current " href="/{$info['pinyin']}?param={$params}&p=1"><i></i>首页</a>
                        {if $currentpage>1}
                        <a class="current prev" href="/{$info['pinyin']}?param={$params}&p={$currentpage-1}">上页</a>
                        {/if}
                        <?php
                        //每页显示数量
                        $needpage = $pagesize;
                        $total_pages = ceil($total*1/$pagesize);
                        $coefficient = floor($currentpage/$needpage);
                        $mod = $currentpage % $needpage;
                        //开始页码
                        $startPage = $coefficient*$needpage +1;
                        $endPage =   $coefficient*$needpage + 10;

                        //如果endpage 大于 总页数,则取总页数
                        $endPage = $endPage > $total_pages ? $total_pages : $endPage;
                        ?>
                        <?php for ($i = $startPage; $i <= $endPage; $i++){ ?>
                            <?php if ($i == $currentpage){ ?>

                                <a class="current" href ="/{$info['pinyin']}?param={$params}&p=<?php echo $i?>"><?php echo $i?></a>
                            <?php }else{ ?>

                                <a href="/{$info['pinyin']}?param={$params}&p=<?php echo $i?>"><?php echo $i?></a>
                            <?php } ?>

                        <?php } ?>
                        <a class="current" href="/{$info['pinyin']}?param={$params}&p={$currentpage+1}">下页</a>

                    </div>
                </div>
                <div class="searchPage">
                    <span class="page-sum">共<strong class="allPage">{$total_pages}</strong>页</span>
                    <span class="page-go">跳转<input type="number" min="1" style="width:35px">页</span>
                    <a href="javascript:;" class="page-btn">GO</a>
                </div>
            </div>
            <!--分页 结束 -->


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