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
    {include "pub/varname"}
    {Common::css('hotel.css,base.css,extend.css')}
    {Common::js('jquery.min.js,base.js,common.js,SuperSlide.min.js,template.js')}

</head>

<body>

  {request "pub/header"}
  
  <div class="big">
  	<div class="wm-1200">
    
    	<div class="st-guide">
            <a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;{$channelname}
        </div><!--面包屑-->
      
      <div class="st-hotel-home-top">
      
      	<div class="st-hotel-search">
        	<dl class="search-dl">
          	<dt>目的地</dt>
            <dd>
              <input type="text" class="h-text-search destname" onClick="hSearchShow()" placeholder="中文/拼音/首字母" >
              <div class="mdd-city-box" id="mdd-city-box">
              	<div class="ss-mdd-tit"><span>可直接输入城市或城市拼音</span><i id="mdd-hot-closed" onClick="hSearchHide()"></i></div>
                <div class="ss-mdd-box">
                	<div class="st-tabnav">
                  	<span class="on" data-id="hot">热门</span>
                  	<span data-id="a,b,c">ABC</span>
                  	<span data-id="d,e,f,g">DEFG</span>
                  	<span data-id="h,j,k">HJK</span>
                  	<span data-id="l,m,n">LMN</span>
                  	<span data-id="p,q,r,s">PQRS</span>
                  	<span data-id="t,w,x">TWX</span>
                  	<span data-id="y,z">YZ</span>
                  </div>
                  <div class="st-tabcon" id="dest_list">
                      {st:dest action="query" flag="hot" typeid="$typeid" row="15"}
                        {loop $data $row}
                  	        <a href="javascript:;" data-id="{$row['id']}">{$row['kindname']}</a>
                        {/loop}

                  </div>
                </div>
              </div>
            </dd>
          </dl>
            <script type="text/html" id="tpl_dest_list">
                {{each list as value i}}
                    <a href="javascript:;" data-id="{{value.id}}">{{value.kindname}}</a>
                {{/each}}
            </script>
            <script>

                $(function(){
                    //按拼音筛选
                    $('.st-tabnav').find('span').click(function(){

                        var url = SITEURL+'hotel/ajax_dest';
                        var id = $(this).attr('data-id');
                        var dest = $(this).data(id);

                        var obj = $(this);
                        if(dest!=undefined){
                            $("#dest_list").html(dest);
                        }else{
                            $.getJSON(url,{dataid:id},function(data){
                                if(data.list){
                                    var destlist = template('tpl_dest_list',data);
                                    obj.data(id,destlist);
                                    $("#dest_list").html(destlist);
                                }
                            })
                        }
                        $(this).addClass('on').siblings().removeClass('on');

                    })
                    //选中目的地
                    $('body').delegate('#dest_list a','click',function(){
                        var destname = $(this).text();
                        var destid = $(this).attr('data-id');
                        $(".destname").val(destname);
                        $(".destname").attr('data-id',destid);
                        $('.mdd-city-box').hide();
                    })
                    //按拼音搜索目的地
                    $('.destname').keyup(function(){
                        hSearchHide();
                    })
                    $('.destname').Result({url:SITEURL+'destination/ajax_dest_by_pinyin',extraParams:{typeid:2}});


                })
            </script>
        	<dl class="search-dl">
          	<dt>入住时间</dt>
            <dd>
            	<input type="text" class="h-text-search date-ico" id="txtHotelTime1" placeholder="yy-mm-dd" value="{date('Y-m-d')}" >
            </dd>
          </dl>
        	<dl class="search-dl">
          	<dt>退房时间</dt>
            <dd>
            	<input type="text" class="h-text-search date-ico" id="txtHotelTime2" placeholder="yy-mm-dd" value="{date('Y-m-d',strtotime('+1 day'))}" >
            </dd>
          </dl>
        	<dl class="search-dl">
          	<dt>酒店星级</dt>
            <dd>
              <input type="text" name="" class="h-text-search up-ico rankid" id="input-select" value="全部" >
              <input type="hidden" id="rankid" value="0"/>
              <div class="star-level-box">
                  {st:hotel action="rank_list"}
                    {loop $data $r}
                        <span data-id="{$r['id']}">{$r['title']}</span>
                    {/loop}
                  {/st}
              </div>
            </dd>
          </dl>
        	<dl class="search-dl">
          	<dt>关键词</dt>
            <dd>
            	<input type="text" name="keyword" class="h-text-search keyword" >
            </dd>
          </dl>
          <div class="st-hs-btn"><a href="javascript:;">搜索</a></div>
        </div><!--酒店首页条件搜索-->
          <script>
              $(function(){
                  //酒店搜索
                  $('.st-hs-btn').click(function(){
                        var rankid = $("#rankid").val();
                        var destname = $(".destname").val();
                        var keyword = $(".keyword").val();
                        var destpy = "";
                        if(destname!=''){
                            $.ajax({type:'POST',url:SITEURL+'hotel/ajax_dest_py',async:false,data:'destname='+destname,success:function(data){
                                destpy = data;
                            }})
                        }
                      var url = SITEURL+'hotels/';
                      var py = '';
                      if(destpy!=''){
                          py = destpy;
                      }
                      url+=py+'-'+rankid+'-0-0-0-0-1';
                      if(keyword!=''){
                          url+="?keyword="+keyword;
                      }
                      window.location.href = url;
                  })
              })
          </script>

        <!--酒店首页轮播图-->
        <div id="st-hotel-slideBox" class="st-hotel-slideBox">
          <div class="hd">
            <ul>
                {st:ad action="getad" name="HotelRollingAd" pc="1" return="hotelad"}
                    {loop $hotelad['aditems'] $k $v}
                        <li>{$k}</li>
                    {/loop}
            </ul>
          </div>
          <div class="bd">
            <ul>
                {loop $hotelad['aditems'] $v}
                    <li><a href="{$v['adlink']}" target="_blank"><img src="/res/images/myimages/jiudian.jpg" width="858" height="324"/></a></li>
                {/loop}
            </ul>
          </div>
          <!--前/后按钮代码-->
          <a class="prev" href="javascript:void(0)"></a>
          <a class="next" href="javascript:void(0)"></a>
        </div>
        <!--酒店首页轮播图结束-->
        
        <div class="st-hotel-home-box">
        	<div class="hotel-tit-ico"><h3 class="hot-ico">热门推荐</h3><a class="more" href="/hotels/all" target="_blank">查看更多</a></div>
          <div class="hotel-tj-box">
          	<ul>
             {st:hotel action="query" flag="order" row="3"}

                {loop $data $row}
                 <li>
                  
                    <div class="pic"><img class="fl" src="{Common::img($row['litpic'],400,350)}" /></div>
                    <div class="txt">
                        <a href="{$row['url']}" target="_blank">
                        <i></i>
                        <p class="ads">{$row['title']}</p>
                        <p class="price">
                            {if !empty($row['price'])}
                                <span><span class="currency_sy">{Currency_Tool::symbol()}</span>{$row['price']}</span>起
                            {else}
                                <span>电询</span>
                            {/if}
                        </p>
                      </a>
                    </div>
                  </li>
                {/loop}
              {/st}

            </ul>
          </div>
        </div><!--热门推荐-->
        
        <div class="st-hotel-home-box">
        	<div class="hotel-tit-ico"><h3 class="jx-ico">精选酒店</h3><a class="more" href="/hotels/all" target="_blank">查看更多</a></div>
          <div class="hotel-jx-box">
          	<ul>
                {st:hotel action="query" flag="order" row="8" offset="3"}
                 {php $k=1;}
                 {loop $data $row}
                    <li {if $k%4==0}class="mr_0"{/if} style="height: 360px;">
                    <div class="pic"><a class="fl" href="{$row['url']}"><img class="fl" src="{Common::img($row['litpic'],277,195)}" alt="{$row['title']}" /></a></div>
                    <div class="txt">
                        <p class="bt"><a href="{$row['url']}" target="_blank">{$row['title']}</a><span>{if !empty($row['price'])}<i class="currency_sy">{Currency_Tool::symbol()}</i><b>{$row['price']}</b>起{else}电询{/if}</span></p>
                      <p class="num"><span>满意度：5.0</span><span>销量：{$row['sellnum']}</span></p>
                      <p class="ads"><span>{$row['address']}</span></p>
                    </div>
                    <div class="list">

                       {st:hotel action="suit" row="3" productid="$row['id']" return="roomlist"}
                        {loop $roomlist $room}
                            <a href="{$row['url']}" target="_blank">
                            <em>{if $room['price']}<span class="currency_sy">{Currency_Tool::symbol()}</span>{$room['price']}起{else}电询{/if}</em>
                                <span>{$room['title']}</span>
                                
                            </a>
                       {/loop}
                    </div>
                    <a class="more-fx" href="{$row['url']}" target="_blank">更多房型</a>
                  </li>
                  {php $k++;}
                {/loop}
            </ul>
          </div>
        </div><!--精选酒店-->
        
      </div>
    
    </div>
  </div>

  {request "pub/footer"}

  {request "pub/flink"}
  


</body>
{Common::js('datepicker/WdatePicker.js',0)}
{Common::js('result/result.js',0)}
<link type="text/css" href="{$GLOBALS['cfg_public_url']}js/result/result.css" rel="stylesheet" />

<script>
    $(function(){
        //酒店首页焦点图
        $('.st-hotel-slideBox').slide({mainCell:'.bd ul',easing:'easeOutCirc',autoPlay:true})
        //酒店星级下拉选择
        $('#input-select').click(function(){
            var ul = $('.star-level-box');
            if(ul.css("display")=="none"){
                $('#input-select').removeClass('up-ico').addClass('down-ico')
                ul.slideDown("fast");
            }else{
                ul.slideUp("fast");
                $('#input-select').removeClass('down-ico').addClass('up-ico')
            }
        });
        $(".star-level-box span").click(function(){
            $('#input-select').removeClass('down-ico').addClass('up-ico')
            var txt = $(this).text();
            var rankid = $(this).attr('data-id');
            $("#rankid").val(rankid);
            $("#input-select").val(txt);
            var value = $(this).attr("rel");
            $(".star-level-box").hide();
        });

        //酒店预订时间选择
        $("#txtHotelTime1").focus(function(){
            $("#txtHotelTime2").attr('value','');
            WdatePicker({dateFmt:'yyyy-MM-dd',minDate:'%y-%M-%d',maxDate:'#F{$dp.$D(\'txtHotelTime2\',{d:-1});}',doubleCalendar:true,isShowClear:false,readOnly:true,errDealMode:1})

            $("#txtHotelTime1").css("color","#333");
            $("#txtHotelTime2").blur();
        })
        $("#txtHotelTime2").focus(function(){
            WdatePicker({minDate:'#F{$dp.$D(\'txtHotelTime1\',{d:1});}',dateFmt:'yyyy-MM-dd',doubleCalendar:true,isShowClear:false,readOnly:true,errDealMode:1});
            $("#txtHotelTime2").css("color","#333");
            $("#txtHotelTime2").blur();
        })




    })

    //酒店搜索目的地弹出框
    function hSearchShow(){
        $('.mdd-city-box').show()
    }
    function hSearchHide(){
        $('.mdd-city-box').hide()
    }

</script>
</html>
