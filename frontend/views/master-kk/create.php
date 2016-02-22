<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\MasterKk */

$this->title = 'Create Master Kk';
$this->params['breadcrumbs'][] = ['label' => 'Master Kks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-kk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
