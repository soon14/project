<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>供应商管理系统-<?php echo $webname;?></title>
    <?php echo Common::css("style.css,base.css");?>
    <?php echo Common::js("jquery.min.js");?>
</head>
<body>
<div class="page-box">
    <?php echo Request::factory('pc/pub/header')->execute()->body(); ?>
    <!-- 顶部 -->
    <?php echo  Stourweb_View::template('pc/pub/sidemenu');  ?>
    <!-- 侧边导航 -->
    <div class="main">
        <div class="content-box">
            <?php echo  Stourweb_View::template("pc/pub/qualifyalert");  ?>
            <div class="frame-box">
                <div class="frame-con">
                    <div class="verify-box">
                        <div class="verify-list-tit"><strong class="bt">我要验单</strong></div>
                        <div class="verify-search-box">
                            <form id="st_form" method="get" action="<?php echo $cmsurl;?>pc/checkorder/my_check">
                            <div class="verify-search-list">
                                <ul>
                                    <?php if(empty($get['searchKey'])) { ?>
                                    <li><input name="searchKey[]" type="text" class="num-list" placeholder="请输入短信码进行搜索"/><span class="add-list">增加</span></li>
                                    <?php } else { ?>
                                    <?php $n=1; if(is_array($get['searchKey'])) { foreach($get['searchKey'] as $v) { ?>
                                    <li>
                                        <input name="searchKey[]" type="text" class="num-list" placeholder="" value="<?php echo $v;?>"/>
                                        <?php if($n == count($get['searchKey'])) { ?><span class="add-list">增加</span><?php } ?>
                                    </li>
                                    <?php $n++;}unset($n); } ?>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="search-all-btn"><a href="javascript:void(0)">搜索</a></div>
                            </form>
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
                                <?php $n=1; if(is_array($data['orderData'])) { foreach($data['orderData'] as $v) { ?>
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
                                        <a class="show" href="<?php echo $cmsurl;?>pc/checkorder/show_order?id=<?php echo $v['id'];?>">查看订单</a>
                                        <?php if($v['isconsume']!=1 ) { ?><a class="now-yd check-order" href="javascript:;" data-id="<?php echo $v['id'];?>">确认验单</a><?php } ?>
                                    </td>
                                </tr>
                                <?php $n++;}unset($n); } ?>
                            </table>
                            <?php if(!empty($data['noOrderData'])) { ?>
                            <div class="error-order">
                                抱歉！没有找到<?php $n=1; if(is_array($data['noOrderData'])) { foreach($data['noOrderData'] as $v) { ?><?php if($n > 1) { ?>、<?php } ?>
<span><?php echo $v;?></span><?php $n++;}unset($n); } ?>订单，请尝试其他搜索条件。
                            </div>
                            <?php } ?>
                            <!-- 搜索无结果 -->
                        </div>
                    </div>
                    <!-- 我要验单 -->
                </div>
            </div>
            <?php echo  Stourweb_View::template('pc/pub/footer');  ?>
        </div>
    </div>
    <!-- 主体内容 -->
</div>
<?php echo Common::js("layer/layer.js");?>
<script>
    $(function(){
        $("#nav_my_check").addClass('on');
        $('body').delegate('.add-list','click',function() {
            $(this).parent().after('<li><input name="num[]" type="text" class="num-list" placeholder="请输入短信码进行搜索"/><span class="add-list">增加</span></li>');
            $(this).remove();
        });
        $(".search-all-btn a").click(function(){
            $("#st_form").submit();
        });
        //验单
        $(".check-order").click(function(){
            $.post('<?php echo $cmsurl;?>pc/checkorder/ajax_check_order', {
                'id': $(this).attr("data-id"),
            },function(data) {
                if (data.status == 1) {
                    layer.msg(data.msg, {icon:6, end: function(){
                        window.location.reload();
                    }});
                } else {
                    layer.msg(data.msg, {icon:5});
                }
            },'json');
        });
    });
</script>
</body>
</html>
