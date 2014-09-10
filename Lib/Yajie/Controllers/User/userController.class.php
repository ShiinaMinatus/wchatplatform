<?php

class userController extends mainuserController {

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");

        if (!empty($_REQUEST['open_id'])) {

            $this->userOpenId = $_REQUEST['open_id'];
        } else {
            $this->userOpenId = 'oIUY-tzD2rRdkycAc5ceQjtI1-ok';
        }


        $this->assign('open_id', $this->userOpenId);
    }

    /**
     * 绑定
     */
    public function ativating() {

        //$userInfo = P('user')->ableUser($this->userOpenId);

        if (!empty($userInfo['error']) && $userInfo['error']['error_status'] == 20002) {

            $this->displayMessage('用户已绑定', 0);

            die;
        }

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

            $url = U(SOURCE . '/user/userInfo', $array, 1);

            $this->displayMessage("恭喜绑定成功", 1, $url, '个人中心');
        } else {

            $this->displayMessage("手机号码不能为空", 0);
        }
    }

    public function userInfo() {

        $userinfo = p('user')->getUserInfo($this->userOpenId);
        $userinfo = $userinfo["user"];
        $userCode =  strtoupper($userinfo['user_code']) ;
        
        $userPoint = $userinfo['user_integration'];
        $userMoney = $userinfo['user_money'];
        $companyInfo = p('company')->get_info();
        $wifiName = $companyInfo['wifiName'];
        $wifiPassword = $companyInfo['wifiPassword'];
        $this->assign('userCode', $userCode);
        $this->assign('userPoint', $userPoint);
        $this->assign('userMoney', $userMoney);
        $this->assign('wifiName', $wifiName);
        $this->assign('wifiPassword', $wifiPassword);
//        var_dump($wifiPassword);
        $this->assign('userinfo', $userInfo["weixin_user"]);



        $this->display();
    }

}

?>