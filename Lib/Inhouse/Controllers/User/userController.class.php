<?php

class userController extends mainuserController implements inhouseuser {

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");

        if (!empty($_REQUEST['open_id'])) {

            $this->userOpenId = $_REQUEST['open_id'];
        }

        $this->assign('open_id', $this->userOpenId);
    }

    /**
     * 用户积分 获取博卡消费记录
     */
    public function userCenter() {

        $this->able_register();


        $userInfo = P('user')->getUserInfo($this->userOpenId);


        $expenseItem = P('user')->getCardInfo($this->userOpenId, 1);


        $userInfo['user']['user_phone'] = phoneStart($userInfo['user']['user_phone']);

        $xval = array();

        $yval = array();

        if (count($expenseItem['record']) > 0) {

            $result = $expenseItem['record'];

            foreach ($result as $v) {

                $tempArray = array();

                $time = strtotime($v['order_time']);

                $val = date('y/m/d', $time);

                array_push($tempArray, $v['record_commodity']);

                array_push($tempArray, (int) $v['money']);

                array_unshift($xval, $val);

                array_unshift($yval, $tempArray);

                // array_push($xval, $val);
                // array_push($yval, (int)$v['money']);

                unset($tempArray);
            }
        } else {

            for ($i = 0; $i < 12; $i++) {

                array_push($yval, 0);

                array_push($xval, '');
            }
        }


        $this->assign("XVAL", json_encode($xval));

        $this->assign("YVAL", json_encode($yval));

        $this->assign('record_state', 1);


        $this->assign("userInfo", $userInfo["user"]);


        //$this->assign("weixin", $userInfo["weixin_user"]);


        $this->display();
    }

    /**
     * 手机绑定
     */
    public function bind() {

        if (!empty($_REQUEST['phone']) && !empty($this->userOpenId)) {

            P('user')->bind($_REQUEST['phone'], $this->userOpenId);

            $array = array();

            $array['open_id'] = $this->userOpenId;

            $url = U(SOURCE . '/user/userCenter', $array, 1);

            $this->displayMessage("恭喜绑定成功", 1, $url, '个人中心');
        } else {

            $this->displayMessage("手机号码不能为空", 0);
        }
    }

    /**
     * 博卡 用户消费记录 显示5条
     */
    public function userExpense() {


        $this->able_register();



        $userInfo = P('user')->getUserInfo($this->userOpenId);

        $expenseItem = P('user')->getCardInfo($this->userOpenId, 1);

        $this->assign('state', count($expenseItem["record"]) > 0 ? 1 : 0);

        $this->assign("expenseItem", $expenseItem["record"]);
        $this->assign("userInfoWeixin", $userInfo["weixin_user"]);
        $this->assign("userInfo", $userInfo["user"]);
        $this->display();
    }

    /**
     * 博卡 手机  激活页面
     */
    public function ativating() {

        $userInfo = P('user')->ableUser($this->userOpenId);

        if (!empty($userInfo['error']) && $userInfo['error']['error_status'] == 20002) {

            $this->displayMessage('用户已绑定', 0);

            die;
        }

        $this->display();
    }

}

?>