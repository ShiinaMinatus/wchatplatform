<?php

/**
 * 用户API 方法库
 */
class mainuserApi {

    public function __construct() {
        
    }

    /**
     * 获取用户信息
     * @param int $open_id     用户在微信公众平台的唯一标识
     * @param varchar $source  微信公众平台来源
     * @return array   返回为已经解析完成的数组
     */
    public function getUserInfo($open_id,$type =0) {

        if (!empty($open_id)) {
            $data['open_id'] = $open_id;
            $data['source'] = SOURCE;
            $userInfoJson = transferData(APIURL . "/user/get_info", "post", $data);
            $userInfoArray = json_decode($userInfoJson, true);


            if($type !=1){

                P('error')->JudgeError($userInfoArray);
            }
            

            return $userInfoArray;
        }
    }

    /**
     * 用户是否注册
     * @param int $open_id     用户在微信公众平台的唯一标识
     * @param varchar $source  微信公众平台来源
     * @return array   返回为已经解析完成的数组
     */
    public function ableUser($open_id) {



        if (!empty($open_id)) {
            $data['open_id'] = $open_id;
            $data['source'] = SOURCE;
            $userInfoJson = transferData(APIURL . "/user/able_user", "post", $data);

            $userInfoArray = json_decode($userInfoJson, true);

            P('error')->JudgeError($userInfoArray);

            return $userInfoArray;
        }
    }

    /**
     * 获取用户优惠券
     * @param type $open_id
     * @param type $source
     * @return type
     */
    public function getUserCode($open_id) {

        if (!empty($open_id)) {
            $data['open_id'] = $open_id;
            $data['source'] = SOURCE;
            $userInfoJson = transferData(APIURL . "/code/get_user_code", "post", $data);
            $userInfoArray = json_decode($userInfoJson, true);
            P('error')->JudgeError($userInfoArray);
            return $userInfoArray;
        }
    }

    /**
     * 获取用户消费 和  积分记录
     */
    public function getUserRecord($open_id, $type) {
        if (!empty($open_id)) {
            $data['open_id'] = $open_id;
            $data['source'] = SOURCE;

            $data['type'] = $type;
            $userInfoJson = transferData(APIURL . "/user/getUserRecord", "post", $data);
            $userInfoArray = json_decode($userInfoJson, true);

            P('error')->JudgeError($userInfoArray);


            return $userInfoArray;
        }
    }

    /**
     * 添加用户
     */

    public function addUser($data){


           $jsondata = array();

           $jsondata['open_id'] = $data['open_id'];

           $jsondata['source'] = SOURCE;

           $jsondata['user_name'] = $data['userName'];

           $jsondata['sex'] = $data['gender'];

           $jsondata['user_phone'] = $data['phoneNumber'];

           $jsondata['birthday'] = strtotime($data['year'] . '-' . $data['month'] . '-' . $data['date']);


           var_dump($jsondata);

           die;

           $resultRegisterJson = transferData(APIURL . '/user/add', 'post', $jsondata);

           $resultRegisterArray = json_decode($resultRegisterJson, true);

           $error = new errorApi();

           $error->JudgeError($resultRegisterArray);


           return $resultRegisterArray;

    }
    /**
     * 用户 订单 兑换   验证码 状态
     */

    public function getUserStatus($open_id){

        $data['open_id'] = $open_id;

        $data['source'] = SOURCE;

       $resultRegisterJson = transferData(APIURL . '/user/get_info_status', 'post', $data);

       $resultRegisterArray = json_decode($resultRegisterJson, true);

       $error = new errorApi();

       $error->JudgeError($resultRegisterArray);


       return $resultRegisterArray;


    }

    /**
     * 获取用户签到信息 api
     */

    public function userRegistration($open_id){

        $postDate["source"] = SOURCE;

        $postDate['open_id'] = $open_id;


        $userRegistration = transferData(APIURL . "/registration/get_registeration", "post", $postDate);

        $userRegistration_ = json_decode($userRegistration, true);


        return $userRegistration_;
    }


    /**
     * 
     */

    public function registrationAction($open_id){

        $postDate["source"] = SOURCE;

        $postDate['open_id'] = $open_id;


        $userRegistrationA = transferData(APIURL . "/registration/userRegisterationIntegration", "post", $postDate);

        $userRegistration_info = json_decode($userRegistrationA, true);
    }

}
?>

