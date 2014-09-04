<?php

/**
 * 微信前台 自定义菜单事件  和 关注事件
 */
class weixinEvent extends mainweixinEvent {

    function web() {


        $wechat = new Wechat();



        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号
        $array[0] = array('Title' => '微网站', 'Description' => '', 'Url' => 'http://112.124.25.155/yajie_weixin_crm/wchatplatform/?g=' . SOURCE . '&a=home&v=testPage&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/yajie_weixin_crm/wchatplatform/Public/Yajie/MenuImage/web.jpg");
        $wechat->news($array)->reply();
    }

    function server() {
        $wechat = new Wechat();



        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号
        $array[0] = array('Title' => '微服务', 'Description' => '', 'Url' => 'http://112.124.25.155/yajie_weixin_crm/wchatplatform/?g=' . SOURCE . '&a=company&v=official&id=1&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/yajie_weixin_crm/wchatplatform/Public/Yajie/MenuImage/service.png");
        $wechat->news($array)->reply();
    }

    function companyInfo() {

        $wechat = new Wechat();



        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号
        $array[0] = array('Title' => '公司简介', 'Description' => '', 'Url' => 'http://112.124.25.155/yajie_weixin_crm/wchatplatform/?g=' . SOURCE . '&a=company&v=info&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/yajie_weixin_crm/wchatplatform/Public/Yajie/MenuImage/company_info.png");
        $wechat->news($array)->reply();
    }

    function ContactUs() {

        $wechat = new Wechat();



        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号
        $array[0] = array('Title' => '联系我们', 'Description' => '', 'Url' => 'http://112.124.25.155/yajie_weixin_crm/wchatplatform/?g=' . SOURCE . '&a=company&v=official&id=5&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/yajie_weixin_crm/wchatplatform/Public/Yajie/MenuImage/ContactUs.png");
        $wechat->news($array)->reply();
    }

    function SuccessStories() {

        $wechat = new Wechat();



        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号
        $array[0] = array('Title' => '成功案例', 'Description' => '', 'Url' => 'http://112.124.25.155/yajie_weixin_crm/wchatplatform/?g=' . SOURCE . '&a=company&v=official&id=4&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/yajie_weixin_crm/wchatplatform/Public/Yajie/MenuImage/anli_.png");
        $wechat->news($array)->reply();
    }

    function LearnMore() {

        //'http://112.124.25.155/yajie_weixin_crm/wchatplatform/?g=' . SOURCE . '&a=company&v=official&id=6&open_id=' . $userCode

        $wechat = new Wechat();



        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号
        $array[0] = array('Title' => '了解更多', 'Description' => '', 'Url' => 'http://112.124.25.155/yajie_weixin_crm/wchatplatform/?g=' . SOURCE . '&a=home&v=testPage&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/yajie_weixin_crm/wchatplatform/Public/Yajie/MenuImage/LearnMore2.png");
        $wechat->news($array)->reply();
    }

    function mobile() {

        $wechat = new Wechat();



        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号
        $array[0] = array('Title' => '移动商务通', 'Description' => '', 'Url' => 'http://112.124.25.155/yajie_weixin_crm/wchatplatform/?g=' . SOURCE . '&a=company&v=official&id=2&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/yajie_weixin_crm/wchatplatform/Public/Yajie/MenuImage/mobile.png");
        $wechat->news($array)->reply();
    }

    function CustomProducts() {


        $wechat = new Wechat();



        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号
        //$array[0] = array('Title' => '定制产品', 'Description' => '', 'Url' => 'http://112.124.25.155/yajie_weixin_crm/wchatplatform/?g=' . SOURCE . '&a=company&v=official&id=3&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/yajie_weixin_crm/wchatplatform/Public/Yajie/MenuImage/CustomProducts.png");

        $text = '我们为您提供功能定制服务' . PHP_EOL . '满足您企业的个性需求' . PHP_EOL;

        $text.='请点击<a href="http://112.124.25.155/yajie_weixin_crm/wchatplatform/?g=' . SOURCE . '&a=company&v=official&id=5&open_id=' . $userCode . '">联系我们</a>';

        $wechat->text($text)->reply();
    }

    function member() {


        $wechat = new Wechat();



        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号
        $array[0] = array('Title' => '微会员', 'Description' => '', 'Url' => 'http://112.124.25.155/yajie_weixin_crm/wchatplatform/?g=' . SOURCE . '&a=user&v=userInfo&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/yajie_weixin_crm/wchatplatform/Public/Yajie/MenuImage/member.png");
        $wechat->news($array)->reply();
    }

    function OnlineCustomers() {


        $wechat = new Wechat();



        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号
        $array[0] = array('Title' => '在线客服', 'Description' => '', 'Url' => 'http://112.124.25.155/yajie_weixin_crm/wchatplatform/?g=' . SOURCE . '&a=company&v=official&id=7&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/yajie_weixin_crm/wchatplatform/Public/Yajie/MenuImage/OnlineCustomers.png");
        $wechat->news($array)->reply();
    }

    function subscribe() {



        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号


        if (ABLEBINDING == 1) {


            $array[0] = array('Title' => '成为会员', 'Description' => '', 'Url' => 'http://112.124.25.155/yajie_weixin_crm/wchatplatform/?g=' . SOURCE . '&a=user&v=ativating&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/wchatplatform/public/company/image/2011071223051083.jpg");

            $wechat->news($array)->reply();
        } else {
            
             P('user')->add($userCode);
        }
    }

}

?>