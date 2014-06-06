<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of exchangeApi
 *
 * @author zhaixiaoping
 */
class mainexchangeApi {

    //put your code here


    public function __construct() {
        
    }

    /**
     * 获取用户信息
     * @param int $open_id     用户在微信公众平台的唯一标识
     * @param varchar $source  微信公众平台来源
     * @return array   返回为已经解析完成的数组
     */
    public function getUserExchangeInfo($open_id, $source = "") {

        if (!empty($open_id)) {
            $data['open_id'] = $open_id;
            $data['source'] = SOURCE;
            $userInfoJson = transferData(APIURL . "/exchange/user_exchange_record", "post", $data);
            $userInfoArray = json_decode($userInfoJson, true);

            $error = new errorApi();

            $error->JudgeError($userInfoArray);
            return $userInfoArray;
        }
    }

    public function getExchangeList($open_id) {
        $postDate["source"] = SOURCE;
        $postDate['open_id'] = $open_id;
        $exchangeList = transferData(APIURL . "/exchange/get_exchange_list?source=" . SOURCE . "&open_id=" . $this->userOpenId, "get");
        $exchangeList = json_decode($exchangeList, true);
        $error = new errorApi();
        $error->JudgeError($exchangeList);
        return $exchangeList;
    }

    public function getUserInfo($open_id) {
        $postDate["source"] = SOURCE;
        $postDate['open_id'] = $open_id;
        $userInfo = transferData(APIURL . "/user/get_info", "post", $postDate);
        $userInfo = json_decode($userInfo, TRUE);
        $error = new errorApi();
        $error->JudgeError($userInfo);
        return $userInfo;
    }

    public function getExchangeInfo($goodsId) {
        $postDate["source"] = SOURCE;
        $postDate['exchange_id'] = $goodsId;
        $exchangeItem = transferData(APIURL . "/exchange/get_exchange_info", "post", $postDate);
        $exchangeItem = json_decode($exchangeItem, true);
        $error = new errorApi();
        $error->JudgeError($exchangeItem);
        return $exchangeItem;
    }

    //兑换物品并返回兑换物品的数据 ly 2014年6月6日
    public function redeem($goodsId, $openId) {
        $postDate["source"] = SOURCE;
        $postDate['open_id'] = $openId;
        $postDate['id'] = $goodsId;
        $exchangeList = transferData(APIURL . "/exchange/redeem", "post", $postDate);
        $exchangeList = json_decode($exchangeList, TRUE);

        $error = new errorApi();

        $error->JudgeError($exchangeList);
        return $exchangeList;
    }

}
