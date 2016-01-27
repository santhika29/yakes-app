<?php

namespace frontend\models;

use Yii;
use backend\models\HakKacamata;
use backend\models\Peserta;

/**
 * This is the model class for table "monitoring_kacamata".
 *
 * @property string $id
 * @property string $nikkes
 * @property integer $hak_kacamata_id
 * @property string $tgl_ambil
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 *
 * @property HakKacamata $hakKacamata
 * @property Peserta $nikkes0
 */
class MonitoringKacamata extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'monitoring_kacamata';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nikkes', 'hak_kacamata_id', 'tgl_ambil', 'created_at', 'updated_at'], 'required'],
            [['hak_kacamata_id', 'created_by', 'updated_by'], 'integer'],
            [['tgl_ambil', 'created_at', 'updated_at'], 'safe'],
            [['nikkes'], 'string', 'max' => 10],
            [['hak_kacamata_id'], 'exist', 'skipOnError' => true, 'targetClass' => HakKacamata::className(), 'targetAttribute' => ['hak_kacamata_id' => 'id']],
            [['nikkes'], 'exist', 'skipOnError' => true, 'targetClass' => Peserta::className(), 'targetAttribute' => ['nikkes' => 'nikkes']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nikkes' => 'Nikkes',
            'hak_kacamata_id' => 'Hak Kacamata ID',
            'tgl_ambil' => 'Tgl Ambil',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
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
    public function getNikkes0()
    {
        return $this->hasOne(Peserta::className(), ['nikkes' => 'nikkes']);
    }

    /**
     * @inheritdoc
     * @return MonitoringKacamataQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MonitoringKacamataQuery(get_called_class());
    }

    public function getHakKacamataName()
    {
        return $this->hakKacamata->hak_kacamata;
    }
}
