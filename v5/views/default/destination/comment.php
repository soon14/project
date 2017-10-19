<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$info['kindname']}-评论</title>
  {Common::css('common/bootstrap-min.css,common/public.css,mycss/destination/Destination.css')}

  {Common::js('common/jquery-1.11.3.min.js,common/bootsAitto-min.js,myjs/destination/Destination.js')}

<style>

</style>
  <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Nv7ePdYOGgT28WZqsGZOeBuH">

  </script>
  {$GLOBALS['cfg_tongjicode']}
</head>
<body class="Color-fafafa">
<!-- 登陆代码 开始 -->
{request "pub/header"}
<!-- 登陆代码 结束 -->
<div class="notebox"></div>
<section> 
  <!-- 面包屑 开始 -->
  <div  class="BreadCrumb Color-fff">
    <ul >
      <li><a href="#">首页<i class="icon-gt">&gt;</i></a></li>
      <li><a href="#">{$info['kindname']}<i class="icon-gt">&gt;</i></a></li>
      <li class="current"><a href="#">评论</a></li>
    </ul>
    <div class="clearfix"></div>
  </div>
  <!--  面包屑 结束 --> 
</section>
<section>
  {request "pub/CommonNav"}
</section>
<div class="container">
  <section> 
    <!-- 内容备注-->
    <div class="ctd-comment-list">
      <div class="ctd-main">
        <div class="ctd-comment-impress">
          <div class="ctd-com">
            <div class="impressH2"></div>
            <ul>
              {loop $info['tag'] $k $tag}
              {if $k+1<7}
              <li class="a{$k+1}">{$tag['tag_name']}</li>
              {/if}
              {if $k+1>7&&$k+1<13}
              <li class="a{$k-6}">{$tag['tag_name']}</li>
              {/if}
              {/loop}

            </ul>
          </div>
          <div class="ctd-city"><img src="{$info['litpic']}" width="450" height="250" /> </div>
          <div class="clearfix"></div>
        </div>
        <div class="ctd-comment">
          <div class="ebmc-content">
            <div class="ebm-title">发表评论</div>
            <div class="nchcomments-box nch-box"> <a title="" class="nchimg"><img src="{if $userinfo['litpic']}{$userinfo['litpic']}{else}{Common::nopic()}{/if}"></a>
              <div class="nchtextarea right"> <i class="tip-icon--left-sangle"></i>
                <textarea class="ebmc-textarea" cols="30" rows="10" maxlength="500"   placeholder="喜欢这座城市吗？说点什么吧..." onkeyup="zifu(this)"></textarea>
                <span class="tbmac-tip tbmac-tip-normal">已输入<b><em>0</em>/500</b>字</span> </div>
              <div class="clearfix"></div>
            </div>
            <!--城市标签 开始-->
            <div class="city-label right" id="checkbox">
              <h4>
                <span class="ctd-star">
                <div class="vote-star" id="star">
                  <span>石家庄印象：</span>
                  <ul>
                    <?php for($p=0;$p<5;$p++):?>
                    <li>
                      <a href="javascript:;"><?php echo $p;?></a>
                    </li>
                    <?php endfor?>
                  </ul>
                  <span></span>
                  <p></p>
                </div>
                </span>
              </h4>
              <h4>石家庄标签：（最多选择3个标签）</h4>
              <ul class="options">
                {loop $info['tag'] $k $tag}
                <li>
                  <input type="hidden" name="tag{$k+1}"  value="{$tag['id']}">
                  <i class="checkbox-icon"></i>{$tag['tag_name']}
                </li>
                {/loop}
              </ul>
              <div class="clearfix"></div>
            </div>
            <!--城市标签 结束-->
            
            <div class="clearfix"></div>
            <div class="ebmc-info"> <a href="javascript:;" class="ebmc-button tj-btn">评论</a> </div>
          </div>
          <div class="ebmc-list">
            <ul>
              <ul id="result_list">

              </ul>
              <div class="pages Pagination" >

              </div>

            </ul>
          </div>
        </div>
      </div>
      <div class="ctd-side">
        <div class="sid-remark">
          <!-- Baidu Button BEGIN --> 
          <div id="bdshare" class="bdshare_b" style="line-height: 12px;">
            <img src="http://bdimg.share.baidu.com/static/images/type-button-1.jpg?cdnversion=20120831"/>
            <a class="shareCount"></a>
          </div>

          <script type="text/javascript" id="bdshare_js" data="type=button&amp;uid=6725816" ></script>

          <script type="text/javascript" id="bdshell_js"></script>

          <script type="text/javascript">

            document.getElementById("bdshell_js").src
                =
                "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion="

                +

                Math.ceil(new

                        Date()/3600000);

          </script>

          <!-- Baidu Button END --> 
          <br/>  <br/>
          <span class="dp-txt">分享城市的美好</span>
          <br/>
          <!--          <a href="javascript:;" class="nslog" ><i class="sid-remark-icon"></i></a>-->
          <p><span class="sid-remark-num"><a href="javascript:;" class="nslog"}>{$info['commentnum']}</a></span><span class="sid-remark-desc">条点评</span></p>
           </div>
        <div class="sid-daren">
          <h3 class="nav-font"><span>达人堂</span><em>爱旅行，更爱分享</em></h3>
          <div class="sid-daren-list">
            <ul>
              {loop $info['authors'] $mem}
              <li class="usercard"><a  class="avatar nslog" ><img src="{if empty($mem[0]['litpic'])}{Common::nopic()}{else}{$mem[0]['litpic']}{/if}" height="35" width="35"></a></li>
              {/loop}
              <li class="home-more"><a href="javascript:;" class="nslog" ><em>{$info['bigMan']}位达人</em></a></li>
            </ul>
          </div>
        </div>
        <div class="side-box">
          <h4>城市地图</h4>
          <div class="sid-mapCity">
            <div class="sid-mapImg" id="destmap">  </div>
            <a class="j-map-zoom" href="/{$info['pinyin']}?param=map"><span>查看完整地图</span></a>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </section>
</div>
{request "pub/footer"}
<input type="hidden" id="user" value="{$userinfo['mid']}"/>
<input type="hidden" id="code" value="{$checkcode}"/>

<!----分页----->
<input type="hidden" name="offset" id="offset" value="">
<input type="hidden" name="page" id="page" value="1">
<input type='hidden' id='next1' value="">
<!----分页------->
</body>
</html>
{Common::js('layer/layer.js',0)}
<script>

//提交问答
  $(".tj-btn").click(function(){
    var user      = $("#user").val();
    // return false;
    var urls      = window.location.href;//获取当前页面的地址 当做重定向地址
    if(user.length==0){
      var url = '/member/login/?redirecturl='+urls;//
      window.location.href  =url ;
    }else {
      var kindid = "{$info['id']}";

      var code = "{$checkcode}";

      var typeid = 20;//  定义 此项  的模型 为 20  注 模型表里没有 该项

      var content = $("textarea[class=ebmc-textarea]").val();

      var tags     = $("li[class=checked]").length;

      var  level   = $("li[class=onaa]").length;
     // alert(level);

      if (content.length < 5) {
        layer.msg('{__("回复内容太少")}', {
          icon: 5
        })
        return false;
      }
      if(level<1||level>5){
        layer.msg('{__("选择你的城市印象")}', {
          icon: 5
        })
        return false;
      }
      if(tags>3){
        layer.msg('{__("最多选择3个标签")}', {
          icon: 5
        })
        return false;
      }
      if(tags==0){
          layer.msg('{__("请选择标签")}', {
          icon: 5
        })
        return false;
      }
      var tag =new  Array();
      var i=1;
      $("li[class=checked]").each(function(){

        tag.push('tag'+i+'='+$(this).find('input').val());
        i++;
      });

       var   ta="kindid="+kindid+"&typeid="+typeid+"&content="+content+"&tags="+tags+"&level="+level+"&code="+code;
             ta+="&"+tag.join("&");
//alert(ta);
      $.ajax({
        type: 'POST',
        url: '/destination/kindcomment',
        data:ta,
        dataType:'json',
        success: function (data) {
         if(data['status']==111) {

           layer.msg("评论成功");
           location.reload();

         }else if(data['status']==112){

           layer.msg(data['msg']);
         }

        }

      })

    }
  })
</script>
<script type="text/javascript">
  var map = new BMap.Map("destmap");
  //==========================================
  map.centerAndZoom("{$info['kindname']}", 11);
  map.addControl(new BMap.NavigationControl());//地图平移缩放控件
</script>
<script type="text/javascript">
  window.onload = function() {

    var oStar = document.getElementById("star");
    var oLi = oStar.getElementsByTagName("li");

    //这里标签后面的数组表示同一类标签的第一个元素

    var oUl = oStar.getElementsByTagName("ul")[0];
    var oSpan = oStar.getElementsByTagName("span")[1];
    var oP = oStar.getElementsByTagName("p")[0];

    var iScore = iStar = 0;

    var aMsg = ['很不满意', '不满意', '一般', '满意', '非常满意']

    for(var i = 0; i < oLi.length; i++) {

      oLi[i].index = i + 1
      //
      //保证当前数字从从1开始，实际位置为0（因为是数组）
      oLi[i].onmousemove = function() {
        showStar(this.index);
      };
      //当鼠标离开后，那么当前调用函数无参数，选择默认样式
      oLi[i].onmouseout = function() {
        showStar();
      };

      // 单击时，用全局变量暂存对应的数字，这样下一次滑动，
      // 单击的数字颜色就会改变
      oLi[i].onclick = function() {
        iStar = this.index;
      }
    }



    //这里主要控制星星的变色问题，如果参数为真值，那么就选择带有颜色的样式，否则反之

    function showStar(_index) {

      //因为isStar始终为零，所以或运算结果为左边的数字

      iScore = _index || iStar

      for(var i = 0; i < oLi.length; i++) {

        oLi[i].className = i < iScore ? "onaa" : "";
       // oLi[i].css("background-position","0 1px")
      }

    }

  }
  function zifu(th){
    var thisval=$(th).val().length*1;
    var shengyu = 500-thisval;
    if(shengyu>0) {
      var html = "已输入<b><em>" + thisval + "</em>/" + shengyu + "</b>字";
      $(th).next('span').html(html);
    }else{
      layer.msg('{__("不能输入了")}', {
        icon: 5
      })
      return false;
    }
  }
</script>
<script type="text/javascript">
  var pagesize  = 5;//0;//0;//0;//每页的页数

  $(document).ready(function(){
    $(function () {
      var  s ='';
      //第一次加载数据
      get_data(s);

    });

  });
  function get_data(s) {

    var offset    = $("#offset").val().length==""? 0:$("#offset").val();//  每页的开始 也是 limit 第1个参数

    var kindid = "{$info['id']}";//    攻略 的 id

    var typeid    = 20;//  模型的 id

    $.ajax({
      type: "POST",
      url: SITEURL + 'destination/ajax_get_comment',
      async:false,
      dataType: "json",
      data: {pagesize:pagesize,offset:offset,kindid:kindid,typeid:typeid},
      success: function(data){

        var page1      =$("#page").val()*1;//   当前页面
        var itemHtml = "";
        var pages    = "";
        $("#result_list").empty();
        $(".Pagination").empty();
        if(s==''){
        }else if(s=='pre'){
          $("#page").val(page1*1-1);
        }else if(s=='next'){
          $("#page").val(page1*1+1);
        }else{
          $("#page").val(s*1);
        }
//        var  page3 =  $("#page").val()*1;//   当前页面
//        var  p    = (page3-1)*pagesize;
        if(data.length!=0){
          for(var i=0;i<data.length;i++){

            itemHtml +="<li>";

            if(data[i].userlitpic==null){
              itemHtml +="<div class='user-img'><img src='{Common::nopic()}'></div>";
            }else{
              itemHtml +="<div class='user-img'><img src='"+data[i].userlitpic+"'></div>";
            }

            if(data[i].nickname==null){

              itemHtml +="<div class='textarea-box'> <span class='comments-name'>"+data[i].wx_nickname+"</span>";

            }else{
              itemHtml +="<div class='textarea-box'> <span class='comments-name'>"+data[i].nickname+"</span>";
            }

            itemHtml +="<span class='comments-h2'>"+data[i].content+"</span>";
            itemHtml +="<span class='comments-time'>"+data[i].addtime+"</span></div>";
            itemHtml +="</li>";
          }
        }else{
          itemHtml +="<li>";
          itemHtml +="没有相关数据";
          itemHtml +="</li>";
        }

        var page2      =$("#page").val()*1;//   当前页面
        //  定义 系数
        var coefficient = Math.floor((page2-1)/pagesize);
        //   定义 开始和结束 页面
        var startpage    = coefficient*pagesize+1;
        var endpage      = coefficient*pagesize+2;
        endpage   =  endpage>data[0]['totalpage'] ? data[0]['totalpage'] : endpage;
        if(data[0]['totalpage']!=0){
          pages  +="<div id='Pagination'><div class='pagination'>";
          pages  +="<a class='uPrevpage' onclick='page(1)'><i></i>首页</a>";
          pages  += "<a class='uPrevpage' onclick='pre()'><i></i>上一页</a>";

          for(var j=startpage;j<=endpage;j++){

            pages  += "<a href='javascript:' onclick='page("+j+")' ";
            if(page2==j) {
              pages += " class='current' ";
            }
            pages  += ">"+j+"</a>" ;

          }
          pages  += "<a class='next' onclick='next()'>下一页 <i></i></a>";
          pages  += "<a class='next' onclick='page("+data[0]['totalpage']+")'>尾页 <i></i></a>";

          pages  += "</div></div>";

          pages  += "<div class='searchPage'>";

          pages  += "<span class='page-sum'>共<strong class='allPage'>"+data[0]['totalpage']+"</strong>页</span>";

          pages  += "<span class='page-go'>跳转<input type='text'>页</span>";

          pages  += "<a href='javascript:;' class='page-btn' data-all='"+data[0]['totalpage']+"' onclick='skip(this)'>GO</a>";

          pages  += "</div>&nbsp;&nbsp;";

        }
        $("#result_list").append(itemHtml);

        $(".Pagination").append(pages);

        $("#next1").val(data[0]['totalpage']);
      }
    });
  }
  function page(s){
    var offset ="";
    offset = (s*1-1) * pagesize;//  2 位每页显示数；
    $("#offset").val(offset);
    get_data(s);
  }
  function pre(){
    var offset ="";
    var s   ='pre';
    var cur_page    = $("#page").val();
    var prepage = cur_page*1-1;
    if(prepage==0){
      return false;
    }else {
      offset = (prepage - 1) * pagesize;//  2 位每页显示数；
      $("#offset").val(offset);
      get_data(s);
    }
  }
  function next(){
    var offset ="";
    var s   ='next';
    // var cur_page    = $(".on").attr("data-page");
    var cur_page    = $("#page").val()*1;//attr("data-page");
    var total    = $("#next1").val()*1;//("data-total")*1;
    var nextpage = cur_page*1+1;
    if(total+1<=nextpage){
      return false;
    }else{
      offset =(nextpage-1)*pagesize;//  2 位每页显示数；
      $("#offset").val(offset);
      get_data(s);
    }
  }
  /*
   跳转
   */
  function  skip(th){
    var  pages =  $(th).prev('span').find('input').val()*1;

    if(!isNaN(pages)){
      var  allpages = $(th).attr('data-all')*1;
      if(pages<1){layer.msg('{__("请输入 数字")}', {icon: 5  }); return false;}
      if( pages >allpages){layer.msg('{__("请输入 数字")}', {icon: 5  }); return false;}
      page(pages);
    }else{
      layer.msg('{__("请输入 数字")}', {
        icon: 5
      })
    }
  }

</script>