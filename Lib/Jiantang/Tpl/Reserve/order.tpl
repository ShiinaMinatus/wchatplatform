<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="initial-scale=1.0; maximum-scale=4.0; user-scalable=no;" name="viewport">
        <meta name="viewport" content="width=device-width,user-scalable=yes" />
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="{$WebSiteUrlPublic}/css/bootstrap-datetimepicker.css" media="screen">
        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{$WebSiteUrlPublic}/css/Reserve/order.css">

        {if $checkReturn eq 1}
            <title>修改预约</title>
        {else}
            <title>预约</title>
        {/if}
              
    </head>
    <body>     


        <div class="registerWarp">
            {if $checkReturn eq 1}
                <form class=""  method='post' role="form" action="?g={$model}&a=reserve&v=orderCheck&checkReturn=1&open_id={$open_id}">
                {else}
                    <form class=""  method='post' role="form" action="?g={$model}&a=reserve&v=orderCheck&open_id={$open_id}"><!-- action=""-->

                    {/if}
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
                                        {if $checkReturn eq 1}
                                            <input id="orderDate" name="orderDateInput"  class="form-control lineDis"  style=" margin-top: -3.2em;" type="text" value="{$returnVal.orderDateInput}" readonly>
                                        {else}
                                            <input id="orderDate" name="orderDateInput"  class="form-control lineDis" style=" margin-top: -3.2em;"  type="text" value="" readonly>
                                        {/if}
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
                                        {if $checkReturn eq 1}
                                            <input id="orderTimeInput" name="orderTimeInput"  class="form-control lineDis" style=" margin-top: -3.2em;"  type="text" value="{$returnVal.orderTimeInput}" readonly>
                                        {else}
                                            <input id="orderTimeInput" name="orderTimeInput"  class="form-control lineDis" style=" margin-top: -3.2em;"  type="text" value="" readonly>
                                        {/if}
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

                                    {foreach from=$selectVal item=selectItem key=key}
                                        <option value="{$selectItem.merchandise_id}">{$selectItem.merchandise_name} {$selectItem.merchandise_money}元</option>

                                    {/foreach}

                                </select>
                            </div>
                            <input type="hidden" value="" name="orderMerchandiseHtml" id="orderMerchandiseHtml">
                        </div>
                        <div class="form-group" style=" margin-right: 3em;">
                            <label for="orderObject" class="col-sm-2 control-label">指定</label>
                            <div class="col-sm-10">
                                {if $checkReturn eq 1}
                                    <input type="name" class="form-control" id="orderObject" value="{$returnVal.orderObject}" name="orderObject" placeholder="请输入预约指定">
                                {else}
                                    <input type="name" class="form-control" id="orderObject" value="" name="orderObject" placeholder="请输入预约指定">
                                {/if}
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

        {*  <div id="Bk" style=" display: none;width: 100%;height: 100%;background-color:black;opacity: 0.5; position: absolute; left: 0; top: 0;z-index: 100;"></div>
        <div id="context" style=" overflow:scroll;display: none;width: 70%;margin: 0 auto; background-color: white; position:fixed;height:80%; z-index: 150;top:90%; left: 15%">
        <div style="background-color: white;width: 100%; text-align: center">
        <ul class="no-list-type" id="porpleNumList">

        </ul>
        </div>
        </div>*}
        {if $checkReturn eq 1}
            <input id="selectValueCache" value="{$returnVal.orderMerchandise}" type="hidden" >
        {else}
            <input id="selectValueCache" value="1" type="hidden" > 
        {/if}

        {if $checkReturn eq 1}
            <input id="porpleCount" value="{$returnVal.porpleCountSubmit}" type="hidden" >
        {else if $returnVal.porpleCountSubmit eq  ''}
            <input id="porpleCount" value="1" type="hidden" >
        {else}
            <input id="porpleCount" value="1" type="hidden" >
        {/if}
    </body> 
    <script src="{$WebSiteUrlPublic}/javascript/defined.js"></script>
    <script src="{$WebSiteUrlPublic}/javascript/ctrlSelect.js"></script>
    <script src="{$WebSiteUrlPublic}/javascript/bootstrap-datetimepicker.js"></script>
    <script src="{$WebSiteUrlPublic}/javascript/bootstrap-datetimepicker.zh-CN.js"  charset="UTF-8"></script>
    <script src="{$WebSiteUrlPublic}/javascript/Reserve/order.js"> </script> 
</html>