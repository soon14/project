<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>我的订单</title>
  {Common::css('mitao/bootstrap.css')}
  {Common::css('mitao/public.css')}
  {Common::css('mitao/mitao_person.css')}
</head>
<body class="pagePerson-order">
<!-- 个人中心 头部 -->
<header class="ui-page-header">
  <h1>我的订单</h1>
  <a class="ui-page-back" href="javascript:window.history.go(-1)"></a> </header>

<section class="ui-order-list">

  <ul class="mt_order_tabs clearfix" data-toggle="tab" data-target="mt_order01">
    <li {if $type==-1}class="active"{/if} data="-1"><a href="javascript:void(0)">全部</a></li>
    <li {if $type==0}class="active"{/if} data="0"><a href="javascript:void(0)">待付款</a></li>
    <li {if $type==1}class="active"{/if}  data="1"><a href="javascript:void(0)">待使用</a></li>
    <li {if $type==2}class="active"{/if} data="2"><a href="javascript:void(0)">待评价</a></li>
    <li {if $type==3}class="active"{/if}  data="3"><a href="javascript:void(0)">退款订单</a></li>
  </ul>

  <div class="mt_desc_con" id="mt_order01">
    <div class="tab-pane active" id="result_list">

    </div>

  </div>
  <input type="hidden" id="page" value="{$page}"/>
</section>
{php echo Common::js('jquery.min.js,amazeui.js,template.js,layer/layer.m.js');}

<script type="text/html" id="tpl_list_item">
  {{each list as value i}}
  <div class="actlist" onclick="window.location.href='{{value.url}}'">
    <div class="actbox_small">
      <img src="{{value.litpic}}">
      <h2>{{value.productname}}</h2>
      <p class="c9">下单时间：{{value.addtime}}</p>
      <p class="c9"></p>


      {{if value.status == 5}}
        {{if value.isconsume == 0}}
        <p class="c9">订单状态：
          <i class="wait-pay">
               待使用
          </i>
        </p>
        <div class="price"><i class="paymoney">{{value.price}}</i><i class="dw"></i></div>

        {{else}}
          <p class="c9">订单状态：
            <i class="wait-pay">
              交易完成
            </i>
          </p>
          <div class="price"><i class="paymoney">{{value.price}}</i><i class="dw"></i></div>
          {{if value.ispinlun==0}}
          <a class="btn" href="{{value.commenturl}}">评论</a>
          {{/if}}
        {{/if}}
      {{/if}}


      {{if value.status == 1}}
        {{if value.usedate<value.now_time}}
            <p class="c9">订单状态：
              <i class="wait-pay">
                已过期
              </i>
            </p>
            <div class="price"><i class="paymoney">{{value.price}}</i><i class="dw"></i></div>
        {{else}}
          <p class="c9">订单状态：
            <i class="wait-pay">
              待付款
            </i>
          </p>
          <div class="price"><i class="paymoney">{{value.price}}</i><i class="dw"></i></div>
          <a class="btn" href="{{value.payurl}}">支付</a>
        {{/if}}
      {{/if}}


      {{if value.status ==2}}
          {{if value.usedate<value.now_time}}
            <p class="c9">订单状态：
              <i class="wait-pay">
                已过期

              </i>
            </p>
            <div class="price"><i class="paymoney">{{value.price}}</i><i class="dw"></i></div>
          {{else}}
            <p class="c9">订单状态：
              <i class="wait-pay">
                 待使用
              </i>
            </p>
            <div class="price"><i class="paymoney">{{value.price}}</i><i class="dw"></i></div>
            <a class="btn" href="/phone/mitao/order_quan?orderid={{value.id}}">查看劵码</a>
           {{/if}}
      {{/if}}

      {{if value.status ==3}}
      <p class="c9">订单状态：
        <i class="wait-pay">
          取消订单
        </i>
      </p>
      <div class="price"><i class="paymoney">{{value.price}}</i><i class="dw"></i></div>
      {{/if}}

      {{if value.status ==4}}
        <p class="c9">订单状态：
          <i class="wait-pay">
            已退款
          </i>
        </p>
        <div class="price"><i class="paymoney">{{value.price}}</i><i class="dw"></i></div>
      {{/if}}

      {{if value.status ==6}}
        <p class="c9">订单状态：
          <i class="wait-pay">
            退款中
          </i>
        </p>
        <div class="price"><i class="paymoney">{{value.price}}</i><i class="dw"></i></div>
      {{/if}}
    </div>

  </div>

  {{/each}}

</script>

<script>
  var SITEURL = "{URL::site()}";
  //初始页码

  $(function () {


    var params={

      page:1,

      type:"{$type}"

    }
      //ajax获取数据
    var loading = false;//用于限制
      var contentNum = 0;

      get_data();

      //获取更新数据

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

      //tab切换

      $('.mt_order_tabs').find('li').click(function(){

        $(this).addClass('active').siblings().removeClass('active');

        contentNum = 0;

        params.type=$(this).attr('data');

        params.page=1;

        get_data();

      });

      function get_data() {
       console.log(params);
        loading = true;
        var url = SITEURL + 'mitao/ajax_order_more';

        layer.open({

          type: 2,

          content: '',

          time: 20
        });

        $.getJSON(url, params, function (data) {

          var itemHtml='';

          if (data.list.length > 0) {

            itemHtml = template('tpl_list_item', data);

            contentNum++;

          }

          if(params.page==1){

            $("#result_list").html(itemHtml);

          }else{

            $("#result_list").append(itemHtml);

          }

          if(contentNum == 0){

           // $('#list-content').hide();

            //$("#no-content").show();

          }else{

           // $('#list-content').show();

            //$("#no-content").hide();


          }

          //设置分页

          if (data.page != -1) {

            params.page=data.page;

            loading = false;
          } else {
            loading = true;
            //$("#btn_getmore").hide();

          }


          layer.closeAll();

        });

      }

    });

</script>
</body>
</html>
