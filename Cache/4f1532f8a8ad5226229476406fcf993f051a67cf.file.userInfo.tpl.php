<?php /* Smarty version Smarty-3.0-RC2, created on 2014-07-16 15:29:15
         compiled from "/web/www/wchatplatform/Lib//Yajie/Tpl/User/userInfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184961269053c629cbbe0c11-38838714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f1532f8a8ad5226229476406fcf993f051a67cf' => 
    array (
      0 => '/web/www/wchatplatform/Lib//Yajie/Tpl/User/userInfo.tpl',
      1 => 1405495754,
    ),
  ),
  'nocache_hash' => '184961269053c629cbbe0c11-38838714',
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
        <title>微会员</title>
        <style>
            *{
                margin: 0;
                padding: 0;
                font-size: 14px;
            }
            a:link{
                color: #a1a1a1;
            }
            a:visited{
                color: #a1a1a1;
            }
            #mainDiv{
                width: 95%;
                margin: 0 auto;
                position: relative;
                background-color: #f1f1f1;
            }
            #cardList{
                width: 224px;
                height: 125px;
                background: url("<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/memberPic/huiYuanKa.png");
                margin: 0 auto;
                position: relative;
                top: -35px;   
                border-radius: 5px;
            }
            #sawtooth_border{
                background-color: red;
                height: 2px;
                width: 95%;
                margin: 0 auto;
            }
            #context{
                margin-top: -15px;
                width: 100%;
            }
            .printText{
                font-size: 13px;
                color: #a1a1a1;
            }
            .listBorder{
                border: 1px solid #646464;
                border-radius: 5px;
                width: 95%;
                margin: 0 auto;
            }
            .listItem{
                padding-left: 10px;
                height: 55px;
                line-height: 55px;

            }
            .line_bottom{
                border-bottom: 1px solid #646464
            }
            .item_pic_position{
                width:30px;height: 30px;margin-top: 13px;
            }
            .item_tag_position{
                float: right;margin-right: 5px;text-align: right;
            }
            .item_note_position{
                color:#b1B1b1;font-size: 12px; float: right;margin-right: 5px;height: 15px;
            }
            .item_menu_double_line{
                display: inline-block;
                line-height: 20px;
                padding-top: 9px;
            }
            .clear_float{
                float: none;
            }
        </style>
    </head>
    <body style="background-color: #9293bb">
        <div style="height: 55px;"></div>
<!--        <div id="sawtooth_border"></div>-->
        <div id="mainDiv">
            <div id="cardList" style="">

            </div>

            <div id="context">
                <p style="text-align: center;">
                    <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/memberPic/noPic.png" align="top" style="width:25px;height: 25px;">
                    <span class="printText">使用时向服务员出示此卡</span>
                </p>
                <div style="height: 20px;"></div>
                <div id="money_message" class="listBorder">
                    <div class="listItem line_bottom">
                        <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/memberPic/yu_e.png" align="top" class="item_pic_position">
                        <span class="">预存余额：0元</span>
                        <div class="item_tag_position">
                            <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/memberPic/jianTou.png" >
                        </div>
                    </div>
                    <div class="listItem">
                        <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/memberPic/jiFen.png" align="top" class="item_pic_position">
                        <span class="">积分：212分</span>
                        <div class="item_tag_position">
                            <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/memberPic/jianTou.png" >
                        </div>
                    </div>
                </div>
                <div style="height: 20px;"></div>
                <div id="privilege_message" class="listBorder">
                    <div class="listItem line_bottom">
                        <span style="font-weight: bold">上海市特权</span>
                        <div class="item_tag_position" style="margin-top: 1px;">
                            <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/memberPic/jianTou.png" >
                        </div>
                        <div class="item_note_position">其他城市特权</div>

                        <div style="clear: both"></div>
                    </div>
                    <div class="listItem line_bottom">
                        <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/memberPic/caiPinJia.png" align="top" class="item_pic_position">
                        <span class="">会员专享会员菜品价</span>
                        <div class="item_tag_position">
                            <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/memberPic/jianTou.png" >
                        </div>
                    </div>
                    <div class="listItem line_bottom">
                        <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/memberPic/jiFenTeQuan.png" align="top" class="item_pic_position">
                        <span class="item_menu_double_line">会员专享10％积分特权<br>
                            <span class="item_note_position clear_float">仅适用两家分店</span>
                        </span>
                        <div class="item_tag_position">
                            <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/memberPic/xiangXia.png" >
                        </div>
                    </div>
                    <div class="listItem">
                        <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/memberPic/manJiuSong.png" align="top" class="item_pic_position">
                        <span class="item_menu_double_line">预存1000元送100元<br>
                            <span class="item_note_position clear_float">仅适用两家分店</span>
                        </span>
                        <div class="item_tag_position">
                            <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/memberPic/xiangXia.png" >
                        </div>
                    </div>
                </div>
                <div style="height: 20px;"></div>
                <div id="another_message" class="listBorder">
                    <div class="listItem line_bottom">
                        <span class="">报手机号就能用卡啦！</span>
                        <div class="item_tag_position" style="margin-top: 1px;">
                            <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/memberPic/jianTou.png" >
                        </div>
                    </div>
                    <div class="listItem ">
                        <span class="">wifi下点开，你将不敢想象这只是家串店</span>
                        <div class="item_tag_position" style="margin-top: 1px;">
                            <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/memberPic/jianTou.png" >
                        </div>
                    </div>
                </div>
                <div style="height: 20px;"></div>
                <div id="card_and_shop_message" class="listBorder">
                    <div class="listItem line_bottom" onclick='window.location.href = "<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=user&v=userJf&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
"'>
                        <span class="" >交易记录</span>
                        <div class="item_tag_position" style="margin-top: 1px;">
                            <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/memberPic/jianTou.png" >
                        </div>
                    </div>
                    <div class="listItem line_bottom">
                        <span class="">会员卡说明</span>
                        <div class="item_tag_position" style="margin-top: 1px;">
                            <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/memberPic/jianTou.png" >
                        </div>
                    </div>
                    <div class="listItem ">
                        <span class="">适用门店以及地址</span>
                        <div class="item_tag_position" style="margin-top: 1px;">
                            <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/memberPic/jianTou.png" >
                        </div>
                    </div>
                </div>
                <div style="height: 20px;"></div>
                <a href="#dasda"><div class="printText" style="text-align: center;">使用会员卡遇到了问题？</div></a>
                <div style="height: 45px;"></div>
            </div>
        </div>
    </body>
</html>
