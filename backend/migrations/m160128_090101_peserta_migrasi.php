<?php

use yii\db\Schema;

class m160128_090101_peserta_migrasi extends \yii\db\Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('peserta', [
            'id' => Schema::TYPE_PK,
            'nikkes' => Schema::TYPE_STRING . '(10) NOT NULL',
            'nik' => Schema::TYPE_STRING . '(10) NOT NULL',
            'nama_kk' => Schema::TYPE_STRING . '(45) NOT NULL',
            'nama' => Schema::TYPE_STRING . '(45) NOT NULL',
            'band' => Schema::TYPE_STRING . '(4) NOT NULL',
            'status_peserta_id' => Schema::TYPE_SMALLINT . '(6) NOT NULL',
            'FOREIGN KEY ([[status_peserta_id]]) REFERENCES status_peserta ([[id]]) ON DELETE CASCADE ON UPDATE CASCADE',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('peserta');
    }
}
