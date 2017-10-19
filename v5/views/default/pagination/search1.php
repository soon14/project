
<div id="Pagination">
    <div class="pagination">
        <?php if ($first_page !== FALSE): ?>

            <a class="" title="第一页" href="<?php echo HTML::chars($page->url(1)) ?>">首页</a>

        <?php endif ?>
        <?php if ($previous_page !== FALSE): ?>

            <a class=" prev" title="上一页" href="<?php echo HTML::chars($page->url($previous_page)) ?>">上页</a>

        <?php endif ?>
        <?php

        //每页显示数量

        $needpage = 10;

        $coefficient = floor($current_page/$needpage);

        $ceil  = ceil($current_page/$needpage);


        $mod = $current_page % $needpage;

//        echo $current_page;
//        echo $needpage;
//        echo $mod;exit;

        $mod_startPage  =($ceil-1)*$needpage+1;
        $mod_endPage    =($ceil-1)*$needpage+10;
        //开始页码

        $startPage = $coefficient*$needpage + 1;

        $endPage =   $coefficient*$needpage + 10;

        //如果endpage 大于 总页数,则取总页数

        $endPage = $endPage > $total_pages ? $total_pages : $endPage;

        ?>
        <?php if($mod>0):?>
            <?php for ($i = $startPage; $i <= $endPage; $i++): ?>

                    <?php if ($i == $current_page): ?>

                        <a title="<?php echo $i ?>" href="<?php echo HTML::chars($page->url($i)) ?>" class="current"><?php echo $i ?></a>

                    <?php else: ?>

                        <a title="<?php echo $i ?>" href="<?php echo HTML::chars($page->url($i))?>"><?php echo $i ?></a>

                    <?php endif ?>

            <?php endfor ?>
        <?php else: ?>
            <?php for ($i =  $mod_startPage; $i <=  $mod_endPage ; $i++): ?>

                <?php if ($i == $current_page): ?>

                    <a title="<?php echo $i ?>" href="<?php echo HTML::chars($page->url($i)) ?>" class="current"><?php echo $i ?></a>

                <?php else: ?>

                    <a title="<?php echo $i ?>" href="<?php echo HTML::chars($page->url($i))?>"><?php echo $i ?></a>

                <?php endif ?>

            <?php endfor ?>
        <?php endif ?>

        <?php if ($next_page !== FALSE): ?>

            <a class="next" title="下一页" href="<?php echo HTML::chars($page->url($next_page)) ?>" style="width: 40px">下页</a>

        <?php endif ?>
        <?php if ($last_page !== FALSE): ?>

            <a class="" title="最后一页" href="<?php echo HTML::chars($page->url($last_page)) ?>">尾页</a>

        <?php endif ?>

    </div>
</div>
<div class="searchPage">
    <span class="page-sum">共
        <strong class="allPage"><?php echo $total_pages?></strong>页
    </span>
    <span class="page-go">跳转
            <input type="text">
            页
    </span>
    <a href="javascript:;" class="page-btn">GO</a>
</div>
<script>
    $(".page-btn").click(function(){
        var value = $(this).prev('span').find('input').val();
            value =value*1;
        var total =  "<?php echo $total_pages?>";
            total =total*1;
        var url  = "<?php echo HTML::chars($page->url(2)) ?>";
        var urlarr  = url.split('-');
        urlarr.pop();

        if(value.length!=0){

            urlarr.push(value);
           var newurl = urlarr.join("-");
            if(value<=total){
                window.location.href =newurl;
            }

        }



        //  window.location.href = url;
    })
</script>