<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>供应商管理系统-<?php echo $webname;?></title>
    <?php echo Common::css('style.css,base.css,extend.css');?>
    <?php echo Common::js('jquery.min.js,common.js,slideTabs.js,jquery.upload.js');?>
    <script>
        $(function(){
            $('.way').switchTab();
        })
    </script>
</head>
<body>
<div class="page-box">
    <?php echo Request::factory('pc/pub/header')->execute()->body(); ?>
    <?php echo  Stourweb_View::template("pc/pub/sidemenu");  ?>
    <div class="main">
        <div class="content-box">
            <div class="frame-box">
                <div class="frame-con">
                  <form id="chkfrm">
                    <div class="flow-path-box">
                        <div class="flow-path-tit"><strong class="bt">资质验证</strong></div>
                        <div class="flow-path-con">
                            <div class="nr-box">
                                <div class="step"><span class="on">提交资料</span><span>客服审核</span><span>认证成功</span></div>
                                <div class="way">
                                    <div class="gy-top-box">
                                        <ul>
                                            <li><strong class="lm">法人代表：</strong><div class="zl-con"><input type="text" name="reprent" class="tit-text" value="<?php echo $qd['reprent'];?>" /></div></li>
                                            <li><strong class="lm">供应商名称：</strong><div class="zl-con"><input type="text" name="suppliername" class="tit-text" value="<?php echo $qd['suppliername'];?>" /></div></li>
                                            <li><strong class="lm">公司地址：</strong><div class="zl-con"><input type="text" name="address" class="tit-text" value="<?php echo $qd['address'];?>" /></div></li>
                                            <li>
                                                <strong class="lm">供应商类型：</strong>
                                                <div class="zl-con">
                                                    <div class="zj-radio">
                                                        <?php $n=1; if(is_array($kindlist)) { foreach($kindlist as $kind) { ?>
                                                         <label><input type="radio" name="kindid" value="<?php echo $kind['id'];?>" <?php if($kind['id']==$userinfo['kindid']) { ?>checked="checked"<?php } ?>
><?php echo $kind['kindname'];?></label>
                                                        <?php $n++;}unset($n); } ?>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <?php if($userinfo['verifystatus']==2) { ?>
                                     <div class="notpass-box"><strong>未通过</strong><span>原因: <?php echo $userinfo['reason'];?></span></div>
                                    <?php } ?>
                                    <div class="st-tabnav">
                                        <strong>验证方式：</strong>
                                        <div class="nav-list">
                                            <span>旅行社工作名片</span>
                                            <span>经营许可证</span>
                                            <span>营业执照(副本)</span>
                                        </div>
                                    </div>
                                    <div class="st-tabcon">
                                        <ul>
                                            <li>
                                                <strong class="lm">名片正面：</strong>
                                                <div class="zl-con">
                                                    <div class="up-pic mp_litpic">
                                                        <?php if(!empty($qd['mp_litpic'])) { ?>
                                                        <img src="<?php echo $qd['mp_litpic'];?>" width="215" height="136">
                                                        <?php } else { ?>
                                                        支持jpg、png、gif格式，不超过2M
                                                        <?php } ?>
                                                    </div>
                                                    <div class="upload"><a class="up-btn" href="javascript:;" data-type="mp">+上传图片</a></div>
                                                    <p class="sm-txt">可上传名片的照片或者扫描文件，清晰的图片更容易通过审核。</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="st-tabcon">
                                        <ul>
                                            <li><strong class="lm">许可证号码：</strong><div class="zl-con"><input type="text" name="licenseno" class="tit-text" value="<?php echo $qd['licenseno'];?>" /></div></li>
                                            <li>
                                                <strong class="lm">经营许可证：</strong>
                                                <div class="zl-con">
                                                    <div class="up-pic xk_litpic">
                                                        <?php if(!empty($qd['xk_litpic'])) { ?>
                                                        <img src="<?php echo $qd['xk_litpic'];?>" width="215" height="136">
                                                        <?php } else { ?>
                                                        支持jpg、png、gif格式，不超过2M
                                                        <?php } ?>
                                                    </div>
                                                    <div class="upload"><a class="up-btn" href="javascript:;" data-type="xk">+上传图片</a></div>
                                                    <p class="sm-txt">上传证件支持电子版/扫描版。清晰的图片更容易通过审核。</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="st-tabcon">
                                        <ul>
                                            <li><strong class="lm">营业执照号：</strong><div class="zl-con"><input type="text" name="certifyno" class="tit-text" value="<?php echo $qd['certifyno'];?>" /></div></li>
                                            <li>
                                                <strong class="lm">营业执照：</strong>
                                                <div class="zl-con">
                                                    <div class="up-pic zz_litpic">
                                                        <?php if(!empty($qd['mp_litpic'])) { ?>
                                                        <img src="<?php echo $qd['zz_litpic'];?>" width="215" height="136">
                                                        <?php } else { ?>
                                                        支持jpg、png、gif格式，不超过2M
                                                        <?php } ?>
                                                    </div>
                                                    <div class="upload"><a class="up-btn" href="javascript:;" data-type="zz">+上传图片</a></div>
                                                    <p class="sm-txt">上传证件为带有最新工商局年检盖章的副本，如年检盖章在背面，请拼接处理后再上传。</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="submit-btn" href="javascript:;">提交审核</a>
                                    <input type="hidden" id="mp_litpic" name="mp_litpic" value="<?php echo $qd['mp_litpic'];?>"/>
                                    <input type="hidden" id="xk_litpic" name="xk_litpic" value="<?php echo $qd['xk_litpic'];?>"/>
                                    <input type="hidden" id="zz_litpic" name="zz_litpic" value="<?php echo $qd['zz_litpic'];?>"/>
                                </div>
                            </div>
                        </div>
                    </div><!-- 验证步骤 -->
                  </form>
                </div>
            </div>
            <?php echo Request::factory("pc/pub/footer")->execute()->body(); ?>
        </div>
    </div><!-- 主体内容 -->
</div>
<div class="st-popup-box hide">
    <div class="st-tit"><strong>信息提示</strong><span class="closed"></span></div>
    <div class="st-conbox">
        <div class="txtcon">资料提交成功，我们将在1个工作日内完成审核，请耐心等待！</div>
        <div class="sure-btn"><a href="javascript:;" class="closed">确 定</a></div>
    </div>
</div>
<?php echo Common::js("layer/layer.js");?>
<script>
    $("#nav_qulification").addClass('on');
    //提交审核
    $(".submit-btn").click(function(){
          var frmdata = $("#chkfrm").serialize();
        $.ajax({
            type:'POST',
            url:SITEURL+'pc/qualify/ajax_save_qualify',
            data:frmdata,
            dataType:'json',
            success:function(data){
                if(data.status){
                   /* layer.msg("<?php echo __('commit_qualify_ok');?>", {
                        icon: 6,
                        time: 1000
                    })*/
                    $('.st-popup-box').show('slow');
                }else{
                    layer.msg(data.msg, {icon:5});
                    return false;
                }
        }})
    })
    $(".closed").click(function(){
        $('.st-popup-box').hide('slow');
    })
    //上传图片
    $(".up-btn").click(function(){
        var type = $(this).attr('data-type');
        upload(type);
    })
    //上传模板
    function upload(type)
    {
        var contain = type+'_litpic';
        // 上传方法
        $.upload({
            // 上传地址
            url: SITEURL+'pc/qualify/ajax_upload_litpic',
            // 文件域名字
            fileName: 'filedata',
            fileType: 'png,jpg,jpeg,gif',
            // 其他表单数据
            params: {},
            // 上传之前回调,return true表示可继续上传
            onSend: function() {
                return true;
            },
            // 上传之后回调
            onComplate: function(data) {
                var data = $.parseJSON(data);
                //如果上传成功
                if(data.status){
                    var html='<img src="'+data.litpic+'" width="215" height="136">';
                    $("#"+contain).val(data.litpic);
                    $("."+contain).html(html);
                }
            }
        });
    }
</script>
</body>
</html>
