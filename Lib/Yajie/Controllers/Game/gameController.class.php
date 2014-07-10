<?php

class gameController extends maingameController {

    public function getBigWheeSendAward() {

        $this->setDir('Public');

        if (!empty($_REQUEST['gift_id']) && !empty($_REQUEST['open_id'])) {

            $awardResult = P('gift')->sendUserGift($_REQUEST['gift_id'], $_REQUEST['open_id'], $_REQUEST['gift_type']);

            P('gift')->addCardRecord($_REQUEST['gift_id'], $_REQUEST['open_id'], $_REQUEST['gift_type']);

            /**
             * 如存在 则 兑换的内容为虚拟的内容
             */
            if (!empty($awardResult['exchange_record'])) {

                $this->assign('title', '领取结果');

                $this->assign('name', '恭喜你 你兑换了一个虚拟的物品');

                $this->display('result');

                die;
            }

            if (!empty($awardResult['jump'])) {


                $url = WebSiteUrl . '?g=' . SOURCE . '&a=user&v=changeGoods&goodsId=' . $awardResult['info']['exchange_id'] . '&open_id=' . $_REQUEST['open_id'];

                echo '<script>window.location.href="' . $url . '"</script>';

                die;
            }

            /**
             * 如存在 则标示 用户领取的 为积分
             */
            if (!empty($awardResult['user']['user_integration'])) {

                $this->assign('title', '领取结果');
                $this->assign('name', '恭喜你 你获得了' . $awardResult['record']['fraction'] . '积分');

                $this->display('result');

                die;
            }


            /**
             * 优惠券
             */
            if (!empty($awardResult['code']['promo_code_id'])) {

                $this->assign('title', '领取结果');

                $this->assign('awardtype', 1);


                $this->assign('name', '恭喜你 你获得了优惠券');


                $this->assign('textName', '优惠码为' . $awardResult['code']['code_name']);

                $this->display('result');

                die;
            }
        } else {
            $this->assign('title', '提示');
            $this->assign('name', '用户未注册 或  礼品不存在');

            $this->display('result');

            die;
        }
    }

}

?>