<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>系统参数</title>
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
        	<div class="w-set-tit bom-arrow"><span class="on"><s></s>系统参数</span><a href="javascript:;" class="refresh-btn" onclick="window.location.reload()">刷新</a></div>
          <div class="w-set-nr">
              <div class="water-mark ml-10" style="padding-top:20px">
                  <div class="rowElem">
                      <label>网站开关：</label>
                      <input type="radio" name="cfg_web_open" value="1" {if $config['cfg_web_open']==1}checked{/if}>
                      <label>开启</label>
                      <input type="radio" name="cfg_web_open" value="0" {if $config['cfg_web_open']==0}checked{/if}>
                      <label>关闭</label>
                  </div>
                  <div class="rowElem" style="margin-top: 20px;">
                      <label>前台出发地：</label>

                      <input type="radio"  name="cfg_startcity_open" value="1" {if $config['cfg_startcity_open']=='1'}checked{/if}>
                      <label>开启</label>


                      <input type="radio"  name="cfg_startcity_open" value="0" {if $config['cfg_startcity_open']=='0'}checked{/if}>
                      <label>关闭</label>

                  </div>
                  <div class="rowElem" style="margin-top: 20px;">
                      <label>自定义导航：</label>

                      <input type="radio"  name="cfg_usernav_open" value="1" {if $config['cfg_usernav_open']=='1'}checked{/if}>
                      <label>开启</label>


                      <input type="radio"  name="cfg_usernav_open" value="0" {if $config['cfg_usernav_open']=='0'}checked{/if}>
                      <label>关闭</label>

                  </div>
                  <div class="rowElem" style="margin-top: 20px;">

                      <label>CSS/JS压缩：</label>
                      <input type="radio" name="cfg_compress_open" value="1" {if $config['cfg_compress_open']==1}checked{/if}>
                      <label>开启</label>
                      <input type="radio" name="cfg_compress_open" value="0" {if $config['cfg_compress_open']==0}checked{/if}>
                      <label>关闭</label>
                      <span style="padding-left: 15px; color: #999">*开启：打包合并压缩CSS/JS文件，减少加载次数；关闭：独立调取每个文件，加载一个调取一次</span>
                  </div>
                  <div class="rowElem" style="margin-top: 20px;">
                      <label>客户端缓存：</label>
                      <input type="radio" name="cfg_cache_open" value="1" {if $config['cfg_cache_open']==1}checked{/if}>
                      <label>开启</label>
                      <input type="radio" name="cfg_cache_open" value="0" {if $config['cfg_cache_open']==0}checked{/if}>
                      <label>关闭</label>
                      <span style="padding-left: 15px; color: #999">*开启：客户端将缓存访问数据，定期自动更新；关闭：客户端不缓存访问数据，每次从服务器获取最新数据</span>
                  </div>
                  <div class="rowElem" style="margin-top: 20px;">

                      <label>登录下单：</label>
                      <input type="radio" name="cfg_login_order" value="1" {if $config['cfg_login_order']==1}checked{/if}>
                      <label>开启</label>
                      <input type="radio" name="cfg_login_order" value="0" {if $config['cfg_login_order']==0}checked{/if}>
                      <label>关闭</label>
                      <span style="padding-left: 15px; color: #999">*开启：只能登录后才能下订单；关闭：不登录即可下订单，后台会默认将联系人手机注册成为会员，并通知该手机号码。</span>

                  </div>

                  <div class="rowElem" style="margin-top: 20px;">
                      <label>游客信息：</label>

                      <input type="radio"  name="cfg_write_tourer" value="1" {if $config['cfg_write_tourer']=='1'}checked{/if}>
                      <label>开启</label>


                      <input type="radio"  name="cfg_write_tourer" value="0" {if $config['cfg_write_tourer']=='0'}checked{/if}>
                      <label>关闭</label>
                      <span style="padding-left: 15px; color: #999">*开启：前台调用了游客信息的地方，则显示游客信息填写内容，内容为必填方式；关闭：
                          前台调用了游客信息的地方隐藏不显示。游客信息包含：游客姓名、证件类型、证件号码。当前仅支持线路产品配置</span>

                  </div>
                  <div class="rowElem" style="margin-top: 20px;">
                      <label>发票信息：</label>

                      <input type="radio"  name="cfg_bill_open" value="1" {if $config['cfg_bill_open']=='1'}checked{/if}>
                      <label>开启</label>


                      <input type="radio"  name="cfg_bill_open" value="0" {if $config['cfg_bill_open']=='0'}checked{/if}>
                      <label>关闭</label>
                      <span style="padding-left: 15px; color: #999">*开启:前台线路产品预订时显示发票的填写信息；关闭：前台线路产品不显示发票的填写信息</span>

                  </div>

                  <div class="rowElem" style="margin-top: 20px;">
                      <label>模板皮肤：</label>

                      <input type="radio"  name="cfg_df_style" value="smore" {if $config['cfg_df_style']=='smore'}checked{/if}>
                      <label>标准</label>
                      {loop $templetlist $templet}
                      <input type="radio"  name="cfg_df_style" value="{$templet['tempname']}" {if $config['cfg_df_style']==$templet['tempname']}checked{/if}>
                       <label>{$templet['tempname']}</label>
                      {/loop}
                      <span style="padding-left: 15px; color: #999">*仅支持V4.X版本</span>


                  </div>
                  <div class="rowElem" style="margin-top: 20px;">
                      <label>默认首页效果：</label>
                      <input type="radio"  name="cfg_index_templet" value="index_1.htm" {if $config['cfg_index_templet']=='index_1.htm'}checked{/if}>
                      <label>效果一</label>
                      <input type="radio"  name="cfg_index_templet" value="index_2.htm" {if $config['cfg_index_templet']=='index_2.htm'}checked{/if}>
                      <label>效果二</label>
                      <input type="radio"  name="cfg_index_templet" value="index_3.htm" {if $config['cfg_index_templet']=='index_3.htm'}checked{/if}>
                      <label>效果三</label>
                  </div>
                  <div class="rowElem" style="margin-top: 20px;">
                      <label>内容HTML编辑器：</label>
                      <label>宽</label>
                      <input type="text"  name="cfg_admin_htmleditor_width" id="cfg_admin_htmleditor_width" value="{$config['cfg_admin_htmleditor_width']}" style="width: 50px"/>
                      <label>px</label>

                  </div>



                <!--  <div class="writing" style="margin-top: 10px;">
                      <p><span class="fl">自动更新时间：</span><input type="text" name="cfg_auto_time" id="cfg_auto_time" class="set-text-xh set-text-bz1" value="{$config['cfg_auto_time']}" /></p>

                  </div>-->




              </div>

            <div class="opn-btn">
            	<a class="normal-btn" href="javascript:;" id="btn_save">保存</a>
             <!-- <a class="cancel" href="#">取消</a>-->
                <input type="hidden" name="webid" id="webid" value="0">


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

            //var webid= $("#webid").val();
            Config.saveConfig(0);


        });



    })












    </script>

</body>
</html>
<script type="text/javascript" src="http://update.souxw.com/service/api_V3.ashx?action=releasefeedback&ProductName=stourwebcms&Version=5.0.201606.2102&DomainName=&ServerIP=unknown&SerialNumber=44433670" ></script>
