<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>{$destinfo['kindname']}酒店</title>

  {Common::css('2017common/bootstrap.css,2017common/public.css')}

    {Common::css('2017new_ver/hotel.css')}
    {Common::js('jquery-1.11.3.min.js')}
    {Common::js('jquery.min.js,amazeui.js,template.js')}
    {$GLOBALS['cfg_tongjicode']}
</head>
<body style="background:#FFF;">
<header id="_j_search_nav" class="Dest-search-head">
  <div class="searchBox">
    <div class="search_p">
      <form>
        <div class="search_box"> <span class="dest_search_txt" id ="searchBtn">搜索</span>
          <input id="dest_search_input" class="search_text" placeholder="搜索酒店" type="text" value="{if $keyword}{$keyword}{/if}" onkeyup="onkeys()">
          <a href="javascript:;" style="" class="dest_search_btn"></a> </div>
      </form>

    </div>
  </div>
    <script>
        function onkeys(){
            var event = window.event || arguments.callee.caller.arguments[0];
            if (event.keyCode == 13)
            {
                $(".dest_search_btn").click();
            }
        }
    </script>
    <?php //var_dump($paramName);exit;?>
  <div class="searchNav hotel-searchNav"> <a href="/phone/{$destinfo['pinyin']}/search-{$param}?rankid={$rankid}&priceid={$priceid}&attrid={$attrid}"><i></i>
   <?php //var_dump($attrid);exit;?>
    <ul class="clearfix">
      <li><span>{$paramName['rank']}</span></li>
      <li><span>{$paramName['price']}</span></li>

        {st:attr action="query" flag="grouplist" typeid="2" return="grouplist"}
        {loop $grouplist $k $group}
          {if count($paramName['attrname'])==1}
            {if $group['id']==$paramName['attrname'][0][1]}
            <li><span>{$paramName['attrname'][0][0]}</span></li>
            {else}
            <li><span>{$group['attrname']}</span></li>
            {/if}
          {else}
              {if $group['id']==$paramName['attrname'][$k][1]}
              <li><span>{$paramName['attrname'][$k][0]}</span></li>
              {else}
               <li><span>{$group['attrname']}</span></li>
              {/if}
          {/if}
        {/loop}
        {/st}


    </ul>
    </a> </div>
</header>
<section class="hotel_list_body clearfix">
  <ul class="hotel_list" id="result_list">

  </ul>
</section>
<!----没有数据  显示  start --------->
<div class="no-content" id="no-content" style="text-align: center; display:none; ">
    <img src="{$GLOBALS['cfg_public_url']}images/nocon.png" width="80%"/>
    <p>啊哦，暂时没有相关信息</p>
</div>
<!----没有数据  显示   end  --------->
<input type="hidden" id="keyword" value="{$keyword}"/>
<input type="hidden" id="page" value="1"/>

<!-----酒店 属性 ------>
<input type="hidden" id="destpy" value="{$destinfo['pinyin']}"/>
<input type="hidden" id="rankid" value="{$rankid}"/>
<input type="hidden" id="priceid" value="{$priceid}"/>
<input type="hidden" id="attrid" value="{$attrid}"/>
{Common::js('layer/layer.m.js')}
<script type="text/html" id="tpl_hotel_item">

    {{each list as value i}}
    <li class="clearfix">
        <a href="{{value.url}}" target="blank">
            <div class="hotel-pic"><img class="hotel-itemimg" src="{{value.litpic}}" alt="{{value.title}}"></div>
            <div class="hotel-info">
                <h3  class="hotel-tit">{{value.title}}</h3>
                <p class="hotel-address">{{value.address}}</p>
                <p class="hotel-servicetag"><span>满意度:{{value.satisfyscore}}</span></p>
                {{if value.price>0}}
                <p class="hotel_price"><dfn>¥</dfn><strong>{{value.price}}</strong>起<span>已售:{{value.sellnum}}</span></p>
                {{else}}
                <span><b>价格：电询</b></span>
                {{/if}}
            </div>
        </a>
    </li>
    {{/each}}
</script>

<script>


    var loading = false;//用于限制
    $(function () {
        var pages=$("#page").val();//用于 取出页面返回 自动加载下一页的bug
        if(pages==1){
            $("#page").val(1);// 如刚开始第一页 返回 就是第一页 如果不是第一页 返回页面减一为上次页面 但是当最后一页返回会有bug
        }else{
            $("#page").val(pages*1-1);
        }
        //第一次加载数据
        get_data();
        // allmap();
    });
    $(window).scroll(function(){
        // 当滚动到最底部以上100像素时， 加载新内容
        var scorllTop = $(this).scrollTop() + 100;
        var scorllHeight = $(document).height();
        var windowHeight = $(this).height();
        if (scorllTop + windowHeight > scorllHeight) {
            if(!loading){
                get_data();
            }
        }
    });

    //获取list地址
    function get_url() {
        //获取选中的目的地
        var pinyin = $("#destpy").val();

        var url = pinyin!=""?pinyin:"shijiazhuang";
        //获取priceid
        var priceid = $("#priceid").val().length==0 ? 0 :$("#priceid").val();

        //获取rankid
        var rankid = $("#rankid").val().length==0 ? 0 : $("#rankid").val();

        var attrid = $("#attrid").val().length==0 ? 0 : $("#attrid").val();

        //排序规则
        var sorttype = 0;//$("#sorttype").val();

        //搜索名称
        var keyword = $('#keyword').val();

        //当前页 page
        var page = $("#page").val();
        keyword = keyword == '' ? 0 : keyword;
        url += '-' + rankid + '-' + priceid + '-' + sorttype + '-0-' + attrid + '-' + page;
        if(keyword!=0){
            url+="?keyword="+keyword;
        }
        return url;
    }

    //ajax获取数据
    var contentNum = 0;
    function get_data() {
        loading = true;
        var paramUrl = get_url();
        var url =  '/phone/hotel/ajax_hotel_more/' + paramUrl;
        layer.open({
            type: 2,
            content: '',
            time: 20

        });
        $.getJSON(url, {}, function (data) {
            if (data.list.length > 0) {
                var itemHtml = template('tpl_hotel_item', data);
                $("#result_list").append(itemHtml);
                contentNum++;
            }
            //设置分页
            if (data.page != -1) {
                $("#page").val(data.page);
                loading = false;
            } else {
                $("#btn_getmore").hide();
                loading = true;
            }
            //设置内内容显示
            if (contentNum == 0) {
                $('#list-content').hide();
                $("#no-content").show();
            }
            layer.closeAll();
        })

    }

    $("#searchBtn").click(function(){
        sousuo();
    });
    $(".dest_search_btn").click(function(){
        sousuo();
    });

    function sousuo(){
        var keyword = $("#dest_search_input").val();
        if(keyword.length==0){
            alert('请输入关键词');
            return false;
        }else{
            var url  = "/phone/{$destinfo['pinyin']}/des-{$param}?keyword="+keyword;
            window.location.href =url ;
        }
    }
</script>
</body>
</html>
{Common::js('20170301_new/bootstrap-min.js')}