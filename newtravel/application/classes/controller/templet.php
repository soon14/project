<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Templet extends Stourweb_Controller{

    /*
     * 模板管理总控制器
     * */
    public $ismobile = 0;
    public $_has_v4 = false;
    public $_has_v5 = false;

    public static $config = array(
               'mobile'=>array(
                   'table'=>'m_page_config',
                   'path'=>'usertpl'
               ),
               'pc'=>array(
                   'table'=>'page_config',
                   'path'=>'usertpl'
               )
    );
    public function before()
    {
        parent::before();
        $action = $this->request->action();
        if($action == 'index')
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
                Common::getUserRight('templet',$user_action);

        }
        if($action == 'ajax_config_save' || $action=='config' || $action=='ajax_upload_templet')
        {
            Common::getUserRight('templet','smodify');
        }
        if($action=='ajax_del')
        {
            Common::getUserRight('templet','sdelete');
        }

        $this->assign('parentkey',$this->params['parentkey']);
        $this->assign('itemid',$this->params['itemid']);
        $this->assign('weblist',Common::getWebList());
        $ismobile = $this->params['ismobile'];
        $this->ismobile = $ismobile ? $ismobile : 0;
        $this->assign('ismobile',$ismobile);

        //检测是否存在4.2版本程序
        if(is_dir(BASEPATH.'/templets/smore/uploadtemplets/'))
        {
            $this->_has_v4 = TRUE;
        }
        //检测是否存在v5版本
        if(is_dir(BASEPATH.'/v5/'))
        {
            $this->_has_v5 = TRUE;
        }

    }

    /*
     * 列表
     * */
     public function action_index()
     {
         //是否为手机版模板添加判断.


         $action=$this->params['action'];

         $attrtable = 'page';



         if(empty($action))
         {


             $this->display('stourtravel/templet/list');
         }
         else if($action=='read')
         {



             $node=Arr::get($_GET,'node');
             $list=array();
             if($node=='root')//属性组根
             {
                 $list=ORM::factory($attrtable)->where('pid','=','0')->get_all();
                 foreach($list as $k=>$v)
                 {
                     $list[$k]['templet'] = '';
                     $list[$k]['allowDrag']=false;
                 }
                /* $list[]=array(
                     'leaf'=>true,
                     'id'=>'0add',
                     'kindname'=>'<button class="dest-add-btn df-add-btn" onclick="addSub(0)">添加</button>'

                 );*/
             }
             else //子级
             {
                 $list=ORM::factory($attrtable)->where('pid','=',$node)->get_all();
                 foreach($list as $k=>$v)
                 {
                     $list[$k]['templet'] = self::getUseTemplet($v['id'],$this->ismobile);
                     $list[$k]['leaf']=true;
                 }

             }
             echo json_encode(array('success'=>true,'text'=>'','children'=>$list));
         }
         else if($action=='addsub')//添加子级
         {
             $pid=Arr::get($_POST,'pid');

             $model=ORM::factory($attrtable);
             $model->pid=$pid;
             $model->attrname="未命名";
             $model->save();

             if($model->saved())
             {
                 $model->reload();
                 echo json_encode($model->as_array());
             }
         }
         else if($action=='save') //保存修改
         {
             $rawdata=file_get_contents('php://input');
             $field=Arr::get($_GET,'field');
             $data=json_decode($rawdata);
             $id=$data->id;
             if($field)
             {
                 $model=ORM::factory($attrtable,$id);
                 if($model->id)
                 {
                     $model->$field=$data->$field;
                     $model->save();
                     if($model->saved())
                         echo 'ok';
                     else
                         echo 'no';
                 }
             }

         }
         else if($action=='drag') //拖动
         {
             $moveid=Arr::get($_POST,'moveid');
             $overid=Arr::get($_POST,'overid');
             $position=Arr::get($_POST,'position');
             $movemodel=ORM::factory($attrtable,$moveid);
             $overmodel=ORM::factory($attrtable,$overid);
             if($position=='append')
             {
                 $movemodel->pid=$overid;
             }
             else
             {
                 $movemodel->pid=$overmodel->pid;
             }
             $movemodel->save();
             if($movemodel->saved())
                 echo 'ok';
             else
                 echo 'no';


         }

         else if($action=='delete')//属性删除
         {
             $rawdata=file_get_contents('php://input');
             $data=json_decode($rawdata);
             $id=$data->id;
             if(!is_numeric($id))
             {
                 echo json_encode(array('success'=>false));
                 exit;
             }
             $model=ORM::factory($attrtable,$id);
             $model->deleteClear();

         }
         else if($action=='update')//更新操作
         {
             $id=Arr::get($_POST,'id');
             $field=Arr::get($_POST,'field');
             $val=Arr::get($_POST,'val');
             $model=ORM::factory($attrtable,$id);
             if($model->id)
             {
                 $model->$field=$val;
                 $model->save();
                 if($model->saved())
                     echo 'ok';
                 else
                     echo 'no';
             }
         }

     }

    /*
     * 页面模板配置
     * */
     public function action_config()
     {
         $pageid = $this->params['pageid'];
         $md_name = self::get_model_name($this->ismobile);
         $templet_list = ORM::factory($md_name)->where('pageid','=',$pageid)->get_all();
         foreach($templet_list as &$templet)
         {
             $templet['version'] = $templet['version']==1 ? 1 : 0;
         }
         $this->assign('templet_list',$templet_list);
         $this->assign('pageid',$pageid);
         $this->display('stourtravel/templet/config');

     }
    /*
     * 配置保存
     * */
    public function action_ajax_config_save()
    {
        $pageid = ARR::get($_POST,'pageid');//页面id.
        $id = ARR::get($_POST,'id');//模板id
        $ismobile = Arr::get($_POST,'ismobile');
        $md_name = self::get_model_name($ismobile);

        $models = ORM::factory($md_name)->where('pageid','=',$pageid)->find_all();
        foreach($models as $m)
        {
            $m->isuse = 0;
            $m->update();

        }
        if(!empty($id))
        {
            $model2 = ORM::factory($md_name,$id); //置为使用
            $model2->isuse = 1;
            $model2->update();
            if($model2->saved())
            {
                echo json_encode(array('status'=>true));
            }
        }
        else
        {
            echo json_encode(array('status'=>true));
        }


    }

    /*
     * ajax上传模板
     * */
    public function action_ajax_upload_templet()
    {
        $ismobile = Arr::get($_POST,'ismobile');
        $pc_version = 0;

        //pc版本
        if(!$ismobile)
        {
            $configinfo = ORM::factory('sysconfig')->getConfig(0);
            //pc版本,当pc_version = 0 时,表示4.X版本,当pc_version = 5 时,表示5.X版本
            $pc_version = $configinfo['cfg_pc_version'] == 5 ? 5 : 0;
            //$pc_version = 5;//这句代码调试用,后期应删除
            //4.2版本程序
            if($this->_has_v4 && $pc_version == 0)
            {
                $basefolder = BASEPATH.'/templets/smore/uploadtemplets/';
            }
            //v5版本.
            else if($this->_has_v5 && $pc_version == 5)
            {
                $basefolder = BASEPATH.'/usertpl/';
            }
            else
            {
                exit('no path,can not upload');
            }

        }
        //手机版本
        else
        {
            //手机用户模板上传目录
            $basefolder = BASEPATH.'/phone/usertpl/';
        }

        if(!file_exists($basefolder))
        {
            mkdir($basefolder);
        }
        $zipfolder = $basefolder.'zip/';
        if(!file_exists($zipfolder))
        {
            mkdir($zipfolder);
        }


        $pageid = Arr::get($_POST,'pageid');
        $filedata = Arr::get($_FILES,'filedata');
        $storepath = $zipfolder.$filedata['name'];


        $out = array();
        if(move_uploaded_file($filedata['tmp_name'], $storepath))
        {

            if(self::extractTemplet($storepath,$basefolder))
            {

                $templetname = current(explode('.',$filedata['name']));//模板名称
                $md_name = self::get_model_name($ismobile);
                $model = ORM::factory($md_name)->where('path','=',$templetname)->find();
                $model->pageid = $pageid;
                $model->path = $templetname;
                $model->isuse = 0;
                if(empty($ismobile))
                {
                    $model->version = $pc_version;
                }
                $model->save();
                if($model->saved())
                {
                    $out['status'] = true;
                    $out['id'] = $model->id;
                    $out['path'] = $model->path;
                    $out['isuse'] = 0;
                    if(empty($ismobile))
                    {
                        $out['version'] = $pc_version;
                    }
                    else
                    {
                        $out['version'] = 0;
                    }

                }
            }

        }
        else
        {
            $out['status'] = false;

        }
        echo json_encode($out);




    }

    /**
     * 删除模板
     */
    public function action_ajax_del()
    {
        $path=trim($_POST['path']);
        $ismobile = Arr::get($_POST,'ismobile');
        if(empty($path))
        {
            echo json_encode(array('status'=>false,'msg'=>'该模板不存在'));
            return ;
        }
        $md_name = self::get_model_name($ismobile);
        $model = ORM::factory($md_name)->where('path','=',$path)->find();
        if(!$ismobile)
        {
            //v4.2版本存在
            if($this->_has_v4)
            {
                $folder = BASEPATH.'/templets/smore/uploadtemplets/';
                Common::rrmdir($folder.$path);
            }
            //v5.1版本存在
            if($this->_has_v5)
            {
               $basefolder = BASEPATH.'/usertpl/';
               Common::rrmdir($basefolder.$path);
            }

        }
        else
        {
            //手机模板上传目录
            $basefolder = BASEPATH.'/phone/usertpl/';
            Common::rrmdir($basefolder.$path);
        }


        if($model->delete())
        {
            echo json_encode(array('status'=>true,'msg'=>'删除成功'));
        }
        else
        {
            echo json_encode(array('status'=>false,'msg'=>'删除失败'));
        }



    }

	 /*
	   根据typeid获取某个产品属性的列表 ，以json方式返回
	 */
	 public static function getattridlist($typeid)
	 {
		 $model=ORM::factory(self::$table_arr[$typeid]);
		 $list=$model->where('isopen=1 and pid=0')->get_all();
		 foreach($list as $k=>$v)
		 {
			 $list[$k]['children']=$model->where("pid={$v['id']} and isopen=1")->get_all();
		 }
		 return $list;
		 
	 }
    /*
     * 获取使用的模板
     *
     * 这里添加了参数判断是否是手机版.
     * */

    public static function getUseTemplet($pageid,$ismobile)
    {

        $md_table = self::get_model_name($ismobile);
        $row = ORM::factory($md_table)->where('pageid','=',$pageid)->and_where('isuse','=',1)->find()->as_array();
        $templet = !empty($row['path']) ? $row['path'] : '标准';
        return $templet;
    }

    //解压上传的压缩包.
    public static function extractTemplet($file,$storedir)
    {
        if(!class_exists("PclZip"))
        {
            include(PUBLICPATH.'/vendor/pclzip.lib.php');
        }
        $archive = new PclZip($file);
        $flag = true;
        if ($archive->extract(PCLZIP_OPT_PATH, $storedir,PCLZIP_OPT_REPLACE_NEWER) == 0)
        {
            $flag = false;
            die("Error : ".$archive->errorInfo(true));

        }
        return $flag;
    }

    /**
     * @param $ismobile是否是手机模板
     * @return 返回模型名称
     */
    public static function get_model_name($ismobile)
    {
        if($ismobile==1)
        {
            $md_name = self::$config['mobile']['table'];
        }
        else
        {
            $md_name =  self::$config['pc']['table'];
        }
        return $md_name;

    }

}