<?php

class homeController extends mainhomeController {

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");


        if (!empty($_REQUEST['open_id'])) {

            $this->userOpenId = $_REQUEST['open_id'];
        } else {

            $this->userOpenId = 'oIUY-tzD2rRdkycAc5ceQjtI1-ok';
        }


        $this->assign('open_id', $this->userOpenId);
    }

    private $bigArray = array(
        'page' => array('type' => 'text', 'text' => '<a href="http://112.124.25.155/yajie_weixin_crm/wchatplatform/?g=Yajie&a=home&v=testPage&open_id={$open_id}">测试页面</a>'),
        '帮助' => array('type' => 'php', 'name' => 'server'),
        '联系方式' => array('type' => 'text', 'text' => '上海市闵行区沪闵路6088号 凯德龙之梦商务楼2102室,联系电话:+8602131263800'),
        '会员卡查询' => array('type' => 'php', 'name' => 'member'),
    );
    private $companyInfo = array('companyInfo' => array('token' => 'yajie', ''), 'subscribe' => array(''));

    public function test() {

        $arr = array(
            'button' => array(
                array(
                    'name' => urlencode("功能演示"),
                    'sub_button' => array(
                        array(
                            'name' => urlencode("微网站"),
                            'type' => 'click',
                            'key' => 'web'
                        ),
                        array(
                            'name' => urlencode("微服务"),
                            'type' => 'click',
                            'key' => 'server'
                        ),
                        array(
                            'name' => urlencode("微会员"),
                            'type' => 'click',
                            'key' => 'member'
                        )
                    )
                ),
                array(
                    'name' => urlencode("产品介绍"),
                    'sub_button' => array(
                        array(
                            'name' => urlencode("移动商务通"),
                            'type' => 'click',
                            'key' => 'mobile'
                        ),
                        array(
                            'name' => urlencode("定制产品"),
                            'type' => 'click',
                            'key' => 'CustomProducts'
                        )
                    )
                ),
                array(
                    'name' => urlencode("关于我们"),
                    'sub_button' => array(
                        array(
                            'name' => urlencode("公司简介"),
                            'type' => 'click',
                            'key' => 'companyInfo'
                        ),
                        // array(
                        //     'name' => urlencode("价目表"),
                        //     'type' => 'click',
                        //     'key' => 'jiamubiao'
                        // ),
                        array(
                            'name' => urlencode("成功案例"),
                            'type' => 'click',
                            'key' => 'SuccessStories'
                        ),
                        array(
                            'name' => urlencode("联系我们"),
                            'type' => 'click',
                            'key' => 'ContactUs'
                        ),
                        array(
                            'name' => urlencode("了解更多"),
                            'type' => 'click',
                            'key' => 'LearnMore'
                        ),
                        array(
                            'name' => urlencode("在线客服"),
                            'type' => 'click',
                            'key' => 'OnlineCustomers'
                        ),
                    )
                )
            )
        );



        $jsondata = urldecode(json_encode($arr));

        //$tokenUrl = 'https://api.weixin.  qq.com/cgi-bin/token?grant_type=client_credential&appid=wxe7878882ea37482b&secret=afc26fbaff69f7ce8c3c2a1cabdf0047';



        $url = 'https://api.weixin.qq.com/cgi-bin/menu/create?access_token=7DTzqwNa-ElG5ebS4DM-bPlzV6xydrEcagi2GnN7qwFVZQiNdfnF5_e3EmnzBC3O0n7CH1c554mDHW44phvuJw';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsondata);
        $result = curl_exec($ch);
        curl_close($ch);

        echo $result;
    }

    public function index() {




        $weChat = new Wechat();

        $weChat->sendmessage($this->bigArray, $this->companyInfo);
    }

    public function testPage() {
        
        
        
     

        $this->display();
    }

}

?>