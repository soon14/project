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



<div class="big">

    <div class="wm-1200">



        <div class="st-guide">

            <a href="{$cmsurl}">首页</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;我的游记

        </div><!--面包屑-->



        <div class="st-main-page">



            {include "member/left_menu"}



            <div class="user-order-box">

                <div class="user-home-box">

                    <div class="tabnav">

                        <span class="on">我的游记</span>

                        <span class="on" style="margin-left: 10px;" onclick="notes()">写游记</span>

                    </div><!-- 我的游记 -->

                    <div class="user-home-order">

                        {if !empty($list)}

                        <div class="order-list">

                            <table width="100%" border="0">

                                <tr>

                                    <th width="50%" height="38" bgcolor="#fbfbfb" scope="col">游记标题</th>

                                    <th width="25%" height="38" bgcolor="#fbfbfb" scope="col">状态</th>

                                    <th width="25%" height="38" bgcolor="#fbfbfb" scope="col">操作</th>

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

                                    <td align="center" style="text-align: center">



                                        {if $row['status']==-1}

                                        <span class="dcl">审核未通过</span>

                                        {elseif $row['status']==1}

                                        <span class="ywc">审核通过</span>

                                        {else}

                                        {if $row['is_dra']=='0'}

                                        <span class="wdp">审核中</span>

                                        {else}

                                        草稿

                                        {/if}



                                        {/if}



                                    </td>

                                    <td align="center" style="text-align: center">

                                        <a class="revise-yj" href="{$GLOBALS['cfg_basehost']}/notes/WRITE?noteid={$row['id']}&memberid={$row['memberid']}" target="_blank">修改</a>

                                        {if $row['status']!=1}

                                        <a class="delete-yj" href="javascript:;" data-noteid="{$row['id']}">删除</a>

                                        {/if}

                                    </td>

                                </tr>

                                {/loop}



                            </table>

                            <div class="main_mod_page clear">

                                {$pageinfo}

                            </div><!-- 翻页 -->

                        </div>

                        {else}

                        <div class="order-no-have"><span></span><p>您现在还没有发表游记，快去<a href="{$GLOBALS['cfg_basehost']}/notes/WRITE">发表游记</a>记录你的精彩时刻！</p></div>

                        {/if}

                    </div><!-- 我的游记 -->

                </div>

            </div><!--我的游记-->



        </div>



    </div>

</div>

{Common::js('layer/layer.js')}

{request "pub/footer"}

<script>

    $(function(){

        $('#nav_mynotes').addClass('on');



        //删除游记

        $(".delete-yj").click(function(){

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

                        url:SITEURL+'member/index/ajax_delete_notes',

                        data:{noteid:noteid},

                        dataType:'json',

                        success:function(data){



                            if(data.status){

                                layer.msg('{__("游记删除成功")}', {icon:6,time:1000});

                                setTimeout(function(){location.reload()},1000);

                            }else{

                                layer.msg('{__("游记删除失败")}', {icon:5,time:1000});

                            }

                        }

                    })

                },

                cancel: function(index, layero){

                    layer.closeAll();



                }

            });

        })

    })

    function notes(){

        location.href = '/notes/WRITE';
      //  window.open('/notes/write');

    }

</script>



</body>

</html>

