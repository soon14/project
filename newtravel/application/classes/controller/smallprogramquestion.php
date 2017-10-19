<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Smallprogramquestion  extends Stourweb_Controller{
    public function before()
    {
        parent::before();
        $action = $this->request->action();
        if($action == 'article')
        {


            $param = $this->params['action'];
            $right = array(
                'read'=>'slook',
                'save'=>'smodify',
                'delete'=>'sdelete',
                'update'=>'smodify'
            );
            $user_action = $right[$param];
            if(!empty($user_action))
                Common::getUserRight('article',$user_action);

        }
        else if($action == 'add')
        {
            Common::getUserRight('article','sadd');
        }
        else if($action == 'edit')
        {
            Common::getUserRight('article','smodify');
        }
        else if($action == 'ajax_save')
        {
            Common::getUserRight('article','smodify');
        }
        $this->assign('parentkey',$this->params['parentkey']);

        $this->assign('itemid',$this->params['itemid']);
        $this->assign('weblist',Common::getWebList());
        $this->assign('templetlist',Common::getUserTemplteList('article_show'));//获取上传的用户模板

    }
     /*
	文章列表  
	 */
	public function action_article()
	{
		$action=$this->params['action'];
		if(empty($action))  //显示线路列表页
		{
           $this->assign('kindmenu',Common::getConfig('menu_sub.smallprogramquestionkind'));//分类设置项
		   $this->display('stourtravel/smallprogram_question/list');
		}
		else if($action=='read')    //读取列表
		{
			$start=Arr::get($_GET,'start');
			$limit=Arr::get($_GET,'limit');
			$keyword=Arr::get($_GET,'keyword');
			$kindid=Arr::get($_GET,'kindid');
			$attrid=Arr::get($_GET,'attrid');
            $webid=Arr::get($_GET,'webid');
            $webid = $webid=="" ? -1 : $webid;
            $keyword = Common::getKeyword($keyword);
			$sort=json_decode(Arr::get($_GET,'sort'),true);
			$order='order by a.modtime desc';
            $specOrders=array('attrid','kindlist','iconlist','themelist');
			if($sort[0]['property'])
			{
                if($sort[0]['property']=='displayorder')
                    $prefix='';
                else if($sort[0]['property']=='ishidden')
                {
                    $prefix='a.';
                }
                else if($sort[0]['property']=='templet')
                {
                    $prefix='a.';
                }
                else if($sort[0]['property']=='modtime')
                {
                    $prefix='a.';
                }
                else if(in_array($sort[0]['property'],$specOrders))
                {
                    $prefix='order_';
                }
                $order='order by '.$prefix.$sort[0]['property'].' '.$sort[0]['direction'].',a.modtime desc';


			}
			$w="a.id is not null";
			$w.=empty($keyword)?'':" and a.question like '%{$keyword}%'";

			if(empty($kindid))
			{
			  $sql="select a.* from sline_smallprogram_question as a  where $w $order limit $start,$limit";
			}
			else
			{
			   $sql="select a.* from sline_smallprogram_question as a where $w $order limit $start,$limit";
				
			}
			$totalcount_arr=DB::query(Database::SELECT,"select count(*) as num from sline_smallprogram_question a where $w")->execute()->as_array();
			$list=DB::query(Database::SELECT,$sql)->execute()->as_array();
		
			$new_list=array();
			foreach($list as $k=>&$v)
			{
                $answer      = explode("###",$v['answer']);
                $v['answer']  =implode("<br/>",$answer);
                switch($v['correct']){
                    case 1 : $v['correct']="A";break;
                    case 2 : $v['correct']="B";break;
                    case 3 : $v['correct']="C";break;
                    case 4 : $v['correct']="D";break;

                }

 			    $v['attrname']=Model_Smallprogram_Question_Attr::getAttrnameList($v['attrid']);
                $new_list[]=$v;
			}
			$result['total']=$totalcount_arr[0]['num'];
			$result['lists']=$new_list;
			$result['success']=true;
			echo json_encode($result);
		}
		else if($action=='save')   //保存字段
		{
		   
		}
		else if($action=='delete') //删除某个记录
		{
		$rawdata=file_get_contents('php://input');
		   $data=json_decode($rawdata);
		   $id=$data->id;
		   
		   if(is_numeric($id)) 
		   {
		    $model=ORM::factory('smallprogram_question',$id);
		    $model->deleteClear();
		   }
		  
		   
		}
		else if($action=='update')//更新某个字段
		{
			$id=Arr::get($_POST,'id');
			$field=Arr::get($_POST,'field');
			$val=Arr::get($_POST,'val');
			$kindid=Arr::get($_POST,'kindid');
			
			
			if($field=='displayorder')  //如果是排序
			{ 
			    $displayorder=empty($val)?9999:$val;
			    if(is_numeric($id))//
				{
				    if(empty($kindid))  //全局排序
				   {
					 $order=ORM::factory('allorderlist');
					 $order_mod=$order->where("aid='$id' and typeid=4 and webid=0")->find();
					
					 if($order_mod->id)  //如果已经存在
					 {
					   $order_mod->displayorder=$displayorder;
					 }
					 else   //如果这个排序不存在
					 {
						$order_mod->displayorder=$displayorder;
						$order_mod->aid=$id;
						$order_mod->webid=0;
						$order_mod->typeid=4;
					 }
					 $order_mod->save();
					 if($order_mod->saved())
					 {
						 echo 'ok';
					 }
					 else
					     echo 'no';
				   }
				   else  //按目的地排序
				   {

					  $kindorder=ORM::factory('kindorderlist');
					  $kindorder_mod=$kindorder->where("aid='$id' and typeid=4 and classid=$kindid")->find();
					  if($kindorder_mod->id)
					  {
					   $kindorder_mod->displayorder=$displayorder;
					  }
					  else
					  {
						$kindorder_mod->displayorder=$displayorder;
						$kindorder_mod->aid=$id;
						$kindorder_mod->classid=$kindid;
						$kindorder_mod->typeid=4;
					  }
					  $kindorder_mod->save();
					  if($kindorder->saved())
					     echo 'ok';
					  else
					     echo 'no';	  
					   
				   }
				}
				
				
			}
			else  //如果不是排序字段
			{
				if(is_numeric($id))
				{
					$model=ORM::factory('smallprogram_question',$id);
				}
				if($model->id)
				{
                    $model->$field=$val;
                    if($field=='kindlist') {
                        $model->$field = implode(',', Model_Destinations::getParentsStr($val));
                    }
                    else if($field=='attrid')
                    {
                        $model->$field=implode(',',Model_Attrlist::getParentsStr($val,4));
                    }
                    $model->save();
                    if($model->saved())
                        echo 'ok';
                    else
                        echo 'no';
				}
			}
		}

	}

    /*
     * 添加页面
     * */
    public function action_add()
    {
        $this->assign('webid',0);
        $this->assign('position','添加问题');
        $this->assign('action','add');

        $this->display('stourtravel/smallprogram_question/edit');
    }
    /*
    * 修改页面
    * */
    public function action_edit()
    {
        $productid = $this->params['id'];

        $this->assign('action','edit');
        $info = ORM::factory('smallprogram_question',$productid)->as_array();


        $info['attrlist_arr'] = Common::getSelectedAttr(104,$info['attrid']);//属性数组

        $info['piclist_arr'] =  json_encode(Common::getUploadPicture($info['piclist']));//图片数组


        $this->assign('info',$info);
        $this->assign('position','修改题库'.$info['title']);
        $this->display('stourtravel/smallprogram_question/edit');


    }
    static public function unlimitedForLayer ($cate ,$pid = 0 , $child = 'child', $parentField='pid', $primarykey='id') {
        $arr = array();
        foreach ($cate as  $v) {
            if ($v[$parentField] == $pid) {
                $v[$child] = self::unlimitedForLayer($cate, $v[$primarykey], $child, $parentField, $primarykey);
                $arr[] = $v;
            }
        }
        return $arr;
    }
    /*
     * 保存(ajax)
     * */
    public function action_ajax_save()
    {
        $action = Arr::get($_POST,'action');//当前操作
        $id = Arr::get($_POST,'productid');
        $status = false;

        $answer = Arr::get($_POST,'answer');


        //图片处理
        $imagestitle = Arr::get($_POST,'imagestitle');
        $images = Arr::get($_POST,'images');
        $imgheadindex = Arr::get($_POST,'imgheadindex');
        $piclist ='';
        $litpic = $images[$imgheadindex];

        foreach($images as $k=>$i){
            $desc = isset($imagestitle[$k]) ? $imagestitle[$k] : '';
            $pic = !empty($desc) ? $images[$k].'||'.$desc : $images[$k];
            if(!empty($pic)) {
                $piclist .= $pic . ',';
            }

        }
        $piclist =strlen($piclist)>0 ? substr($piclist,0,strlen($piclist)-1) : '';//图片
        //添加操作
        if($action == 'add' && empty($id))
        {
            $model = ORM::factory('smallprogram_question');

            $model->addtime = time();
        }
        else
        {
            $model = ORM::factory('smallprogram_question',$id);

        }

        $model->question = Arr::get($_POST,'question');

        $model->answer=$answer;
        $model->ques_type=Arr::get($_POST,'ques_type');

        $model->correct=Arr::get($_POST,'correct');

        $model->modtime = Arr::get($_POST,'modtime');

        $model->litpic = $litpic;
        $model->ishidden = Arr::get($_POST,'ishidden')?Arr::get($_POST,'ishidden'):0;//显示隐藏

        $model->attrid = implode(',',Arr::get($_POST,'attrlist'));//属性

        $model->modtime = time();

        $model->piclist = $piclist;



        if($action=='add' && empty($id))
        {

            $model->create();
        }
        else
        {
            $model->update();
        }


        if($model->saved())
        {
            if($action=='add')
            {
                $productid = $model->id; //插入的产品id

            }
            else
            {
                $productid =null;
            }


            $status = true;
        }
        echo json_encode(array('status'=>$status,'productid'=>$productid,"ss"=>$litpic));

    }
    /*
        * 保存(ajax)  封冀蜀
        * */
    public function action_ajax_saves()
    {
        $action = Arr::get($_POST, 'action');//当前操作
        $id = Arr::get($_POST, 'productid');
        $status = false;

        //  定义一个存储 所有内容的 变量
        $all_content = '';
        //  接受 一个变量 ，该变量为 是否将内容 保存到 图片piclist 字段

        $is_show = Arr::get($_POST, 'show');

        //==============
        //========fengjishu  09.02

        $sql = "select count(*) as alls from `sline_smallprogram_question_mulu` where pid=0 and articleid ='$id' ";
        $re = DB::query(1, $sql)->execute()->as_array();

        // 循环更新  主菜单
        for ($i = 0; $i < $re[0]['alls']; $i++) {

            $title = $_POST['A' . $i];

            $content = $_POST['A' . $i . '_con'];

            $this_id = $_POST['A' . $i . '_id'];// 主菜单的id

            $sql = "UPDATE `sline_article_mulu` SET `title`='$title',`content`='$content' WHERE id='$this_id'";

            DB::query(1, $sql)->execute()->as_array();

            $all_content .= $content;

            $sql_zmulu = "select count(*) as z_all from `sline_article_mulu` where pid='$this_id' and articleid ='$id'";

            $res = DB::query(1, $sql_zmulu)->execute()->as_array();
            // 循环更新 子菜单
            for ($j = 0; $j < $res[0]['z_all']; $j++) {

                $content_z = $_POST['A' . $i . '-' . ($j + 1) . '_con'];

                $title_z = $_POST['A' . $i . '-' . ($j + 1)];

                $this_zid = $_POST['A' . $i . '-' . ($j + 1) . '_id'];

                $all_content .= $content_z;

                $sql_upzmulu = "UPDATE `sline_article_mulu` SET `title`='$title_z',`content`='$content_z' WHERE id='$this_zid'";

                DB::query(1, $sql_upzmulu)->execute()->as_array();

            }


        }
        if ($is_show) {

            $img_list = Common::get_contentImg($all_content);
            $imgsss = "";
            foreach ($img_list[1] as &$img_v) {
                // 去掉 域名
                //$imgs = str_replace("http://", "", $img_v);
                $imgsss .= $img_v . ',';
              }

            $imgsss  = trim($imgsss,",");
            $piclist   = ORM::factory('smallprogram_question',$id)->get('piclist');
            if(!empty($piclist)){
                $imgsss = $piclist.",".$imgsss;
            }else{
                $imgsss = $imgsss;
            }
            $model    =  ORM::factory("smallprogram_question",$id);

            $model   ->piclist   = $imgsss;

            $flag =$model ->save();

             if($flag){

                 $ok  =  "ok";
             }
        }
        echo 1;exit;
       // echo json_encode(array('status'=>$status,'productid'=>$productid));

    }

    /*
    * 删除附件
    * */
    public function action_ajax_del_attach()
    {
        $id =Arr::get($_POST,'articleid');

        $doc = ORM::factory('smallprogram_question',$id)->get('attachment');

        if($doc)
        {
            $path = BASEPATH.$doc;
            @unlink($path);
        }
        echo json_encode(array('status'=>1));
    }
    /*
   * 删除主目录  封冀蜀
   * */
    public function action_ajax_del_mulu()
    {
        $id =Arr::get($_GET,'mulu_id');

        $sql  = "delete from `sline_article_mulu` where id ='$id' or pid='$id'";

        DB::query(1,$sql)->execute()->as_array();


        echo 1;exit;
    }
    /*
     * 删除子目录  封冀蜀
     * */
    public function action_ajax_del_zimulu()
    {
        $id =Arr::get($_GET,'articleid');

        $sql  = "delete from `sline_article_mulu` where id ='$id'";

        DB::query(1,$sql)->execute()->as_array();


        echo 1;exit;
    }


   /*
    * 新增分级设置主目录  封冀蜀
    */
    public  function action_ajax_addmainlu(){

         $articleid    = Arr::get($_POST,'articleid');
         $time  =time();
         $sql  = " insert into `sline_article_mulu` (`articleid`,`addtime`) VALUES  ('$articleid','$time')";
         DB::query(1,$sql)->execute()->as_array();

         $sql1  ="select id from `sline_article_mulu` WHERE articleid='$articleid' and addtime='$time'";
         $re   = DB::query(1,$sql1)->execute()->as_array();
         //echo $sql;exit;
         echo $re[0]['id'];

    }
    /*
     * 新增 子目录
     */

    public  function action_ajax_add_zimulu(){

        $articleid    = Arr::get($_POST,'articleid');

        $parentid    = Arr::get($_POST,'parentid');

        $time  =time();
        $sql  = " insert into `sline_article_mulu` (`articleid`,`pid`,`addtime`) VALUES  ('$articleid','$parentid','$time')";
        DB::query(1,$sql)->execute()->as_array();

        $sql1  ="select id from `sline_article_mulu` WHERE articleid='$articleid' and addtime='$time'";
        $re   = DB::query(1,$sql1)->execute()->as_array();
        //echo $sql;exit;
        echo $re[0]['id'];

    }

    /*
     * 下载远程图片到本地
     * */

    private  function dowloadPicture($content)
    {


        include(PUBLICPATH.'/vendor/httpdown.class.php');

        //截取内容图片路径正则
        $rule="/(src)=[\"|'| ]{0,}([^>]*\.(gif|jpg|bmp|png|jpeg))/isU";

        if(preg_match($rule,$content,$array))
        {

            $url=str_replace("\"","",$array[2]);

            if(strpos($url,'http://')===false)
            {
                return $url;
            }



            if(!stristr($url,$GLOBALS['cfg_basehost']))
            {

                $htd = new HttpDown();//实例化
                $htd->OpenUrl($url);


                $sparr = Array("image peg", "image/jpeg", "image/gif", "image/png", "image/xpng", "image/wbmp");
                if(!in_array($htd->GetHead("content-type"),$sparr))
                {
                    return '';
                }
                else
                {
                    $date=date("Ymd");
                    $name=date("YmdHis").rand(1,50);
                    $path=UPLOADPATH."/arcimgs/";

                    $url=$path.$date."/";
                    $imgUrl = $url.$name;


                    //创建路径
                    if(!file_exists($url))
                    {
                        mkdir($url);
                    }
                    $itype = $htd->GetHead("content-type");

                    if($itype=="image/gif")
                    {
                        $itype = '.gif';
                    }
                    else if($itype=="image/png")
                    {
                        $itype = '.png';
                    }
                    else if($itype=="image/wbmp")
                    {
                        $itype = '.bmp';
                    }
                    else
                    {
                        $itype = '.jpg';
                    }
                    $fileurl = $imgUrl.$itype;
                    $ok = $htd->SaveToBin($fileurl);
                    $litpic = $fileurl;


                    $litpic = Common::thumb($litpic,$litpic,240,180);

                    $litpic=str_replace(BASEPATH,'',$litpic);//去掉头
                    $litpic=str_replace('\\','/',$litpic);


                }

            }
            else
            {
                $litpic=$url;
            }

            return $litpic;



        }
    }
	

}