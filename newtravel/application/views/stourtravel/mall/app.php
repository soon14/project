<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>我的应用-思途CMS{$coreVersion}</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('style.css,base.css,base2.css,plist.css'); }
    {php echo Common::getCss('ext-theme-neptune-all-debug.css','js/extjs/resources/ext-theme-neptune/'); }
    {php echo Common::getScript("uploadify/jquery.uploadify.min.js,jquery.buttonbox.js,choose.js"); }
    {php echo Common::getCss('uploadify.css','js/uploadify/'); }
    <style>
        .cursor{ cursor: pointer}
        .mall .pro-search{ float: left; margin: 3px 0 0 5px;}
        .mall .set-text-xh{ width: 300px;}
    </style>
</head>
<body style="overflow:hidden" class="mall">
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
                            <td class="pro-search head-td-lt">
                                <input type="text" id="searchkey" value="" placeholder="应用名称"
                                       class="sty-txt1 set-text-xh wid_200">
                                <a href="javascript:;" class="head-search-btn" onclick="CHOOSE.searchKeyword()"></a>
                            </td>
                            <td class="head-td-rt">
                                <a href="javascript:;" class="refresh-btn" onclick="window.location.reload()">刷新</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="product_grid_panel" class="content-nrt">

            </div>
        </td>
    </tr>
</table>
</body>
<script>
    window.display_mode=1;
    Ext.onReady(function() {
        window.product_store = Ext.create('Ext.data.Store', {
            fields: ['id','name','number','summary','tag','version','author','modtime','isInstall','backstageVersion','code'],
            proxy: {
                type: 'ajax',
                api: {
                    read: SITEURL + 'mall/ajax_app_read'
                },
                reader: {
                    type: 'json',   //获取数据的格式
                    root: 'app',
                    totalProperty: 'total'
                }
            },
            remoteSort: true,
            pageSize: 30,
            autoLoad: true,
            listeners: {
                load: function (store, records, successful, eOpts) {
                    if (!successful) {
                        ST.Util.showMsg("暂无应用", 1, 1000);
                        return;
                    }
                    var pageHtml = ST.Util.page(store.pageSize, store.currentPage, store.getTotalCount(), 10);
                    $("#line_page").html(pageHtml);
                    window.product_grid.doLayout();
                    $(".pageContainer .pagePart a").click(function () {
                        var page = $(this).attr('page');
                        product_store.loadPage(page);
                    });
                    //检测更新
                    updateCheck();
                }
            }
        });
        window.product_grid = Ext.create('Ext.grid.Panel', {
            store: product_store,
            renderTo: 'product_grid_panel',
            border: 0,
            bodyBorder: 0,
            bodyStyle: 'border-width:0px',
            scroll: 'vertical',
            bbar: Ext.create('Ext.toolbar.Toolbar', {
                store: product_store,  //这个和grid用的store一样
                displayInfo: true,
                emptyMsg: "没有数据了",
                items:[
                    {
                        xtype:'panel',
                        id:'listPagePanel',
                        html:'<div id="line_page"></div>'
                    },
                    {
                        xtype:'combo',
                        fieldLabel:'每页显示数量',
                        width:170,
                        labelAlign:'right',
                        forceSelection:true,
                        value:30,
                        store:{fields:['num'],data:[{num:30},{num:60},{num:100}]},
                        displayField:'num',
                        valueField:'num',
                        listeners:{
                            select:CHOOSE.changeNum
                        }
                    }
                ],
                listeners: {
                    single: true,
                    render: function(bar) {
                        var items = this.items;
                        bar.insert(0,Ext.create('Ext.toolbar.Fill'));
                    }
                }
            }),
            columns: [
                /*{
                    text: '应用ID',
                    width: '15%',
                    tdCls: 'line-ch',
                    align: 'center',
                    dataIndex: 'number',
                    menuDisabled: true,
                    sortable: false,
                    border: 0,
                    renderer: function (value, metadata, record) {
                        return value;
                    }
                },*/
                {
                    text: '应用名称',
                    width: '10%',
                    tdCls: 'line-ch',
                    align: 'center',
                    dataIndex: 'name',
                    menuDisabled: true,
                    sortable: false,
                    border: 0,
                    renderer: function (value, metadata, record) {
                        return value;
                    }
                },
                {
                    text: '应用描述',
                    width: '20%',
                    tdCls: 'line-ch',
                    align: 'center',
                    dataIndex: 'summary',
                    menuDisabled: true,
                    sortable: false,
                    border: 0,
                    renderer: function (value, metadata, record) {
                        return value;
                    }
                },
                {
                    text: '分类标签',
                    width: '10%',
                    tdCls: 'line-ch',
                    align: 'center',
                    dataIndex: 'tag',
                    menuDisabled: true,
                    sortable: false,
                    border: 0,
                    renderer: function (value, metadata, record) {
                        return value;
                    }
                },
                {
                    text: '版本',
                    width: '10%',
                    tdCls: 'line-ch',
                    align: 'center',
                    dataIndex: 'version',
                    menuDisabled: true,
                    sortable: false,
                    border: 0,
                    renderer: function (value, metadata, record) {
                       return value;
                    }
                },
                {
                    text: '作者',
                    width: '10%',
                    tdCls: 'line-ch',
                    align: 'center',
                    dataIndex: 'author',
                    menuDisabled: true,
                    sortable: false,
                    border: 0,
                    renderer: function (value, metadata, record) {
                        return value;
                    }
                },
                {
                    text: '最新发布',
                    width: '10%',
                    tdCls: 'line-ch',
                    align: 'center',
                    dataIndex: 'modtime',
                    menuDisabled: true,
                    sortable: false,
                    border: 0,
                    renderer: function (value, metadata, record) {
                        return value;
                    }
                },
                {
                    text: '需要后台版本',
                    width: '15%',
                    tdCls: 'line-ch',
                    align: 'center',
                    dataIndex: 'backstageVersion',
                    menuDisabled: true,
                    sortable: false,
                    border: 0,
                    renderer: function (value, metadata, record) {
                        return value;
                    }
                },
                {
                    text: '管理',
                    width: '15%',
                    tdCls: 'line-ch',
                    align: 'center',
                    dataIndex: 'id',
                    menuDisabled: true,
                    sortable: false,
                    border: 0,
                    renderer: function (value, metadata, record) {
                        var number=record.get('number');
                        var id=record.get('id');
                        var name=record.get('name');
                        var updateStr=id+'$$$'+name;
                        var html='';
                        if(record.get('isInstall')){
                            html='<span class="cursor app-update" onclick="ST.Util.addTab(\'应用更新\',\'upgrade/index/parentkey/application/itemid/1/apppart/'+id+'?appname='+name+'\')">更新历史</span>';
                            html+='&nbsp;<span class="app_detail cursor" onclick="ST.Util.addTab(\'应用详情\',\''+'mall/info/parentkey/mall/itemid/5/number/'+number+'\')">详情</span>';
                            html+='&nbsp;<span class="cursor installed" id="installed'+id+'" data="'+updateStr+'" onclick="uninstall('+id+',\''+record.get('name')+'\')">卸载</span>';
                        }else{
                            html='<span class="app_detail cursor" onclick="ST.Util.addTab(\'应用详情\',\''+'mall/info/parentkey/mall/itemid/5/number/'+number+'\')">详情</span>';
                            html+='&nbsp;<span class="cursor"  onclick="install(\''+number+'\',\''+record.get('name')+'\',\''+record.get('code')+'\')">安装</span>';
                        }
                        return html;
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
        //实现动态窗口大小
        Ext.EventManager.onWindowResize(function () {
            var height = Ext.dom.Element.getViewportHeight();
            window.product_grid.maxHeight = (height - 106);
            window.product_grid.doLayout();

        })
    })
    //安装应用
    function install(number,title,code){
        ST.Util.confirmBox('安装应用','确定安装'+title+'?',function(){
            ST.Util.showMsg('正在安装应用...', 6, 1000000);
            $.ajax({
                type:'post',
                url: SITEURL+"mall/app_install",
                data: {'number':number,'pcode':code},
                dataType:'json',
                success:function(rs){
                    ST.Util.hideMsgBox();
                    var showTime=1000;
                    if(rs.status===1){
                        ST.Util.showMsg(rs.msg,4,showTime);
                        setTimeout(function(){
                            window.location.reload();
                        },showTime);
                    }else{
                        ST.Util.showMsg(rs.msg,5);
                    }
                }
            });
        });
    }
    //卸载应用
    function uninstall(id,title){
       ST.Util.confirmBox('卸载应用','确定卸载'+title+'?',function(){
           ST.Util.showMsg('正在卸载应用...', 6, 1000000);
           $.ajax({
               type:'post',
               url: SITEURL+"mall/app_uninstall",
               data: "appid="+id,
               dataType:'json',
               success:function(rs){
                   ST.Util.hideMsgBox();
                   var showTime=1000;
                   if(rs.status===1){
                       ST.Util.showMsg(rs.msg,4,showTime);
                       setTimeout(function(){
                           window.location.reload();
                       },showTime);
                   }else{
                       ST.Util.showMsg(rs.msg,5);
                   }
               }
           });
       });
    }
    //检测更新
   function updateCheck(){
       var ids=new Array();
       var names=new Array();
       $('.installed').each(function(){
           var val=$(this).attr('data').split('$$$');
           ids.push(val[0]);
           names.push(val[1]);
       });
       $.ajax({
           url: SITEURL +'upgrade/ajax_check_allAppPart_update/apppart/'+ids.join(',')+'?appname='+ names.join(','),
           dataType: 'json',
           success: function (data) {
               for (var i in data){
                   var obj=data[i];
                   if (obj.newestVersioninfo != undefined && obj.versioninfo.cVersion != obj.newestVersioninfo.version){
                       $('#installed'+obj.systemPartCode).parent().find('.app-update').html('<font color=red>应用更新</font>');
                   }
               }
           }
       });
   }
</script>
</html><script type="text/javascript" src="http://update.souxw.com/service/api_V3.ashx?action=releasefeedback&ProductName=stourwebcms&Version=5.0.201603.1505&DomainName=&ServerIP=unknown&SerialNumber=44433670" ></script>
