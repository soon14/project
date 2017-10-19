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
        .tbody td{
            color: #666;
        }
        .tbody td span:hover{
            border:1px dashed #FF940A;


        }
        .table[name=t1]{
            width: 1000px;
            height: 40px;
            margin: 40px 50px 40px 30px;
        }
        .table[name=t1] tbody tr td:hover{
            background: #fbfbfb;
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
            <div class="tishi" style="display:block" id="tishi">
                 <ul>
                     <li style="font-size: 20px">关注图文回复 需要关闭 "关注自动回复"</li>
                     <li>关键字设置注意事项：</li>
                     <li>单个或多个关键词不和文本关键词重复</li>
                     <li>多个关键词用逗号割开！</li>
                     <li>关键词设置 都已排序第一为准，只需设置第一个的关键词</li>
                     <li>回复单图文 设置开启隐藏 按钮</li>

                </ul>
            </div>
            <span style="clear:both"></span>

            <table class="table" id="t1" name="t1">
                <thead class="thead">
                <tr>
                    <th style="width:3%">排序</th>
                    <th style="width:16%">图文标题</th>
                    <th style="width:10%">图文描述</th>
                    <th style="width:14%">图片地址</th>
                    <th style="width:16%;text-align:center">图片链接</th>
                    <th style="width:8%">状态</th>
                    <th style="width:13%">关键词</th>
                    <th style="width:20%; text-align:center">操作</th>
                </tr>
                </thead>
                <tbody>
                {loop $new $news}
                <tr class="tbody " name="tr1">
                    <td width="3%" name="sort" >{$news['sort']}</td>
                    <td width="16%" name="title">{$news['title']}</td>
                    <td width="10%" name="content">{$news['content']}</td>
                    <td width="14%" name="pic">{$news['pic']}</td>
                    <td style="width:16%; text-align:center;color: " name="url">{$news['url']}</td>
                    <td width="8%" name="is_open">{if $news['is_openid']==1}开启{else}隐藏{/if}</td>
                    <td style="display: none" name="del_id">{$news['id']}</td>
                    <td width="13%" name="kwords">{$news['keywords']}</td>
                    <td style="width:20%; text-align:center">
                      <a href="javascript:" name="edit">修改</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:" onclick="return confirm(&quot;您确定要删除此条数据吗？&quot;);" name="del">删除</a>
                    </td>
                </tr>
                {/loop}
                </tbody >
                <tfoot>
                <tr>
                    <td></td>
                    <td colspan="6" class="tfoot">
                       <span><a href="javascript:" id="addnews">添加新图文消息</a></span>
                    </td>
                </tr>
                </tfoot>
            </table>
            <span style="clear: both"></span>
            <form novalidate="novalidate" id="add_form" method="post" action="">
                <table class="table tb-type2" name="t2" id="t2" style="display: none">
                    <tbody>
                    <tr style="background:rgb(255, 255, 255) none repeat scroll 0% 0%;" class="noborder" >
                        <td colspan="2" class="required"><label class="validation" for="test_title"><span class="sanjiao"></span>关键字</label></td>
                    </tr>
                    <tr style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;" class="noborder">
                        <td class="vatop rowform"><input value="" name="keywords" id="keywords" class="txt" type="text"></td>
                        <td class="vatop tips">多个关键字，用逗号隔开</td>
                    </tr>
                    <tr style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;" class="noborder">
                        <td colspan="2" class="required"><label class="validation" for="test_type"><span class="sanjiao"></span>标题</label></td>
                    </tr>
                    <tr style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;" class="noborder">
                        <td class="vatop rowform"><input value="" name="title" id="title" class="txt" type="text"></td>
                        <td class="vatop tips"></td>
                    </tr>
                    <tr style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;" class="noborder">
                        <td colspan="2" class="required"><label class="validation" for="test_content"><span class="sanjiao"></span>图片外链(图片地址)</label></td>
                    </tr>
                    <tr style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;" class="noborder">
                        <td class="vatop rowform"><input value="" name="imgAddress" id="imgAddress" class="txt" type="text"></td>
                        <td class="vatop tips">图片尺寸推荐640px*355px</td>
                    </tr>
                    <tr style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;">
                        <td colspan="2" class="required"><label class="validation" for="status"><span class="sanjiao"></span>描述</label></td>
                    </tr>
                    <tr style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;" class="noborder">
                        <td class="vatop rowform"><textarea name="description" id="description"></textarea></td>
                        <td class="vatop tips">仅支持文字</td>
                    </tr>
                    <tr style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;">
                        <td colspan="2" class="required"><label class="validation" for="status"><span class="sanjiao"></span>指向链接(图片链接地址)</label></td>
                    </tr>
                    <tr style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;" class="noborder">
                        <td class="vatop rowform"><input id="imgLinkAddress" name="imgLinkAddress" class="txt" value="" type="text"></td>
                        <td class="vatop tips"></td>
                    </tr>
                    <tr style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;">
                        <td colspan="2" class="required"><label class="validation" for="status"><span class="sanjiao"></span>状态</label></td>
                    </tr>
                    <tr style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;" class="noborder">
                        <td class="vatop rowform"><input name="status"  checked="checked" value="1" type="radio">开启<input name="status" class="" value="0" type="radio">隐藏</td>
                        <td class="vatop tips"></td>
                    </tr>
                    <tr style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;">
                        <td colspan="2" class="required"><label class="validation" for="status"><span class="sanjiao"></span>排序权重</label></td>
                    </tr>
                    <tr style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;" class="noborder">
                        <td class="vatop rowform"><input id="sort" name="sort" class="txt" value="0" type="text"></td>
                        <td class="vatop tips">数值越大越排前</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <input type="hidden" name="update_id" value="-1">
                        <input type="hidden" name="sub_menu_pid" value="-2">
                        <td colspan="2"><a href="javascript:" class="normal-btn" style="margin-top:20px;padding-bottom:5px" id="submits">保存</a></td>
                    </tr>
                    </tfoot>
                </table>
            </form>
        </td>
    </tr>
</table>
<script>
    $(document).ready(function() {
        //==========================
        $("a[name=edit]").click(function(){
            $("#t2").css("display", "table");
            $("#t1").css("display", "none");
            var  kwords =$(this).parent().siblings("td[name=kwords]").text();
            var  title =$(this).parent().siblings("td[name=title]").text();
            var  content =$(this).parent().siblings("td[name=content]").text();
            var  pic =$(this).parent().siblings("td[name=pic]").text();
            var  url =$(this).parent().siblings("td[name=url]").text();
            var  is_open =$(this).parent().siblings("td[name=is_open]").text();
            var  sort    =$(this).parent().siblings("td[name=sort]").text();
            var delid =$(this).parent().siblings("td[name=del_id]").text();
            switch (is_open){
                case '隐藏':is_open=0;break;
                case '开启':is_open=1;break;
            }
            if(is_open==0){
           $("#add_form input[value='0']").attr("checked","checked");
            }
            $("#add_form input[name=update_id]").val(delid);
            $("#add_form input[name=keywords]").val(kwords);
            $("#add_form input[name=title]").val(title);
            $("#add_form input[name=imgAddress]").val(pic);
            $("#add_form textarea[name=description]").val(content);
            $("#add_form input[name=imgLinkAddress]").val(url);
            $("#add_form input[name=sort]").val(sort);
            return false;
        });
        //==========================
        //删除
         $("a[name=del]").click(function(){
            var delid =$(this).parent().siblings("td[name=del_id]").text();
             $.ajax({
                 type: "POST",
                 url: "<?php echo $GLOBALS['cfg_basehost'];?>"+"/newtravel/weixin/tuwenDel",
                 data: {id:delid},
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
        //==========================
        //鼠标进过 图片 hover
        $("img[name=imghover]").mouseenter(function(){
           $("#imgdiv").css("display","block");

        });
        $("img[name=imghover]").mouseleave(function(){
            $("#imgdiv").css("display","none");
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
        function block_none(){//显示，隐藏  互转
            $("#t2").css("display", "table");
            $("#t1").css("display", "none");
            $('#t2 input[type=text]').each(function(){
                $(this).val("");
            });
        }
        $("#addnews").click(function(){
            block_none();
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
                var  keywords       =$("input[name=keywords]").val();
                var  title          =$("input[name=title]").val();
                var  imgAddress     =$("input[name=imgAddress]").val();
                var  description    =$("textarea[name=description]").val();
                var  imgLinkAddress =$("input[name=imgLinkAddress]").val();
                var  status         =$("input[name=status]:checked").val();
                var  sort           =$("input[name=sort]").val();
                var  update_id      =$("input[name=update_id]").val();
                var  wx_id          = "{$wx_id}";
                $.ajax({
                    type: "POST",
                    url: "<?php echo $GLOBALS['cfg_basehost'];?>"+"/newtravel/weixin/addimageNews",
                    data: {update_id:update_id,sort:sort,status:status,imgLinkAddress:imgLinkAddress,keywords:keywords,title:title,imgAddress:imgAddress,description:description,wx_id:wx_id},
                    success: function (msg) {
                        alert(msg);// alert("保存成功");
                        $("#add_form input[name=update_id]").val(-1);
                        window.location.reload();
                    }
                });
            }

        });
    });
</script>
</body>
</html>
