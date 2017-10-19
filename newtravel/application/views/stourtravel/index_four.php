<!doctype html>

<html>

<head>

    <meta charset="utf-8">

    <title>思途旅游CMS{$coreVersion}</title>

    {php echo Common::getScript('jquery-1.8.3.min.js,common.js,jquery.hotkeys.js,msgbox/msgbox.js,slideTabs.js,hdate/hdate.js,DatePicker/WdatePicker.js,echarts.js,echart-data.js'); }

    {php echo Common::getCss('hdate.css','js/hdate'); }

    {php echo Common::getCss('msgbox.css','js/msgbox'); }

    {php echo Common::getCss('base.css,home.css'); }



    <script>

        $(function () {

            $(".gx-help-fk").switchTab({trigger: "mouseover"});

            $(window).resize(function () {

                setDivAttr()

            })



            $(document).ready(function () {

                setDivAttr()

            });



            function setDivAttr() {

                //var cmsMainHeight = $(window).height()-89;

                var cmsMainWidth = $(window).width() - 450;

                //$(".cms-main-box").height(cmsMainHeight);

                $(".cms-content-box").width(cmsMainWidth);

            }



            $('.top-list-con table').find('tr:even').css('background', '#effaff')

        })

    </script>



    <style>

        .mg20 {

            margin-top: 10px;

        }



        .no-license {

            padding: 0;

            background-color: #f00;

            text-align: center;

            min-height: 30px;

            font-size: 14px;

            color: #fff;

            line-height: 30px;

            vertical-align: middle;

        }



        .no-license p span {

            padding-right: 10px;

            line-height: 30px;

            height: 30px;

            display: inline-block;

        }



        .no-license p span img {

            margin-bottom: -2px;

        }



    </style>

</head>



<body>

<!--CMS主体内容-->

<div class="cms-main-box">

    <!--左侧内容-->

    <div class="cms-content-box">



        <div class="cms-msg-box no-license" style="display: none" id="no-license-msg">

            <p><span><img src="{$GLOBALS['cfg_public_url']}images/no-license-icon.png" alt=""></span>检测到您所使用的系统是盗版系统，对此我们保留起诉的权利，将进行严厉打击！

            </p>

        </div>

        <div class="cms-msg-box no-license" style="background: none;width: 100%;text-align: right;display: none"

             id="license-msg">

              <!-- 07.09 fengjishu 隐藏   欢迎使用正版思途CMS系统！-->
            欢迎使用河北旅游网系统！

        </div>

        <div class="cms-msg-box mg20">

            <div class="admin_msg">

                <img class="fl" src="{$GLOBALS['cfg_public_url']}images/admin-img.png" alt="管理员" width="50" height="50"/>



                <p class="name">{$username}</p>



                <p class="time">{$rolename}</p>

            </div>



            <div class="txt-msg">

                <div class="contact-btn">

                    <a class="fk-btn" href="http://www.stourweb.com/user/myfeedback/commitlist" target="_blank" id="feedback_btn">工单反馈</a>

                    <!--a class="kf-btn" href="javascript:;">联系思途</a--><!--07.09 fengjishu 隐藏-->

                </div>

                <div class="affiche">

                    <table id="info1" style="display: none">

                        <tr>

                            <td valign="top">

                                <div class="tit">

                                    <div class="version" style=" line-height:20px; padding-right: 10px; margin-top: -5px "><span

                                            id="myversion"></span></div>

                                </div>

                            </td>

                            <td valign="top">

                                <div class="up-btn"

                                     onclick="ST.Util.addTab('系统升级','{$cmsurl}upgrade/index/parentkey/application/itemid/1')"><a

                                        href="javascript:;" class="version-icon"></a>



                                    <div><img src="{$GLOBALS['cfg_public_url']}images/s4_06.png"/></div>

                                    <div class="txt">立即升级</div>

                                </div>

                            </td>

                        </tr>

                    </table>



                    <table id="info2" style="display: none">

                        <tr>

                            <td align="right">

                                <div class="tit">请您购买正版系统，享受专业服务！</div>

                            </td>

                        </tr>



                        <tr>

                            <td align="right">

                                <a class="btn" target="_blank" href="http://www.stourweb.com"><img

                                        src="{$GLOBALS['cfg_public_url']}images/contact_03.png"/></a>

                                <a class="btn" target="_blank" href="http://www.stourweb.com/cms/goumai"><img

                                        src="{$GLOBALS['cfg_public_url']}images/goumai-btn-bg.png"/></a>

                            </td>

                        </tr>

                    </table>

                </div>

                </span>

            </div>

        </div>



        <!--产品管理-->

        <div class="product-manage">

            <div class="pro-mge-tit"><s></s>产品管理</div>

            <div class="pro-mge-con">

                <ul>

                    {loop $menu['newproduct'] $v}

                    <li>

                <span class="bhead"><a href="javascript:;" data-url="{$v['url']}"

                                       data-name="{$v['name']}" data-link="{$v['extlink']}">{$v['name']}</a></span>



                        <p>
                            <a class="ba" href="javascript:;" data-url="{$v['order']}" data-name="{$v['name']}订单">

                                <em>订单</em>

                                <em id="{$v['flag']}_order_num"></em>

                                <span id="{$v['flag']}_order_num_unview" class="unview"></span>

                            </a>

                        </p>

                    </li>

                    {/loop}



                    {loop $addmodule $v}

                    <li>



                <span class="bhead"><a href="javascript:;"

                                       data-url="tongyong/index/typeid/{$v['id']}/parentkey/product/itemid/{$v['id']}"

                                       data-name="{$v['modulename']}">{$v['modulename']}</a></span>



                        <p>



                            <a class="ba" href="javascript:;"

                               data-url="order/index/parentkey/order/itemid/{$v['id']}/typeid/{$v['id']}"

                               data-name="{$v['modulename']}订单">



                                <em>订单</em>



                                <em id="{$v['pinyin']}_order_num"></em>



                                <span id="{$v['pinyin']}_order_num_unview" class="unview"></span>



                            </a>



                        </p>



                    </li>



                    {/loop}



                    <li>



                <span class="bhead"><a href="javascript:;" data-url="order/dz/parentkey/order/itemid/14"

                                       data-name="私人定制">私人定制</a></span>



                        <p>



                            <a class="ba" href="javascript:;" data-url="order/dz/parentkey/order/itemid/14" data-name="私人定制">



                                <em>订单</em>



                                <em id="custom_order_num"></em>



                                <span id="custom_order_num_unview" class="unview"></span>



                            </a>



                        </p>



                    </li>



                    <li>



                <span class="bhead"><a href="javascript:;" data-url="order/xy/parentkey/order/itemid/15"

                                       data-name="自定义订单">自定义订单</a></span>



                        <p>



                            <a class="ba" href="javascript:;" data-url="order/xy/parentkey/order/itemid/15" data-name="自定义订单">



                                <em>订单</em>



                                <em id="zdy_order_num"></em>



                                <span id="zdy_order_num_unview" class="unview"></span>



                            </a>



                        </p>



                    </li>



                </ul>



            </div>



        </div>





        <!--软文系统-->



        <div class="article-manage">



            <div class="atc-mge-tit"><s></s>软文系统</div>



            <div class="atc-mge-con article_item">



                <ul>



                    {loop $menu['article'] $v}



                    <li>



                        <a href="javascript:;" data-url="{$v['url']}" data-name="{$v['name']}" data-link="{$v['extlink']}">



                            <s></s>



                            <span><img src="{$GLOBALS['cfg_public_url']}images/{$v['ico']}" alt="{$v['name']}"/></span>



                            <em>{$v['name']}</em>



                        </a>



                    </li>



                    {/loop}





                </ul>



            </div>



        </div>





        <!--数据统计-->



        <div class="data-count">



            <div class="data-count-tit">



                <s></s>



                <span>数据统计</span>



                <div class="time-interval">



                    <em>时间范围</em>



                    <input type="text" class="time-begin" id="starttime" onclick="WdatePicker()" value="{$starttime}"

                           placeholder="{$starttime}"/>



                    <b></b>



                    <input type="text" class="time-over" id="endtime"

                           onclick="WdatePicker({minDate:'#F{$dp.$D(\'starttime\')}'})" value="{$endtime}"

                           placeholder="{$endtime}"/>



                    <input type="button" class="inquiry-btn query_btn" value="查询"/>



                </div>



            </div>



            <div class="data-count-con">



                <div class="list-count-tit"><s></S>订单统计</div>



                <div id="order-count-box" style="height:400px; margin-bottom:50px">





                </div>



                <div class="list-count-tit"><s></S>会员统计</div>



                <div id="member-count-box" style="height:400px; margin-bottom:50px">





                </div>


               <!-----封冀蜀 07.09  隐藏------->
                <!--div class="list-count-tit"><s></S>思途支持</div>

                <div class="situ-support">

                    <div class="update-box">

                        <h3><span>系统更新</span></h3>



                        <div class="con-list" id="newversion_list">

                        </div>

                    </div>

                    <div class="market-box">

                        <h3><span>营销文章</span></h3>



                        <div class="con-list">

                            <ul id="yx_article_list">

                                <li><a href="http://www.stourweb.com/peixun/fangfa-307"

                                       target="_blank">思途，与曾经的老朋友有个约定思途CMS免费授权</a></li>

                                <li><a href="http://www.stourweb.com/peixun/fangfa-305" target="_blank">思途，一个不停探索的故事</a></li>

                                <li><a href="http://www.stourweb.com/peixun/fangfa-306" target="_blank">互联网旅游电商补贴式营销</a></li>

                                <li><a href="http://www.stourweb.com/peixun/fangfa-418" target="_blank">网站优化是做什么的？</a></li>

                                <li><a href="http://www.stourweb.com/peixun/fangfa-417" target="_blank">四川省旅游电子商务学院在“四川城市职业学院”开班授课</a>

                                </li>

                                <li><a href="http://www.stourweb.com/peixun/fangfa-416" target="_blank">旅游网站优化如何做首页排名</a></li>

                                <li><a href="http://www.stourweb.com/peixun/fangfa-415" target="_blank">旅游微信营销的六大技巧</a></li>

                                <li><a href="http://www.stourweb.com/peixun/fangfa-414" target="_blank">PC端和手机端QQ群邀请好友入群方式</a>

                                </li>

                                <li><a href="http://www.stourweb.com/peixun/fangfa-418" target="_blank">网站优化是做什么的？</a></li>

                                <li><a href="http://www.stourweb.com/peixun/fangfa-417" target="_blank">四川省旅游电子商务学院在“四川城市职业学院”开班授课</a>

                                </li>

                            </ul>

                        </div>

                    </div>

                </div-->





                <div class="clear"></div>



            </div>



            <div class="copyright">

                <p>Powered by Stourweb V{$majorVersion} ©2007-{$year}</p>



                <p>建议使用google浏览器访问后台</p>

            </div>



        </div>



    </div>





    <!--右侧内容-->



    <div class="cms-sidle-box">

        <!--电脑版设置-->

        <div class="sidle-module">



            <div class="sidle-tit"><s class="bgs3"></s>电脑版设置</div>



            <div class="sidle-con">



                <div class="sidle-menu-a">



                    {loop $menu['basic'] $v}



                    <span><a href="javascript:;" data-url="{$v['url']}" data-link="{$v['extlink']}">{$v['name']}</a></span>



                    {/loop}





                </div>



            </div>



        </div>

        <!--移动版设置-->

        <div class="sidle-module">



            <div class="sidle-tit"><s class="bgs3"></s>移动版设置</div>



            <div class="sidle-con">



                <div class="sidle-menu-a">



                    {loop $menu['mobile'] $v}



                    <span><a href="javascript:;" data-url="{$v['url']}" data-link="{$v['extlink']}">{$v['name']}</a></span>



                    {/loop}





                </div>



            </div>



        </div>

        {if file_exists(BASEPATH.'/plugins/supplier/')}

        <!--供应商设置-->

        <div class="sidle-module">



            <div class="sidle-tit"><s class="bgs3"></s>供应商设置</div>



            <div class="sidle-con">



                <div class="sidle-menu-a">



                    {loop $menu['supplier'] $v}



                    <span><a href="javascript:;" data-url="{$v['url']}" data-link="{$v['extlink']}">{$v['name']}</a></span>



                    {/loop}





                </div>



            </div>



        </div>

        {/if}

        <!--接口-->

        <div class="sidle-module">



            <div class="sidle-tit"><s class="bgs7"></s>接口设置</div>



            <div class="sidle-con">



                <div class="sidle-menu-a">

                    {loop $menu['interface'] $v}

                    <span><a href="javascript:;" data-url="{$v['url']}" data-link="{$v['extlink']}">{$v['name']}</a></span>

                    {/loop}

                </div>



            </div>

        </div>



        <div class="sidle-module">



            <div class="sidle-tit"><s class="bgs2"></s>分类设置</div>



            <div class="sidle-con">



                <div class="sidle-menu-a">



                    {loop $menu['kind'] $v}



                    <span><a href="javascript:;" data-url="{$v['url']}" data-link="{$v['extlink']}">{$v['name']}</a></span>



                    {/loop}





                </div>



            </div>



        </div>



        <div class="sidle-module">



            <div class="sidle-tit"><s class="bgs8"></s>用户管理</div>



            <div class="sidle-con">



                <div class="sidle-menu-a">



                    {loop $menu['member'] $v}


                    <span><a href="javascript:;" data-url="{$v['url']}" data-link="{$v['extlink']}">{$v['name']}</a></span>



                    {/loop}





                </div>



            </div>



        </div>



        <div class="sidle-module">



            <div class="sidle-tit"><s class="bgs4"></s>系统设置</div>



            <div class="sidle-con">



                <div class="sidle-menu-a">



                    {loop $menu['system'] $v}



            <span><a href="javascript:;" data-url="{$v['url']}" data-link="{$v['extlink']}">{$v['name']}</a><?php if (isset($v['flag']))

                {

                    echo '<img class="new-ico" src="' . $GLOBALS['cfg_public_url'] . 'images/' . $v['ico'] . '"/>';

                } ?></span>



                    {/loop}





                </div>



            </div>



        </div>





        <div class="sidle-module">



            <div class="sidle-tit"><s class="bgs5"></s>优化应用</div>



            <div class="sidle-con">



                <div class="sidle-menu-a">



                    {loop $menu['tool'] $v}



                    <span><a href="javascript:;" data-url="{$v['url']}" data-link="{$v['extlink']}">{$v['name']}</a></span>



                    {/loop}





                </div>



            </div>



        </div>





        <div class="sidle-module">



            <div class="sidle-tit"><s class="bgs6"></s>增值服务</div>



            <div class="sidle-con">



                <div class="sidle-menu-a">



                    {loop $menu['application'] $v}



            <span><a href="javascript:;" data-url="{$v['url']}" data-link="{$v['extlink']}">{$v['name']}</a><?php if (isset($v['flag']))

                {

                    echo '<img class="new-ico" src="' . $GLOBALS['cfg_public_url'] . 'images/' . $v['ico'] . '"/>';

                } ?></span>



                    {/loop}



                </div>



            </div>



        </div>



        <div class="sidle-module">



            <div class="sidle-tit"><s class="bgs6"></s>财务管理</div>



            <div class="sidle-con">



                <div class="sidle-menu-a">



                    {loop $menu['finance'] $v}


            <span><a href="javascript:;" data-url="{$v['url']}" data-link="{$v['extlink']}">{$v['name']}</a><?php if (isset($v['flag']))

                {

                    echo '<img class="new-ico" src="' . $GLOBALS['cfg_public_url'] . 'images/' . $v['ico'] . '"/>';

                } ?></span>



                    {/loop}



                </div>



            </div>



        </div>







        <div class="sidle-module">



            <div class="sidle-tit"><s class="bgs_userdefine"></s>用户定义</div>



            <div class="sidle-con">



                <div class="sidle-menu-a">



                    {loop $menu['userdefined'] $v}



                    <span><a href="javascript:;" data-url="{$v['url']}" data-link="{$v['extlink']}">{$v['name']}</a></span>



                    {/loop}





                </div>



            </div>



        </div>

    </div>

</div>





</div>



<!--客服专员-->



<div class="kefu-box" style="display: none">

    <div class="kf-tit">

        <em>联系思途</em>

        <span class="kf_close"></span>

    </div>

    <div class="kf-con-list">

        <div class="con-list-tit">感谢购买思途产品！您可以通过以下几个途径联系到思途。</div>

        <ul class="list-kf-name">

            <li>1、通过<a href="http://www.stourweb.com/help/" target="_blank">官方帮助中心</a>自助查询需要的帮助内容。<span>（对于操作性等问题，请到帮助中心自助查询）</span></li>

            <li>2、通过<a href="http://www.stourweb.com/user/myfeedback/commitlist" target="_blank">提交工单</a>反馈问题或建议。<span>（针对BUG性问题，我们会在24小时以内相应处理。建议性问题会进行评估排期后根据客户需求量进行选择开发）</span></li>

            <li>3、工作时间外遇站点无法访问等紧急问题，请电话联系客服出来。<br>联系电话：400-609-9927转2<span>（售后工作时间：周一至周五9:00-18:00）</span></li>

        </ul>

        <div class="link-st-btn kf_close"><a href="javascript:;">确认</a></div>

    </div>

</div>





<div class="remind-box" style="display: none">



    <div class="rem-tit">



        <em>绑定授权</em>



        <span id="closeremind"></span>



    </div>



    <div class="rem-con-list">



        <div class="txt">请及时绑定，以获得思途CMS终生免费升级服务<br>授权后您将获得：免费系统升级 短信通知功能 官方帮助系统 工单反馈系统 等更多增值服务</div>



        <div class="btn_box"><a href="javascript:;" class="btn_bind">立即绑定</a><a href="javascript:;"

                                                                                class="btn_showkefu">咨询客服，获取授权</a></div>



        <div class="txt">思途CMS每周四更新，发布全新功能、全新页面以及安全修复等。让您的网站永不过时！</div>



    </div>



</div>





<script>



    var URL = '{php echo URL::site();}';



    function openpage(obj) {

        var bool = obj.attr('data-link');

        var title=typeof(obj.attr('data-name'))=="undefined"?obj.text():obj.attr('data-name');

        var url = obj.attr('data-url');

        if (bool == 2) {

            obj.attr({'target': '_blank', 'href': url});

        } else {

            ST.Util.addTab(title, url);

        }

    }



    $(function () {

        $('.pro-mge-con').find('a').click(function () {

            openpage($(this));

        })



        $('.sidle-menu-a').find('a').click(function () {

            openpage($(this));

        })



        //专属客服

        $(".kf-btn").click(function () {

            $('.kefu-box').show();

        })



        //专属客服关闭

        $('.kf_close').click(function () {

            $('.kefu-box').hide();

        })



        //文章管理

        $(".article_item").find('a').click(function () {

            var url = $(this).attr('data-url');

            var title = $(this).attr('data-name');

            ST.Util.addTab(title, url);



        })



        //获取订单数量

        $.ajax({

            type: 'POST',

            url: URL + 'index/ajax_order_num',

            dataType: 'json',

            success: function (data) {

                $.each(data, function (i, row) {

                    $("#" + row.md + '_order_num').html(row.num);

                    if (row.unviewnum && row.unviewnum != 0) {

                        var len = row.unviewnum.length;

                        $("#" + row.md + '_order_num_unview').html(row.unviewnum);

                        $("#" + row.md + '_order_num_unview').addClass('bk_num' + len);

                    }

                })

            }

        })



        //新版检测

        $.ajax({

            url: URL + "upgrade/ajax_check_allSystemPart_update",

            dataType: 'json',

            success: function (data) {

                var html = "";

                var existsNewversion = false;

                $(data).each(function () {

                    html += this.caption + "&nbsp;" + this.versioninfo.cVersion + '<br>';

                    if (this.newestVersioninfo != undefined && this.versioninfo.cVersion != this.newestVersioninfo.version)

                        existsNewversion = true;

                })

                $("#myversion").html(html);



                if (existsNewversion) {

                    $(".up-btn .version-icon").css('visibility', 'visible')

                }

                checkRightV();

            }});



        getLastArticle();

        getNewVersionInfo();

        //查询日期

        $(".query_btn").click(function () {

            var starttime = $("#starttime").val();

            var endtime = $("#endtime").val();

            var arr = starttime.split("-");

            var starttime = new Date(arr[0], arr[1], arr[2]);

            var starttimes = starttime.getTime();

            var arrs = endtime.split("-");

            var lktime = new Date(arrs[0], arrs[1], arrs[2]);

            var lktimes = lktime.getTime();



            if (starttimes >= lktimes) {

                ST.Util.showMsg("结束日期不能小于开始日期", 5, 1000);

                return false;

            }

            initChart();

        })



        $('#closeremind').click(function () {

            $('.remind-box').hide();

        })



        $(".btn_bind").click(function () {

            ST.Util.addTab('授权管理', 'config/authright/parentkey/basic/itemid/11');

        })



        $(".btn_showkefu").click(function () {

            $('.kefu-box').show();

        })

    })



    //检测正版授权

    function checkRightV() {

        $.ajax({

            url: URL + "upgrade/ajax_check_right/systempart/{php echo Model_SystemParts::$coreSystemPartCode}",

            dataType: 'json',

            success: function (data) {

                if (data.status == 1) {

                    $('#info1').show();

                    $('#license-msg').show();

                }

                else {

                    $('#info2').show();

                    $('#no-license-msg').show();

                    $('.remind-box').show()



                }

            }});

    }



    //异步获取文章

    function getLastArticle() {

        $.ajax({

            type: 'POST',

            url: URL + 'index/ajax_get_last_article',

            dataType: 'json',

            success: function (rs) {

                if(rs.status!==0){

                    var list = '';

                    $.each(rs.data, function (i, row) {

                        list += '<li><a href="http://www.stourweb.com' + row.url + '" target="_blank">' + row.title + '</a></li>';

                    });

                    $("#yx_article_list").html(list)

                }

            }

        })

    }



    //按星期获取订单数量(图表)

    function getOrderNumber(typeid) {

        var arr = [];

        $.ajax({

            type: 'POST',

            data: {typeid: 2},

            async: false,

            url: URL + 'index/ajax_order_num_graph',

            dataType: 'json',

            success: function (data) {

                if (data) {

                    $.each(data, function (i, row) {

                        arr.push(row.num);

                    })

                }

            }

        })



        return arr;

    }



    function getNewVersionInfo() {

        $.ajax({

            type: 'POST',

            url: URL + 'upgrade/ajax_version/systempart/{php echo Model_SystemParts::$coreSystemPartCode}',

            dataType: 'json',

            beforeSend: function () {



            },

            success: function (data) {

                var out = '';

                var k = 1;

                $.each(data, function (i, row) {

                    if (k <= 5) {

                        var desc = row.desc;

                        desc = desc.replace(/<[^>]+>/g, "");

                        out += "<dl>";

                        out += '<dt><a href="http://www.stourweb.com/cms/banben" target="_blank">' + row.pubdate + ' 发布 ' + row.version + '升级包</a></dt>';

                        out += '<dd>' + desc + '</dd>';

                        out += '</dl>';

                    }

                    k++;

                })



                $('#newversion_list').append(out);



            }

        })

    }

</script>



</body>



</html>











































































































































































































