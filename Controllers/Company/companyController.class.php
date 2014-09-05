<?php

class maincompanycontroller extends BaseController implements maincompany {

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");


        if (!empty($_REQUEST['open_id'])) {

            $this->userOpenId = $_REQUEST['open_id'];
        } else {
            $this->userOpenId = 'oIUY-tzD2rRdkycAc5ceQjtI1-ok';
        }


        $this->assign('open_id', $this->userOpenId);
    }

    public function tel() {

        $this->assign('phone', '13524446830');
        $this->display();
    }

    public function storesAndAddress() {
        $result = p('official')->info(9);
        $cardStatement = $result['official_text'];

        if ($cardStatement == "") {
            $cardStatement = "<div style='text-align: center;'>暂无介绍</div>";
        }
        $this->assign('context', $cardStatement);
        $this->display();
    }

}

?>