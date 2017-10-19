<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>手机站系统参数设置</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('style.css,base.css'); }
    {php echo Common::getScript('config.js');}
    {php echo Common::getScript("uploadify/jquery.uploadify.min.js"); }
    {php echo Common::getCss('uploadify.css','js/uploadify/'); }
    <style>.set-text{ width: 20%;}.must-input,.fanlie{ color: #f00;line-height: 30px; padding-left: 5px;}.fanlie{color: #999; clear: both}</style>
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
        	<div class="w-set-tit bom-arrow">
                <span  class="on" data-contain="m_basic_div"><s></s>基本参数</span>
                <span data-contain="m_logo_div"><s></s>logo配置</span>
                <span data-contain="m_tj_div"><s></s>统计代码</span>
                <a href="javascript:;" class="refresh-btn" onclick="window.location.reload()">刷新</a>
            </div>
          <div class="w-set-nr">
               <div id="m_basic_div" class="mitem water-mark" >

                   <div class="nr-list"  style="margin-top:10px">
                       <h4 class="tit">手机站点：</h4>
                       <div class="txt">
                           <input type="radio"  name="cfg_mobile_open" value="1" {if $config['cfg_mobile_open']=='1'}checked{/if}>
                           <label>开启</label>
                           <input type="radio"  name="cfg_mobile_open" value="0" {if $config['cfg_mobile_open']=='0'}checked{/if}>
                           <label>关闭</label>
                       </div>

                   </div>
                   <div  class="version" id="version_0"></div>
                   <div  class="version" id="version_1" {if $config['cfg_mobile_version']!=1}style="display:none"{/if}>
                  <div class="nr-list">
                      <h4 class="tit"><span class="fl">手机域名：</span></h4>
                      <div class="txt">
                          <input type="text" name="cfg_m_main_url" id="cfg_m_main_url" class="set-text" value="{$config['cfg_m_main_url']}" /><span class="must-input hide"><i>* 必填</i></span><span class="fanlie">例：http://x.xxx.com</span>
                      </div>
                  </div>
                  <div class="nr-list">
                      <h4 class="tit"><span class="fl">图片域名：</span></h4>
                      <div class="txt">
                          <input type="text" name="cfg_m_img_url" id="cfg_m_img_url" class="set-text" value="{$config['cfg_m_img_url']}" /><span class="must-input hide"><i>* 必填</i></span>
                          <span class="fanlie">例：http://www.xxx.com</span>
                      </div>
                  </div>
                  <div class="nr-list">
                      <h4 class="tit"><span class="fl">公司电话：</span></h4>
                      <div class="txt">
                          <input type="text" name="cfg_m_phone" id="cfg_m_phone" class="set-text" value="{$config['cfg_m_phone']}" />
                      </div>
                  </div>
                  <div class="nr-list">
                      <h4 class="tit"><span class="fl">版权信息：</span></h4>
                      <div class="txt">
                          <input type="text" name="cfg_m_icp" id="cfg_m_icp" class="set-text" value="{$config['cfg_m_icp']}" />
                      </div>
                  </div>
                  </div>


              </div>
               <div id="m_logo_div"  class="mitem nr-list" style="display: none;margin-top: 10px;">
                     <div style="height: 30px;line-height: 30px;">
                      <h4 class="tit" style="width:100px;"><span class="fl">手机端LOGO：</span></h4>
                      <div style="float: left;margin-top: 5px" title="279x66"><input id="file_m_upload" name="file_m_upload" type="button"/></div>
                         <span style="float:left;padding-left: 10px; color:#f00;">建议尺寸：280x70</span>
                     </div>



                  <div class="logolist" style="margin-left: 100px;">

                      <img src="" id="m_adimg" style="margin: 3px;">
                      <a style="cursor:pointer;" onClick="del_m_log()")>删除</a>
                  </div>
              </div>
               <!--手机统计代码配置-->
               <div id="m_tj_div" class="mitem nr-list" style="display:none">
                   <div class="nr-list">
                       <h4 class="tit"><span class="fl">统计代码：</span></h4>
                       <div class="txt">
                           <textarea id="cfg_m_tongjicode" name="cfg_m_tongjicode"  cols="" rows="8" class="set-area" style="height: 300px;">{$config['cfg_m_tongjicode']}</textarea>
                       </div>
                   </div>

               </div>

                <div class="opn-btn">
                    <a class="normal-btn" href="javascript:;" id="btn_save">保存</a>
                 <!-- <a class="cancel" href="#">取消</a>-->
                    <input type="hidden" name="webid" id="webid" value="0">
                    <input type="hidden" name="cfg_m_logo" id="cfg_m_logo" value=""/>

                </div>

          </div>
        </div>
        </form>

  </td>
  </tr>
  </table>

  
  
	<script>

	$(document).ready(function(){

        //切换
        $('.w-set-tit').find('span').click(function(){
            var cdiv = $(this).attr('data-contain');
            $(this).addClass('on').siblings().removeClass('on');

            $("#"+cdiv).parents('.w-set-nr').first().find('.mitem').hide();
            $("#"+cdiv).show();

        })

        //配置信息保存
        $("#btn_save").click(function(){
            if(!auto_complete()){
                return false;
            }
            var webid= $("#webid").val();
            Config.saveConfig(webid, function(){
                $.ajax(
                    {
                        type: "post",
                        url: SITEURL + 'systemparts/ajax_further_processing',
                        dataType: 'json',
                        beforeSend: function () {
                            ST.Util.showMsg('正在完成后续处理,请稍后...', 6, 60000);
                        },
                        success: function (data) {
                            if (data.status) {
                                ST.Util.showMsg('处理成功', 4, 1000);
                            }
                        }

                    }
                );
            });
        })
        //提交
        function auto_complete(){
            var bool=true;
            if($('#cfg_m_main_url').parents('.version').css('display')!='none'){
                var mainUrl=$('#cfg_m_main_url').val();
                var imgURl=$('#cfg_m_img_url').val();
                var url;
                if(mainUrl.length>0){
                    $('#cfg_m_main_url').val(parse_url(mainUrl));
                    $('#cfg_m_main_url').siblings('.must-input').addClass('hide');
                }else{
                    $('#cfg_m_main_url').siblings('.must-input').removeClass('hide');
                    return false;
                }
                if(imgURl.length>0){
                    $('#cfg_m_img_url').val(parse_url(imgURl));
                    $('#cfg_m_img_url').siblings('.must-input').addClass('hide');
                }else{
                    $('#cfg_m_img_url').siblings('.must-input').removeClass('hide');
                    return false;
                }
            }
            return bool;
        };
        function parse_url(url){
            var reg=/^.*?:\/\//;
             if(reg.test(url)){
                 url=url.replace(reg,'');
             }
            url='http://'+url;
             var a=document.createElement('a');
                 a.href=url;
            return a.protocol+'//'+a.host;
       }
        setTimeout(function(){
            $('#file_m_upload').uploadify({
                'formData'     : {
                    'webid':webid,
                    'thumb':1,
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
                    //var obj = eval('('+data+')');
                    if(obj.bigpic!=''){
                        $('#m_adimg')[0].src=obj.bigpic;
                        $('#cfg_m_logo').val(obj.bigpic);

                    }

                }

            });
        },20)

        getConfig(0);
        //版本切换
        $('#version').change(function(){
            var val=$(this).val();
            $('#version_'+val).css('display','inline').siblings('.version').css('display','none');
        });
        //

     });


       //获取配置
        function getConfig(webid)
        {

            Config.getConfig(webid,function(data){


                $("#cfg_m_logo").val(data.cfg_m_logo);

                if(data.cfg_m_logo!='')
                {
                    $("#m_adimg").attr('src',data.cfg_m_logo);
                }

                else
                {
                    $("#m_adimg").attr('src',SITEURL+'public/images/pic_tem.gif');
                }

               // getLogoDisplay(webid,data.cfg_logodisplay);



            })


        }

    //删除图片
    function del_m_log()
    {
        var adfile=$("#cfg_m_logo").val();
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
                        $("#m_adimg")[0].src=SITEURL+'public/images/pic_tem.gif';//"{sline:global.cfg_templets_skin/}/images/pic_tem.gif";
                        $("#cfg_m_logo").val('');

                    }
                }

            });
        }

    }







    </script>

</body>
</html>
<script type="text/javascript" src="http://update.souxw.com/service/api_V3.ashx?action=releasefeedback&ProductName=stourwebcms&Version=5.0.201603.3003&DomainName=&ServerIP=unknown&SerialNumber=44433670" ></script>
