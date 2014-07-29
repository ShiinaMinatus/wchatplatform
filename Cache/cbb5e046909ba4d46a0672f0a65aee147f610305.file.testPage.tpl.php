<?php /* Smarty version Smarty-3.0-RC2, created on 2014-07-28 17:30:06
         compiled from "/web/www/wchatplatform/Lib//Yajie/Tpl/Home/testPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103281776753d6181e70f8d2-62530403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbb5e046909ba4d46a0672f0a65aee147f610305' => 
    array (
      0 => '/web/www/wchatplatform/Lib//Yajie/Tpl/Home/testPage.tpl',
      1 => 1406539765,
    ),
  ),
  'nocache_hash' => '103281776753d6181e70f8d2-62530403',
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
        <title></title>
        <style>
            *{
                margin: 0;
                padding: 0;
            }
            a:link{
                color: #353535;
                text-decoration: none;
            }
            a:hover{
                color: #353535;
                text-decoration: none;
            }
            a:visited{
                color: #353535;
            }
            #slides li {
                display: block;
                width: 100%;
                height: 100%;
                list-style: none;
                padding: 0;
                margin: 0;
                position: absolute;
            }
            .silid{
                display: block;
                width: 100%;
                list-style: none;
                position:relative;
                padding: 0;
                margin: 0;
            }

            #pagination{

                left:2%;
                display:block;
                list-style:none;
                position:absolute;

                bottom: 2%;
                z-index:500;
                padding:5px 15px 5px 0;
                margin:0
            }
            #pagination li{
                display:block;
                list-style:none;
                width:5px;
                height:5px;
                float:left;
                margin-left:15px;
                border-radius:5px;
                background:#b1b1b1;
            }
            #pagination li a {
                display:block;
                width:100%;
                height:100%;
                padding:0;
                margin:0;
                text-indent:-9999px;
            }




            #pagination li.current,#pagination_ li.current {
                /* background:#0092CE*/
                background: white ;
            }
            #slides li image{
                width: 100%;
                height: 100%;
            }
            #titleTop{
                text-align: center;
                height: 60px;
                line-height: 60px;
                background-color: purple;
                color: white;
            }
            #logo{
                text-align: center;
                margin-top: 20px;
            }
            #logoText{
                text-align: center;
                font-family: Times New Roman;
                font-size: 22px;
                color: #353535;
            }
            #iconGroup{
                width: 92%;
                margin: 0 auto;
                margin-top: 23px;
                padding-left: 26px;
                text-align: center;
            }
            .iconLine{
                margin-bottom: 25px;
                /*                text-align: center;*/
            }
            .iconItem{
                display: inline-block;
                margin-right: 30px;
                width: 60px;
                height: 60px;
            }
            .singleIcon{
                text-align: left;
            }
            .iconTextNone{
                color: #f1f1f1
            }
            .iconText{
                font-size: 14px;
                text-align: center;
            }
        </style>
    </head>
    <body style="background-color: #f1f1f1">
        <!--        <div id="titleTop">Mr.D</div>-->
        <div id="slides_div"  style="background-color: white; width: 100%;height: 126px; position: relative;">
            <ul id="slides" style="z-index: 99; margin: 0; padding: 0;">
                <li class="imgResize" style=" cursor: pointer;  z-index: 900;background-position: 50% 0%; background-repeat: no-repeat;" onclick=''>
                    <a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=company&v=info"><image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/newPic/picketOne.png" style="width: 100%; height: 100%;" /></a>
                </li>
                <li class="imgResize" style=" cursor: pointer;  z-index: 900;background-position: 50% 0%; background-repeat: no-repeat;" onclick=''>
                    <a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=company&v=info"><image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/newPic/picketTwo.png" style="width: 100%; height: 100%;" /></a>
                </li>
                <li class="imgResize" style=" cursor: pointer;  z-index: 900;background-position: 50% 0%; background-repeat: no-repeat;" onclick=''>
                    <a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=company&v=info"><image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/newPic/picketThree.png" style="width: 100%; height: 100%;" /></a>
                </li>
            </ul>
        </div>
        <div id="logoGroup">
            <div id="logo">
                <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/newPic/logo.png"/>
            </div>
            <div id="logoText">
                MR.D
            </div>
        </div>
        <div id="iconGroup">
            <div class="iconLine">

                <a class="iconItem" href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=company&v=info'>
                    <div class="iconPic">
                        <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/newPic/qiYeJieShao.png"/>
                    </div>
                    <div class="iconText">企业介绍</div>
                </a>


                <a class="iconItem" href='tel:+8602131263800'>
                    <div class="iconPic">
                        <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/newPic/boHao.png"/>
                    </div>
                    <div class="iconText">联系客服</div>
                </a>


                <a class="iconItem"  href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=game&v=activity&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
'>
                    <div class="iconPic">
                        <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/newPic/huoDong.png"/>
                    </div>
                    <div class="iconText">微活动</div>
                </a>

            </div>
            <div class="iconLine">

                <a class="iconItem" href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=game&v=gameDa&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
'>
                    <div class="iconPic">
                        <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/newPic/zhuanPan.png"/>
                    </div>
                    <div class="iconText">微转盘</div>
                </a>


                <a class="iconItem"  href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=game&v=Questionnaire&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
'>
                    <div class="iconPic">
                        <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/newPic/wenJuan.png"/>
                    </div>
                    <div class="iconText">微问卷</div>
                </a>


                <a class="iconItem"  href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=user&v=registration&open_id=<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
'>
                    <div class="iconPic">
                        <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/newPic/qianDao.png"/>
                    </div>
                    <div class="iconText">微签到</div>
                </a>

            </div>
            <div class="iconLine  ">

                <a class="iconItem"  href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=user&v=userInfo'>
                    <div class="iconPic">
                        <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/newPic/huiYuan.png"/>
                    </div>
                    <div class="iconText">会员卡</div>
                </a>
                    
                    
                <a class="iconItem"  href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/Public/Yajie/vtour/tour.html'>
                    <div class="iconPic">
                        <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/newPic/quanJing.png"/>
                    </div>
                    <div class="iconText">全景</div>
                </a>

              
                <div class="iconItem  ">
                    <div class="iconPic">
                        <image src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/newPic/noPic.png" style="width: 58px;height: 58px;"/>
                    </div>
                    <div  class="iconText iconTextNone">企业介绍</div>
                </div>
            </div>
        </div>
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/jquery.mobile-1.4.3.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/lanrenzhijia.js" type="text/javascript"></script>
        <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/jQuery.autoIMG.js"></script>
        <script>
            $(".imgResize").css("width",$("body").width());
            $(".imgResize").autoIMG();
            $(window).resize(function(){
            $(".imgResize").css("width",$("body").width());
            $(".imgResize").autoIMG();
        });
        var oldFileName="";
        var srcArray=new Array();
            
        $(".iconItem").mousedown(function(){
        var image=$(this).find(".iconPic").find("img");
        var src=image.attr("src");
        srcArray=src.split("/");
        var fileArray=new Array();
        var file=srcArray[srcArray.length-1];
        fileArray=file.split(".");
        var fileName=fileArray[0];
        var ext=fileArray[1];
        oldFile=fileName+"."+ext;
        var newFileName=fileName+"JiaoHu";
        var newFile=newFileName+"."+ext;
        srcArray[srcArray.length-1]=newFile;
        var newSrc=srcArray.join("/");
        image.attr("src",newSrc);
    });
    $(".iconItem").mouseup(function(){
    var image=$(this).find(".iconPic").find("img");
    srcArray[srcArray.length-1]=oldFile;
    var oldSrc=srcArray.join("/");
    image.attr("src",oldSrc);                             
});
        </script>
    </body>
</html>