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
                margin-left: 2px;
                font-size:10px;
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
            <div id="dateText">你已经连续签到{$info.day}天</div>
            <div style="height: 3px;"></div>
            <div id="hintText">再坚持{$info.overplus}天有意想不到的惊喜哦~</div>
        </div>
        <div style="height: 20px;"></div>
        <div class="divCenter">
            <div style="height: 22px;"></div>
            <div >
                {if $info.today_able eq "1"}

                    <button id="registrationButton" disabled="disabled" style="">
                        今日已签
                    </button>
                {else}
                    <form class=""  name='form1' id='form1' method='post' role="form" action="{$WebSiteUrl}?g={$model}&a=user&v=registrationAction">
                        <input type='hidden' name='open_id' id='open_id' value='{$open_id}'>
                        <button id="registrationButton"  style="background-color:#ff6803;color: white ">
                            点此签到
                        </button>
                    </form>
                {/if}
            </div>
            <div style="height:25px;"></div>
            <div style="text-align: right"><span id="fiveDay">有惊喜</span></div>
            <div style="height:3px;"></div>
            <div id="registrationMessage">
                <div class="testLine test" style="width: 14px;"></div>
                {if $info.day gt 5  and $info.day % 5 == 1}
                    <div class="testBigCircle circle test regisTrationIsCheck"></div>
                {else}
                    <div class="testBigCircle circle test "></div>
                {/if}

                {if $info.day eq 0}
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
                {else if $info.clearDay eq 1}
                    <div class="testLine test"></div>
                    {if $info.today_able eq 1}
                        <div class="testSmallCircle circle test regisTrationIsCheck"></div>
                    {else}
                        <div class="testSmallCircle circle test "></div>
                    {/if}
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test "></div>
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test"></div>
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test"></div>
                    <div class="testLine test"></div>
                    <div class="testBigCircle circle test"></div>
                    <div class="testLine test" style="width: 14px;"></div>
                {else if $info.clearDay eq 2}
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test regisTrationIsCheck"></div>
                    <div class="testLine test"></div>
                    {if $info.today_able eq 1}
                        <div class="testSmallCircle circle test regisTrationIsCheck"></div>
                    {else}
                        <div class="testSmallCircle circle test "></div>
                    {/if}
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test"></div>
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test"></div>
                    <div class="testLine test"></div>
                    <div class="testBigCircle circle test"></div>
                    <div class="testLine test" style="width: 14px;"></div>
                {else if $info.clearDay eq 3}
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test regisTrationIsCheck"></div>
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test regisTrationIsCheck"></div>
                    <div class="testLine test"></div>
                    {if $info.today_able eq 1}
                        <div class="testSmallCircle circle test regisTrationIsCheck"></div>
                    {else}
                        <div class="testSmallCircle circle test "></div>
                    {/if}
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test"></div>
                    <div class="testLine test"></div>
                    <div class="testBigCircle circle test"></div>
                    <div class="testLine test" style="width: 14px;"></div>
                {else if $info.clearDay eq 4}
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test regisTrationIsCheck"></div>
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test regisTrationIsCheck"></div>
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test regisTrationIsCheck"></div>
                    <div class="testLine test"></div>
                    {if $info.today_able eq 1}
                        <div class="testSmallCircle circle test regisTrationIsCheck"></div>
                    {else}
                        <div class="testSmallCircle circle test "></div>
                    {/if}
                    <div class="testLine test"></div>
                    <div class="testBigCircle circle test"></div>
                    <div class="testLine test" style="width: 14px;"></div>
                {else if $info.clearDay eq 0 and $info.day gt 0}
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test regisTrationIsCheck"></div>
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test regisTrationIsCheck"></div>
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test regisTrationIsCheck"></div>
                    <div class="testLine test"></div>
                    <div class="testSmallCircle circle test regisTrationIsCheck"></div>
                    <div class="testLine test"></div>
                    {if $info.today_able eq 1}
                        <div class="testBigCircle circle test regisTrationIsCheck"></div>
                    {else}
                        <div class="testBigCircle circle test "></div>
                    {/if}
                    <div class="testLine test" style="width: 14px;"></div>
                {/if}
                <div style="clear: both;"></div>
            </div>
            <div style="height:5px;"></div>
            <div style="text-align: left">
                  {if $info.day gt 5 and $info.day % 5 == 1}
                    <span id="yesterDay">昨天已签</span>
                {else}
                    <span id="yesterDay" style="color:white">昨天已签</span>  
                {/if}
                {if $info.day eq 0}
                    <span id="firstDay" class="noset">今日未签</span>
                    <span id="secDay" class="displayIsDisable">第二天</span>
                    <span id="thrDay" class="displayIsDisable">第三天</span>
                    <span id="fourDay" class="displayIsDisable">第四天</span>
                {else if $info.clearDay eq 1}
                    {if $info.today_able eq 1}
                        <span id="firstDay" class="noset">今日已签</span>
                        <span id="secDay" class="displayIsDisable">第二天</span>
                        <span id="thrDay" class="displayIsDisable">第三天</span>
                        <span id="fourDay" class="displayIsDisable">第四天</span>
                    {else}
                        <span id="firstDay" class="noset">今日未签</span>
                        <span id="secDay" class="displayIsDisable">第二天</span>
                        <span id="thrDay" class="displayIsDisable">第三天</span>
                        <span id="fourDay" class="displayIsDisable">第四天</span>
                    {/if}
                {else if $info.clearDay eq 2}
                    {if $info.today_able eq 1}
                        <span id="firstDay" class="noset">&nbsp;&nbsp;第一天</span>
                        <span id="secDay" class="">今日已签</span>
                        <span id="thrDay" class="displayIsDisable">&nbsp;&nbsp;第三天</span>
                        <span id="fourDay" class="displayIsDisable">&nbsp;&nbsp;第四天</span>
                    {else}
                        <span id="firstDay" class="noset">&nbsp;&nbsp;第一天</span>
                        <span id="secDay" class="">今日未签</span>
                        <span id="thrDay" class="displayIsDisable">&nbsp;&nbsp;第三天</span>
                        <span id="fourDay" class="displayIsDisable">&nbsp;&nbsp;第四天</span>
                    {/if}
                {else if $info.clearDay eq 3}
                    {if $info.today_able eq 1}
                        <span id="firstDay" class="noset">&nbsp;&nbsp;第一天</span>
                        <span id="secDay" class="">&nbsp;&nbsp;第二天</span>
                        <span id="thrDay" class="">今日已签</span>
                        <span id="fourDay" class="displayIsDisable">&nbsp;&nbsp;第四天</span>
                    {else}
                        <span id="firstDay" class="noset">&nbsp;&nbsp;第一天</span>
                        <span id="secDay" class="">&nbsp;&nbsp;第二天</span>
                        <span id="thrDay" class="">今日未签</span>
                        <span id="fourDay" class="displayIsDisable">&nbsp;&nbsp;第四天</span>
                    {/if}

                {else if $info.clearDay eq 4}
                    {if $info.today_able eq 1}
                        <span id="firstDay" class="noset">&nbsp;&nbsp;第一天</span>
                        <span id="secDay" class="">&nbsp;&nbsp;第二天</span>
                        <span id="thrDay" class="">&nbsp;&nbsp;第三天</span>
                        <span id="fourDay" class="">今日已签</span>
                    {else}
                        <span id="firstDay" class="noset">&nbsp;&nbsp;第一天</span>
                        <span id="secDay" class="">&nbsp;&nbsp;第二天</span>
                        <span id="thrDay" class="">&nbsp;&nbsp;第三天</span>
                        <span id="fourDay" class="">今日未签</span>
                    {/if}
                {else if $info.clearDay eq 0 and $info.day gt 0}
                    {if $info.today_able eq 1}
                        <span id="firstDay" class="noset">&nbsp;&nbsp;第一天</span>
                        <span id="secDay" class="">&nbsp;&nbsp;第二天</span>
                        <span id="thrDay" class="">&nbsp;&nbsp;第三天</span>
                        <span id="fourDay" class="">&nbsp;&nbsp;第四天</span>
                    {else}
                        <span id="firstDay" class="noset">&nbsp;&nbsp;第一天</span>
                        <span id="secDay" class="">&nbsp;&nbsp;第二天</span>
                        <span id="thrDay" class="">&nbsp;&nbsp;第三天</span>
                        <span id="fourDay" class="">&nbsp;&nbsp;第四天</span>
                    {/if}
                {/if}
            </div>
            <div style="height:25px;"></div>
        </div>
        <div class="">
        </div>

    </body>



</html>
