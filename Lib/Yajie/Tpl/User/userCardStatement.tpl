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


        <title>会员卡说明</title>

        <style>

            body{
                margin-top: -20px;
            }
            .registerWarp{
                background: url('{$WebSiteUrlPublic}/image/memberPic/bk_square1.jpg') repeat scroll 0px 0px / 64.5px 64.5px transparent;
            }
            #shopTitle{
                line-height: 25px;
                font-size: 14px;
                color: #373B3E;
                padding-left: 12px;
                margin-left: 24px;
                background: url('{$WebSiteUrlPublic}/image/memberPic/li_dot1.png') no-repeat scroll 0px 50% / 5px 5px transparent;
            }
            ul{
                list-style-type: none;
            }
            .mainText{
                color: #797979;
                font-size: 12px;}
            #titleList{
                padding: 10px 0px 40px;
                width: 310px;
                margin: 0px auto;
            }
            .dotBorder{
                border-style: dotted;
                border-width: 1px 0px;
                border-color: #FFF #FFF #DADADA;
                position: relative;
                z-index: 2;
                text-align: left;
                padding-bottom: 9px;
                padding-top: 5px;
                margin: 0px 9px;
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
    <body>
        <div class="registerWarp">
            <ul id="titleList" style="padding-top:20px">
                <li class="dotBorder">
                    <h2 id="shopTitle">商家简介</h2>
                    <ul>
                        <li class="mainText">
                            雅捷信息技术有限公司
                        </li>
                    </ul>
                </li>
                <li >
                    <h2 id="shopTitle">使用说明</h2>
                    <ul class="mainText" style="padding-right: 12px;">
                        <li data-type="使用说明">雅捷微生活会员卡服务平台
                        </li><li data-type="使用说明">第一条：用户通过微信公众平台关注“雅捷”获取雅捷微生活会员卡。
                        </li><li data-type="使用说明">第二条：为保障您个人的会员卡安全，请妥善保管您的手机，微信账户。如您对本平台显示的信息有任何疑问，请及时联系客服热线进行咨询。 
                        </li><li data-type="使用说明">第三条：积分详细规则请参考积分模块，预存详情规则请参考预存模块。
                        </li><li data-type="使用说明">第四条：持卡会员消费支付现金部分，可享受积分奖励。
                        </li><li data-type="使用说明">第五条：电子代金券是将传统纸质代金券电子化后存储在商户会员卡内；电子代金券使用时不可兑换现金、不找零、不可享受积分奖励、不开具发票。
                        </li><li data-type="使用说明">第六条：电子代金券详细规则及使用办法，以公司活动通知为准。
                        </li><li data-type="使用说明">第七条：会员卡丢失、手机丢失、账户被盗等，应及时致电进行临时冻结。
                        </li><li data-type="使用说明">第八条：会员遗失会员卡时应及时办理挂失业务，因会员未及时办理挂失所造成的损失由会员承担。
                        </li>
                    </ul>
                </li>
            </ul>
            <div style="height: 120px;"></div>
        </div>
        <div class="footFix" id="footReturn"><a href="{$websiteUrl}?g={$model}&a=user&v=userInfo&open_id={$open_id}" class="backStyle" style="color:white" ><span class="backSpan">返回会员卡页</span></a></div>
    </body>
</html>
