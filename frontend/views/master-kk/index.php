<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MasterKkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Peserta';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-kk-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Master Kk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'master_kk_id',
            'NIK',
            'NAMA',
            //'TGL_LAHIR',
            //'ALAMAT_RUMAH',
            // 'KOTA_RUMAH',
            // 'vESG',
            // 'TGL_MASUK',
            // 'TGL_PENSIUN',
            // 'TGL_CAPEG',
             'BAND_POSISI',
            // 'KLAS_POSISI',
            // 'cDIVISI',
            // 'vDIVISI',
             'LOKASI_KERJA',
            // 'PERSONALAREA',
            // 'PERSONALSUBAREA',
             'PENETAPAN_TPK_BERDASARKAN_TELECONFERENCE',
            // 'PERSADMIN',
             'YAKES_AREA',
            // 'NO_KARTU_KELUARGA',
            // 'NO_KTP',
            // 'NO_BPJS',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
