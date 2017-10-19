<?php defined('SYSPATH') or die('No direct script access.');



class Controller_Finance extends Stourweb_Controller

{

    public function before()

    {

        parent::before();



        $this->assign('parentkey', $this->params['parentkey']);

        $this->assign('itemid', $this->params['itemid']);

    }



    public function action_index()

    {

        $this->display('stourtravel/finance/drawcash_list');

    }



    public function action_ajax_get_drawcash_list()

    {

        $drawcashModel = new Model_Finance_Drawcash();



        $sort = json_decode(Common::remove_xss(Arr::get($_GET, 'sort')));

        if (is_null($sort))

        {

            $drawcashData = $drawcashModel->get_all_drawcash();

        } else

        {

            $drawcashData = $drawcashModel->get_all_drawcash($sort[0]->property, $sort[0]->direction);

        }



        $result['total'] = $drawcashData['rowcount'];

        $result['lists'] = $drawcashData['list'];;

        $result['success'] = true;



        echo json_encode($result);

    }





    public function action_drawcash_detail()

    {

        $applyid = Common::remove_xss($this->params['applyid']);

        $applyusertype = Common::remove_xss($this->params['applyusertype']);



        $drawcashModel = new Model_Finance_Drawcash();

        $drawcashData = $drawcashModel->get_drawcash_detail($applyusertype, $applyid);



        $this->assign('info', $drawcashData[0]);

        $this->display('stourtravel/finance/drawcash_detail');

    }





    public function action_ajax_auditing_drawcash_apply()

    {

        $applyid = Common::remove_xss(Arr::get($_POST, 'applyid'));

        $applyusertype = Common::remove_xss(Arr::get($_POST, 'applyusertype'));

        $status = Common::remove_xss(Arr::get($_POST, 'status'));

        $audit_description = Common::remove_xss(Arr::get($_POST, 'audit_description'));

        //===================FENGJISHU start

        $time      = Common::remove_xss(Arr::get($_POST, 'time'));
        $supid      = Common::remove_xss(Arr::get($_POST, 'supid'));

        $time      =strtotime($time);
       // echo json_encode(array('status' => true,'sta'=>$time));exit;
        //===================FENGJISHU  end




        $drawcashModel = new Model_Finance_Drawcash();

        $sta =$drawcashModel->auditing_drawcash_apply($applyusertype, $applyid, $status, $audit_description ,$time,$supid);



        echo json_encode(array('status' => true,'sta'=>$sta));

    }





}