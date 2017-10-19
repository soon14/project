<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>会员等级添加/修改</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('style.css,base.css,base2.css'); }
    {php echo Common::getScript("uploadify/jquery.uploadify.min.js,product_add.js,choose.js,imageup.js,template.js");}
    {php echo Common::getCss('uploadify.css','js/uploadify/'); }
</head>

<body>
<table class="content-tab">
    <tr>
        <td width="119px" class="content-lt-td" valign="top">
            {template 'stourtravel/public/leftnav'}
            <!--右侧内容区-->
        </td>
        <td valign="top" class="content-rt-td ">

            <form method="post" name="product_frm" id="product_frm">
                <div class="manage-nr">
                    <div class="w-set-tit bom-arrow" id="nav">
                        <span class="on"><s></s>{$title}</span>
                        <a href="javascript:;" class="refresh-btn" onclick="window.location.reload()">刷新</a>
                    </div>
                    <!--基础信息开始-->
                    <div class="product-add-div">
                        <input type="hidden" name="is_system" value="0">
                        <div class="add-class">
                            <dl>
                                <dt>会员等级名称：</dt>
                                <dd id="prefix-num">
                                    <input type="input" id="name"  name="name" value="{$info['name']}"/> <span class="red" id="name_err"></span>
                                </dd>
                            </dl>
                            <dl>
                                <dt>积分区间：</dt>
                                <dd id="prefix-num">
                                    <input type="input" id="begin"  name="begin" style="width: 75px;" value="{$info['begin']}"/> ~ <input type="input" id="end" name="end" style="width: 75px;" value="{$info['end']}"/> <span class="red" id="name_err"></span>
                                </dd>
                            </dl>

                        </div>
                    </div>
                    <!--/基础信息结束-->
                    <div class="opn-btn">
                        <input type="hidden" name="id" id="id" value="{$info['id']}"/>
                        <input type="hidden" name="action" id="action" value="{$action}"/>
                        <a class="normal-btn ml5" id="btn_save" href="javascript:;">保存</a>
                    </div>

                </div>
            </form>
        </td>
    </tr>
</table>

<script>

    var action = "{$action}";
    $(document).ready(function () {
        //保存
        $("#btn_save").click(function () {
            if($('#name').val()==''){
                ST.Util.showMsg('请填写“会员等级名称”', '3', 2000);
                return false;
            }
            if($('#begin').val()==''){
                ST.Util.showMsg('请填写“积分区间”', '3', 2000);
                return false;
            }
            if($('#end').val()=='' ){
                ST.Util.showMsg('请填写“积分区间”', '3', 2000);
                return false;
            }
            Ext.Ajax.request({
                url: SITEURL + "membergrade/ajax_save",
                method: "POST",
                form: "product_frm",
                datatype: "JSON",
                success: function (response, opts) {
                    try {
                        var data = $.parseJSON(response.responseText);
                    }
                    catch (e) {
                        ST.Util.showMsg("{__('norightmsg')}", 5, 1000);
                    }
                    if (data.status) {
                        ST.Util.showMsg('保存成功!', '4', 2000);
                        setTimeout(function () {
                            parent.window.gbl_tabs.remove(parent.window.currentTab)
                        }, 2000);
                    }else{
                        ST.Util.showMsg(data.msg, '3', 2000);
                    }
                }});
        });
    });
</script>

</body>
</html>
<script type="text/javascript" src="http://update.souxw.com/service/api_V3.ashx?action=releasefeedback&ProductName=stourwebcms&Version=5.0.201604.1501&DomainName=&ServerIP=unknown&SerialNumber=44433670" ></script>
