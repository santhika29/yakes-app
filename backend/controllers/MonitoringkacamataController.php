<?php

namespace backend\controllers;

use Yii;
use frontend\models\monitoringkacamata;


/**
* MonitoringkacamataController .
 */
class MonitoringkacamataController extends \yii\web\Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionUploadFile()
    {
        $model = new monitoringkacamata();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                return;
            }
        }

        return $this->render('upload-file', [
            'model' => $model,
        ]);
    }
}
