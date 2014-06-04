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
class exchangeController extends mainexchangeController  implements jiantangexchange{

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
        $postDate["source"] = SOURCE;
        $postDate['open_id'] = $this->userOpenId;
        //$this->userOpenId = $_REQUEST['open_id'];
        $groupBy = isset($_GET["groupBy"]) ? $_GET["groupBy"] : "";
        if ($groupBy == "" || $groupBy == "300point") {
            $postDate["start_point"] = 0;
            $postDate["end_point"] = 300;
        } else if ($groupBy == "500point") {
            $postDate["start_point"] = 301;
            $postDate["end_point"] = 500;
        } else if ($groupBy == "1000point") {
            $postDate["start_point"] = 501;
            $postDate["end_point"] = 1000;
        } else {
            $postDate["start_point"] = 0;
            $postDate["end_point"] = 300;
        }
        $exchangeList = transferData(APIURL . "/exchange/get_exchange_list", "post", $postDate);
        $exchangeList = json_decode($exchangeList, true);
        $userInfo = transferData(APIURL . "/user/get_info", "post", $postDate);
        $userInfo = json_decode($userInfo, TRUE);
        $weixinUserInfo = $userInfo['weixin_user'];
        $localUserInfo = $userInfo['user'];
        $error = new errorApi();
        $error->JudgeError($exchangeList);
        $error->JudgeError($userInfo);
        $this->assign("WebImageUrl", WebImageUrl);
        $this->assign("exchangeList", $exchangeList);
        $this->assign("localUserInfo", $localUserInfo);
        $this->assign("weixinUserInfo", $weixinUserInfo);
        $this->assign("groupBy", $groupBy);
        $this->display("getExchangeList");
    }    
    //用户收货
    public function changeGoodsState() {
        if (isset($_GET['goodsId'])) {
            $postDate["source"] = SOURCE;
            $postDate["id"] = $_GET['goodsId'];
            $exchangeData = transferData(APIURL . "/exchange/revise_record_state", "post", $postDate);
            $exchangeData = json_decode($exchangeData, TRUE);
            if($exchangeData['res']==1){
                $this->getUserExchangeRecord();
            }else{
                $this->displayMessage("网络请求失败或者您已经确认收货");
            }
        }
    }

}
