<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>供应商管理系统-<?php echo $webname;?></title>
    <?php echo Common::css("base.css,style.css");?>
    <?php echo Common::js("jquery.min.js");?>
</head>
<body>
<div class="page-box">
    <?php echo Request::factory('pc/pub/header')->execute()->body(); ?>
    <?php echo  Stourweb_View::template("pc/pub/sidemenu");  ?>
    <div class="main">
        <div class="content-box">
            <?php echo  Stourweb_View::template("pc/pub/qualifyalert");  ?>
            <div class="user-msg-box">
                <div class="user-headimg">
                    <?php if(!empty($userinfo['litpic'])) { ?>
                    <img id="face" src="<?php echo $userinfo['litpic'];?>" width="94" height="94"/>
                    <?php } else { ?>
                    <img id="face" src="<?php echo $GLOBALS['cfg_res_url'];?>/images/default-headimg.jpg" width="94" height="94"/>
                    <?php } ?>
                </div>
                <div class="user-msg">
                    <div class="yz">
                        <strong class="name"><?php if($userinfo['suppliername']) { ?><?php echo $userinfo['suppliername'];?><?php } else { ?>供应商<?php } ?>
</strong>
                        <?php if($userinfo['verifystatus']!=3) { ?>
                        <span class="zh">未资质验证</span>
                        <a class="now" href="<?php echo $cmsurl;?>pc/qualify/step">马上验证</a>
                        <?php } else { ?>
                        <span class="zh">已资质验证</span>
                        <?php } ?>
                        <p class="time">上次登录：<?php echo date('Y年m月d日 H:i',$userinfo['logintime']);?></p>
                    </div>
                    <div class="gd">
                        <p><span>账户ID：</span>ST<?php echo str_pad($userinfo['id'],6,'0',STR_PAD_LEFT);?></p>
                        <p><span>手机号：</span><?php echo $userinfo['mobile'];?></p>
                    </div>
                </div>
            </div>
            <!-- 用户资料 -->
            <div class="frame-box">
                <div class="frame-con">
                    <div class="verify-box">
                        <div class="verify-tit">
                            <strong class="bt">我最近的验单</strong>
                        </div>
                        <div class="verify-con">
                            <table class="verify-table" width="100%" border="0">
                                <tr>
                                    <th width="45%" height="40" align="center" scope="col">订单信息</th>
                                    <th width="10%" height="40" align="center" scope="col">价格</th>
                                    <th width="10%" height="40" align="center" scope="col">数量</th>
                                    <th width="10%" height="40" align="center" scope="col">总额</th>
                                    <th width="10%" height="40" align="center" scope="col">状态</th>
                                    <th width="15%" height="40" align="center" scope="col">操作</th>
                                </tr>
                                <?php $n=1; if(is_array($data)) { foreach($data as $v) { ?>
                                <tr>
                                    <td>
                                        <div class="cp">
                                            <a href="<?php echo $v['url'];?>" target="_blank">
                                                <div class="pic">
                                                    <img src="<?php echo $v['litpic'];?>" width="112" height="80" alt="<?php echo $v['productname'];?>"/>
                                                </div>
                                                <div class="con">
                                                    <p class="bt"><?php echo $v['productname'];?></p>
                                                    <p class="dx">短信码：<?php echo $v['smscode'];?></p>
                                                    <p class="hm">订单号：<?php echo $v['ordersn'];?></p>
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                    <td><span class="price">&yen;<?php echo $v['unitprice'];?></span></td>
                                    <td><span class="num">x<?php echo $v['num'];?></span></td>
                                    <td><span class="total">&yen;<?php echo $v['total'];?></span></td>
                                    <td>
                                        <span class="<?php if($v['isconsume']==1 ) { ?>period<?php } else { ?>wxf<?php } ?>
"><?php if($v['isconsume']==1 ) { ?>已消费<?php } else { ?>未消费<?php } ?>
</span>
                                    </td>
                                    <td>
                                        <a class="show" href="/plugins/supplier_check/pc/checkorder/show_order?id=<?php echo $v['id'];?>">查看订单</a>
                                    </td>
                                </tr>
                                <?php $n++;}unset($n); } ?>
                            </table>
                        </div>
                    </div>
                    <!-- 验单记录 -->
                </div>
            </div>
            <?php echo Request::factory("pc/pub/footer")->execute()->body(); ?>
        </div>
    </div>
    <!-- 主体内容 -->
</div>
<script>
    $(function () {
        $("#nav_index").addClass('on');
    });
    /*
     params为附加参数，可以是与dialog有关的所有参数，也可以是自定义参数
     其中自定义参数里有
     loadWindow: 表示回调函数的window
     loadCallback: 表示回调函数
     maxHeight:指定最高高度
     */
    function floatBox(boxtitle, url, boxwidth, boxheight, closefunc, nofade,fromdocument,params) {
        boxwidth = boxwidth != '' ? boxwidth : 0;
        boxheight = boxheight != '' ? boxheight : 0;
        var func = $.isFunction(closefunc) ? closefunc : function () {
        };
        fromdocument = fromdocument ? fromdocument : null;//来源document
        var initParams={
            url: url,
            title: boxtitle,
            width: boxwidth,
            height: boxheight,
            loadDocument:fromdocument,
            onclose: function () {
                func();
            }
        }
        initParams= $.extend(initParams,params);
        var dlg = window.dialog(initParams);
        if(typeof(dlg.loadCallback)=='function'&&typeof(dlg.loadWindow)=='object')
        {
            dlg.finalResponse=function(arg,bool,isopen){
                dlg.loadCallback.call(dlg.loadWindow,arg,bool);
                if(!isopen)
                    this.remove();
            }
        }
        window.d=dlg;
        if (boxwidth != 0) {
            d.width(boxwidth);
        }
        if (boxheight != 0) {
            d.height(boxheight);
        }
        if (nofade) {
            d.show()
        } else {
            d.showModal();
        }
    }
</script>
</body>
</html>
