<?php

class mainhomeController extends BaseController implements mainhome {

    private $bigArray;

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");
        if (isset($_REQUEST["open_id"])) {
            $this->assign("open_id", $_REQUEST["open_id"]);
        }
    }

    public function index() {

        $weChat = new Wechat();

        $weChat->sendmessage($this->bigArray);
    }

    /**
     * 通过授权来获取到open_id 并  将open_id 输出到页面众
     */
    public function testpage() {



        $this->setDir('Home');

        $this->display('test');
    }

}

?>