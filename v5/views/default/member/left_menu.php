<div class="user-side-menu">

    <ul>

        <li><a id="nav_index" class="ico01" href="/member">会员首页</a></li>

        <li>

            <a class="ico02" href="javascript:;">我的订单</a>

            <div class="son">

                <a id="nav_allorder" href="/member/order/all">全部订单</a>

                <a id="nav_spotorder" href="/member/order/spot">门票订单</a>

                <a id="nav_lineorder" href="/member/order/line">自驾订单<!--07.08隐藏 下面 并把线路订单改为自驾订单--></a>

                <a id="nav_hotelorder" href="/member/order/hotel">酒店订单</a>



                <!--a id="nav_carorder" href="/member/order/car">租车订单</a>

                <a id="nav_visaorder" href="/member/order/visa">签证订单</a>

                <a id="nav_tuanorder" href="/member/order/tuan">团购订单</a-->

                {loop Model_Model::tongyoug_model() $row}

                <!--a id="nav_{$row['pinyin']}order" href="/member/order/tongyong?typeid={$row['id']}">{$row['modulename']}订单</a-->

                {/loop}





            </div>

        </li>

        <li>

            <a class="ico07"  href="javascript:;">游记攻略</a>

            <div class="son">

                <a  id="nav_mynotes" href="/member/index/mynotes">我的游记</a>

                <a  id="nav_likeNote" href="/member/index/likeNote?gl=gl">我的喜欢</a>

            </div>
        </li>

        <!--li><a id="nav_myquestion" class="ico03" href="/member/index/myquestion">我的咨询</a></li-->

        <li><a id="nav_myjifen" class="ico04" href="/member/index/jifen">我的积分</a></li>

        <li>

            <a class="ico05" href="javascript:;">个人中心</a>

            <div class="son">

                <a id="nav_userinfo" href="/member/index/userinfo">个人资料</a>

                <a id="nav_safecenter" href="/member/index/safecenter">账号安全</a>

                <!--a id="nav_userbind" href="/member/index/userbind">账号绑定</a-->

            </div>

        </li>

        <li><a class="ico06" href="/member/index/linkman" id="nav_linkman">常用旅客</a></li>

    </ul>

</div>