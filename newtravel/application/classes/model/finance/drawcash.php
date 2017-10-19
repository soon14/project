<?php defined('SYSPATH') or die('No direct access allowed.');



class Model_Finance_Drawcash

{

    private function check_table($tableName)

    {

        $result = DB::query(Database::SELECT, "SHOW TABLES LIKE '{$tableName}'")->execute()->as_array();

        return count($result) > 0 ? true : false;

    }



    private function format_drawcash_data($list)

    {

        for ($i = 0; $i < count($list); $i++)

        {

            $item = $list[$i];

            if ($item['status'] == "0")

                $list[$i]["status_name"] = "审核中";

            if ($item['status'] == "1")

                $list[$i]["status_name"] = "已完成";

            if ($item['status'] == "2")

                $list[$i]["status_name"] = "未通过";



            if ($item['applyusertype'] == "supplier")

                $list[$i]["applyusertype_name"] = "供应商";

            if ($item['applyusertype'] == "distributor")

                $list[$i]["applyusertype_name"] = "分销商";



            $list[$i]['addtime_name'] = "";

            if(!empty($item['addtime']))

                $list[$i]['addtime_name'] = date("Y-m-d H:i:s",$item['addtime']);



            $list[$i]['finishtime_name'] = "";

            if(!empty($item['finishtime']))

                $list[$i]['finishtime_name'] = date("Y-m-d H:i:s",$item['finishtime']);

        }



        return $list;

    }





    public function get_all_drawcash($sort = "addtime", $sortdirection = "DESC")

    {

        $result = array();



        if ($this->check_table("sline_supplier_finance_drawcash"))

            $suppliersql = <<<sql

        SELECT

			'supplier' AS applyusertype,

			sline_supplier_finance_drawcash.id AS applyid,

			sline_supplier_finance_drawcash.supplierid AS applyuserid,

			sline_supplier.suppliername AS applyusername,

			sline_supplier_finance_drawcash.withdrawamount,

			sline_supplier_finance_drawcash.bankname,

			sline_supplier_finance_drawcash.bankcardnumber,

			sline_supplier_finance_drawcash.bankaccountname,

			sline_supplier_finance_drawcash.description,

			sline_supplier_finance_drawcash.addtime,

			sline_supplier_finance_drawcash.finishtime,

			sline_supplier_finance_drawcash.status,

			sline_supplier_finance_drawcash.audit_description

		FROM

			sline_supplier_finance_drawcash

		LEFT JOIN sline_supplier ON sline_supplier_finance_drawcash.supplierid = sline_supplier.id

sql;



        if ($this->check_table("sline_fenxiao_withdraw"))

            $distributorsql = <<<sql

       SELECT

				'distributor' AS applyusertype,

				sline_fenxiao_withdraw.id AS applyid,

				sline_fenxiao_withdraw.memberid AS applyuserid,

				sline_member.nickname AS applyusername,

				sline_fenxiao_withdraw.withdrawamount,

				sline_fenxiao_withdraw.bankname,

				sline_fenxiao_withdraw.bankcardnumber,

				sline_fenxiao_withdraw.bankaccountname,

				sline_fenxiao_withdraw.description,

				sline_fenxiao_withdraw.addtime,

				sline_fenxiao_withdraw.finishtime,

				sline_fenxiao_withdraw.status,

				sline_fenxiao_withdraw.audit_description

			FROM

				sline_fenxiao_withdraw

			LEFT JOIN sline_member ON sline_fenxiao_withdraw.memberid = sline_member.mid

sql;



        if (empty($suppliersql) && empty($distributorsql))

        {

            $result['rowcount'] = 0;

            $result['list'] = array();

            return $result;

        }



        if (!empty($suppliersql) && !empty($distributorsql))

            $unionsql = "UNION ALL";



        $sql = <<<sql

SELECT

	count(withdraw.applyid) as rowcount

FROM

	(

		{$suppliersql}

		{$unionsql}

		{$distributorsql}

	) AS withdraw

ORDER BY

	withdraw.{$sort} {$sortdirection}

sql;



        $queryresult = DB::query(Database::SELECT, $sql)->execute()->as_array();

        $result['rowcount'] = (int)$queryresult[0]['rowcount'];



        $sql = <<<sql

SELECT

	*

FROM

	(

		{$suppliersql}

		{$unionsql}

		{$distributorsql}

	) AS withdraw

ORDER BY

	withdraw.{$sort} {$sortdirection}

sql;





        $result['list'] = $this->format_drawcash_data(DB::query(Database::SELECT, $sql)->execute()->as_array());

        return $result;

    }



    public function get_drawcash_detail($applyusertype, $applyid)

    {

        if ($applyusertype == "supplier")

            $sql = <<<sql

		SELECT

			'supplier' AS applyusertype,

			sline_supplier_finance_drawcash.id AS applyid,

			sline_supplier_finance_drawcash.supplierid AS applyuserid,

			sline_supplier.suppliername AS applyusername,

			sline_supplier_finance_drawcash.withdrawamount,

			sline_supplier_finance_drawcash.bankname,

			sline_supplier_finance_drawcash.bankcardnumber,

			sline_supplier_finance_drawcash.bankaccountname,

			sline_supplier_finance_drawcash.description,

			sline_supplier_finance_drawcash.addtime,

			sline_supplier_finance_drawcash.finishtime,

			sline_supplier_finance_drawcash.status,

			sline_supplier_finance_drawcash.audit_description

		FROM

			sline_supplier_finance_drawcash

		LEFT JOIN sline_supplier ON sline_supplier_finance_drawcash.supplierid = sline_supplier.id

		WHERE sline_supplier_finance_drawcash.id={$applyid}

sql;

        if ($applyusertype == "distributor")

            $sql = <<<sql



			SELECT

				'distributor' AS applyusertype,

				sline_fenxiao_withdraw.id AS applyid,

				sline_fenxiao_withdraw.memberid AS applyuserid,

				sline_member.nickname AS applyusername,

				sline_fenxiao_withdraw.withdrawamount,

				sline_fenxiao_withdraw.bankname,

				sline_fenxiao_withdraw.bankcardnumber,

				sline_fenxiao_withdraw.bankaccountname,

				sline_fenxiao_withdraw.description,

				sline_fenxiao_withdraw.addtime,

				sline_fenxiao_withdraw.finishtime,

				sline_fenxiao_withdraw.status,

				sline_fenxiao_withdraw.audit_description

			FROM

				sline_fenxiao_withdraw

			LEFT JOIN sline_member ON sline_fenxiao_withdraw.memberid = sline_member.mid

	        WHERE sline_fenxiao_withdraw.id={$applyid}

sql;



        return $this->format_drawcash_data(DB::query(Database::SELECT, $sql)->execute()->as_array());

    }



    public function auditing_drawcash_apply($applyusertype, $applyid, $status, $audit_description ,$time=null,$supid=null)

    {

        if ($applyusertype == "supplier")

        {

            $sql = <<<sql

UPDATE sline_supplier_finance_drawcash

SET status ={$status}, finishtime = UNIX_TIMESTAMP(),

 audit_description = '{$audit_description}'

WHERE

	id ={$applyid}

sql;

            DB::query(Database::SELECT, $sql)->execute();

            //======================fengjishu  start
            if($status=='1') {
                $where = " addtime<$time and isconsume=1 and is_drawcash = 0 and paytype !=4 and status = 5 and find_in_set('$supid',supplierlist) ";
                $sql = "UPDATE `sline_member_order` SET `is_drawcash` = '1' where $where";
               DB::query(Database::UPDATE, $sql)->execute();
            }

            //======================fengjishu   end


        }



        if ($applyusertype == "distributor")

        {

            $sql = <<<sql

UPDATE sline_fenxiao_withdraw

SET status ={$status}, finishtime = UNIX_TIMESTAMP(),

 audit_description = '{$audit_description}'

WHERE

	id ={$applyid}

sql;

            DB::query(Database::SELECT, $sql)->execute();



            if ($status == "1")

            {

                $sql = <<<sql

select * from sline_fenxiao_withdraw where id ={$applyid}

sql;

                $withdrawData = DB::query(Database::SELECT, $sql)->execute()->as_array();



                $sql = <<<sql

update sline_fenxiao set fxamount=fxamount-{$withdrawData[0]['withdrawamount']} where memberid ='{$withdrawData[0]['memberid']}'

sql;

                DB::query(Database::SELECT, $sql)->execute();

            }

        }

    }

}