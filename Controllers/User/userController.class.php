<?php

class mainuserController extends BaseController implements mainuser {

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
     * 通过授权来获取到open_id 并  将open_id 输出到页面众
     */
    public function index() {


        $url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx1273344d7b97cd07&secret=65f0ce66ed3b65ef8aebd7ae3ea92e5c&code=' . $_REQUEST['code'] . '&grant_type=authorization_code';

        $result = transferData($url, "get");

        $array = json_decode($result, true);

        $this->assign('open_id', $array['openid']);

        $this->userOpenId = $array['openid'];

        if (!empty($_REQUEST['action'])) {

            $function = $_REQUEST['action'];

            $this->display_page = $function;

            $this->$function();
        }
    }

    public function register() {

        $userInfo = P('user')->ableUser($this->userOpenId);

        $this->assign('open_id', $this->userOpenId);

        $this->ableSource($_REQUEST);

        $this->assign('vars', json_encode($_REQUEST));

        $this->setDir('User');

        $this->display('register');
    }

    /**
     * 提交注册
     */
    public function submitRegister() {

        if (!empty($_REQUEST['open_id'])) {

            if (!empty($_REQUEST['phoneNumber'])) {

                if (checkMobile($_REQUEST['phoneNumber'])) {

                    if (!empty($_REQUEST['userName'])) {

                        $resultRenameArray = P('user')->ableUser($_REQUEST['open_id']);

                        if ($resultRenameArray['success'] == 1) {


                            // $resultRegisterJson = transferData(APIURL . '/user/add', 'post', $data);
                            // $resultRegisterArray = json_decode($resultRegisterJson, true);
                            // $error = new errorApi();
                            // $error->JudgeError($resultRegisterArray);

                            $resultRegisterArray = P('user')->addUser($_REQUEST);

                            if ($resultRegisterArray['user']['user_id'] > 0) {

                                /**
                                 * 判断是否有通过其他途径 跳转进来  如有 则注册完成跳转
                                 */
                                if (!empty($_REQUEST['vars'])) {

                                    $varsArray = json_decode(stripcslashes($_REQUEST['vars']), true);

                                    if (!empty($varsArray['action'])) {

                                        if ($varsArray['action'] == '/code/getCode') {

                                            $array = array('open_id' => $varsArray['open_id'], 'give_open_id' => $varsArray['give_open_id']);

                                            R($varsArray['action'], $varsArray['source'], $array);
                                        } else if ($varsArray['action'] == 'url') {

                                            $this->jsJump($varsArray['url']);
                                        }

                                        die;
                                        //U($_REQUEST['path'], $_REQUEST['vars']);
                                    }
                                }

                                $array = array();

                                $array['open_id'] = $_REQUEST['open_id'];

                                $url = U(SOURCE . '/user/userCenter', $array, 1);

                                $this->displayMessage("恭喜注册成功", 1, $url, '个人中心');

                                //U(SOURCE . '/user/userCenter', array('open_id' => $_REQUEST['open_id']));
                            }
                        } else {

                            $this->displayMessage('用户已经注册!');
                        }
                    } else {

                        $this->displayMessage('用户名不能为空!');
                    }
                } else {

                    $this->displayMessage('手机格式不正确!');
                }
            } else {

                $this->displayMessage('手机号码必须存在!');

                die;
            }
        } else {

            $this->displayMessage('open_id 不存在  请重新从微信公众平台中进入!');

            die;
        }
    }

    /**
     * 用户积分
     */
    public function userCenter() {

        $this->able_register();

        $userInfo = P('user')->getUserInfo($this->userOpenId);

        // $postDate["source"] = SOURCE;
        // $postDate['open_id'] = $this->userOpenId;
        // $messagePrompt = transferData(APIURL . "/user/get_info_status", "post", $postDate);
        // $messagePrompt = json_decode($messagePrompt, TRUE);
        // $error = new errorApi();
        // $error->JudgeError($messagePrompt);

        $messagePrompt = P('user')->getUserStatus($this->userOpenId);

        $this->assign('messagePrompt', $messagePrompt);

        if (!empty($userInfo)) {

            $this->assign('userinfo', $userInfo);
        }
        $this->display();
    }

    public function userInfo() {

        $userInfo = P('user')->getUserInfo($this->userOpenId);

        $this->assign('userinfo', $userInfo["weixin_user"]);

        $birthdayToDate = $userInfo["user"]["birthday"];

        $birthdayToDate = date("Y-m-d", $birthdayToDate);

        $this->assign("userBirthday", $birthdayToDate);

        $this->display();
    }

    /**
     * 用户积分
     */
    public function userJf() {

        if (!empty($_REQUEST['type'])) {

            $type = $_REQUEST['type'];
        } else {

            $type = 1;
        }

        $result = P('user')->getUserRecord($this->userOpenId, $type);

        $this->assign('type', $type);

        $this->assign('data', $result);

        $this->assign('number', count($result));

        $this->display();
    }

    /**
     * 用户签到
     */
    public function userlogin() {

        $this->able_register();


        $this->display();
    }

    /**
     *  激活页面
     */
    public function ativating() {

        $userApi = new userApi();

        $userInfo = $userApi->ableUser($this->userOpenId);

        $this->display();
    }

    /**
     * 签到
     */
    public function registration() {

        $this->able_register();

        $array = P('user')->userRegistration($this->userOpenId);

        $today_time = mktime(0, 0, 0);

        if (!empty($array['error'])) {

            $error_code = $array['error']['error_status'];

            $array['res'] = 0;

            $array['day'] = 0;
        } else {

            if ($today_time == $array['registration_time']) {

                $array['res'] = 1;
            } else {


                $array['res'] = 0;
            }
        }
        $overplus =5- $array["day"] % 5;
        $clearDay=$array["day"] % 5;//获取每个周期内的第几天
        $array["overplus"]=$overplus;
        $array["clearDay"]=$clearDay;
        $this->assign('info', $array);

        $this->display('registration');
    }

    /**
     * 用户签到接口
     */
    public function registrationAction() {


        P('user')->registrationAction($this->userOpenId);

        $this->registration();
    }

}

?>