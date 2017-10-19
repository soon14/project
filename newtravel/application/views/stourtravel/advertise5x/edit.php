<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>广告添加/修改</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('style.css,base.css,base2.css'); }
    {php echo Common::getScript("uploadify/jquery.uploadify.min.js,product_add.js,choose.js,imageup.js,template.js");}
    {php echo Common::getCss('uploadify.css','js/uploadify/'); }
    <style>
        .product-add-div .up-list-div ul {
            padding: 10px;
            border: 1px solid #dcdcdc;
        }

        .product-add-div .up-list-div ul li {
            width: auto;
            border: none;
        }

        .product-add-div .up-list-div ul li .img_text {
            margin-left: 10px;
        }

        .product-add-div .up-list-div ul li span {
            display: block;
            width: 600px;
            padding-left: 30px;
            height: 25px;
            margin: 5px 0;
        }

        .product-add-div .up-list-div ul li .set-text-xh {
            float: none;
            width: 500px;
        }
        .product-add-div .up-list-div ul li .set-text-xh.w100{
            width: 100px;;
        }
        .red{ color: #f00;}
        .product-add-div .up-list-div dl{ width: 100%}
        .product-add-div .add-class dl dd{ width: 50%;}
        .img_table{ width: 100%;border: 1px solid #eee}
        .img_table td{ padding: 10px;}

    </style>
</head>

<body>
<table class="content-tab">
    <tr>
        <td width="119px" class="content-lt-td" valign="top">
            {template 'stourtravel/public/leftnav'}
            <!--右侧内容区-->
        </td>
        <td valign="top" class="content-rt-td ">

            <form method="post" name="product_frm" id="product_frm">
                <div class="manage-nr">
                    <div class="w-set-tit bom-arrow" id="nav">
                        <span class="on"><s></s>{$title}</span>
                        <a href="javascript:;" class="refresh-btn" onclick="window.location.reload()">刷新</a>
                        <a class="help_icon help_inner_icon" target="_blank" href="http://www.stourweb.com/help/429.html" title="点我看帮助"><img src="{$GLOBALS['cfg_public_url']}images/help.png"></a>
                    </div>
                    <!--基础信息开始-->
                    <div class="product-add-div">
                        <input type="hidden" name="is_system" value="0">
                        <div class="add-class">
                            <dl>
                                <dt>广告开关：</dt>
                                <dd>
                                    <input type="radio"  {if $info['is_show']==1 || $action=='add'}checked{/if} name="is_show" value="1"/> 开启 <input type="radio" {if $info['is_show']==0 && $action=='edit'}checked{/if} name="is_show" value="0"/> 关闭
                                </dd>
                            </dl>
                            <dl>
                                <dt>站点：</dt>
                                <dd>
                                    <select name="webid" id="webid">
                                        <option value="0"
                                         {if $info['webid']==0}selected="selected"{/if} {if $info['is_system']}disabled{/if}>主站</option>
                                        {loop $weblist $k}
                                        <option value="{$k['webid']}"
                                                {if $info['webid']==$k['webid']}selected="selected"{else}disable{/if} {if $info['is_system']}disabled{/if}
                                        >{$k['webname']}</option>
                                        {/loop}
                                    </select>
                                </dd>
                            </dl>
                            <dl>
                                <dt>平台：</dt>
                                <dd>
                                   <input type="radio" {if $info['is_pc']==1}checked{/if} {if $info['is_system']}disabled{/if} name="is_pc" value="1"/> 电脑版  <input type="radio" {if $info['is_system']}disabled{/if}  {if $info['is_pc']!=1}checked{/if} name="is_pc" value="0"/> 移动版
                                </dd>
                            </dl>

                            <dl>
                                <dt>广告类型：</dt>
                                <dd>
                                    <input type="radio" name="flag" {if $info['is_system']}disabled{/if} {if $info['flag']==1||$action=='add'}checked="checked"{/if} value="1"/> 单图 &nbsp; <input type="radio" name="flag" {if $info['is_system']}disabled{/if} {if $info['flag']==2}checked="checked"{/if}  value="2"/> 多图
                                </dd>
                            </dl>
                            <dl>
                                <dt>所在页面：</dt>
                                <dd>
                                    {if $info['is_system']!=1 }
                                    <select name="prefix" id="adpositions">

                                        <option value="0">选择广告位</option>
                                        {loop $position $v}
                                        <optgroup label="{$v['kindname']}" style="background: #f4f4f4;"></optgroup>
                                        {loop $v['sub'] $r}
                                        <option  {if $info['is_system']}disabled{/if} {if $info['prefix']==$r['pagename']}selected=selected {/if}value="{$r['pagename']}">&nbsp;&nbsp;{$r['kindname']}</option>
                                        {/loop}
                                        {/loop}
                                    </select>
                                    {else}

                                        {loop $position $v}
                                            {loop $v['sub'] $r}
                                                {if $info['prefix']==$r['pagename']}
                                                    {$r['kindname']}
                                                {/if}
                                            {/loop}
                                        {/loop}
                                    {/if}
                                    <span class="whinfo" style="color: red"></span>

                                </dd>
                            </dl>
                            <dl>
                                <dt>广告位置：</dt>
                                <dd><input type="text" {if $info['is_system']=='1'}readonly="true"{/if} class="set-text-xh img_text" name="position" value="{$info['position']}"></dd>
                            </dl>
                            <dl>
                                <dt>目的地：</dt>
                                <dd>
                                    <a href="javascript:;" class="choose-btn mt-4"
                                       onclick="Product.getDest(this,'.dest-sel',4)" title="选择">选择</a>

                                    <div class="save-value-div mt-2 ml-10 dest-sel">
                                        {loop $info['kindlist_arr'] $k $v}
                                        <span><s onclick="$(this).parent('span').remove()"></s>{$v['kindname']}<input type="hidden" name="kindlist[]" value="{$v['id']}"></span>
                                        {/loop}
                                    </div>

                                </dd>
                            </dl>
                            <dl>
                                <dt>广告尺寸：</dt>
                                <dd>
                                    <input name="size" {if $info['is_system']=='s_'}readonly="true"{/if} class="set-text-xh img_text" type="text" value="{$info['size']}">
                                </dd>
                            </dl>
                            <dl>
                                <dt>广告备注：</dt>
                                <dd>
                                    <input name="remark" class="set-text-xh img_text" type="text" value="{$info['remark']}">
                                </dd>
                            </dl>
                            <dl>
                                <dt>广告图片：</dt>
                                <dd>
                                    <div class="up-file-div" id="updiv">
                                        <div id="pic_btn" class="uploadify"
                                             style="height: 25px; width: 80px; cursor: pointer">
                                            <div id="pic_btn-button" class="uploadify-button "
                                                 style="text-indent: -9999px; height: 25px; line-height: 25px; width: 80px;">
                                                <span class="uploadify-button-text">SELECT FILES</span></div>
                                        </div>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt></dt>
                                <dd>
                                    <table border="1" class="img_table">
                                        <thead>
                                        <tr>
                                            <th>排序</th>
                                            <th>广告图片</th>
                                            <th>广告标题</th>
                                            <th>广告链接</th>
                                            <th>目的地</th>
                                            <th>时间</th>
                                            <th>管理</th>
                                        </tr>
                                        </thead>
                                        <tbody id="img-list">
                                        {loop $info['image'] $v}
                                        <tr>

                                            <td><input type="text" name="adorder[]" id="order" class="set-text-xh img_text w100" value="{$v[3]}"/></td>
                                            <td><img class="fl" src="{$v[0]}" width="100" height="100">
                                                <input type="hidden" name="adsrc[]" value="{$v[0]}"/>
                                            </td>
                                            <td><input type="text" name="adname[]" id="linktext" class="set-text-xh img_text" value="{$v[1]}"/></td>
                                            <td><input type="text" name="adlink[]" id="linkurl"  class="set-text-xh text_250 img_text fl"value="{$v[2]}"/></td>
                                            <td><input type="text" name="admdd[]" id="mdd"  class="set-text-xh img_text" value="{$v[4]}"/></td>
                                            <td><input type="text" name="adtime[]" id="adtime"  class="set-text-xh img_text" value="{$v[5]}"/></td>
                                            <td><span class="delad" style="cursor: pointer">删除</span></td>
                                        </tr>
                                        {/loop}
                                        </tbody>

                                    </table>
                                </dd>
                            </dl>
                            <dl>
                                <dt> 广告ID：</dt>
                                <dd id="prefix-num"><span>{$info['sign']}</span><input type="hidden" name="number" value="{$info['number']}"/></dd>
                            </dl>
                            <dl>
                                <dt> 调用标示：</dt>
                                <dd>
                                    <input type="input" class="set-text-xh img_text" id="custom_label"  name="custom_label" {if $info['is_system']=='1'}readonly="true"{/if} value="{$info['custom_label']}"/> <span class="red" id="custom_label_err"></span>
                                </dd>
                            </dl>
                        </div>
                    </div>
                    <!--/基础信息结束-->
                    <div class="opn-btn">
                        <input type="hidden" name="id" id="id" value="{$info['id']}"/>
                        <input type="hidden" name="action" id="action" value="{$action}"/>
                        <a class="normal-btn ml5" id="btn_save" href="javascript:;">保存</a>
                    </div>

                </div>
            </form>
        </td>
    </tr>
</table>
<script type="text/html" id="img-temp">
    {{each images as value i }}
    <tr>
        <td><input type="text" name="adorder[]" id="order" class="set-text-xh img_text w100" value=""/></td>
        <td><img class="fl" src="{{value}}" width="100" height="100">
            <input type="hidden" name="adsrc[]" value="{{value}}"/></td>
        <td><input type="text" name="adname[]" id="linktext" class="set-text-xh img_text" value=""/></td>
        <td><input type="text" name="adlink[]" id="linkurl"  class="set-text-xh text_250 img_text fl"value=""/></td>
        <td><span class="delad" style="cursor: pointer">删除</span></td>
    </tr>
    {{/each}}
</script>
<script>

    var action = "{$action}";
    $(document).ready(function () {
        $(".choosetime").click(function () {
            WdatePicker({skin: 'whyGreen', dateFmt: 'yyyy-MM-dd', minDate: '%y-%M-%d'})
        })
        var imgNum=$('input[name="mark"]').val();
        $('input[name="mark"]').change(function(){
            imgNum=$(this).val();
        });
        //上传图片
        $('#pic_btn-button').css('backgroundImage', 'url("' + PUBLICURL + 'images/upload-ico.png' + '")');
        $('#pic_btn').click(function () {
            ST.Util.showBox('上传图片', SITEURL + 'image/insert_view/iswater/0', 430, 340, null, null, document, {loadWindow: window, loadCallback: Insert});
            function Insert(result, bool) {
                if (result.data.length > 0) {
                    $data=new Array();
                    $image=new Array();
                    for(i=0;i<result.data.length;i++){
                        var temp = result.data[i].split('$$');
                        $image.push(temp[0]);
                    }
                    if($image.length>0 && imgNum==1){
                        $data.images=[$image[0]];
                        $('#img-list').html(template('img-temp',$data));
                    }else{
                        $data.images=$image;
                        $('#img-list').append(template('img-temp',$data));
                    }
                }
            }
        });
        //广告位标示
        $('#adpositions').change(function(){
            select_change();
        });
        $('#webid').change(function(){
            if($('#adpositions').val().length>1){
                select_change();
            }
        });
        function select_change(){
            var data={
                'prefix':$('#adpositions').val(),
                'is_system':'0',
                'is_pc':$('#ispc').val(),
                'webid':$('#webid').val()
            }
            $.post(SITEURL + "advertise5x/ajax_number",data,function(num){
                $('#prefix-num').find('span').html('c_'+data.prefix+'_'+num);
                $('#prefix-num').find('input').val(num);
            },'json')
        }

        //自定义标示
        $('#custom_label').blur(function(){
            var data={};
            var bool=false;
            var val=$(this).val();console.log(val.length);
            if(val.length <1){
                return bool;
            }
            var id=$('#id').val();
            var reg =/[0-9a-zA-Z_]+$/;
            var re = new RegExp(reg);
            if(!re.test(val)){
                $('#custom_label_err').html('*字母、数字或者字母数字组合');
                return bool;
            }
            if(id>0){
                data.id=id;
            }
            data.custom_label=val;
            $.ajax({
                type: "post",
                url:SITEURL + "advertise5x/ajax_custom",
                data:data,
                async:false,
                success:function(data){
                    if(data<1){
                        $('#custom_label_err').html('*该标示已存在');
                    }else{
                        bool=true;
                    }
                }});
            if(bool){
                $('#custom_label_err').html('');
            }
        });
        //保存
        $("#btn_save").click(function () {

            if($('#adpositions').val()==0 || $('#custom_label_err').html().length>0){
                return false;
            }
            Ext.Ajax.request({
                url: SITEURL + "advertise5x/ajax_save",
                method: "POST",
                form: "product_frm",
                datatype: "JSON",
                success: function (response, opts) {
                    try {
                        var data = $.parseJSON(response.responseText);
                    }
                    catch (e) {
                        ST.Util.showMsg("{__('norightmsg')}", 5, 1000);
                    }
                    if (data.status) {
                        if (data.productid != null) {
                            $("#productid").val(data.productid);
                        }
                    }
                    ST.Util.showMsg('保存成功!', '4', 2000);
                }});
        })

        //删除功能
        $("body").delegate('.delad','click',function(){
                var obj = $(this);
                ST.Util.confirmBox('删除广告','确认删除广告吗?',function(){
                    obj.parent().parent().remove();
                },function(){})
        })
    });


</script>

</body>
</html>
