<?php
header("Content-type:text/html;charset=utf-8");
$response = exec('/home/phantomjs-2.1.1-linux-x86_64/bin/phantomjs /home/phantomjs-2.1.1-linux-x86_64/examples/rasterize.js http://www.aitto.net/phone/spots/show_64.html /home/wwwroot/www.aitto.net/2222.png');
var_dump($response);