<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta content="width=device-width,initial-scale=1.0; maximum-scale=4.0; user-scalable=yes;" name="viewport">

         
       <!-- 最新 Bootstrap 核心 CSS 文件 -->
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css" type="text/css"><!-- 可选的Bootstrap主题文件（一般不用引入） -->
        <!-- <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap-theme.min.css"> -->
        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->

        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js" type="text/javascript">
        </script><!-- 最新的 Bootstrap 核心 JavaScript 文件 -->

        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js" type="text/javascript">
        </script>
        <link rel="stylesheet"  href="{$WebSiteUrlPublic}/css/userInfo.css" type="text/css">
      
        <title>
            个人信息
        </title>
    </head>
    <body style='background-color: rgb(243,237,227);'>
        <div class="registerWarp">
            <div style='  width: 100%; background-color: rgb(255,255,247);position: relative;'>

                <div style='height: 0.2em;width: 100%;'>&nbsp;</div>


                <div style=' width: 18%; margin-left: 5px;'>
                    <img src='{$userinfo.headimgurl}' class='round_photo'>
                </div>



                <div style=' width: 75%; overflow: hidden; position: absolute; left: 20%; top: 5%;'>

                    <div style='margin-top:10%;line-height: 15px;padding-left: 15px;'>
                        <div style='font-size:15px; display: inline-block;  height: 4%;  '>修改头像</div>
                        <div style="float: right;color: #777;" class="">＞</div>

                    </div>
                   
                </div>
                <div style="height: 5px;"></div>
            </div>
            <div class="giftListStyle" style="width: 100%;">
                <div style="word-wrap: break-word; word-break: normal;">
                    <div class="integration"><div class=" inline userTitleStyle" >昵称</div><div class="inline userMessage" >{$userinfo.nickname}</div></div>
                    <div class="integration"><div class=" inline userTitleStyle" >性别</div><div class="inline userMessage">
                            {if $userinfo.sex eq "1"}
                                男
                            {else}
                                女
                            {/if}
                        </div>
                    </div>
                    <div class="integration"><div class=" inline userTitleStyle" >出生地</div><div class="inline userMessage">{$userinfo.province}</div></div>
                    <div class="integration"><div class=" inline userTitleStyle" >生日</div><div class="inline userMessage">{$userBirthday}</div></div>
                </div>
            </div>


        </div>
    </body>
</html>