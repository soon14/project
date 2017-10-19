<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title>供应商管理系统-<?php echo $webname;?></title>
    <?php echo Common::css("style.css,base.css,extend.css");?>
    <?php echo Common::js("jquery.min.js,common.js,city/jquery.cityselect.js");?>
</head>
<body>
<div class="page-box">
    <?php echo Request::factory('pc/pub/header')->execute()->body(); ?>
    <?php echo  Stourweb_View::template("pc/pub/sidemenu");  ?>
    
    <div class="main">
    <div class="content-box">
        <?php echo  Stourweb_View::template("pc/pub/qualifyalert");  ?>
        
        <div class="frame-box">
        <div class="frame-con">
          
            <div class="account-box">
            <div class="account-tit"><strong class="bt">账户资料</strong></div>
                <form id="usrfrm">
                    <div class="account-con">
                        <ul>
                            <li><strong class="lm">账户ID：</strong>
                                <div class="nr"><span class="name">ST<?php echo str_pad($userinfo['id'],6,'0',STR_PAD_LEFT);?></span></div>
                            </li>
                            <!--<li><strong class="lm"><i>*</i>昵称：</strong><div class="nr"><input type="text" class="msg-text" /></div></li>-->
                            <li><strong class="lm"><i>*</i>联系人：</strong>
                                <div class="nr"><input type="text" class="msg-text" name="linkman" value="<?php echo $userinfo['linkman'];?>"/></div>
                            </li>
                            <li><strong class="lm"><i>*</i>手机号码：</strong>
                                <div class="nr"><span class="name"><?php echo $userinfo['mobile'];?></span><a class="revise-mz" href="#">修改手机</a></div>
                            </li>
                            <li><strong class="lm"><i>*</i>电子邮箱：</strong>
                                <div class="nr"><input type="text" class="msg-text" name="email" value="<?php echo $userinfo['email'];?>"/></div>
                            </li>
                            <li><strong class="lm">QQ：</strong>
                                <div class="nr"><input type="text" class="msg-text" name="qq" value="<?php echo $userinfo['qq'];?>"/></div>
                            </li>
                            <hr/>
                            <li><strong class="lm">法人代表：</strong><div class="nr"><span class="name"><?php echo $userinfo['reprent'];?></span></div></li>
                            <li><strong class="lm">公司名称：</strong>
                                <div class="nr"><span class="name"><?php echo $userinfo['suppliername'];?></span><a class="revise-mz" href="<?php echo $cmsurl;?>pc/qualify/index">修改公司名称</a></div>
                            </li>
                            <li>
                                <strong class="lm">公司地址：</strong>
                                <div class="nr"><span class="name"><?php echo $userinfo['address'];?></span></div>
                            </li>
                            <li>
                                <strong class="lm">供应商类型：</strong>
                                <div class="nr">
                                    <div class="dx">
                                        <label><span class="name"><?php echo $userinfo['supplierkind'];?></span></label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <strong class="lm">所在地区：</strong>
                                <div class="nr" id="city">
                                        <select  name="province" class="dest-select sf prov">
                                            <option value="请选择">请选择</option>
                                        </select>
                                        <select name="city" class="dest-select cs city">
                                            <option value="请选择">请选择</option>
                                        </select>
                                </div>
                            </li>
                            <li>
                                <strong class="lm"><i>*</i>公司简介：</strong>
                                <div class="dx">
                                    <label><textarea name="content" id="content" cols="5" style="width:500px;height:150px"><?php echo $userinfo['content'];?></textarea></label>
                                </div>
                            </li>
                        </ul>
                        <div class="account-headimg-box">
                            <?php if(!empty($userinfo['litpic'])) { ?>
                            <img id="face" src="<?php echo $userinfo['litpic'];?>" width="94" height="94"/>
                            <?php } else { ?>
                            <img id="face" src="<?php echo $GLOBALS['cfg_res_url'];?>/images/default-headimg.jpg" width="94" height="94"/>
                            <?php } ?>
                            <a class="upload" href="javascript:void(0)">上传头像</a>
                            <input type="hidden" id="litpic" name="litpic" value="<?php echo $userinfo['litpic'];?>">
                            <input type="hidden" id="supplierid" name="supplierid" value="<?php echo $userinfo['id'];?>">
                            <input type="hidden" id="frmcode" name="frmcode" value="<?php echo $frmcode;?>"/>
                        </div>
                        <div class="account-save-box"><a href="javascript:;" class="save_btn">保存</a></div>
                    </div>
                </form>
            </div><!-- 账户资料 -->
          
          </div>
        </div>
        <?php echo Request::factory("pc/pub/footer")->execute()->body(); ?>
        
      </div>
    </div><!-- 主体内容 -->
  
  </div>
  <?php echo Common::js("layer/layer.js");?>
<script>
    $(function(){
        $("#nav_userinfo").addClass('on');
        $("#city").citySelect({
            url:"/plugins/supplier/public/default/pc/js/city/city.min.js",
            nodata:"none",
            prov:"<?php echo $userinfo['province'];?>",
            city:"<?php echo $userinfo['city'];?>",
            required:false
        });
        //上传头像点击
        $('.upload').click(function(){
            if($("#upiframe").length<1)
            {
                var s_left=Math.abs($(window).width()/2-350);
                var s_top=$(window).scrollTop()+200;
                ST.Util.createFade();//创建遮罩
                var url = SITEURL+"pc/index/uploadface";
                var imgdiv="<div id='upiframe' style='width:700px;height:500px;position:absolute;left:"+s_left+"px;top:"+s_top+"px;z-index:9999'> <iframe src='"+url+"' style='width:100%;height:100%;border:none;'></iframe></div>";
                $("body").append(imgdiv);
                //fade点击
                $(".fade").live('click',function(){
                    ST.Util.closeFade();
                    $("#upiframe").remove();//移除
                });
            }
        })
        //保存资料
        $(".save_btn").click(function(){
            var frmdata = $("#usrfrm").serialize();
            $.ajax({
                type:'post',
                url:SITEURL + 'pc/index/ajax_userinfo_save',
                data:frmdata,
                dataType:'json',
                success:function(data){
                    if(data.status){
                        layer.msg("<?php echo __('save_success');?>", {
                            icon: 6,
                            time: 1000
                        })
                    }else{
                        layer.msg(data.msg, {icon:5});
                        return false;
                    }
                }
            })
        })
    })
</script>
</body>
</html>
