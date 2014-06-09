<?php
class homeController extends mainhomeController implements inhousehome {

    public function test() {

        $arr = array(
            'button' => array(
                array(
                    'name' => urlencode("会员尊享"),
                    'sub_button' => array(
                        array(
                            'name' => urlencode("成为会员"),
                            'type' => 'click',
                            'key' => 'register'
                        ),
                        array(
                            'name' => urlencode("消费记录"),
                            'type' => 'click',
                            'key' => 'order'
                        ),
                        array(
                            'name' => urlencode("我要兑换"),
                            'type' => 'click',
                            'key' => 'getExchangeList'
                        ),
                        array(
                            'name' => urlencode("我的中心"),
                            'type' => 'click',
                            'key' => 'wodezhongxin'
                        )
                    )
                ),
                array(
                    'name' => urlencode("精彩活动"),
                    'sub_button' => array(
                        array(
                            'name' => urlencode("近期活动"),
                            'type' => 'click',
                            'key' => 'jinqihuodong'
                        ),
                        array(
                            'name' => urlencode("发型师介绍"),
                            'type' => 'click',
                            'key' => 'faxingshijieshao'
                        )
                    )
                ),
                array(
                    'name' => urlencode("服务中心"),
                    'sub_button' => array(
                        array(
                            'name' => urlencode("联系方式"),
                            'type' => 'click',
                            'key' => 'lianxifangshi'
                        ),
                        // array(
                        //     'name' => urlencode("价目表"),
                        //     'type' => 'click',
                        //     'key' => 'jiamubiao'
                        // ),
                        array(
                            'name' => urlencode("门店信息"),
                            'type' => 'click',
                            'key' => 'mendianxinxi'
                        ), 
                    )
                )
            )
        );



        $jsondata = urldecode(json_encode($arr));




        $token = 'HBOFX4LOOLHY8golYiSflzoByEjXOEYJMH_YQjYTA6ob19d7GqE9gI5IPY3vLS8yEsiYwaLmS5bPALEz04DHEg';


        $url = 'https://api.weixin.qq.com/cgi-bin/menu/create?access_token=' . $token;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsondata);
        $result = curl_exec($ch);
        curl_close($ch);



        echo $result;
    }
    
}

?>