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


        <title>报手机号就能用卡啦！</title>

        <style>

            body{
                Font-size=62.5%;
            }
            .registerWarp{
                margin: 0 auto;
                margin-top: 2em;
            }
            a{
                color: black;
                text-decoration: none;
            }
            a:link{
                color: black;
                text-decoration: none;
            }
            a:visited{
                color: black;
                text-decoration: none;
            }
            a:hover{
                color:black;
                text-decoration: none;
            }
            .listBorder{
                border: 1px solid #646464;
                border-radius: 3px;
                width: 95%;
                margin: 0 auto;

                background-color: #fff;
            }
            .listItem{
                padding-left: 10px;
                display: block;
                padding:10px 11px;

            }
            .item_tag_position{
                float: right;margin-right: 5px;text-align: right;
            }
            .line_bottom{
                border-bottom: 1px solid #646464
            }
            .listTitle{
                padding-top: 5px;
                line-height: 32px;
                text-align: left;
                color: #373B3E;
                font-size: 14px;
                padding-left: 21px;
                font-weight: bold;
            }
            #footReturn{
                z-index: 89;
                display: inline-block;
                text-align: center;
                text-decoration: none;
                vertical-align: middle;
                cursor: pointer;
                width: 100%;
                outline: 0px none;
                overflow: visible;
                box-sizing: border-box;
                padding: 0px;
                height: 41px;
                opacity: 0.95;
                border-top: 1px solid #181818;
                box-shadow: 0px 1px 2px #B6B6B6 inset;
                background-color: #515151;
                background-image: linear-gradient(center top , #838383, #202020);
            }
            .footFix{
                width: 100%;
                text-align: center;
                position: fixed;
                left: 0px;
                bottom: 0px;
                z-index: 99;
            }
            .backStyle{
                color: #FFF;
                text-shadow: 1px 1px #282828;
                font-size: 14px;
                font-weight: bold;
            }
            .backSpan{
                background: url('{$WebSiteUrlPublic}/image/memberPic/arrow1.png') no-repeat scroll 0px 50% / 12px 15.5px transparent;
                padding-left: 28px;
                line-height: 41px;
            }

        </style>
    </head>


    <body style="background-color: #eee">
        <div style="" >
            <div class="listTitle">上海闵行</div>
            <div id="another_message" class="listBorder">
                <div class="listItem line_bottom" style="line-height: 30px">
                    <span >上海市闵行区沪闵路6088号龙之梦商务楼2102 </span>

                </div>
                <a class="listItem" href="tel:021-31263800">
                    <span class="">021-31263800</span>

                    <div class="item_tag_position" style="margin-top: 1px;">
                        <image src="{$WebSiteUrlPublic}/image/memberPic/jianTou.png" >
                    </div>
                    <div class="item_tag_position" style="margin-top: 1px;">
                        <image style=" width: 15px; height: 15px;margin-right:20px;" src="{$WebSiteUrlPublic}/image/memberPic/tel2.png" >
                    </div>
                </a>
            </div>
        </div>
        <div class="footFix" id="footReturn"><a href="{$websiteUrl}?g={$model}&a=user&v=userInfo&open_id={$open_id}" class="backStyle" style="color:white" ><span class="backSpan">返回会员卡页</span></a></div>
    </body>
</html>
