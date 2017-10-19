<?php
$sub = Common::getConfig('menu_sub.spotticketkind');
foreach($sub as $row)
{

    $link = "<span class='kinditem' data-url='".$row['url']."' data-name='".$row['name']."'><s></s>".$row['name']."</span>";
    echo $link;
}

?>
<script>
    $(function(){
        var spotid = $("#spotid").val();
        $('.kinditem').click(function(){


            var url = $(this).attr('data-url')+'/spotid/'+spotid;
            var urlname = $(this).attr('data-name');
            ST.Util.addTab(urlname,url);
        })
    })


</script>
