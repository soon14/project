<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>网站Logo</title>
    <script type="text/javascript" src="/<?php echo $admindir;?>/public/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/<?php echo $admindir;?>/public/js/common.js"></script>
    <script type="text/javascript" src="/<?php echo $admindir;?>/public/js/jquery.hotkeys.js"></script>
    <script type="text/javascript" src="/<?php echo $admindir;?>/public/js/msgbox/msgbox.js"></script>
    <script type="text/javascript" src="/<?php echo $admindir;?>/public/js/extjs/ext-all.js"></script>
    <script type="text/javascript" src="/<?php echo $admindir;?>/public/js/extjs/locale/ext-lang-zh_CN.js"></script>
    <link type="text/css" href="/<?php echo $admindir;?>/public/js/msgbox/msgbox.css" rel="stylesheet">
    <link type="text/css" href="/<?php echo $admindir;?>/public/css/common.css" rel="stylesheet">
    <link type="text/css" href="/<?php echo $admindir;?>/public/js/extjs/resources/ext-theme-neptune/ext-theme-neptune-all-debug.css" rel="stylesheet">
    <script>
        window.SITEURL =  "/<?php echo $admindir;?>/";
        window.PUBLICURL ="/<?php echo $admindir;?><?php echo $GLOBALS['cfg_public_url'];?>";
        window.BASEHOST="<?php echo $GLOBALS['cfg_basehost'];?>";
        window.WEBLIST =  <?php echo json_encode(array('webid'=>0,'webname'=>'主站')); ?>//网站信息数组
            $(function(){
                $.hotkeys.add('f', function(){parent.window.showIndex(); });
                $(document).click(function(e) {
                    try{
                        parent.barmenu.close();
                    }catch(e)
                    {
                    }
                });
            })
    </script>
    <link type="text/css" href="/<?php echo $admindir;?>/public/css/style.css" rel="stylesheet">
    <link type="text/css" href="/<?php echo $admindir;?>/public/css/base.css" rel="stylesheet">
    <script type="text/javascript" src="/<?php echo $admindir;?>/public/js/config.js"></script>
    <script type="text/javascript" src="/<?php echo $admindir;?>/public/js/uploadify/jquery.uploadify.min.js?t=3719243"></script>
    <link type="text/css" href="/<?php echo $admindir;?>/public/js/uploadify/uploadify.css" rel="stylesheet">
</head>
<body>
<table class="content-tab">
    <tr>
        <td width="119px" class="content-lt-td"  valign="top">
            <?php echo  Stourweb_View::template('pc/leftnav');  ?>
            <!--右侧内容区-->
        </td>
        <td valign="top" class="content-rt-td">
            <form id="configfrm">
                <div class="w-set-con">
                    <div class="w-set-tit bom-arrow"><span class="on"><s></s>网站Logo</span> <a href="javascript:;" class="refresh-btn" onclick="window.location.reload()">刷新</a></div>
                    <div class="w-set-nr">
                        <div class="picture ml-10" style="padding-top:20px;">
                            <div style="width: 100%;height:26px;line-height: 26px">
                                <div style="float: left;width:70px;">网站LOGO：</div>
                                <div style="float: left"><input id="file_upload" name="file_upload" type="button"/></div>
                                <div style="float:left;padding-left:10px;"><span onMouseOver="this.className='notices'" onMouseOut="this.className='notice'" class="notice">(推荐大小为176*42)</span></div>
                            </div>
                            <div class="logolist" style="width:100%;padding-left:70px;">
                                <img src="" id="adimg" style="margin: 3px;">
                                <a style="cursor:pointer;" onClick="delad()")>删除</a>
                            </div>
                            <p><span class="fl">LOGO链接：</span><input type="text" name="cfg_supplier_logourl" id="cfg_supplier_logourl" class="set-text-xh set-text-bz3" ></p>
                            <p><span class="fl">LOGO说明：</span><input type="text" name="cfg_supplier_logotitle" id="cfg_supplier_logotitle" class="set-text-xh set-text-bz3" ></p>
                        </div>
                        <div class="opn-btn">
                            <a class="normal-btn" href="javascript:;" id="btn_save">保存</a>
                            <input type="hidden" name="webid" id="webid" value="0">
                            <input type="hidden" name="cfg_supplier_logo" id="cfg_supplier_logo" value=""/>
                            <input type="hidden" name="cfg_supplier_logodisplay" id="cfg_supplier_logodisplay" value=""/>
                        </div>
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
            var display = '';
            //显示的栏目
            $("input[name='display']").each(function(){
                if($(this).is(':checked'))
                {
                    display=display+$(this).attr('value')+',';
                }
            })
            $("#cfg_supplier_logodisplay").val(display);
            var webid= $("#webid").val();
            Config.saveConfig(webid);
        })
        //文件上传
        var webid=$("#webid").val();
        setTimeout(function(){
            $('#file_upload').uploadify({
                'formData'     : {
                    'webid':webid,
                    'thumb':false,
                    uploadcookie:"<?php echo Cookie::get('username')?>"
                },
                'swf'      : PUBLICURL+'js/uploadify/uploadify.swf',
                'uploader' : SITEURL+'uploader/uploadfile',
                'buttonImage' : PUBLICURL+'images/upload-ico.png',
                'fileSizeLimit' : '512KB',
                'fileTypeDesc' : 'Image Files',
                'fileTypeExts' : '*.gif; *.jpg; *.png',
                'cancelImg' : PUBLICURL+'js/uploadify/uploadify-cancel.png',
                'multi' : false,
                'removeCompleted' : true,
                'height':25,
                'width':80,
                'removeTimeout':0.2,
                'wmode ':'transparent',
                onUploadSuccess:function(file,data,response){
                    var obj = $.parseJSON(data);
                    if(obj.bigpic!=''){
                        $('#adimg')[0].src=obj.bigpic;
                        $('#cfg_supplier_logo').val(obj.bigpic);
                    }
                }
            });
        },10)
        getConfig(0);
    });
    //获取配置
    function getConfig(webid)
    {
        Config.getConfig(webid,function(data){
            $("#cfg_supplier_logourl").val(data.cfg_supplier_logourl);
            $("#cfg_supplier_logotitle").val(data.cfg_supplier_logotitle);
            $("#cfg_supplier_logo").val(data.cfg_supplier_logo);
            $("#cfg_supplier_logodisplay").val(data.cfg_supplier_logodisplay);
            if(data.cfg_supplier_logo!='')
            {
                $("#adimg").attr('src',data.cfg_supplier_logo);
            }
            else
            {
                $("#adimg").attr('src',SITEURL+'public/images/pic_tem.gif');
            }
        })
    }
    //删除图片
    function delad()
    {
        var adfile=$("#cfg_supplier_logo").val();
        var webid = $("#webid").val();
        if(adfile=='')
        {
            ST.Util.showMsg('还没有上传图片',1,1000);
        }
        else
        {
            $.ajax({
                type: "post",
                data: {picturepath:adfile,webid:webid},
                url: SITEURL+"uploader/delpicture",
                success: function(data,textStatus)
                {
                    if(data=='ok')
                    {
                        $("#adimg")[0].src=SITEURL+'public/images/pic_tem.gif';
                        $("#cfg_supplier_logo").val('');
                    }
                }
            });
        }
    }
    //获取logo显示位置
    function getLogoDisplay(webid,displayids)
    {
        $.ajax({
            type: "post",
            data: {logodisplay:displayids,webid:webid},
            url: SITEURL+"config/ajax_getlogodisplay",
            success: function(data,textStatus)
            {
                $("#display_set").html(data)
            }
        });
    }
</script>
</body>
</html>
