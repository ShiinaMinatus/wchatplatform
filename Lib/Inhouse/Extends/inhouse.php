<?php

/**
 * 微信前台 自定义菜单事件  和 关注事件
 */
class weixinEvent extends mainweixinEvent {

    /**
     * 绑定
     */
    function register() {

        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        $array[0] = array('Title' => '成为会员', 'Description' => '', 'Url' => 'http://112.124.25.155/yajie_weixin_crm/wchatplatform/?g=' . SOURCE . '&a=user&v=ativating&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/wchatplatform/public/company/image/2011071223051083.jpg");
        $wechat->news($array)->reply();
    }

    /**
     * 消费记录
     */
    function order() {
        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号
        $array[0] = array('Title' => '消费记录', 'Description' => '', 'Url' => 'http://112.124.25.155/yajie_weixin_crm/wchatplatform/?g=' . SOURCE . '&a=user&v=userExpense&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/wchatplatform/public/company/image/2011071223051083.jpg");
        $wechat->news($array)->reply();
    }

    function faxingshijieshao() {
        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号
        $array[0] = array('Title' => '发型师介绍', 'Description' => '', 'Url' => 'http://112.124.25.155/yajie_weixin_crm/wchatplatform/?g=' . SOURCE . '&a=web&v=stylistInfo&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/wchatplatform/public/company/image/2011071223051083.jpg");
        $wechat->news($array)->reply();
    }

    function jiamubiao() {
        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号
        $array[0] = array('Title' => '节目表', 'Description' => '', 'Url' => 'http://112.124.25.155/yajie_weixin_crm/wchatplatform/?g=' . SOURCE . '&a=web&v=pricedList&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/wchatplatform/public/company/image/2011071223051083.jpg");
        $wechat->news($array)->reply();
    }

    function mendianxinxi() {

        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号
        $array[0] = array('Title' => '门店信息', 'Description' => '', 'Url' => 'http://112.124.25.155/yajie_weixin_crm/wchatplatform/?g=' . SOURCE . '&a=web&v=storeInformation&open_id=' . $userCode, 'PicUrl' => "http://112.124.25.155/wchatplatform/public/company/image/2011071223051083.jpg");
        $wechat->news($array)->reply();
    }

}

?>