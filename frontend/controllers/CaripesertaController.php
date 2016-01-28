<?php

namespace frontend\controllers;

use backend\models\Peserta;
use backend\models\search\PesertaSearch;
use backend\models\PlafonKacamata;
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
    		   -> where('nikkes LIKE "%' . $q .'%"')
    		   -> orderby('nikkes');

    	$command = $query->createCommand();
    	$data = $command->queryAll();

    	foreach ($data as $d) {
    		# code...
    		$out[] = ['value' => $d['nikkes']];
    	}

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

}
