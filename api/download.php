<?php
    $file_name = "yanpiao.apk";
    //$file_dir = "http://www.jb51.net/";
    $file = @ fopen($file_name,"r");
    if (!$file) {
        echo "文件找不到";
    } else {
        header("Content-length: ".filesize($file));
        Header("Content-type: application/octet-stream");
        Header("Content-Disposition: attachment; filename=" . $file_name);
        readfile("$file");
        while (!feof($file)) {
            echo fread($file, 50000);
        }
        fclose($file);

    }