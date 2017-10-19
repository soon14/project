{Common::css('footer.css')}
<footer>
    <div class="sever">
        <div class="container">
            <div class="col-md-3">
                <div class="about-box">
                    <div class="about-ico01"></div>
                    <h2>专业保证</h2>
                    <h3>我们收集er的真实诉求，也找寻全世界最独特的旅行目的地，让更多的er轻松出行</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="about-box">
                    <div class="about-ico02"></div>
                    <h2>专业保证</h2>
                    <h3>我们收集er的真实诉求，也找寻全世界最独特的旅行目的地，让更多的er轻松出行</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="about-box">
                    <div class="about-ico03"></div>
                    <h2>专业保证</h2>
                    <h3>我们收集er的真实诉求，也找寻全世界最独特的旅行目的地，让更多的er轻松出行</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="add-box">
        <div class="container">
            <table width="100%">
                <tr>
                    <td width="30%" ><img src="/res/images/img/logob.png"></td>
                    <td width="40%" ><div class="add-box-t">从一张机票、一家酒店的订购，到一次暖心的接机服务、一张轻松融入当地的交通卡，让我们带你探索这个世界</div></td>
                    <td width="30%" ><div class="add-ico"><img src="/res/images/img/about-ico01.png"></div>
                        <div class="add-ico"><img src="/res/images/img/about-ico02.png"></div>
                        <div class="add-ico"><img src="/res/images/img/about-ico03.png"></div></td>
                </tr>
            </table>
            <p>
                {st:footnav action="pc" row="10"}
                {loop $data $row}
                <a href="{$row['url']}"  target="_blank" rel="nofollow">{$row['title']}</a>
                {/loop}
                {/st}
            </p>
            <p>2004-2016 © 云智慧旅游 ™ qyer.com All rights reserved. Version v5.57 京ICP备12003524 </p>
            <p>友情链接：
                {st:flink action="query" typeid="$typeid"}
                {loop $data $row}
                <a href="{$row['url']}" target="_blank">{$row['title']}</a>
                {/loop}
                {/st}
            </p>
        </div>
    </div>
</footer>