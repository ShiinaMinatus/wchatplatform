<?php /* Smarty version Smarty-3.0-RC2, created on 2014-06-30 18:09:51
         compiled from "/web/www/wchatplatform/Lib//Yajie/Tpl/Home/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34831700453b1376f3c1d69-22692855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8c8e2bd1bce1af11cb659105d8b5851b9f8f307' => 
    array (
      0 => '/web/www/wchatplatform/Lib//Yajie/Tpl/Home/index.tpl',
      1 => 1404122987,
    ),
  ),
  'nocache_hash' => '34831700453b1376f3c1d69-22692855',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta content="initial-scale=1.0; maximum-scale=1.0; user-scalable=no;" name="viewport">
        <meta name="viewport" content="width=device-width,user-scalable=yes" />
        <title></title>
        <style>
            *{
                margin: 0;
                padding: 0;
            }
            
            a:link {
text-decoration: none;
color: black;
}
a:visited {
text-decoration: none;
color: black;
}
a:hover {
text-decoration: none;
color: black;
}
a:active {
text-decoration: none;

}
            #slides li {
                display: block;
                width: 100%;
                height: 100%;
                list-style: none;
                padding: 0;
                margin: 0;
                position: absolute;
            }
            .silid{
                display: block;
                width: 100%;
                list-style: none;
                position:relative;
                padding: 0;
                margin: 0;
            }

            #pagination{

                right:5%;
                display:block;
                list-style:none;
                position:absolute;

                bottom: 5%;
                z-index:500;
                padding:5px 15px 5px 0;
                margin:0
            }
            #pagination li{
                display:block;
                list-style:none;
                width:10px;
                height:10px;
                float:left;
                margin-left:15px;
                border-radius:5px;
                background:green;
            }
            #pagination li a {
                display:block;
                width:100%;
                height:100%;
                padding:0;
                margin:0;
                text-indent:-9999px;
            }




            #pagination li.current,#pagination_ li.current {
                /* background:#0092CE*/
                background: black;
            }
            #slides li image{
                width: 100%;
                height: 100%;
            }
            #titleTop{
                text-align: center;
                height: 60px;
                line-height: 60px;
                background-color: purple;
                color: white;
            }
            .listBlock{
                float: left;
                height:45px;
                line-height: 45px;
                position:relative;
            }
            .listText{
                width: 75%;
                text-align: center;
                color: white;
            }
            .listIcon{
                top:8px;
                left:5px;
                height: 35px;
                
            }
            .listBack{
                top:13px;
                height: 25px;
                display: none;
            }
            .silid li{
                background-color: purple;
                border-bottom: 1px solid grey;
            }
            .silid li:hover{
                cursor: pointer;
            }
        </style>
    </head>
    <body style="">
        <div id="titleTop">Mr.D</div>
        <div id="slides_div"  style="background-color: white; width: 100%;height: 205px; position: relative;">
            <ul id="slides" style="z-index: 99; margin: 0; padding: 0;">
                <li class="imgResize" style=" cursor: pointer;  z-index: 900;background-position: 50% 0%; background-repeat: no-repeat;" onclick=''>
                    <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/34.jpg" style="width: 100%; height: 100%;" />
                </li>
                <li class="imgResize" style=" cursor: pointer;  z-index: 900;background-position: 50% 0%; background-repeat: no-repeat;" onclick=''>
                    <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/47.jpg" style="width: 100%; height: 100%;" />
                </li>
                <li class="imgResize" style=" cursor: pointer;  z-index: 900;background-position: 50% 0%; background-repeat: no-repeat;" onclick=''>
                    <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/79.jpg" style="width: 100%; height: 100%;" />
                </li>
            </ul>
        </div>
        <div id="menuList">
            <ul class="silid">
                <li>
                    <div class="listBlock listIcon">
                        <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon.png"/>
                    </div>
                    <div class="listBlock listText" style=""><a href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=company&v=info'>企业介绍</a></div>
                    <div class="listBlock listBack">
                        <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/buttom.png"/>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="listBlock listIcon">
                        <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon.png"/>
                    </div>
                    <div class="listBlock listText" style=""><a href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=company&v=tel'>一键拨号</a></div>
                    <div class="listBlock listBack">
                        <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/buttom.png"/>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="listBlock listIcon">
                        <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon.png"/>
                    </div>
                    <div class="listBlock listText" style=""><a href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=game&v=gameDa&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
'>微转盘</a></div>
                    <div class="listBlock listBack">
                        <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/buttom.png"/>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="listBlock listIcon">
                        <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon.png"/>
                    </div>
                    <div class="listBlock listText" style=""><a href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=game&v=activity&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
'>微活动</a></div>
                    <div class="listBlock listBack">
                        <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/buttom.png"/>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="listBlock listIcon">
                        <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon.png"/>
                    </div>
                    <div class="listBlock listText" style="" ><a href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=game&v=Questionnaire&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
'>微问卷</a></div>
                    <div class="listBlock listBack">
                        <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/buttom.png"/>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="listBlock listIcon">
                        <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon.png"/>
                    </div>
                    <div class="listBlock listText" style=""><a href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=user&v=registration&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
'>微签到</a></div>
                    <div class="listBlock listBack">
                        <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/buttom.png"/>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li style="border-bottom: none">
                    <div class="listBlock listIcon">
                        <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon.png"/>
                    </div>
                    <div class="listBlock listText" style=""><a href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=user&v=card'>会员卡</a></div>
                    <div class="listBlock listBack">
                        <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/buttom.png"/>
                    </div>
                    <div style="clear: both"></div>
                </li>
            </ul>
        </div>
    </body>
    <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/lanrenzhijia.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/jQuery.autoIMG.js"></script>
    <script>
        $(".imgResize").css("width",$("body").width());
        $(".imgResize").autoIMG();
        $(window).resize(function(){
            $(".imgResize").css("width",$("body").width());
            $(".imgResize").autoIMG();
        });
        $(".silid li").hover(function(){
            $(this).find(".listBack").css("display","block");
        }, function(){
            $(this).find(".listBack").css("display","none");
        })
    </script>
</html>