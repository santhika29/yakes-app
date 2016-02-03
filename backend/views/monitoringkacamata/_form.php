<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\monitoringkacamata */
/* @var $form ActiveForm */
?>
<div class="monitoringkacamata">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'nikkes') ?>
        <?= $form->field($model, 'hak_kacamata_id') ?>
        <?= $form->field($model, 'tgl_ambil') ?>
        <?= $form->field($model, 'created_at') ?>
        <?= $form->field($model, 'updated_at') ?>
        <?= $form->field($model, 'created_by') ?>
        <?= $form->field($model, 'updated_by') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- monitoringkacamata -->
