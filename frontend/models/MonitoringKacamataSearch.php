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
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'hak_kacamata_id', 'created_by', 'updated_by'], 'integer'],
            [['nikkes', 'tgl_ambil', 'created_at', 'updated_at'], 'safe'],
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
        $query = monitoringkacamata::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);
        if (!$this->validate()) {
            $query->where('1=0');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'hak_kacamata_id' => $this->hak_kacamata_id,
            'tgl_ambil' => $this->tgl_ambil,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'nikkes', $this->nikkes]);

        return $dataProvider;
    }

    public function getHakKacamataList()
    {
        $dropOptions = \backend\models\HakKacamata::find()->asArray()->all();
        return ArrayHelper::map($dropOptions,'id','hak_kacamata');
    }
}
