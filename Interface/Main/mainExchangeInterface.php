<?php


interface mainexchange{



	/**
	 * 兑换列表
	 */

	public function getExchangeList();


	/**
	 * 兑换物品详情
	 */

	public function exchangeGoods();


	/**
	 * 兑换物品
	 */

	public function changeGoods();


	/**
	 *  地区地址 获取
	 */

	public function locationCheck();

	/**
	 *   调用 地区api
	 */

	public function getAreaMessage();


	/**
	 *  修改地区内容
	 */

	public function updateUserLocation();


	/**
	 * 处理兑换结果
	 */
	public function changeGoodsResult();


	/**
	 * 兑换成功页面
	 */

	public function changeScuessList();

	/**
	 * 获取用户兑换记录
	 */

	public function getUserExchangeRecord();

}
?>