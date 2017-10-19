<p>
    <?php require_once ("/home/wwwroot/www.aitto.net/taglib/flink.php");$flink_tag = new Taglib_Flink();if (method_exists($flink_tag, 'query')) {$data = $flink_tag->query(array('action'=>'query','typeid'=>$typeid,));}?>
    <?php $n=1; if(is_array($data)) { foreach($data as $row) { ?>
    <a href="<?php echo $row['url'];?>" target="_blank"><?php echo $row['title'];?></a>
    <?php $n++;}unset($n); } ?>
    
</p>
