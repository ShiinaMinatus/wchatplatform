<?php

/**
 * 方法 调用列表  如是全方法 全部都需要调用时,将参数设置成1
 */
$authArray = array(
    'User' => 'userCenter,bind,userExpense,ativating',
    'Home' => 'index,testpage',
    'Game' => 'activity,getActivity,applyAction',
    'Exchange' => '1',
);

$_ENV['authArray'] = $authArray;
?>