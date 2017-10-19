<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
        <script src="/newtravel/public/js/jquery-1.8.3.min.js" type="text/javascript"></script>
        <script src="/newtravel/public/js/common.js" type="text/javascript"></script>
        <script src="/newtravel/public/js/jquery.hotkeys.js" type="text/javascript"></script>
        <script src="/newtravel/public/js/msgbox/msgbox.js" type="text/javascript"></script>
        <script src="/newtravel/public/js/extjs/ext-all.js" type="text/javascript"></script>
        <script src="/newtravel/public/js/extjs/locale/ext-lang-zh_CN.js" type="text/javascript"></script>
        <link rel="stylesheet" href="/newtravel/public/js/msgbox/msgbox.css" type="text/css">
        <link rel="stylesheet" href="/newtravel/public/css/common.css" type="text/css">
        <link rel="stylesheet" href="/newtravel/public/js/extjs/resources/ext-theme-neptune/ext-theme-neptune-all-debug.css" type="text/css">
    <script>
        window.SITEURL =  "/newtravel/";
        window.PUBLICURL ="/newtravel/public/";
        window.BASEHOST="http://www.aitto.net";
        window.WEBLIST =  [{"webid":0,"webname":"\u4e3b\u7ad9"}]//网站信息数组
        $(function(){
            $.hotkeys.add('f', function(){parent.window.showIndex(); });
            $(document).click(function(e) {
                try{
                    parent.barmenu.close();
                }catch(e)
                {
                }
            });
        })
    </script>
    <script src="/newtravel/public/js/artDialog/lib/sea.js" type="text/javascript"></script>
    <link rel="stylesheet" href="/newtravel/public/css/base.css" type="text/css">
    <link rel="stylesheet" href="/newtravel/public/css/order.css" type="text/css">
    <link rel="stylesheet" href="/newtravel/public/css/jqtransform.css" type="text/css">
    </head>
<body style="background-color: #fff">
<div class="derive_box">
    <div class="derive_con">
        <form>
            <table class="derive_tb">
                <tr>
                    <th colspan="2">选择导出时间：</th>
                </tr>
                <tr>
                    <td colspan="2">
                        <span class="sel_item">
                            <input type="radio"  name="time" value="1" checked="checked">
                            <label>今日</label>
                        </span>
                       <span  class="sel_item">
                            <input type="radio"  name="time" value="2">
                            <label>昨日</label>
                        </span>
                        <span  class="sel_item">
                            <input type="radio"  name="time" value="3">
                            <label>最近7天</label>
                       </span>
                       <span  class="sel_item">
                            <input type="radio"  name="time" value="5">
                            <label>最近30天</label>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td><span><input type="radio"  name="time" value="6" ><label>自定义时间段：</label></span></td>
                    <td>
                        <input type="text" value="" id="starttime" class="time_box" onclick="calendar.show({ id: this })" />
                       <span class="derive_arrow_rig"></span>
                       <input type="text" id="endtime" class="time_box" onclick="calendar.show({ id: this })" />
                   </td>
                </tr>
                <tr><th>其他：</th></tr>
                <tr><td><label>订单状态：</label><select id="orderstatus"><option value="">所有</option>
                           <?php $n=1; if(is_array($statusnames)) { foreach($statusnames as $key => $status) { ?>
                               <option value="<?php echo $key;?>"><?php echo $status;?></option>
                           <?php $n++;}unset($n); } ?>
                        </select></td></tr>
            </table>
            <div class="now_derive_box"><a class="derive_btn btn_excel" href="javascript:;">立即导出</a></div>
        </form>
    </div>
</div>
</body>
<script>
    var typeid = '<?php echo $typeid;?>';
    $(function(){
       $(".btn_excel").click(function(){
           var timetype = $("input[name='time']:checked").val();
           var status=$("#orderstatus").val();
           var starttime = endtime = 0;
           if(timetype==6){
               var starttime = $('#starttime').val();
               var endtime = $("#endtime").val();
               if(starttime==''||endtime==''){
                   ST.Util.showMsg('请选择时间段',5,1000);
                   return false;
               }
           }
           var url = SITEURL+'order/genexcel/typeid/'+typeid+'/timetype/'+timetype+'?starttime='+starttime+'&endtime='+endtime+'&status='+status;
           window.open(url);
       })
    })
</script>
</html>