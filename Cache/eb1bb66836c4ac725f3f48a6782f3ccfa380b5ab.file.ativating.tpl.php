<?php /* Smarty version Smarty-3.0-RC2, created on 2014-05-29 12:05:04
         compiled from "/web/www/newxiangmu/Tpl/Inhouse/User/ativating.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11414944735386b1f0446182-10429834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb1bb66836c4ac725f3f48a6782f3ccfa380b5ab' => 
    array (
      0 => '/web/www/newxiangmu/Tpl/Inhouse/User/ativating.tpl',
      1 => 1401327588,
    ),
  ),
  'nocache_hash' => '11414944735386b1f0446182-10429834',
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


        <!-- 最新 Bootstrap 核心 CSS 文件 -->
        <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">

        <!-- 可选的Bootstrap主题文件（一般不用引入） -->
        <!-- <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap-theme.min.css"> -->

        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>

        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>


        <title>用户激活</title>
    </head>
    <script>

    $(function(){

        $("#activatNumber").keyup(function() {
            var value = $("#activatNumber").val();
            var leng = value.length;
            if(leng > 2){
            $("#goActivat").removeAttr("disabled");
            }
        });

        $(".phoneNumberStyle").keypress(function(){

            $(".glyphicon").show();
        })

        $(".glyphicon").click(function(event) {
            /* Act on the event */
            $(".phoneNumberStyle").val('');
            $(".glyphicon").hide();
        });

        $("#goActivat").click(function() {
        // 添加正则验证        

        });  

})
    </script>


    <style>
        body{
            Font-size=62.5%;
            /*background-color: rgb(234,234,234);*/
            background-image: url(<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/beijing.png);
        }
        .ativatingWarp{
            /*border: solid 1px green;*/
            width: 22em;
            margin: 0 auto;
            height: 20em;
        }
        .phoneNumberStyle{
            width: 90%;
            margin: 0 auto;
            border: solid 1px rgb(106,106,106);
            border-radius: 0.8em;
            font-size: 1.5em;
            letter-spacing: 1px;
            -moz-border-radius: 0.8em;
            -webkit-border-radius: 0.8em;
            height: 2.3em;

        }
        ::-webkit-input-placeholder { /* WebKit browsers */
            color:rgb(106,106,106);
        }
        :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
            color:rgb(106,106,106);
        }
        ::-moz-placeholder { /* Mozilla Firefox 19+ */
            color:rgb(106,106,106);
        }
        :-ms-input-placeholder { /* Internet Explorer 10+ */
            color:rgb(106,106,106);
        }
        .getCaptcha{
            margin-left: 1em;
            width: 6em;
            text-indent: -0.5em;
        }
        .ativating{
            margin-left: 1em;
            width: 5em;
            text-indent: -0.5em;
        }
        .logoStyle{
            /*border: solid 1px red; */
            text-align: center;
            height: 11em;
            line-height: 13em;
        }

        .logoStyle img{
            max-width:100%;
            height:auto;   
            width: 60%;
        }
        .btnAtivat{
            margin: 0 auto;
            width: 90%;
            font-size: 1.5em;
            border-radius: 0.8em;
            -moz-border-radius: 0.8em;
            -webkit-border-radius: 0.8em;
            font-weight: bolder;
        }
         .glyphicon{
            display: none;
            color: #ccc;
            float: right;
            line-height: 3em;
            font-size: 1.2em;
            margin-top: -3em;
            margin-right: 1em;

        }
    </style>

    <body>
        <form action="?g=<?php echo $_smarty_tpl->getVariable('model')->value;?>
&a=user&v=bind" method='post'>
            <div class="ativatingWarp">

                <div class="logoStyle">
                    <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/logo.png"/>
                </div>  

                <input type='hidden' name='open_id' id='open_id' value='<?php echo $_smarty_tpl->getVariable('open_id')->value;?>
'>

                <div class="form-group">
                    <input type="tel" class="form-control phoneNumberStyle" name="phone" id="phoneNumber" placeholder="请输入手机号码">
                    <span class="glyphicon glyphicon-remove-circle">&nbsp;</span>
                </div>

                <div style=" margin-top: 3em;text-align: center;">
                    <button type="submit" id="goActivat" class="btn btn-primary btn-sm  btnAtivat">GO</button>
                </div>

                <div style=" height: 3em;"></div>
        </form>
    </div>


</body>



</html>
