<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of orderApi
 *
 * @author Administrator
 */
class mainorderApi {

    public function __construct() {
        
    }

    public function get_order($openId) {
        $userOrder["source"] = SOURCE;
        $userOrder["open_id"] = $openId;

        $orderItem = transferData(APIURL . "/order/get_order", "post", $userOrder);
        $orderItem = json_decode($orderItem, true);
        $error = new errorApi();
        $error->JudgeError($orderItem);
        return $orderItem;
    }

    public function getMerchandise() {
        $userOrder["source"] = SOURCE;
        $selectReturnVal = transferData(APIURL . "/order/get_merchandise", "post", $userOrder);
        $selectVal = json_decode($selectReturnVal, true);
        $error = new errorApi();
        $error->JudgeError($selectVal);
        return $selectVal;
    }

//获取预约商品信息
    public function getMerchandiseInfo($merchandiseId) {
        $merchandiseDate['source'] = SOURCE;
        $merchandiseDate['merchandise_id'] = $merchandiseId;
        $merchandise = transferData(APIURL . "/order/get_merchandise_info", "post", $merchandiseDate);
        $merchandise = json_decode($merchandise, TRUE);

        $error = new errorApi();

        $error->JudgeError($merchandise);
        return $merchandise;
    }

    public function reviseOrder($returnVal, $postTime, $orderCode, $openId) {
        $postDate["source"] = SOURCE;
        $postDate["open_id"] = $openId;
        $postDate["merchandise_id"] = $returnVal['orderMerchandise'];
        $postDate['order_number'] = $returnVal["porpleCountSubmit"];
        $postDate["appointment_time"] = $postTime;
        $postDate["order_code"] = $orderCode;
        $postDate["appointment_object"] = $returnVal['orderObject'];
        $reviseOrder = transferData(APIURL . "/order/revise_order", "post", $postDate);
        $orderChangeIsScuess = json_decode($reviseOrder, TRUE);
        $error = new errorApi();

        $error->JudgeError($orderChangeIsScuess);
        return $orderChangeIsScuess;
    }

    public function orderAdd($returnVal, $postTime, $openId) {
        $postDate["source"] = SOURCE;
        $postDate["open_id"] = $openId;
        $postDate["merchandise_id"] = $returnVal['orderMerchandise'];
        $postDate['order_number'] = $returnVal["porpleCountSubmit"];
        $postDate["appointment_time"] = $postTime;
        $postDate["appointment_object"] = $returnVal['orderObject'];
        $userJsonData = transferData(APIURL . "/order/add", "post", $postDate);
        $thisUserData = json_decode($userJsonData, TRUE);
        $error = new errorApi();

        $error->JudgeError($thisUserData);
        return $thisUserData;
    }

}

?>
