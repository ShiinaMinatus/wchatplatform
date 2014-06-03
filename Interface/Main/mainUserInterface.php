<?php

interface mainuser{

	public function index();

	/**
	 * 注册页面
	 */

	public function register();

	/**
	 * 注册逻辑
	 */

	public function submitRegister();

	/**
	 * 用户中心
	 */

	public function userCenter();

	/**
	 * 用户资料
	 */

	public function userInfo();

	/**
	 * 用户积分
	 */

	public function userJf();

	/**
	 * 用户签到页面
	 */

	public function userlogin();

	/**
	 * 用户激活页面
	 */

	public function ativating();

	/**
	 *   签到页面
	 */
	public function registration();

	/**
	 *  获取用户签到api 调用
	 */

	public function userRegistration();

	/**
	 *  用户签到api接口
	 */

	public function registrationAction();

}


?>