<?php

namespace backend\controllers;

use Yii;
use common\models\ZyImages;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

class ZyimagesController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionCreate() {
        $model = new ZyVideo();

        if ($model->load(Yii::$app->request->post())) {

            $upfile = UploadedFile::getInstance($model, "video_image");

            //文件上传存放的目录
            //$dir1= Yii::getAlias("@webroot") . "/upload/" . date("Ymd");
            $dir = Yii::getAlias("@frontend") . "/web/uploads/" . date("Ymd");


            if (!is_dir($dir))
                mkdir($dir, 0777, true);
            //if ($model->validate()) {//未验证
            //文件名
            $fileName = date("HiiHsHis") . $upfile->baseName . "." . $upfile->extension;

            $dir = $dir . "/" . $fileName;
            $upfile->saveAs($dir);
            $uploadSuccessPath = "/uploads/" . date("Ymd") . "/" . $fileName;
            //}
            $model->video_image = $uploadSuccessPath;
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->video_id]);
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ZyVideo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            $upfile = UploadedFile::getInstance($model, "video_image");

            //文件上传存放的目录
            //$dir = Yii::getAlias("@webroot") . "/upload/" . date("Ymd");
            $dir = Yii::getAlias("@frontend") . "/web/uploads/" . date("Ymd");
            //echo $dir;exit;
            if (!is_dir($dir))
                mkdir($dir, 0777, true);
            //if ($model->validate()) {//未验证
            //文件名
            $fileName = date("HiiHsHis") . $upfile->baseName . "." . $upfile->extension;

            $dir = $dir . "/" . $fileName;
            $upfile->saveAs($dir);
            $uploadSuccessPath = "/uploads/" . date("Ymd") . "/" . $fileName;
            //}
            $model->video_image = $uploadSuccessPath;

            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->video_id]);
            }
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ZyVideo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ZyVideo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ZyVideo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = ZyVideo::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}