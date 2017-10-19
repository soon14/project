<!doctype html>
<html>
<head>

    <meta charset="utf-8">
<title>问答查看</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('style.css,base.css,base2.css'); }
    <style>
        #product_frm .product-add-div .add-class dl dd
        {
            width:200px;
        }
        .description_con textarea{
            width:300px;
            height:50px;
            margin-top:7px;
            float:left;
            border:1px solid #dcdcdc;
        }
        #product_frm .product-add-div .add-class{
            border-bottom: 0px;
        }
        #product_frm .opn-btn{
            text-align: center;
        }
        #btn_save{
            float:none;
        }
    </style>
</head>

<body style="background-color: #fff">
      <div class="content-nr mt-0">
          <form method="post" name="product_frm" id="product_frm">
          <div class="manage-nr" style="padding-top: 0">
                  <div class="product-add-div">
                      <div class="add-class">
                          <dl>
                              <dt>客户电话：</dt>
                              <dd>
                                  <span class="fl w160">{$info['phone']}</span>
                              </dd>
                          </dl>
                          <dl>
                              <dt>处理说明：</dt>
                              <dd class="description_con">
                                  <textarea name="description">{$info['description']}</textarea>
                              </dd>
                          </dl>
                      </div>
                  </div>
                  <div class="opn-btn" style="padding:10px">
                      <input type="hidden" name="id" id="id" value="{$info['id']}"/>
                      <a class="normal-btn ml5" id="btn_save" href="javascript:;">保存</a>
                  </div>

          </div>
        </form>

    </div>

	<script>
    var id="{$info['id']}";
	$(document).ready(function(){
        //保存
        $("#btn_save").click(function(){
                   Ext.Ajax.request({
                       url   :  SITEURL+"kefu/ajax_freekefu_save",
                       method  :  "POST",
                       form  : "product_frm",
                       success  :  function(response, opts)
                       {
                           setTimeout(function(){ST.Util.responseDialog({id:id},true)},1000);
                       }
                   });
               });


    });
    </script>
</body>
</html>
<script type="text/javascript" src="http://update.souxw.com/service/api_V3.ashx?action=releasefeedback&ProductName=stourwebcms&Version=5.0.201605.2303&DomainName=&ServerIP=unknown&SerialNumber=44433670" ></script>
