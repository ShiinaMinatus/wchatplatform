<?php

/**
 * 微信前台 自定义菜单事件  和 关注事件
 */
class weixinEvent extends mainweixinEvent {

    function lianxifangshi() {
        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号

        $text = '客服微信：133-9112-9112';
        $wechat->text($text)->reply();
    }
    
    function subscribe() {

        $wechat = new Wechat();

        $type = $wechat->getRev()->getRevType();

        $userCode = $wechat->getRev()->getRevFrom(); //获取微信号码 查询数据库 查看是否已经绑定帐号
        
        $text_one ='欢迎进入脊安堂大本营！脊安堂专业美式整脊，助你健康一臂之力！客服微信：133-9112-9112';
        
        $text = str_replace('{$open_id}', $open_id, $text_one);
        
        $wechat->text($text)->reply();
    }

}

?>