<?php

use yii\db\Schema;

class m160128_090101_monitoring_kacamata_migrasi extends \yii\db\Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('monitoring_kacamata', [
            'id' => Schema::TYPE_PK,
            'nikkes' => Schema::TYPE_STRING . '(10) NOT NULL',
            'hak_kacamata_id' => Schema::TYPE_SMALLINT . '(6) NOT NULL',
            'tgl_ambil' => Schema::TYPE_DATE . ' NOT NULL',
            'created_at' => Schema::TYPE_DATETIME . ' NOT NULL',
            'updated_at' => Schema::TYPE_DATETIME . ' NOT NULL',
            'created_by' => Schema::TYPE_SMALLINT . '(6)',
            'updated_by' => Schema::TYPE_SMALLINT . '(6)',
            'FOREIGN KEY ([[hak_kacamata_id]]) REFERENCES hak_kacamata ([[id]]) ON DELETE CASCADE ON UPDATE CASCADE',
            'FOREIGN KEY ([[nikkes]]) REFERENCES peserta ([[nikkes]]) ON DELETE CASCADE ON UPDATE CASCADE',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('monitoring_kacamata');
    }
}
