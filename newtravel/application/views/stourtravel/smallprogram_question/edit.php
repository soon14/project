<!doctype html>
<html>
<head>

    <meta charset="utf-8">
<title>题库的添加/修改</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('style.css,base.css,base2.css'); }
    {php echo Common::getScript("uploadify/jquery.uploadify.min.js,product_add.js,choose.js,imageup.js"); }
    {php echo Common::getCss('uploadify.css','js/uploadify/'); }
<style>
    .tupian{
        display: none;
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
     <td valign="top" class="content-rt-td ">

          <form method="post" name="product_frm" id="product_frm">
          <div class="manage-nr">
              <div class="w-set-tit bom-arrow" id="nav">
                  <span class="on"><s></s>问题信息</span>
<!--                  <span data-id="tupian"><s></s>图片</span>-->

                  <a href="javascript:;" class="refresh-btn" onclick="window.location.reload()">刷新</a>
              </div>

               <!--基础信息开始-->
              <div class="product-add-div">
                      <div class="add-class">
                          <dl>
                              <dt>问题类型：</dt>
                              <dd>
                                  <label>
                                      <input class="fl mt-8 mr-3" type="radio" name="ques_type" onchange="changeraio2()"   {if $info['ques_type']==0}checked="checked"{/if} value="0">
                                      <span class="fl mr-20">文字</span>
                                  </label>
                                  <label>
                                      <input class="fl mt-8 mr-3" type="radio" name="ques_type"  onchange="changeraio()" {if $info['ques_type']==1}checked="checked"{/if} value="1">
                                      <span>图片</span>
                                  </label>
                              </dd>
                          </dl>
                          <dl id="wenzi">
                              <dt>问题：</dt>
                              <dd>
                                  <input type="text" name="question" id="articlename" class="set-text-xh text_700 mt-2 w300"  value="{$info['question']}" />
                                  <div class="help-ico mt-9 ml-5">{php echo Common::getIco('help',40); }</div>
                              </dd>
                          </dl>

                          <dl {if $info['ques_type']==1}style="display: block" {/if} id="tupian" class="tupian">
                              <dt>答题图片：</dt>
                              <dd>
                                  <div class="up-file-div">
                                      <div id="pic_btn" class="btn-file mt-4">上传图片</div>
                                  </div>
                                  <div class="up-list-div">
                                      <input type="hidden" class="headimgindex" name="imgheadindex" value=""/>
                                      <input type="hidden" name="litpic" id="litpic" value="{$info['litpic']}"/>
                                      <ul class="pic-sel">

                                      </ul>
                                      <span style="color: red">*注意</span> ：请设置当前图片为封面
                                  </div>
                              </dd>
                          </dl>


                          <dl>
                              <dt>正确答案：</dt>
                              <dd>
                                  <label>
                                      <input class="fl mt-8 mr-3" type="radio" name="correct"  {if $info['correct']==1}checked="checked"{/if} value="1">
                                      <span class="fl mr-20">A</span>

                                  </label>
                                  <label>
                                      <input class="fl mt-8 mr-3" type="radio" name="correct"  {if $info['correct']==2}checked="checked"{/if} value="2">
                                      <span class="fl mr-20">B</span>
                                  </label>
                                  <label>
                                      <input class="fl mt-8 mr-3" type="radio" name="correct"  {if $info['correct']==3}checked="checked"{/if} value="3">
                                      <span class="fl mr-20">C</span>
                                  </label>
                                  <label>
                                      <input class="fl mt-8 mr-3" type="radio" name="correct"  {if $info['correct']==4}checked="checked"{/if} value="4">
                                      <span class="fl mr-20">D</span>
                                  </label>
                              </dd>
                          </dl>
                      </div>
                      <div class="add-class">

                          <dl>
                              <dt>问题属性：</dt>
                              <dd>

                                  <a href="javascript:;" class="choose-btn mt-4" onclick="Product.getAttrid(this,'.attr-sel',104)"  title="选择">选择</a>
                                  <div class="save-value-div mt-2 ml-10 attr-sel">
                                      {loop $info['attrlist_arr'] $k $v}
                                      <span><s onclick="$(this).parent('span').remove()"></s>{$v['attrname']}<input type="hidden" name="attrlist[]" value="{$v['id']}"></span>
                                      {/loop}
                                  </div>
                              </dd>
                          </dl>

                          <dl id="gf_content"  {if $info['templet']=='moban2'}style="display:block"{else}style="display:none"{/if}>
                              <dt>选项: </dt>
                              <dd style="line-height: 20px">
                                  {php Common::getEditor('content',$info['content'],700,400,'raider');}
                              </dd>

                          </dl>
                          <dl id="bz_content" {if $info['templet']!='moban2'}style="display:block"{else}style="display:none"{/if} >
                              <dt>选项: </dt>

                              <dd style="height:auto">
                                  {if $info['answer']}
                                  <textarea class="set-area wid_695"  name="answer" id="" cols="" rows="">{$info['answer']}</textarea>
                                  {else}
                                  <?php $content = "A:*******###B:*******###C:*******###D:*********（请把*号换成您的内容，并删掉括号内容）";?>
                                  <textarea class="set-area wid_695"  name="answer" id="" cols="" rows="">{$content}</textarea>
                                  {/if}
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

                  </div>
              <!--/基础信息结束-->




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
     function changeraio(){
          $("#tupian").css({"display":'block'});

         $("#wenzi").css({"display":'none'})
     }
     function changeraio2(){
         $("#tupian").css({"display":'none'});

         $("#wenzi").css({"display":'block'})
     }
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
//             if(articlename==''){
//                   $("#nav").find('span').first().trigger('click');
//                   $("#articlename").focus();
//                   ST.Util.showMsg('请填写问题',5,2000);
//               }
//               else
//               {
                   Ext.Ajax.request({
                       url   :  SITEURL+"smallprogramquestion/ajax_save",
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
              // }

        })
        //================fengjishu
        //保存
        $("#btn_saves").click(function(){

            var articlename = $("#articlename").val();

            //验证名称
            if(articlename==''){
                $("#nav").find('span').first().trigger('click');
                $("#articlename").focus();
                ST.Util.showMsg('请填写问题',5,2000);
            }
            else
            {
                Ext.Ajax.request({
                    url   :  SITEURL+"smallprogramquestion/ajax_saves",
                    method  :  "POST",
                    isUpload :  true,
                    form  : "product_frm",
                   // datatype  :  "JSON",
                    success  :  function(response, opts)
                    {

                        var data = $.parseJSON(response.responseText);
                       

                        if(data)
                        {

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
                    url:SITEURL+'/smallprogramquestion/ajax_del_attach',
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
