<?php

class stylistApi {

    public function get_list() {

     
        $data['source'] = SOURCE;

        $arrayJson = transferData(APIURL . "/stylist/get_list", "post", $data);

        $array = json_decode($arrayJson, true);


        $error = new errorApi();

        $error->JudgeError($array);

        return $array;
    }

}

?>