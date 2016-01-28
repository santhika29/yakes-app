<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MonitoringKacamataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Monitoring kacamata';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monitoringkacamata-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'pjax' => true,
        'containerOptions'=>['style'=>'overflow: auto'], // only set when $responsive = false
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

            //'id',
            'nikkes',
            [
                'attribute' => 'hak_kacamata_id',
                'label' => 'Hak Kacamata',
                'filter' => $searchModel->hakKacamataList,
                'filterType' => GridView::FILTER_SELECT2,
                'value' => function ($data) {
                    return '<code>'.$data->hakKacamataName.'</code>';
                },
                'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                ],
                'filterInputOptions'=>['placeholder'=>'Hak Kacamata'],
                'format' => 'raw',
            ],
            [
                'attribute' => 'tgl_ambil',
                'label' => 'Tanggal Pengambilan',
                'filterType' => GridView::FILTER_DATE,
                'filterWidgetOptions' => [
                    'options' => ['placeholder' => 'Enter date ...'], 
                    'type' => \kartik\widgets\DatePicker::TYPE_COMPONENT_APPEND,
                    'removeButton' => false,
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => 'dd-mm-yyyy'
                    ],
                ],
                'width' => '20%',
                'format' => 'date',
            ],
            //'created_at',
            // 'updated_at',
            // 'created_by',
            // 'updated_by',

            ['class' => 'kartik\grid\ActionColumn'],
        ],
        'panel'=>[
            'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-th-large"></i> Monitoring Kacamata</h3>',
            'type' => GridView::TYPE_WARNING,
        ],
        //set the toolbar
        'toolbar' => [
            ['content' =>
                Html::button('<i class="fa fa-plus"></i>',[
                    'type' => 'button', 
                    'title' => 'Add Monitoring Kacamata',
                    'class' => 'btn btn-success',
                    'onClick' => 'location.href=window.location.href + "/create"',
                    ]).''.
                Html::a('<i class="fa fa-repeat"></i>',['/monitoringkacamata'],['data-pjax' => 0, 'class' => 'btn btn-default', 'title' => 'Reset'])
            ],
            //'{toggleData}',
        ],
        'hover' => true,
        'bordered' => true,
        'condensed' => true,
        'striped' => false,
        'responsive' => true,
    ]); ?>

</div>
