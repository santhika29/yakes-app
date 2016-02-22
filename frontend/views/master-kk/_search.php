<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MasterKkSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="master-kk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'master_kk_id') ?>

    <?= $form->field($model, 'NIK') ?>

    <?= $form->field($model, 'NAMA') ?>

    <?= $form->field($model, 'TGL_LAHIR') ?>

    <?= $form->field($model, 'ALAMAT_RUMAH') ?>

    <?php // echo $form->field($model, 'KOTA_RUMAH') ?>

    <?php // echo $form->field($model, 'vESG') ?>

    <?php // echo $form->field($model, 'TGL_MASUK') ?>

    <?php // echo $form->field($model, 'TGL_PENSIUN') ?>

    <?php // echo $form->field($model, 'TGL_CAPEG') ?>

    <?php // echo $form->field($model, 'BAND_POSISI') ?>

    <?php // echo $form->field($model, 'KLAS_POSISI') ?>

    <?php // echo $form->field($model, 'cDIVISI') ?>

    <?php // echo $form->field($model, 'vDIVISI') ?>

    <?php // echo $form->field($model, 'LOKASI_KERJA') ?>

    <?php // echo $form->field($model, 'PERSONALAREA') ?>

    <?php // echo $form->field($model, 'PERSONALSUBAREA') ?>

    <?php // echo $form->field($model, 'PENETAPAN_TPK_BERDASARKAN_TELECONFERENCE') ?>

    <?php // echo $form->field($model, 'PERSADMIN') ?>

    <?php // echo $form->field($model, 'YAKES_AREA') ?>

    <?php // echo $form->field($model, 'NO_KARTU_KELUARGA') ?>

    <?php // echo $form->field($model, 'NO_KTP') ?>

    <?php // echo $form->field($model, 'NO_BPJS') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
