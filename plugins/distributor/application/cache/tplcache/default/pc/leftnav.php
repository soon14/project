
<!--左侧导航区-->
  <div class="menu-left">
    <div class="global_nav">
        <div class="kj_tit">供应商设置</div>
      </div>
      <div class="nav-tab-a leftnav">
        <?php
          $menu = DB::select()->from('menu')->where('pid','=','0')->and_where('entitle','=','supplier')->execute()->current();
          if(!empty($menu)){
              $rs=DB::select()->from('menu')->where('pid','=',$menu['id'])->execute()->as_array();
              foreach($rs as $row){
                  $class = $row['displayorder'] == $itemid ? " class='active' " : '';
                  if($row['extlink']){
                      $row['url']=$row['extraparam'];
                  }else{
                      $row['url']=$row['controller'].'/'.$row['method'].'/parentkey/supplier/itemid/'.$row['displayorder'];
                  }
                  echo '<a href="javascript:;"'.$class.' data-url="'.$row['url'].'">'.$row['title'].'</a>';
              }
          }
        ?>
      </div>
    </div>
<script>
         $(document).ready(function(e) {
                //导航点击
                $(".leftnav").find('a').click(function(){
                    var url= $(this).attr('data-url');
                    var title = $(this).html();
                    ST.Util.addTab(title,url);
                })
         })
       </script>