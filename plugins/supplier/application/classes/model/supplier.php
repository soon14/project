<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Supplier extends ORM
{
    //对应数据库
    protected $_table_name = 'supplier';
    protected $_primary_key = 'id';

    private $_qualify_type = array(
        '1'=>'card',
        '2'=>'certificate',
        '3'=>'license'
    );
    /*
     * 新增用户
     * @param array $data
     * return mixed
     */
    public static function register($data)
    {
        //数据验证
        //检查账号
        $user = isset($data['account']) ? $data['account'] : $data['moible'];
        $user = self::supplier_find($user,null,false);
        if (!empty($user))
        {
            return __('error_member_exists');
        }
        //添加
        $result = DB::insert('supplier', array_keys($data))->values(array_values($data))->execute();
        return $result[1] > 0 ? $result : __('error_member_insert');
    }

    /*
     * 密码找回
     * @param array $data
     * return mixed
     */
    public static function findpass($data)
    {
        //数据验证
        //检查账号
        $user = isset($data['account']) ? $data['account'] : $data['moible'];
        $user = self::supplier_find($user,null,false);
        if (empty($user))
        {
            return __('error_member_not_exists');
        }
        //修改
        $updateArr = array('password' => $data['password']);
        $whereStr = "account='{$data['account']}' or mobile='{$data['account']}'";
        $result = DB::update('supplier')->set($updateArr)->where($whereStr)->execute();
        return $result;
    }

    /**
     * @param $loginname
     * @param $loginpwd
     * @param $hasencode 密码是否已加密
     */
    public static function login($loginname,$loginpwd,$hasencode)
    {
        $user = self::supplier_find($loginname,$loginpwd,$hasencode);
        if($user)
        {
            //写登陆信息
            self::write_cookie('st_supplier_name',$user['suppliername']);
            self::write_cookie('st_supplier_id',$user['id']);
            self::save_login_time($user['id']);

        }
        return $user;
    }
    /*
     * 退出登陆
     * */
    public static function login_out()
    {
        Cookie::delete('st_supplier_name');
        Cookie::delete('st_supplier_id');
    }

    /*
     * 保存登陆时间
     * */
    public static function save_login_time($id)
    {
        $m = ORM::factory('supplier',$id);
        $m->logintime = time();
        $m->save();
    }
    /*
     * 查找用户
     * @param string $account 用户账号
     * return array
     */
    public static function supplier_find($account, $pwd = null,$hasencode)
    {

        $where = "(account='{$account}' or mobile='$account')";
        if (!is_null($pwd))
        {
            $pwd = $hasencode ? $pwd : md5($pwd);
            $where .= " and password='" . $pwd . "'";
        }

        $result = DB::select()->from('supplier')->where($where)->execute()->as_array();
        if (!empty($result))
        {
            $result = $result[0];
        }
        return $result;
    }

    /**
     * 根据会员id获取用户信息
     * @param $mid
     * @return array
     */
    public static function get_supplier_byid($supplierid)
    {
        if ($supplierid)
        {
            $memberinfo = ORM::factory('supplier', $supplierid)->as_array();
            $memberinfo['supplierkind'] = ORM::factory('supplier_kind',$memberinfo['kindid'])->get('kindname');
            return $memberinfo;
        }

    }


    /**
     * 写入session
     * @param $member 会员详细信息
     * @param $user
     */
    public static function write_session($member, $user = null)
    {

    }
    /*
     * 登陆cookie信息设置
     * */
    public static function write_cookie($key,$value)
    {

        Cookie::set($key,$value);
    }

    /**
     * @param $loginname
     * @return bool
     */
    public static function check_supplier_exist($loginname)
    {

        $where = "account='{$loginname}'";
        $result = DB::select()->from('supplier')->where($where)->execute()->as_array();
        $flag = false;
        if (!empty($result))
        {
            $flag = true;
        }
        return $flag;
    }

    /**
     * 数据修改
     * @param $updateArr
     * @param $whereStr
     * @param $tabName
     * @return object
     */
    public static function update_field_by_where($updateArr, $whereStr, $tabName)
    {
        return DB::update($tabName)->set($updateArr)->where($whereStr)->execute();
    }

    /**
     * 手机版本需要功能.
     */
    /**
     * @param $token
     * @return mixed
     * 根据token登陆
     */

    public static function login_by_token($token)
    {

        $sql = "SELECT * FROM `sline_supplier` where md5(concat(account,password))='$token'";
        $user = DB::query(1,$sql)->execute()->current();
        if($user)
        {
            //写登陆信息

            self::write_cookie('st_supplier_name',$user['suppliername']);
            self::write_cookie('st_supplier_id',$user['id']);
            //self::write_cookie('st_supplier_account_id',$user['id']);

        }
        return $user;
    }
}