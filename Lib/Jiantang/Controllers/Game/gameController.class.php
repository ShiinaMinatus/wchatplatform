<?php

class gameController extends maingameController implements jiantanggame {

    public function uploadQuestion() {

        $postDate["source"] = SOURCE;

        $postDate['open_id'] = $this->userOpenId;

        $postDate['field'] = $_REQUEST['title'];

        $array = explode(',', $_REQUEST['title']);

        foreach ($array as $key => $value) {

            if (empty($_REQUEST[$value])) {

                $state = '第' . $value . '题必须填写';

                echo 'alert("' . $state . '");';

                die;
            }

            $postDate['quesion_' . $value] = $_REQUEST[$value];
        }
        $quesionResultJson = transferData(APIURL . "/question/add_question", "post", $postDate);

        $quesionResultArray = json_decode($quesionResultJson, true);
        $quersionPoint = $quesionResultArray["fraction"];
        if ($quersionPoint >= 71) {
            $message = "您的分数为：" . $quersionPoint . "分<br>您脊椎良好需保持，建议定期脊椎保养。";
        } else if ($quersionPoint >= 51) {
            $message = "您的分数为：" . $quersionPoint . "分<br>您有轻微脊椎问题。";
        } else if ($quersionPoint >= 40) {
            $message = "您的分数为：" . $quersionPoint . "分<br>您有脊椎問題严重。";
        } else {
            $this->displayMessage("统计问卷时出错请重试");
        }
        $message.="<br>&nbsp;&nbsp;以上分数仅限于测试题目结果对比，脊椎问题的诱发原因是多种的，只要身体有各种酸、麻、胀、痛等症状，均有可能是脊椎错位导致的，需通过专业方法检测才能得出最终结果。";
        $this->assign("message", $message);
        $this->display('questionUpload');
    }

}

?>