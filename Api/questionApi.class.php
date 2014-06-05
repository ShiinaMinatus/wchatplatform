<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of giftApi
 *
 * @author zhaixiaoping
 */
class mainquestionApi {

    
    public function addCardRecord($data) {

        $quesionResultJson = transferData(APIURL . "/question/add_question", "post", $data);

        $quesionResultArray = json_decode($quesionResultJson, true);
        
        return $quesionResultArray;
    }

}
