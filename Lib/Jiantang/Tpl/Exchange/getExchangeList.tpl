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
        <link rel="stylesheet" href="{$WebSiteUrlPublic}/css/getExchangeList.css"/>
    </head>
    <body style='background-color: rgb(243,237,227);'>

        <!--        <div style='  width: 100%; background-color: rgb(255,255,247);position: relative;'>
        
                    <div style='height: 0.2em;width: 100%;'>&nbsp;</div>-->

        <!--
                    <div style=' width: 18%;'>
                        <img src='{$weixinUserInfo.headimgurl}' class='round_photo'>
                    </div>
        
        
        
                    <div style=' width: 66%; overflow: hidden; position: absolute; left: 20%; top: 5%;'>
        
                        <div style='margin-top:10%;line-height: 15px;'>
                            <span style='font-size:15px; display: inline-block;  height: 4%;  '>用户昵称：{$weixinUserInfo.nickname}</span>
                            <span id="userIntegration" style='font-size:15px; display: inline-block;  height: 4%;  '>剩余积分:{$localUserInfo.user_integration}</span>
                        </div>
                    </div>-->
        <!--        </div>-->
        <!--        <div style="width: 100%; position: fixed; top: 0;left: 0;height: 150px;">
                    <div style="float: left">300积分 |</div>
                    <div style="float: left">500积分 |</div>
                    <div style="float: left">1000积分 |</div>
                </div>-->
        <input type="hidden" value="{$localUserInfo.user_integration}" id="userPoint">
        <!--头部标签栏开始-->
        <div class="titleTag">
            <ul style="margin-top: -10px;margin-right: -8px;" >
                {if  $groupBy eq "300point" or $groupBy eq ""}
                    <li class="titleTagActive titleBorderRight" style=""><a class="">300积分</a><div style="border-bottom: 3px solid orange;"></div></li>
                    <li class="titleBorderRight"><a href="{$WebSiteUrl}?g={$model}&a=exchange&v=getExchangeList&groupBy=500point&open_id={$open_id}">500积分</a></li>
                    <li><a href="{$WebSiteUrl}?g={$model}&a=exchange&v=getExchangeList&groupBy=1000point&open_id={$open_id}">1000积分</a></li>
                {else if $groupBy eq "500point"}
                    <li class="titleBorderRight"><a href="{$WebSiteUrl}?g={$model}&a=exchange&v=getExchangeList&groupBy=300point&open_id={$open_id}">300积分</a></li>
                    <li class="titleTagActive titleBorderRight"><a>500积分</a><div style="border-bottom: 3px solid orange;"></div></li>
                    <li><a href="{$WebSiteUrl}?g={$model}&a=exchange&v=getExchangeList&groupBy=1000point&open_id={$open_id}">1000积分</a></li>
                {else if $groupBy eq "1000point"}
                    <li class="titleBorderRight"><a href="{$WebSiteUrl}?g={$model}&a=exchange&v=getExchangeList&groupBy=300point&open_id={$open_id}">300积分</a></li>
                    <li class="titleBorderRight"><a href="{$WebSiteUrl}?g={$model}&a=exchange&v=getExchangeList&groupBy=500point&open_id={$open_id}">500积分</a></li>
                    <li class="titleTagActive" ><a>1000积分</a><div style="border-bottom: 3px solid orange;"></div></li>
                {/if}
            </ul>
            <div style="clear: both;"></div>
        </div>
        <!--头部标签栏结束-->
        <!--礼品内容开始-->
        <div style=" border-top:1px solid #e4e4e4;"></div>
        <div class="registerWarp">

            {if $exchangeList eq ""}
                <div style="height: 30px;"></div>
                <div style="text-align: center;">该分段还没有商品哦~</div>
            {else}
                {foreach from=$exchangeList item=exchangeItem key=key}
                    <div class="giftListStyle">
                        <div style="float: left;margin: 10px"> 
<!--                            <a href="{$WebSiteUrl}?g={$model}&a=exchange&v=exchangeGoods&goodsId={$exchangeItem.exchange_id}&open_id={$open_id}">-->
                            <img width="80" height="80" src="{$WebImageUrl}{$exchangeItem.exchange_image}">
                            <!--                            </a>-->
                        </div>
                        <div style="float: left;margin: 10px;width: 62%;margin-left: 0px;">
                            <div style="word-wrap: break-word; word-break: normal;">
                                <p>
                                    <span  class="summary">{$exchangeItem.exchange_name}</span> 
                                    <span style="color:orange;float: right;">积分</span> 
                                    <span class="pointStyle">{$exchangeItem.exchange_integration}</span> 


                                </p>
                                <p style="color: #b4b4b4;font-size: 12px;margin-top: -8px;">
                                    {$exchangeItem.exchange_summary}
                                </p>
<!--                                <div style="width: 100%; text-align: right;"><a class="submitButton"  href="{$WebSiteUrl}?g={$model}&a=exchange&v=changeGoods&goodsId={$exchangeItem.exchange_id}&open_id={$open_id}"><button  type="button" class="btn btn-warning btn-xs ">兑换</button></a></div>-->
                                <div style="width: 100%; text-align: right;"><a class="submitButton"  href="{$WebSiteUrl}?g={$model}&a=exchange&v=changeGoods&goodsId={$exchangeItem.exchange_id}&open_id={$open_id}"><button data-toggle="modal" data-target="#myModal" type="button" class="btn btn-primary btn-xs" style="width: 55px;">兑换</button></a></div>
                            </div>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                {/foreach}
            {/if}
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
                        <input type="hidden" id="gotoUrl" value="{$WebSiteUrl}/pageredirst.php?action=exchange&functionname=exchangeItemDelete&ItemId="  />
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!--弹出框结束-->
    </body>
    <script src="{$WebSiteUrlPublic}/javascript/getExchangeList.js"></script>
</html>