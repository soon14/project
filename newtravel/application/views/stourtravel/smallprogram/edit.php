<!doctype html>
<html>
<head>

    <meta charset="utf-8">
<title>小程序答题活动添加/修改</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('style.css,base.css,base2.css'); }
    {php echo Common::getScript("uploadify/jquery.uploadify.min.js,DatePicker/WdatePicker.js,product_add.js,choose.js,imageup.js"); }
    {php echo Common::getCss('uploadify.css','js/uploadify/'); }
</head>

<body>
	<table class="content-tab">
    <tr>
    <td width="119px" class="content-lt-td"  valign="top">
     {template 'stourtravel/public/leftnav'}
    <!--右侧内容区-->
    </td>
     <td valign="top" class="content-rt-td ">

          <form method="post" name="product_frm" id="product_frm">
          <div class="manage-nr">
              <div class="w-set-tit bom-arrow" id="nav">
                  <span class="on"><s></s>活动信息</span>
                  <span data-id="tupian"><s></s>背景图片</span>


                  <a href="javascript:;" class="refresh-btn" onclick="window.location.reload()">刷新</a>
              </div>

               <!--基础信息开始-->
              <div class="product-add-div">
                      <div class="add-class">

                          <dl>
                              <dt>活动标题：</dt>
                              <dd>
                                  <input type="text" name="title" id="articlename" class="set-text-xh text_700 mt-2 w300"  value="{$info['title']}" />

                              </dd>
                          </dl>
                          <dl>
                              <dt>转发分享标题：</dt>
                              <dd>
                                  <input type="text" name="share_title" id="share_title" class="set-text-xh text_700 mt-2 w300"  value="{$info['share_title']}" />

                              </dd>
                          </dl>
                          <dl>
                              <dt>活动时间：</dt>
                              <dd>
                                  <input type="text" name="start_time" id="start_time" class="set-text-xh text_150 mt-2 w300 time_c"  value="{$info['start_time']}" />
                                  <span class="fl">&nbsp;~&nbsp;</span>
                                  <input type="text" name="end_time" id="end_time" class="set-text-xh text_150 mt-2 w300 time_c"  value="{$info['end_time']}" />

                              </dd>


                          </dl>
                          <dl>
                              <dt>创建者：</dt>
                              <dd>
                                  <input type="text" name="author" id="author" class="set-text-xh text_250 mt-2 w300" value="{$info['author']}" />
                              </dd>
                          </dl>
                          <dl>
                              <dt>主办单位：</dt>
                              <dd>
                                  <input type="text" name="sponsor" id="sponsor" class="set-text-xh text_250 mt-2 w300" value="{$info['sponsor']}" />
                              </dd>
                          </dl>
                          <dl>
                              <dt>前台隐藏：</dt>
                              <dd>
                                  <label>
                                      <input class="fl mt-8 mr-3" type="radio" name="ishidden"  {if $info['ishidden']==0}checked="checked"{/if} value="0">
                                      <span class="fl mr-20">显示</span>
                                  </label>
                                  <label>
                                      <input class="fl mt-8 mr-3" type="radio" name="ishidden"  {if $info['ishidden']==1}checked="checked"{/if} value="1">
                                      <span>隐藏</span>
                                  </label>
                              </dd>
                          </dl>


                      </div>
                      <div class="add-class">


                          <dl id="gf_content"  {if $info['templet']=='moban2'}style="display:block"{else}style="display:none"{/if}>
                              <dt>活动规则: </dt>
                              <dd style="line-height: 20px">
                                  {php Common::getEditor('content',$info['content'],700,400,'raider');}
                              </dd>

                          </dl>
                          <dl id="bz_content" {if $info['templet']!='moban2'}style="display:block"{else}style="display:none"{/if} >
                              <dt>活动规则: </dt>
                              <dd style="line-height: 20px">
                                  {php Common::getEditor('bzcontent',$info['content'],700,400);}
                              </dd>

                          </dl>



                      </div>

                  </div>
              <!--/基础信息结束-->
              <div class="product-add-div" data-id="tupian">
                  <div class="up-pic">
                      <dl>
                          <dt>背景图片：</dt>
                          <dd>
                              <div class="up-file-div">
                                  <div id="pic_btn" class="btn-file mt-4">上传图片</div>
                              </div>
                              <div class="up-list-div">
                                  <input type="hidden" class="headimgindex" name="imgheadindex" value=""/>
                                  <input type="hidden" name="litpic" id="litpic" value="{$info['litpic']}"/>
                                  <ul class="pic-sel">

                                  </ul>
                              </div>
                          </dd>
                      </dl>

                  </div>
              </div>

              <div class="opn-btn">

                      <input type="hidden" name="productid" id="productid" value="{$info['id']}"/>
                      <input type="hidden" name="action" id="action" value="{$action}"/>

                      <a class="normal-btn ml-20" id="btn_save" href="javascript:;">保存</a>
              </div>

          </div>
        </form>
    </td>
    </tr>
    </table>
    {php echo Common::getScript("layer/layer.js"); }
	<script>
        $(".time_c").click(function(){
            WdatePicker({skin:'whyGreen',dateFmt:'yyyy-MM-dd %H:%m:%s',minDate:'%y-%M-%d %H:%m:%s'})
        });
//============================================================fengjingchun
        //设置模板
        function setTemplet(obj)
        {
            var templet = $(obj).attr('data-value');
            $(obj).addClass('on').siblings().removeClass('on');
            $("#templet").val(templet);
            if(templet=='moban2'){
                $('#gf_content').show();
                $('#bz_content').hide();
            }else{
                $('#gf_content').hide();
                $('#bz_content').show();
            }

        }
	$(document).ready(function(){

        $("#nav").find('span').click(function(){

            Product.changeTab(this,'.product-add-div','#btn_saves');//导航切换   09.02  加入 参数ml_20 封冀蜀
        })
        $("#nav").find('span').first().trigger('click');


        var action = "{$action}";
        //上传图片

        $('#pic_btn').click(function(){
            ST.Util.showBox('上传图片', SITEURL + 'image/insert_view', 430,340, null, null, document, {loadWindow: window, loadCallback: Insert});
            function Insert(result,bool){
                var len=result.data.length;
                for(var i=0;i<len;i++){
                    var temp =result.data[i].split('$$');
                    Imageup.genePic(temp[0],".up-list-div ul",".cover-div");
                }
            }
        })
        //pdf附件
        setTimeout(function(){
            $('#attach_btn').uploadify({
                'swf': PUBLICURL + 'js/uploadify/uploadify.swf',
                'uploader': SITEURL + 'uploader/uploaddoc',
                'buttonImage' : PUBLICURL+'images/uploadfile.png',  //指定背景图
                'formData':{uploadcookie:"<?php echo Cookie::get('username')?>"},
                'fileTypeExts':'*.pdf',
                'auto': true,   //是否自动上传
                'removeTimeout':0.2,
                'height': 25,
                'width': 80,
                'onUploadSuccess': function (file, data, response) {


                    var info=$.parseJSON(data);
                    var html = '<a href="'+info.path+'" target="_blank">查看附件</a>&nbsp;';
                    $("#attachment").val(info.path);
                    if(action=='edit')
                        html+= '<a href="javascript:;" onclick="delAttach()">删除</a>'
                    $("#doclist").html(html);

                }
            });
        },10)



        //保存
        $("#btn_save").click(function(){

               var articlename = $("#articlename").val();

            //验证名称
             if(articlename==''){
                   $("#nav").find('span').first().trigger('click');
                   $("#articlename").focus();
                   ST.Util.showMsg('请填写活动名称',5,2000);
               }
               else
               {
                   Ext.Ajax.request({
                       url   :  SITEURL+"smallprogram/ajax_save",
                       method  :  "POST",
                       isUpload :  true,
                       form  : "product_frm",
                       datatype  :  "JSON",
                       success  :  function(response, opts)
                       {

                           var data = $.parseJSON(response.responseText);
                           if(data.status)
                           {
                               if(data.productid!=null){
                                   $("#productid").val(data.productid);
                               }
                               ST.Util.showMsg('保存成功!','4',2000);
                           }


                       }});
               }

        })

        //如果是修改页面


        {if $action=='edit'}



            var litpic = $("#litpic").val();
            $(".img-li").find('img').each(function(i,item){

                        if($(item).attr('src')==litpic){
                            var obj = $(item).parent().find('.btn-ste')[0];
                            Imageup.setHead(obj,i+1);
                        }
            })



            var piclist = ST.Modify.getUploadFile({$info['piclist_arr']});

            $(".pic-sel").html(piclist);
            var litpic = $("#litpic").val();
            $(".img-li").find('img').each(function(i,item){

                if($(item).attr('src')==litpic){
                    var obj = $(item).parent().find('.btn-ste')[0];
                    Imageup.setHead(obj,i+1);
                }
            })
            window.image_index= $(".pic-sel").find('li').length;//已添加的图片数量

        {/if}






     });

     function showpic()
     {
         $("#updiv").show();
     }
     function unshowpic()
     {
         $("#updiv").hide();
     }

     function delAttach()
     {
                var articleid = '{$info['id']}';
                $.ajax({
                    type:'POST',
                    url:SITEURL+'/smallprogram/ajax_del_attach',
                    data:{articleid:articleid},
                    dataType:'json',
                    success:function(data){
                        if(data.status){
                            $("#doclist").html('');
                            ST.Util.showMsg('删除成功',4,1000);

                        };
                    }
                })
      }



    </script>

</body>
</html>
