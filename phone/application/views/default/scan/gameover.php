<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title></title>
  {Common::css('scan/bootstrap.min.css')}
  {Common::css('scan/public.css')}
  {Common::css('scan/layout.css')}

  {Common::js('jquery-1.11.3.min.js')}
  {Common::js('scan/bootstrap-min.js')}
</head>
<body>
<div class="page-bd">
  <h2>恭喜你，完成所有挑战！</h2>
  <p>总时长:{$times['alltime']}</p>
</div>
<div class="page-hd">
  <div class="active-table">
    <table width="200" border="1">
      <tr>
        <th width="50%">活动关卡</th>
        <th width="50%">通关时间</th>
      </tr>
      <tr>
        <td>柿子保卫战</td>
        <td>{$times['time_1']}</td>
      </tr>
      <tr>
        <td>最强大脑</td>
        <td>{$times['time_2']}</td>
      </tr>
      <tr>
        <td>迷之方阵</td>
        <td>{$times['time_3']}</td>
      </tr>
      <tr>
        <td>一击即中</td>
        <td>{$times['time_4']}</td>
      </tr>
      <tr>
        <td>急坡勇下</td>
        <td>{$times['time_5']}</td>
      </tr>
      <tr>
        <td colspan="2"><p class="shuoming">说明：柿子保卫战是集体活动，不计入成绩</p></td>
      </tr>
    </table>
  </div>
  <div class="active-box">
    <h3><img src="/phone/public/images/scan/next-guize1.png" width="120"></h3>
    <p>{$comments}</p>
  </div>
</div>
</body>
</html>
