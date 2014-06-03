<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-14 18:08:41
         compiled from "/web/www/yajie_weixin_crm/wchatplatform/Tpl/Inhouse/Public/message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1672899337537340a94aad56-37871606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfa96d176967155928b514a57b8b96c4f8200f8f' => 
    array (
      0 => '/web/www/yajie_weixin_crm/wchatplatform/Tpl/Inhouse/Public/message.tpl',
      1 => 1400062118,
    ),
  ),
  'nocache_hash' => '1672899337537340a94aad56-37871606',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
    <head>
        <title>提示</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
        <meta name="viewport" content="width=device-width,user-scalable=yes" />
        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">

       
        <style>
            body{
                background-image: url('<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/beijing.png');
            }
            .registerWarp{
                margin: 0 auto;
                margin-top: 2em;
                width: 90%;
                text-align: center;
            }
            .errorMessage{
                /*border: solid 1px red;*/
                text-align: center;
                color: rgb(71,71,71);
                font-size: 1.2em;
                height: 3em;
                line-height: 4em;
            }
            .errorImg{
               /* border: solid 1px red;*/
                text-align: center;
            }
            .errorImg img{
            max-width:100%;
            height:auto;   
            width: 25%;
            }
        </style>
    </head>
    <body>
        <div style=" height: 5em;"></div>
        <div class="errorImg">
            <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/error.png">
        </div>
        <div class="errorMessage"><?php echo $_smarty_tpl->getVariable('msg')->value;?>
</div>
        <div style=" height: 3em;"></div>
    </body>
    

