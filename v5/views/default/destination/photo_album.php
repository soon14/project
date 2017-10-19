<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title>相册</title>
    {include "pub/varname"}
    {Common::css('common/bootstrap-min.css,common/public.css')}
    {Common::css('photo.css,base.css,extend.css')}
    {Common::js('jquery.min.js,base.js,common.js,piccontent.min.js')}
    {$GLOBALS['cfg_tongjicode']}
</head>

<body>
{request "pub/header"}

  <div class="big">
  	<div class="wm-1200">

     <div class="st-guide" style="line-height: 40px">
            <a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="/destination/">{$channelname}</a>&gt;&nbsp;&nbsp;
            {loop $predest $dest}
            <a href="/{$dest['pinyin']}/?param=survey">{$dest['kindname']}</a>
            {/loop}
        </div><!--面包屑-->

      <div class="st-photoshow-box" style="">
      	<div class="photo-main-con">

            <?php //var_dump($info);?>
          <!--大图展示-->
          <div class="picshow">
            <div class="picshowtop">
              <a href="#"><img src="" alt="" id="pic1" curindex="0" /></a>
              <a id="preArrow" href="javascript:void(0)" class="contextDiv" title="上一张"><span id="preArrow_A"></span></a>
              <a id="nextArrow" href="javascript:void(0)" class="contextDiv" title="下一张"><span id="nextArrow_A"></span></a>
            </div>

            <div class="picshowtxt">
              <div class="picshowtxt_left"><span>1</span>/<i>{count($info)}</i></div>
              <div class="picshowtxt_right"></div>
            </div>
            <div class="picshowlist">
              <div class="picshowlist_mid">
                <div class="picmidleft"> <a href="javascript:void(0)" id="preArrow_B"><img src="{$GLOBALS['cfg_public_url']}images/left1.jpg" alt="上一个" /></a> </div>
                <div class="picmidmid">
                  <ul>
                    {loop $info $p}
                     <li><a href="javascript:void(0);"><img src="{$p[0]}" alt="" bigimg="{$p[0]}" /></a></li>
                    {/loop}

                  </ul>
                </div>
                <div class="picmidright"> <a href="javascript:void(0)" id="nextArrow_B"><img src="{$GLOBALS['cfg_public_url']}images/right1.jpg" alt="下一个" /></a> </div>
              </div>
            </div>
          </div>
    
    
        </div>


      </div>
    
    </div>
  </div>
{request "pub/footer"}
{Common::js('layer/layer.js')}

<script>
    $(function(){
        $(".btn_pl").click(function(){
            var msg = $("#msg").val();
            var checkcode = $("#checkcode").val();
            var productid = $("#productid").val();
            if(msg.length<5){
                layer.alert('{__("comment_not_empty")}', {
                    icon: 5,
                    title: '{__("notice")}'

                })
                return false;
            }
            if(checkcode==''){
                layer.alert('{__("checkcode_empty")}', {
                    icon: 5,
                    title: '{__("notice")}'

                })
                return false;
            }
            $.ajax({
                type:'POST',
                url:SITEURL+'pub/ajax_add_comment',
                data:{
                    productid:productid,
                    content:msg,
                    checkcode:checkcode,
                    typeid:6

                },
                success:function(data){
                    if(data==1){
                        layer.alert('{__("checkcode_error")}', {
                            icon: 5,
                            title: '{__("notice")}'

                        })


                    }else if(data==3){

                        layer.msg('{__("comment_success")}',{
                            icon:6,
                            time:1500
                        });
                        location.reload();
                    }else{
                        layer.alert('{__("comment_failure")}', {
                            icon: 5,
                            title: '{__("notice")}'

                        })
                    }
                    //重新加载验证码
                    $("#imgcheckcode").attr('src',"{$cmsurl}captcha?"+Math.random());

                }

            })
        })

        //关注点击
        $("#fav").click(function(){
            var productid = $("#productid").val();
            $.ajax({
                type:'POST',
                url:SITEURL+'photo/ajax_add_focus',
                data:{
                    productid:productid


                },
                success:function(data){
                   if(data==1){

                       $("#fav").addClass('gz').removeClass('mg');
                        layer.msg('{__("focus_success")}',{
                            icon:6,
                            time:1500
                        });

                    }else{
                        layer.alert('{__("focus_failure")}', {
                            icon: 5,
                            title: '{__("notice")}'

                        })
                    }

                }

            })

        })

    })
</script>
</body>
</html>
