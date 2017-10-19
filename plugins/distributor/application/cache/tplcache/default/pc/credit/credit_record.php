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
    <?php echo  Stourweb_View::template('pc/pub/header');  ?>
    <!-- 顶部 -->
    <?php echo  Stourweb_View::template('pc/pub/sidemenu');  ?>
    <!-- 侧边导航 -->
    <div class="main">
        <div class="content-box">
            <?php echo  Stourweb_View::template("pc/pub/qualifyalert");  ?>
            <div class="frame-box">
                <div class="frame-con">
                    <div class="my-credit-box">
                        <div class="my-credit-tit"><strong class="bt">授信记录</strong></div>
                        <div class="my-credit-con">
                            <div class="credit-list">
                                <table class="credit-table" width="100%" border="0">
                                    <tr>
                                        <th width="50%" scope="col">内容</th>
                                        <th width="10%" scope="col">金额变动(元)</th>
                                        <th width="20%" scope="col">时间</th>
                                        <th width="20%" scope="col">状态</th>
                                    </tr>
                                    <?php $n=1; if(is_array($data['list'])) { foreach($data['list'] as $v) { ?>
                                    <tr class="even-bg">
                                        <td>
                                            <a class="cp-bt" href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['productname'];?></a>
                                        </td>
                                        <td><span class="sub-limit">-<?php echo $v['total'];?></span></td>
                                        <td><span class="date"><?php if($v['finishtime']) { ?><?php echo date('Y年m月d日 H:i',$v['finishtime']);?><?php } ?>
</span></td>
                                        <td><span class="sm-txt">消费</span></td>
                                    </tr>
                                    <?php $n++;}unset($n); } ?>
                                </table>
                            </div>
                            <?php echo $data['pageinfo'];?>
                            <?php if(empty($data)) { ?>
                            <div class="nofound-order">对不起！没有记录。</div>
                            <!-- 搜索无结果 -->
                            <?php } ?>
                            </form
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
    $(function(){
        $("#nav_credit_record").addClass('on');
        $('body').delegate('.add-list','click',function() {
            $(this).parent().after('<li><input name="num[]" type="text" class="num-list" placeholder="请输入短信码进行搜索"/><span class="add-list">增加</span></li>');
            $(this).remove();
        });
        $(".search-btn").click(function(){
            $("#st_form").submit();
        });
    });
</script>
</body>
</html>
