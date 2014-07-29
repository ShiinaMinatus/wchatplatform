<?php

class userController extends mainuserController {

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");

        if (!empty($_REQUEST['open_id'])) {

            $this->userOpenId = $_REQUEST['open_id'];
        }
        
        $this->userOpenId = 'oIUY-tzD2rRdkycAc5ceQjtI1-ok';

        $this->assign('open_id', $this->userOpenId);
    }

    

}

?>