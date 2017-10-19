<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>广告管理-思途CMS{$coreVersion}</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('style.css,base.css,base2.css,plist.css,lightbox.min.css'); }
    <style>
        .example-image-link img{ display: block;margin: 5px auto;}
    </style>

</head>
<body style="overflow:hidden">
<table class="content-tab">
    <tr>
        <td width="119px" class="content-lt-td" valign="top">
            {template 'stourtravel/public/leftnav'}
            <!--右侧内容区-->
        </td>
        <td valign="top" class="content-rt-td" style="overflow:hidden">

            <!-- <div class="add_menu-btn" style="border: none">
                 <a href="javascipt:;" id="configbtn" class="set-btn-class ml-10" style="margin-top: 50px;">设置</a>
             </div> -->
            <div class="list-top-set">
                <div class="list-web-pad"></div>
                <div class="list-web-ct">
                    <table class="list-head-tb">
                        <tr>
                            <td class="head-td-lt"></td>
                            <td class="head-td-rt">
                                <a href="javascript:;" class="refresh-btn" onclick="window.location.reload()">刷新</a>
                                <a href="javascript:;" id="addbtn" class="add-btn-class ml-10">添加</a>
                                <a class="help_icon" target="_blank" href="http://www.stourweb.com/help/429.html" title="点我看帮助"><img src="{$GLOBALS['cfg_public_url']}images/help.png"></a>
                            </td>

                        </tr>
                    </table>
                </div>
            </div>
            <div class="filter">
                {if !$isfive}
                <select id="version" class="bd_style wid_100">
                    <option value="/advertise5x/index/parentkey/sale/itemid/1" selected="selected">5.x版</option>
                    <option value="/advertise/index/parentkey/sale/itemid/1">4.x版</option>
                </select>
                {/if}
                <select name="ismobile" id="ismobile" class="bd_style wid_100" onchange="goSearch(this.value,'ismobile')">
                    <option value="">所属平台</option>
                    <option value="0">电脑版</option>
                    <option value="1">移动版</option>
                </select>
                <select name="weblist" id="weblist" class="bd_style wid_100" onchange="goSearch(this.value,'webid')">
                    <option value="0">所属站点</option>
                </select>

                <select name="adtype" id="adtype" class="bd_style wid_100" onchange="goSearch(this.value,'adtype')">
                    <option value="">所在页面</option>
                    {loop $position $v}
                    <optgroup label="{$v['kindname']}" style="background: #f4f4f4;"></optgroup>
                    {loop $v['sub'] $r}
                    <option value="{$r['pagename']}">&nbsp;&nbsp;{$r['kindname']}</option>
                    {/loop}
                    {/loop}
                </select>

                <div class="pro-search" style="float: left;margin-top: 4px;">
                    <input type="text" id="searchkey" value="" placeholder="广告位置/广告ID/调用标示"
                           class="sty-txt1 set-text-xh wid_200 ml10"/>
                    <a href="javascript:;" class="head-search-btn" id="btn_search" value="搜索" onclick="searchKey()"></a>
                </div>

            </div>

            <div id="product_grid_panel" class="content-nrt">

            </div>
        </td>
    </tr>
</table>
<script>
    $('#version').change(function(){
        var val=$(this).val();
        window.location.href=SITEURL+val;
    });

window.display_mode = 2;	//默认显示模式
window.product_kindid = 0;  //默认目的地ID
var editico = "{php echo Common::getIco('edit');}";
var delico = "{php echo Common::getIco('del');}";
var previewico = "{php echo Common::getIco('preview');}";


Ext.onReady(
    function () {
        Ext.tip.QuickTipManager.init();
        $("#searchkey").focusEffect();
        //添加广告
        $("#addbtn").click(function () {
            var ismobile = "{$ismobile}";
            var url = SITEURL + "advertise5x/add/parentkey/{$parentkey}/itemid/{$itemid}/ismobile/"+ismobile;
            ST.Util.addTab('添加广告', url);

        })


        var web_menu_items = [];
        Ext.Array.each(window.WEBLIST, function (row, index, itself) {
            var option = "<option value=" + row.webid + ">" + row.webname + "</option>";
            $("#weblist").append(option);
        });

        //产品store
        window.product_store = Ext.create('Ext.data.Store', {

            fields: [
                'id',
                'webid',
                'kindname',
                'flag',
                'is_show',
                'prefix',
                'number',
                'custom_label',
                'is_system',
                'is_pc',
                'remark',
                'size',
                'position',
                'ad_id',
                'ad_src',
                'tr_class',
                'ad_link',
                'ad_name',
                'ad_order',
                'ad_index'
            ],

            proxy: {
                type: 'ajax',
                api: {
                    read: SITEURL + 'advertise5x/index/action/read/',  //读取数据的URL
                    update: SITEURL + 'advertise5x/index/action/save',
                    destroy: SITEURL + 'advertise5x/index/action/delete'
                },
                reader: {
                    type: 'json',   //获取数据的格式
                    root: 'lists',
                    totalProperty: 'total'
                }
            },
            remoteSort: true,
            autoLoad: true,
            pageSize: 30,
            listeners: {
                load: function (store, records, successful, eOpts) {
                    if (!successful) {
                        ST.Util.showMsg("{__('norightmsg')}", 5, 1000);
                    }
                    var pageHtml = ST.Util.page(store.pageSize, store.currentPage, store.getTotalCount(), 10);
                    $("#line_page").html(pageHtml);
                    window.product_grid.doLayout();

                    $(".pageContainer .pagePart a").click(function () {
                        var page = $(this).attr('page');
                        product_store.loadPage(page);
                    });

                }
            }



        });

        //产品列表
        window.product_grid = Ext.create('Ext.grid.Panel', {
            store: product_store,
            renderTo: 'product_grid_panel',
            border: 0,
            bodyBorder: 0,
            bodyStyle: 'border-width:0px',
            scroll: 'vertical', //只要垂直滚动条
            bbar: Ext.create('Ext.toolbar.Toolbar', {
                store: product_store,  //这个和grid用的store一样
                displayInfo: true,
                emptyMsg: "",
                items: [
                    {
                        xtype: 'panel',
                        id: 'listPagePanel',
                        html: '<div id="line_page"></div>'
                    },
                    {
                        xtype: 'combo',
                        fieldLabel: '每页显示数量',
                        width: 170,
                        labelAlign: 'right',
                        forceSelection: true,
                        value: 30,
                        store: {fields: ['num'], data: [
                            {num: 30},
                            {num: 60},
                            {num: 100}
                        ]},
                        displayField: 'num',
                        valueField: 'num',
                        listeners: {
                            select: changeNum
                        }
                    }

                ],
                listeners: {
                    single: true,
                    render: function (bar) {
                        var items = this.items;
                        //	bar.down('tbfill').hide();

                        bar.insert(0, Ext.create('Ext.panel.Panel', {border: 0, html: '<div class="panel_bar"><a class="abtn" href="javascript:void(0);" onclick="chooseAll()">全选</a><a class="abtn" href="javascript:void(0);" onclick="chooseDiff()">反选</a><a class="abtn" href="javascript:void(0);" onclick="delLine()">删除</a></div>'}));

                        bar.insert(1, Ext.create('Ext.toolbar.Fill'));
                        //items.add(Ext.create('Ext.toolbar.Fill'));
                    },

                }
            }),
            columns: [
                {
                    text: '选择',
                    width: '6%',
                    // xtype:'templatecolumn',
                    tdCls: 'product-ch',
                    align: 'center',
                    dataIndex: 'id',
                    menuDisabled: true,
                    border: 0,
                    renderer: function (value, metadata, record) {
                        var id = record.get('id');
                        if (id.indexOf('ad') == -1){
                            return  "<input type='checkbox' class='product_check' style='cursor:pointer' value='" + value + "'/>";
                        }
                    }
                },
                {
                    text: '广告位置/图片排序',
                    width: '12%',
                    dataIndex: 'position',
                    align: 'center',
                    border: 0,
                    sortable: false,
                    menuDisabled: true,
                    renderer: function (value, metadata, record) {
                        var id = record.get('id');
                        var ad_id=record.get('ad_id');
                        if (id.indexOf('ad') == -1){
                            return value;
                        }
                        else
                        {
                            var order=record.get('ad_order');
                            var index=record.get('ad_index');
                            return "<input type='text' style=\"width:108px;\" value='"+order+"' class='row-edit-txt' onblur=\"updateField(this,'"+ad_id+"','ad_order',0,'input',"+index+")\"/>";
                        }
                    }

                },
                {
                    text: '所在页面/预览图',
                    width: '20%',
                    dataIndex: 'kindname',
                    align: 'center',
                    border: 0,
                    sortable: false,
                    menuDisabled: true,
                    renderer: function (value, metadata, record) {
                        var id = record.get('id');
                        if (id.indexOf('ad') == -1){
                            return value;
                        }
                        else
                        {
                            var src=record.get('ad_src');
                            return src.length==0?'':'<a class="example-image-link" rel="lightbox" href="'+src+'"><img class="example-image" style="width:80px; height:50px" src="'+src+'"/></a>';
                        }
                    }
                },
                {
                    text: '站点/广告标题',
                    width: '15%',
                    dataIndex: 'webid',
                    align: 'center',
                    sortable: false,
                    menuDisabled: true,
                    border: 0,
                    renderer: function (value, metadata, record) {
                        var id = record.get('id');
                        if (id.indexOf('ad') == -1){
                           return value;
                        }
                        else
                        {
                            var name=record.get('ad_name');
                            return name.length==0?'':name;
                        }
                    }
                },
                {
                    text: '所属平台/广告链接',
                    width: '15%',
                    dataIndex: 'is_pc',
                    align: 'center',
                    cls: 'mod-1',
                    sortable: false,
                    menuDisabled: true,
                    renderer: function (value, metadata, record, rowIndex, colIndex) {
                        var id = record.get('id');
                        if (id.indexOf('ad') == -1){
                            return value==1?'电脑版':'移动版';
                        }
                        else
                        {
                            var link=record.get('ad_link');
                            return link.length==0?'':link;
                        }
                    }
                },
                {
                    text: '广告尺寸',
                    width: '15%',
                    align: 'center',
                    dataIndex: 'size',
                    border: 0,
                    menuDisabled: true,
                    cls: 'mod-1',
                    sortable: false,
                    renderer: function (value, metadata, record, rowIndex, colIndex) {
                        return value;
                    }
                }
                ,
                {
                    text: '显示/隐藏',
                    width: '9%',
                    align: 'center',
                    dataIndex: 'is_show',
                    border: 0,
                    menuDisabled: true,
                    cls: 'mod-1',
                    sortable: false,
                    renderer: function (value, metadata, record, rowIndex, colIndex) {
                        var id = record.get('id');
                        var html='';
                        if (id.indexOf('ad') == -1){
                            var src = "{$GLOBALS['cfg_public_url']}";
                            var close=src+'images/close-s.png';
                            var show =src+'images/show-ico.png';
                            src=value == 0?close:show;
                            html='<img src='+src+' onclick="switch_img(this)" style="cursor:pointer" data-id="'+record.get('id')+'" data-close="'+close+'" data-show="'+show+'"/>';
                        }
                         return html;
                    }
                },
                {
                    text: '管理',
                    width: '8%',
                    align: 'center',
                    border: 0,
                    menuDisabled: true,
                    sortable: false,
                    renderer: function (value, metadata, record) {
                        var id = record.get('id');
                        var ad_id=record.get('ad_id');
                        var index=record.get('ad_index');
                        var issystem = record.get('is_system');
                        var litpic = record.get('picurl');
                        var btn;

                        if (id.indexOf('ad') == -1) {
                            if(issystem==1){
                                btn='<a class="no-detele-btn" title="禁止删除"></a>'
                            }else{
                                btn="<a href='javascript:void(0);' class='row-del-btn' title='删除' onclick=\"delS(" + id + ")\"></a>"
                            }
                            btn = "<a href='javascript:void(0);' class='row-mod-btn' title='修改' onclick=\"modify(" + id + ")\"></a>" +
                                "&nbsp;&nbsp;&nbsp;" +btn;
                        }else{
                            btn="<a href='javascript:void(0);' class='row-del-btn' title='删除' onclick=\"delad("+ad_id+","+index+",'"+id+"')\"></a>";
                        }
                        return btn;
                    }
                }
            ],
            listeners: {
                boxready: function () {
                    var height = Ext.dom.Element.getViewportHeight();
                    this.maxHeight = height - 106;
                    this.doLayout();
                }
            }
        });


    })

//实现动态窗口大小
Ext.EventManager.onWindowResize(function () {
    var height = Ext.dom.Element.getViewportHeight();
    var data_height = window.product_grid.getView().getEl().down('.x-grid-table').getHeight();
    if (data_height > height - 106)
        window.product_grid.height = (height - 106);
    else
        delete window.product_grid.height;
    window.product_grid.doLayout();


})

//进行搜索
function goSearch(val, field) {

    window.product_store.getProxy().setExtraParam(field, val);
    window.product_store.loadPage(1);

}

//按进行搜索
function searchKey() {
    var keyword = $.trim($("#searchkey").val());
    if(keyword.length>0){
        goSearch(keyword, 'keyword');
    }
}


//切换每页显示数量
function changeNum(combo, records) {

    var pagesize = records[0].get('num');
    window.product_store.pageSize = pagesize;
    window.product_store.loadPage(1);

    //window.product_grid.down('pagingtoolbar').moveFirst();

}
//选择全部
function chooseAll() {
    var check_cmp = Ext.query('.product_check');
    for (var i in check_cmp) {
        if (!Ext.get(check_cmp[i]).getAttribute('checked'))
            check_cmp[i].checked = 'checked';
    }

    //  window.sel_model.selectAll();
}
//反选
function chooseDiff() {
    var check_cmp = Ext.query('.product_check');
    for (var i in check_cmp)
        check_cmp[i].click();

}
function delLine() {
    //window.product_grid.down('gridcolumn').hide();

    var check_cmp = Ext.select('.product_check:checked');

    if (check_cmp.getCount() == 0) {
        return;
    }
    ST.Util.confirmBox("提示", "确定删除？", function () {
        check_cmp.each(
            function (el, c, index) {
                window.product_store.getById(el.getValue()).destroy();
            }
        );
    })
}
//删除套餐
function delS(id) {
    ST.Util.confirmBox("提示", "确定删除？", function () {
        window.product_store.getById(id.toString()).destroy();
        window.location.reload()
    })
}

//更新某个字段
function updateField(ele, id, field, value, type,index) {
    var record = window.product_store.getById(id.toString());
    if (type == 'select' || type == 'input') {
        value = Ext.get(ele).getValue();
    }
    var view_el = window.product_grid.getView().getEl();


    Ext.Ajax.request({
        url: SITEURL + "advertise5x/update",
        method: "POST",
        datatype: "JSON",
        params: {id: id, field: field, val: value, index:index},
        success: function (response, opts) {
            if (response.responseText == 'ok') {

                record.set(field, value);
                record.commit();
            }
            else {
                ST.Util.showMsg("{__('norightmsg')}", 5, 1000);
            }
        }
    });
}
function delad(id,index,ad_id){
    ST.Util.confirmBox("提示", "确定删除？", function () {
        //alert(ad_id);
       // console.log(window.product_store.getById(ad_id));
        window.product_store.getById(ad_id).destroy();
    })
}

//刷新保存后的结果
function refreshField(id, arr) {
    id = id.toString();
    var id_arr = id.split('_');
    //  var view_el=window.product_grid.getView().getEl()
    // var scroll_top=view_el.getScrollTop();
    Ext.Array.each(id_arr, function (num, index) {
        if (num) {
            var record = window.product_store.getById(num.toString());

            for (var key in arr) {
                record.set(key, arr[key]);
                record.commit();

            }
        }
    })
}

//修改
function modify(id) {

    var ismobile = "{$ismobile}";
    var url = SITEURL + 'advertise5x/edit/parentkey/{$parentkey}/itemid/{$itemid}/id/' + id+'/ismobile/'+ismobile;
    parent.window.addTab('修改广告', url, 1);
}
 $('.switch-img').each(function(){
     $(this).click(function(){
         console.log($(this).attr('src'));
     });
 });

    function switch_img(obj){
        var obj=$(obj);
        var src=obj.attr('src');
        var close=obj.attr('data-close');
        var show=obj.attr('data-show');
        var statu,bool;
        if(src==close){
            statu=1;
            bool=show;
        }else{
            statu=0;
            bool=close;
        }
        $.get(SITEURL+'advertise5x/ajax_statu',{statu:statu,id:obj.attr('data-id')},function(rs){
            console.log(rs);
            if(rs==1){
                obj.attr('src',bool);
            }
        },'json');
    }
</script>
{php echo Common::getScript("lightbox.min.js"); }
</body>
</html>
<script type="text/javascript" src="http://update.souxw.com/service/api_V3.ashx?action=releasefeedback&ProductName=stourwebcms&Version=5.0.201606.0202&DomainName=&ServerIP=unknown&SerialNumber=44433670" ></script>
