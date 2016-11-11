<?php

namespace backend\controllers;

use yii\web\Controller;
use bacend\models;
use yii\web\UploadedFile;
use yii;

class ZyStyleImgController extends controller {

    public function beforeAction($action) {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    public function actionIndex() {

        $model = \common\models\ZyStyleImg::find()->all();
        $_res = [];
        foreach ($model as $k => $v) {
            $_res[$v['style_id']][] = $v;
        }

        return $this->render("index", [
                    "model" => $model,
                    "styleRes" => \common\util\StyleExt::$_config,
                    "allRes" => $_res
        ]);
    }

    public function actionAdd() {
        $obj = new \common\models\ZyStyleImg();
        $obj->img_url = $this->_UploadImage();
        $obj->style_id = Yii::$app->request->get('sId');
        $obj->create_time = date('Y-m-d H:i:s');
        $rs = $obj->save();
        echo json_encode(['code' => 1, 'msg' => ['id' => $obj->id, 'imgurl' => $obj->img_url]]);
        exit();
    }

    public function _UploadImage() {
        if (empty($_FILES)) {
            echo json_encode(['code' => 101, 'msg' => '没有要上传的文件']);
            exit();
        }

        $_strFile = '';
        foreach ($_FILES as $k => $v) {
            $_strFile = $k;
            break;
        }

        $_fileType = strtolower($_FILES[$_strFile]["type"]);

        if (( $_fileType == "image/gif") || ($_fileType == "image/jpeg") || ($_fileType == "image/pjpeg") || ($_fileType == "image/png")) {
            if ($_FILES[$_strFile]["error"] > 0) {
                
            } else {
                $dir = Yii::getAlias("@frontend") . "/web/uploads/" . date("Ymd");
                if (!is_dir($dir))
                    mkdir($dir, 0777, true);


                $_endFileExt = pathinfo($_FILES[$_strFile]['name']);

                $_rnd = \common\controllers\BaseController::getRandomString();
                $fileName = date("HiiHsHis") . $_rnd . "." . $_endFileExt['extension'];

                $dirimg = $dir . "/" . $fileName;

                $res = move_uploaded_file($_FILES[$_strFile]["tmp_name"], $dirimg);
                if ($res) {
                    return '/uploads/' . date("Ymd") . '/' . $fileName;
                } else {
                    echo json_encode(['code' => 102, 'msg' => '保存文件失败']);
                }
            }
        } else {
            echo json_encode(['code' => 101, 'msg' => '文件类型错误']);
        }
        exit();
    }

    public function actionDel() {
        $_id = Yii::$app->request->post('id');

        \common\models\ZyStyleImg::findOne($_id)->delete();
        
        echo 1;
    }

}
