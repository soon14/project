<!doctype html>
<html>

<head>

    <meta charset="utf-8">

    <title>收入统计</title>
    <script type="text/javascript" src="/newtravel/public/js/hdate/hdate.js"></script>
    <link type="text/css" href="/newtravel/public/js/hdate/hdate.css" rel="stylesheet" />

    {php echo Common::getCss('style.css,base.css');}

    <link type="text/css" href="/min/?f=/plugins/supplier/public/default/pc/css/style.css,/plugins/supplier/public/default/pc/css/base.css" rel="stylesheet"  />

    <script type="text/javascript"src="/min/?f=/plugins/supplier/public/default/pc/js/jquery.min.js"></script>


    <style>
       .normal-btn{
           width:80px;height: 30px;line-height:30px;float: right;margin-right: 50px;background:#4CC34F;color: white;text-align: center;
       }
        .border{
            border-left:solid 1px #e3e8f3;
            padding: 10px;
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

                <a href="javascript:;" class="refresh-btn" onclick="window.location.reload()">刷新</a>
            </div>
        </div>

        <div class="content-box" style="padding-top: 0px">

            <div class="frame-box">

                <div class="frame-con">

                    <div class="verify-box">

                        <form id="st_form" method="get" action="{$GLOBALS['cfg_basehost']}/newtravel/distributor/distributorIncome">
                            <input type="hidden" name="distributor_id" value="{$distributor_id}">
                            <div class="verify-list-tit"><strong class="bt">收入统计</strong></div>
                            <div class="verify-search-box">

                                <select name="day" onchange="togPaysource()" class="bar-select" style="width: 90px;height: 32px;border:1px solid #666;margin-left:3px;float: left">

                                    {loop $dayArr $kday $day}
                                    <option value="{$kday}" {if $kday==$get['day']}selected="selected"{/if}>{$day}</option>
                                    {/loop}
                                </select>
<!--                                <div class="verify-search-con">-->
<!---->
<!--                                    <input type="text" name="searchKey" class="search-txt" style="width: 230px" placeholder="请输入编号/手机号/昵称" value="{$get['searchKey']}"/>-->
<!---->
<!--                                    <input type="button" class="search-btn" value="搜索"/>-->
<!---->
<!--                                </div>-->

<!--                                <a href="javascript:;"  class="normal-btn btn_excel" title="导出Excel报表" data-row="0">导出Excel</a>-->

                            </div>

                            <div class="verify-con">

                                <table class="verify-table" width="100%" border="0">

                                    <tr>
                                        <th width="20%" height="40" align="center" scope="col">分销商</th>
                                        <th width="20%" height="40" align="center" scope="col">时间</th>
                                        <th width="20%" height="40" align="center" scope="col">销售额</th>
                                        <th width="20%" height="40" align="center" scope="col">佣金</th>
                                        <th width="20%" height="40" align="center" scope="col">平均佣金比</th>

                                    </tr>
                                    {loop $info $v}
                                    <tr>
                                        <td class="border"><span class="">{$v['distributorlist']}</span></td>
                                        <td class="border"><span class="">{date("Y-m-d",$v['addtime'])}</span></td>
                                        <td class="border"><span class="wxf">{$v['price']}</span></td>
                                        <td class="border"><span class="wxf">{$v['distributorprice']}</span></td>
                                        <td class="border"><span class="price">{if $v['ratio']}{$v['ratio']}%{/if}</span></td>
                                    </tr>

                                    {/loop}

                                    <tr name="tr1">
                                        <td></td>
                                        <td colspan="8" align="right">

                                            <a href ="{$GLOBALS['cfg_basehost']}/newtravel/distributor/distributorIncome?page=1&distributor_id={$distributor_id}&day={$get['day']}" class="page" style="margin-right: 8px">首页</a>
                                            <?php if($page!=1){?><a href="{$GLOBALS['cfg_basehost']}/newtravel/distributor/distributorIncome?page={$page-1}&distributor_id={$distributor_id}&day={$get['day']}" class="page">上一页</a><span>...</span>
                                            <?php }
                                            if($page+10<=$totalPage){
                                                for($i=$page;$i<$page+10;$i++){
                                                    ?>
                                                    <a href="{$GLOBALS['cfg_basehost']}/newtravel/distributor/distributorIncome?page=<?php echo ($i);?>&distributor_id={$distributor_id}&day={$get['day']}" style="border: 1px solid #666;padding: 0px 2.5px;margin: 10px 2.5px 0px 2.5px;" <?php if($page==$i){?>class="h3"<?php } ?>><?php echo $i;?></a>
                                                <?php }
                                            }
                                            else{
                                                for($i=$page;$i<$totalPage+1;$i++){
                                                    ?>
                                                    <a href="{$GLOBALS['cfg_basehost']}/newtravel/distributor/distributorIncome?page=<?php echo ($i);?>&distributor_id={$distributor_id}&day={$get['day']}" style="border: 1px solid #666;padding: 0px 2.5px;margin: 10px 2.5px 0px 2.5px;" <?php if($page==$i){?>class="h3"<?php } ?>><?php echo $i;?></a>
                                                <?php }
                                            }
                                            if($page<$totalPage){?>
                                                <a href="{$GLOBALS['cfg_basehost']}/newtravel/distributor/distributorIncome?page={$page+1}&distributor_id={$distributor_id}&day={$get['day']}" class="page">下一页</a><?php } ?>
                                            <a href ="{$GLOBALS['cfg_basehost']}/newtravel/distributor/distributorIncome?page={$totalPage}&distributor_id={$distributor_id}&day={$get['day']}" class="page" style="margin-left: 8px;">尾页</a>

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
            //var  s  = confirm('导入功能')
            alert('导入功能需要数据库特定格式.导入前请确定excel 的数据特定格式');
          //  $("#excel").submit();

        });
         //==================== fengjishu end
        //导出excel

        $(".btn_excel").click(function(){

            var  status    = $(this).siblings('select[name=status]').val();

            var  istake    =  $(this).siblings('select[name=paysource]').val();
             //  alert(status+istake);
          //  var url = '/newtravel/cutpicture/genexcel_litpic?status='+status+'&istake='+istake+'&cutpid={$cutpid}';
            var url = '/newtravel/cutpicture/genexcel?status='+status+'&istake='+istake+'&cutpid={$cutpid}';
//return false;
            window.open(url);

        })
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

