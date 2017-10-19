<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>微信公众平台</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('style.css,base.css'); }
    {php echo Common::getScript('config.js');}
    {php echo Common::getScript("uploadify/jquery.uploadify.min.js"); }
    {php echo Common::getCss('uploadify.css','js/uploadify/'); }
<style>
.yhlb{
        width: 1000px;
        height: 40px;
        margin: 40px 50px 40px 30px;
        border-bottom: 1px #E8E6E4 solid;
 }
.yhlb a{
      float: left;
      width: 110px;
      height: 20px;
    font-weight: bold;
     margin: 10px;
     line-height: 20px;
}
.yhlb a{

}
.table {
    width: 1000px;
    height: 40px;
    margin: 40px 50px 40px 30px;
    margin-top:-20px;


}
.thead th {
    font-size: 13px;
    font-weight: 700;
    text-align: left;
    height: 27px;
    padding: 6px;
    color: #333;
    white-space: nowrap;
    border-top: solid 1px #fdddb5;
    border-bottom: solid 1px #fdddb5;
    background: #fff8f0;

}
.tbody{
    height: 39px;
    padding: 1px;
    display:table-row;
    background: rgb(255,255,255) none repeat scroll 0% 0%;
}
.tbody td{
    padding:6px !important;
    height: 26px;
    border-bottom: 1px #E8E6E4 solid;
    line-height: 26px;
}
.tbody2{
    height: 39px;
    padding: 1px;
    display: none;
    background: rgb(255,255,255) none repeat scroll 0% 0%;
}
.tbody2 td{
    padding:6px !important;
    height: 26px;
    border-bottom: 1px #E8E6E4 solid;
    line-height: 26px;
}
.h3 {
    font-size: 15px;
    color: #ff940a;
    margin-bottom: 10px;
    margin-top: 18px;
    line-height: 18px;
    word-spacing: -0.1em;
}
.current{
    background:#666666;
    color: white;
    border: 1px #666666 solid;
    border-radius: 2px;
}
.page{float:left;color:#FF940A;margin-top:10px;}
</style>
</head>
<body>
	<table class="content-tab">
    <tr>
    <td width="119px" class="content-lt-td"  valign="top">
        {template 'stourtravel/public/leftnav'}
    <!--右侧内容区-->
    </td>
     <td valign="top" class="content-rt-td">
         <div class="w-set-con">
        	<div class="w-set-tit bom-arrow"><span class="on"><s></s>用户管理</span><a href="javascript:;" class="refresh-btn" onclick="window.location.reload()">刷新</a></div>
        </div>
         <div class="yhlb" id="user_lb">
             <a href="javascript:" class="h3" id="tr1" style="margin-right: 20px;">关注用户列表</a>
             <a href="javascript:" id="tr2">已取消关注用户</a>
             <div class="verify-search-con">

                 <input type="text" name="keywords" id ="keywords" class="search-txt" style="width: 230px;height: 30px;" placeholder="请输入微信昵称" value=""/>

                 <input type="button" class="search-btn" value="搜索" style="height: 34px;width: 60px;background: #43AEE4;color: white"/>

             </div>
         </div>

         <table class="table">
          <thead class="thead">
          <tr>
              <th with="10%">ID</th>
              <th width="30%">OPENID</th>
              <th width="20%">微信昵称</th>
              <th width="20%">手机号</th>
              <th width="20%">关注时间</th>
              <th width="10%">设置参与活动</th>
          </tr>
          </thead>
          <tbody>
          {loop $userMes $mes}
          <tr class="tbody " name="tr1">
              <td with="10%">{$mes['id']}</td>
              <td width="30%">{$mes['openid']}</td>
              <td width="20%">{$mes['nickname']}</td>
              <td width="20%" name="phone"><input type="tel" name="phone" value="{$mes['telphone']}" data-openid="{$mes['openid']}" style="height: 30px;width: 80%;" onblur="editphone(this)"></td>
              <td width="20%">{date('Y-m-d', $mes['gztime'])}</td>
              <td width="10%" align="center"><a href ="javascript:" onclick="joinpart(this)" data-openid="{$mes['openid']}">设置</a></td>
          </tr>
          {/loop}
          </tbody >
          <tfoot>
              <tr name="tr1">
                  <td></td>
                  <td colspan="4" align="right">
                      <a href ="/newtravel/weixin/usermana?page=1" class="page" style="margin-right: 8px">首页</a>
                      <?php if($page!=1){?><a href="/newtravel/weixin/usermana?page={$page-1}" class="page">上一页</a><span>...</span>
                      <?php }
                      if($page+10<=$totalPage){
                      for($i=$page;$i<$page+10;$i++){
                      ?>
                          <a href="/newtravel/weixin/usermana?page=<?php echo ($i);?>" style="float:left;border: 1px solid #666;padding: 0px 2.5px;margin: 10px 2.5px 0px 2.5px;" <?php if($page==$i){?>class="h3"<?php } ?>><?php echo $i;?></a>
                      <?php }
                      }
                      else{
                          for($i=$page;$i<$totalPage+1;$i++){
                              ?>
                              <a href="/newtravel/weixin/usermana?page=<?php echo ($i);?>" style="float:left;border: 1px solid #666;padding: 0px 2.5px;margin: 10px 2.5px 0px 2.5px;" <?php if($page==$i){?>class="h3"<?php } ?>><?php echo $i;?></a>
                          <?php }
                      }
                      if($page<$totalPage){?>
                          <a href="/newtravel/weixin/usermana?page={$page+1}" class="page">下一页</a><?php } ?>
                      <a href ="/newtravel/weixin/usermana?page={$totalPage}" class="page" style="margin-left: 8px;">尾页</a>
                      <input type="number" name="jump_page" id="jump_page" min="1" max="{$totalPage+1}" style="float: left;width: 45px ;height: 18px;margin: 9px 10px 0px 10px">
                      <a href ="javascript:" class="page" id="jump">跳转</a>
                      <span class="page" style="margin-left: 20px" >总共</span><span id="total_page" class="page" style="margin-left: 10px;border: 1px #666 solid;width: 30px ;height: 15px;text-align: center" >{$totalPage}</span>
                  </td>
              </tr>
          </tfoot>
         </table>
  </td>
  </tr>
  </table>
 <script>
     function joinpart(th){
         var thisopenid = $(th).attr('data-openid');
         var re  = confirm('参加活动是否需要手机号');
        if(re){
            var  phone = $(th).parent().siblings('td[name=phone]').find('input').val();

            if(phone.length==''){
                return false;
            }else{
                var pattern = /^1[345678]\d{9}$/;
                var  isp =  pattern.test(phone);
                if(isp){

                    $.ajax({
                        type:"POST",
                        url :"/newtravel/weixin/addpart",
                        data:{phone:phone,openid:thisopenid},
                        success: function (data) {
                            if(data){
                                alert("成功参与活动")
                            }else{
                                alert("参与活动失败")
                            }
                        }
                    })

                }else{
                    alert('请设置正确的手机格式');
                    return false
                }
            }

        }else{
            $.ajax({
                type:"POST",
                url :"/newtravel/weixin/addpart",
                data:{phone:'',openid:thisopenid},
                success: function (data) {
                    if(data){
                        alert("成功参与活动")
                    }else{
                        alert("参与活动失败")
                    }
                }
            })
        }


     }

     $(document).ready(function() {
         //=====================
         //跳转
         $("#jump").click(function(){
             var page = $("#jump_page").val();
             var url = "/newtravel/weixin/usermana?page="+page;
             window.location.href = url ;
         });
         $("#tr2").click(function(){
             var url = "/newtravel/weixin/usermana_2";
             window.location.href =url ;
         });
         //改变 id =‘user_lb’ 的样式以及 内容的切换
         $('#user_lb').find("a:first").addClass("h3");
         $(function () {
             window.onload = function () {
                 var $a = $('#user_lb a');
                 $a.mousedown(function () {
                     var $this  = $(this);
                     var name1  = $this.attr("id");
                     var name2  = $this.siblings('a').attr("id");
                     $("tr[name="+name1+"]").css("display","table-row");
                     $("tr[name="+name2+"]").css("display","none");
                     $a.removeClass();
                     $this.addClass('h3');
                 });
             }
         });
         //改变 id =user_lb 的样式 结束
         //
         $(".search-btn").click(function(){
                 var key= $("#keywords").val();

                 var url = "/newtravel/weixin/usermana?keywords="+key;
                 window.location.href = url ;

         });


     });
     function editphone(th){

         var thisphone = $(th).val();
         var thisopenid= $(th).attr("data-openid");
         var pattern = /^1[345678]\d{9}$/;
         var  isp =  pattern.test(thisphone);
         if(thisphone.length==''){
             return false;
         }
         if(isp){
             $.ajax({
                 type:"POST",
                 url :"/newtravel/weixin/editphone",
                 data:{phone:thisphone,openid:thisopenid},
                 success: function (data) {
                    if(data){
                        alert("修改成功")
                    }else{
                        alert("修改失败")
                    }
                 }
             })
         }else{
             alert("输入正确的手机格式")
         }

     }

</script>
</body>
</html>
