<div class="st_search_box">
    <input type="text" class="st_home_txt" id="keyword" placeholder="请输入关键词" value="{$keyword}" />
    <input type="button" class="st_home_btn btn_search" value="搜索" />
</div><!--搜索-->
<div class="tabnav">

    <ul>
        <li><a href="javascript:;" id="destname" data-py="{$destpy}">{$destname}<i class="am-icon-caret-down"></i></a></li>
        <li><a href="javascript:;">综合排序<i class="am-icon-caret-down"></i></a></li>
        <li><a href="javascript:;">筛选<i class="am-icon-caret-down"></i></a></li>
    </ul>
</div>
<div class="tabcon">
    <div class="tablist">
        <ul id="list-province">
            <li  class="hasnext" data-flag="desthot" data-id="0" data-py="all" data-ajax-div="list-city">热门</li>
            {st:dest action="query" flag="dest" pid="0" typeid="$typeid" row="99"}
            {loop $data $dest}
            <li data-id="{$dest['id']}" class="hasnext {if $dest['pinyin']==$destpy}on{/if}" data-py="{$dest['pinyin']}" data-flag="dest" data-ajax-div="list-city">{$dest['kindname']}</li>
            {/loop}
            {/st}
        </ul>
        <ul id="list-city">

        </ul>
        <ul id="list-spot">

        </ul>

    </div>
    <div class="tablist">

        <!--这里可根据typeid添加相应的排序规则-->
        <ul id="list-reorder">
            <li data-id="0" {if $sorttype==0}class="on"{/if} data-type="sorttype">默认</li>
            {if $typeid == "4" || $typeid == "6"}
            <li data-id="1" {if $sorttype==1}class="on"{/if} data-type="sorttype">点击量最高</li>
            {else}
            <li data-id="1" {if $sorttype==1}class="on"{/if} data-type="sorttype">价格从低到高</li>
            <li data-id="2" {if $sorttype==2}class="on"{/if} data-type="sorttype">价格从高到低</li>
            <li data-id="3" {if $sorttype==3}class="on"{/if} data-type="sorttype">人气最高</li>
            <li data-id="4" {if $sorttype==4}class="on"{/if} data-type="sorttype">销量最高</li>
            {/if}
        </ul>
    </div>
    <div class="tablist">
        <ul id="list-way">
            <!--这里添加对应栏目的标识-->
            {if $typeid==1}
            <li  data-id="0" data-flag="rank" data-child="gday" data-ajax-div="lsit-child">行程天数</li>
            <li  data-id="0" data-flag="lineprice" data-child="gprice" data-ajax-div="lsit-child">价格</li>
            {/if}
            {if $typeid==2}
             <li  data-id="0" data-flag="rank" data-child="grank" data-ajax-div="lsit-child">星级</li>
             <li  data-id="0" data-flag="hotelprice" data-child="gprice" data-ajax-div="lsit-child">价格</li>
            {/if}
            {if $typeid==3}
            <li  data-id="0" data-flag="kind" data-child="gkind" data-ajax-div="lsit-child">车型</li>
            {/if}
            {if $typeid==5}
              <li  data-id="0" data-flag="spotprice" data-child="gprice" data-ajax-div="lsit-child">价格</li>
            {/if}
            {loop $attrlist $attr}
            <li  data-id="{$attr['id']}" data-flag="attr" data-child="gattr{$attr['id']}" data-ajax-div="lsit-child">{$attr['attrname']}</li>
            {/loop}

        </ul>
        <ul id="lsit-child">

            <!--根据typeid来添加相应的参数-->
            {if $typeid==1}
                <li data-id="0" class="gday" data-type="dayid">全部</li>
                {st:line action="day_list"}
                    {loop $data $r}
                    <li  data-id="{$r['id']}" class="gday {if $dayid==$r['id']}on{/if}"  data-type="dayid" >{$r['title']}</li>
                    {/loop}
                {/st}

                <li data-id="0" class="gprice" data-type="priceid">全部</li>
                {st:line action="price_list"}
                    {loop $data $r}
                     <li  data-id="{$r['id']}" class="gprice {if $priceid==$r['id']}on{/if}"  data-type="priceid" >{$r['title']}</li>
                    {/loop}
                {/st}
            {/if}

            {if $typeid==2}
                <li data-id="0" class="grank" data-type="rankid">全部</li>
                {st:hotel action="rank_list"}
                  {loop $data $r}
                   <li  data-id="{$r['id']}" class="grank {if $rankid==$r['id']}on{/if}"   data-type="rankid" >{$r['title']}</li>
                  {/loop}
                {/st}

                 <li data-id="0" class="gprice" data-type="priceid">全部</li>
                {st:hotel action="price_list"}
                    {loop $data $r}
                     <li  data-id="{$r['id']}" class="gprice {if $priceid==$r['id']}on{/if}"  data-type="priceid" >{$r['title']}</li>
                    {/loop}
                {/st}
            {/if}
            {if $typeid==3}
                <li data-id="0" class="gkind" data-type="kindid">全部</li>
                {st:car action="kind_list"}
                    {loop $data $r}
                        <li  data-id="{$r['id']}" class="gkind {if $kindid==$r['id']}on{/if}"   data-type="kindid" >{$r['title']}</li>
                    {/loop}
                {/st}
            {/if}

              <!--景点价格筛选-->
             {if $typeid==5}
                <li data-id="0" class="gprice" data-type="priceid">全部</li>
                {st:spot action="price_list"}
                {loop $data $r}
                 <li  data-id="{$r['id']}" class="gprice {if $priceid==$r['id']}on{/if}"  data-type="priceid" >{$r['title']}</li>
                {/loop}
                {/st}
             {/if}


                <!--属性组-->
                {loop $attrlist $attr}
                          <li data-id="0" class="gattr{$attr['id']}" data-type="attrid">全部</li>
                    {php}$attrArr =!empty($attrid) ? explode('_',$attrid) : array();{/php}
                    {st:attr action="query" flag="childitem" typeid="$typeid" groupid="$attr['id']"}
                        {loop $data $r}
                          <li  data-id="{$r['id']}"  class="gattr{$attr['id']} {if in_array($r['id'],$attrArr)}on{/if}" data-type="attrid" >{$r['attrname']}</li>
                        {/loop}
                    {/st}
                {/loop}
        </ul>
    </div>

</div>
<div class="tab_bottom_btn">
    <a class="cancel_btn" href="javascript:;">取消</a>
    <a class="sure_btn" href="javascript:;">确定</a>
</div>

<input type="hidden" id="destpy" value="{$destpy}"/>
<input type="hidden" id="destname" value="{$destname}"/>
<input type="hidden" id="sorttype" value="{$sorttype}"/>
<input type="hidden" id="attrid" value="{$attrid}"/>

{if $typeid==1}
<input type="hidden" id="priceid" value="{$priceid}"/>
<input type="hidden" id="dayid" value="{$dayid}"/>
<input type="hidden" id="startcityid" value="{$startcityid}"/>
{/if}

{if $typeid==2}
<input type="hidden" id="rankid" value="{$rankid}"/>
<input type="hidden" id="priceid" value="{$priceid}"/>
{/if}

{if $typeid==3}
<input type="hidden" id="kindid" value="{$kindid}"/>
{/if}
{if $typeid==5}
<input type="hidden" id="priceid" value="{$priceid}"/>
{/if}

<script>
    function DestaddClass(){
        var py = '{$destpy}';
        var typeid = '{$typeid}';
        if(py != 'all'){
            $.getJSON(SITEURL+'pub/ajax_get_destall',{destpy:py,typeid:typeid},function(data){
                $(".hasnext").each(function(){
                    if($(this).attr('data-id') == data.destid){
                        if($(this).siblings().hasClass('on')){
                            $(this).removeClass('on').sibling().addClass('on');
                        }else{
                            $(this).addClass('on');
                        }
                        var hasData = $(this).data('destlist');
                        if(hasData == undefined){
                            get_next($(this),typeid)
                        }
                    }else if($(this).attr('data-id') == data.destidtwo && data.addcss == 'ok'){//选择3级目的地给2级目的地加样式
                        if($(this).siblings().hasClass('on')){
                            $(this).removeClass('on').sibling().addClass('on');
                        }else{
                            $(this).addClass('on');
                        }
                        var hasData = $(this).data('destlist');
                        if(hasData == undefined){
                            get_next($(this),typeid)
                        }
                    }else if($(this).attr('data-id') == data.destidtwo){//只选择2级目的地加样式
                        if($(this).siblings().hasClass('on')){
                            $(this).removeClass('on').sibling().addClass('on');
                        }else{
                            $(this).addClass('on');
                        }
                    }else if($(this).attr('data-id') == data.destthree){//选择3级目的地加样式
                        if($(this).siblings().hasClass('on')){
                            $(this).removeClass('on').sibling().addClass('on');
                        }else{
                            $(this).addClass('on');
                        }
                    }
                });
            })
        }
    }

    $(function(){
        DestaddClass();
        //栏目下拉
        var $tabli = $('.tabnav ul li');
        var $tablist = $('.tablist');
        var typeid = '{$typeid}';

        $tabli.click(function(){

            $('body').css('overflow','hidden')
            var $hg = $(window).height();
            $('.tablist ul').css('height',$hg-161)
            $('.tab_bottom_btn').css('display','-webkit-box')

            var index = $($tabli).index(this)
            $(this).addClass('on').siblings().removeClass('on')
            $($tablist).parent('.tabcon').show()
            $($tablist).eq(index).show().siblings().hide()
        })

        //绑定获取下级事件.
        $("body").delegate(".hasnext",'click',function(){
              get_next(this,typeid);
        })

        //热门目的地事件绑定
        $("body").delegate('.tablist ul li','click',function(){
            var py = $(this).attr('data-py');
            if($(this).parent().attr('id') == 'list-spot'){
                if(py == 'all'){
                    $("#destpy").val($("#list-city .on").attr('data-py'));
                }else{
                    $("#destpy").val(py);
                }
            }else if($(this).parent().attr('id') == 'list-city'){
                if(py == 'all'){
                    $("#destpy").val($("#list-province .on").attr('data-py'));
                }else{
                    $("#destpy").val(py);
                }
            }
            $(this).addClass('on').siblings().removeClass('on');
        })


        //属性组点击事件.
        $("body").delegate("#lsit-child li",'click',function(){
            var datatype = $(this).attr('data-type');
            var id = $(this).attr('data-id');
            var childclass = $(this).attr('class')

            if(datatype == 'attr'){
                $('#'+datatype).val()
            }
            $('#'+datatype).val(id);

            $(this).addClass('on').siblings('.'+childclass).removeClass('on');
        })

        //排序子项点击
        $('#list-reorder').children('li').click(function(){
            var datatype = $(this).attr('data-type');
            var id = $(this).attr('data-id');
            $('#'+datatype).val(id);
            $(this).addClass('on').siblings().removeClass('on');
        })

        //隐藏属性筛选

        $("#lsit-child").find('li').hide();
        $("#list-way").find('li').click(function(){
           var childclass = $(this).attr('data-child');
           $("#lsit-child").find('li').hide();
           $('#lsit-child').find('.'+childclass).show();
           $(this).addClass('on').siblings().removeClass('on');
        })


       //确定点击,整理搜索条件,在list中去实现它.

       //取消选择
        $('.cancel_btn').click(function(){
            $('.tabcon').hide();
            $('.tab_bottom_btn').hide();
        })

        //默认选中第一个
        if($("#destpy").val() == '0' || $("#destpy").val() == '' || $("#destpy").val() == 'all'){
            $($(".tablist").get(0)).find('li').first().trigger('click');
        }


    })
    /*
    * 获取下级
    * */
    function get_next(obj,typeid){
        var flag = $(obj).attr('data-flag');
        var id = $(obj).attr('data-id');
        var ajaxdiv = $(obj).attr('data-ajax-div');
        var py = $(obj).attr('data-py');

        $(obj).addClass('on').siblings().removeClass('on');
        //读取热门线路
        if(flag == 'desthot' || flag == 'dest'){

            $("#destpy").val(py);

            //如果目的地选择的全部,则返回
            if(py == 'all'){
                return false;
            }

            //如果不是最后一级,则清空第三级数据.
            if($(obj).parents('ul').attr('id')!='list-spot'){
                if(ajaxdiv == 'list-city'){
                    $("#list-city").html('');
                    $("#list-spot").html('');
                }

                //这里增加判断是否已经加载过数据,如果加载过数据,则直接加载
                var hasData = $(obj).data('destlist');

//                if(hasData == undefined){
                    //目的地获取
                    $.getJSON(SITEURL+'pub/ajax_get_dest',{flag:flag,destid:id,typeid:typeid},function(data){
                        var html = template('tpl_li_item',data);
                        $(obj).data('destlist',html);
                        $('#'+ajaxdiv).html(html);

                        DestaddClass();

                    })

//                }else{
//                    $('#'+ajaxdiv).html(hasData);
//                }

            }

        }


    }


 </script>

<script type="text/html" id="tpl_li_item">
    <li class="{{liclass}}" data-id="all" data-py="all" data-flag="{{flag}}" data-type="{{type}}">全部</li>
    {{each list as value i }}
    <li class="{{liclass}}" data-id="{{value.id}}" data-py="{{value.pinyin}}" data-flag="{{flag}}" data-type="{{type}}" data-ajax-div="{{ajaxdiv}}">{{value.kindname}}</li>
    {{/each}}
</script>

