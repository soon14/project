<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>微信公众平台</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('style.css,base.css'); }
    {php echo Common::getScript('config.js');}
    {php echo Common::getScript("uploadify/jquery.uploadify.min.js"); }
    {php echo Common::getCss('uploadify.css','js/uploadify/'); }
    <style>
        .yhlb{
            width: 1000px;
            height: 40px;
            margin: 40px 50px 40px 30px;
            border-bottom: 1px #E8E6E4 solid;
        }
        .yhlb a{
            float: left;
            width: 110px;
            height: 20px;
            font-weight: bold;
            margin: 10px;
            line-height: 20px;
        }
        .yhlb a{

        }
        .czts{
            height: 31px;
            width: 1000px;
            margin: -20px 50px 0px 30px;
            padding: 10px;
            border-bottom: 1px solid #FFE8C9 ;
        }
        .czts a{
            font-size: 13px;
            color: #FF940A;
            font-weight: 700;
            float: left;

        }
        .czts span{
            float: left;
            height: 0px;
            width: 0px;
            margin-left: 10px;
            margin-top:5px;
            border-top: 8px solid #FF940A;
            border-right: 5px solid #fff;
            border-left: 5px solid #fff;
            border-bottom: 5px solid #fff;
        }
        .tishi{
            height: 98px;
            width: 988px;
            margin: -20px 50px 10px 30px;
            background: #FFFFFF;
            padding: 6px;
            border-top:1px solid #FFE8C9;
            margin-top:-20px;
        }
        .tishi ul li{
            list-style: inside;
            color: #888;
            line-height: 26px;

        }
        .table {
            width: 1000px;
            height: 40px;
            margin: 40px 50px 40px 30px;
        }
        .thead th {
            font-size: 13px;
            font-weight: 700;
            text-align: left;
            height: 27px;
            padding: 6px;
            color: #333;
            white-space: nowrap;
            border-top: solid 1px #fdddb5;
            border-bottom: solid 1px #fdddb5;
            background: #fff8f0;

        }
        .tbody{
            height: 81px;
            padding: 1px;
            background: rgb(255,255,255) none repeat scroll 0% 0%;
        }
        .tbody td{
            padding:6px !important;
            height: 26px;
            border-bottom: 1px #E8E6E4 solid;
            line-height: 26px;
        }
        .tbody td span{
            display: block;
            height: 22px;
            background: #FAFAFA;
            border-bottom: 1px  solid #E2E3EA;
            border-top: 1px  solid #ABADB3;
            border-left: 1px  solid #ABADB3;
            border-right: 1px  solid #E2E3EA;
            border-radius: 5px;
            padding: 3px;
        }
        .tbody:hover{
            background: #fbfbfb;
        }
        .tbody td span:hover{
            border:1px dashed #FF940A;


        }
        .table[name=t2]{
            width: 1000px;
            height: 40px;
            margin: 40px 50px 40px 30px;
        }
        .table[name=t2] tbody tr td:hover{
            background: fbfbfb;
        }
        .tips{
            color:#999999 ;
            padding-left: 5px;

        }
        .tips:hover{
            color: #000000;
        }
        .required{
            height: 36px;
        }
        .required:hover{
            background: #fbfbfb;
        }
        .txt{
            width: 356px;
            height: 22px;
            padding: 2px;
            background: #fbfbfb;
            border-top: 1px solid #ABADB3;
            border-left: 1px solid #ABADB3;
            border-bottom: 1px solid #E2E3EA;
            border-right: 1px solid #E2E3EA;
            border-radius: 5px;
        }
        #class_type{
            width: 256px;
            height: 26px;
        }
        .vatop{
            height: 38px;
        }
        label.validation {
            color: #555555;
            font-weight: 700;
            padding-left: 16px;
        }
        label.validation:hover{
            color: #000000;
        }
        .sp1{
            width: 40px;
        }
        .sp2{
            width: 252px;
         }
        .h3 {
            font-size: 15px;
            color: #ff940a;
            margin-bottom: 10px;
            margin-top: 18px;
            line-height: 18px;
            word-spacing: -0.1em;
        }
        .xiugai{color: #FA831F;}
        .xiugai:hover{
            color: #000000;
            text-decoration: none;
        }
        .tfoot span{
            height: 81px ;
            line-height: 81px;
            width: 135px;
            padding: 8px;
            margin-right: 20px;
            border-bottom: 1px solid #666666;
            border-right: 1px solid #666666;
            border-top:1px solid #DDDDDD;
            border-left: 1px solid #DDDDDD;
            border-radius: 2px;
        }
        .tfoot span a{
            height: 38px;
            width: 94px;
            padding:3px;
            font-size: 14px;
            font-weight: 700;
            border: 0.5px solid #D9D9D9;
            border-radius: 2px;
            background: #F4F4F4;

        } .tfoot span a:hover{
            background: #FA831F;
            border:1px solid #FA831F;
                  border-radius: 5px;
                  color: #fff}
    </style>
</head>
<body>
<table class="content-tab">
    <tr>
        <td width="119px" class="content-lt-td"  valign="top">
            {template 'stourtravel/public/leftnav'}
            <!--右侧内容区-->
        </td>
        <td valign="top" class="content-rt-td">
            <div class="w-set-con">
                <div class="w-set-tit bom-arrow"><span class="on"><s></s>自定义菜单列表</span><a href="javascript:;" class="refresh-btn" onclick="window.location.reload()">刷新</a></div>
            </div>
            <div class="yhlb" id="user_lb">
                <a href="javascript:" class="h3" id="tr1" style="margin-right: 20px;">自定义菜单列表</a>
            </div>
            <div class="czts"><a href="javascript:" id="czts">操作提示</a><span id="sanjiao"></span></div>
            <span style="clear:both;"></span>
            <div class="tishi"  id="tishi">
                 <ul>
                <li>自定义菜单最多包括3个一级菜单，每个一级菜单最多包含5个二级菜单</li>
                <li>一级菜单最多4个汉字，二级菜单最多7个汉字</li>
                <li>创建自定义菜单后，由于微信客户端缓存，需要24小时微信客户端才会展现出来</li>
                <li>建议测试时可以尝试取消关注公众账号后再次关注，则可以看到创建后的效果。</li>
                </ul>

            </div>
            <span style="clear:both"></span>

            <table class="table" id="t1" style="width: 95%">
                <thead class="thead">
                <tr>
                    <th with="5%"></th>
                    <th with="10%">是否开启</th>
                    <th with="5%">排序</th>
                    <th width="30%">菜单名称</th>
                    <th width="15%">类型</th>
                    <th width="15%">响应内容</th>
                    <th width="20%">操作</th>
                </tr>
                </thead>
                <tbody>
                {if !empty($menu)}
                {loop $menu $m}
                <tr class="tbody " name="tr1">
                    <td with="5%"><a href="javascript:" style="color:#999999" name="close" class="{$m['id']}">[-]</a><a href="javascript:" style="color:#999999;display:none" name="open" class="{$m['id']}">[+]</a></td>
                    <td width="10%"></td>
                    <td with="5%" name="status"><span class="sp1" style="color:#555">{$m['status']}</span></td>
                    <td width="30%" name="title"><span class="sp2" style="color:#555">{$m['title']}</span>{if $m['pid']==0}<s style="background:#FF9F08;color: white;font-size: 700;">+</s><a href="javascript:" style="color:#FF9F08" name="sub_addmenu">新增下级菜单</a><input type="hidden" name="p_id" value="{$m['id']}">{/if}</td>
                    <td width="15%" style="color:#555" name="type">{if $m['type']=='view'}跳转url{elseif $m['type']=='click'}关键字{elseif $m['type']=='scancode_push'}扫码推事件{elseif $m['type']=='pic_photo_or_album'}拍照或者相册{elseif $m['type']=='location_select'}地理位置{/if}</td>
                    <td width="15%" style="color:#555" name="con">{$m['content']}</td>
                    <td  name="id_td" style="display: none"><input type="hidden" name="id" value="{$m['id']}"></td>
                    <td width="20%" align="center"><a href="javascript:" style="" class="xiugai" name="update">修改</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="javascript:" class="xiugai" name="del">删除</a></td>
                </tr>
                {if $m['pid']==0}
                <tr><td colspan="6"><input type="hidden" name="pid" value="{$m['pid']}"></td></tr>
                {/if}
                {loop $z_menu $z_m}
                {if $z_m['pid']==$m['id']}
                <tr class="tbody " name="{$z_m['pid']}">
                    <td with="5%"></td>
                    <td with="10%">是:<input type="radio" name="ishidden_{$z_m['id']}" value="0" {if $z_m['is_show']==0}checked="checked"{/if} data-id="{$z_m['id']}" onclick="changes(this)" >否:<input type="radio" name="ishidden_{$z_m['id']}" value="1" {if $z_m['is_show']==1}checked="checked"{/if}  data-id="{$z_m['id']}"  onclick="changes(this)"></td>
                    <td with="5%" name="status"><span class="sp1" style="color:#555">{$z_m['status']}</span></td>
                    <td width="30%" name="title"><span class="sp2" style="color:#555">{$z_m['title']}</span></td>
                    <td width="15%" style="color:#555" name="type">{if $z_m['type']=='view'}跳转url{elseif $z_m['type']=='click'}关键字{elseif $z_m['type']=='scancode_push'}扫码推事件{elseif $z_m['type']=='pic_photo_or_album'}拍照或者相册{elseif $z_m['type']=='location_select'}地理位置{/if}</td>
                    <td width="15%" style="color:#555" name="con">{$z_m['content']}</td>
                    <td name="id_td" style="display: none"><input type="hidden" name="id" value="{$z_m['id']}"></td>
                    <td width="20%" align="center"><a href="javascript:" style="" class="xiugai" name="update">修改</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="javascript:" class="xiugai" name="del">删除</a></td>
                </tr>
                {/if}
                {/loop}
                {/loop}
                {else}
                没有内容，赶快创建吧
                {/if}
                </tbody >
                <tfoot>
                <tr>
                    <td></td>
                    <td colspan="5" class="tfoot">
                        <span><a href="javascript:" id="add_menu">新增主菜单</a></span>
                        <span><a href="javascript:" id="to_public">生成菜单到公众</a></span>
                        <span><a href="javascript:" id="to_public2">测试 生成菜单到公众</a></span>
                    </td>
                </tr>
                </tfoot>
            </table>
            <form novalidate="novalidate" id="add_form" method="post" action="">
                <table class="table tb-type2" name="t2" id="t2" style="display: none">
                    <tbody>
                    <tr style="background:rgb(255, 255, 255) none repeat scroll 0% 0%;" class="noborder" >
                        <td colspan="2" class="required"><label class="validation" for="test_title"><span class="sanjiao"></span>菜单名称</label></td>
                    </tr>
                    <tr style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;" class="noborder">
                        <td class="vatop rowform"><input value="" name="title" id="class_title" class="txt" type="text"></td>
                        <td class="vatop tips">主菜单名称不能超过8个汉字或16个英文</td>
                    </tr>

                    <tr style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;" class="noborder">
                        <td colspan="2" class="required"><label class="validation" for="test_type"><span class="sanjiao"></span>类型</label></td>
                    </tr>
                    <tr style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;" class="noborder">
                        <td class="vatop rowform"><select id="class_type" name="type">
                                <option value="1">跳转URL</option>
                                <option value="2">关键字</option>
                                <option value="3">扫码推事件</option>
                                <option value="4">拍照或者相册</option>
                                <option value="5">地理位置</option>
                            </select></td>
                        <td class="vatop tips"></td>
                    </tr>


                    <tr style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;" class="noborder">
                        <td colspan="2" class="required"><label class="validation" for="test_content"><span class="sanjiao"></span>响应内容</label></td>
                    </tr>
                    <tr style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;" class="noborder">
                        <td class="vatop rowform"><input value="" name="content" id="class_content" class="txt"  maxlength="200"></td>
                        <td class="vatop tips">如果类型选择了跳转URL此处请填写链接，选择了关键字触发，此处请填写关键字</td>
                    </tr>
                    <tr style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;">
                        <td colspan="2" class="required"><label class="validation" for="status"><span class="sanjiao"></span>排序权重</label></td>
                    </tr>
                    <tr style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;" class="noborder">
                        <td class="vatop rowform"><input id="status" name="status" class="txt" value="0" type="text"></td>
                        <td class="vatop tips"></td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <input type="hidden" name="up_id" value="-1">
                        <input type="hidden" name="sub_menu_pid" value="-2">
                        <td colspan="2"><a href="javascript:" class="normal-btn" style="margin-top:20px;padding-bottom:5px" id="submits">保存</a></td>

                    </tr>
                    </tfoot>
                </table>
            </form>
        </td>
    </tr>
</table>
{php echo Common::getScript('layer/layer.js');}
<script>
    $(document).ready(function() {
        //==========================
        $wx_id ="{$wx_id}";
        var name;var url;
        if($wx_id==24){
            name ='旅游网公众号';
            url  ="<?php echo $GLOBALS['cfg_basehost'];?>"+"/api/weixin.php";
        }
        else if($wx_id==26){
            name ='米淘公众号';
            url  ="<?php echo $GLOBALS['cfg_basehost'];?>"+"/api/weixin_mitao.php";
        }
        else{
            name ='测试号';
            url  ="<?php echo $GLOBALS['cfg_basehost'];?>"+"/api/weixin_ceshi.php";
        }
        //生成 公众号
        $("#to_public2").click(function(){
            layer.confirm('你将创建'+name+'的菜单？', {
                btn: ['确定','取消'] //按钮
            }, function(){
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {name:1},
                    success: function (msg) {
                        if(msg=='ok'){
                            alert("菜单创建成功，24小时后生效");
                            window.location.reload();
                        }else{
                            alert('菜单创建失败....失败编码：'+msg)
                        }

                    }
                });
            }, function(){

            });

        });
        //生成 公众号
         $("#to_public").click(function(){

             layer.confirm('你将创建'+name+'的菜单？', {
                 btn: ['确定','取消'] //按钮
             }, function(){

                     $.ajax({
                         type: "POST",
                         url: url,
                         data: {name:1},
                         success: function (msg) {
                             if(msg=='ok'){
                                 alert("菜单创建成功，24小时后生效");
                                 window.location.reload();
                             }else{
                                 alert('菜单创建失败....失败编码：'+msg)
                             }

                         }
                     });


             }, function(){

             });


         });

        //===========================
        //点击 [-] 和[+] 子菜单的显示 和隐藏
            var fn3 = function(){
            var s   =$(this).attr("class");
                     $(this).siblings('a[name=open]').css('display',"inline");
                     $(this).css('display',"none");
            var tr  =$("tr[name="+s+"]").css('display',"none");
        }
            var fn4 = function(){
            var s   = $(this).attr('class');
                      $(this).css('display',"none");
                      $(this).siblings('a[name=close]').css('display',"inline");
            var tr  = $("tr[name="+s+"]").css("display","table-row");
        }
        $('a[name=close]').click(fn3);
        $('a[name=open]').click(fn4);
        //点击 [-] 和[+] 子菜单的显示 和隐藏 结束
        //===========================
        //删除
        $("a[name=del]").click(function(){
            var s = $(this).parent().siblings('td[name=id_td]').find('input').val();
            $.ajax({
                type: "POST",
                url: "<?php echo $GLOBALS['cfg_basehost'];?>"+"/newtravel/weixin/menuDel",
                data: {id:s},
                success: function (msg) {
                    if(msg==1){
                        alert("删除成功");
                        window.location.reload();
                    }else if(msg==2){
                        alert("删除主，子菜单成功");
                        window.location.reload();
                    }
                }
            });
        });
        // 删除结束
        //======================================
        //修改
        $('a[name=update]').click(function(){
            $("#t2").css("display", "block");
            $("#t1").css("display", "none");
            var p   = $(this).parent();
            var sta = p.siblings('td[name=status]').find('span').text();
            var ti  = p.siblings('td[name=title]').find('span').text();
            var co  = p.siblings('td[name=con]').text();
            var s = p.siblings('td[name=id_td]').find('input').val();
            $("#add_form input[name=status]").val(sta);
            $("#add_form input[name=content]").val(co);
            $("#add_form input[name=title]").val(ti);
            $("#add_form input[name=up_id]").val(s);
            return false;
        });
        // 修改结束
        //======================================
        //add_menu 一级菜单
        $('#add_menu').click(function(){
                var  pid =new Array();
                $('input[name=pid]').each(function(){
                    pid.push($(this).val());
                });
                if(pid.length>=3){
                    alert("一级菜单最多三级");
                    return false;
                }
                else {
                     block_none();
                }
        });
        // 增加 2级菜单
        $("a[name=sub_addmenu]").click(function(){
                var sub_menu_pid = $(this).siblings('input').val();
                block_none();
                $("#add_form input[name=sub_menu_pid]").val(sub_menu_pid);

            }
        );
        function block_none(){//显示，隐藏  互转
            $("#t2").css("display", "block");
            $("#t1").css("display", "none");
            $('#t2 input[type=text]').each(function(){
                $(this).val("");
            });
        }
        //add_menu 一级菜单 结束
        $('input[type=text]').focus(function(){
            $(this).css('border',"1px solid #FF940A");
        });
        $('input[type=text]').blur(function(){
            $(this).css({
                'border-top'   : '1px solid #ABADB3',
                'border-left'  : '1px solid #ABADB3',
                'border-bottom': '1px solid #E2E3EA',
                'border-right' : '1px solid #E2E3EA'
            });
        });

        $('label[class=required]').hover(function(){
            $(this).find('label').css("color","#000");
        },function(){
            $(this).find('label').css('color',"#555555");
        });

        //实现 操作提示 的显示和隐藏
        var fn = function (){
            var s =  $('#tishi').css("display");
            if(s=="none"){
                $('#tishi').css('display',"block");
                $('#sanjiao').css({
                    "margin-top":"-3px",
                    "border-top":"8px solid #fff",
                    "border-bottom":"8px solid #FF940A",
                });
            }else{
                $('#tishi').css('display',"none");
                $('#sanjiao').css({
                    "margin-top":"5px",
                    "border-top":"8px solid #FF940A",
                    "border-bottom":"8px solid #fff",
                });
            }
        }
        $("#czts").click(fn);
        $("#sanjiao").click(fn);
        //实现 操作提示 的显示和隐藏  结束
        //改变 id =‘user_lb’ 的样式以及 内容的切换
        $('#user_lb').find("a:first").addClass("h3");
        $(function () {
            window.onload = function () {
                var $a = $('#user_lb a');
                $a.mousedown(function () {
                    var $this  = $(this);
                    var name1  = $this.attr("id");
                    var name2  = $this.siblings('a').attr("id");
                    $("tr[name="+name1+"]").css("display","table-row");
                    $("tr[name="+name2+"]").css("display","none");
                    $a.removeClass();
                    $this.addClass('h3');
                });
            }
        });
        //改变 id =user_lb 的样式 结束
        //==========================
        $("#submits").click(function(){
            var p= 1;
            $("#add_form input").each(function(){
                if($(this).val()==''){
                    var s = $(this).attr("name");
                    alert(s+"不能为空");
                    $(this).focus();
                    p=0;
                    return false;
                }
            });
            if(p==0){
                return false;
            }else {
/*            var str_data = $("#add_form input").map(function () {
//                    return ($(this).attr("name") + '=' + $(this).val());
//                }).get().join(",");
//                var sel = $("#add_form select").attr("name") + "=" + $("#add_form select").val();
             var str_data = str_data + "&" + sel;*/
                //=======================
                var title         =$("input[name=title]").val();
                var type          =$("select[name=type]").val();
                var content       =$("input[name=content]").val();
                var status        =$("input[name=status]").val();
                var up_id         =$("input[name=up_id]").val();
                var sub_menu_pid  =$("input[name=sub_menu_pid]").val();
                var wx_id         ="{$wx_id}";
              //  alert(title+type+content+status+up_id+sub_menu_pid);return false;
                $.ajax({
                    type: "POST",
                    url: "<?php echo $GLOBALS['cfg_basehost'];?>"+"/newtravel/weixin/menuCreate",
                    data:{title:title,content:content,status:status,type:type,up_id:up_id,sub_menu_pid:sub_menu_pid,wx_id:wx_id},
                    success: function (msg) {
                            alert(msg);// alert("保存成功");
                            $("#add_form input[name=sub_menu_pid]").val(-2);
                            $("#add_form input[name=up_id]").val(-1);
                            window.location.reload();
                    }
                });
            }

        });
    });
    function changes(th){
        var  this_val  = $(th).val();
        var  mulu_id   = $(th).attr('data-id');
        $.ajax({
            type:'post',
            url :'/newtravel/weixin/changes',
            data :{radio:this_val,mulu:mulu_id},
            success: function (data) {

                layer.alert(data, {icon: 6});
            }
        })
    }
</script>
</body>
</html>
