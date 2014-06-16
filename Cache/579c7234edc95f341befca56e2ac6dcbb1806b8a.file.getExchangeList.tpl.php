<?php /* Smarty version Smarty-3.0-RC2, created on 2014-06-16 14:35:33
         compiled from "/web/www/wchatplatform/Lib//Jiantang/Tpl/Exchange/getExchangeList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146580782539e9035e753c7-08351653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '579c7234edc95f341befca56e2ac6dcbb1806b8a' => 
    array (
      0 => '/web/www/wchatplatform/Lib//Jiantang/Tpl/Exchange/getExchangeList.tpl',
      1 => 1401933598,
    ),
  ),
  'nocache_hash' => '146580782539e9035e753c7-08351653',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
    <head>
        <title>兑换列表</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
        <meta name="viewport" content="width=device-width,user-scalable=yes" />
        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/getExchangeList.css"/>
    </head>
    <body style='background-color: rgb(243,237,227);'>

        <!--        <div style='  width: 100%; background-color: rgb(255,255,247);position: relative;'>
        
                    <div style='height: 0.2em;width: 100%;'>&nbsp;</div>-->

        <!--
                    <div style=' width: 18%;'>
                        <img src='<?php echo $_smarty_tpl->getVariable('weixinUserInfo')->value['headimgurl'];?>
' class='round_photo'>
                    </div>
        
        
        
                    <div style=' width: 66%; overflow: hidden; position: absolute; left: 20%; top: 5%;'>
        
                        <div style='margin-top:10%;line-height: 15px;'>
                            <span style='font-size:15px; display: inline-block;  height: 4%;  '>用户昵称：<?php echo $_smarty_tpl->getVariable('weixinUserInfo')->value['nickname'];?>
</span>
                            <span id="userIntegration" style='font-size:15px; display: inline-block;  height: 4%;  '>剩余积分:<?php echo $_smarty_tpl->getVariable('localUserInfo')->value['user_integration'];?>
</span>
                        </div>
                    </div>-->
        <!--        </div>-->
        <!--        <div style="width: 100%; position: fixed; top: 0;left: 0;height: 150px;">
                    <div style="float: left">300积分 |</div>
                    <div style="float: left">500积分 |</div>
                    <div style="float: left">1000积分 |</div>
                </div>-->
        <input type="hidden" value="<?php echo $_smarty_tpl->getVariable('localUserInfo')->value['user_integration'];?>
" id="userPoint">
        <!--头部标签栏开始-->
        <div class="titleTag">
            <ul style="margin-top: -10px;margin-right: -8px;" >
                <?php if ($_smarty_tpl->getVariable('groupBy')->value=="300point"||$_smarty_tpl->getVariable('groupBy')->value==''){?>
                    <li class="titleTagActive titleBorderRight" style=""><a class="">300积分</a><div style="border-bottom: 3px solid orange;"></div></li>
                    <li class="titleBorderRight"><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=exchange&v=getExchangeList&groupBy=500point&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
">500积分</a></li>
                    <li><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=exchange&v=getExchangeList&groupBy=1000point&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
">1000积分</a></li>
                <?php }elseif($_smarty_tpl->getVariable('groupBy')->value=="500point"){?>
                    <li class="titleBorderRight"><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=exchange&v=getExchangeList&groupBy=300point&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
">300积分</a></li>
                    <li class="titleTagActive titleBorderRight"><a>500积分</a><div style="border-bottom: 3px solid orange;"></div></li>
                    <li><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=exchange&v=getExchangeList&groupBy=1000point&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
">1000积分</a></li>
                <?php }elseif($_smarty_tpl->getVariable('groupBy')->value=="1000point"){?>
                    <li class="titleBorderRight"><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=exchange&v=getExchangeList&groupBy=300point&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
">300积分</a></li>
                    <li class="titleBorderRight"><a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=exchange&v=getExchangeList&groupBy=500point&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
">500积分</a></li>
                    <li class="titleTagActive" ><a>1000积分</a><div style="border-bottom: 3px solid orange;"></div></li>
                <?php }?>
            </ul>
            <div style="clear: both;"></div>
        </div>
        <!--头部标签栏结束-->
        <!--礼品内容开始-->
        <div style=" border-top:1px solid #e4e4e4;"></div>
        <div class="registerWarp">

            <?php if ($_smarty_tpl->getVariable('exchangeList')->value==''){?>
                <div style="height: 30px;"></div>
                <div style="text-align: center;">该分段还没有商品哦~</div>
            <?php }else{ ?>
                <?php  $_smarty_tpl->tpl_vars['exchangeItem'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('exchangeList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['exchangeItem']->key => $_smarty_tpl->tpl_vars['exchangeItem']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['exchangeItem']->key;
?>
                    <div class="giftListStyle">
                        <div style="float: left;margin: 10px"> 
<!--                            <a href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=exchange&v=exchangeGoods&goodsId=<?php echo $_smarty_tpl->tpl_vars['exchangeItem']->value['exchange_id'];?>
&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
">-->
                            <img width="80" height="80" src="<?php echo $_smarty_tpl->getVariable('WebImageUrl')->value;?>
<?php echo $_smarty_tpl->tpl_vars['exchangeItem']->value['exchange_image'];?>
">
                            <!--                            </a>-->
                        </div>
                        <div style="float: left;margin: 10px;width: 62%;margin-left: 0px;">
                            <div style="word-wrap: break-word; word-break: normal;">
                                <p>
                                    <span  class="summary"><?php echo $_smarty_tpl->tpl_vars['exchangeItem']->value['exchange_name'];?>
</span> 
                                    <span style="color:orange;float: right;">积分</span> 
                                    <span class="pointStyle"><?php echo $_smarty_tpl->tpl_vars['exchangeItem']->value['exchange_integration'];?>
</span> 


                                </p>
                                <p style="color: #b4b4b4;font-size: 12px;margin-top: -8px;">
                                    <?php echo $_smarty_tpl->tpl_vars['exchangeItem']->value['exchange_summary'];?>

                                </p>
<!--                                <div style="width: 100%; text-align: right;"><a class="submitButton"  href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=exchange&v=changeGoods&goodsId=<?php echo $_smarty_tpl->tpl_vars['exchangeItem']->value['exchange_id'];?>
&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
"><button  type="button" class="btn btn-warning btn-xs ">兑换</button></a></div>-->
                                <div style="width: 100%; text-align: right;"><a class="submitButton"  href="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=exchange&v=changeGoods&goodsId=<?php echo $_smarty_tpl->tpl_vars['exchangeItem']->value['exchange_id'];?>
&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
"><button data-toggle="modal" data-target="#myModal" type="button" class="btn btn-primary btn-xs" style="width: 55px;">兑换</button></a></div>
                            </div>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                <?php }} ?>
            <?php }?>
        </div>
        <!--礼品内容结束-->
        <!--弹出框开始-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" >
                    <div class="modal-header" style="border: none;">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                    </div>
                    <div class="modal-body">
                        <h4 class="modal-title" id="myModalLabel">你确认兑换这个物品么？</h4>
                    </div>
                    <div class="modal-footer" style="border: none;">
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        <a id="checkButton" href=""><button type="button" class="btn btn-primary">确认</button></a>
                        <input type="hidden" id="gotoUrl" value="<?php echo $_smarty_tpl->getVariable('WebSiteUrl')->value;?>
/pageredirst.php?action=exchange&functionname=exchangeItemDelete&ItemId="  />
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!--弹出框结束-->
    </body>
    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/getExchangeList.js"></script>
</html>