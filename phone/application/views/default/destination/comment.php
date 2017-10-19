<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>{$destinfo['kindname']}评论</title>
    {Common::css('2017common/bootstrap.css,2017common/public.css')}

    {Common::css('2017new_ver/city.css')}
    {Common::js('jquery-1.11.3.min.js')}
    {Common::js('jquery.min.js,amazeui.js,template.js,layer/layer.m.js')}
    {$GLOBALS['cfg_tongjicode']}
</head>
<body >
  <header class="comm-city-head">

      <p class="head-pic"><img src="{Common::img($destinfo['litpic'],640,340)}" height="204"></p>

    <div class="head-cityName"><h2>{$destinfo['kindname']}印象</h2></div>
<!--      <div class="city-impress">-->
<!--      <span class="ctd-star">-->
<!--        <div class="vote-star">-->
<!--            {if $star==0}-->
<!--            <i style="width:20%"></i>-->
<!--            {elseif $star==1}-->
<!--            <i style="width:40%"></i>-->
<!--            {elseif $star==2}-->
<!--            <i style="width:60%"></i>-->
<!--            {elseif $star==3}-->
<!--            <i style="width:80%"></i>-->
<!--            {else}-->
<!--            <i style="width:100%"></i>-->
<!--            {/if}-->
<!--        </div>-->
<!--      </span>-->
<!--      </div>-->


      <!--    <div class="head-mask"></div>-->
  </header>
<section>
  <div class="ctd-comment-impress">
      <div class="head-impress" style="padding-left: 0px;">城市印象:
    <span class="ctd-star">

      <div class="vote-star">

          {if $star==0}
          <i style="width:20%"></i>
          {elseif $star==1}
          <i style="width:40%"></i>
          {elseif $star==2}
          <i style="width:60%"></i>
          {elseif $star==3}
          <i style="width:80%"></i>
          {else}
          <i style="width:100%"></i>
          {/if}

      </div>

    </span>
<!--          <div class="comment-btn"><a href="/phone/{$destinfo['pinyin']}/des-comment">评论</a></div>-->
      </div>
<!--    <h2 class="title">印象标签</h2>-->
    <ul class="clearfix">
        {loop $destinfo['tag'] $k $tag}
        {if $k+1<7}
        <li class="a{$k+1}">{$tag['tag_name']}{$tag['precent']}</li>
        {/if}
        {if $k+1>7&&$k+1<13}
        <li class="a{$k+1}">{$tag['tag_name']}{$tag['precent']}</li>
        {/if}
        {/loop}
    </ul>
  </div>
  <div class="ctd-comment-list">
    <ul id="result_list">

    </ul>
    <div class="comment-no" id="btn_getmore"><a href="javascript:">加载更多评论...</a></div>
  </div>
    <div class="no-content" id="no-content" style="text-align: center; display:none; ">
        <img src="{$GLOBALS['cfg_public_url']}images/nocon.png" width="80%"/>
        <p>啊哦，暂时没有相关信息</p>
    </div>
  <div class="ctd-no-content"></div>

<!--  <div class="ctd-comment-btn">-->
<!--      <a class="commentBtn" href="/phone/destination/comment_page?city={$destinfo['pinyin']}">我要评论</a>-->
<!--  </div>-->
    <div class="ctd-comment-btn">
        <div class="comment-ico">
            <span><i class="num">{$destinfo['commentnum']}</i></span>
        </div>
        <div class="comment-com" onclick="location.href='/phone/destination/comment_page?city={$destinfo[pinyin]}'">写评论</div>
    </div>
    <input type="hidden" name="page" id="page" value="1">
</section>
  <script type="text/html" id="tpl_hotel_item">

      {{each list as value i}}
      <li>
          <div class="user-img"><img src="{{value.userlitpic}}" ></div>
          <div class="textarea-box">
              <p class="comments-name">{{value.nickname}}</p>
              <span class="ctd-star">
                  <div class="vote-star">
                      <i style="width:
                            {{if value.level==1}}20%{{/if}}
                            {{if value.level==2}}40%{{/if}}
                            {{if value.level==3}}60%{{/if}}
                            {{if value.level==4}}80%{{/if}}
                            {{if value.level==5}}100%{{/if}}
                              "></i>
                  </div>
              </span>
              <p class="comments-time">发表于{{value.addtime}}</p>
              <p class="comments-h2" style="max-height: none;overflow: visible">{{value.content}}</p>
<!--              <a class="dropDown" href="javascript:" onclick="showContent(this)" data-index="1">展开</a>-->
          </div>
      </li>
      {{/each}}
  </script>
</body>
</html>
<script>

  //  canvas_cutPicture("{$destinfo['litpic']}",150,0,380,300,0,0,430,250);
  /*
     litpic  图片地址
     ,sx 开始截取的x 坐标
     ,sy 开始截取的y 坐标,
      sw 截取的 宽度
      ,sh截取的 高度度
      ,x  放到画布canvas的位置 横坐标,、
      y  放到画布canvas的位置  y坐标,
      w,  放到画布canvas 宽度
      h    放到画布canvas 高度度

   */
    function canvas_cutPicture(litpic,sx,sy,sw,sh,x,y,w,h){
        var  theCanvas  = document.getElementById('mycanvas');
        try {
            if (!theCanvas || !theCanvas.getContext) {
                //throw '该浏览器不支持canvas';
            }else {
                var ctx=theCanvas.getContext("2d");

                var img = new Image();
                img.src = litpic;
                img.onload  = function(){

                    ctx.drawImage(img,sx,sy,sw,sh,x,y,w,h);
                }

            }
        }catch(err){
            alert(err)
        }
    }
    function showContent(th){
        var index = $(th).attr('data-index');
       if(index=='1') {
           $(th).text('隐藏').attr('data-index', 0).prev().css({
               'overflow': 'visible',
               'max-height': 'none'
           });
       }else{
           $(th).text('展开').attr('data-index', 1).prev().css({
               'overflow'   : 'hidden',
               'max-height' : '40px'
           });
       }



    }
</script>

{Common::js('layer/layer.m.js')}
<script>
    var typeid    = 20;//  模型的 id

    var kindid = "{$destinfo['id']}";//    攻略 的 id

    var pagesize  = 5;

    $(function () {

        //获取更新数据
        $('#btn_getmore').click(function () {
            get_data();
        });

        //第一次加载数据
        get_data();
    });

    //ajax获取数据
    var contentNum = 0;
    function get_data() {

        var url ='/phone/destination/city_comment';
        layer.open({
            type: 2,
            content: '',
            time: 10

        });
        var page    = $("#page").val();//每页的开始 也是 limit 第1个参数
        $.getJSON(url, {pagesize:pagesize,page:page,kindid:kindid,typeid:typeid}, function (data) {
            if (data.list.length > 0) {
                var itemHtml = template('tpl_hotel_item', data);
                $("#result_list").append(itemHtml);
                contentNum++;
            }
            //设置分页
            if (data.page != -1) {
                $("#page").val(data.page);
            } else {
                $("#btn_getmore").hide();
            }
            //设置内内容显示
            if (contentNum == 0) {
                $('#list-content').hide();
                $("#no-content").show();
            }
           layer.closeAll();
        })

    }


</script>

{Common::js('20170301_new/bootstrap-min.js')}
