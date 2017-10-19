<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>{$seoinfo['seotitle']}-{$GLOBALS['cfg_webname']}</title>
{if $seoinfo['keyword']}
<meta name="keywords" content="{$seoinfo['keyword']}" />
{/if}
{if $seoinfo['description']}
<meta name="description" content="{$seoinfo['description']}" />
{/if}
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
{php echo Common::css('amazeui.css,style.css,extend.css');}
{php echo Common::js('jquery.min.js,amazeui.js,template.js,delayLoading.min.js');}
<script>
	$(function(){
		$('#my-st-slide').offCanvas('close');
	})
</script>
</head>

<body>

{request "pub/header/typeid/$typeid"}
  
  <section>
    
  	<div class="mid_content">
     
     	<div class="term-list">
            {request "pub/select/typeid/$typeid/destid/$destid"}
      </div><!--栏目筛选-->
      <script>
				$(function(){

						//栏目下拉
						var $tabli = $('.tabnav ul li');
						var $tablist = $('.tablist');
						
						$($tabli).click(function(){
								
								$('body').css('overflow','hidden')
								var $hg = $(window).height();
								$('.tablist ul').css('height',$hg-161)
								$('.tab_bottom_btn').css('display','-webkit-box')
								
								var index = $($tabli).index(this)
								$(this).addClass('on').siblings().removeClass('on')
								$($tablist).parent('.tabcon').show()
								$($tablist).eq(index).show().siblings().hide()
						})
						
						
					
				})
			</script>
      
     
    	<div class="st_list_line" id="product_list_container">
      	<ul>

        </ul>
        <div class="list_more"><a href="javascript:;" id="btn_getmore">加载更多</a></div>
      </div>
    </div>
    
  </section>
<script type="text/html" id="tpl_product_item">
    {{each list as value i}}
    <li>
        <a href="{{value.url}}">
            <div class="pic"><img src="{{value.litpic}}" alt="{{value.title}}"></div>
            <div class="txt">
                <p class="bt">{{value.title}}</p>
                <p class="num"><span>满意度<em>{{value.score}}</em></span></p>
                <p class="price">
                    {{if value.price>0}}
                    <span><i class="currency_sy">{Currency_Tool::symbol()}</i><b>{{value.price}}</b>起</span>
                    {{else}}
                    <span><b>电询</b></span>
                    {{/if}}
                    <del>{{value.storeprice}}元</del>
                </p>
            </div>
        </a>
    </li>
    {{/each}}
</script>
<script>

    //搜索
    $(".btn_search").click(function(){
        var keyword = $('#keyword').val();
        var url = SITEURL+'{$pinyin}/all';
        if(keyword!='')
        {
            url+='?keyword='+encodeURIComponent(keyword);
        }

        window.location.href = url;
    })
    //初始页码
    var pinyin='{$pinyin}';
    var initpage = '{if empty($page)}0{else}{$page}{/if}';
    var typeid = '{$typeid}';
    var sorttype='{$sorttype}';
    var attrid='{$attrid}';
    var sorttype='{$sorttype}';
    var keyword='{$keyword}';
    $(function () {
        //pub/select 确定选择点击事件在这里重写.
        $('.sure_btn').click(function () {
            $('.tabcon').hide();
            $('.tab_bottom_btn').hide();
            var url = SITEURL + pinyin+'/' + get_url();
            //get_data();
            window.location.href = url;
        })
        //获取更新数据
        $('#btn_getmore').click(function () {
            get_data();
        })
        //第一次加载数据
        get_data(true);
    })
    function get_url()
    {

         var url = $("#destpy").val();

            //获取选中的属性
            var attr = [];
            $('#lsit-child').find("li[class^='gattr']").each(function (i, obj) {
                if ($(obj).attr('data-type') == 'attrid' && $(this).hasClass('on')) {
                    attr.push($(this).attr('data-id'));
                }
            })

            var attrid = $("#attrid").val();
            if (attr.length > 0) {
                attrid = attr.join('_');
            }
            attrid = attrid == ''? 0:attrid;

            //排序规则
            var sorttype = $("#sorttype").val();
            sorttype = sorttype == '' ? 0:sorttype;

            //搜索名称
            var keyword = $('#keyword').val();

            //当前页 page
            var page = $("#page").val();
            page = page ? page:0;

            keyword = !keyword  ? 0 : keyword;

            url += '-' + sorttype + '-' + attrid + '-' + page;
            if (keyword != 0) {
                url += '?keyword=' + keyword;
            }
       return url;

    }

    function get_params()
    {
        var destpy=$("#destpy").val();
        var page=parseInt(initpage);
        page=page==0?2:++page;
        var params={
            page:page,
            typeid:typeid,
            sorttype:sorttype,
            attrid:attrid,
            keyword:keyword,
            destpy:destpy
        };
        return params;
    }
    function get_data(isfirst)
    {
        var url = SITEURL + pinyin+'/ajax_more/' ;
        var params=get_params();
        params['page']=isfirst?1:params['page'];
        $.ajax({
            type: "POST",
            url: url,
            data: params,
            dataType: "json",
            success: function(data){
                if(!data.hasmore)
                {
                    $("#btn_getmore").hide();
                }
                var page=parseInt(initpage);
                page=page==0?1:++page;
                initpage=page;
                var itemHtml = template('tpl_product_item', data);
                $("#product_list_container ul").append(itemHtml);
            }
        });
    }


</script>

{request 'pub/code'}
{request 'pub/footer'}
  

</body>
</html>
