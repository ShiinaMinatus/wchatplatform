<?php /* Smarty version Smarty-3.0-RC2, created on 2014-07-10 13:34:36
         compiled from "/web/www/wchatplatform/Lib//Yajie/Tpl/User/registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1523872053be25ec4d8983-73764135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70dff29f1f9e8cbd17149d3e6475025dc6ac8776' => 
    array (
      0 => '/web/www/wchatplatform/Lib//Yajie/Tpl/User/registration.tpl',
      1 => 1404970307,
    ),
  ),
  'nocache_hash' => '1523872053be25ec4d8983-73764135',
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


        <title>用户签到</title>

        <style>
            body{
                Font-size=62.5%;
                background-color: #f1f1f1;
            }

            .regWarp{

                /*border: solid 1px red;*/
            }
            .regTextStyle{
                font-weight: bold; font-size: 1.2em;
                /*          border-right: solid 1px rgb(177,96,210); 
                          padding-right: 8%;*/

            }
            .divCenter{
                width: 310px;
                margin: 0 auto;
                background-color: white;
                text-align: center;
            }
            #dateText{
                padding-top: 5px;
                font-size: 14px;
                color: #ff6803;
            }
            #hintText{
                padding-bottom: 5px;
                font-size: 11px;
                color: #353535;
            }
            #registrationButton{
                background-color: #f1f1f1;
                border: none;
                font-size: 14px;
                text-align: center;
                width: 100px;
                height: 30px;
                border-radius: 5px;
            }
            .test{
                float: left;
                border: 1px solid #f1f1f1;
            }
            .testLine{
                width: 28px;
                margin-top: 13px;
            }
            .testBigCircle{
                width: 30px;
                height: 30px;
                border-radius: 50%;
                margin-top: -1px;
            }
            .testSmallCircle{
                width: 20px;
                height: 20px;

                margin-top: 4px;
            }
            .circle{
                border-radius: 50%;
            }
            #registrationMessage{
                text-align: left;
            }
            #yesterDay{
                margin-left: 18px;
                font-size:12px;
                color:#969696; 
            }
            #firstDay{
                margin-left: 13px;
                font-size:12px;
                color:#353535; 
            }
            .noset{
                margin-left: 12px;
            }
            #secDay{
                margin-left: 3px;
                font-size:12px;
                color:#353535; 
            }
            #thrDay{
                margin-left: 2px;
                font-size:12px;
                color:#353535; 
            }
            #fourDay{
                margin-left: 3px;
                font-size:12px;
                color:#353535; 
            }
            #fiveDay{
                margin-right:14px;
                font-size:12px;
                color:#353535; 
            }
            .displayIsDisable{
                display: none;
            }
            .regisTrationIsCheck{
                background-color: #ff6803;
                border: none;
            }
        </style>
    </head>
    <body>
        <div style="height: 18px;"></div>
        <div class="divCenter">
            <div id="dateText">你已经连续签到<?php echo $_smarty_tpl->getVariable('info')->value['day'];?>
天</div>
            <div style="height: 3px;"></div>
            <div id="hintText">再坚持<?php echo $_smarty_tpl->getVariable('info')->value['overplus'];?>
天有意想不到的惊喜哦~</div>
        </div>
        <div style="height: 20px;"></div>
        <div class="divCenter">
            <div style="height: 22px;"></div>
            <div >
                <?php if ($_smarty_tpl->getVariable('info')->value['today_able']=="1"){?>

                    <button id="registrationButton" disabled="disabled" style="">
                        今日已签
                    </button>
                <?php }else{ ?>
                    <form class=""  name='form1' id='form1' method='post' role="form" action="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=user&v=registrationAction">
                        <input type='hidden' name='open_id' id='open_id' value='<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
'>
                        <button id="registrationButton"  style="background-color:#ff6803;color: white ">
                            点此签到
                        </button>
                    </form>
                <?php }?>
            </div>
            <div style="height:25px;"></div>
            <div style="text-align: right"><span id="fiveDay">有惊喜</span></div>
            <div style="height:3px;"></div>
            <div id="registrationMessage">
                <div class="testLine test" style="width: 14px;"></div>
                <?php if ($_smarty_tpl->getVariable('info')->value['day']>5){?>
                    <div class="testBigCircle circle test regisTrationIsCheck"></div>
                <?php }else{ ?>
                    <div class="testBigCircle circle test "></div>
                <?php }?>

                <?php if ($_smarty_tpl->getVariable('info')->value['day']==0){?>
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test"></div>
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test "></div>
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test"></div>
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test"></div>
                    <div class="testLine test"></div>
                    <div class="testBigCircle circle test"></div>
                    <div class="testLine test" style="width: 14px;"></div>
                <?php }elseif($_smarty_tpl->getVariable('info')->value['clearDay']==1){?>
                    <div class="testLine test"></div>
                    <?php if ($_smarty_tpl->getVariable('info')->value['today_able']==1){?>
                        <div class="testSmallCircle circle test regisTrationIsCheck"></div>
                    <?php }else{ ?>
                        <div class="testSmallCircle circle test "></div>
                    <?php }?>
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test "></div>
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test"></div>
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test"></div>
                    <div class="testLine test"></div>
                    <div class="testBigCircle circle test"></div>
                    <div class="testLine test" style="width: 14px;"></div>
                <?php }elseif($_smarty_tpl->getVariable('info')->value['clearDay']==2){?>
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test regisTrationIsCheck"></div>
                    <div class="testLine test"></div>
                    <?php if ($_smarty_tpl->getVariable('info')->value['today_able']==1){?>
                        <div class="testSmallCircle circle test regisTrationIsCheck"></div>
                    <?php }else{ ?>
                        <div class="testSmallCircle circle test "></div>
                    <?php }?>
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test"></div>
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test"></div>
                    <div class="testLine test"></div>
                    <div class="testBigCircle circle test"></div>
                    <div class="testLine test" style="width: 14px;"></div>
                <?php }elseif($_smarty_tpl->getVariable('info')->value['clearDay']==3){?>
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test regisTrationIsCheck"></div>
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test regisTrationIsCheck"></div>
                    <div class="testLine test"></div>
                    <?php if ($_smarty_tpl->getVariable('info')->value['today_able']==1){?>
                        <div class="testSmallCircle circle test regisTrationIsCheck"></div>
                    <?php }else{ ?>
                        <div class="testSmallCircle circle test "></div>
                    <?php }?>
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test"></div>
                    <div class="testLine test"></div>
                    <div class="testBigCircle circle test"></div>
                    <div class="testLine test" style="width: 14px;"></div>
                <?php }elseif($_smarty_tpl->getVariable('info')->value['clearDay']==4){?>
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test regisTrationIsCheck"></div>
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test regisTrationIsCheck"></div>
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test regisTrationIsCheck"></div>
                    <div class="testLine test"></div>
                    <?php if ($_smarty_tpl->getVariable('info')->value['today_able']==1){?>
                        <div class="testSmallCircle circle test regisTrationIsCheck"></div>
                    <?php }else{ ?>
                        <div class="testSmallCircle circle test "></div>
                    <?php }?>
                    <div class="testLine test"></div>
                    <div class="testBigCircle circle test"></div>
                    <div class="testLine test" style="width: 14px;"></div>
                <?php }elseif($_smarty_tpl->getVariable('info')->value['clearDay']==0&&$_smarty_tpl->getVariable('info')->value['day']>0){?>
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test regisTrationIsCheck"></div>
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test regisTrationIsCheck"></div>
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test regisTrationIsCheck"></div>
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test regisTrationIsCheck"></div>
                    <div class="testLine test"></div>
                    <?php if ($_smarty_tpl->getVariable('info')->value['today_able']==1){?>
                        <div class="testBigCircle circle test regisTrationIsCheck"></div>
                    <?php }else{ ?>
                        <div class="testBigCircle circle test "></div>
                    <?php }?>
                    <div class="testLine test" style="width: 14px;"></div>
                <?php }?>
                <div style="clear: both;"></div>
            </div>
            <div style="height:5px;"></div>
            <div style="text-align: left">
                <span id="yesterDay">昨天</span>
                <?php if ($_smarty_tpl->getVariable('info')->value['day']==0){?>
                    <span id="firstDay" class="noset">今日未签</span>
                    <span id="secDay" class="displayIsDisable">第二天</span>
                    <span id="thrDay" class="displayIsDisable">第三天</span>
                    <span id="fourDay" class="displayIsDisable">第四天</span>
                <?php }elseif($_smarty_tpl->getVariable('info')->value['clearDay']==1){?>
                    <?php if ($_smarty_tpl->getVariable('info')->value['today_able']==1){?>
                        <span id="firstDay" class="noset">今日已签</span>
                        <span id="secDay" class="displayIsDisable">第二天</span>
                        <span id="thrDay" class="displayIsDisable">第三天</span>
                        <span id="fourDay" class="displayIsDisable">第四天</span>
                    <?php }else{ ?>
                        <span id="firstDay" class="noset">今日未签</span>
                        <span id="secDay" class="displayIsDisable">第二天</span>
                        <span id="thrDay" class="displayIsDisable">第三天</span>
                        <span id="fourDay" class="displayIsDisable">第四天</span>
                    <?php }?>
                <?php }elseif($_smarty_tpl->getVariable('info')->value['clearDay']==2){?>
                    <?php if ($_smarty_tpl->getVariable('info')->value['today_able']==1){?>
                        <span id="firstDay" class="noset">&nbsp;&nbsp;第一天</span>
                        <span id="secDay" class="">今日已签</span>
                        <span id="thrDay" class="displayIsDisable">&nbsp;&nbsp;第三天</span>
                        <span id="fourDay" class="displayIsDisable">&nbsp;&nbsp;第四天</span>
                    <?php }else{ ?>
                        <span id="firstDay" class="noset">&nbsp;&nbsp;第一天</span>
                        <span id="secDay" class="">今日未签</span>
                        <span id="thrDay" class="displayIsDisable">&nbsp;&nbsp;第三天</span>
                        <span id="fourDay" class="displayIsDisable">&nbsp;&nbsp;第四天</span>
                    <?php }?>
                <?php }elseif($_smarty_tpl->getVariable('info')->value['clearDay']==3){?>
                    <?php if ($_smarty_tpl->getVariable('info')->value['today_able']==1){?>
                        <span id="firstDay" class="noset">&nbsp;&nbsp;第一天</span>
                        <span id="secDay" class="">&nbsp;&nbsp;第二天</span>
                        <span id="thrDay" class="">今日已签</span>
                        <span id="fourDay" class="displayIsDisable">&nbsp;&nbsp;第四天</span>
                    <?php }else{ ?>
                        <span id="firstDay" class="noset">&nbsp;&nbsp;第一天</span>
                        <span id="secDay" class="">&nbsp;&nbsp;第二天</span>
                        <span id="thrDay" class="">今日未签</span>
                        <span id="fourDay" class="displayIsDisable">&nbsp;&nbsp;第四天</span>
                    <?php }?>

                <?php }elseif($_smarty_tpl->getVariable('info')->value['clearDay']==4){?>
                    <?php if ($_smarty_tpl->getVariable('info')->value['today_able']==1){?>
                        <span id="firstDay" class="noset">&nbsp;&nbsp;第一天</span>
                        <span id="secDay" class="">&nbsp;&nbsp;第二天</span>
                        <span id="thrDay" class="">&nbsp;&nbsp;第三天</span>
                        <span id="fourDay" class="">今日已签</span>
                    <?php }else{ ?>
                        <span id="firstDay" class="noset">&nbsp;&nbsp;第一天</span>
                        <span id="secDay" class="">&nbsp;&nbsp;第二天</span>
                        <span id="thrDay" class="">&nbsp;&nbsp;第三天</span>
                        <span id="fourDay" class="">今日未签</span>
                    <?php }?>
                <?php }elseif($_smarty_tpl->getVariable('info')->value['clearDay']==0&&$_smarty_tpl->getVariable('info')->value['day']>0){?>
                    <?php if ($_smarty_tpl->getVariable('info')->value['today_able']==1){?>
                        <span id="firstDay" class="noset">&nbsp;&nbsp;第一天</span>
                        <span id="secDay" class="">&nbsp;&nbsp;第二天</span>
                        <span id="thrDay" class="">&nbsp;&nbsp;第三天</span>
                        <span id="fourDay" class="">&nbsp;&nbsp;第四天</span>
                    <?php }else{ ?>
                        <span id="firstDay" class="noset">&nbsp;&nbsp;第一天</span>
                        <span id="secDay" class="">&nbsp;&nbsp;第二天</span>
                        <span id="thrDay" class="">&nbsp;&nbsp;第三天</span>
                        <span id="fourDay" class="">&nbsp;&nbsp;第四天</span>
                    <?php }?>
                <?php }?>
            </div>
            <div style="height:25px;"></div>
        </div>
        <div class="">
        </div>

    </body>



</html>
