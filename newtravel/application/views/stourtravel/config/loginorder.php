<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>登陆下单</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('style.css,base.css,jqtransform.css'); }
    {php echo Common::getScript('config.js,jquery.jqtransform.js,jquery.colorpicker.js');}
    {php echo Common::getScript("uploadify/jquery.uploadify.min.js"); }
    {php echo Common::getCss('uploadify.css','js/uploadify/'); }
</head>

<body>
<table class="content-tab">
    <tr>
        <td width="119px" class="content-lt-td"  valign="top">
            {template 'stourtravel/public/leftnav'}
            <!--右侧内容区-->
        </td>
        <td valign="top" class="content-rt-td">
            <form id="configfrm">
                <div class="w-set-con">
                    <div class="w-set-tit bom-arrow"><span class="on"><s></s>设置</span> <a href="javascript:;" class="refresh-btn" onclick="window.location.reload()">刷新</a></div>
                    <div class="w-set-nr">
                        <div class="water-mark ml-10">
                            <div class="rowElem" style="padding:10px 0px">
                                <label>登录下单开关：</label>
                                <input type="radio" name="cfg_login_order" value="1" {if $config==1}checked{/if}>
                                <label>开启</label>
                                <input type="radio" name="cfg_login_order" value="0" {if $config==0}checked{/if}>
                                <label>关闭</label>
                                <span style="padding-left: 15px; color: #999">*开启：只能登录后才能下订单；关闭：不登录即可下订单，后台会默认将联系人手机注册成为会员，并通知该手机号码。</span>
                            </div>
                        </div>
                    </div>
                    <div class="opn-btn">
                        <a class="normal-btn" href="javascript:;" id="btn_save">保存</a>
                        <!-- <a class="cancel" href="#">取消</a>-->
                        <input type="hidden" name="webid" id="webid" value="0">
                    </div>
                </div>
            </form>
        </td>
    </tr>
</table>
<script>
    $(document).ready(function(){
        //配置信息保存
        $("#btn_save").click(function(){
            var webid= $("#webid").val();
            Config.saveConfig(webid);
        })
    })
</script>
</body>
</html>
