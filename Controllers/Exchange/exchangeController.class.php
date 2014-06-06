<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of exchangeController
 *
 * @author zhaixiaoping
 */
class mainexchangeController extends BaseController implements mainexchange {

    //put your code here

    public function __construct() {


        header("Content-type:text/html;charset=utf-8");

        if (!empty($_REQUEST['open_id'])) {

            $this->userOpenId = $_REQUEST['open_id'];
        } else {
            //$this->userOpenId = 'ocpOot-COx7UruiqEfag_Lny7dlc';         
        }

        $this->assign('open_id', $this->userOpenId);
    }

    //兑换列表
    public function getExchangeList() {


        $this->able_register();
        //$this->userOpenId = $_REQUEST['open_id'];
        $exchangeList = P('exchange')->getExchangeList($this->userOpenId);
        $userInfo = P('exchange')->getUserInfo($this->userOpenId);

        $weixinUserInfo = $userInfo['weixin_user'];
        $localUserInfo = $userInfo['user'];
        $this->assign("WebImageUrl", WebImageUrl);
        $this->assign("exchangeList", $exchangeList);
        $this->assign("localUserInfo", $localUserInfo);
        $this->assign("weixinUserInfo", $weixinUserInfo);
        $this->display("getExchangeList");
    }

    //兑换物品详情
    public function exchangeGoods() {
        // $this->userOpenId = $_REQUEST['open_id'];
        $exchangeItem = transferData(APIURL . "/exchange/get_exchange_info?exchange_id=" . $_GET['goodsId'] . '&source=' . SOURCE, "get");
        $exchangeItem = json_decode($exchangeItem, true);

        $error = new errorApi();

        $error->JudgeError($exchangeItem);

        $this->assign("WebImageUrl", WebImageUrl . "small/");
        $this->assign("exchangeInfo", $exchangeItem["exchange_info"]);
        $this->display("exchangeGoods");
    }

    //兑换物品
    public function changeGoods() {

//$this->userOpenId = $_REQUEST['open_id'];
        if (isset($_GET['goodsId'])) {
            $postDate["source"] = SOURCE;
            $postDate['open_id'] = $this->userOpenId;
            $goodsId = $_GET['goodsId'];
            $exchangeItem = P('exchange')->getExchangeInfo($goodsId);            //获取兑换物品详情
            if ($exchangeItem['exchange_info']["exchange_type"] == "1") {
                $userInfo = P('user')->getUserInfo($this->userOpenId);
                if ($userInfo['user']['province_id'] == "0") {
                    $this->assign("userMessage", $userInfo['user']);
                    $this->locationCheck(); //填写信息              
                } else {
                    //显示填写地址页面     
                    $userData['street'] = $userInfo['user']['street'];
                    $userData['address_phone'] = $userInfo['user']['address_phone'];
                    $userData['real_name'] = $userInfo['user']['real_name'];
                    $userData['area_id'] = $userInfo['user']['area_id'];
                    $userData['city_id'] = $userInfo['user']['city_id'];
                    $userData['province_id'] = $userInfo['user']['province_id'];
                    $getProvince = P('area')->getJsonArea();
                    $getProvince = json_decode($getProvince, true);

                    $error = new errorApi();

                    $error->JudgeError($getProvince);

                    array_pop($getProvince);
                    $getTown = $this->getAreaMessage($userData['province_id']);
                    $getTown = json_decode($getTown, true);
                    $getArea = $this->getAreaMessage($userData['city_id']);
                    $getArea = json_decode($getArea, true);

                    $this->assign("provinceValue", $getProvince);
                    $this->assign("townValue", $getTown);
                    $this->assign("areaValue", $getArea);
                    $goodsId = $_GET['goodsId'];
                    $this->assign("userMessage", $userData);
                    $this->assign("goodsId", $goodsId);
                    $this->display("locationCheck");
                }
            } else {
                $this->changeGoodsResult();
            }
        }
    }

    public function locationCheck() {
        $getProvince = P('area')->getJsonArea();
        $getProvince = json_decode($getProvince, true);

        $error = new errorApi();

        $error->JudgeError($getProvince);

        array_pop($getProvince);
        $getTown = $this->getAreaMessage($getProvince[0]['area_id']);
        $getTown = json_decode($getTown, true);
        $getArea = $this->getAreaMessage($getTown[0]['area_id']);
        $getArea = json_decode($getArea, true);
        $this->assign("provinceValue", $getProvince);
        $this->assign("townValue", $getTown);
        $this->assign("areaValue", $getArea);
        $this->assign("goodsId", $_GET['goodsId']);
        $this->display("locationCheck");
    }

    public function getAreaMessage($areaId = 0) {
        $requestFlag = true;
        if (isset($_REQUEST["areaId"])) {
            $areaId = $_REQUEST["areaId"];
            $requestFlag = FALSE;
        } else {
            $areaId = $areaId;
        }


        $getArea = P('area')->getJsonArea($areaId);
        if ($requestFlag) {
            return $getArea;
        } else {
            header("Content-type: application/json");
            echo $getArea;
        }
    }

    public function updateUserLocation() {
        if (isset($_POST["gNumber"])) {
            if (ctype_digit($_POST["gNumber"])) {
                $updateUserLocation = P('user')->updateUserAddress($_POST, $this->userOpenId);
                if ($updateUserLocation["res"] == 1) {
                    $_GET['goodsId'] = $_POST["gNumber"];
                    $this->changeGoodsResult();
                } else {

                    $this->displayMessage('提交用户信息出错');

                    die;
                }
            } else {

                $this->displayMessage('参数错误');

                die;
            }
        } else {

            $this->displayMessage('错误');

            die;
        }
    }

//处理兑换结果
    public function changeGoodsResult() {



        if (isset($_GET['goodsId'])) {

            $goodsId = $_GET['goodsId'];
            $exchangeList = P('exchange')->redeem($goodsId, $this->userOpenId);
            $userIntegration = $exchangeList['user_integration']['user_integration'];
            $userChangeInfo = $exchangeList['exchange_info'];
            $this->assign("integration", $userIntegration);
            $this->assign("changeInfo", $userChangeInfo);
            $this->display("changeScuessList");
        } else {

            $this->displayMessage('错误的进入方式');
        }
    }

    public function changeScuessList() {
        $this->display("changeScuessList");
    }

    /*
     * 获取用户兑换记录
     */

    public function getUserExchangeRecord() {


        if (!empty($this->userOpenId)) {

            $exchangeApi = new exchangeApi();

            $exchangeReocrd = $exchangeApi->getUserExchangeInfo($this->userOpenId);
            $this->assign("WebImageUrl", WebImageUrl);

            $this->assign('exchangeList', $exchangeReocrd);

            $this->display('userExchangeRecord');
        } else {

            $this->displayMessage('open_id未获取到 请重新从微信公众平台登录');
        }
    }

}

?>