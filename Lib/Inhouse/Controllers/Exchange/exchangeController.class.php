<?php

class exchangeController extends mainexchangeController implements inhouseexchange {

    //获取激活码页面
    function getExchangeCode() {

        $user_integration = (int) $_REQUEST['user_intergration'];

        $exchange_integration = (int) $_REQUEST['exchange_integration'];


        if ($user_integration < $exchange_integration) {

            $this->displayMessage('积分不够');

            die;
        }


        if (!empty($_REQUEST["exchangeId"])) {
            $exchangeId = $_REQUEST["exchangeId"];
            $postDate["source"] = SOURCE;
            $postDate['open_id'] = $this->userOpenId;
            $postDate['exchange_id'] = $exchangeId;
            $exchangeCode = transferData(APIURL . "/exchange/create/", "post", $postDate);
            $exchangeCode = json_decode($exchangeCode, TRUE);
            $error = new errorApi();
            $exchangeCode["code"] = strtoupper($exchangeCode["code"]);
            $error->JudgeError($exchangeCode);
            $this->assign('exchangeCode', $exchangeCode);

            $this->display('getExchangeCode');
        } else {
            $this->$this->displayMessage("发生了一些小错误，请重试", 0);
        }
    }

}

?>