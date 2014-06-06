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
    public function getUserInfo($open_id) {

        if (!empty($open_id)) {
            $data['open_id'] = $open_id;
            $data['source'] = SOURCE;
            $userInfoJson = transferData(APIURL . "/user/get_info", "post", $data);
            $userInfoArray = json_decode($userInfoJson, true);
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

            $error = new errorApi();

            $error->JudgeError($userInfoArray);


            return $userInfoArray;
        }
    }

    //更新用户地址数据 ly 2016/6/6
    public function updateUserAddress($updateDateArray, $openId) {
        if (is_array($updateDateArray)) {
            $postData['address_phone'] = $updateDateArray["address_phone"];
            $postData['province_id'] = $updateDateArray["province_id"];
            $postData['city_id'] = $updateDateArray["city_id"];
            $postData['area_id'] = $updateDateArray["area_id"];
            $postData['street'] = $updateDateArray["street"];
            $postData['real_name'] = $updateDateArray["real_name"];
            $postData['open_id'] = $openId;
            $postData['source'] = SOURCE;
            $updateUserLocation = transferData(APIURL . "/user/update_user_address", "post", $postData);
            $updateUserLocation = json_decode($updateUserLocation, TRUE);

            $error = new errorApi();

            $error->JudgeError($updateUserLocation);
            return $updateUserLocation;
        } else {
            throw "function updateUserAddress() incoming parameters must be array";
        }
    }

}
?>

