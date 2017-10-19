<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>思途CMS{$coreVersion}</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('msgbox.css','js/msgbox/'); }
    {php echo Common::getCss('style.css,base.css'); }
</head>

<body style="background-color: #fff">


	<div class="middle-con" >
       <form name="frm" id="frm" action="{$action}">
        <div class="w-set-con">

           <div class="nr-list">
            	<h4 class="tit" style="width:80px;">模块名称：</h4>
              <div class="txt" style="width:400px;">
              	<input type="text" id="modulename" name="modulename" class="set-text" value="{$info['modulename']}" />
                <div class="help-ico">{$helpico}</div>
              </div>
            </div>

            <div class="nr-list">
                <h4 class="tit" style="width:80px;">模块版本：</h4>
                <div class="txt" style="width:400px;height: 35px;">
                   <select name="version" style="float: left;height:30px;">
                       <option value="4" {if $info['version']==4}selected="selected"{/if}>电脑版本(4.X)</option>
                       <option value="5" {if $info['version']==5}selected="selected"{/if}>电脑版本(5.X)</option>
                   </select>
                </div>
            </div>
            <div class="nr-list">
                <h4 class="tit" style="width:80px;">模块类型：</h4>
                <div class="txt" style="width:400px;">
                    <select name="moduletype" style="float: left;height:30px;">
                        <option value="0" {if $info['type']==0}selected="selected"{/if}>信息模块</option>
                        <option value="1" {if $info['type']==1}selected="selected"{/if}>广告模块</option>
                    </select>
                </div>
            </div>
            
            <div class="nr-list">
            	<h4 class="tit">模块内容：</h4>
              <div class="txt">
                  <textarea name="body" id="body" rows="5" style="width:600px;height:400px;padding:5px;font-family:'Courier New'" >{$info['body']}</textarea>
              </div>
            </div>
            
            <div class="opn-btn">
            	<a class="normal-btn" href="javascript:;" id="btn_save">保存</a>

            </div>
            <input type="hidden" name="webid" id="webid" value="{$webid}"/>
            <input type="hidden" name="articleid" id="articleid" value="{$info['id']}"/>
       </div>
           </form>
    </div>

  
  
	<script>
        $(function(){

            $("#btn_save").click(function(){
                var url = "{$GLOBALS['cfg_cmspath']}";
                var ajaxurl = SITEURL + 'module/'+"{$action}";
                var modulename = $("#modulename").val();
                var body = $("#body").val();
                if(modulename==''){
                    ST.Util.showMsg('模块名称不能为空',5);
                    return false;
                }
                if(body==''){
                    ST.Util.showMsg('模块内容不能为空',5);
                    return false;
                }


                Ext.Ajax.request({
                    url: ajaxurl,
                    method: 'POST',
                    form : 'frm',
                    success: function (response, options) {

                        var data = $.parseJSON(response.responseText);
                        if(data.status)
                        {

                            ST.Util.showMsg('保存成功',4);
                           // ST.Util.closeBox();//关闭当前窗口


                        }
                        else
                        {
                            ST.Util.showMsg('保存失败',5);
                        }

                    }

                });


            })
        })

	</script>
</body>
</html>
