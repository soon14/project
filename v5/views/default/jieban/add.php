<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title>发布结伴信息-{$webname}</title>
    {include "pub/varname"}
    {Common::css('jieban.css,base.css,extend.css')}
    {Common::js('jquery.min.js,base.js,common.js,jquery.validate.js,jquery.validate.addcheck.js,jquery.cookie.js')}

</head>
<body>
{request "pub/header"}
  
  <div class="big">
  	<div class="wm-1200">
      	
    	<div class="st-guide">
            <a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="/jieban/">{$channelname}</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;发布{$channelname}
      </div><!--面包屑-->
      
      <div class="st-main-page">

        <form id="addfrm" method="post">

      	 <div class="st-jieban-join">
        	<div class="jieban-join-tit">发布结伴</div>
          <div class="jieban-join-box">
          
          	<div class="jieban-join-list">
            	<strong class="list-bt"><i>*</i>活动标题：</strong>
              <div class="list-con"><input type="text" name="title" class="jb-text w500" /></div>
            </div><!-- 活动标题 -->
            
          	<!--<div class="jieban-join-list">
            	<strong class="list-bt"><i>*</i>联系方式：</strong>
              <div class="list-con">
              	<input type="text" class="jb-text w200" name="mobile" placeholder="手机" />

                <span class="xt"></span>
              </div>
            </div><!-- 联系电话 -->
            
          	<div class="jieban-join-list">
            	<strong class="list-bt"><i>*</i>目的地：</strong>
              <div class="list-con">
              	<input type="text" class="jb-text w427 destname" name="destname" />
              </div>
            </div><!-- 目的地 -->
            
          	<div class="jieban-join-list">
            	<strong class="list-bt">机动时间：</strong>
              <div class="list-con">
              	<input type="text" class="jb-text w240" name="vartime" />
                <span class="unit">天</span>
              </div>
            </div><!-- 机动时间 -->
            
          	<div class="jieban-join-list">
            	<strong class="list-bt"><i>*</i>出发时间：</strong>
              <div class="list-con">
              	<input type="text" class="jb-text date w240 startdate" name="startdate" />
              </div>
            </div><!-- 出发时间 -->
            
          <!--	<div class="jieban-join-list">
            	<strong class="list-bt"><i>*</i>限制人数：</strong>
              <div class="list-con">
              	<input type="text" class="jb-text w240" />
                <span class="unit">人</span>
              </div>
            </div><!-- 限制人数 -->
              <div class="jieban-join-list">
                  <strong class="list-bt"><i>*</i>成人数量：</strong>
                  <div class="list-con">
                      <input type="text" class="jb-text w240" name="adultnum" />
                      <span class="unit">人</span>
                  </div>
              </div>
              <div class="jieban-join-list">
                  <strong class="list-bt">小孩数量：</strong>
                  <div class="list-con">
                      <input type="text" class="jb-text w240" name="childnum" />
                      <span class="unit">人</span>
                  </div>
              </div>

            
          	<div class="jieban-join-list">
            	<strong class="list-bt"><i>*</i>活动天数：</strong>
              <div class="list-con">
              	<input type="text" class="jb-text w240" name="jiebanday" />
                <span class="unit">天</span>
              </div>
            </div><!-- 活动天数 -->
            
          	<div class="jieban-join-list">
            	<strong class="list-bt">行程主题：</strong>
              <div class="list-con">
      					<input type="text" class="jb-text w240" name="zt" placeholder="行程主题" />
              	<div class="zt-conbox hide" style="z-index: 9999">
                  <ul>
                      {loop $attr $atr}
                      <li><a href="javascript:;" data-value="{$atr['id']}" data-tag="{$atr['attrname']}" data-type="attrid" >{$atr['attrname']}</a></li>
                      {/loop}

                  </ul>
                </div>
              </div>
            </div><!-- 行程主题 -->
              <div class="jieban-join-list">
                  <strong class="list-bt"><i>*</i>验证码：</strong>
                  <div class="list-con">
                      <input type="text" class="jb-text w60" name="checkcode" />
                      <span class="unit"> <img style="margin-left: 5px" src="{$cmsurl}captcha" onClick="this.src=this.src+'?math='+ Math.random()" width="100" height="35" /></span>
                  </div>
              </div>
            
          	<div class="jieban-join-list">
            	<strong class="list-bt">结伴描述：</strong>
              <div class="list-con">
              	<div class="jb-area">
                    {Common::get_editor('memo','',1000,400,'Line')}
              	</div>

                <div class="jb-join-btn"><a href="javascript:;" class="btn_add">发布结伴</a></div>
              </div>
            </div><!-- 结伴描述 -->


            
          </div>
        </div>
        <input type="hidden" name="attrid" id="attrid" value=""/>
        <input type="hidden" name="frmcode" value="{$frmcode}"/>
        </form>
      
      </div>
    
    </div>
  </div>
  
{request "pub/footer"}
{Common::js('layer/layer.js')}
{Common::js('datepicker/WdatePicker.js',0)}
{Common::js('result/result.js',0)}
<link type="text/css" href="{$GLOBALS['cfg_public_url']}js/result/result.css" rel="stylesheet" />

<script>
    $(function(){

        //获取焦点
        $('.jb-text').focus(function(){
            $(this).css({'background':'#fff','border':'1px solid #00b7ee'});
            $(this).next('div').removeClass('hide')
        })
        //失去焦点
        $('.jb-text').blur(function(){
            $(this).css({'background':'#e5e5e5','border':'1px solid #e5e5e5'});
            //$(this).next('div').addClass('hide')
        })
        //输入和删除内容后
        $('.jb-text').change(function(){
            if($(this).val()!==''){
                $(this).addClass('active');
            }
            else{
                $(this).removeClass('active')
            }
        })

        //属性选择
        //菜单选择
        $(".zt-conbox ul li a").click(function(){

            var type = $(this).attr('data-type');
            var tag = $(this).attr('data-tag');
            var value = $(this).attr('data-value');
            $("#"+type).val(value);
            $(this).parents('.zt-conbox').first().parent().find('input').val(tag);
            $(this).parents('.zt-conbox').first().addClass('hide');
        })

        //添加结伴
        $('.btn_add').click(function(){
            $("#addfrm").submit();
        })

        //目的地选择
        $('.destname').Result({url:SITEURL+'destination/ajax_dest_by_pinyin',extraParams:{typeid:11}});

        //出发时间选择
        $(".startdate").click(function(){

            WdatePicker({dateFmt:'yyyy-MM-dd',minDate:'%y-%M-%d',doubleCalendar:false,isShowClear:false,readOnly:true,errDealMode:1})
        })

        //表单验证

        $("#addfrm").validate({

            submitHandler:function(form){
                //form.submit();
                $.ajax({
                    type:'POST',
                    url:SITEURL+'jieban/ajax_add_save',
                    data:$("#addfrm").serialize(),
                    dataType:'json',
                    success:function(data){
                        if(data.status){
                            layer.msg("{__('add_jieban_success')}", {
                                icon: 6,
                                time: 1000
                            })
                            var u = "{$GLOBALS['cfg_basehost']}/jieban/";
                            window.location.href = u;
                        }else{
                            layer.msg("{__('add_jieban_failure')}", {
                                icon: 5,
                                time: 1000

                            })

                        }
                    }
                })
            } ,
            errorClass:'need-txt',
            errorElement:'span',
            rules: {

                title:{
                    required:true
                },
               /* mobile:{
                    required:true,
                    isMobile:true
                },*/
                startdate:{
                    required:true
                },
                adultnum:{
                    required:true,
                    digits:true
                },
                destname:{
                    required:true
                },
                jiebanday:{
                    required:true
                },
                checkcode:{
                    required:true,
                    remote:{
                        url: SITEURL+'pub/ajax_check_code',
                        type: 'post'

                    }
                }
            },
            messages: {

              /*  mobile:{
                    required:'',
                    isMobile:''
                },*/
                adultnum:{
                  required:'',
                  digits:''
                },
                checkcode:{
                    required:'',
                    remote:''
                }

            },
            highlight: function(element, errorClass, validClass) {
                //$(element).attr('style','border:1px solid #00b7ee');
            },
            unhighlight:function(element, errorClass){
                 //$(element).attr('style','border:1px solid #e5e5e5');
            }




        });
    })
</script>

</body>
</html>
