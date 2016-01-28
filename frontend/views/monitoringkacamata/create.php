<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\monitoringkacamata */

$this->title = 'Create Monitoring kacamata';
$this->params['breadcrumbs'][] = ['label' => 'Monitoring kacamata', 'url' => ['/monitoringkacamata']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monitoringkacamata-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
