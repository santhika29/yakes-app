<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\monitoringkacamata */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="monitoringkacamata-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nikkes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hak_kacamata_id')->textInput() ?>

    <?= $form->field($model, 'tgl_ambil')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
