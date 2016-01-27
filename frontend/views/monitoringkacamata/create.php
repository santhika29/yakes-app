<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\monitoringkacamata */

$this->title = 'Create Monitoringkacamata';
$this->params['breadcrumbs'][] = ['label' => 'Monitoringkacamatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monitoringkacamata-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
