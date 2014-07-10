<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of areaApi
 *
 * @author Administrator
 */
class mainareaApi {

    public function __construct() {
        
    }

//获取json 地址信息
    public function getJsonArea($areaCode = 0) {
        $postData['area_id'] = $areaCode;
        $postData['source'] = SOURCE;
        $getArea = transferData(APIURL . "/area/get_area", "post", $postData);
        return $getArea;
    }

}

?>
