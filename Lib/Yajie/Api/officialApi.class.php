<?php

class officialApi {

    public function info($id) {

     
        $data['source'] = SOURCE;

        $data['id'] = $id;

        $arrayJson = transferData(APIURL . "/company/get_official_info", "post", $data);

        $array = json_decode($arrayJson, true);


        $error = new errorApi();

        $error->JudgeError($array);

        return $array;
    }

}

?>