<?php /* Smarty version Smarty-3.0-RC2, created on 2014-06-05 17:42:52
         compiled from "/web/www/wchatplatform/Lib//Jiantang/Tpl/Reserve/order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59209923753903b9c1aeff1-56113947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04e0eebdb077955202346ff37f0721cb224ea6ce' => 
    array (
      0 => '/web/www/wchatplatform/Lib//Jiantang/Tpl/Reserve/order.tpl',
      1 => 1401933598,
    ),
  ),
  'nocache_hash' => '59209923753903b9c1aeff1-56113947',
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
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/bootstrap-datetimepicker.css" media="screen">
        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/Reserve/order.css">

        <?php if ($_smarty_tpl->getVariable('checkReturn')->value==1){?>
            <title>修改预约</title>
        <?php }else{ ?>
            <title>预约</title>
        <?php }?>
              
    </head>
    <body>     


        <div class="registerWarp">
            <?php if ($_smarty_tpl->getVariable('checkReturn')->value==1){?>
                <form class=""  method='post' role="form" action="?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=reserve&v=orderCheck&checkReturn=1&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
">
                <?php }else{ ?>
                    <form class=""  method='post' role="form" action="?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=reserve&v=orderCheck&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
"><!-- action=""-->

                    <?php }?>
                    <div class="form-group" style="width: 100%;">
                        <table class='table-bordered col-sm-10' style="width:100%;">
                            <tr style="background-color: #fff;height: 4em;">
                                <td id="porpleNum" rowspan="2" style="" width="30%">
                                    <label for="" style="padding-left: 10px;" class="col-sm-3 control-label">人数</label>
                                    <select   style="width: 50%;margin-left: 3.2em;padding-left: 5px;text-align: center;margin-top: -2.2em;"  class="form-control" id="porpleCountSubmit" name="porpleCountSubmit" >
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>
                                </td>
                                <td class="timesAlert">              
                                    <div id="" class=" date form_datetime ">
                                        <label for="inputPassword" style=" height: 3em; line-height: 3em;"  class="col-sm-2 control-label">日期</label>
                                        <?php if ($_smarty_tpl->getVariable('checkReturn')->value==1){?>
                                            <input id="orderDate" name="orderDateInput"  class="form-control lineDis"  style=" margin-top: -3.2em;" type="text" value="<?php echo $_smarty_tpl->getVariable('returnVal')->value['orderDateInput'];?>
" readonly>
                                        <?php }else{ ?>
                                            <input id="orderDate" name="orderDateInput"  class="form-control lineDis" style=" margin-top: -3.2em;"  type="text" value="" readonly>
                                        <?php }?>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                        <input type="hidden" value="2014-01-01" id="orderDateWithNoWeek">
                                        <span class="glyphicon glyphicon-chevron-right floatIconText"></span>
                                    </div>
                                </td>
                            </tr>
                            <tr class="timesAlert" style=" background-color: #fff;height: 4em;">

                                <td >                        
                                    <div id="orderTime" class="date form_datetime ">
                                        <label for="orderTime" style=" height: 3em; line-height: 3em;" class="col-sm-2 control-label">时间</label>
                                        <?php if ($_smarty_tpl->getVariable('checkReturn')->value==1){?>
                                            <input id="orderTimeInput" name="orderTimeInput"  class="form-control lineDis" style=" margin-top: -3.2em;"  type="text" value="<?php echo $_smarty_tpl->getVariable('returnVal')->value['orderTimeInput'];?>
" readonly>
                                        <?php }else{ ?>
                                            <input id="orderTimeInput" name="orderTimeInput"  class="form-control lineDis" style=" margin-top: -3.2em;"  type="text" value="" readonly>
                                        <?php }?>
                                        <input type="hidden" id="nowCheckTimes" value=""/>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                        <span class="glyphicon glyphicon-chevron-right floatIconText"></span>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div style="height: 7em;"></div>
                    <div style=" width: 100%; background-color: #fff;height: 14em;">
                        <div class="form-group" style=" margin-right: 3em; margin-top: 2em; ">
                            <label for="orderMerchandise" class="col-sm-3 control-label">项目</label>
                            <div class="col-sm-10">
                                <select  class="form-control" id="orderMerchandise" name="orderMerchandise" >

                                    <?php  $_smarty_tpl->tpl_vars['selectItem'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('selectVal')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['selectItem']->key => $_smarty_tpl->tpl_vars['selectItem']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['selectItem']->key;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['selectItem']->value['merchandise_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['selectItem']->value['merchandise_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['selectItem']->value['merchandise_money'];?>
元</option>

                                    <?php }} ?>

                                </select>
                            </div>
                            <input type="hidden" value="" name="orderMerchandiseHtml" id="orderMerchandiseHtml">
                        </div>
                        <div class="form-group" style=" margin-right: 3em;">
                            <label for="orderObject" class="col-sm-2 control-label">指定</label>
                            <div class="col-sm-10">
                                <?php if ($_smarty_tpl->getVariable('checkReturn')->value==1){?>
                                    <input type="name" class="form-control" id="orderObject" value="<?php echo $_smarty_tpl->getVariable('returnVal')->value['orderObject'];?>
" name="orderObject" placeholder="请输入预约指定">
                                <?php }else{ ?>
                                    <input type="name" class="form-control" id="orderObject" value="" name="orderObject" placeholder="请输入预约指定">
                                <?php }?>
                            </div>
                        </div>
                        <div class="form-group" style=" margin-right: 3em;">
                            <div class="col-sm-offset-2 col-sm-10" style="margin-left: 4em;">
                                <button id="submitOrder"  class="btn btn-primary">预&nbsp;&nbsp;&nbsp;约</button>
                            </div>
                        </div>

                    </div>
                </form>

        </div>

        
        <?php if ($_smarty_tpl->getVariable('checkReturn')->value==1){?>
            <input id="selectValueCache" value="<?php echo $_smarty_tpl->getVariable('returnVal')->value['orderMerchandise'];?>
" type="hidden" >
        <?php }else{ ?>
            <input id="selectValueCache" value="1" type="hidden" > 
        <?php }?>

        <?php if ($_smarty_tpl->getVariable('checkReturn')->value==1){?>
            <input id="porpleCount" value="<?php echo $_smarty_tpl->getVariable('returnVal')->value['porpleCountSubmit'];?>
" type="hidden" >
        <?php }elseif($_smarty_tpl->getVariable('returnVal')->value['porpleCountSubmit']==''){?>
            <input id="porpleCount" value="1" type="hidden" >
        <?php }else{ ?>
            <input id="porpleCount" value="1" type="hidden" >
        <?php }?>
    </body> 

    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/ctrlSelect.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/bootstrap-datetimepicker.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/bootstrap-datetimepicker.zh-CN.js"  charset="UTF-8"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/Reserve/order.js"> </script> 
</html>