<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MasterKk */

$this->title = 'Update Master Kk: ' . ' ' . $model->master_kk_id;
$this->params['breadcrumbs'][] = ['label' => 'Master Kks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->master_kk_id, 'url' => ['view', 'id' => $model->master_kk_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-kk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
