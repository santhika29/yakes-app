<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\MasterKk */

$this->title = $model->master_kk_id;
$this->params['breadcrumbs'][] = ['label' => 'Master Kks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-kk-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->master_kk_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->master_kk_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'master_kk_id',
            'NIK',
            'NAMA',
            'TGL_LAHIR',
            'ALAMAT_RUMAH',
            'KOTA_RUMAH',
            'vESG',
            'TGL_MASUK',
            'TGL_PENSIUN',
            'TGL_CAPEG',
            'BAND_POSISI',
            'KLAS_POSISI',
            'cDIVISI',
            'vDIVISI',
            'LOKASI_KERJA',
            'PERSONALAREA',
            'PERSONALSUBAREA',
            'PENETAPAN_TPK_BERDASARKAN_TELECONFERENCE',
            'PERSADMIN',
            'YAKES_AREA',
            'NO_KARTU_KELUARGA',
            'NO_KTP',
            'NO_BPJS',
        ],
    ]) ?>

</div>
