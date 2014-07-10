<?php /* Smarty version Smarty-3.0-RC2, created on 2014-07-01 10:33:47
         compiled from "/web/www/wchatplatform/Lib//Yajie/Tpl/Company/tel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37224846453b21e0b1d7fd1-73226048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c6215269b52198bafed328738bb8bcc1fd81c52' => 
    array (
      0 => '/web/www/wchatplatform/Lib//Yajie/Tpl/Company/tel.tpl',
      1 => 1404182023,
    ),
  ),
  'nocache_hash' => '37224846453b21e0b1d7fd1-73226048',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<!DOCTYPE html>
<html> 
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
        <meta name="viewport" content="width=device-width,user-scalable=yes" />


        <!-- 最新 Bootstrap 核心 CSS 文件 -->
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">

        <!-- 可选的Bootstrap主题文件（一般不用引入） -->
        <!-- <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap-theme.min.css"> -->

        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>

        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>


        <title>联系方式</title>
        
        <style>
                
             body{
            Font-size=62.5%;
        }
        .registerWarp{
            margin: 0 auto;
            margin-top: 2em;
        }

            
        </style>
    </head>
   

    <boby>
        <div style=" width: 200px;" class='registerWarp'>

          <p style='text-align: center;'>提示</p>
          
          <p style='text-align: center;'>确定拨打电话:<?php echo $_smarty_tpl->getVariable('phone')->value;?>
</p>
          
          <button style='text-align: left'>
              
              <a href='tel:<?php echo $_smarty_tpl->getVariable('phone')->value;?>
'>确认拨打</a>
          </button>
          
            
        </div>

    </boby
</html>
