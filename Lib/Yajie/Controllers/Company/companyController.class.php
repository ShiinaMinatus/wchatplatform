<?php

class companyController extends maincompanycontroller {

   public function info(){
       
       
       $result = P('company')->get_info();
       
       
       $this->assign('content',$result['companyText']);
       
       $this->display();
   }

}
?>