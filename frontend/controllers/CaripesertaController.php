<?php

namespace frontend\controllers;

use backend\models\Peserta;
use backend\models\PlafonKacamata;
use frontend\models\MonitoringKacamata;
use yii\helpers\Json;
use yii\db\Query;

class CaripesertaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGetDataPeserta($nikkes)
    {
        $dataPeserta = Peserta::find()->where(['nikkes'=>$nikkes])->one();
        echo Json::encode($dataPeserta);
    }

    public function actionGetNikkesList($q = null)
    {
    	$query = new Query;

    	$query -> select('nikkes')
    		   -> from('peserta')
    		   -> where('nikkes LIKE "' . $q .'%"')
    		   -> orderby('nikkes');

    	$command = $query->createCommand();
    	$data = $command->queryAll();

        //$out = "";
    	foreach ($data as $d) {
    		# code...
    		$out[] = ['value' => $d['nikkes']];
    	}

    	//echo Json::encode((!empty($out)? $out : null));
        echo Json::encode($out);
    }

    public function actionGetDataPlafon($hak_kacamata_id,$band = null ,$status_peserta_id = null)
    {
        $dataPlafon = PlafonKacamata::find()
                    ->where(['hak_kacamata_id'=>$hak_kacamata_id])
                    ->andWhere(['band'=>$band])
                    ->andWhere(['status_peserta_id'=>$status_peserta_id])
                    ->one();
        echo Json::encode($dataPlafon);
    }

    public function actionGetLastDate($nikkes)
    {

        $query = new Query;

    	$query -> select('*')
    		   -> from('monitoring_kacamata')
    		   -> where('nikkes LIKE "' . $nikkes .'"')
    		   -> orderby('tgl_ambil DESC')
               -> limit(3);

    	$command = $query->createCommand();
    	$data = $command->queryAll();

        //$out = "";
    	foreach ($data as $d) {
    		# code...
    		$out[] = ['nikkes' => $d['nikkes'],'tgl_ambil' => $d['tgl_ambil'],'hak' => $d['hak_kacamata_id']];
    	}

    	echo Json::encode((!empty($out)? $out : null));
        //echo Json::encode($out);
    }

}
