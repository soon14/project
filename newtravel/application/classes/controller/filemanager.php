<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Filemanager extends Stourweb_Controller{

    /*
     * 文件管理总控制器
     * */
    public $basefolder;
    public static $_v4_folder;//v4版本目录
    public static $_v4sline_folder;//v4版本子站目录
    public static $_v5_folder;//v5版本目录
    public static $_m_folder;//v5手机版本目录

    public static $_has_v4;
    public static $_has_v5;
    public static $_pc_version;
    public function before()
    {
        parent::before();
        $this->assign('parentkey',$this->params['parentkey']);
        $this->assign('itemid',$this->params['itemid']);
        $this->assign('weblist',Common::getWebList());
        $this->basefolder =  BASEPATH.'/templets/smore/uploadtemplets/';

        self::$_v4_folder = BASEPATH.'/templets/smore/uploadtemplets/';
        self::$_v4sline_folder = BASEPATH.'/templets/sline/uploadtemplets/';
        self::$_v5_folder = BASEPATH.'/usertpl/';
        self::$_m_folder = BASEPATH.'/phone/usertpl/';

        //检测是否存在4.2版本程序
        if(is_dir(BASEPATH.'/templets/smore/uploadtemplets/'))
        {
            self::$_has_v4 = TRUE;
        }
        //检测是否存在v5版本
        if(is_dir(BASEPATH.'/v5/'))
        {
            self::$_has_v5 = TRUE;
        }
        $configinfo = ORM::factory('sysconfig')->getConfig(0);
        $pc_version = $configinfo['cfg_pc_version'] == 5 ? 5 : 0;

        self::$_pc_version = $pc_version;
    }

    /*
     * 文件管理列表
     * */
     public function action_index()
     {

         $action=$this->params['action'];
         $folder = $this->params['folder']; //文件目录名称
         $issline=$this->params['issline'];
         $ismobile = $this->params['ismobile'];//是否是手机站点模板
         $version = $this->params['version'];
         $version = empty($version) ? self::$_pc_version : $version;
         $attrtable = 'page';

         if(empty($action))
         {

             $this->assign('folder',$folder);
             $this->assign('issline',$issline);
             $this->assign('ismobile',$ismobile);
             $this->assign('version',$version);
             $this->display('stourtravel/filemanager/list');
         }
         else if($action=='read')
         {


             $node=Arr::get($_GET,'node');
             $folder = Arr::get($_GET,'folder');
             $issline= Arr::get($_GET,'issline');
             $ismobile = Arr::get($_GET,'ismobile');
             $version = Arr::get($_GET,'version');
             $list=array();
             $node = $node == 'root' ? $folder : $node;
            // echo $version.'aa';exit;
             $list = self::getDirFile($node,$issline,$ismobile,$version);
             echo json_encode(array('success'=>true,'text'=>'','children'=>$list));
         }
         else if($action=='addsub')//添加子级
         {
             $pid=Arr::get($_POST,'pid');

             $model=ORM::factory($attrtable);
             $model->pid=$pid;
             $model->kindname="未命名";
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
     * 页面编辑
     * */
     public function action_pageedit()
     {
         $file = Arr::get($_GET,'file');//编辑文件
         $issline = Arr::get($_GET,'issline');
         $ismobile = Arr::get($_GET,'ismobile');
         $version = Arr::get($_GET,'version');

         if($ismobile)
         {
             $basefolder = BASEPATH.'/phone/usertpl/';
         }
         else if(self::$_pc_version==5)
         {
             $basefolder = BASEPATH.'/usertpl/';
         }
         else if(self::$_pc_version == 0 && $issline!=1)
         {
             $basefolder = BASEPATH.'/templets/smore/uploadtemplets/';
         }
         else if(self::$_pc_version == 0 && $issline==1)
         {
             $basefolder = BASEPATH.'/templets/sline/uploadtemplets/';
         }
         $filename = $file;
         $this->assign('filename',$filename);
         $filename=$basefolder.$filename;

         $content = file_exists($filename) ? file_get_contents($filename) : '';
         $this->assign('content',htmlentities($content,ENT_COMPAT,'UTF-8'));
         $this->assign('issline',$issline);
         $this->assign('version',$version);
         $this->assign('ismobile',$ismobile);
         $this->display('stourtravel/filemanager/page_edit');


     }
    /*
     * 页面编辑保存
     * */
    public function action_ajax_page_save()
    {
        $flag = 0;
        $content = Arr::get($_POST,'content');
        $filename = Arr::get($_POST,'filename');
        $version = Arr::get($_POST,'version');
        $ismobile = Arr::get($_POST,'ismobile');
        $issline=$_POST['issline'];
        $content=stripslashes($content);

        if($ismobile)
        {
            $basefolder = BASEPATH.'/phone/usertpl/';
        }
        else if(self::$_pc_version==5)
        {
            $basefolder = BASEPATH.'/usertpl/';
        }
        else if(self::$_pc_version == 0 && $issline !=1)
        {
            $basefolder = BASEPATH.'/templets/smore/uploadtemplets/';
        }
        else if(self::$_pc_version == 0 && $issline==1)
        {
            $basefolder = BASEPATH.'/templets/sline/uploadtemplets/';
        }


        $file = $basefolder.$filename;

        if(file_exists($file))
        {
            if(file_put_contents($file,$content))
            {
                $flag = true;
            }
        }

        echo json_encode(array('status'=>$flag));

    }

    /*
     * 获取模板目录文件
     * */
    public static function getDirFile($node,$issline=0,$ismobile,$version)
    {

       // $basefolder = $issline==1?BASEPATH.'/templets/sline/uploadtemplets/':BASEPATH.'/templets/smore/uploadtemplets/';
       // $directory = $basefolder.$node.'/';


        //pc版本,当pc_version = 0 时,表示4.X版本,当pc_version = 5 时,表示5.X版本

        $dir_v5 = self::$_v5_folder.$node.'/';
        $dir_v4 = self::$_v4_folder.$node.'/';
        $dir_v4sline = self::$_v4sline_folder.$node.'/';
        $dir_m = self::$_m_folder.$node.'/';

        if($ismobile)
        {
            if(strpos(realpath($dir_m),'usertpl')===false) //增加路径检测
            {
                exit();
            }
            $directory = $dir_m;
        }
        else
        {
            //pc5版本
            if(self::$_pc_version == 5)
            {
                if(strpos(realpath($dir_v5),'usertpl')===false) //增加路径检测
                {
                    exit();
                }
                $directory = $dir_v5;
            }
            //pc4版本
            else if(self::$_pc_version == 0)
            {
                $dir_v4 = $issline ? $dir_v4sline : $dir_v4;

                if(strpos(realpath($dir_v4),'uploadtemplets')===false) //增加路径检测
                {
                    exit();
                }
                $directory = $dir_v4;
            }

        }




        //$nodes = array();
        $folder_list= array();
        if (is_dir($directory))
        {
            $d = dir($directory);

            while($f = $d->read()){

                if($f == '.' || $f == '..' || substr($f, 0, 1) == '.') continue;

                $filename = $directory . '/' . $f;

                $lastmod = date('Y-m-d H:i:s', filemtime($filename));

                //如果是目录
                if(is_dir($directory.'/'.$f))
                {

                    $qtip = '类型: 文件夹<br />最后修改时间: '.$lastmod;
                    $folder_list[] = array(
                        'text' => $f,
                        'id'   => $node.'/'.$f,
       /*                 'cls'  => 'folder',*/
                        'qtip' => $qtip,
                        'ext'=>''
                    );

                }
                else
                {
                    $size = self::formatBytes(filesize($filename), 2);
                    $ext = self::getExtension($filename);
                    $qtip = '类型: 文件<br />最后修改时间: '.$lastmod.'<br />大小: '.$size;
                    $file_list[] = array(
                        'text' => $f,
                        'id'   => $node.'/'.$f,
                        'leaf' => true,
                        /*'cls'  => 'file',*/
                        'qtip' => $qtip,
                        'ext' => $ext
                    );
                }

            }

            $d->close();
        }
         $addinfo = array(
                   'leaf'=>true,
                   'id'=>$node.'add',
                   'text'=>'<span class="upload-file" onclick="uploadFile(this,\''.$node.'\')"></span>',
                   'ext'=>''
               );

        array_push($file_list,$addinfo);

        $nodes=array_merge($folder_list,$file_list);

        return $nodes;
    }

    /*
     * 获取文件修改时间
     * */
    public static function formatBytes($val, $digits = 3, $mode = 'SI', $bB = 'B')
    {
       //$mode == 'SI'|'IEC', $bB == 'b'|'B'
        $si = array('', 'K', 'M', 'G', 'T', 'P', 'E', 'Z', 'Y');
        $iec = array('', 'Ki', 'Mi', 'Gi', 'Ti', 'Pi', 'Ei', 'Zi', 'Yi');
        switch(strtoupper($mode)) {
            case 'SI' : $factor = 1000; $symbols = $si; break;
            case 'IEC' : $factor = 1024; $symbols = $iec; break;
            default : $factor = 1000; $symbols = $si; break;
        }
        switch($bB) {
            case 'b' : $val *= 8; break;
            default : $bB = 'B'; break;
        }
        for($i=0;$i<count($symbols)-1 && $val>=$factor;$i++)
            $val /= $factor;
        $p = strpos($val, '.');
        if($p !== false && $p > $digits) $val = round($val);
        elseif($p !== false) $val = round($val, $digits-$p);
        return round($val, $digits) . ' ' . $symbols[$i] . $bB;
    }
    /*
     * 获取文件扩展名
     * */
    public static function getExtension($file)
    {
        return end(explode('.', $file));
    }



}