
    <style>
        .calpage .calhd{background:#3385ff;font-size:22px;height:60px;line-height:60px;}
        .calpage .red{color:#f75934;padding-left:16px;background:url('/phone/public/images/mitao/v4/money.png') no-repeat 3px 4px;background-size:12px auto}
        .calhd { background-color:#8ac43e; text-align:center; color:#fff; font-size:16px; line-height:45px; }
        .calwk { background-color:#fff; zoom:1; overflow:hidden; border-bottom:solid 1px #eee; }
        .calwk div { float:left; width:14%; line-height:40px; text-align:center; font-size:14px; }
        .cal { width:100%; zoom:1; overflow:hidden; font-size:14px; margin-bottom:20px; background-color:#fbfbfb; }
        .cal div { float:left; width:14%;  text-align:center; position:relative; }
		.cal div span{ display:block; height:70px;border-left:solid 1px #eee; border-bottom:solid 1px #eee;}
        .cal div.act { background-color:#fff; }
        .cal div.dis { color:#999; }
        .cal div.ll { border-left:none; }
        .cal .ri { position:absolute; left:10px; top:6px; }
        .cal .green { position:absolute; right:10px; top:25px; }
        .cal .red { position:absolute; font-family:Arial; right:10px; bottom:6px; font-family:Heltica;}
        .cal .red>u { color:#333; text-decoration:none; font-size:20px; font-family:Arial; }
        .cal div.dis .green, .cal div.dis .red,.cal div.dis .red>u { color:#999 !important; }
    </style>


<header>
    <div class="header_top">

        <div class="st_back close_calendar"><a href="javascript:;"></a></div>


    </div>
</header>
{$calendar}
<input type="hidden" id="typeid" value="{$typeid}">

