<!doctype html>

<html>

<head>

    <meta charset="utf-8">

    <title>活动数据</title>
    <script type="text/javascript" src="/newtravel/public/js/hdate/hdate.js"></script>
    <link type="text/css" href="/newtravel/public/js/hdate/hdate.css" rel="stylesheet" />

    {php echo Common::getCss('style.css,base.css');}

    <link type="text/css" href="/min/?f=/plugins/supplier/public/default/pc/css/style.css,/plugins/supplier/public/default/pc/css/base.css" rel="stylesheet"  />

    <script type="text/javascript"src="/min/?f=/plugins/supplier/public/default/pc/js/jquery.min.js"></script>


    <style>
       .normal-btn{
           width:80px;height: 30px;line-height:30px;float: right;margin-right: 50px;background:#4CC34F;color: white;text-align: center;
       }
       .search-btn1 {
           float: left;
           color: #fff;
           width: 90px;
           height: 30px;
           line-height: 30px;
           margin-left: 15px;
           border: 0;
           font-size: 14px;
           cursor: pointer;
           transition: all ease-in-out .3s;
           -webkit-transition: all ease-in-out .3s;
           -moz-transition: all ease-in-out .3s;
           -ms-transition: all ease-in-out .3s;
           background: #4cc34f;
       }
    </style>

</head>



<body>



<div class="page-box">



    <!-- 顶部 -->



    {template 'stourtravel/public/leftnav'}

    <!-- 侧边导航 -->



    <div class="main" style="top:3px;left: 100px;padding-bottom: 30px">
        <div class="w-set-con">
            <div class="w-set-tit bom-arrow" style="margin-left: 1.5%;width: 98%">
                <span class="on"><s></s>活动数据</span>
                {if $username=='feng'}
                <span><s></s>更新用户的ip区域</span>
                {/if}

                <a href="javascript:;" class="refresh-btn" onclick="window.location.reload()">刷新</a>
            </div>
        </div>

        <div class="content-box" style="">

            <div class="frame-box">

                <div class="frame-con">

                    <div class="verify-box">

                        <div style="width: 120px;height: 15px;padding: 15px;margin-bottom: 35px;font-size: 15px;"><a href="/newtravel/activity/index?actid={$acid}" style="color: #FC6000;"><marquee direction="left" >&rarr;返回活动数据</marquee></a></div>

                        <div style="margin: 5px 0px;height: 30px">

                        </div>
                        <form id="st_form" method="get" action="{$GLOBALS['cfg_basehost']}/newtravel/activity/vote">
                            <input type="hidden" name = 'actid' value="{$acid}">

                            <div class="verify-list-tit"><strong class="bt">用户投票数据</strong></div>
                            <div class="verify-search-box">

                      <div class="verify-search-con">

                                    <input type="text" name="searchKey" class="search-txt" style="width: 230px" placeholder="请输入昵称" value="{$get['searchKey']}"/>

                                    <input type="button" class="search-btn" value="搜索"/>
                                    <input type="button" class="search-btn1" value="刷新" onclick="window.location.reload()"/>

                                </div>
                                <a href="javascript:;"  class="normal-btn btn_excel" title="导出Excel报表">导出Excel</a>

                            </div>

                            <div class="verify-con">

                                <table class="verify-table" width="100%" border="0">
                                    <tr>
                                        <td colspan="7" align="left"><a href="javascript:" onclick="selects()">全选</a></td>
                                    </tr>
                                    <tr>
                                        <th>选择</th>
                                        <th width="20%" height="40" align="center" scope="col">头像</th>
                                        <th width="5%" height="40" align="center" scope="col">编号</th>
                                        <th width="10%" height="40" align="center" scope="col">昵称</th>
                                        <th width="5%" height="40" align="center" scope="col">是否关注</th>

                                        <th width="15%" height="40" align="center" scope="col">分享的页面/openid</th>

                                        <th width="20%" height="40" align="center" scope="col">分享的类型</th>

                                        <th width="30%" height="40" align="center" scope="col">分享时间</th>



                                    </tr>
                                     <?php //var_dump($info)?>
                                    {loop $info $v}

                                    <tr>
                                         <td name="ch" data-openid="{$v['openid']}"><input type="checkbox" name="ch" value="{$v['openid']}"> </td>
                                        <td>

                                            <div class="cp">

                                                <a href="/newtravel/activity/vote?page={$page}&openid={$v['openid']}">

                                                    <div class="pic">

                                                        <img src="{$v['headimgurl']}" width="112" height="80" alt=""/>

                                                    </div>

                                                    <div class="con">

                                                        <p class="bt"></p>

                                                        <p class="hm"></p>

                                                    </div>

                                                </a>

                                            </div>

                                        </td>
                                        <td><span class="wxf">{$v['bian']}</span></td>
                                        <td><span class="wxf">{$v['nickname']}</span></td>
                                        <td><span class="price">{if $v['isgz']=='1'}关注{else}未关注{/if}</span></td>
                                        <td>
                                            <span class="price">
                                                {$v['openid']}
                                            <br/>
                                               <a href="javascript:" class="insert_bbs_userinfo" data-openid="{$v['openid']}">插入信息</a>

                                            </span>
                                        </td>

                                        <td><span class="num"></span></td>

                                        <td><span class="total"></span></td>



                                    </tr>

                                    {/loop}
                                    <tr name="tr1">
                                        <td>
                                            <a href="javascript:" class="insert_bbs" data-openid="{$v['openid']}">插入信息</a>
                                        </td>
                                        <td colspan="8" align="right">
                                            <a href ="/newtravel/activity/vote?page=1&actid={$acid}" class="page" style="margin-right: 8px">首页</a>
                                            <?php if($page!=1){?><a href="/newtravel/activity/vote?page={$page-1}&actid={$acid}" class="page">上一页</a><span>...</span>
                                            <?php }
                                            if($page+10<=$totalPage){
                                                for($i=$page;$i<$page+10;$i++){
                                                    ?>
                                                    <a href="/newtravel/activity/vote?page=<?php echo ($i);?>&actid={$acid}" style="border: 1px solid #666;padding: 0px 2.5px;margin: 10px 2.5px 0px 2.5px;" <?php if($page==$i){?>class="h3"<?php } ?>><?php echo $i;?></a>
                                                <?php }
                                            }
                                            else{
                                                for($i=$page;$i<$totalPage+1;$i++){
                                                    ?>
                                                    <a href="/newtravel/activity/vote?page=<?php echo ($i);?>&actid={$acid}" style="border: 1px solid #666;padding: 0px 2.5px;margin: 10px 2.5px 0px 2.5px;" <?php if($page==$i){?>class="h3"<?php } ?>><?php echo $i;?></a>
                                                <?php }
                                            }
                                            if($page<$totalPage){?>
                                                <a href="/newtravel/activity/vote?page={$page+1}&actid={$acid}" class="page">下一页</a><?php } ?>
                                            <a href ="/newtravel/activity/vote?page={$totalPage}&actid={$acid}" class="page" style="margin-left: 8px;">尾页</a>

                                            <span class="page" style="margin-left: 20px" >总共</span><span id="total_page" class="page" style="margin-left: 10px;border: 1px #666 solid;width: 30px ;height: 15px;text-align: center" >{$totalPage}</span>
                                        </td>
                                    </tr>


                                </table>




                                {if empty($info)}

                                <div class="nofound-order">对不起！没有符合条件，请尝试其他搜索条件。</div>

                                <!-- 搜索无结果 -->

                                {/if}

                        </form>

                    </div>

                </div>

                <!-- 验单记录 -->



            </div>

        </div style>



    </div>

</div>

<!-- 主体内容 -->



</div>


<script> </script>
<script>

    $(function(){
         //==================== fengjishu end
        //导出excel

        $(".btn_excel").click(function(){


            var url = '/newtravel/activity/genexcel_share?actid={$acid}';
//return false;
            window.open(url);

        })
        //  批量 插入信息
        $(".insert_bbs").click(function(){
            var  data = new Array() ;

                $('input[name=ch]:checked').each(function () {
                    var this_openid  = $(this).val();
                    data.push(this_openid);
                })
           var datas = data.join(',');
            var  url = '/newtravel/activity/insert_bbs_users';
            $.ajax({
                type: 'POST',
                url :url,
                data:{openids:datas},
                dataType:'json',
                success:function(data){
                    alert(data);return;
                    if(data.status){
                        alert(data.msg)
                        window.location.reload()
                    }else{
                        alert(data.msg)
                    }

                }


            })

        });
        //  插入 用户信息
        $(".insert_bbs_userinfo").click(function(){
            var  openid  = $(this).attr('data-openid');
            var url  = '/newtravel/activity/insert_bbs_user';
            $.ajax({
                type: 'POST',
                url :url,
                data:{openid:openid},
                dataType:'json',
                success:function(data){
                    if(data.status){
                        alert(data.msg)
                        window.location.reload()
                    }else{
                        alert(data.msg)
                    }

                }


            })
        });
         //=====================fengjishu  end
        $("#nav_all_order").addClass('on');

        $('body').delegate('.add-list','click',function() {

            $(this).parent().after('<li><input name="num[]" type="text" class="num-list" placeholder="请输入短信码进行搜索"/><span class="add-list">增加</span></li>');

            $(this).remove();

        });

        $(".search-btn").click(function(){

            $("#st_form").submit();

        });
       $(".notprize").click(function () {

              var  id =$(this).attr('data-id');

             var  url = '/newtravel/activity/changestatus';

           $.ajax({
               type: 'POST',
               url :url,
               data:{id:id},
               dataType:'json',
               success:function(data){
                  if(data.status){
                      alert(data.msg)
                      window.location.reload()
                  }else{
                      alert(data.msg)
                  }

               }


           })
       })
    });
    function togStatus(ele)

    {  $("#st_form").submit();


    }
    function togPaysource(){
        $("#st_form").submit();
    }
    function changeactid(th){
        var  acid   = $(th).val();
        $.ajax({
            type:"POST",
            url :"/newtravel/activity/changeacid",
            data:{acid:acid},
            success: function (data) {
                window.location.reload()
            },
            error:  function(XMLHttpRequest, textStatus, errorThrown){

                alert(textStatus);

            }
        });
    }
    function selects(){
        $('input[name=ch]').attr('checked','checked');
    }
</script>

</body>

</html>

