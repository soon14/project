<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>{$destinfo['kindname']}景点</title>
    {Common::css('2017common/bootstrap.css,2017common/public.css')}

    {Common::css('2017new_ver/ticket.css')}
    {Common::js('jquery-1.11.3.min.js,jquery.min.js,amazeui.js,template.js')}
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Nv7ePdYOGgT28WZqsGZOeBuH"></script>
    {$GLOBALS['cfg_tongjicode']}
</head>
<body style="background:#FFF;">
<header id="_j_search_nav" class="Dest-search-head">
  <div class="searchBox">
    <div class="search_p">
      <form>
        <div class="search_box"> <span class="dest_search_txt" id ="searchBtn">搜索</span>
          <input id="dest_search_input" class="search_text" placeholder="搜索景点" type="text" value="{if $keyword}{$keyword}{/if}" onkeyup="onkeys()">
          <a href="javascript:;" style="" class="dest_search_btn"></a> </div>
      </form>
        <script>
            function onkeys(){
                var event = window.event || arguments.callee.caller.arguments[0];
                if (event.keyCode == 13)
                {
                    $(".dest_search_btn").click();
                }
            }
        </script>
    </div>
  </div>
  <div class="searchNav ticket-searchNav"> <a href="/phone/{$destinfo['pinyin']}/search-{$param}?themeid={$themeid}&greatid={$greatid}"><i></i>
    <ul class="clearfix">
      <li class="{if $themeid}current{/if}" data-id="{$themeid}" id="themeid"><span>{$theme}</span></li>
      <li class="{if $greatid}current{/if}" data-id="{$greatid}" id="greatid"><span>{$grea}</span></li>
    </ul>
    </a>
  </div>
</header>
<section class="ticket_list_body clearfix">
  <ul class="ticket_list" id="result_list">

  </ul>
</section>
<!----没有数据  显示  start --------->
<div class="no-content" id="no-content" style="text-align: center; display:none; ">
    <img src="{$GLOBALS['cfg_public_url']}images/nocon.png" width="80%"/>
    <p>啊哦，暂时没有相关信息</p>
</div>
<!----没有数据  显示   end  --------->
<input type="hidden" id="keyword" value="{$keyword}"/>
<input type="hidden" id="pinyin" value="{$pinyin}"/>
<input type="hidden" id="attrid" value="{if $themeid}{$themeid}{elseif $greatid}{$greatid}{elseif $attrId}{$attrId}{/if}"/>
<input type="hidden" id="page" value="1"/>
</body>
</html>
{Common::js('layer/layer.m.js')}
<script type="text/html" id="tpl_hotel_item">
    {{each list as value i}}
    <li class="clearfix" onclick="toShow(this)" data-url="{{value.url}}">
        <a href="javascript:">
            <div class="ticket-pic">{{if value.isrecommend==1}}<div class="tip">推荐</div>{{/if}}<div class="ticket-txt">{{value.kindlist}}</div><img class="Ticket-itemimg" src="{{value.new_pic}}" alt="{{value.title}}"></div>
            <div class="ticket-info">
                <h3  class="ticket-tit">{{value.title}}</h3>
                <p class="ticket-address">{{value.address}}</p>
                {{if value.greate}} <p class="ticket-servicetag"><span>{{value.greate}}景区</span></p>{{/if}}
                <p class="ticket_price">{{if value.price=='电询'}}<strong>电询</strong>{{else}}<dfn>&yen;</dfn><strong>{{value.price}}</strong>起<span>已售:{{value.sellnum}}</span>{{/if}}</p>
            </div>
        </a>
    </li>
    {{/each}}
</script>
<script type="text/javascript">
    var   loading = false;//用于限制
    if(typeof(Storage)!=="undefined") {

        //第一次加载数据
        if(localStorage.getItem('dataHtml')){
            $("#result_list").append(localStorage.getItem('dataHtml'));
            loading =  localStorage.getItem('dataLoading');
            if(loading==='false'){
                loading =false;
            }
            localStorage.removeItem('dataHtml');
            localStorage.removeItem('dataLoading');

        }else {

            $(function () {
                        get_data();

            });
        }
    }
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
            var pinyin = $("#pinyin").val();
            var url = pinyin!=""?pinyin:"shijiazhuang";
            //获取priceid
            //var priceid = $("#priceid").val();
            var priceid =0;
            //获取选中的属性
            var themeid =$("#themeid").attr("data-id");
            var greatid =$("#greatid").attr("data-id");
            if(themeid.length==0&&greatid.length==0)
            {
                var attrid =$("#attrid").val();
            }
            if(themeid.length==0&&greatid.length!=0)
            {
                var attrid = greatid;
            }
            if(themeid.length!=0&&greatid.length==0)
            {
                var attrid =themeid;
            }
            if(themeid.length!=0&&greatid.length!=0)
            {
                var attrid  =themeid+"_"+greatid;
            }
            //排序规则
            //var sorttype = $("#sorttype").val();
            var  sorttype  = 0;//1是特价排序 2 价格  3是销量 4是人气 5是满意度
            //搜索名称
            var keyword = $('#keyword').val();
            //当前页 page
            var page = $("#page").val();
            keyword = keyword == '' ? 0 : keyword;
            url += '-' + priceid + '-' + sorttype + '-0-' + attrid + '-' + page + '?keyword=' + encodeURIComponent(keyword);
            return url;
        }

        //ajax获取数据
        var contentNum = 0;
        function get_data() {
            loading = true;
            var paramUrl = get_url();
            var url = '/phone/spot/ajax_spot_more/'+paramUrl;
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

            });
        }


        $("#textfield").click(function(){
            window.open("/phone/spot/search");
        });

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
                $("#dest_search_input").focus();
                return false;
            }else{
                var url  = "/phone/{$destinfo['pinyin']}/des-{$param}?keyword="+keyword;
                window.location.href =url ;
            }
        }
   // });
    function toShow(th){
        var  url  = $(th).attr('data-url');
        // console.log(url);
        var  html = $("#result_list").html();
        localStorage.setItem('dataHtml', html);
        localStorage.setItem('dataLoading', loading);


        location.href = url;
    }

</script>

