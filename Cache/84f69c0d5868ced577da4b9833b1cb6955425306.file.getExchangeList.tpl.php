<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-29 18:16:02
         compiled from "/web/www/newxiangmu/Tpl/Jiantang/Exchange/getExchangeList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1386571725538708e26006f0-02038324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84f69c0d5868ced577da4b9833b1cb6955425306' => 
    array (
      0 => '/web/www/newxiangmu/Tpl/Jiantang/Exchange/getExchangeList.tpl',
      1 => 1401327588,
    ),
  ),
  'nocache_hash' => '1386571725538708e26006f0-02038324',
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
        <style>
            body{
                Font-size=62.5%;
            }
            .registerWarp{
                width: 100%;
            }
            .tableSize{
                width: 100%;
                text-align: center;
            }
            .inlinDisplay{
                display: inline-block;
            }
            td{
                width: 50%;
            }
            .giftListStyle{
                background-color: #fff;

                border-bottom: 1px solid #e4e4e4;
            }
            .round_photo{
                width:100%;
                height: auto;
                border:1px solid #ddddde;
                -moz-border-radius: 59px;
                -webkit-border-radius: 59px;
                border-radius:50%;

            }
            .giftListStyle p{
                /*                margin: 0 !important;*/
            }
            .siteClass{

                color: rgb(128,128,128);
            } 
            .graph{  

                width: 0;     height: 0;     border-bottom: 38px solid rgb(70,140,200);  

                border-left: 41px solid transparent;

            }  
            .pointStyle{
                color:orange;float: right;
            }
            .titleTag{
                background-color: #fff;
                width: 100%;
            }
            .titleTag ul{
                list-style-type: none;
                padding-left: 0px;
            }
            .titleTag ul li{
                /*                display: inline-block;*/
                float: left;
                width: 33%;
                text-align: center;
                /*                height: 3em;*/
                line-height: 2.5em;
                border-bottom: 3px solid #fff;
                border-top: 2px solid #fff;
                /*                margin-left: -5px;*/
            }
            .titleTag ul li a{
                color: black;
            }
            .titleTag ul li a:hover{
                text-decoration: none;
            }
            .titleTagActive{
                border-bottom: none !important;
            }
            .titleBorderRight{
                border-right: 1px solid #e4e4e4;
            }
            .summary{
                font-size: 14px;
            }
        </style>
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
    </body>
    <script>
        $(".summary").each(function(){
        var len=$(this).html().length;
        if(len>=20){
        var nowString= $(this).html().substr(0, 20)
        $(this).html(nowString+"...");
    }
});
$(".submitButton").click(function(){

var integrationVals=$(this).parent().parent();
var thisUrl=$(this).attr("href");
$("#checkButton").attr("href",thisUrl);
var integration=integrationVals.find(".pointStyle").html();
//var userIntegration=$("#userIntegration").html();
var userIntegration=$("#userPoint").val();
if(parseInt(integration)>parseInt(userIntegration)){
$("#myModalLabel").html("您的积分余额不足");
$("#checkButton").hide();
//return false;
}
});
    </script>
</html>