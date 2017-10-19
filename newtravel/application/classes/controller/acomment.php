<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Acomment extends Stourweb_Controller{



    /*

     * 评论总控制器

     * @author:netman

     * @data:2014-07-22

     * */



    public function before()

    {

        parent::before();
        
        $this->assign('parentkey',$this->params['parentkey']);

        $this->assign('itemid',$this->params['itemid']);



    }

    /*
  * 顶部自定义导航
  * */

    public function action_index()
    {


        $action=$this->params['action'];

        $param = $this->params['action'];
        $right = array(
            'read'=>'slook',
            'save'=>'smodify',
            'addsub'=>'sadd',
            'delete'=>'sdelete',
            'update'=>'smodify'
        );
        $user_action = $right[$param];
        if(!empty($user_action))
            Common::getUserRight('usernav',$user_action);




        $attrtable = 'startplace';//当前操作表

        if(empty($action))
        {
            $this->display('stourtravel/Acomment/top_user_nav');
        }
        else if($action=='read')
        {


            $node=Arr::get($_GET,'node');
            $list=array();
            if($node=='root')//属性组根
            {
                $list=ORM::factory('activity_comment')->where('pid','=','0')->get_all();
                $list[]=array(
                    'leaf'=>true,
                    'id'=>'0add',
                    'content'=>'<button class="dest-add-btn df-add-btn" onclick="addSub(0)">添加</button>',
                    'allowDrag'=>false,
                    'allowDrop'=>false,
                    // 'litpic'=>'add',
                    'displayorder'=>'add'
                );
            }
            else //子级
            {
                $list=ORM::factory('activity_comment')->where('pid','=',$node)->get_all();
                foreach($list as $k=>$v)
                {
                    // $list[$k]['leaf']=true;
                    $list[$k][]=array(
                        'leaf'=>true,
                        'id'=>$node.'add',
                        'content'=>'<button class="dest-add-btn df-add-btn" onclick="addSub('.$list[$k]['id'].')">添加</button>',
                        'allowDrag'=>false,
                        'allowDrop'=>false,
                        'litpic'=>'add',
                        'displayorder'=>'add'
                    );
                }
                $list[]=array(
                    'leaf'=>true,
                    'id'=>$node.'add',
                    'content'=>'<button class="dest-add-btn df-add-btn" onclick="addSub('.$node.')">添加</button>',
                    'allowDrag'=>false,
                    'allowDrop'=>false,
                    'litpic'=>'add',
                    'displayorder'=>'add'
                );
            }
            echo json_encode(array('success'=>true,'text'=>'','children'=>$list));
        }
        else if($action=='addsub')//添加子级
        {
            $pid=Arr::get($_POST,'pid');
            $model=ORM::factory('activity_comment');
            $model->pid=$pid;
            $model->content="自定义";
            $model->displayorder='9999';
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
                $model=ORM::factory('activity_comment',$id);
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
            $model=ORM::factory('activity_comment',$id);
            $model->delete();

        }
        else if($action=='update')//更新操作
        {
            $id=Arr::get($_POST,'id');
            $field=Arr::get($_POST,'field');
            $val=Arr::get($_POST,'val');
            $model=ORM::factory('activity_comment',$id);
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











}