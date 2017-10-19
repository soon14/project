<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>写游记-{$webname}</title>
  {Common::css('mycss/notes/travels-publish.css')}

    {Common::css('common/bootstrap-min.css,common/public.css')}
  {Common::js('myjs/jquery-1.8.3.min.js,myjs/travels-publish.js,jquery.upload.js')}


<script>
   $(function () {   
     $("#radio").jRadio();// 单选按钮
     $("#radio1").jRadio();// 单选按钮
     $("#radio2").jRadio();// 单选按钮
	 $("#checkbox").jCheckBox();// 复选框
   });
</script>
</head>
<body >
{request "pub/header"}
<?php //var_dump($notelist)?>
<div id="content">
  <div class="youjiType">
    <div class="longType">
      <h3> 游记</h3>
      <p> 分章节写游记，丰富的行程给爱旅游的朋友更多的惊喜</p>
    </div>
  </div>
  <div class="youjiContent"> 
    <!-- 左边开始 -->
    <div class="youjiLeft">
      <div class="youjiTit">
        <input id="youjiTit" type="text" placeholder="游记标题" value="{$info['title']}">
<!--        <label class="youjiTitle">游记标题</label>-->
        <div class="shengxiazi"><em>0</em>/40</div>
        <div class="peo-ico"><img src="img/pic_100_100.jpg" width="100" height="100"></div>
        <div class="peo-ico"><img src="{$pic}" width="100" height="100"></div>
      </div>
      <div class="zhangjieTit">
        <!-----封面图------>
        <div class="zhangjieSeed">
          <div class="ClickSeed MainCatalog noOnthisSeed" id="M0">
            <h4><span></span>封面图</h4>
          </div>
          <div class="clearfix"></div>
        </div>
        <!-----概况---->

        <div class="zhangjieSeed">
          <div class="ClickSeed MainCatalog noOnthisSeed" id="M1">
            <h4><span></span>概况</h4>
          </div>
          <div class="clearfix"></div>
        </div>
        <!-------章节1 ------>
      {if empty($info)}
        <div class="zhangjieSeed">
          <div class="ClickSeed MainCatalog noOnthisSeed" id="M2">
            <h4><span></span>章节1<a style="display: none;" name = "delete" data-id="M2" href="javascript:void(0);"></a></h4>
          </div>

          <!-----添加子目录--->
          <div class="addChild" name="p">
            <a href="javascript:void(0);">添加子目录</a>
          </div>

          <div class="clearfix"></div>
        </div>
       {else}
          <!-------------------->


        {loop $notelist $ke $li}
            <?php $li['m_id']=str_replace("A","M",$li['m_id']);?>
              <div class="zhangjieSeed">
                  <div onclick="s(this)" class="ClickSeed MainCatalog noOnthisSeed" id="{$li['m_id']}">
                      <h4><span></span>章节{$li['displayorder']}<a style="display: none;" name = "delete" data-id ="{$li['id']}" href="javascript:void(0);"></a></h4>
                  </div>
                  <!-----添加子目录--->
                  {loop $li['child'] $ch}
                  <?php $ch['z_id']=str_replace("A","M",$ch['z_id']);?>
                 <div onclick="s(this)" class="ClickSeed ChildCatalog noOnthisSeed" id="{$ch['z_id']}">
                 <h4><span></span>子目录{$ch['displayorder']}<a style="display:none;"  href="javascript:void(0);" onclick="dele_zi(this)" data-id ="{$ch['z_id']}"></a></h4>
                 </div>
                 {/loop}
                  <div class="addChild" >
                      <a href="javascript:void(0);">添加子目录</a>
                  </div>
                  <div class="clearfix"></div>
              </div>
        {/loop}
       {/if}

        <!-------章节2 ------>

        <!------增加主目录--->
        <div class="addMain">
          <a href="javascript:void(0);">增添章节</a>
        </div>
      </div>
      <form id="all_content">
      <div class="zhangjieBody">
        <!----封面图 右边------->
        <div class="zhangjieCon">
          <div style="" class="zhangjieBodyMain" id="A0">
            <div class="inputTit">
              <p>A0</p>
              <span></span> </div>
            <div class="zhangjieA none">
              <div class="viewImg" id="previewBox">
                <div class="uploadBoxTop clearfix">

                     <img src="{if empty($info['litpic'])}{Common::img()}{else}{$info['litpic']}{/if}" width="100%" height="   100%" id="cover_litpic">
                    <a href="javascript:void(0)" class="uploadBtn upbtn"  data-type="cover" >
                    <label for="uploadFile">上传封面图</label>
                    </a>
<!--                    <input name="uploadFile" id="uploadFile" type="file">-->
                    <span>批量上传照片丰富你的行程！<br>
                    建议照片宽度大于780px，单张照片最大可5M</span>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!----概况 右边------>
        <div class="zhangjieCon">
          <div style="" class="zhangjieBodyMain" id="A1">
            <div class="inputTit">
              <p>A1</p>
              <span></span> </div>
            <div class="zhangjieA none">
              <Form class="form-inline" method="POST" action="/notes/ajax_save" name="FrontPage_Form">
                  <!---目的地---->
                <div class="Form-group">
                  <label>目的地</label>
                  <div class="FormInfo"> 
                    <!--单选按钮开始-->
                    <div class="radio" id="radio">
                      <input type="hidden" name="travel_mdd" data-name ="目的地" class="radio-value" >
                      <ul class="options clearfix">
                          {if !empty($info['finaldestid'])}
                          {else}

                          {/if}
                        {loop $mdd $m}

                        <li data-value="{$m['id']}" {if $info['finaldestid']==$m['id']}class="checked"{else}{if $m['id']=='45'}class="checked"{/if}{/if}><i class="checkbox-icon"></i>{$m['kindname']}</li>

                        {/loop}
                      </ul>
                    </div>
                    <!--单选按钮结束--> 
                  </div>
                  <div class="clearfix"></div>
                </div>

                 <!----出发日期------>
                <div class="Form-group">
                  <label>出发日期</label>
                  <div class="FormInfo">
                    <input dayid="0" isnew="true" class="" maxlength="40" data-name ="出发日期" type="text" name="travel_date" value="{$info['travel_date']}">
                  </div>
                  <div class="clearfix"></div>
                </div>

                <!----出行天数------>
                <div class="Form-group">
                  <label>出行天数</label>
                  <div class="FormInfo">
                      <!--单选按钮开始-->
                      <div class="radio" id="radio2">
                          <input type="hidden" name="travel_day"  class="radio-value" >
                          <ul class="options clearfix">
                              <?php $day = array(1=>"1天",2=>"2天",3=>"3天",4=>"4~7天",5=>"7天以上",);?>
                              <?php for($s=1;$s<count($day)+1;$s++){?>

                                  <li data-value="<?php echo $s;?>" <?php if(!empty($info['travel_day'])){ if($s==$info['travel_day']){?>class="checked"<?php } }else{ if($s==1)?>class="checked"<?php }?>><i class="checkbox-icon"></i><?php echo  $day[$s];?></li>
                              <?php }?>

                          </ul>
                      </div>
                      <!--单选按钮结束-->
                  </div>
                  <div class="clearfix"></div>
                </div>

                <!----人均花费------>
                <div class="Form-group">
                  <label>人均花费</label>
                  <div class="FormInfo">
                    <input dayid="0" isnew="true" class="" maxlength="40" data-name ="人均花费" type="text" name="travel_con" value="{$info['travel_consume']}">
                  </div>
                  <div class="clearfix"></div>
                </div>

                <!----出行人物------>
                <div class="Form-group">
                  <label>出行人物</label>
                  <div class="FormInfo">
                    <input dayid="0" isnew="true" class="" maxlength="40" data-name ="出行人物" type="text" name="travel_men" value="{$info['travel_men']}">
                  </div>
                  <div class="clearfix"></div>
                </div>

                <!----出行方式------>
                <div class="Form-group">
                  <label>出行方式</label>
                  <div class="FormInfo"> 
                    <!--单选按钮开始-->
                    <div class="radio" id="radio1">
                      <input type="hidden" name="travel_way"  class="radio-value" >
                      <ul class="options clearfix">

                        <?php $way = array(1=>'跟团',2=>'自驾',3=>'自由行');?>

                        <?php for($j=1;$j<4;$j++){?>

                        <li data-value="<?php echo $j;?>" <?php if(!empty($info['travel_way'])){ if($info['travel_way']==$j){ ?>class="checked"<?php  }}else{ if($j==1)?>class="checked" <?php }?>><i class="checkbox-icon"></i><?php echo  $way[$j]?></li>
                        <?php }?>



                      </ul>
                    </div>
                    <!--单选按钮结束--> 
                  </div>
                  <div class="clearfix"></div>
                </div>
                  <input type="hidden" id ="frmcode" name="frmcode" value="{$frmcode}"/>
              </Form>
            </div>
          </div>
        </div>
          {if empty($info)}

        <div class="zhangjieCon">
            <!--右边主章节title he 文本框--->
          <div style="" class="zhangjieBodyMain" id="A2">
            <div class="inputTit">
              <p>A2</p>
              <span></span>
            </div>

            <div class="zhangjieA none">
              <div class="zhangjieBiaoti">
                <input dayid="0" isnew="true" name="A2" class="" maxlength="40" type="text">
                <label style="display: block;" class="zhangjieTitle"></label>
              </div>
              <div class="zjshengxiazi"><em>0</em>/40</div>
              <div class="youjiMain">
                  <div class="youjitit"><a href="javascript:void(0)" onclick="up_pic(this)" class="edui-icon"></a></div>
                  <div contentEditable="true" id= "A2_UP" onblur="blurs(this)" class="youjiEdit">

                  </div>
                  <input type="hidden" name="A2_con" id="A2_UP_input">
              </div>
            </div>
          </div>
        </div>
       {else}

          {loop $notelist $k $v}
        <div class="zhangjieCon">
                  <!--右边主章节title he 文本框--->
                  <div style="" class="zhangjieBodyMain" id="{$v['m_id']}" data-id="{$v['id']}">
                      <div class="inputTit">
                          <p>{$v['m_id']}</p>
                          <span></span>
                      </div>
                      <div class="zhangjieA none">
                          <div class="zhangjieBiaoti">
                              <input dayid="0" isnew="true" name="{$v['m_id']}" class="" maxlength="40" type="text" value="{$v['title_s']}">
                              <label style="display: block;" class="zhangjieTitle"></label>
                          </div>
                          <div class="zjshengxiazi"><em>0</em>/40</div>
                          <div class="youjiMain">
                           <div class="youjitit"><a href="javascript:void(0)" onclick="up_pic(this)" class="edui-icon"></a></div>
                           <div contentEditable="true" id= "{$v['m_id']}_UP" onblur="blurs(this)"  class="youjiEdit">
                               {if $v['notes_id']>167}
                               {htmlspecialchars_decode($v['content'],ENT_QUOTES)}
                               {else}
                               {$v['content']}
                               {/if}
                           </div>
                         <input type="hidden" name="{$v['m_id']}_con" id="{$v['m_id']}_UP_input" value='{$v[content]}'>
                          </div>
                      </div>
                  </div>
            {loop $v['child'] $chi}
                 <div style="" class="zhangjieBodyChild none" id="{$chi['z_id']}">
                    <div class="inputTit">
                       <p>{$chi['displayorder']}</p>
                        <span></span>
                        </div>
                    <div class="zhangjieA none">
                  <div class="zhangjieBiaoti">
                        <input dayid="0" isnew="true" name="{$chi['z_id']}" class="" maxlength="40" type="text" value="{$chi['title_s']}">
                      <label style="display: block;" class="zhangjieTitle"></label>
                     </div>
                    <div class="zjshengxiazi"><em>0</em>/40</div>
                    <div class="youjiMain">
                       <div class="youjitit"><a href="javascript:void(0)" onclick="up_pic(this)" class="edui-icon"></a></div>
                       <div contentEditable="true" id= "{$chi['z_id']}_UP" onblur="blurs(this)" class="youjiEdit">
                           {if $v['notes_id']>167}
                           {htmlspecialchars_decode($chi['content'],ENT_QUOTES)}
                           {else}
                           {$chi['content']}
                           {/if}
                       </div>
                       <input type="hidden" name="{$chi['z_id']}_UP" id="{$chi['z_id']}_UP_input" value='{$chi[content]}'>
                       </div>
                    </div>
                </div>
             {/loop}
         </div>
          {/loop}
          {/if}

      </div>
 </form>
<div class="savaDiv">
  <p> <a href="javascript:void (0)" class="previewButton setButtom" style="color:#FFF" id="setYL">预览</a> <a href="javascript:void (0)" class="savaButton setButtom" onclick="subs()" style="color:#FFF" id="setYj">发表游记</a>或者 <a href="javascript:void (0)" class="savaCG savaCao" id="setCG">保存草稿箱</a> </p>
</div>

    </div>
    <!-- 左边开始 --> 
    
    <!-- 右边开始 -->
    <div class="youjiRight">  
    
<div class="shuoMingP borderBottom" draggable="true">
  <p> 温馨提示：</p>
  <p> 1.希望通过此篇游记，能和您一起分享旅途中的点点滴滴；</p>
  <p> 2.您可以根据时间、行程来放置图片的顺序，并配上文字描写，可以是您旅途中遇到的某件趣事，也可以是对风景的描写，更可以是您在路上的一些感想；</p>
  <p> 3.分章节更清晰，可按游玩时间写，也可分游玩主题写（如行程篇、美食篇、购物篇、住宿篇、贴士篇等），一篇高品质的游记可获得更多关注哦。</p>
</div> 
    
    </div>
    <!-- 右边开始 --> 
  </div>
</div>

<input type="hidden" id="ajax_noteid" name ="ajax_noteid" value="{if $noteid}{$noteid}{else}-1{/if}">
<input type="hidden" id="cover" name="cover" value="{$info['litpic']}"/>
<input type="hidden" id ="commonnoteid" name="commonnoteid" value="{$commonnoteid}">

<input type="hidden" id ="edit" name="edit" value="<?php echo $edit?>">
<input type="hidden" autocomplete="off" id="noteid" name="noteid" value="{$info['id']}"/>

<div id="zhezhao" class="none">
</div>


{request "pub/footer"}
{Common::js('layer/layer.js',0)}
</body>
</html>
<script>
    //保存预览
    $("#setYL").click(function(){
        var p= true;
        if(p){
            var  cover  = $("#cover").val();
            var  title  = $("#youjiTit").val();

            //获取主目录的实际章节长度
            var m_length =  $(".zhangjieSeed").length*1-2;

            //获取所有 子章节的实际长度
            var z_length =  $(".zhangjieBodyChild").length*1;

            var ajax_noteid = $("#ajax_noteid").val();

            //获取  common noteid
            var commonnoteid   = $("#commonnoteid").val();
            //获取 notei
            var noteid  = $("#noteid").val();
            // 获取 变量$edit
            var edit   =  $("#edit").val();

            var url   ="/notes/ajax_save?cover=" + cover+"&title="+title+"&ajax_noteid="+ajax_noteid+"&noteid="+noteid+"&m_length="+m_length+"&z_length="+z_length+"&draft=1"+"&commonnoteid="+commonnoteid+"&edit="+edit;
            var s= $("#all_content").serialize();

            $.ajax({
                type: "POST",
                url: url,
                data:$("#all_content").serialize(),
                dataType: 'json',
                success: function(data){
                    if(data.status){
                       // layer.msg(data.msg);

                        window.open('/notes/show_'+data.noteid+'.html');
                    }
                }
            });

        }
    })

    //保存草稿箱
    $("#setCG").click(function(){
        var p= true;
        if(p){
            var  cover  = $("#cover").val();
            var  title  = $("#youjiTit").val();

           // var  is_status = "{$info['status']}";

//            if(is_status==1){
//                layer.msg('审核通过');
//            }
                //获取主目录的实际章节长度
                var m_length =  $(".zhangjieSeed").length*1-2;

                //获取所有 子章节的实际长度
                var z_length =  $(".zhangjieBodyChild").length*1;

                var ajax_noteid = $("#ajax_noteid").val();

                //获取  common noteid
                var commonnoteid   = $("#commonnoteid").val();
                //获取 notei
                var noteid  = $("#noteid").val();
                // 获取 变量$edit
                var edit   =  $("#edit").val();

                var url   ="/notes/ajax_save?cover=" + cover+"&title="+title+"&ajax_noteid="+ajax_noteid+"&noteid="+noteid+"&m_length="+m_length+"&z_length="+z_length+"&draft=1"+"&commonnoteid="+commonnoteid+"&edit="+edit;

                var s= $("#all_content").serialize();
//            alert(is_status);
//
//            alert(s);
//
//            return false ;
                $.ajax({
                    type: "POST",
                    url: url,
                    data:$("#all_content").serialize(),
                    dataType: 'json',
                    success: function(data){
                        if(data.status){
                            layer.msg('以保存到草稿');
                            window.location.href = '/member/index/mynotes';
                        }
                    }
                });

        }
    })

    //发表游记 提交 ——————
    function subs(){
        var  p = true ;
        $(".form-inline input").each(function(){
            var  this_val   = $(this).val();
            var  this_name  = $(this).attr("data-name");
            if(this_val==''){
                layer.msg(this_name+'不为空');
                $(this).focus();
                p = false;
                return false;
            }
        })
        if(p){
            var  cover  = $("#cover").val();
            var  title  = $("#youjiTit").val();

            if(title==''){
                    layer.msg("请填写游记标题");
            }else{
                //获取主目录的实际章节长度
                var m_length =  $(".zhangjieSeed").length*1-2;

                //获取所有 子章节的实际长度
                var z_length =  $(".zhangjieBodyChild").length*1;

                var ajax_noteid = $("#ajax_noteid").val();
                //获取  common noteid
                var commonnoteid   = $("#commonnoteid").val()
                //获取 notei
                var noteid  = $("#noteid").val();
                // 获取 变量$edit
                var edit   =  $("#edit").val();

                var url   ="/notes/ajax_save?cover=" + cover+"&title="+title+"&ajax_noteid="+ajax_noteid+"&noteid="+noteid+"&m_length="+m_length+"&z_length="+z_length+"&commonnoteid="+commonnoteid+"&edit="+edit;

                var s= $("#all_content").serialize();
//                alert(url);
//
//                alert(s);
//
//                return false ;
                $.ajax({
                    type: "POST",
                    url: url,
                    data:$("#all_content").serialize(),
                    dataType: 'json',
                    success: function(data){
                        if(data.status){
                            layer.msg('发表成功,需等待管理员审核',{time:2000});
                            window.location.href = '/member/index/mynotes';
                        }

                    }
                });
            }
        }

    }
    //删除 主 目录
    $(".zhangjieSeed a[name=delete]").click(function(){
        dele(this);

    });


    //添加子目录
    $(".addChild").click(function(){

         chil(this);

    })
    // 删除 子目录
   function  dele_zi(th){

       var  this_id  =  $(th).attr('data-id');//删除元素的id  左边

       var  this_right_id   = this_id.replace("M",'A');  //  配置 右边的id 值
       //=获取 公共 ｎｏｔｅｉｄ
       var  noteid    = $("#ajax_noteid").val();
       // 当前章节的自章节的长度
       var  this_zhangjie_zzj    = $(th).parent().parent('div').siblings().length;//包括 主章节 的div 和添加子目录的div
            this_zhangjie_zzj    =this_zhangjie_zzj*1-2;
       // 当前子章节的的索引
       var  this_zhangjie_index = $(th).parent().parent('div').index();

       layer.confirm('辛辛苦苦写好的游记，确定要删除吗？', {
           btn: ['确定','取消'] //按钮
       }, function(){
             if(this_zhangjie_index==this_zhangjie_zzj){
                 $("#"+this_id).remove();
                 $("#"+this_right_id).remove();
                 $.ajax({
                     type: "GET",
                     url: "/notes/ajax_del_zimulu",
                     data: {del:this_right_id,noteid:noteid},
                     success: function(data) {

                         if (data) {
                             layer.msg('删除成功', {
                                 time: 2000, //20s后自动关闭
                                 btn: ['确定']
                             });
                         }
                        // window.location.reload();
                     }
                 });
             }else{
                 layer.msg('{__("删除失败，请从最后删除")}', {icon:5,time:1000});
             }



       });

   }

    function dele(th){
        var  this_id  =  $(th).attr('data-id');//删除元素的id  左边
        var  this_right_id   = this_id.replace("M",'A');  //  配置 右边的id 值
        var  delid  = $("#"+this_right_id).attr('data-id');
        var  zhangjie  = $(".zhangjieSeed").length*1;
        //获取 当前对象有.zhangjieSeed 类索引值
        var  thiszhangjie  = $(th).parent().parent().parent('.zhangjieSeed').index();
        var  thiszhang     =  thiszhangjie+1;

        layer.confirm('辛辛苦苦写好的游记，确定要删除吗？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            if(zhangjie==3){
                layer.msg('{__("此项不能删除")}', {icon:5,time:1000});
            } else{
                if(thiszhang==zhangjie){
                    $("#"+this_id).parent().remove();
                    $("#"+this_right_id).parent().remove();
                    var  noteid = $("#ajax_noteid").val();
                    $.ajax({
                        type: "GET",
                        url: "/notes/ajax_del_cookie",
                        data: {del:delid,noteid:noteid},
                        success: function(data) {
                            if (data) {
                                layer.msg('删除成功', {
                                    time: 2000, //20s后自动关闭
                                    btn: ['确定']
                                });
                              //  window.location.reload();
                            }
                        }
                    });
                }else{
                    layer.msg('{__("删除失败，请从最后删除")}', {icon:5,time:1000});
                }


            }

        });
    }
    function chil(th){

        //获取主目录的id
        var main_id = $(th).parent().children('div').eq(0).attr("id");

        //获取 右边 id
        var right_id = main_id.replace('M','');

        //获取 子目录的长度  根据 div  的个数  以后添加 同级的div 会导致错误 ！！
        var child =$(th).parent().children('div').length*1-2;
        //获取  右边内容 最后一个子目录的input  框的内容
        var childs  =child-1;
        if(childs!=0){
            var  ch  =child-1;
            var ringht_last_id = $("#A"+right_id+"-"+ch+" input").val();
           if(ringht_last_id==''){
               layer.msg('{__("上一子章节需填写")}', {icon:5,time:1000});

               return;
           }

        }

        var addChildLeft ='<div onclick="s(this)" class="ClickSeed ChildCatalog noOnthisSeed" id='+main_id+'-'+child+'>';
        addChildLeft +='<h4><span></span>子目录'+child+'<a style="display:none;"  href="javascript:void(0);" onclick="dele_zi(this)" data-id ='+main_id+'-'+child+'></a></h4>';
        addChildLeft +='</div>';

        var addChildRight ='<div style="" class="zhangjieBodyChild none" id="A'+right_id+'-'+child+'">';
        addChildRight +='<div class="inputTit">';
        addChildRight +='<p>A'+right_id+'-'+child+'</p>';
        addChildRight +='<span></span>';
        addChildRight +='</div>';
        addChildRight +='<div class="zhangjieA none">';
        addChildRight +='<div class="zhangjieBiaoti">';
        addChildRight +='<input dayid="0" isnew="true" name="A'+right_id+'-'+child+'" class="" maxlength="40" type="text">';
        addChildRight +='<label style="display: block;" class="zhangjieTitle"></label>';
        addChildRight +='</div>';
        addChildRight +='<div class="zjshengxiazi"><em>0</em>/40</div>';
        addChildRight +=' <div class="youjiMain">';
        addChildRight +=' <div class="youjitit"><a href="javascript:void(0)" onclick="up_pic(this)" class="edui-icon"></a></div>';
        addChildRight += '<div contentEditable="true" id= "A'+right_id+'-'+child+'_UP" onblur="blurs(this)" class="youjiEdit"></div>';
        addChildRight += '<input type="hidden" name="A'+right_id+'-'+child+'_UP" id="A'+right_id+'-'+child+'_UP_input">';
        addChildRight += '</div>';
        addChildRight +='</div>';
        addChildRight +='</div>';

        //$('.zhangjieSeed .ChildCatalog:last').after(addChildLeft);
        $(th).before(addChildLeft);
        //.zhangjieCon 类右边的设计 、是根据 div 的个数
        var childs  =child-1;
        if(childs==0){
            $("div[id=A"+right_id+"]").after(addChildRight);
        }else{
            $('div[id=A'+right_id+'-'+childs+']').after(addChildRight);
        }
        //  子目录的 z_id
        var  child_id  = 'A'+right_id+'-'+child;
        //============
        //获取 公共 的ajax_noteid
        var ajax_noteid = $("#ajax_noteid").val();

       // alert(ajax_noteid);
        //获取 父级 的id
        var parentid    = $("#A"+right_id).attr("data-id");


        $.ajax({
            type: "GET",
            url: "/notes/ajax_zid",
            data: {child_id: child_id,ajax_noteid:ajax_noteid,parentid:parentid},
            success: function(data){
                if(ajax_noteid=='-1'){
                    $("#ajax_noteid").val(data);
                }
                $("#"+main_id+'-'+child).click();

            }
        });


    }
    //添加主章节
    $(".addMain").click(function(){
        var  text = $('.zhangjieBody .zhangjieCon:last input').val();
        var  text1 = $('.zhangjieBody .zhangjieCon:last textarea').val();
        if(text==''||text1==''){
            layer.msg('{__("上一章节需填写")}', {icon:5,time:1000});

            return;
        }
        var  zhangjie  = $(".zhangjieSeed").length*1;
        var  s        = $('.zhangjieSeed:last').attr;
        // 新的主章节左边
        var newLeftAdd ='<div class="zhangjieSeed">';
            newLeftAdd+='<div onclick="s(this)" class="ClickSeed MainCatalog noOnthisSeed" id="M'+zhangjie+'">';
            newLeftAdd+='<h4><span></span>章节'+(zhangjie-1)+'<a style="display: none;" name ="delete" onclick="dele(this)" data-id ="M'+zhangjie+'" href="javascript:void(0);"></a></h4>';
            newLeftAdd+='</div>';
            newLeftAdd+='<div class="addChild" onclick="chil(this)">';
            newLeftAdd+='<a href="javascript:void(0);">添加子目录</a>';
            newLeftAdd+='</div>';
            newLeftAdd+='<div class="clearfix"></div>'
            newLeftAdd+='</div>';

        // 新的主章节 右边
        var newRightAdd ='<div class="zhangjieCon" data-name="">';
            newRightAdd+='<div style="" class="zhangjieBodyMain" id="A'+zhangjie+'">';
            newRightAdd+='<div class="inputTit">';
            newRightAdd+='<p>A'+zhangjie+'</p>';
            newRightAdd+='<span></span>';
            newRightAdd+='</div>';
            newRightAdd+='<div class="zhangjieA none">';
            newRightAdd+='<div class="zhangjieBiaoti">';
            newRightAdd+='<input dayid="0" isnew="true" name ="A'+zhangjie+'" class="" maxlength="40" type="text">';
            newRightAdd+='<label style="display: block;" class="zhangjieTitle"></label>';
            newRightAdd+='</div>';
            newRightAdd+='<div class="zjshengxiazi"><em>0</em>/40</div>';
            newRightAdd+='<div class="youjiMain">';
            newRightAdd+='<div class="youjitit"><a href="javascript:void(0)" onclick="up_pic(this)" class="edui-icon"></a></div>';
            newRightAdd+='<div contentEditable="true" id= "A'+zhangjie+'_UP" onblur="blurs(this)" class="youjiEdit"></div>';
            newRightAdd+='<input type="hidden" name="A'+zhangjie+'_con" id="A'+zhangjie+'_UP_input">';
            newRightAdd+='</div>';
            newRightAdd+='</div>';
            newRightAdd+='</div>';
            newRightAdd+='</div>';

        $('.zhangjieTit .zhangjieSeed:last').after(newLeftAdd);
        $('.zhangjieBody .zhangjieCon:last').after(newRightAdd);

        //定义 主菜单/主目录 的 id
          var main_id = "A"+zhangjie;
       //===============
        //获取 公共 ajax_noteid
        var ajax_noteid = $("#ajax_noteid").val()

         // alert(ajax_noteid);

        $.ajax({
            type: "GET",
            url: "/notes/ajax_cookie",
            data: {main_id:main_id,ajax_noteid:ajax_noteid},
            dataType: 'json',
            success: function(data){

                if(ajax_noteid=='-1'){
                    $("#ajax_noteid").val(data.note);
                    $("#A"+zhangjie).attr("data-id",data.pid)
                }else{

                    $("#A"+zhangjie).attr("data-id",data.pid)
                }
                $("#M"+zhangjie).click();

            }
        });

    });
    function s(t){
        var Catalogparent = $(t);
        var active = Catalogparent.hasClass('noOnthisSeed');//hasClass检查 是否有这个类名 you 返回true
        var sideId = Catalogparent.attr('id');

        $(".zhangjieCon input[dayid=0]").each(function(index, element) {

            text = $(this).val()
            $(this).parent().parent().prev().children("p").text(text) ;

        });

        if(active){
            $('.ClickSeed').removeClass('onthisSeed').addClass('noOnthisSeed');
            Catalogparent.removeClass('noOnthisSeed').addClass('onthisSeed');
            Catalogparent.parent().addClass("active").siblings().removeClass("active");
        }

        $(".zhangjieBodySeed input").each(function(index, element) {

            text = $(this).val()

            $(this).parent().parent().prev().children("p").text(text) ;
        });

        ArticlesCrap(sideId);
    }

    function ArticlesCrap(sideId) {
        var ArticlId = "A"+sideId.substring(1);
        sideName = $("[id="+ArticlId+"]").attr("id");
        sideindex =  $("#"+sideName).index();
        $("#"+sideName).prevAll().removeClass("none");
        $("#"+sideName).nextAll().addClass("none");
        $("#"+sideName).parent().nextAll().addClass("none");
        $(".zhangjieCon").children().removeClass('articl');
        $("#"+sideName).addClass('articl').removeClass("none");

        $("#"+sideName).parent().removeClass("none");
        $("#"+sideName).parent().siblings().children(".zhangjieBodyChild").addClass("none")

        var target = "$('#'"+sideName+")";
        if (target != null && target.length > 0) {
            var targets = target.offset().top; //目标对象的位置，比如D
            var positionTop = targets - 10 + "px";

            $("html, body").animate({ scrollTop: positionTop }, 500); //500是ms,也可以用slow代替
        }
    }
  //上传图片
  $(".upbtn").click(function(){
    var type = $(this).attr('data-type');

    upload(type);
  })
   function up_pic(th){
        var this_id  = $(th).parent().next().attr("id");

              // var div_neirong   =  $("#p").html();//HTML;
       upload(this_id);
   }
  //上传模板
  function upload(type){

    // 上传方法
    $.upload({
      // 上传地址
      url: SITEURL+'notes/ajax_upload_picture',
      // 文件域名字
      fileName: 'filedata',
      fileType: 'png,jpg,jpeg,gif',
      // 其他表单数据
      params: {},
      // 上传之前回调,return true表示可继续上传
      onSend: function() {
        return true;
      },
      // 上传之后回调
      onComplate: function(data) {
        var data = $.parseJSON(data);
        //如果上传成功
        if(data.status){
          if(type == 'banner')//08.24  现在没有用
          {
            $("#banner_litpic").css({'background':'url('+data.litpic+') center no-repeat','backgroundSize':'100%'});
            $("#banner").val(data.litpic);
          }
          else if(type == 'cover')
          {
            $("#cover_litpic").attr('src',data.litpic).siblings('span').empty();
            $("#cover").val(data.litpic);
          }else{
              var o;
              var s =data.litpic;
              var txt=document.getElementById(""+type+"");
              o=document.createElement("IMG");
              o.src=s;
             // o.width =200;  设置 上传图片的大小
            //  o.height =100;
             // txt.appendChild(o);
              var j ='<img src='+s+'>';
             // insertHtmlAtCaret(txt,j);
              insertHTML(txt,j)
              var txt_html  = $("#"+type+"").html();
              var inp  = $('#'+type+'_input');
              inp.val(txt_html);

          }
        }
      }
    });
  }
    //失去焦点
  function blurs(th){

    var this_con= $(th).html();
      $(th).next('input').val(this_con);
    }

    $(window).click(function(e)
    {
        if (window.getSelection)
        {
            var getevent=e.srcElement?e.srcElement:e.target;//不要告诉我不知道这句的意思
          // console.log(getevent.i,getevent.tagName);
            if(getevent.className!=null && getevent.className=="youjiEdit"||getevent.className=="youjiEdit flag")
            {

                   $("#"+getevent.id).addClass('flag');

            }else{
                var userAgent = navigator.userAgent; //取得浏览器的userAgent字符串
                if(userAgent.indexOf("Chrome") > -1 && userAgent.indexOf("Safari") > -1)
                {
                   if(getevent.parentElement.className=='youjiEdit'||getevent.parentElement.className=='youjiEdit flag'){

                       $("#"+getevent.parentElement.id).addClass('flag');
                   }else{
                       if(getevent.tagName!=null&&getevent.tagName=='INPUT'){

                       }else{
                           if(getevent.className!="edui-icon"){

                               $('.youjiEdit').removeClass('flag');
                           }

                       }
                   }
                }else{
                    if(getevent.tagName!=null&&getevent.tagName=='INPUT'){

                    }else{
                        if(getevent.className!="edui-icon"){

                            $('.youjiEdit').removeClass('flag');
                        }

                    }
                }

            }
        }

    })
    function insertHTML(txt,html)
    {
        var dthis=txt;//要插入内容的某个div,在标准浏览器中 无需这句话

        var sel, range;

        if(!$(dthis).hasClass("flag")){
            $(dthis).html(dthis.innerHTML+html);
            return;
        }
        if (window.getSelection)
        {
            // IE9 and non-IE
            sel = window.getSelection();
            if (sel.getRangeAt && sel.rangeCount) {
                range = sel.getRangeAt(0);
                range.deleteContents();
                var el = document.createElement('div');
                el.innerHTML = html;
                console.log(el+'8:'+range);
                var frag = document.createDocumentFragment(), node, lastNode;
                while ( (node = el.firstChild) )
                {
                    lastNode = frag.appendChild(node);
                }

                range.insertNode(frag);
                if (lastNode) {
                    range = range.cloneRange();
                    range.setStartAfter(lastNode);
                    range.collapse(true);
                    sel.removeAllRanges();
                    sel.addRange(range);
                }
            }
        }
        else if (document.selection && document.selection.type !='Control')
        {
            $(dthis).focus(); //在非标准浏览器中 要先让你需要插入html的div 获得焦点
            ierange= document.selection.createRange();//获取光标位置
            ierange.pasteHTML(html);    //在光标位置插入html 如果只是插入text 则就是fus.text="..."
            $(dthis).focus();

        }
    }


</script>