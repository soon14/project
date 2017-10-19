<!doctype html>

<html>

<head>

    <meta charset="utf-8">

    <title>我的游记-{$webname}</title>

    {include "pub/varname"}

    {Common::css('user.css,base.css,extend.css')}
    {Common::css('common/bootstrap-min.css,common/public.css')}
    {Common::js('jquery.min.js,base.js,common.js')}



</head>



<body>



{request "pub/header"}



<div class="big" style="margin-top: 20px">

    <div class="wm-1200">



        <div class="st-guide">

            <a href="{$cmsurl}">首页</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;我的游记

        </div><!--面包屑-->



        <div class="st-main-page">



            {include "member/left_menu"}



            <div class="user-order-box">

                <div class="user-home-box">

                    <div class="tabnav">

                        <span id="like_gl" {if $_GET['gl']=='gl'}class="on"{/if}>喜欢的攻略</span>
                        <span id="like_travel" {if $_GET['gl']!='gl'}class="on"{/if}>喜欢的游记</span>
                    </div>
                    {if $gl!='gl'}  

                    <!-- 我喜欢的游记  start-->
                    <div class="user-home-order"  id="travel_div" style="display: block">

                        {if !empty($list)}

                        <div class="order-list">

                            <table width="100%" border="0">

                                <tr>

                                    <th width="50%" height="38" bgcolor="#fbfbfb" scope="col">游记标题</th>

                                    <th width="15%" height="38" bgcolor="#fbfbfb" scope="col">板块</th>

                                    <th width="25%" height="38" bgcolor="#fbfbfb" scope="col">时间</th>

                                    <th width="10%" height="38" bgcolor="#fbfbfb" scope="col">操作</th>

                                </tr>

                                {loop $list $row}

                                <tr>

                                    <td height="114">

                                        <div class="con">

                                            <dl>

                                                <dt><a href="#"><img src="{Common::img($row['litpic'])}" alt="{$row['title']}" /></a></dt>

                                                <dd>

                                                    <a class="tit" href="{$row['url']}" target="_blank">{$row['title']}</a>

                                                    <p>发表时间：{Common::mydate('Y-m-d H:i',$row['modtime'])}</p>

                                                </dd>

                                            </dl>

                                        </div>

                                    </td>

                                    <td align="center" style="text-align: center"> <span class="ywc">河北游记</span></td>

                                    <td align="center" style="text-align: center">
                                        <span class="ywc">喜欢于{Common::mydate('Y-m-d',$row['like_time'])}</span>

                                    </td>

                                    <td align="center" style="text-align: center">

                                        <a class="revise-yj" href="javascript:"  data-id="{$row['id']}">取消喜欢</a>


                                    </td>

                                </tr>

                                {/loop}



                            </table>

                            <div class="main_mod_page clear">

                                {$pageinfo}

                            </div><!-- 翻页 -->

                        </div>

                        {else}

                        <div class="order-no-have"><span></span><p>您现在还没有喜欢的游记，快去找找<a href="{$GLOBALS['cfg_basehost']}/notes/write">游记</a>发现精彩时刻！</p></div>

                        {/if}

                    </div>
                    <!-- 我喜欢的游记 end-->
                    {else}
                    <!-- 我喜欢的攻略 start  -->
                    <div class="user-home-order" id="gl_div">

                        {if !empty($list)}

                        <div class="order-list">

                            <table width="100%" border="0">

                                <tr>

                                    <th width="50%" height="38" bgcolor="#fbfbfb" scope="col">攻略标题</th>

                                    <th width="15%" height="38" bgcolor="#fbfbfb" scope="col">板块</th>

                                    <th width="25%" height="38" bgcolor="#fbfbfb" scope="col">时间</th>

                                    <th width="10%" height="38" bgcolor="#fbfbfb" scope="col">操作</th>

                                </tr>

                                {loop $list $row}

                                <tr>

                                    <td height="114">

                                        <div class="con">

                                            <dl>
<?php  //var_dump($row['piclist'])?>
                                                <dt><a href="{$row['url']}"><img src="{$row['piclist'][1][0]}" alt="{$row['title']}" /></a></dt>

                                                <dd>

                                                    <a class="tit" href="{$row['url']}" target="_blank">{$row['title']}</a>

                                                    <p>发表时间：{Common::mydate('Y-m-d H:i',$row['modtime'])}</p>

                                                </dd>

                                            </dl>

                                        </div>

                                    </td>
                                    <td align="center" style="text-align: center">

                                        <span class="ywc">{$row['plate']}</span>

                                    </td>

                                    <td align="center" style="text-align: center">

                                        <span class="ywc">喜欢于{Common::mydate('Y-m-d H:i',$row['like_time'])}</span>


                                    </td>

                                    <td align="center" style="text-align: center">

                                        <a class="revise-yj" href="javascript:;" data-id="{$row['id']}" >取消喜欢</a>
                                    </td>

                                </tr>

                                {/loop}


                            </table>

                            <div class="main_mod_page clear">

                                {$pageinfo}

                            </div><!-- 翻页 -->

                        </div>

                        {else}

                        <div class="order-no-have"><span></span><p>您现在还没有喜欢的攻略，快去找找<a href="{$GLOBALS['cfg_basehost']}/notes/write">攻略列表</a>发现精彩时刻！</p></div>

                        {/if}

                    </div >
                    <!-- 我喜欢的攻略end  -->
                    {/if}
                </div>

            </div><!--我的游记-->



        </div>



    </div>

</div>

{Common::js('layer/layer.js')}

{request "pub/footer"}

<script>

    $(function(){
         //  标签 切换
         $("#like_gl").click(function(){

             var url ="/member/index/likeNote?gl=gl";

             window.location.href =url;

         });

         $("#like_travel").click(function(){
            var url ="/member/index/likeNote";

            window.location.href =url;
        });
     // 取消 喜欢游记
         $(".revise-yj").click(function(){
           var id =  $(this).attr("data-id");

            var  url  ="/member/index/delLikenote";
            $.ajax({
                type:"POST",
                url :url,
                data :{id:id},
                success: function (data) {
                    
                   if(data){
                       window.location.reload();
                   }
                }

            })
        });


        //删除游记  wuyong

       /* $(".delete-yj").click(function(){

            var noteid = $(this).attr("data-noteid");

            layer.confirm('{__("notes_delete_content")}', {

                icon: 3,

                btn: ['{__("Abort")}','{__("OK")}'], //按钮,

                btn1:function(){

                    layer.closeAll();

                },

                btn2:function(){

                    $.ajax({

                        type:'POST',

            //            url:SITEURL+'member/index/ajax_delete_notes',

                        data:{noteid:noteid},

                        datatype:'json',

                        success:function(data){

                            if(data.status){

                                layer.msg('{__("notes_delete_ok")}', {icon:6,time:1000});

                                setTimeout(function(){location.reload()},1000);

                            }else{

                                layer.msg('{__("order_delete_failure")}', {icon:5,time:1000});

                            }

                        }

                    })

                },

                cancel: function(index, layero){

                    layer.closeAll();



                }

            });

        })*/

    })

</script>



</body>

</html>

