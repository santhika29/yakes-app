<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "plafon_kacamata".
 *
 * @property integer $id
 * @property integer $status_peserta_id
 * @property integer $hak_kacamata_id
 * @property string $band
 * @property string $biaya
 *
 * @property HakKacamata $hakKacamata
 * @property StatusPeserta $statusPeserta
 */
class PlafonKacamata extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'plafon_kacamata';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status_peserta_id', 'hak_kacamata_id', 'band'], 'required'],
            [['status_peserta_id', 'hak_kacamata_id'], 'integer'],
            [['biaya'], 'number'],
            [['band'], 'string', 'max' => 4],
            [['hak_kacamata_id'], 'exist', 'skipOnError' => true, 'targetClass' => HakKacamata::className(), 'targetAttribute' => ['hak_kacamata_id' => 'id']],
            [['status_peserta_id'], 'exist', 'skipOnError' => true, 'targetClass' => StatusPeserta::className(), 'targetAttribute' => ['status_peserta_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status_peserta_id' => 'Status Peserta ID',
            'hak_kacamata_id' => 'Hak Kacamata ID',
            'band' => 'Band',
            'biaya' => 'Biaya',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHakKacamata()
    {
        return $this->hasOne(HakKacamata::className(), ['id' => 'hak_kacamata_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatusPeserta()
    {
        return $this->hasOne(StatusPeserta::className(), ['id' => 'status_peserta_id']);
    }

    /**
     * @inheritdoc
     * @return PlafonKacamataQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PlafonKacamataQuery(get_called_class());
    }
}
