<?php

interface inhouseuser{



	/**
	 * 用户中心 需获取用户积分消费
	 */
	function userCenter();


	/**
	 * 用户绑定逻辑－》调用用户api －》 返回内容
	 */

	function bind();

	/**
	 * 用户 积分记录
	 */

	function userExpense();

	/**
	 * 绑定页面
	 */

	function ativating();


}
?>