<?php /* Smarty version Smarty-3.0-RC2, created on 2014-06-05 13:05:54
         compiled from "/web/www/wchatplatform/Lib//Inhouse/Tpl/Web/stylistInfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1186964649538ffab251a316-64517405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '637e938370afd1f4c37654a18f76b66491ca90be' => 
    array (
      0 => '/web/www/wchatplatform/Lib//Inhouse/Tpl/Web/stylistInfo.tpl',
      1 => 1401944753,
    ),
  ),
  'nocache_hash' => '1186964649538ffab251a316-64517405',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
    <head>
        <meta charset="utf-8">
        <title>发型师</title>
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>


        <style>
            body{
                Font-size=62.5%;
            }
            .round_photo{
                width:100%;
                height: auto;

                border:1px solid #ddddde;
                -moz-border-radius:10%;
                -webkit-border-radius: 10%;
                border-radius:10%;

            }
            .siteClass{

                color: rgb(128,128,128);
            } 
            .graph{  

                width: 0;     height: 0;     border-bottom: 38px solid rgb(70,140,200);  

                border-left: 41px solid transparent;

            }  
            .expenseBox{
                min-height:50px;
                width: 90%;
                float: left;
                margin-top: 20px; 
                background-color: rgb(255,255,247);
                border-radius: 5px; 
            }
            .text-padding{
                padding-left: 5px;
                padding-right: 5px;
            }
            .item-postion{
                margin-top: 10px;
            }
            .expenseTitle{
                border-bottom: 1px solid #e7e7e7;height: 40px; line-height: 40px; 
            }
            .col-a{
                /*                显示尖角*/
                position: relative;
                background: #E7E7E7;
                top: -40px;
                height: auto;
                left: -14px;
                color: white;
                font-size: 17px; 
                width: 5px;
            }
            .col-line-first{
                /*左侧线条上半部分*/
                width: 2px;
                margin-right: 10px;
                height: 38.4px;
                background-color: gray;
            }
            .col-line-ball{
                /*线条中的球*/
                width: 6px; 
                margin-right: 10px;
                height:6px;
                margin-left: -2px;
                background-color: gray;
                border-radius: 50%
            }
            .col-line-seconed{
                /*左侧线条下半部分*/
                width: 2px;
                margin-right: 10px;
                height: 62.4px;
                background-color: gray;
            }


            .message-box {
                position:relative;
                width:177px;
                height:160px;
                background:white;


                color:black;

                float: left;
                font-size: 14px;

                z-index: 999;

            }
            .triangle-character {
                position:absolute;
                left:-9px;

                top: 12px;
                overflow:hidden;
                width:26px;
                height:26px;
                font:normal 26px "宋体"; // 字符的大小和字体也有关系哦！
            }
            .tc-border {
                bottom:-13px;
                color:white;
            }
            .tc-background {
                bottom:-12px;
                color:white;
            }

        </style>
    </head>
    <body style="background-color: #E7E7E7;margin: 0 auto; padding: 0; width: 320px; ">
        
        <?php  $_smarty_tpl->tpl_vars['lists'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['lists']->key => $_smarty_tpl->tpl_vars['lists']->value){
?>
            
          
           <div style='height: 13px;clear: both; '>&nbsp;</div>
           <div style='position: relative; border: 1px solid #dddddd;clear: both;  '>
         
            <div style='background-color: gray; float: left; width: 141px; height: 161px;'>
                
                <img src="<?php echo $_smarty_tpl->getVariable('WebUploadUrl')->value;?>
<?php echo $_smarty_tpl->getVariable('source')->value;?>
/<?php echo $_smarty_tpl->tpl_vars['lists']->value['stylist_image'];?>
" style='width: 141px; height: 161px;'>
            </div>
            <div class="message-box" style='float: left;'>
                <div style=' width: 93%; margin:0 auto; padding-top: 10px;position: relative; z-index: 999;'>

                    <div style='color:#2996cc; font-size: 14px; font-weight: bold;'><?php echo $_smarty_tpl->tpl_vars['lists']->value['stylist_name'];?>
</div>

                    <div style='height:10px;'>&nbsp;</div>
                    <div style='width:100%; height: 60px;'>
                        <span style='display:inline-block; word-break:break-all; font-size: 14px; color: #4b4b4b'>个人介绍:&nbsp;&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['lists']->value['stylist_info'];?>
</span></span>


                    </div>

                    <div style='height:10px;'>&nbsp;</div>
                    <div>
                        <span style='display:inline-block; word-break:break-all;'>个人特长:&nbsp;&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['lists']->value['specialty'];?>
</span></span>
                    </div>

                </div>
                <div class="triangle-character tc-border">◆</div>
                <div class="triangle-character tc-background">◆</div>
            </div>
           

        </div>
                    
         
                   
            
         <?php }} ?>
        
 

    </body>

</html>