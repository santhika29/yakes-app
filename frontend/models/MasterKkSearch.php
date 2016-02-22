<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\MasterKk;

/**
 * MasterKkSearch represents the model behind the search form about `backend\models\MasterKk`.
 */
class MasterKkSearch extends MasterKk
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['master_kk_id', 'YAKES_AREA'], 'integer'],
            [['NIK', 'NAMA', 'TGL_LAHIR', 'ALAMAT_RUMAH', 'KOTA_RUMAH', 'vESG', 'TGL_MASUK', 'TGL_PENSIUN', 'TGL_CAPEG', 'BAND_POSISI', 'KLAS_POSISI', 'cDIVISI', 'vDIVISI', 'LOKASI_KERJA', 'PERSONALAREA', 'PERSONALSUBAREA', 'PENETAPAN_TPK_BERDASARKAN_TELECONFERENCE', 'PERSADMIN', 'NO_KARTU_KELUARGA', 'NO_KTP', 'NO_BPJS'], 'safe'],
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
        $query = MasterKk::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);
        if (!$this->validate()) {
            $query->where('1=0');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'master_kk_id' => $this->master_kk_id,
            'TGL_LAHIR' => $this->TGL_LAHIR,
            'TGL_MASUK' => $this->TGL_MASUK,
            'TGL_PENSIUN' => $this->TGL_PENSIUN,
            'TGL_CAPEG' => $this->TGL_CAPEG,
            'YAKES_AREA' => $this->YAKES_AREA,
        ]);

        $query->andFilterWhere(['like', 'NIK', $this->NIK])
            ->andFilterWhere(['like', 'NAMA', $this->NAMA])
            ->andFilterWhere(['like', 'ALAMAT_RUMAH', $this->ALAMAT_RUMAH])
            ->andFilterWhere(['like', 'KOTA_RUMAH', $this->KOTA_RUMAH])
            ->andFilterWhere(['like', 'vESG', $this->vESG])
            ->andFilterWhere(['like', 'BAND_POSISI', $this->BAND_POSISI])
            ->andFilterWhere(['like', 'KLAS_POSISI', $this->KLAS_POSISI])
            ->andFilterWhere(['like', 'cDIVISI', $this->cDIVISI])
            ->andFilterWhere(['like', 'vDIVISI', $this->vDIVISI])
            ->andFilterWhere(['like', 'LOKASI_KERJA', $this->LOKASI_KERJA])
            ->andFilterWhere(['like', 'PERSONALAREA', $this->PERSONALAREA])
            ->andFilterWhere(['like', 'PERSONALSUBAREA', $this->PERSONALSUBAREA])
            ->andFilterWhere(['like', 'PENETAPAN_TPK_BERDASARKAN_TELECONFERENCE', $this->PENETAPAN_TPK_BERDASARKAN_TELECONFERENCE])
            ->andFilterWhere(['like', 'PERSADMIN', $this->PERSADMIN])
            ->andFilterWhere(['like', 'NO_KARTU_KELUARGA', $this->NO_KARTU_KELUARGA])
            ->andFilterWhere(['like', 'NO_KTP', $this->NO_KTP])
            ->andFilterWhere(['like', 'NO_BPJS', $this->NO_BPJS]);

        return $dataProvider;
    }
}
