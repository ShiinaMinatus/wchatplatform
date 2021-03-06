<?php

/**
 * 用户API 方法库
 */
class maincodeApi {

    public function __construct() {
        
    }

    /**
     * 获取用户信息
     * @param int $open_id     用户在微信公众平台的唯一标识
     * @param varchar $source  微信公众平台来源
     * @return array   返回为已经解析完成的数组
     */
    public function getcodeInfo($code_id) {

        if (!empty($code_id)) {
            $data['code_id'] = $code_id;
            $data['source'] = SOURCE;
            $userInfoJson = transferData(APIURL . "/code/get_code_info", "post", $data);
            $userInfoArray = json_decode($userInfoJson, true);
            return $userInfoArray;
        }
    }

    /**
     *   优惠券 赠送接口
     */
    public function giveCode($code_id, $open_id, $give_open_id) {

        if (!empty($code_id) && !empty($open_id) && !empty($give_open_id) && !empty($source)) {
            $data['code_id'] = $code_id;

            $data['open_id'] = $open_id;

            $data['give_open_id'] = $give_open_id;
            $data['source'] = SOURCE;

            $userInfoJson = transferData(APIURL . "/code/give_code", "post", $data);
            $userInfoArray = json_decode($userInfoJson, true);


            $error = new errorApi();

            $error->JudgeError($codeResult);

            return $userInfoArray;
        }
    }

    /**
     * 获取优惠吗
     */
    public function getUserReceviceCode($code_type = 1) {

        if (!empty($code_type)) {


            $data['code_type'] = $code_type;

            $data['source'] = SOURCE;

            $codeJson = transferData(APIURL . "/code/getReceiveCode", "post", $data);
            $codeArray = json_decode($codeJson, true);
            return $codeArray;
        }
    }

    public function getUserCode($open_id) {
        $postDate["source"] = SOURCE;
        $postDate['open_id'] = $open_id;
        $promoInfo = transferData(APIURL . "/code/getUserCode", "post", $postDate);
        $promoInfo = json_decode($promoInfo, true);
        $error = new errorApi();
        $error->JudgeError($promoInfo);
        return $promoInfo;
    }

    /**
     * 获取用户所有的优惠吗
     */
    public function get_user_code($open_id) {

        $postDate["source"] = SOURCE;

        $postDate['open_id'] = $open_id;

        $userCode = transferData(APIURL . "/code/get_user_code", "post", $postDate);

        $userCode = json_decode($userCode, true);

        $error = new errorApi();

        $error->JudgeError($userCode);

        return $userCode;
    }

}
?>

