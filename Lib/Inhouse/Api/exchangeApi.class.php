<?php

class exchangeApi extends mainexchangeApi {

    /**
     * inhouse 兑换 发送验证码
     * @param varchar $open_id  用户在微信公众平台中的唯一标示
     * @param int $exchage_id    兑换id
     */
    public function getExchangeCode($open_id, $exchage_id) {

        if (!empty($open_id) && !empty($exchage_id)) {

            $postDate["source"] = SOURCE;
            $postDate['open_id'] = $open_id;

            $postDate['exchange_id'] = $exchage_id;

            $result_json = transferData(APIURL . "/exchange/create/", "post", $postDate);

            $result = json_decode($result_json, TRUE);

            $exchangeCode["code"] = strtoupper($exchangeCode["code"]);
            
            P('error')->JudgeError($exchangeCode);
            
            
            return $result;
        }
    }

}

?>