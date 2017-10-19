<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>思途CMS{$coreVersion}</title>
    {template 'stourtravel/public/public_min_js'}
    {php echo Common::getScript("uploadify/jquery.uploadify.min.js,listimageup.js"); }
    {php echo Common::getCss('uploadify.css','js/uploadify/'); }
    {php echo Common::getCss('base.css,style.css,destination_dialog_setweb.css'); }
</head>
<body >
   <div class="s-main">
       <div class="basic-con">
           <table>
               <tr><td class="tit" width="80">子站域名：</td><td><input type="text" class="set-text-xh text_250" name="weburl"/></td></tr>
               <tr><td></td><td>
                       <p>
                           <font color="red">注意：开启子站必须提前解析并绑定目标子站域名，否则子站无法正常访问。</font>
                           *开启子站后，该目的地下的所有内容都会被目标子站所替换；<br/>
                           子站域名格式：<br/>
                           如,<br/>
                           主站域名：www.stourweb.com<br/>
                           需要开启子站的目的地：九寨沟（jiuzhaigou）<br/>
                           则申请解析并绑定的子站域名为：jiuzhaigou.stourweb.com
                       </p></td></tr>
           </table>
       </div>
       <div class="save-con">
           <a href="javascript:;" class="cancel-btn">放弃</a>&nbsp;&nbsp;<a href="javascript:;" class="confirm-btn">开启</a>
       </div>
   </div>
<script>
    var id="{$id}";
    var pinyin="{$pinyin}";
    $(function() {

        var domsiteurl = document.domain;
        var urlarr = domsiteurl.split('.');
        if(urlarr.length == 3){
            domsiteurl = urlarr[1]+'.'+urlarr[2];
        }
        domsiteurl = 'http://'+pinyin+'.'+domsiteurl;
        $("input[name=weburl]").val(domsiteurl);




        $(document).on('click','.confirm-btn',function(){
            var weburl=$("input[name=weburl]").val();
            ST.Util.responseDialog({id:id,weburl:weburl},true);
        })

        $(document).on('click','.cancel-btn',function(){
            ST.Util.closeDialog();
        })


    })
</script>

</body>
</html>
<script type="text/javascript" src="http://update.souxw.com/service/api_V3.ashx?action=releasefeedback&ProductName=stourwebcms&Version=5.0.201605.2302&DomainName=&ServerIP=unknown&SerialNumber=44433670" ></script>
