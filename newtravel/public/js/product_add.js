/**
 * Created by Administrator on 14-7-8.
 * 产品添加修改等页面
 */
Product={
    switchTab:function(dom,name,callback)
    {
        $(".w-set-tit span.on").removeClass("on");
        $(dom).addClass('on');
        $(".product-add-div").hide();
        $(".product-add-div#content_"+name).show();
		if(callback)
		   callback(name);
    },
    getDest:function(dom,selector,typeid)
    {
        var kindlist='';
        $(selector+" input.lk").each(function(index,ele){
             kindlist+=$(ele).val()+',';
        });
        var finaldestid=$(selector+" input.fk").val();
        kindlist=kindlist?kindlist.slice(0,-1):'';
       // ST.Destination.setDest(0,typeid,0,kindlist,Product.listDest,1,selector);
        CHOOSE.setSome("设置目的地",{maxHeight:500,loadWindow:window,loadCallback:Product.listDest},SITEURL+'destination/dialog_setdest?kindlist='+kindlist+'&typeid='+typeid+"&finaldestid="+finaldestid+"&selector="+encodeURI(selector),1)


    },
    getSpot:function(dom,selector,typeid)
    {
        var kindlist='';
        $(selector+" input.lk").each(function(index,ele){
            kindlist+=$(ele).val()+',';
        });
        var finaldestid=$(selector+" input.fk").val();
        kindlist=kindlist?kindlist.slice(0,-1):'';
        // ST.Destination.setDest(0,typeid,0,kindlist,Product.listDest,1,selector);
        CHOOSE.setSome("设置景区",{maxHeight:600,loadWindow:window,loadCallback:Product.listSpot},SITEURL+'spot/getspot?selector='+encodeURI(selector),1);
    },
    listDest:function(result,bool)
    {
        if(!bool)
         return;
        var html="";
        var finalDestId=0;
        if(result['finalDest']&&result['finalDest']['id'])
        {
            finalDestId=result['finalDest']['id'];
        }
        //alert(finalDestId);
        for(var i in result.data)
        {
            var shtml="";
            if(finalDestId==result.data[i].id)
            {
                shtml = "<span class='finaldest' title='最终目的地'><s onclick=\"$(this).parent('span').remove()\"></s>" + result.data[i].kindname + "<input type='hidden' class='lk' name='kindlist[]' value='" + result.data[i].id + "'/><input type='hidden' class='fk' name='finaldestid' value='"+finalDestId+"'/></span>";
            }else {
                shtml = "<span><s onclick=\"$(this).parent('span').remove()\"></s>" + result.data[i].kindname + "<input type='hidden' class='lk' name='kindlist[]' value='" + result.data[i].id + "'/></span>";
            }
            html+=shtml;
          $(result.selector).html(html);
        }
    },
    listSpot:function(result,bool)
    {
        if(!bool)
            return;
        var html="";

       // console.log(result);
        for(var i in result.data)
        {
            var shtml="";

                shtml = "<span><s onclick=\"$(this).parent('span').remove()\"></s>" + result.data[i].kindname + "<input type='hidden' class='lk' name='spotlist[]' value='" + result.data[i].id + "'/></span>";

            html+=shtml;
            $(result.selector).html(html);
        }
    },
    getAttrid:function(dom,selector,typeid)
    {
        var attr='';
        $(selector+" input:hidden").each(function(index,ele){
            attr+=$(ele).val()+',';
        });
        attr=attr?attr.slice(0,-1):'';
        CHOOSE.setSome("设置属性",{maxHeight:500,loadWindow:window,loadCallback:Product.listAttr},SITEURL+'attrid/dialog_setattrid?typeid='+typeid+'&attrlist='+attr+'&selector='+encodeURI(selector),1);

    }
	,
	listAttr:function(result,bool)
	{
        if(!bool)
           return;
		var html="";
        for(var i in result.data)
        {
          html+="<span><s onclick=\"$(this).parent('span').remove()\"></s>"+result.data[i].attrname+"<input type='hidden' name='attrlist[]' value='"+result.data[i].id+"'/></span>";
          $(result.selector).html(html);
        }
	}
	,getIcon:function(dom,selector)
	{
		//alert(5);
		var icon='';
        $(selector+" input:hidden").each(function(index,ele){
            icon+=$(ele).val()+',';
        });
        icon=icon?icon.slice(0,-1):'';
        CHOOSE.setSome("设置图标",{loadWindow:window,loadCallback:Product.listIcon},SITEURL+'icon/dialog_seticon?iconlist='+icon+'&selector='+encodeURI(selector),1);
	},
	listIcon:function(result,bool)
	{
		var html="";
        var icon_arr=result.data;
        for(var i in icon_arr)
        {
          html+="<span><s onclick=\"$(this).parent('span').remove()\"></s>"+"<img src='"+icon_arr[i].url+"'/>"+"<input type='hidden' name='iconlist[]' value='"+icon_arr[i].id+"'/></span>";
          $(result.selector).html(html);
        }
	},
    getSupplier:function(dom,selector)
    {
        var supplier='';
        $(selector+" input:hidden").each(function(index,ele){
            supplier+=$(ele).val()+',';
        });
        supplier=supplier?supplier.slice(0,-1):'';
        CHOOSE.setSome("设置供应商",{loadWindow:window,loadCallback:Product.listSupplier,maxHeight:500},SITEURL+'supplier/dialog_set?&suppliers='+supplier+'&selector='+encodeURI(selector),1);

    },
    listSupplier:function(result,bool)
    {
        var html="";
        for(var i in result.data)
        {
            html+="<span><s onclick=\"$(this).parent('span').remove()\"></s>"+ result.data[i].suppliername+"<input type='hidden' name='supplierlist[]' value='"+ result.data[i].id+"'/></span>";
            $(result.selector).html(html);
        }
    },
    Coordinates:function(boxwidth,boxheight)
    {
        var url = SITEURL+'public/vendor/baidumap/index.html';
        ST.Util.showBox('地图坐标识取',url,boxwidth,boxheight,function(){},0,document); 
    },
    /*
    * obj:当前对象
    * contentclass:内容对象class
    * */
    changeTab:function(obj,contentclass,stn)
    {
        var dataid = $(obj).attr('data-id');
        $(obj).addClass('on').siblings().removeClass('on');
        $(contentclass).each(function(){
            if($(this).attr('data-id') == dataid){
                $(this).show();

                $(stn).each(function(){
                    if($(this).attr('data-id')==dataid){

                        $(this).show();
                        $(this).siblings('a').hide();
                    }else{
                         $(this).hide();
                        $(this).siblings('a').show();
                    }
                })
            }
            else{
                $(this).hide();
            }

        })


    }



}
//添加主章节
//$(".addMain").click(function(){
//
//    var  zhangjie  = $(".zhangjieSeed").length*1;
//    alert(zhangjie)
//    // 新的主章节左边
//    var newLeftAdd ='<div class="zhangjieSeed">';
//    newLeftAdd+='<div onclick="s(this)" class="ClickSeed MainCatalog noOnthisSeed" id="M'+zhangjie+'">';
//    newLeftAdd+='<h4><span></span>章节'+(zhangjie+1)+'<a style="display: none;" name ="delete" onclick="dele(this)" data-id ="M'+zhangjie+'" href="javascript:void(0);"></a></h4>';
//    newLeftAdd+='</div>';
//    newLeftAdd+='<div class="addChild" onclick="chil(this)">';
//    newLeftAdd+='<a href="javascript:void(0);">添加子目录</a>';
//    newLeftAdd+='</div>';
//    newLeftAdd+='<div class="clearfix"></div>'
//    newLeftAdd+='</div>';
//
//    // 新的主章节 右边
//    var newRightAdd ='<div class="zhangjieCon" data-name="">';
//    newRightAdd+='<div style="" class="zhangjieBodyMain" id="A'+zhangjie+'">';
//    newRightAdd+='<div class="inputTit">';
//    newRightAdd+='<p>A'+zhangjie+'</p>';
//    newRightAdd+='<span></span>';
//    newRightAdd+='</div>';
//    newRightAdd+='<div class="zhangjieA none">';
//    newRightAdd+='<div class="zhangjieBiaoti">';
//    newRightAdd+='<input dayid="0" isnew="true" name ="A'+zhangjie+'" class="" maxlength="40" type="text">';
//    newRightAdd+='<label style="display: block;" class="zhangjieTitle"></label>';
//    newRightAdd+='</div>';
//    newRightAdd+='<div class="zjshengxiazi"><em>0</em>/40</div>';
//    newRightAdd+='<div class="youjiMain">';
//    newRightAdd+='<dl id="A'+zhangjie+'_con">';
//    newRightAdd+='<dt>文章内容: </dt>';
//    newRightAdd+='<dd style="line-height: 20px">';
//    newRightAdd+='{php Common::getEditor("A'+zhangjie+'_con",'d',700,400);}';
//    newRightAdd+='</dd>';
//    newRightAdd+='<dl>';
//    newRightAdd+='</div>';
//    newRightAdd+='</div>';
//    newRightAdd+='</div>';
//    newRightAdd+='</div>';
//
//    $(this).before(newLeftAdd);
//    if(zhangjie==0){
//
//    }
//    $('.zhangjieBody .zhangjieCon:last').after(newRightAdd);
//    //获取 游记id
////            var noteid  = $("#noteid").val();
////            alert(noteid);
//    //定义 主菜单/主目录 的 id
//    var main_id = "A"+zhangjie;
//    //===============
//    //获取 公共 ajax_noteid
//    var ajax_noteid = $("#ajax_noteid").val()
//    alert(ajax_noteid);
//    /* $.ajax({
//     type: "GET",
//     url: "/notes/ajax_cookie",
//     data: {main_id:main_id,ajax_noteid:ajax_noteid},
//     dataType: 'json',
//     success: function(data){
//     if(ajax_noteid=='-1'){
//     $("#ajax_noteid").val(data.noteid);
//     $("#A"+zhangjie).parent().attr("data-sqlid",data.pid)
//     }else{
//
//     $("#A"+zhangjie).parent().attr("data-sqlid",data.pid)
//     }
//
//     }
//     });
//     */
//
//
//});
