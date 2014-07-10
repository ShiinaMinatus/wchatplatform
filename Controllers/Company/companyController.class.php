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
    
    
    public function tel(){
           
        $this->assign('phone','13524446830');
        $this->display();
    }

    

}

?>