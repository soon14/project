<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>我的提现-<?php echo $webname;?></title>
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
                        <div class="verify-list-tit"><strong class="bt">我的提现申请</strong></div>
                        <div class="verify-search-box">
                            <div class="verify-search-con" style="float: right">
                                <input type="button" class="search-btn" value="申请提现"/>
                            </div>
                        </div>
                        <div class="verify-con">
                            <table class="verify-table" width="100%" border="0">
                                <tr>
                                    <th width="10%" height="30" align="center" scope="col">提现金额</th>
                                    <th width="30%" height="30" align="center" scope="col">提现卡号</th>
                                    <th width="20%" height="30" align="center" scope="col">银行卡户名</th>
                                    <th width="10%" height="30" align="center" scope="col">申请提交时间</th>
                                    <th width="10%" height="30" align="center" scope="col">提现状态</th>
                                    <th width="10%" height="30" align="center" scope="col">申请审核时间</th>
                                    <th width="10%" height="30" align="center" scope="col">操作</th>
                                </tr>
                                <?php $n=1; if(is_array($data['list'])) { foreach($data['list'] as $v) { ?>
                                <tr>
                                    <td><span class="total">&yen;<?php echo $v['withdrawamount'];?></span></td>
                                    <td><span><?php echo $v['bankcardnumber'];?></span></td>
                                    <td><span><?php echo $v['bankaccountname'];?></span></td>
                                    <td><span><?php echo date('Y-m-d H:i:s',$v['addtime']);?></span></td>
                                    <td>
                                        <span
                                            class="<?php if($v['status']==1 ) { ?>period<?php } else { ?>wxf<?php } ?>
"><?php echo $v['status_name'];?></span>
                                    </td>
                                    <td>
                                        <span><?php  if(!empty($v['finishtime']))
                                                        echo date('Y-m-d H:i:s',$v['finishtime']);
                                               ?>
                                        </span>
                                    </td>
                                    <td>
                                        <a class="show"
                                           href="<?php echo $cmsurl;?>pc/finance/drawcash_detail?id=<?php echo $v['id'];?>">查看详情</a>
                                    </td>
                                </tr>
                                <?php $n++;}unset($n); } ?>
                            </table>
                            <?php echo $data['pageinfo'];?>
                            <?php if(empty($data)) { ?>
                            <div class="nofound-order">对不起！没有符合条件，请尝试其他搜索条件。</div>
                            <!-- 搜索无结果 -->
                            <?php } ?>
                        </div>
                    </div>
                    <!-- 验单记录 -->
                </div>
            </div>
            <?php echo  Stourweb_View::template('pc/pub/footer');  ?>
        </div>
    </div>
    <!-- 主体内容 -->
</div>
<script>
    $(function () {
        $("#nav_drawcash").addClass('on');
        $(".search-btn").click(function () {
            location.href = "<?php echo $cmsurl;?>pc/finance/drawcash_apply";
        });
    });
</script>
</body>
</html>
