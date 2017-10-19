<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>申请提现-<?php echo $webname;?></title>
    <?php echo Common::css('style.css,base.css,extend.css');?>
    <?php echo Common::js('jquery.min.js,common.js,slideTabs.js,jquery.upload.js,jquery.validate.min.js,layer/layer.js');?>
    <style>
        .error-txt {
            color: #333;
            display: inline-block;
            margin-left: 10px;
            font-size: 14px;
        }
        .error-txt:before {
            content: ' ';
            display: inline-block;
            width: 16px;
            height: 16px;
            vertical-align: middle;
            margin: -3px 5px 0 0;
            background: url(/plugins/supplier/public/default/pc/images/gys-dg-ico.png) no-repeat -52px -83px;
        }
    </style>
</head>
<body>
<div class="page-box">
    <?php echo Request::factory('pc/pub/header')->execute()->body(); ?>
    <?php echo  Stourweb_View::template("pc/pub/sidemenu");  ?>
    <div class="main">
        <div class="content-box">
            <div class="frame-box">
                <div class="frame-con">
                    <form id="chkfrm">
                        <div class="flow-path-box">
                            <div class="flow-path-tit"><strong class="bt">申请提现</strong></div>
                            <div class="flow-path-con">
                                <div class="nr-box">
                                    <div class="step"><span class="on">提交申请</span><span>客服审核</span><span>审核结果</span>
                                    </div>
                                    <div class="way">
                                        <div class="gy-top-box">
                                            <ul>
                                                <li><strong class="lm">提现金额：</strong>
                                                    <div class="zl-con"><input type="text" name="withdrawamount"
                                                                               id="withdrawamount"
                                                                               class="tit-text" value=""/><span
                                                            class="error-txt" style="display: none"></span></div>
                                                </li>
                                                <li><strong class="lm">提现卡号：</strong>
                                                    <div class="zl-con"><input type="text" name="bankcardnumber"
                                                                               class="tit-text" value=""/></div>
                                                </li>
                                                <li><strong class="lm">银行卡户名：</strong>
                                                    <div class="zl-con"><input type="text" name="bankaccountname"
                                                                               class="tit-text" value=""/></div>
                                                </li>
                                                <li><strong class="lm">开卡银行：</strong>
                                                    <div class="zl-con"><input type="text" name="bankname"
                                                                               class="tit-text" value=""/></div>
                                                </li>
                                                <li><strong class="lm">备注说明：</strong>
                                                    <div class="zl-con"><textarea name="description"
                                                                                  class="tit-text"
                                                                                  style="height: 150px"></textarea>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <a class="submit-btn" href="javascript:;">提交申请</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 验证步骤 -->
                    </form>
                </div>
            </div>
            <?php echo Request::factory("pc/pub/footer")->execute()->body(); ?>
        </div>
    </div>
    <!-- 主体内容 -->
</div>
<div class="st-popup-box hide">
    <div class="st-tit"><strong>信息提示</strong><span class="closed"></span></div>
    <div class="st-conbox">
        <div class="txtcon">提现申请提交成功，请等待审核！</div>
        <div class="sure-btn"><a href="javascript:;" class="closed">确 定</a></div>
    </div>
</div>
<script>
    $(function () {
        $('#chkfrm').validate({
            rules: {
                withdrawamount: {
                    required: true,
                    number: true,
                    range: [1, 99999999]
                }
            },
            messages: {
                withdrawamount: {
                    required: '“提现金额”不能为空',
                    number: '“提现金额”必须为数字',
                    range: '“提现金额”必须在1到99999999'
                }
            },
            errorElement: "em",
            errorPlacement: function (error, element) {
                var content = $(element).parent().find('.error-txt').html();
                if (content == '') {
                    $(element).parent().find('.error-txt').html('')
                    error.appendTo($(element).parent().find('.error-txt'));
                }
            },
            showErrors: function (errorMap, errorList) {
                if (errorList.length < 1) {
                    $('.error-txt').html('');
                    $('.error-txt').hide();
                } else {
                    $(errorList[0].element).parent().find('.error-txt').show();
                    this.defaultShowErrors();
                }
            }, submitHandler: function (form) {
                var frmdata = $("#chkfrm").serialize();
                $.ajax({
                    type: 'POST',
                    url: SITEURL + 'pc/finance/ajax_post_drawcash_apply',
                    data: frmdata,
                    dataType: 'json',
                    success: function (data) {
                        if (data.status) {
                            /* layer.msg("<?php echo __('commit_qualify_ok');?>", {
                             icon: 6,
                             time: 1000
                             })*/
                            $('.st-popup-box').show('slow');
                        } else {
                            layer.msg(data.msg, {icon: 5});
                            return false;
                        }
                    }})
            }
        });
        //第一步
        $(".submit-btn").click(function () {
            $("#chkfrm").submit();
        });
        $(".closed").click(function () {
            $('.st-popup-box').hide('slow');
            location.href = "<?php echo $cmsurl;?>pc/finance/drawcash";
        })
    });
</script>
</body>
</html>
