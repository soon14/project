<?php
$sub = Common::getConfig('menu_sub.weixin_gl');
foreach($sub as $row)
{
    $link = "<li class='kinditem' data-url='".$row['url']."?wx_id=".$wx_id."' data-name='".$row['name']."'><s></s><a>".$row['name']."</a></li>";
    echo $link;
}
?>
<script>
    $('.kinditem').click(function(){

        var url = $(this).attr('data-url');
        var urlname = $(this).attr('data-name');
        ST.Util.addTab(urlname,url);
    })

</script>
