<?php

class companyController extends maincompanycontroller {

   public function info(){
       
       
       $result = P('company')->get_info();
       
       
       $this->assign('content',$result['companyText']);
       
       $this->display();
   }


   public  function official(){


   	 if(!empty($_REQUEST['id'])){


   	 	$result = P('official')->info($_REQUEST['id']);

   	  $this->assign('info',$result);
       
       $this->display();

   	 }

   }

}
?>