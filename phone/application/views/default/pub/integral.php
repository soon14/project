{if $jifen['isopen']}
<div class="integral" id="integral" data="total:{$jifen['userjifen']},exchange:{$jifen['exchange']}"
     style="display: none">
    <p class="tl">积分抵现<span>您有 {$jifen['userjifen']} 积分可用</span></p>

    <p class="use">使用<strong><span id="jifen-need"></span></strong>积分，抵现<strong>¥<span id="jifen-price"></span></strong><i
            class="usejifen"></i></p>
</div>
<script>
    $('document').ready(function () {
        exchange();
        function exchange() {
            //初始化
            $('#usejifen').val(0);
            $('.usejifen').removeClass('on');
            var money;
            if($('.book_con_box').length>0){
                //套餐报价
                if($('.book_con_box').find('li.on').length!=1){
                    money = parseFloat($('.book_con_box').find('li:eq(0)').attr('data-jftp'));
                }else{
                    money = parseFloat($('.book_con_box').find('li.on').attr('data-jftp'));
                }
            }else{
                //单一报价
                money=parseFloat($('#sample-integral').attr('data-jftp'));
            }
            var obj = $('#integral').attr('data');
            obj = eval("({" + obj + "})");
            var useJf = obj.exchange * money;
            if (obj.total > useJf) {
                var $obj = $('#integral');
                $obj.find('#jifen-need').html(useJf);
                $obj.find('#jifen-price').html(money);
                $obj.css('display', 'block');
            }
        }
        $('.book_con_box').find('li').click(function(){
            if(!$(this).hasClass('on')){
               var money=$(this).attr('data-jftp');
                if(parseFloat(money)>0){
                    $(this).addClass('on').siblings('li').removeClass('on');
                    exchange();
                }else{
                    $('#integral').css('display', 'none');
                }
            }
        });
        //积分使用
        $('.usejifen').click(function(){
            var money;
            if($('.book_con_box').length>0){
                //套餐报价
                money = parseFloat($('.book_con_box').find('li.on').attr('data-jftp'));
            }else{
                //单一报价
                money=parseFloat($('#sample-integral').attr('data-jftp'));
            }
            var total=parseFloat($('.totalprice').html());
            if($(this).hasClass('on')){
                $('#usejifen').val(0);
                $(this).removeClass('on');
                $('.totalprice').html(total+money);
            }else{
                if(total<money){
                  return;
                }
                $('#usejifen').val(1);
                $(this).addClass('on');
                $('.totalprice').html(total-money);
            }
        });
    });
</script>
{/if}