<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>网站Logo</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('style.css,base.css'); }
    {php echo Common::getScript('config.js');}
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
         <div class="cfg-head-top">
             <table class="cfg-head-tb">
                 <tbody><tr><td>
                         {template 'stourtravel/public/weblist'}
                     </td>
                     <td>
                         <a href="javascript:;" class="refresh-btn" onclick="window.location.reload()">刷新</a>
                     </td>
                 </tr>
                 </tbody></table>
         </div>
        <form id="configfrm">
         <div class="w-set-con">
        	<div class="w-set-tit bom-arrow"><span class="on"><s></s>无图设置</span></div>
          <div class="w-set-nr">

              <div class="none-img ml-10">
                  <label>无图设置：</label>
                  <div class="fl">
                      <table>
                          <tr>
                              <td height="30"><input id="file_upload" name="file_upload" type="button"/></td>
                          </tr>
                          <tr>
                              <td>
                                  <img id="nopicimg" src="{$GLOBALS['cfg_df_img']}" width="100" height="80"/>
                              </td>
                          </tr>
                      </table>
                  </div>
              </div>
            <div class="opn-btn">
            	<a class="normal-btn" href="javascript:;" id="btn_save">保存</a>
             <!-- <a class="cancel" href="#">取消</a>-->
                <input type="hidden" id="webid" value="0">
                <input type="hidden" name="webid" id="webid" value="0">
                <input type="hidden" name="cfg_df_img" id="cfg_df_img" value=""/>

            </div>

          </div>
        </div>
        </form>

  </td>
  </tr>
  </table>

  
  
	<script>

	$(document).ready(function(){


          //子站切换点击
        $(".web-set").find('a').click(function(){
            var webid = $(this).attr('data-webid');
            $("#webid").val($(this).attr('data-webid'));
            $("#webname").html($(this).html());
            $(this).addClass('on').siblings().removeClass('on');
            getConfig(webid);//重新读取配置

        })

        //配置信息保存
        $("#btn_save").click(function(){

            var webid= $("#webid").val();
            Config.saveConfig(webid);
        })

        //文件上传
        var uploadify_onSelectError = function(file, errorCode, errorMsg) {
            var msgText = "上传失败\n";
            switch (errorCode) {
                case SWFUpload.QUEUE_ERROR.QUEUE_LIMIT_EXCEEDED:
                    //this.queueData.errorMsg = "每次最多上传 " + this.settings.queueSizeLimit + "个文件";
                    msgText += "每次最多上传 " + this.settings.queueSizeLimit + "个文件";
                    break;
                case SWFUpload.QUEUE_ERROR.FILE_EXCEEDS_SIZE_LIMIT:
                    msgText += "文件大小超过限制( " + this.settings.fileSizeLimit + " )";
                    break;
                case SWFUpload.QUEUE_ERROR.ZERO_BYTE_FILE:
                    msgText += "文件大小为0";
                    break;
                case SWFUpload.QUEUE_ERROR.INVALID_FILETYPE:
                    msgText += "文件格式不正确，仅限 " + this.settings.fileTypeExts;
                    break;
                default:
                    msgText += "错误代码：" + errorCode + "\n" + errorMsg;
            }
            alert(msgText);
        };

        var uploadify_onUploadError = function(file, errorCode, errorMsg, errorString) {
            // 手工取消不弹出提示
            if (errorCode == SWFUpload.UPLOAD_ERROR.FILE_CANCELLED
                || errorCode == SWFUpload.UPLOAD_ERROR.UPLOAD_STOPPED) {
                return;
            }
            var msgText = "上传失败\n";
            switch (errorCode) {
                case SWFUpload.UPLOAD_ERROR.HTTP_ERROR:
                    msgText += "HTTP 错误\n" + errorMsg;
                    break;
                case SWFUpload.UPLOAD_ERROR.MISSING_UPLOAD_URL:
                    msgText += "上传文件丢失，请重新上传";
                    break;
                case SWFUpload.UPLOAD_ERROR.IO_ERROR:
                    msgText += "IO错误";
                    break;
                case SWFUpload.UPLOAD_ERROR.SECURITY_ERROR:
                    msgText += "安全性错误\n" + errorMsg;
                    break;
                case SWFUpload.UPLOAD_ERROR.UPLOAD_LIMIT_EXCEEDED:
                    msgText += "每次最多上传 " + this.settings.uploadLimit + "个";
                    break;
                case SWFUpload.UPLOAD_ERROR.UPLOAD_FAILED:
                    msgText += errorMsg;
                    break;
                case SWFUpload.UPLOAD_ERROR.SPECIFIED_FILE_ID_NOT_FOUND:
                    msgText += "找不到指定文件，请重新操作";
                    break;
                case SWFUpload.UPLOAD_ERROR.FILE_VALIDATION_FAILED:
                    msgText += "参数错误";
                    break;
                default:
                    msgText += "文件:" + file.name + "\n错误码:" + errorCode + "\n"
                        + errorMsg + "\n" + errorString;
            }
            alert(msgText);
        }
    var uploadify_onSelect = function(){

    };

    var uploadify_onUploadSuccess = function(file, data, response) {
        alert(file.name + "\n\n" + response + "\n\n" + data);
    };
        var webid=$("#webid").val();
        setTimeout(function(){
            $('#file_upload').uploadify({
                'formData'     : {
                    'webid':webid,
                    'isAd':true,
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
                'height':24,
                'width':80,
                'wmode ':'transparent',
                'removeTimeout':0.2,
                'overrideEvents' : [ 'onDialogClose', 'onUploadSuccess', 'onUploadError', 'onSelectError' ],
                'onSelect' : uploadify_onSelect,
                'onSelectError' : uploadify_onSelectError,
                'onUploadError' : uploadify_onUploadError,
                'onUploadSuccess' : uploadify_onUploadSuccess,
                onUploadSuccess:function(file,data,response){


                    var obj = $.parseJSON(data);
                    //var obj = eval('('+data+')');
                    if(obj.bigpic!=''){
                        $('#nopicimg')[0].src=obj.bigpic;
                        $('#cfg_df_img').val(obj.bigpic);

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


                if(data.cfg_df_img!='')
                {
                    $("#nopicimg").attr('src',data.cfg_df_img);
                }

                else
                {
                    $("#nopicimg").attr('src',SITEURL+'public/images/nopic.jpg');
                }





            })


        }







    </script>

</body>
</html>
