<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>供应商资质验证-{$webname}</title>
    {Common::css('style.css,base.css')}
    {Common::js('jquery.min.js,common.js,slideTabs.js,jquery.upload.js')}
</head>
<body>

	<div class="page-box">

        {request "pc/pub/header"}
        {include "pc/pub/sidemenu"}
    
    <div class="main">
    	<div class="content-box">
        
        <div class="frame-box">
        	<div class="frame-con">
          
            <div class="flow-path-box">
            	<div class="flow-path-tit"><strong class="bt">资质验证</strong></div>
              <div class="flow-path-con">
              	<div class="nr-box">
                	<div class="step"><span class="on">提交资料</span><span>客服审核</span><span>认证成功</span></div>
                  <div class="way">
                  	<div class="st-tabnav">
                      <strong>验证方式：</strong>
                      <span>旅行社工作名片</span>
                      <span>经营许可证(备案登记证)</span>
                      <span>营业执照(副本)</span>
                    </div>
                    <div class="st-tabcon">
                    	<ul>
                        <li><strong class="lm">公司全称：</strong><div class="zl-con"><input type="text" class="tit-text" value="{$qd['card']['company']}" /></div
                      	<li>
                        	<strong class="lm">名片正面：</strong>
                          <div class="zl-con">
                          	<div class="up-pic">支持jpg、png、gif格式，不超过2M</div>
                          	<div class="upload"><input class="up-btn" id="up-btn" value="+上传图片"><a class="again-btn" href="#">重新上传</a></div>
                          	<p class="sm-txt">可上传名片的照片或者扫描文件，清晰的图片更容易通过审核。</p>
                            <input type="hidden" name="litpic" value="{$qd['card']['litpic']}">
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="st-tabcon">
                    	<ul>
                      	<li><strong class="lm">公司全称：</strong><div class="zl-con"><input type="text" class="tit-text" value="{$qd['certificate']['company']}" /></div></li>
                      	<li><strong class="lm">许可证号码：</strong><div class="zl-con"><input type="text" class="tit-text" value="{$qd['certificate']['license']}" /></div></li>
                      	<li>
                        	<strong class="lm">类型：</strong>
                          <div class="zl-con">
                          	<form name="form1" class="zj-radio" method="post" action="">
                              <label><input type="radio" name="RadioGroup1" {if $qd['certificate']['type']=='许可证'}checked="checked"{/if} value="许可证" id="RadioGroup1_0">许可证</label>
                              <label><input type="radio" name="RadioGroup1" {if $qd['certificate']['type']=='备案登记证'}checked="checked"{/if} value="备案登记证" id="RadioGroup1_1">备案登记证</label>
                        	  </form>
                          </div>
                        </li>
                      	<li><strong class="lm">发布日期：</strong><div class="zl-con"><input type="text" class="date-text" value="{$qd['certificate']['pubdate']}" /></div></li>
                      	<li>
                        	<strong class="lm">经营许可证：</strong>
                          <div class="zl-con">
                          	<div class="up-pic">支持jpg、png、gif格式，不超过2M</div>
                          	<div class="upload"><a class="up-btn" href="#">+上传图片</a><a class="again-btn" href="#">重新上传</a></div>
                          	<p class="sm-txt">上传证件为带有最新工商局年检盖章的副本，如年检盖章在背面，请拼接处理后再上传。</p>
                              <input type="hidden" name="litpic" value="{$qd['certifycate']['litpic']}">
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="st-tabcon">
                    	<ul>
                      	<li><strong class="lm">公司全称：</strong><div class="zl-con"><input type="text" class="tit-text" value="{$qd['license']['company']}"/></div></li>
                      	<li><strong class="lm">法人代表：</strong><div class="zl-con"><input type="text" class="tit-text" value="{$qd['license']['corporation']}"/></div></li>
                      	<li><strong class="lm">公司地址：</strong><div class="zl-con"><input type="text" class="tit-text" value="{$qd['license']['address']}" /></div></li>
                      	<li><strong class="lm">发布日期：</strong><div class="zl-con"><input type="text" class="date-text" value="{$qd['license']['pubdate']}" /></div></li>
                      	<li>
                        	<strong class="lm">经营许可证：</strong>
                          <div class="zl-con">
                          	<div class="up-pic">支持jpg、png、gif格式，不超过2M</div>
                          	<div class="upload"><a class="up-btn" href="#">+上传图片</a><a class="again-btn" href="#">重新上传</a></div>
                              <input type="hidden" name="litpic" value="{$qd['license']['litpic']}">
                          	<p class="sm-txt">上传证件为带有最新工商局年检盖章的副本，如年检盖章在背面，请拼接处理后再上传。</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <a class="submit-btn" href="#">提交审核</a>
                  </div>
                </div>
              </div>
            </div><!-- 验证步骤 -->
          
          </div>
        </div>

            {request "pc/pub/footer"}
        
      </div>
    </div><!-- 主体内容 -->
  
  </div>
    <script>

        //上传模板
        function upload()
        {

            var pageid = $("#pageid").val();
            // 上传方法
            $.upload({
                // 上传地址
                url: SITEURL+'sitetemplet/ajax_upload_templet',
                // 文件域名字
                fileName: 'filedata',
                fileType: 'zip',
                // 其他表单数据
                params: {pageid: pageid,webid: webid},

                // 上传之前回调,return true表示可继续上传
                onSend: function() {
                    return true;
                },
                // 上传之后回调
                onComplate: function(data) {

                    var data = $.parseJSON(data);
                    //如果上传成功
                    if(data.status&&$("#tpl_"+data.id).length<=0){
                        var html='<div class="onedata" id="tpl_'+data.id+'">'
                        html+='<div class="v1">'+data.path+'</div>';
                        html+='<div class="v2"> <a href="javascript:;" class="row-mod-btn" data-path="'+data.path+'" ></a>'+
                            '&nbsp;&nbsp;&nbsp; <a href="javascript:;"  data-path="'+data.path+'" class="row-del-btn"></a></div>';
                        html+='<div class="v3"><input name="isuse" type="radio" value="0" data-id="'+data.id+'"/></div>';
                        html+='</div>';
                        $("#templet_list").append(html);
                        addEvent();


                    }



                }
            });





        }
    </script>

</body>
</html>
