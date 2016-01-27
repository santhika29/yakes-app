<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MonitoringKacamataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Monitoring kacamata';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monitoringkacamata-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Monitoring kacamata', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nikkes',
            [
                'attribute' => 'hak_kacamata_id',
                'label' => 'Hak Kacamata',
                'filter' => $searchModel->hakKacamataList,
                'value' => function ($data) {
                    return $data->hakKacamataName;
                },
            ],
            'tgl_ambil',
            'created_at',
            // 'updated_at',
            // 'created_by',
            // 'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
