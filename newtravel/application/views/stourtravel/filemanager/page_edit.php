<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>思途CMS{$coreVersion}</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('style.css,base.css,base2.css,jqtransform.css'); }
    {php echo Common::getCss('ext-theme-neptune-all-debug.css','js/extjs/resources/ext-theme-neptune/'); }
    {php echo Common::getScript("uploadify/jquery.uploadify.min.js,product_add.js,choose.js,st_validate.js,jquery.colorpicker.js,jquery.jqtransform.js,imageup.js,jquery.upload.js,insurance.js"); }
    {php echo Common::getCss('uploadify.css','js/uploadify/'); }
</head>



<body>
<!--顶部-->
{php Common::getEditor('jseditor','',$sysconfig['cfg_admin_htmleditor_width'],300,'Sline','','print',true);}
<table class="content-tab">
<tr>
    <td width="119px" class="content-lt-td" valign="top">
        {template 'stourtravel/public/leftnav'}
        <!--右侧内容区-->
    </td>
    <td valign="top" class="content-rt-td" style="overflow:auto;">
            <div class="manage-nr">
                <div class="w-set-con">
                <div class="w-set-tit bom-arrow">
                    <span class="on" id="column_basic" onclick="Product.switchTab(this,'basic')"><s></s>文件信息</span>
                    <a href="javascript:;" class="refresh-btn" onclick="window.location.reload()">刷新</a>
                   
                </div>
                </div>
                <form id="frm" name="frm" style="margin-left:10px;">
                    <div class="out-box-con">
                        <dl class="list_dl">
                            <dt class="wid_90" style="text-align: left;">文件名称：</dt>
                            <dd>
                                {$filename}
                            </dd>
                        </dl>
                        <dl class="list_dl" style="height: 500px;">
                            <dt class="wid_90" style="text-align: left;">文件内容:</dt>
                            <dd><textarea style="width:900px;" rows="32" name="content">{$content}</textarea></dd>
                        </dl>

                        <dl class="list_dl">
                            <dt class="wid_90">&nbsp;</dt>
                            <dd>
                                <a class="normal-btn" id="btn_save" href="javascript:;">保存</a>
                                <input type="hidden" name="filename" value="{$filename}"/>
                                <input type="hidden" name="issline" value="{$issline}"/>
                                <input type="hidden" name="version" value="{$version}"/>
                                <input type="hidden" name="ismobile" value="{$ismobile}"/>
                            </dd>
                        </dl>
                    </div>
                </form>
            </div>

    </td>
</tr>


<!--左侧导航区-->

<!--右侧内容区-->

<script>
    $(function(){
        //保存
        $("#btn_save").click(function(){


            Ext.Ajax.request({
                url   :  SITEURL+"filemanager/ajax_page_save",
                method  :  "POST",
                isUpload :  true,
                form  : "frm",
                success  :  function(response, opts)
                {
                    var data = $.parseJSON(response.responseText);
                    if(data.status)
                    {
                        ST.Util.showMsg('保存成功!','4',2000);
                    }
                }
            });
        })
    })
</script>
</body>
</html>
