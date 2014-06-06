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
class exchangeApi extends mainexchangeApi {

    //put your code here


    public function __construct() {
        
    }

    public function reviseRecordState($goodsId) {
        $postDate["source"] = SOURCE;
        $postDate["id"] = $goodsId;
        $exchangeData = transferData(APIURL . "/exchange/revise_record_state", "post", $postDate);
        $exchangeData = json_decode($exchangeData, TRUE);
        $error = new errorApi();
        $error->JudgeError($exchangeData);
        return $exchangeData;
    }

}

?>