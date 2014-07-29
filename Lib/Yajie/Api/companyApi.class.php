<?php

class companyApi {

    public function get_info() {

     
        $data['source'] = SOURCE;

        $arrayJson = transferData(APIURL . "/company/get_info", "post", $data);

        $array = json_decode($arrayJson, true);


        $error = new errorApi();

        $error->JudgeError($array);

        return $array;
    }

}

?>