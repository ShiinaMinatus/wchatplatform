<?php

class userApi extends mainuserApi {

    /**
     * 博卡系统  绑定手机 关联
     */
    public function bind($phone, $open_id) {


        $data['open_id'] = $open_id;

        $data['phone'] = $phone;

        $data['source'] = SOURCE;

        $arrayJson = transferData(APIURL . "/user/binding", "post", $data);

        $array = json_decode($arrayJson, true);

        $error = new errorApi();

        $error->JudgeError($array);

        return $array;
    }

    /**
     * 获取用户消费记录
     */
    public function getCardInfo($open_id, $type) {

        $data['source'] = SOURCE;

        $data['type'] = $type;

        $data['open_id'] = $open_id;

        $userJsonData = transferData(APIURL . "/user/getUserCardInfo/", "post", $data);

        $array = json_decode($userJsonData, true);

        $error = new errorApi();

        $error->JudgeError($array);

        return $array;
    }

}

?>