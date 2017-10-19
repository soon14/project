<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{$seoinfo['seotitle']}-{$webname}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {if $seoinfo['keyword']}
    <meta name="keywords" content="{$seoinfo['keyword']}"/>
    {/if}
    {if $seoinfo['description']}
    <meta name="description" content="{$seoinfo['description']}"/>
    {/if}
    {$GLOBALS['cfg_indexcode']}
    {include "pub/varname"}
    {Common::css("mycss/layout.css")}
    {Common::js("jquery.min.js,base.js,common.js")}
</head>
<body style="background:#f5f5f5;">
{request "pub/header"}

<div id="banner">
 
</div>

<!--景区门票开始-->
<div class="container">
    <div class="main_title text-center">
        <div class="main_more"><a href="#"><img src="/res/images/img/more.png"></a></div>
        <h2 class="index_title"><i class="main_t_ico1"></i>景区门票</h2>
        <span>这里有石家庄最便宜的门票</span> </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div>
                <div class="city-box"><i></i><span>城市选择</span>
                    {st:dest action="query" flag="index_nav" row="10" return="index_mdd"}
                    {loop $index_mdd $mdd}
                    <a href="{$cmsurl}spots/{$mdd['pinyin']}/">{$mdd['kindname']}</a>
                    {/loop}
                    {/st}
                </div>
                <div class="tabbable " id="tabs-687555" >
                    <ul class="nav nav-tabs nav-pills ">
                        {st:attr action="query" flag="childitem" typeid="5" groupid="13" row="4" return="attrlist"}
                        {loop $attrlist $attr}
                            <li> <a href="#panel-{$attr['id']}" data-toggle="tab" {if $k == 0}class="active"{/if}>{$attr['attrname']}</a> </li>
                        {/loop}
                        {/st}
                    </ul>
                    <div class="tab-content">
                        {loop $attrlist $k $attr}
                        {st:spot action="query" flag="attr" row="6" attrid="$attr['id']" return="indexspot"}
                        <div class="tab-pane {if $k == 0}active{/if}" id="panel-{$attr['id']}">
                            <div class="col-md-2">
                                <div class="ticket-box">
                                    <div class="ticket-box-l"><img src="{$indexspot[0]['piclist']}"></div>
                                    <div class="ticket-box-r">
                                        <h2>{$indexspot[0]['title']}</h2>
                                        <h3>国家4A级景区</h3>
                                        <del>票面价:{$indexspot[0]['sellprice']}元</del>
                                        <div class="ticket-price">优惠价:{$indexspot[0]['price']}元</div>
                                        <div class="col-but"><a href="{$indexspot[0]['url']}">我要购买</a></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="ticket-box">
                                    <div class="ticket-box-l"><img src="{$indexspot[1]['piclist']}"></div>
                                    <div class="ticket-box-r">
                                        <h2>{$indexspot[1]['title']}</h2>
                                        <h3>国家4A级景区</h3>
                                        <del>票面价:{$indexspot[1]['sellprice']}元</del>
                                        <div class="ticket-price">优惠价:{$indexspot[1]['price']}元</div>
                                        <div class="col-but"><a href="{$indexspot[1]['url']}">我要购买</a></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-box"> <a href="{$indexspot[2]['url']}" title="{$indexspot[2]['title']}">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="{$indexspot[2]['price']}"> </div>
                                            <div class="col-bottom">
                                                <div class="col-tt">
                                                    <p>门票</p>
                                                </div>
                                                <div class="col-price"><span>¥{$indexspot[2]['price']}</span>
                                                    <yuan>元</yuan>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="col-tit"><a href="{$indexspot[2]['url']}" title="{$indexspot[2]['title']}">{$indexspot[2]['title']}</a></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-box"> <a href="{$indexspot[3]['url']}" title="{$indexspot[3]['title']}">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="{$indexspot[3]['piclist']}"> </div>
                                            <div class="col-bottom">
                                                <div class="col-tt">
                                                    <p>门票</p>
                                                </div>
                                                <div class="col-price"><span>¥{$indexspot[3]['price']}</span>
                                                    <yuan>元</yuan>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="col-tit"><a href="{$indexspot[3]['url']}" title="{$indexspot[3]['title']}">{$indexspot[3]['title']}</a></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-box"> <a href="{$indexspot[4]['url']}" title="{$indexspot[4]['title']}">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="{$indexspot[4]['piclist']}"> </div>
                                            <div class="col-bottom">
                                                <div class="col-tt">
                                                    <p>门票</p>
                                                </div>
                                                <div class="col-price"><span>¥{$indexspot[4]['price']}</span>
                                                    <yuan>元</yuan>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="col-tit"><a href="{$indexspot[4]['url']}" title="{$indexspot[4]['title']}">{$indexspot[4]['title']}</a></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-box"> <a href="#" title="{$indexspot[5]['title']}">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="{$indexspot[5]['piclist']}"> </div>
                                            <div class="col-bottom">
                                                <div class="col-tt">
                                                    <p>门票</p>
                                                </div>
                                                <div class="col-price"><span>¥{$indexspot[5]['price']}</span>
                                                    <yuan>元</yuan>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="col-tit"><a href="{$indexspot[5]['url']}" title="{$indexspot[5]['title']}">{$indexspot[5]['title']}</a></div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        {/st}
                        {/loop}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--酒店开始-->
<div class="container">
    <div class="main_title text-center">
        <div class="main_more"><a href="#"><img src="/res/images/img/more.png"></a></div>
        <h2 class="index_title"><i class="main_t_ico3"></i>酒店</h2>
        <span>拎包就走，轻松出游</span></div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div>
                <div class="city-box"><i></i><span>城市选择</span><a href="#">石家庄</a><a href="#">秦皇岛</a><a href="#">保定</a><a href="#">邯郸</a><a href="#"> 邢台</a></div>
                <div class="tabbable " id="tabs-687555" >
                    <ul class="nav nav-tabs nav-pills">
                        <li class="active"> <a href="#panel-502216" data-toggle="tab">今日热卖</a></li>
                        <li> <a href="#panel-80964" data-toggle="tab">娱乐休闲</a> </li>
                        <li> <a href="#panel-80964" data-toggle="tab">亲自游</a> </li>
                        <li> <a href="#panel-80964" data-toggle="tab">名胜古迹</a> </li>
                        <li> <a href="#panel-80964" data-toggle="tab">温泉滑雪</a> </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane  active" id="panel-">
                            <div class="col-md-2">
                                <div class="tour-hot">
                                    <div class="tour-img-box"> <img src="/res/images/myimages/pic02.jpg" width="100%">
                                        <div class="tour-bottom">
                                            <div class="tour-tt">
                                                <p>酒店</p>
                                            </div>
                                            <div class="tour-price"><span>¥135</span>
                                                <yuan>元</yuan>
                                            </div>
                                        </div>
                                        <div class="tour-com">
                                            <p>[五一端午节假期]河北保定白洋淀 酒店+门票</p>
                                            <div class="tour-com-b">节假日畅游 为您制定无忧的旅行</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-box"> <a href="#" title="[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="/res/images/myimages/pic01.jpg"></div>
                                            <div class="col-bottom">
                                                <div class="col-tt">
                                                    <p>酒店</p>
                                                </div>
                                                <div class="col-price"><span>¥135</span>
                                                    <yuan>元</yuan>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="col-tit"><a href="#" title="[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)">[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)</a></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-box"> <a href="#" title="[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="/res/images/myimages/pic01.jpg"></div>
                                            <div class="col-bottom">
                                                <div class="col-tt">
                                                    <p>门票</p>
                                                </div>
                                                <div class="col-price"><span>¥135</span>
                                                    <yuan>元</yuan>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="col-tit"><a href="#" title="[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)">[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)</a></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-box"> <a href="#" title="[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="/res/images/myimages/pic01.jpg"></div>
                                            <div class="col-bottom">
                                                <div class="col-tt">
                                                    <p>酒店</p>
                                                </div>
                                                <div class="col-price"><span>¥135</span>
                                                    <yuan>元</yuan>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="col-tit"><a href="#" title="[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)">[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)</a></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-box"> <a href="#" title="[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="/res/images/myimages/pic01.jpg"></div>
                                            <div class="col-bottom">
                                                <div class="col-tt">
                                                    <p>酒店</p>
                                                </div>
                                                <div class="col-price"><span>¥135</span>
                                                    <yuan>元</yuan>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="col-tit"><a href="#" title="[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)">[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)</a></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-box"> <a href="#" title="[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="/res/images/myimages/pic01.jpg"></div>
                                            <div class="col-bottom">
                                                <div class="col-tt">
                                                    <p>酒店</p>
                                                </div>
                                                <div class="col-price"><span>¥135</span>
                                                    <yuan>元</yuan>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="col-tit"><a href="#" title="[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)">[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)</a></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-box"> <a href="#" title="[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="/res/images/myimages/pic01.jpg"></div>
                                            <div class="col-bottom">
                                                <div class="col-tt">
                                                    <p>酒店</p>
                                                </div>
                                                <div class="col-price"><span>¥135</span>
                                                    <yuan>元</yuan>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="col-tit"><a href="#" title="[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)">[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="panel-2">内容1 </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--自驾游开始-->
<div class="container" >
    <div class="main_title text-center">
        <div class="main_more"><a href="#"><img src="/res/images/img/more.png"></a></div>
        <h2 class="index_title"><i class="main_t_ico4"></i>自驾游</h2>
        <span>一起流年，遇见不一样的风景</span> </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="tabbable " id="tabs-687555">
                <ul class="nav nav-tabs nav-pills">
                    <li class="active"> <a href="#panel-502216" data-toggle="tab">正在进行</a> </li>
                    <li> <a href="#panel-80964" data-toggle="tab">已过期</a> </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane  active" id="panel-502216">
                        <div class="col-md-3">
                            <div class="col-box"> <a href="#" title="[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)">
                                    <div class="col-img-box">
                                        <div class="col-img"><img src="/res/images/myimages/pic01.jpg"> </div>
                                        <div class="col-bottom">
                                            <div class="col-com">
                                                <p>草原天路二日自驾游</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="col-info">
                                    <div class="col-ma-3 col-line">
                                        <p>300元</p>
                                        费用</div>
                                    <div class="col-ma-3 col-line">
                                        <p>张北</p>
                                        目的地</div>
                                    <div class="col-ma-3">
                                        <p>12/10</p>
                                        时间</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="col-but"><a href="#">我要报名</a></div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="col-box"> <a href="#" title="[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)">
                                    <div class="col-img-box">
                                        <div class="col-img"><img src="/res/images/myimages/pic01.jpg"> </div>
                                        <div class="col-bottom">
                                            <div class="col-com">
                                                <p>草原天路二日自驾游</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="col-info">
                                    <div class="col-ma-3 col-line">
                                        <p>300元</p>
                                        费用</div>
                                    <div class="col-ma-3 col-line">
                                        <p>张北</p>
                                        目的地</div>
                                    <div class="col-ma-3">
                                        <p>12/10</p>
                                        时间</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="col-but"><a href="#">我要报名</a></div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="col-box"> <a href="#" title="[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)">
                                    <div class="col-img-box">
                                        <div class="col-img"><img src="/res/images/myimages/pic01.jpg"> </div>
                                        <div class="col-bottom">
                                            <div class="col-com">
                                                <p>草原天路二日自驾游</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="col-info">
                                    <div class="col-ma-3 col-line">
                                        <p>300元</p>
                                        费用</div>
                                    <div class="col-ma-3 col-line">
                                        <p>张北</p>
                                        目的地</div>
                                    <div class="col-ma-3">
                                        <p>12/10</p>
                                        时间</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="col-but"><a href="#">我要报名</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="panel-80964">内容1 </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<!--热门游记开始-->
<div class="container">
    <div class="main_title text-center">
        <div class="main_more"><a href="#"><img src="/res/images/img/more.png"></a></div>
        <h2 class="index_title"><i class="main_t_ico5"></i>热门游记攻略</h2>
        <span>足不出门看世界</span> </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="tabbable " id="tabs-687555">
                    <ul class="nav nav-tabs nav-pills">
                        <li class="active"> <a href="#panel-502216" data-toggle="tab">今日热卖 </a> </li>
                        <li> <a href="#panel-80964" data-toggle="tab">娱乐休闲</a> </li>
                        <li> <a href="#panel-80964" data-toggle="tab">亲自游</a> </li>
                        <li> <a href="#panel-80964" data-toggle="tab">名胜古迹</a> </li>
                        <li> <a href="#panel-80964" data-toggle="tab">温泉滑雪</a> </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane  active" id="panel-502216">
                            <div class="col-md-4">
                                <div class="col-box"> <a href="#" title="[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="/res/images/myimages/pic01.jpg"> </div>
                                            <div class="col-bottom">
                                                <div class="col-yj">
                                                    <p>天山海世界一</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="peo-box">
                                        <div class="col-dz">12</div>
                                        <div class="col-ico"><img src="/res/images/img/ico01.jpg"></div>
                                        <div class="col-t">穷游活动君</div>
                                    </div>
                                    <div class="col-tit"><a href="#" title="[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)">景点很不错 而且因为是初春 人不是很多 玩的很尽兴</a></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-box"> <a href="#" title="[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="/res/images/myimages/pic01.jpg"> </div>
                                            <div class="col-bottom">
                                                <div class="col-yj">
                                                    <p>天山海世界一</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="peo-box">
                                        <div class="col-dz">12</div>
                                        <div class="col-ico"><img src="/res/images/img/ico01.jpg"></div>
                                        <div class="col-t">穷游活动君</div>
                                    </div>
                                    <div class="col-tit"><a href="#" title="[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)">[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)</a></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-box"> <a href="#" title="[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="/res/images/myimages/pic01.jpg"> </div>
                                            <div class="col-bottom">
                                                <div class="col-yj">
                                                    <p>天山海世界一</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="peo-box">
                                        <div class="col-dz">12</div>
                                        <div class="col-ico"><img src="/res/images/img/ico01.jpg"></div>
                                        <div class="col-t">穷游活动君</div>
                                    </div>
                                    <div class="col-tit"><a href="#" title="[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)">[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)</a></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-box"> <a href="#" title="[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="/res/images/myimages/pic01.jpg"> </div>
                                            <div class="col-bottom">
                                                <div class="col-yj">
                                                    <p>天山海世界一</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="peo-box">
                                        <div class="col-dz">12</div>
                                        <div class="col-ico"><img src="/res/images/img/ico01.jpg"></div>
                                        <div class="col-t">穷游活动君</div>
                                    </div>
                                    <div class="col-tit"> <a href="#" title="[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)">[五一长假]深圳/香港直飞沙巴5天4晚自由行(可选五星酒店)</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="panel-80964">内容1 </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--底部-->
{request "pub/footer"}
{request "pub/flink"}
</body>
</html>