<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>客服设置</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('style.css,base.css,plist.css,kf.css'); }
    {php echo Common::getScript('config.js');}
    {php echo Common::getScript("uploadify/jquery.uploadify.min.js"); }
    {php echo Common::getCss('uploadify.css','js/uploadify/'); }


</head>
<body>
<table class="content-tab">
    <tr>
        <td width="119px" class="content-lt-td"  valign="top">
            {template 'stourtravel/public/leftnav'}
            <!--右侧内容区-->
        </td>
        <td valign="top" class="content-rt-td">
            <div class="list-top-set">
                <div class="list-web-pad"></div>
                <div class="list-web-ct">
                    <table class="list-head-tb">
                        <tr>
                            <td class="head-td-lt">
                            </td>
                            <td class="head-td-rt">
                                <a href="javascript:;" class="refresh-btn" onclick="window.location.reload()">刷新</a>
                            </td></tr>
                       </table>
                </div>
            </div>

             <div class="kefu-manage">
                <form id="frm" name="frm" onsubmit="return false;">
                    <div class="product-add-div">
                        <div class="add-class top-con">
                        <dl>
                            <dt>在线客服开关：</dt>
                            <dd>
                                <div class="on-off">
                                    <input type="radio" name="display" value="1" {if $display==1}checked="checked"{/if}>
                                    <label>开启</label>
                                    <input type="radio" name="display" value="0" {if $display==0}checked="checked"{/if}>
                                    <label>关闭</label>
                                </div>
                            </dd>
                        </dl>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div class="msg-bar">
                        <span class="on" data-rel="basic">客服设置</span>
                        <span class="" data-rel="tpl">客服样式</span>
                    </div>
                    <div class="w-set-nr" id="panel_basic">

                        <div class="product-add-div">

                            <div class="add-class">
                                <dl>
                                    <dt>QQ客服号：</dt>
                                    <dd>
                                        <div id="qq_tree_panel" class="content-nrt">

                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>客服电话：</dt>
                                    <dd>
                                        <div class="fl mr-30">
                                            <span class="fl ml-5"></span><input type="text" name="cfg_phone" class="set-text-xh text_300 mt-2 ml-10" value="{$config['cfg_phone']}">
                                            <div class="help-ico mt-10 ml-5"></div>
                                        </div>

                                    </dd>
                                </dl>
                                <dl>
                                    <dt>客服图标：</dt>
                                    <dd>
                                        <div class="fl mr-30">
                                            <input id="kf_upload" name="" type="button"/>
                                            <div>
                                                <img id="img_cfg_kefu_icon" src="{$config['cfg_kefu_icon']}"/>
                                                <input type="hidden" id="cfg_kefu_icon" name="cfg_kefu_icon" value="{$config['cfg_kefu_icon']}"/>
                                            </div>
                                            <a href="javascript:;" id="kf_del_btn" style="{if empty($config['cfg_kefu_icon'])}display: none;{/if}">删除</a>
                                        </div>

                                    </dd>
                                </dl>
                                <dl>
                                    <dt>400电话：</dt>
                                    <dd>
                                        <div class="fl mr-30">
                                            <span class="fl ml-5"></span><input type="text" name="cfg_phone_400" class="set-text-xh text_300 mt-2 ml-10" value="{$config['cfg_phone_400']}">
                                            <div class="help-ico mt-10 ml-5"></div>
                                        </div>

                                    </dd>
                                </dl>
                                <dl>
                                    <dt>官方微信：</dt>
                                    <dd>
                                        <div class="fl mr-30">
                                            <input id="wx_upload" name="" type="button"/>
                                            <div>
                                                <img id="img_cfg_weixin_logo" src="{$config['cfg_weixin_logo']}"/>
                                                <input type="hidden" id="cfg_weixin_logo" name="cfg_weixin_logo" value="{$config['cfg_weixin_logo']}"/>
                                            </div>
                                            <a href="javascript:;" id="wx_del_btn" style="{if empty($config['cfg_weixin_logo'])}display: none;{/if}">删除</a>
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>微博地址：</dt>
                                    <dd>
                                        <div class="fl mr-30">
                                            <span class="fl ml-5"></span><input type="text" name="cfg_weibo_url" class="set-text-xh text_300 mt-2 ml-10" value="{$config['cfg_weibo_url']}">
                                            <div class="help-ico mt-10 ml-5"></div>
                                        </div>

                                    </dd>
                                </dl>

                                <dl>
                                    <dt>样式位置：</dt>
                                    <dd>

                                        <div class="on-off">
                                            <input type="radio"  name="position" value="left" {if $pos=='left'}checked="checked"{/if}>
                                            <label>居左显示</label>
                                            <input type="radio" name="position" value="right" {if $pos=='right'}checked="checked"{/if}>
                                            <label>居右显示</label>
                                        </div>

                                    </dd>
                                </dl>

                                <dl>
                                    <dt>样式边距：</dt>
                                    <dd>
                                        <div class="fl mr-30">
                                            <span class="fl ml-5">左/右边距</span><input type="text"  name="posh" class="set-text-xh text_60 mt-2 ml-10" value="{$posh}">
                                            <div class="help-ico mt-10 ml-5"></div>
                                        </div>
                                        <div class="fl">
                                            <span class="fl">上边距</span><input type="text" style="" name="post" value="{$post}" class="set-text-xh text_60 mt-2 ml-10">
                                            <div class="help-ico mt-10 ml-5"></div>
                                        </div>
                                        <span class="hint-sp">*可以是数字或百分比，例如20px或20%</span>
                                    </dd>
                                </dl>

                                <dl>
                                    <dt>免费通话：</dt>
                                    <dd style="width: 790px;">
                                        <div id="freekefu_panel" style="line-height: 20px">

                                        </div>
                                    </dd>
                                </dl>

                            </div>

                        </div>


                    </div>
                    <div class="w-set-nr tpl-con" id="panel_tpl" style="display: none;" >
                        <div class="product-add-div">
                            <div class="add-class">
                                <table class="kf-tpl">
                                    <tr>
                                        <td>
                                            <div><input type="radio" name="qqcl" value="1" {if $qqcl=='1'}checked="checked"{/if}/> 客户样式1</div>
                                            <div><img src="{$GLOBALS['cfg_public_url']}/images/kf1.jpg"/></div>
                                        </td>
                                        <td valign="bottom">
                                            <span class="hint-sp">*该模板支持QQ、400电话、微信、免费通话设置显示</span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="add-class">
                                <table class="kf-tpl">
                                    <tr>
                                        <td>
                                            <div><input type="radio" name="qqcl" value="2" {if $qqcl=='2'}checked="checked"{/if}/> 客户样式2</div>
                                            <div><img src="{$GLOBALS['cfg_public_url']}/images/kf2.jpg"/></div>
                                        </td>
                                        <td valign="bottom">
                                            <span class="hint-sp">*该模板仅支持QQ客服设置显示</span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="add-class">
                                <table class="kf-tpl">
                                    <tr>
                                        <td>
                                            <div><input type="radio" name="qqcl" value="3" {if $qqcl=='3'}checked="checked"{/if}/> 客户样式3</div>
                                            <div><img src="{$GLOBALS['cfg_public_url']}/images/kf3.jpg"/></div>
                                        </td>
                                        <td valign="bottom">
                                            <span class="hint-sp">*该模板支持QQ客服、客服电话、微信、微博设置显示</span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="add-class">
                                <table class="kf-tpl">
                                    <tr>
                                        <td>
                                            <div><input type="radio" name="qqcl" value="4" {if $qqcl=='4'}checked="checked"{/if}/> 客户样式4</div>
                                            <div><img src="{$GLOBALS['cfg_public_url']}/images/kf4.jpg"/></div>
                                        </td>
                                        <td valign="bottom">
                                            <span class="hint-sp">*该模板仅支持QQ客服设置显示</span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="add-class">
                                <table class="kf-tpl">
                                    <tr>
                                        <td>
                                            <div><input type="radio" name="qqcl" value="5" {if $qqcl=='5'}checked="checked"{/if}/> 客户样式5</div>
                                            <div><img src="{$GLOBALS['cfg_public_url']}/images/kf5.jpg"/></div>
                                        </td>
                                        <td valign="bottom">
                                            <span class="hint-sp">*该模板支持QQ、客服电话、400电话、微信、微博、免费通话设置显示，
该样式不支持上边距和左右边距的设置</span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="add-class">
                                <table class="kf-tpl">
                                    <tr>
                                        <td>
                                            <div><input type="radio" name="qqcl" value="6" {if $qqcl=='6'}checked="checked"{/if}/> 客户样式6</div>
                                            <div><img src="{$GLOBALS['cfg_public_url']}/images/kf6.jpg"/></div>
                                        </td>
                                        <td valign="bottom">
                                            <span class="hint-sp">*该模板支持QQ、客服电话、400电话、微信、微博、免费通话设置显示,
该样式不支持上边距和左右边距的设置</span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="add-class">
                                <table class="kf-tpl">
                                    <tr>
                                        <td>
                                            <div><input type="radio" name="qqcl" value="7" {if $qqcl=='7'}checked="checked"{/if}/> 客户样式7</div>
                                            <div><img src="{$GLOBALS['cfg_public_url']}/images/kf7.jpg"/></div>
                                        </td>
                                        </tr>
                                    <tr>
                                        <td valign="bottom">
                                            <span class="hint-sp">*该模板支持QQ、客服电话、400电话、微信、微博设置显示，
该样式不支持样式位置、样式边距的设置</span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="add-class">
                                <table class="kf-tpl">
                                    <tr>
                                        <td>
                                            <div><input type="radio" name="qqcl" value="8" {if $qqcl=='8'}checked="checked"{/if}/> 客户样式8</div>
                                            <div><img src="{$GLOBALS['cfg_public_url']}/images/kf8.jpg"/></div>
                                        </td>
                                        <td valign="bottom">
                                            <span class="hint-sp">*该模板支持微信、微博显示，不支持上边距和左右边距的设置</span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                         </div>
                    </div>
                    <div class="opn-btn">
                        <a class="normal-btn" href="javascript:;" id="btn_save">保存</a>
                        <!-- <a class="cancel" href="#">取消</a>-->
                        <input type="hidden" name="webid" id="webid" value="0">
                    </div>
                </form>
              </div>
        </td>
    </tr>
</table>



<script>

    $(document).ready(function(){

        //删除微信
        $("#wx_del_btn").click(function(){
            $("#cfg_weixin_logo").val('');
            $("#img_cfg_weixin_logo").attr('src','');
            $(this).hide();
        });

        //删除图标
        $("#kf_del_btn").click(function(){
            $("#cfg_kefu_icon").val('');
            $("#img_cfg_kefu_icon").attr('src','');
            $(this).hide();
        });


        //菜单切换
        $(".msg-bar span").click(function(){
              $(this).addClass('on');
              $(this).siblings().removeClass('on');
              var rel=$(this).attr('data-rel');
              $(".w-set-nr").hide();
              $("#panel_"+rel).show();
        });

        //上传微信
        setTimeout(function(){
            $('#wx_upload').uploadify({
                'formData'     : {
                    'webid':0,
                    'isAd':true,
                    uploadcookie:"<?php echo Cookie::get('username')?>"
                },
                'swf'      : PUBLICURL+'js/uploadify/uploadify.swf',
                'uploader' : SITEURL+'uploader/uploadfile',
                'buttonImage' : PUBLICURL+'images/upload-ico.png',
                'fileSizeLimit' : '512KB',
                'fileTypeDesc' : 'Image Files',
                'fileTypeExts' : '*.gif; *.jpg; *.png',
                'cancelImg' : PUBLICURL+'js/uploadify/uploadify-cancel.png',
                'multi' : false,
                'removeCompleted' : true,
                'height':25,
                'width':80,
                'wmode ':'transparent',
                'removeTimeout':0.2,

                onUploadSuccess:function(file,data,response){


                    var obj = $.parseJSON(data);
                    //var obj = eval('('+data+')');
                    if(obj.bigpic!=''){
                       // alert(obj.bigpic)
                        $("#cfg_weixin_logo").val(obj.bigpic);
                        $("#img_cfg_weixin_logo").attr('src',obj.bigpic);
                        $("#wx_del_btn").show();
                       // $('#wximg')[0].src=obj.bigpic;
                        //$('#cfg_weixin_logo').val(obj.bigpic);
                       // $(".logolist").show();

                    }

                }

            });
        },10)

        //上传图标

        setTimeout(function(){
            $('#kf_upload').uploadify({
                'formData'     : {
                    'webid':0,
                    'isAd':true,
                    uploadcookie:"<?php echo Cookie::get('username')?>"
                },
                'swf'      : PUBLICURL+'js/uploadify/uploadify.swf',
                'uploader' : SITEURL+'uploader/uploadfile',
                'buttonImage' : PUBLICURL+'images/upload-ico.png',
                'fileSizeLimit' : '512KB',
                'fileTypeDesc' : 'Image Files',
                'fileTypeExts' : '*.gif; *.jpg; *.png',
                'cancelImg' : PUBLICURL+'js/uploadify/uploadify-cancel.png',
                'multi' : false,
                'removeCompleted' : true,
                'height':25,
                'width':80,
                'wmode ':'transparent',
                'removeTimeout':0.2,
                onUploadSuccess:function(file,data,response){
                    var obj = $.parseJSON(data);
                    //var obj = eval('('+data+')');
                    if(obj.bigpic!=''){
                        $("#cfg_kefu_icon").val(obj.bigpic);
                        $("#img_cfg_kefu_icon").attr('src',obj.bigpic);
                        $("#kf_del_btn").show();
                    }

                }

            });
        },10)


        //选中分类
        $(".w-set-tit").find('span').eq(1).addClass('on');
        //配置信息保存
        $("#btn_save").click(function(){
            Ext.Ajax.request({
                url   :  SITEURL+"kefu/ajax_save",
                method  :  "POST",
                isUpload :  true,
                form  : "frm",
                success  :  function(response, opts)
                {

                    var data = $.parseJSON(response.responseText);
                    if(data.status)
                    {


                        ST.Util.showMsg('保存成功!','4',2000);


                    }


                }});

        })





    });


    //客服
    Ext.onReady(
        function () {
            //store

            //选中分类
            $(".w-set-tit").find('span').eq(1).addClass('on');
            var helpico = "{php echo Common::getIco('help');}";

            Ext.tip.QuickTipManager.init();
            window.attr_store = Ext.create('Ext.data.TreeStore', {
                fields: [

                    'id',
                    'qqname',
                    'qqnum',
                    'isopen',
                    'displayorder',
                    'pid'

                ],
                proxy: {
                    type: 'ajax',
                    extraParams: {typeid: window.display_mode},
                    api: {
                        read: SITEURL+'kefu/qqlist/action/read/',  //读取数据的URL
                        update:  SITEURL+'kefu/qqlist/action/save/',
                        destroy:  SITEURL+'kefu/qqlist/action/delete/'
                    },
                    reader: 'json'
                },
                autoLoad: true,
                listeners: {
                    sort: function (node, childNodes, eOpts) {

                    }
                }

            });

            //属性树
            window.attr_treepanel = Ext.create('Ext.tree.Panel', {
                store: attr_store,
                rootVisible: false,
                padding: '0',
                renderTo: 'qq_tree_panel',
                border: 0,
                style: 'border:0px;',
                width: "100%",
                bodyBorder: 0,
                bodyStyle: 'border-width:0px',
                // selModel:sel_model,
                autoScroll: true,

                listeners: {


                    afterlayout: function (panel) {
                        var data_height = panel.getView().getEl().down('.x-grid-table').getHeight();

                        var height = Ext.dom.Element.getViewportHeight();

                        if (data_height > height - 100) {
                            window.has_biged = true;
                            panel.height = height - 100;
                        }
                        else if (data_height < height - 100) {
                            if (window.has_biged) {

                                window.has_biged = false;
                                window.attr_treepanel.doLayout();
                            }
                        }

                    }


                },
                viewConfig: {
                    forceFit: true,
                    border: 0,


                    listeners: {
                        boxready: function () {

                            var height = Ext.dom.Element.getViewportHeight();

                            this.up('treepanel').maxHeight = height - 100;
                            this.up('treepanel').doLayout();
                        }


                    }

                },
                columns: [

                    {
                        text: '排序',
                        dataIndex: 'displayorder',
                        //  tdCls:'attr-al-mid',
                        width: '10%',
                        draggable: false,
                        menuDisabled:true,
                        renderer : function(value, metadata,record) {
                            var id=record.get('id');
                            if (value == 'add')
                                return '';
                            else {
                                if(value=='9999'||value=='999999'||!value)
                                    value='';
                                return "<input type='text' class='row-edit-txt' onclick=\"ST.Util.prevPopup(event,this)\" onblur=\"updateField(this,"+id+",'displayorder',0,'input')\" value='" + value + "'/>";
                            }
                        }

                    },
                    {
                        xtype: 'treecolumn',   //有展开按钮的指定为treecolumn
                        text: '组名/QQ',
                        dataIndex: 'qqname',
                        id: 'attr_name',
                        sortable:false,
                        locked: false,
                        width: '31%',
                        menuDisabled:true,
                        editor:{xtype:'textfield',listeners:{
                            focus:function(ele,event)
                            {
                                var inputId=ele.getInputId();
                                var inputEle= $("#"+inputId)
                                var str=ele.getValue();
                                var width=80;
                                if(str)
                                {
                                    var len=str.length*20;
                                    width=len<width?width:len;
                                }
                                inputEle.css({'margin-left':3,'padding':'0px 10px','width':width});
                            }

                        }},
                        renderer : function(value, metadata,record) {
                            var id=record.get('id');
                            if(id.indexOf('add')==-1)
                            {
                                //var editHtml="<input type='text' class='row-edit-txt' value='"+value+"'  />";
                                return "<span class='row-editable-sp'>"+value+"</span>";

                            }
                            return value;

                        }
                    },
                    {
                        text: 'qq号码',
                        dataIndex: 'qqnum',
                        //  tdCls:'attr-al-mid',
                        width: '30%',
                        sortable:false,
                        menuDisabled:true,
                        renderer : function(value, metadata,record) {
                            var id=record.get('id');
                            var pid=record.get('pid');
                            if(id.indexOf('add')==-1&&pid!=0)
                            {
                                return '<input type="text" class="row-edit-txt" style="text-align:left" onclick=\"ST.Util.prevPopup(event,this)\" onblur=\"updateField(this,'+id+',\'qqnum\',0,\'input\')\" value="'+value+'"/>';
                            }
                            return value;
                        }

                    },
                    {
                        text: '开启/关闭',
                        dataIndex: 'isopen',
                        width: '20%',
                        xtype: 'actioncolumn',
                        tdCls: 'attr-al-mid',
                        sortable:false,
                        align:'center',
                        menuDisabled:true,
                        items: [
                            {
                                getClass: function (v, meta, rec) {          // Or return a class from a function

                                    var id = rec.get('id');
                                    if (id.indexOf('add') > 0)
                                        return '';
                                    if (v == 1)
                                        return 'dest-status-ok';
                                    else
                                        return 'dest-status-none';
                                },
                                handler: function (view, index, colindex, itm, e, record) {
                                    // alert(itm);
                                    var id=record.get('id');
                                    var val=record.get('isopen');
                                    var newval=val==1?0:1;
                                    updateField(null,id, 'isopen',newval);


                                }
                            }
                        ],
                        renderer : function(value, metadata,record) {
                            var id=record.get('id');
                            if(id.indexOf('add')!=-1)
                                return '';
                        }
                    },
                    {
                        text: '管理',
                        width: '10%',
                        tdCls: 'attr-al-mid',
                        align:'center',
                        menuDisabled:true,
                        renderer : function(value, metadata,record) {
                            var id=record.get('id');
                            var pid = record.get('pid');
                            if(id.indexOf('add')!=-1)
                                return '';
                            return '<a href="javascript:;" class="row-del-btn" onclick="delS('+id+')"></a>';
                        }
                    }
                ],
                plugins: [
                    Ext.create('Ext.grid.plugin.CellEditing', {
                        clicksToEdit: 1,
                        listeners: {
                            edit: function (editor, e) {

                                e.record.commit();
                                e.record.save({params: {field: e.field}});

                            },
                            beforeEdit:function(editor,e){
                                var id=e.record.get('id');
                                if(id.indexOf('add')!=-1)
                                    return false;

                            }
                        }
                    })
                ]
            });


        }
    );

    //免费客服
    Ext.onReady(
        function () {
            Ext.tip.QuickTipManager.init();
            //产品store
            window.product_store = Ext.create('Ext.data.Store', {

                fields: [
                    'id',
                    'phone',
                    'description',
                    'status',
                    'addtime',
                    'finishtime'
                ],

                proxy: {
                    type: 'ajax',
                    api: {
                        read: SITEURL+'kefu/freekefu/action/read',  //读取数据的URL
                        update: SITEURL+'kefu/freekefu/action/save',
                        destroy: SITEURL+'kefu/freekefu/action/delete'
                    },
                    reader: {
                        type: 'json',   //获取数据的格式
                        root: 'lists',
                        totalProperty: 'total'
                    }
                },
                remoteSort: true,
                pageSize: 10,
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
                renderTo: 'freekefu_panel',
                border: 0,
                width: "900px",
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
                                {num: 10},
                                {num: 30},
                                {num: 60}
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
                            // bar.down('tbfill').hide();

                            bar.insert(0, Ext.create('Ext.panel.Panel', {border: 0, html: '<div class="panel_bar"><a class="abtn" href="javascript:void(0);" onclick="chooseAll()">全选</a><a class="abtn" href="javascript:void(0);" onclick="chooseDiff()">反选</a><a class="abtn" href="javascript:void(0);" onclick="del()">删除</a></div>'}));

                            bar.insert(1, Ext.create('Ext.toolbar.Fill'));
                            //items.add(Ext.create('Ext.toolbar.Fill'));
                        }
                    }
                }),
                columns: [
                    {
                        text: '选择',
                        width: '7%',
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
                        text: '客户电话',
                        width: '16%',
                        dataIndex: 'phone',
                        align: 'left',
                        border: 0,
                        sortable: false,
                        menuDisabled:true,
                        renderer: function (value, metadata, record) {
                            return value;
                        }

                    },

                    {
                        text: '提交时间',
                        width: '14%',
                        cls:'sort-col',
                        dataIndex: 'addtime',
                        align: 'left',
                        border: 0,
                        sortable: true,
                        menuDisabled:true,
                        renderer: function (value, metadata, record) {
                            return value;
                        }

                    },
                    {
                        text: '状态',
                        width: '10%',
                        cls:'sort-col',
                        dataIndex: 'status',
                        align: 'left',
                        border: 0,
                        sortable: true,
                        menuDisabled:true,
                        renderer: function (value, metadata, record) {
                             var name=value==0?'<font color="red">未处理</font>':'已处理';
                             return name;
                        }

                    },
                    {
                        text: '回复说明',
                        width: '31%',
                        dataIndex: 'description',
                        align: 'left',
                        border: 0,
                        sortable: false,
                        menuDisabled:true,
                        renderer: function (value, metadata, record) {
                            return value;
                        }

                    },
                    {
                        text: '处理时间',
                        width: '14%',
                        dataIndex: 'finishtime',
                        align: 'left',
                        border: 0,
                        sortable: true,
                        cls:'sort-col',
                        menuDisabled:true,
                        renderer: function (value, metadata, record) {
                            return value;
                        }

                    },
                    {
                        text: '管理',
                        width: '8%',
                        align: 'center',
                        border: 0,
                        sortable: false,
                        cls: 'mod-1',
                        menuDisabled:true,
                        renderer: function (value, metadata, record) {

                            var id = record.get('id');
                            var html = "<a href='javascript:void(0);' class='row-mod-btn' onclick=\"view(" + id + ")\"></a>";
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


    //切换每页显示数量
    function changeNum(combo, records) {

        var pagesize = records[0].get('num');
        window.product_store.pageSize = pagesize;
        window.product_grid.down('pagingtoolbar').moveFirst();
        //window.product_store.load({start:0});
    }




    function getHelp(e) {
        if (e && e.stopPropagation)
        //因此它支持W3C的stopPropagation()方法
            e.stopPropagation();
        else
        //否则，我们需要使用IE的方式来取消事件冒泡
            window.event.cancelBubble = true;
    }
    function sortTrans(val) {
        if (!window.sort_direction)
            return window.parseInt(val);
        else {
            if (val == 'add'){
                if (window.sort_direction == 'ASC')
                    return 10000000000000;
                else
                    return -10;
            }
            else
                return window.parseInt(val);
        }
        // alert(val);
    }

    function addSub(pid) {

        var precord = pid == 0 ? window.attr_store.getRootNode() : window.attr_store.getNodeById(pid);
        var addnode = window.attr_store.getNodeById(pid + 'add');

        Ext.Ajax.request({
            method: 'post',
            url: SITEURL+'kefu/qqlist/action/addsub/',
            params: {pid: pid},
            success: function (response) {

                var newrecord = Ext.decode(response.responseText);
                if(pid==0)
                {
                    newrecord.leaf=false;
                }
                else
                {
                    newrecord.leaf=true;
                }
                var view_el = window.attr_treepanel.getView().getEl()
                var scroll_top = view_el.getScrollTop();
                precord.insertBefore(newrecord, addnode);
                //view_el.scroll('t',scroll_top);
            }
        });

    }
    function updateField(ele,id,field,value,type)
    {
        var record=window.attr_store.getNodeById(id.toString());
        if(type=='select'|| type=='input')
        {
            value=Ext.get(ele).getValue();
        }


        Ext.Ajax.request({
            url   :  SITEURL+"kefu/qqlist/action/update/",
            method  :  "POST",
            datatype  :  "JSON",
            params:{id:id,field:field,val:value},
            success  :  function(response, opts)
            {
                //  alert(value);
                record.set(field,value);
                record.commit();

            }});

    }
    function delS(id) {
        ST.Util.confirmBox("提示","确定删除？",function(){
                window.attr_store.getById(id.toString()).destroy();
        })
    }

    function view(id)
    {
        var url = SITEURL+'kefu/freekefu_edit/id/'+id;
        ST.Util.showBox('回复处理',url,450,180,null,null,document,{loadCallback:function(result){
            window.product_store.reload();
        },loadWindow:window});
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
        ST.Util.confirmBox("提示","确定删除这个套餐？",function(){
            check_cmp.each(
                function (el, c, index) {
                    window.product_store.getById(el.getValue()).destroy();
                }
            );
        })
    }




</script>

</body>
</html>
<script type="text/javascript" src="http://update.souxw.com/service/api_V3.ashx?action=releasefeedback&ProductName=stourwebcms&Version=5.0.201605.3101&DomainName=&ServerIP=unknown&SerialNumber=44433670" ></script>
