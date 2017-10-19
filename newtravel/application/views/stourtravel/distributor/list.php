<!doctype html>

<html>

<head>

    <meta charset="utf-8">

    <title>分销商管理-思途CMS{$coreVersion}</title>

    {template 'stourtravel/public/public_js'}

    {php echo Common::getCss('style.css,base.css,base2.css,plist.css'); }

    {php echo Common::getScript("choose.js"); }


</head>

<style>

    /*搜索*/



</style>

<body style="overflow:hidden">

<table class="content-tab">

    <tr>

        <td width="119px" class="content-lt-td" valign="top">

            {template 'stourtravel/public/leftnav'}

            <!--右侧内容区-->

        </td>

        <td valign="top" class="content-rt-td" style="overflow:hidden">





            <div class="list-top-set">

                <div class="list-web-pad"></div>

                <div class="list-web-ct">

                    <table class="list-head-tb">

                        <tr>

                            <td class="head-td-lt">

                                <div class="pro-search">

                                    <input type="text" id="searchkey" value="会员昵称/手机号/邮箱" datadef="会员昵称/手机号/邮箱" class="sty-txt1 set-text-xh wid_200" />

                                    <a href="javascript:;" class="head-search-btn" onclick="searchKeyword()"></a>

                                </div>

                            </td>

                            <td class="head-td-rt">

                                <a href="javascript:;" class="refresh-btn" onclick="window.location.reload()">刷新</a>

                                <a href="javascript:;" id="addbtn" class="add-btn-class ml-10" >添加</a></td>

                        </tr>

                    </table>

                </div>

            </div>



            <div id="product_grid_panel" class="content-nrt">



            </div>

        </td>

    </tr>

</table>

<script>



    window.display_mode = 1;	//默认显示模式

    window.product_kindid = 0;  //默认目的地ID

    window.kindmenu={json_encode($kindmenu)};





    Ext.onReady(

        function () {

            Ext.tip.QuickTipManager.init();

            var editico = "{php echo Common::getIco('edit');}";

            var delico = "{php echo Common::getIco('del');}";



            $("#searchkey").focusEffect();



            //添加按钮

            $("#addbtn").click(function(){

                var url=SITEURL+"distributor/add/parentkey/member/itemid/6";

                //ST.Util.showBox('添加供应商',url,'600','400',function(){window.product_store.load()});

                ST.Util.addTab('添加分销商',url,0);

            });



            //产品store

            window.product_store = Ext.create('Ext.data.Store', {



                fields: [

                    'id',

                    'distributorname',

                    'displayorder',

                    'account',

                    'linkman',

                    'telephone',

                    'kindid',

                    'mobile',

                    'qq',

                    'address',

                    'verifystatus',

                    'isoutsidesupplier',

                    'all_supplier_order'//fengjishu  0712;

                ],



                proxy: {

                    type: 'ajax',

                    api: {

                        read: SITEURL+'distributor/index/action/read',  //读取数据的URL

                        update: SITEURL+'distributor/index/action/save',

                        destroy: SITEURL+'distributor/index/action/delete'

                    },

                    reader: {

                        type: 'json',   //获取数据的格式

                        root: 'lists',

                        totalProperty: 'total'

                    }

                },



                remoteSort: true,

                pageSize: 30,

                autoLoad: true,

                listeners: {

                    load: function (store, records, successful, eOpts) {

                        if(!successful){

                            ST.Util.showMsg("{__('norightmsg')}",5,1000);

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

                width: "100%",

                bodyBorder: 0,

                bodyStyle: 'border-width:0px',

                scroll:'vertical', //只要垂直滚动条

                bbar: Ext.create('Ext.toolbar.Toolbar', {

                    store: product_store,  //这个和grid用的store一样

                    displayInfo: true,

                    emptyMsg: "",

                    items: [

                        {

                            xtype:'panel',

                            id:'listPagePanel',

                            html:'<div id="line_page"></div>'

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

                            //   bar.down('tbfill').hide();



                            bar.insert(0, Ext.create('Ext.panel.Panel', {border: 0, html: '<div class="panel_bar"><a class="abtn" href="javascript:void(0);" onclick="CHOOSE.chooseAll()">全选</a><a class="abtn" href="javascript:void(0);" onclick="CHOOSE.chooseDiff()">反选</a><a class="abtn" href="javascript:void(0);" onclick="CHOOSE.delMore()">删除</a></div>'}));



                            bar.insert(1, Ext.create('Ext.toolbar.Fill'));

                            //items.add(Ext.create('Ext.toolbar.Fill'));

                        }

                    }

                }),

                columns: [

                    {

                        text: '选择',

                        width: '5%',

                        // xtype:'templatecolumn',

                        tdCls: 'product-ch',

                        align: 'center',

                        dataIndex: 'id',

                        border: 0,

                        menuDisabled:true,

                        renderer: function (value, metadata, record) {



                            return  "<input type='checkbox' class='product_check' style='cursor:pointer' value='" + value + "'/>";



                        }



                    },

                    {

                        text:'排序',

                        width:'5%',

                        dataIndex:'displayorder',

                        tdCls:'product-order',

                        id:'column_lineorder',

                        menuDisabled:true,

                        align:'center',

                        cls:'sort-col',

                        border:0,

                        renderer : function(value, metadata,record) {

                            var id=record.get('id');

                            var newvalue=value;

                            if(value==9999||value==999999)

                                newvalue='';

                            return "<input type='text' value='"+newvalue+"' class='row-edit-txt' onblur=\"updateField(this,'"+id+"','displayorder',0,'input')\"/>";

                        }





                    },
                    {

                        text: '编号',

                        width: '5%',

                        // xtype:'templatecolumn',

                        tdCls: 'isoutsidesupplier',

                        align: 'center',

                        dataIndex: 'id',

                        border: 0,

                        menuDisabled:true,

                        renderer: function (value, metadata, record) {

                            var id=record.get('id');

                            var checked = (value <= 0 ? '' : "checked=true");

                            var x =  "<input type='checkbox' class='product_check' onchange=\"updateField(this," + id + ",'isoutsidesupplier',0,'checkbox')\" style='cursor:pointer' " + checked + "/>";

                            return x;

                        }



                    },

                    {

                        text: '分销商名称',

                        width: '12%',

                        dataIndex: 'distributorname',

                        align: 'left',

                        border: 0,

                        sortable: false,

                        menuDisabled:true,

                        renderer: function (value, metadata, record) {

                            var id=record.get('id');

                            return  "<input type='text' value='"+value+"' style='text-align:left' class='row-edit-txt' onblur=\"updateField(this,'"+id+"','distributorname',0,'input')\"/>";

                        }

                    },
                    //=================fengjishu  07.12 start
                    {

                        text: '分销商订单',

                        width: '6%',

                        dataIndex: 'all_supplier_order',

                        align: 'left',

                        border: 0,

                        sortable: false,

                        menuDisabled:true,

                        renderer: function (value, metadata, record) {

                            var id=record.get('id');
                            return  '';//"<a href='/newtravel/order/index/parentkey/order/itemid/4/typeid/5?sup_id="+id+"'>查看订单</a>";
                           // return  "<a href='/newtravel/supplier/sup_order?supid="+id+"'>查看订单</a>";

                        }

                    },
                    //==================

                    {

                        text: '分类',

                        width: '8%',

                        dataIndex: 'kindid',

                        align: 'center',

                        cls: 'mod-1',

                        sortable: false,

                        menuDisabled: true,

                        renderer: function (value, metadata, record, rowIndex, colIndex) {

                            var id = record.get('id');

                            if (!isNaN(id)) {

                                var html = "<select onchange=\"updateField(this," + id + ",'kindid',0,'select')\" class='row-edit-select'><option>所有</option>";

                                Ext.Array.each(window.kindmenu, function (row, index, itelf) {

                                    var is_selected = row.id == value ? "selected='selected'" : '';

                                    html += "<option value='" + row.id + "' " + is_selected + ">" + row.kindname + "</option>";

                                });

                                html += "</select>";

                                return html;

                            }

                        }

                    },

                    {

                        text: '是否认证',

                        width: '10%',

                        dataIndex: 'verifystatus',

                        align: 'center',

                        cls:'sort-col',

                        border: 0,

                        sortable: true,

                        menuDisabled:true,

                        renderer : function(value, metadata,record) {

                            var id=record.get('id');

                            var is_selected=" selected='selected' ";



                            var html ="<select onchange=\"updateField(this,"+id+",'verifystatus',0,'select')\" class='row-edit-select'>";

                            html+="<option value='0'" + (value==0?is_selected:'') + ">未认证</option>";

                            html+="<option value='1'" + (value==1?is_selected:'') + ">审核中</option>";

                            html+="<option value='2'" + (value==2?is_selected:'') + ">未通过</option>";

                            html+="<option value='3'" + (value==3?is_selected:'') + ">已认证</option>";

                            html+="</select>";



                            return html;

                        }



                    },

                    {

                        text: '联系人',

                        width: '10%',

                        dataIndex: 'linkman',

                        align: 'left',

                        border: 0,

                        sortable: false,

                        menuDisabled:true,

                        renderer: function (value, metadata, record) {

                            var id=record.get('id');

                            return  "<input type='text' value='"+value+"' style='text-align:left' class='row-edit-txt' onblur=\"updateField(this,'"+id+"','linkman',0,'input')\"/>";

                        }



                    },

//                    {
//
//                        text: '座机号码',
//
//                        width: '8%',
//
//                        dataIndex: 'telephone',
//
//                        align: 'left',
//
//                        border: 0,
//
//                        sortable: false,
//
//                        menuDisabled:true,
//
//                        renderer: function (value, metadata, record) {
//
//
//
//                            var id=record.get('id');
//
//                            return  "<input type='text' value='"+value+"' style='text-align:left' class='row-edit-txt' onblur=\"updateField(this,'"+id+"','telephone',0,'input')\"/>";
//
//                        }
//
//
//
//                    },

                    {

                        text: '手机号码',

                        width: '8%',

                        dataIndex: 'mobile',

                        align: 'left',

                        border: 0,

                        sortable: false,

                        menuDisabled:true,

                        renderer: function (value, metadata, record) {

                            var id=record.get('id');

                            return  "<input type='text' value='"+value+"' style='text-align:left' class='row-edit-txt' onblur=\"updateField(this,'"+id+"','mobile',0,'input')\"/>";

                        }



                    },
                    {

                        text: '收入统计',

                        width: '10.5%',

                        dataIndex: '',

                        align: 'left',

                        border: 0,

                        sortable: false,

                        menuDisabled:true,

                        renderer: function (value, metadata, record) {

                            var id=record.get('id');

                            var html = "<a href='javascript:void(0);' title='收入统计' onclick=\"distributorIncome(" + id + ")\">收入统计</a>";

                            return html;
                        }



                    },
                    {

                        text: '佣金结算',

                        width: '10.5%',

                        dataIndex: '',

                        align: 'left',

                        border: 0,

                        sortable: false,

                        menuDisabled:true,

                        renderer: function (value, metadata, record) {

                            var id=record.get('id');

                         return "";
                        }



                    },

//                    {
//
//                        text: 'QQ号码',
//
//                        width: '8%',
//
//                        dataIndex: 'qq',
//
//                        align: 'left',
//
//                        border: 0,
//
//                        sortable: false,
//
//                        menuDisabled:true,
//
//                        renderer: function (value, metadata, record) {
//
//                            var id=record.get('id');
//
//                            return  "<input type='text' value='"+value+"' style='text-align:left' class='row-edit-txt' onblur=\"updateField(this,'"+id+"','qq',0,'input')\"/>";
//
//                        }
//
//
//
//                    },

                    /* {

                     text: '地址',

                     width: '13%',

                     dataIndex: 'address',

                     align: 'left',

                     border: 0,

                     sortable: false,

                     menuDisabled:true,

                     renderer: function (value, metadata, record) {

                     var id=record.get('id');

                     return  "<input type='text' value='"+value+"' style='text-align:left' class='row-edit-txt' onblur=\"updateField(this,'"+id+"','address',0,'input')\"/>";

                     }

                     },*/

                    {

                        text: '修改',

                        width: '10%',

                        align: 'center',

                        border: 0,

                        sortable: false,

                        menuDisabled:true,

                        cls: 'mod-1',

                        renderer: function (value, metadata, record) {



                            var id = record.get('id');

                            var html = "<a href='javascript:void(0);' title='修改' class='row-mod-btn' onclick=\"modify(" + id + ")\"></a>"+

                                "&nbsp;&nbsp;&nbsp;<a href='javascript:void(0);' title='删除' class='row-del-btn' onclick=\"delS(" + id + ")\"></a>";



                            return html;

                            // return getExpandableImage(value, metadata,record);

                        }





                    }







                ],

                listeners: {

                    boxready: function () {





                        var height = Ext.dom.Element.getViewportHeight();

                        this.maxHeight = height ;

                        this.doLayout();

                    },

                    afterlayout: function (grid) {













                        var data_height = 0;

                        try {

                            data_height = grid.getView().getEl().down('.x-grid-table').getHeight();

                        } catch (e) {

                        }

                        var height = Ext.dom.Element.getViewportHeight();

                        // console.log(data_height+'---'+height);

                        if (data_height > height - 106) {

                            window.has_biged = true;

                            grid.height = height - 106;

                        }

                        else if (data_height < height - 106) {

                            if (window.has_biged) {

                                // delete window.grid.height;

                                window.has_biged = false;

                                grid.doLayout();

                            }

                        }

                    }

                },

                plugins: [

                    Ext.create('Ext.grid.plugin.CellEditing', {

                        clicksToEdit: 2,

                        listeners: {

                            edit: function (editor, e) {

                                var id = e.record.get('id');

                                //  var view_el=window.product_grid.getView().getEl();

                                //  view_el.scrollBy(0,this.scroll_top,false);

                                updateField(0, id, e.field, e.value, 0);

                                return false;



                            }



                        }

                    })

                ],

                viewConfig: {



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

        // delete window.product_grid.height;

            window.product_grid.doLayout();





    })

    //按进行搜索

    function searchKeyword() {

        var keyword = $.trim($("#searchkey").val());

        var datadef = $("#searchkey").attr('datadef');

        keyword = keyword==datadef ? '' : keyword;

        window.product_store.getProxy().setExtraParam('keyword',keyword);

        window.product_store.loadPage(1);

    }

    //切换每页显示数量

    function changeNum(combo, records) {



        var pagesize = records[0].get('num');

        window.product_store.pageSize = pagesize;

        window.product_store.loadPage(1);

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

    function del() {

        //window.product_grid.down('gridcolumn').hide();



        var check_cmp = Ext.select('.product_check:checked');



        if (check_cmp.getCount() == 0) {

            return;

        }

        ST.Util.confirmBox("提示","确定删除？",function(){

            check_cmp.each(

                function (el, c, index) {

                    window.product_store.getById(el.getValue()).destroy();

                }

            );

        })

    }





    //更新某个字段

    function updateField(ele, id, field, value, type) {

        var record = window.product_store.getById(id.toString());

        console.log(record);

        if (type == 'select'||type=='input') {

            value = Ext.get(ele).getValue();

        }

        if (type == 'checkbox') {

            value = ele.checked ? 1 : 0;

        }

        var view_el = window.product_grid.getView().getEl();





        Ext.Ajax.request({

            url: SITEURL+"distributor/index/action/update",

            method: "POST",

            datatype: "JSON",

            params: {id: id, field: field, val: value, kindid: 0},

            success: function (response, opts) {

                if (response.responseText == 'ok') {





                    record.set(field, value);

                    record.commit();

                    // view_el.scrollBy(0,scroll_top,false);

                }

                else{



                    ST.Util.showMsg("{__('norightmsg')}",5,1000);

                }

            }});



    }





    //删除套餐

    function delS(id) {

        ST.Util.confirmBox("提示","确定删除？",function(){

            window.product_store.getById(id.toString()).destroy();

        })

    }















    //刷新保存后的结果

    function refreshField(id, arr) {

        id = id.toString();

        var id_arr = id.split('_');

        // var view_el=window.product_grid.getView().getEl()

        //var scroll_top=view_el.getScrollTop();

        Ext.Array.each(id_arr, function (num, index) {

            if (num) {

                var record = window.product_store.getById(num.toString());



                for (var key in arr) {

                    record.set(key, arr[key]);

                    record.commit();

                    // view_el.scrollBy(0,scroll_top,false);

                    // window.line_grid.getView().refresh();

                }

            }

        })

    }





    //修改

    function modify(id)

    {

        var url=SITEURL+"distributor/edit/parentkey/member/itemid/6/id/"+id;

        ST.Util.addTab('修改分销商信息',url,1);

    }

    //收入统计

    function distributorIncome(id)

    {

        var url=SITEURL+"distributor/distributorIncome?distributor_id="+id;

        ST.Util.addTab('收入统计',url,1);

    }



</script>



</body>

</html>

