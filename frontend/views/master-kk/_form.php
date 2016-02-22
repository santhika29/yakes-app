<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MasterKk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="master-kk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NIK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NAMA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TGL_LAHIR')->textInput() ?>

    <?= $form->field($model, 'ALAMAT_RUMAH')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KOTA_RUMAH')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vESG')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TGL_MASUK')->textInput() ?>

    <?= $form->field($model, 'TGL_PENSIUN')->textInput() ?>

    <?= $form->field($model, 'TGL_CAPEG')->textInput() ?>

    <?= $form->field($model, 'BAND_POSISI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KLAS_POSISI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cDIVISI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vDIVISI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LOKASI_KERJA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PERSONALAREA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PERSONALSUBAREA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PENETAPAN_TPK_BERDASARKAN_TELECONFERENCE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PERSADMIN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'YAKES_AREA')->textInput() ?>

    <?= $form->field($model, 'NO_KARTU_KELUARGA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NO_KTP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NO_BPJS')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
