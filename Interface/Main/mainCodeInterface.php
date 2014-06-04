<?php

interface maincode{


	public function index();


	/**
	 * 配置权限地址
	 */

	public function authUrl($url);


	/**
	 * 优惠券 详情页面
	 */

	public function giveCodeDetail();


	/**
	 * 获取用户收到的地址
	 */

	public function getCode($open_id,$give_open_id);

	/**
	 * 赠送  优惠券 后台逻辑
	 */

	public function  giveResult();


	/**
	 * 用户优惠券列表
	 */

	public function promoMessage();


	/**
	 *  调用生成地址
	 */

	public function getReceviceCode();

	/**
	 *   创建url 地址
	 */

	public function createUrl($give_open_id);

}

?>