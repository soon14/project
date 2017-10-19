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
                <span class="on"><s></s>截图活动数据</span>
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

                        <div style="margin: 5px 0px;height: 30px">
                            <ul>
                                {loop $activity $v}
                                <li style="float: left;margin-right: 10px;"><input type="radio" name="activity" value="{$v['id']}" onchange="changeactid(this)" {if $v['ishidden']==2}checked="checked"{/if}><a href = "javascript:" data-id="$v['id']">{$v['activity_name']}</a></li>
                                {/loop}
                            </ul>
                        </div>

                        <form method="post" action="{$GLOBALS['cfg_basehost']}/newtravel/cutpicture/writeExcel" id='excel' enctype = 'multipart/form-data' >
                        <a href="javascript:;"  class="normal-btn write" title="导出Excel报表">导入Excel</a>
                        <input  type="file" name="file_stu" id="file_stu" style="float: right"/>
                        </form>

                        <form id="st_form" method="get" action="{$GLOBALS['cfg_basehost']}/newtravel/cutpicture/partUser?cutpid={$cutpid}">

                            <div class="verify-list-tit">

                                <strong class="bt">截图活动数据</strong>

                            </div>
                            <div class="verify-search-box">



                                <select name="paysource" onchange="togPaysource()" class="bar-select" style="width: 90px;height: 32px;border:1px solid #666;margin-left:3px;float: left">

                                    <option value="" {if $get['paysource']==''||$get['paysource']==null}selected=selected{/if}>是否领奖</option>

                                    {loop $paysources $k $v}

                                    <option value="{$k}" name="p{$k}" {if $get['paysource']==$k&&$get['paysource']!==null&&$get['paysource']!==''}selected=selected{/if}>{$v}</option>

                                    {/loop}

                                </select>
                                <div class="verify-search-con">

                                    <input type="text" name="searchKey" class="search-txt" style="width: 230px" placeholder="请输入编号/手机号" value="{$get['searchKey']}"/>

                                    <input type="button" class="search-btn" value="搜索"/>

                                </div>

                                <a href="javascript:;"  class="normal-btn btn_excel" title="导出Excel报表">导出Excel</a>

                            </div>

                            <div class="verify-con">

                                <table class="verify-table" width="100%" border="0">

                                    <tr>

                                        <th width="8%" height="40" align="center" scope="col">头像</th>
                                        <th width="8%" height="40" align="center" scope="col">截图</th>
                                        <th width="2%" height="40" align="center" scope="col">编号</th>
                                        <th width="7%" height="40" align="center" scope="col">昵称</th>
                                        <th width="5%" height="40" align="center" scope="col">是否关注</th>

                                        <th width="10%" height="40" align="center" scope="col">参与时间</th>

                                        <th width="10%" height="40" align="center" scope="col">预留手机号</th>

                                        <th width="10%" height="40" align="center" scope="col">是否领奖</th>
                                        <th width="15%" height="40" align="center" scope="col">领奖时间</th>

                                    </tr>

                                    {loop $info $v}

                                    <tr>

                                        <td>

                                            <div class="cp">

                                                <a href="javascript:">

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
                                        <td>

                                            <div class="cp">

                                                <a href="javascript:" >

                                                    <div class="pic">

                                                        <img src="{$v['userimg']}" width="112" height="80" alt=""/>

                                                    </div>

                                                    <div class="con">

                                                        <p class="bt"></p>

                                                        <p class="hm"></p>

                                                    </div>

                                                </a>

                                            </div>

                                        </td>
                                        <td><span class="wxf">{$v['id']}</span></td>
                                        <td><span class="wxf">{$v['nickname']}</span></td>
                                        <td><span class="price">{if $v['isgz']=='1'}关注{else}未关注{/if}</span></td>
                                        <td><span class="price">{$v['addtime']}</span></td>
                                        <td><span class="price">{$v['phone']}</span></td>


                                        <td>


                                                {if $v['istakeprize']==0}
                                               <a href ="javascript:">未领奖</a>
                                                <br/>
                                                <br/>
                                                <a href ="javascript:" class="total notprize"  data-id="{$v['id']}">修改领奖状态</a>

                                              {else}
                                                <a href="javascript:" id="yesprize">已领奖</a>
                                                {/if}
                                        </td>
                                        <td>
                                            {if $v['istakeprize']==0}

                                            {else}
                                            {$v['take_time']}
                                            {/if}
                                        </td>

                                    </tr>

                                    {/loop}
                                    <tr name="tr1">
                                        <td></td>
                                        <td colspan="8" align="right">
                                            <a href ="/newtravel/cutpicture/partUser?page=1&status={$get['status']}&paysource={$get['paysource']}" class="page" style="margin-right: 8px">首页</a>
                                            <?php if($page!=1){?><a href="/newtravel/cutpicture/partUser?page={$page-1}&status={$get['status']}&paysource={$get['paysource']}" class="page">上一页</a><span>...</span>
                                            <?php }
                                            if($page+10<=$totalPage){
                                                for($i=$page;$i<$page+10;$i++){
                                                    ?>
                                                    <a href="/newtravel/cutpicture/partUser?page=<?php echo ($i);?>&status={$get['status']}&paysource={$get['paysource']}" style="border: 1px solid #666;padding: 0px 2.5px;margin: 10px 2.5px 0px 2.5px;" <?php if($page==$i){?>class="h3"<?php } ?>><?php echo $i;?></a>
                                                <?php }
                                            }
                                            else{
                                                for($i=$page;$i<$totalPage+1;$i++){
                                                    ?>
                                                    <a href="/newtravel/cutpicture/partUser?page=<?php echo ($i);?>&status={$get['status']}&paysource={$get['paysource']}" style="border: 1px solid #666;padding: 0px 2.5px;margin: 10px 2.5px 0px 2.5px;" <?php if($page==$i){?>class="h3"<?php } ?>><?php echo $i;?></a>
                                                <?php }
                                            }
                                            if($page<$totalPage){?>
                                                <a href="/newtravel/cutpicture/partUser?page={$page+1}&status={$get['status']}&paysource={$get['paysource']}" class="page">下一页</a><?php } ?>
                                            <a href ="/newtravel/cutpicture/partUser?page={$totalPage}&status={$get['status']}&paysource={$get['paysource']}" class="page" style="margin-left: 8px;">尾页</a>

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



<script>

    $(function(){
        //  导入功能
        $(".write").click(function(){
          $("#excel").submit();

        });
         //==================== fengjishu end
        //导出excel

        $(".btn_excel").click(function(){

            var  status    = $(this).siblings('select[name=status]').val();

            var  istake    =  $(this).siblings('select[name=paysource]').val();
             //  alert(status+istake);
            var url = '/newtravel/cutpicture/genexcel?status='+status+'&istake='+istake;
//return false;
            window.open(url);

        })

         //=====================fengjishu  end
        //
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

             var  url = '/newtravel/cutpicture/changestatus';

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
</script>

</body>

</html>

