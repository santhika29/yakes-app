<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\monitoringkacamata;
use yii\helpers\ArrayHelper;

/**
 * MonitoringKacamataSearch represents the model behind the search form about `frontend\models\monitoringkacamata`.
 */
class MonitoringKacamataSearch extends monitoringkacamata
{

    public $nikkes0;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'hak_kacamata_id'], 'integer'],
            [['nikkes', 'tgl_ambil'], 'safe'],
            //rules tambahan
            [['nikkes0'],'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = monitoringkacamata::find()->orderBy("tgl_ambil DESC");

        $query->joinWith(['nikkes0']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['nikkes0'] = [
            'asc' => ['peserta.nama' => SORT_ASC],
            'desc' => ['peserta.nama' => SORT_DESC],
        ];

        $this->load($params);
        if (!$this->validate()) {
            $query->where('1=0');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'hak_kacamata_id' => $this->hak_kacamata_id,
            'tgl_ambil' => $this->tgl_ambil,
        ]);

        $query->andFilterWhere(['like', 'monitoring_kacamata.nikkes', $this->nikkes])
              ->andFilterWhere(['like','peserta.nama',$this->nikkes0]);

        return $dataProvider;
    }

    public function getHakKacamataList()
    {
        $dropOptions = \backend\models\HakKacamata::find()->asArray()->all();
        return ArrayHelper::map($dropOptions,'id','hak_kacamata');
    }
}
