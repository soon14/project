<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>微信公众平台</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('style.css,base.css'); }
    {php echo Common::getScript('config.js');}
    {php echo Common::getScript("uploadify/jquery.uploadify.min.js"); }
    {php echo Common::getCss('uploadify.css','js/uploadify/'); }
<style>
 .wx{
     margin-left: 20px;
 }
 .wx ul li{
     height: 56px;
     width: 100%;
     color: #F13C00;
     line-height: 56px;
 }
 .wx ul li h5{
     float: left;
     color:#555555;
     font-size: 11px;
     height: 46px;
     line-height:46px;
 }
.wx ul li span{
     float: left;
     line-height:46px;
     width:330px;
     height: 46px;
 }
.input{
        height:22px;
        width:256px;
        margin:13px;
    }
.sel{
     height: 22px;
     width : 130px;
     margin-left: 12px;
 }
.wx_menu{
    height: 30px;

    margin-left: 20px;

}
.wx_menu ul li{
    float: left;
    width: 100px;
    height: 30px;
}
 .wx_menu ul li a{
     height: 30px;
     line-height: 30px;
     font-weight:bold;
     padding: 0px 3px;
 }
 .wx_menu ul li a:hover{
     background: #ccc;
     color:#51B9DF;
 }
.current{
    background:#666666;
    color: white;
    border: 1px #666666 solid;
    border-radius: 2px;
}
    .radio{
        height: 22px;
        width: 50px;
        margin-top: 13px;

    }
    .textarea{
         width: 300px;
         height: 50px;
    }
</style>
</head>
<body>
	<table class="content-tab">
    <tr>
    <td width="119px" class="content-lt-td"  valign="top">
        {template 'stourtravel/public/leftnav'}
    <!--右侧内容区-->
    </td>
     <td valign="top" class="content-rt-td">

         <div class="w-set-con">
        	<div class="w-set-tit bom-arrow"><span class="on"><s></s>微信设置</span><a href="javascript:;" class="refresh-btn" onclick="window.location.reload()">刷新</a></div>
        </div>
         <div class="wx_menu" id="wx_menu">
             <h3 style="color:#51B9DF;">微信设置</h3>
              <ul>
                  <li><a href="#" >设&nbsp;&nbsp;置</a></li>
                 {template 'stourtravel/weixin/wx_temp'}
              </ul>
         </div>
         <div style="clear:both"></div>
         <div style="color:#0099CC;font-size:13px;font-weight:bold;margin-left:20px;background: #F1F7FD;height:36px;line-height:36px;padding-left:6px; ">参数设置</div>
         <div class="wx">
             <form action="" method="post" id="wx_form">
                 <span><h3>公众号账号+</h3></span>
                 <ul>

                     <li><h5>接口类型  &nbsp;&nbsp; ：</h5><span name="s"><select name="jk_model" class="sel" id="sel" onchange="Onchange()"><option>订阅号</option><option selected = "selected">服务号</option><option>企业号</option></select></span>*必填项</li>
                     <li><h5>微 信 号 &nbsp;&nbsp;&nbsp; ：</h5><span><input type="text" name="wx_hao" value="{$info['wx_hao']}" class="input"></span>*必填项</li>
                     <li><h5>微信邮箱  &nbsp;&nbsp; ：</h5>&nbsp;<span><input type="text" name="wx_mail" value="{$info['wx_mail']}" class="input"></span>*必填项</li>
                     <li><h5>微信名称  &nbsp;&nbsp; ：</h5>&nbsp;<span><input type="text" name="wx_name" value="{$info['wx_name']}" class="input"></span>*必填项</li>
                     <li><h5>微信原始号 ：</h5><span><input type="text" name="wx_originalname" value="{$info['wx_o_name']}" class="input"></span>*必填项</li>
                 </ul>
                 <br/><br/>
                 <span><h3>开发者+</h3></span>
                 <ul>
                     <li><h5>api接口tocken &nbsp;&nbsp; :</h5><span><input type="text" name="api_token" value="{$info['token']}" class="input"></span>*必填项</li>

                     <li><h5>商家总店id   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;：</h5><span><input type="text" name="Business_id" value="{$info['Business_id']}" class="input"></span>*必填项</li>

                     <li><h5>appid &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  ：</h5><span><input type="text" name="appid" value="{$info['appid']}" class="input"></span>微信开发接口对应appid</li>

                     <li><h5>appsecret&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;：</h5><span><input type="text" name="appSecret" value="{$info['appsecret']}" class="input"></span>微信开发接口对应对应appSecret</li>

                     <li><h5>自定义菜单&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; ：</h5><span><input type="text" name="CustomMenu" value="{$info['CustomMenu']}" class="input"></span>填写多个菜单id，用逗号隔开 </li>

                     <li><h5>自定义菜单说明   ：</h5><span><input type="text" name="CustomMenuDes" value="{$info['CustomMenuDes']}" class="input"></span>自定义说明</li>

                     <li><h5>关注是否回复：</h5><span>&nbsp;&nbsp; 是<input type="radio"  name="atention"  value="1" class="radio" {if $info['is_gzhf']=='1'}checked=checked{/if}>&nbsp;&nbsp;否<input type="radio" name="atention" value="0"  class="radio" {if $info['is_gzhf']=='0'}checked=checked{/if}></span></li>

                     <li><h5>关注时回复内容：&nbsp;&nbsp; </h5><span><input type="text" name="attens" class="textarea" value="{$info['gz_content']}"></span>*换行 用“/”链接,</li>
                     <li><h5>关&nbsp;&nbsp;键&nbsp;&nbsp;词： </h5><span><input type="text" name="key_word"  value="{$info['key_word']}" style="height: 22px;width: 256px;line-height: 22px;margin-left: 37px"></span>&nbsp;&nbsp;&nbsp;&nbsp;*文本回复关键词(不包含特殊字符)</li>
                     <li><h5>文本内容：</h5><span><input type="text" name="key_content" class="textarea" value="{$info['key_content']}" style="margin-left: 37px"></span>&nbsp;&nbsp;&nbsp;&nbsp;*文本回复内容，不设置可以填0</li>

                     <br/>
                     <li><h5>图片回复内容：</h5><span>&nbsp;&nbsp; 是<input type="radio"  name="isimage"  value="1" class="radio" {if $info['isimage']==1}checked=checked{/if}>&nbsp;&nbsp;否<input type="radio" name="isimage" value="0"  class="radio" {if $info['isimage']==0}checked=checked{/if}></span></li> </ul>
                     <br/>
                     <li><h5>图片回复的内容：&nbsp;&nbsp; </h5><span><input type="text" name="image_con" class="textarea" value="{$info['image_con']}"></span></li>
                     <br/>
                 <a href="javascript:" id="submits"  class="normal-btn" >保存</a>
             </form>

         </div>
  </td>
  </tr>
  </table>

    <script>

        $(document).ready(function(){
            $("#submits").click(function(){
                var p= 1;
                $("#wx_form input").each(function(){
                    if($(this).val()==''){
                        var s= $(this).parent().siblings('h5').text();
                        alert(s+"不能为空");
                        $(this).focus();
                        p=0;
                        return false;
                    }
                });
                if(p==0){

                    return false;

                }else {
                    var str_data = $("#wx_form input[name!=atention]").map(function () {

                        return ($(this).attr("name") + '=' + $(this).val());

                    }).get().join("&");

                    var sel = $("#wx_form select").attr("name") + "=" + $("#wx_form select").val();

                    var atention = $("#wx_form input[name=atention]:checked").val();

                    var isimage  =$("#wx_form input[name=isimage]:checked").val();

                    var str_data = str_data + "&" + sel+"&atten="+atention+"&isimages="+isimage;

                    $.ajax({
                        type: "POST",
                        url: "<?php echo $GLOBALS['cfg_basehost'];?>"+"/newtravel/weixin/menuEdit",
                        data: str_data,
                        success: function (msg) {
                            if (msg == 1) {
                                alert("保存成功");
                                window.location.reload();
                            }else if(msg==2){
                                alert("更新成功");
                                window.location.reload();
                            }
                            else{
                                alert(msg);
                            }

                        }
                    });
                }

            });

       });

  function Onchange(){
      var strvalue=$("#sel").val();
      var s=$("input[name=wx_hao]");
      var s1=$("input[name=wx_mail]");
      var s2=$("input[name=wx_name]");
      var s3=$("input[name=wx_originalname]");
      var s4=$("input[name=api_token]");
      var s5=$("input[name=Business_id]");
      var s6=$("input[name=appid]");
      var s7=$("input[name=appSecret]");
      var s8=$("input[name=CustomMenu]");
      var s9=$("input[name=CustomMenuDes]");
      $.ajax({
          url: "<?php echo $GLOBALS['cfg_basehost'];?>"+"/newtravel/weixin/ajax_selchange",
          data:{sel:strvalue},
          type: "POST",
          dataType: "json",
          success: function (jdata) {
              s.val(jdata['wx_hao']);
              s1.val(jdata['wx_mail']);
              s2.val(jdata['wx_name']);
              s3.val(jdata['wx_o_name']);
              s4.val(jdata['token']);
              s5.val(jdata['Business_id']);
              s6.val(jdata['appid']);
              s7.val(jdata['appsecret']);
              s8.val(jdata['CustomMenu']);
              s9.val(jdata['CustomMenuDes']);
          }
      });


  }
</script>
</body>
</html>
