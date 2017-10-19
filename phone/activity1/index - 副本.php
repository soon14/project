<?php



header("Location:http://www.aitto.net/phone/api/bunengsi/index.html?openid=".$openid."&appId=".$signPackage['appId']."&timestamp=".$signPackage['timestamp']."&nonceStr=".$signPackage['nonceStr']."&signature=".$signPackage['signature']."&feng=feng");
exit;
?>