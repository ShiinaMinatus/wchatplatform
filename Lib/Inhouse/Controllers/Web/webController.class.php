<?php

class webController extends BaseController {

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");

        if (!empty($_REQUEST['open_id'])) {

            $this->userOpenId = $_REQUEST['open_id'];
        }

        $this->assign('open_id', $this->userOpenId);
    }

    /**
     * 发型师介绍
     */
    public function stylistInfo() {

        //$this->able_register();

        $this->display();
    }

    public function pricedList() {

        $this->able_register();

        $this->display();
    }

    public function storeInformation() {
        
        //$this->able_register();

        $this->display();
    }

}

?>