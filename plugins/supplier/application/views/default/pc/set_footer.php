<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>网页底部</title>
    <script type="text/javascript" src="/{$admindir}/public/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/{$admindir}/public/js/common.js"></script>
    <script type="text/javascript" src="/{$admindir}/public/js/jquery.hotkeys.js"></script>
    <script type="text/javascript" src="/{$admindir}/public/js/msgbox/msgbox.js"></script>
    <script type="text/javascript" src="/{$admindir}/public/js/extjs/ext-all.js"></script>
    <script type="text/javascript" src="/{$admindir}/public/js/extjs/locale/ext-lang-zh_CN.js"></script>
    <link type="text/css" href="/{$admindir}/public/js/msgbox/msgbox.css" rel="stylesheet">
    <link type="text/css" href="/{$admindir}/public/css/common.css" rel="stylesheet">
    <link type="text/css" href="/{$admindir}/public/js/extjs/resources/ext-theme-neptune/ext-theme-neptune-all-debug.css" rel="stylesheet">
    <script>
        window.SITEURL =  "/{$admindir}/";
        window.PUBLICURL ="/{$admindir}{$GLOBALS['cfg_public_url']}";
        window.BASEHOST="{$GLOBALS['cfg_basehost']}";
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
    <link type="text/css" href="/{$admindir}/public/css/style.css" rel="stylesheet">
    <link type="text/css" href="/{$admindir}/public/css/base.css" rel="stylesheet">
    <script type="text/javascript" src="/{$admindir}/public/js/config.js"></script>
    <script type="text/javascript" src="/{$admindir}/public/js/uploadify/jquery.uploadify.min.js?t=3719243"></script>
    <link type="text/css" href="/{$admindir}/public/js/uploadify/uploadify.css" rel="stylesheet">
</head>

<body>
	<table class="content-tab">
    <tr>
    <td width="119px" class="content-lt-td"  valign="top">
     {template 'pc/leftnav'}
    <!--右侧内容区-->
    </td>
     <td valign="top" class="content-rt-td">

        <form id="configfrm">
		
         <div class="w-set-con">
        	<div class="w-set-tit bom-arrow"><span class="on"><s></s>网页底部</span><a href="javascript:;" class="refresh-btn" onclick="window.location.reload()">刷新</a></div>
          <div class="w-set-nr">

          	<div class="nr-list">

              <div class="txt">
                  {php Common::get_editor('cfg_supplier_footer',$configinfo['value'],700,300);}
            </div>
            </div>
            <div class="opn-btn">
            	<a class="normal-btn" href="javascript:;" id="btn_save">保存</a>
             <!-- <a class="cancel" href="#">取消</a>-->
            </div>

          </div>
        </div>
        </form>
      </div>

  </td>
  </tr>
  </table>
    <input type="hidden" id="webid" value="0">
  
  
	<script>

	$(document).ready(function(){
        //配置信息保存
        $("#btn_save").click(function(){
            var webid= $("#webid").val();
            Config.saveConfig(webid);
        })

        //setTimeout(getConfig,500);//延迟500毫秒调用数据显示,防止编辑器没有加载完成返回错误.
    });


       //获取配置
        function getConfig(webid)
        {
            Config.getConfig(webid,function(data){
                cfg_footerEditor.setContent(data.cfg_footer);

            })

        }

	</script>

</body>
</html>
