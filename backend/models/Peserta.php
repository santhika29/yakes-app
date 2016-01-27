<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "peserta".
 *
 * @property string $id
 * @property string $nikkes
 * @property string $nik
 * @property string $nama_kk
 * @property string $nama
 * @property string $band
 * @property integer $status_peserta_id
 *
 * @property MonitoringKacamata[] $monitoringKacamatas
 * @property StatusPeserta $statusPeserta
 */
class Peserta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'peserta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nikkes', 'nik', 'nama_kk', 'nama', 'band', 'status_peserta_id'], 'required'],
            [['status_peserta_id'], 'integer'],
            [['nikkes', 'nik'], 'string', 'max' => 10],
            [['nama_kk', 'nama'], 'string', 'max' => 45],
            [['band'], 'string', 'max' => 4],
            [['nikkes'], 'unique'],
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
            'nikkes' => 'Nikkes',
            'nik' => 'Nik',
            'nama_kk' => 'Nama Kk',
            'nama' => 'Nama',
            'band' => 'Band',
            'status_peserta_id' => 'Status Peserta ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMonitoringKacamatas()
    {
        return $this->hasMany(MonitoringKacamata::className(), ['nikkes' => 'nikkes']);
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
     * @return PesertaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PesertaQuery(get_called_class());
    }
}
