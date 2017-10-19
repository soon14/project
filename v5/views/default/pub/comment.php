
<div id="dp_content">

    <div class="dp-sort">

        <div id="dpType" class="dp-type">

            <div typename="全部点评" typeid="1" class="dp-type-s dp-type-at"><i></i>全部<span id="totalNumber">({$info['commentnum']})</span></div>

        </div>

        <div class="dp-value" id="dpValue">

            <div typeid="1" class="dp-v-s {if $time_sort=='asc'}dp-v-at{/if} dp-au">时间排序&uarr; </div>

<!--            <div typeid="6" class="dp-v-s dp-c {if $time_sort=='desc'}dp-v-at{/if}">时间排序 ↓</div>-->

        </div>

    </div>

    <!--div id="dp-con">

        {st:comment action="query" flag="$flag" typeid="$typeid" row="2" offset="0" time="$time_sort" articleid="$info['id']"}
        {loop $data $c}
        <input type="hidden" name="total" id="total" value="{$c['totalNumber']}">
        <div class="info_list mtop"><span class="list_left"><img src="{$c['litpic']}"><span class="tel" style="font-size: 12px;">{$c['nickname']}</span></span>

            <div class="down_mid">

                {if !empty($c['jifencomment'])}

                <div class="star"><div class="vote-star"><i style="width:{$c['percent']}"></i></div><span>{$c['jifencomment']}分</span></div>

                {/if}

                <div class="dp-c-name">
                    <p class="dpdetail">{$c['content']}</p>

                </div>

                <div class="useful"><i>{Common::mydate('Y-m-d H:i',$c['addtime'])}发表</i></div>

            </div>

        </div>

        {/loop}

        {/st}

    </div-->

    <div id="result_list">
    </div>
    <!---分页显示开始--->
    <div class='uPageBox' id="pagenav">
        <!--        <div class='uPage'>-->
        <!--            <a class='uPrevpage' href='javascript:' name='firstpage' data-page='1'>首页</a>-->
        <!--            <a href ='' >上页</a>-->
        <!--            <a href='javascript:' name='pages' data-page='' class='num on'></a>-->
        <!--            <a href='javascript:' name='pages' data-page='' class='num on'></a>-->
        <!--            <a href='' class='num'>下页</a>-->
        <!--            <a href ='' class='num' style='margin-left: 8px;'>尾页</a>-->
    </div>
    <br/>
    <!---分页显示结束--->
    <input type="hidden" name="flag" id="flag" value="{$flag}">
    <input type="hidden" name="typeid" id="typeid" value="{$typeid}">
    <input type="hidden" name="row" id="row" value="10">
    <input type="hidden" name="offset" id="offset" value="">
    <input type="hidden" name="time_sort" id="time_sort" value="{$time_sort}">
    <input type="hidden" name="articleid" id="articleid" value="{$info['id']}">
    <input type="hidden" name="limit" id="limit" value="1">
    <script type="text/javascript">
        $(document).ready(function(){
            var initpage = '{$page}';
            $(function () {
                if(initpage !=  $("#page").val()){
                    $("#page").val(initpage);
                }
                //获取更新数据
                $('#btn_getmore').click(function () {
                    get_data();
                })
                //第一次加载数据
                get_data();
                $("a[data-page=1]").addClass("on");//第一加载 给第一页加上属性；
            });

        });
        function get_data() {
            var flag      = $("#flag").val();  //对应 的模块 比如 门票 flag = "spot" 这个是在控制器设置
            var typeid    = $("#typeid").val();// 模板id  比如   门票 为 5
            var row       = $("#row").val();   //  每页的页数 也是 limit 第二个参数
            var offset    = $("#offset").val().length==""? 0:$("#offset").val();//  每页的开始 也是 limit 第1个参数
            var time_sort = $("#time_sort").val();//  时间排序 定义 这个也是在相对的控制器设置
            var articleid = $("#articleid").val();//  你评论的页面的id
            var pre       =offset/10;//2 是当前的页数；pre 是上一页
            var next      =offset/10+2;// 下一下页
            var curPage   =offset/10+1;//当前页
            var limit_div = $("#limit").val();
            $.ajax({
                type: "POST",
                url: '/pub/querys_conment',
                async:false,
                dataType: "json",
                data: {flag:flag,typeid:typeid,row:row,offset:offset,time:time_sort,articleid:articleid},
                success: function(data){
                    var itemHtml = "";
                    var pages    = "";
                    $("#result_list").empty();
                    $("#pagenav").empty();
                    for(var i=0;i<data.length;i++){
                        itemHtml +="<div class='info_list mtop'><span class='list_left'><img src="+data[i]['litpic']+"><span class='tel' style='font-size: 12px;'>"+data[i]['nickname']+"</span></span>";
                        itemHtml +="<div class='down_mid'>";
                        itemHtml +="<div class='dp-c-name'>";
                        itemHtml +="<p class='dpdetail'>"+data[i]['content']+"</p>";
                        itemHtml +="</div>";
                        itemHtml +="<div class='useful'><i>"+data[i]['addtime']+"发表</i></div>";
                        itemHtml +="</div>";
                        itemHtml +="</div>";
                    }
                    if(data[0]['totalpage']!=0){
                        pages +="<div class='uPage'>";
                        pages +="<a class='uPrevpage' href='javascript:' name='firstpage' id ='firstpage' data-f_page='1' onclick='first()'>首页</a>";
                        pages +="<a href ='javascript:' id ='pre' data-p_page='"+pre+"' onclick='pre()' >上页</a>";
                        if(curPage+3<=data[0]['totalpage']){
                            for(var j=curPage;j<curPage+3;j++) {
                                pages += "<a href='javascript:' name='pages' data-page='"+j+"' class='num ";
                                     if(curPage==j){
                                         pages +=" on'";
                                     }else{
                                         pages +="'";
                                     }
                                pages += " onclick='current_page(this)'>"+j+"</a>";
                            }
                        }else {
                            for (var j = curPage; j < data[0]['totalpage'] + 1; j++) {
                                pages += "<a href='javascript:' name='pages' data-page='"+j+"' class='num ";
                                if(curPage==j){
                                    pages +=" on'";
                                }else{
                                    pages +="'";
                                }
                                pages += " onclick='current_page(this)'>"+j+"</a>";
                            }
                        }
                        pages +="<a href='javascript:' id='next1' data-n_page='"+next+"' data-total='"+data[0]['totalpage']+"' class='num' onclick='next()'>下页</a>";
                        pages +="<a href ='javascript:' class='num' id= 'lastpage' data-l_page='"+data[0]['totalpage']+"' style='margin-left: 8px;' onclick='last()'>尾页</a>";
                        pages +="</div>";
                    }
                    $("#result_list").append(itemHtml);
                    $("#pagenav").append(pages);
                    $("#limit").val(2);
                }
            });
        }

        function current_page(th){
            var offset  ="";
            $("a[name=pages]").removeClass("on");
            $(th).addClass("on");
            var currentpage =$(th).attr("data-page");
            offset  =(currentpage-1)*10;//  2 位每页显示数；]
            $("#offset").val(offset);
            get_data();
        }
        function pre(){
            var offset ="";
            var cur_page    = $(".on").attr("data-page");
            var prepage = cur_page*1-1;
            if(prepage==0){
                return false;
            }else {
                var pre =$(".on").prev();
                $(".on").removeClass("on");
                pre.addClass("on");
                offset = (prepage - 1) * 10;//  2 位每页显示数；
                $("#offset").val(offset);
                get_data();
            }
        }
        function next(){
            var offset ="";
            var cur_page    = $(".on").attr("data-page");
            var total    = $("#next1").attr("data-total")*1;
            var nextpage = cur_page*1+1;
            if(total+1<=nextpage){
                return false;
            }else{
                var  next　= $(".on").next();
                $(".on").removeClass("on");
                next.addClass("on");
                offset =(nextpage-1)*10;//  2 位每页显示数；
                $("#offset").val(offset);
                get_data();
            }
        }
        function first(){
            var offset ="";
            $("a[name=pages]").removeClass("on");
            $("a[data-page=1]").addClass("on");
            var firstpage = $("#firstpage").attr("data-f_page")*1;
            offset =(firstpage-1)*10;//  2 位每页显示数；

            $("#offset").val(offset);
            get_data();
        }
        function last(){
            var offset ="";
            $("a[name=pages]").removeClass("on");
            var lastpage = $("#lastpage").attr("data-l_page")*1;
            $("a[data-page="+lastpage+"]").addClass("on");
            offset =(lastpage-1)*10;//  2 位每页显示数；
            $("#offset").val(offset);
            get_data();
        }
    </script>
    <?php
     $type =  "";
    switch($typeid){
        //case 5 : $type="spots";break;
        //case 2 : $type="hotels";break;
    }?>

</div>
