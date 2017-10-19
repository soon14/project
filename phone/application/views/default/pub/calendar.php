
    <style>

        table {
            border-collapse: collapse;
            border-spacing: 0;
            float:left;

        }
        table .num {
            float: left;
            width: 100%;
            height: 20px;
            line-height: 20px;
            text-align: center;
        }
        .tab{
            height:100%;
            padding-left:10px;
        }
        table td {
            border: 1px solid #dcdcdc;
            width:54px;
            max-height:67px;

        }
        .top_title{border: 1px solid #fff;line-height: 25px;}
        table .yes_yd {
            color: #f60;
            float: left;
            width: 100%;
            height: 25px;
            line-height: 25px;
            text-align: center;
        }
        .tab table .line_yes_yd{
            color: #f60;
            float: left;
            width: 100%;
            line-height: 16px;
            text-align: center;
            height: 16px;
        }
        .tab table .roombalance_b{
            color: #f60;
            font-weight: 300;
            font-size:11px;
        }
        .kucun{
            float: left;
            color: #ccc;
            width: 100%;
            height: 20px;
            line-height: 20px;
            text-align: center;
            font-weight: 400;
        }
        #tabl tr td{
            height: 50px;
        }
        .nouseable{
            color: #999;
            background: #f1f1f1;
        }
        .current{
            background-color:#ffc35b;
            color:#fff
        }
    </style>


<header>
    <div class="header_top">

        <div class="st_back close_calendar"><a href="javascript:;"></a></div>
        <h1 class="tit">
            选择日期
        </h1>

    </div>
</header>
{$calendar}
<input type="hidden" id="typeid" value="{$typeid}">

