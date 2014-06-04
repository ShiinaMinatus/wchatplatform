<?php

interface mainreserve{



	/**
	 * 订单页面
	 */

	public function order();


	/**
	 * 订单检查
	 */

	public function orderCheck();


	/**
	 * 取消订单
	 */

	public function cancelOrder();


	/**
	 * 获取所有的订单
	 */
	public function getAllOrder();

	/**
	 * 支付
	 */

	public function payment();


	/**
	 * 支付页面
	 */
	public function orderPayPage();

}



?>