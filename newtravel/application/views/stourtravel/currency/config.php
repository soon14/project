<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>思途CMS{$coreVersion}</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('style.css,base.css'); }
    {php echo Common::getScript('config.js');}
    <style>
      .currency_con{
          padding-top: 10px;
          float:left;
      }
      .currency_con dl{
          float: left;
          width: 100%;
          padding: 8px 0
      }


     .currency_con input,.currency_con select{
         border: 1px solid #dcdcdc;
         line-height: 25px;
         height: 24px;
     }

      .currency_con dl dt{
          float: left;
          color: #006498;
          width: 110px;
          height: 30px;
          line-height: 30px;
          text-align: right;
      }
      .currency_con  dl dd {
          float: left;
          width: 750px;
          line-height: 30px;
         }
      .currency_con .ratio input{
          width:90px;
          padding-left: 5px;
      }
      .currency_con .precise input{
          width:90px;
          padding-left: 5px;
      }
      .currency_con .hint{
          color:#777;
          line-height: 30px;
          background: none;
      }

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

            <form id="configfrm">
                <div class="w-set-tit bom-arrow"><span class="on"><s></s>货币设置</span> <a href="javascript:;" class="refresh-btn" onclick="window.location.reload()">刷新</a></div>
                <div class="currency_con">

                    <form id="configfrm">
                        <dl>
                            <dt>前台货币：</dt>
                            <dd>
                                            <select name="cfg_front_currencycode" id="front_code">
                                                {loop $list $val}
                                                <option value="{$val['code']}" {if $val['code']==$frontcode}selected="selected"{/if}>{$val['chinesename']}</option>
                                                {/loop}
                                            </select>
                                            <span class="hint">注：包括前台产品展示及结算的货币单位，后台积分抵现货币单位，保险货币单位</span>
                            </dd>
                        </dl>
                        <dl>
                            <dt>后台货币：</dt>
                            <dd>
                                    <select name="cfg_back_currencycode" id="back_code">
                                            {loop $list $val}
                                            <option value="{$val['code']}" {if $val['code']==$backcode}selected="selected"{/if}>{$val['chinesename']}</option>
                                            {/loop}
                                        </select>
                                 <span class="hint">注：仅限后台产品报价、单房间、定金支付所使用的货币单位</span>
                         </dd>
                        </dl>
                        <dl>
                            <dt>汇率比：</dt>
                            <dd class="ratio">
                                <input type="text" name="front_ratio"  id="front_ratio"/>&nbsp;&nbsp;:&nbsp;&nbsp;<input type="text" name="back_ratio" id="back_ratio"/>
                                <span class="hint">注：即前台货币与后台货币的比值，例如1：6.2</span>
                            </dd>
                        </dl>


                        <dl>
                            <dt>前台货币小数位：</dt>
                            <dd class="precise">
                                <input type="text" name="cfg_front_currency_precise" id="precise" value="{$precise}"/>
                                <span class="hint">注：前台价格可保留小数位位数，请不要随意修改</span>
                            </dd>
                        </dl>

                      </form>
                    <div class="opn-btn">
                        <a class="save" href="javascript:;">保存</a>
                    </div>
                </div>
            </form>

        </td>
    </tr>
</table>



<script>


    $(document).ready(function(){
         getRate();

         $("#front_code,#back_code").change(function(){
             getRate();
         });

    });
    $('.save').click(function(){
        var url = SITEURL+"currency/ajax_saveconfig";
        var frmdata = $("#configfrm").serialize();
        if(!checkForm())
           return;
        $.ajax({
            type:'POST',
            url:url,
            dataType:'json',
            data:frmdata,
            success:function(data){
                if(data.status==true)
                {
                    ST.Util.showMsg(data.msg,4);
                }
                else
                {
                    ST.Util.showMsg(data.msg,5);
                }
            }
        })
    })

    function checkForm()
    {
        var frontCode=$("#front_code").val();
        var backCode=$("#back_code").val();
        var frontRatio= $("#front_ratio").val();
        var backRatio=$("#back_ratio").val();
        var precise=$("#precise").val();

        if(precise&&isNaN(precise))
        {
            ST.Util.showMsg('前台货币小数位必须为整数',5);
            return false;
        }
        if(precise && Math.floor(precise) != precise && precise!=0)
        {
            ST.Util.showMsg('前台货币小数位必须为整数',5);
            return false;
        }

        if(frontCode==backCode)
            return true;
        if(isNaN(frontRatio)||isNaN(backRatio)||!frontRatio||!backRatio)
        {
            ST.Util.showMsg('汇率不能为空且只能是数字',5);
            return false;
        }
        return true;
    }
    function getRate()
    {
        var frontCode=$("#front_code").val();
        var backCode=$("#back_code").val();

        if(frontCode==backCode)
        {
            $("#front_ratio").val('');
            $("#back_ratio").val('');
            $("#front_ratio").attr("disabled",true);
            $("#back_ratio").attr("disabled",true);
            return;
        }
        else {
            $("#front_ratio").val('');
            $("#back_ratio").val('');
            $("#front_ratio").removeAttr("disabled")
            $("#back_ratio").removeAttr("disabled");
        }

        var url = SITEURL+"currency/ajax_getrate";
        var params={frontcode:frontCode,backcode:backCode};
        $.ajax({
            type:'POST',
            url:url,
            dataType:'json',
            data:params,
            success:function(result){
                if(result.data)
                {
                    $("#front_ratio").val(result.data[0]);
                    $("#back_ratio").val(result.data[1]);
                }
            }
        })

    }
</script>

</body>
</html>
