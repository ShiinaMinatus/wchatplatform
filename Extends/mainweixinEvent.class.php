<?php

class mainweixinEvent {


    

    function user_logout() {


        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        $wechat->text('注销成功！！！')->reply();
    }

    

    function test() {


        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        $data['open_id'] = $userCode;

        $data['source'] = SOURCE;

        $result = transferData(APIURL . '/user/add', 'post', $data);

        $wechat->text($result)->reply();
    }

    function register() {

        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        $array[0] = array('Title' => '成为会员', 'Description' => '', 'Url' => WebSiteUrl.'/?g='.SOURCE.'&a=user&v=register&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/wchatplatform/public/company/image/2011071223051083.jpg");
        $wechat->news($array)->reply();
    }

    function order() {
        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号
        $array[0] = array('Title' => '我要预约', 'Description' => '', 'Url' => WebSiteUrl.'/?g='.SOURCE.'&a=reserve&v=order&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/wchatplatform/public/company/image/2011071223051083.jpg");
        $wechat->news($array)->reply();
    }


    function qiandao() {
        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        $array[0] = array('Title' => '我要签到', 'Description' => '', 'Url' => WebSiteUrl.'/?g='.SOURCE.'&a=user&v=registration&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/wchatplatform/public/company/image/2011071223051083.jpg");
        $wechat->news($array)->reply();
    }

    function getExchangeList() {
        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        $array[0] = array('Title' => '我要兑换', 'Description' => '', 'Url' => WebSiteUrl.'/?g='.SOURCE.'&a=exchange&v=getExchangeList&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/wchatplatform/public/company/image/2011071223051083.jpg");
        $wechat->news($array)->reply();
    }

    function wodezhongxin() {


        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        $array[0] = array('Title' => '我的中心', 'Description' => '', 'Url' => WebSiteUrl.'/?g='.SOURCE.'&a=user&v=userCenter&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/wchatplatform/public/company/image/2011071223051083.jpg");
        $wechat->news($array)->reply();
    }

    function jinqihuodong() {


        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号
        $array[0] = array('Title' => '近期活动', 'Description' => '', 'Url' => WebSiteUrl.'/?g='.SOURCE.'&a=game&v=activity&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/wchatplatform/public/company/image/2011071223051083.jpg");
        $wechat->news($array)->reply();
    }

   
 function dazhuanpan() {
        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        $array[0] = array('Title' => '大转盘', 'Description' => '', 'Url' => WebSiteUrl.'/?g='.SOURCE.'&a=game&v=gameDa&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/wchatplatform/public/company/image/2011071223051083.jpg");
        $wechat->news($array)->reply();
    }

    function guaguaka() {
        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        $array[0] = array('Title' => '刮刮卡', 'Description' => '', 'Url' => WebSiteUrl.'/?g='.SOURCE.'&a=game&v=guaguaka&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/wchatplatform/public/company/image/2011071223051083.jpg");

        $wechat->news($array)->reply();
    }


    function lianxifangshi() {
        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        $text = '电话  123456789';
        $wechat->text($text)->reply();
    }

     function wenjuan() {
        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        $array[0] = array('Title' => '问卷', 'Description' => '', 'Url' => WebSiteUrl.'/?g='.SOURCE.'&a=game&v=Questionnaire&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/wchatplatform/public/company/image/2011071223051083.jpg");

        $wechat->news($array)->reply();
    }
    
    
    function zengsong() {
        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        $array[0] = array('Title' => '赠送', 'Description' => '', 'Url' => WebSiteUrl.'/?g='.SOURCE.'&a=code&v=getReceviceCode&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/wchatplatform/public/company/image/2011071223051083.jpg");

        $wechat->news($array)->reply();
    }


}

?>