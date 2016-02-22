<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "master_kk".
 *
 * @property string $master_kk_id
 * @property string $NIK
 * @property string $NAMA
 * @property string $TGL_LAHIR
 * @property string $ALAMAT_RUMAH
 * @property string $KOTA_RUMAH
 * @property string $vESG
 * @property string $TGL_MASUK
 * @property string $TGL_PENSIUN
 * @property string $TGL_CAPEG
 * @property string $BAND_POSISI
 * @property string $KLAS_POSISI
 * @property string $cDIVISI
 * @property string $vDIVISI
 * @property string $LOKASI_KERJA
 * @property string $PERSONALAREA
 * @property string $PERSONALSUBAREA
 * @property string $PENETAPAN_TPK_BERDASARKAN_TELECONFERENCE
 * @property string $PERSADMIN
 * @property integer $YAKES_AREA
 * @property string $NO_KARTU_KELUARGA
 * @property string $NO_KTP
 * @property string $NO_BPJS
 */
class MasterKk extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'master_kk';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NIK'], 'required'],
            [['TGL_LAHIR', 'TGL_MASUK', 'TGL_PENSIUN', 'TGL_CAPEG'], 'safe'],
            [['YAKES_AREA'], 'integer'],
            [['NIK', 'vESG', 'BAND_POSISI', 'cDIVISI', 'PERSONALAREA', 'PERSADMIN'], 'string', 'max' => 12],
            [['NAMA'], 'string', 'max' => 125],
            [['ALAMAT_RUMAH', 'KLAS_POSISI'], 'string', 'max' => 255],
            [['KOTA_RUMAH', 'vDIVISI', 'PERSONALSUBAREA', 'NO_KARTU_KELUARGA', 'NO_KTP', 'NO_BPJS'], 'string', 'max' => 25],
            [['LOKASI_KERJA'], 'string', 'max' => 145],
            [['PENETAPAN_TPK_BERDASARKAN_TELECONFERENCE'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'master_kk_id' => 'Master Kk ID',
            'NIK' => 'Nik',
            'NAMA' => 'Nama',
            'TGL_LAHIR' => 'Tgl  Lahir',
            'ALAMAT_RUMAH' => 'Alamat  Rumah',
            'KOTA_RUMAH' => 'Kota  Rumah',
            'vESG' => 'V Esg',
            'TGL_MASUK' => 'Tgl  Masuk',
            'TGL_PENSIUN' => 'Tgl  Pensiun',
            'TGL_CAPEG' => 'Tgl  Capeg',
            'BAND_POSISI' => 'Band  Posisi',
            'KLAS_POSISI' => 'Klas  Posisi',
            'cDIVISI' => 'C Divisi',
            'vDIVISI' => 'V Divisi',
            'LOKASI_KERJA' => 'Lokasi  Kerja',
            'PERSONALAREA' => 'Personalarea',
            'PERSONALSUBAREA' => 'Personalsubarea',
            'PENETAPAN_TPK_BERDASARKAN_TELECONFERENCE' => 'Penetapan  Tpk  Berdasarkan  Teleconference',
            'PERSADMIN' => 'Persadmin',
            'YAKES_AREA' => 'Yakes  Area',
            'NO_KARTU_KELUARGA' => 'No  Kartu  Keluarga',
            'NO_KTP' => 'No  Ktp',
            'NO_BPJS' => 'No  Bpjs',
        ];
    }

    /**
     * @inheritdoc
     * @return MasterKkQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MasterKkQuery(get_called_class());
    }
}
