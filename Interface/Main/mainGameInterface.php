<?php

interface maingame{

	public function index();


	/**
	 * 大转盘页面
	 */

	public function gameDa();


	/**
	 * 刮刮卡 页面
	 */

	public function guaguaka();



	/**
	 * 大转盘 ajax 方法
	 */

	public function getBigWheel();

	/**
	 * 问卷 页面显示
	 */

	public function Questionnaire();


	/**
	 * 活动页面 
	 */

	public function activity();

	/**
	 * 获取问卷的问题
	 */
	public function getQuesion();

	/**
	 * 获取活动api 
	 */

	public function getActivity();

	/**
	 *  问题 提交
	 */

	public function uploadQuestion();

	/**
	 * 报名 提交
	 */

	public function applyAction();


	/**
	 * 刮刮卡  大转盘 领取页面
	 */

	public function getGameAward();

	/**
	 * 未中奖  提示页面
	 */

	public function  getBigWheelText();


	/**
	 *  中奖 领取方法
	 */
	public function getBigWheeSendAward();


}

?>