<?php

use yii\db\Schema;

class m160128_090101_plafon_kacamata_migrasi extends \yii\db\Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('plafon_kacamata', [
            'id' => Schema::TYPE_PK,
            'status_peserta_id' => Schema::TYPE_SMALLINT . '(6) NOT NULL',
            'hak_kacamata_id' => Schema::TYPE_SMALLINT . '(6) NOT NULL',
            'band' => Schema::TYPE_STRING . '(4) NOT NULL',
            'biaya' => Schema::TYPE_DECIMAL . '(10,0)',
            'FOREIGN KEY ([[hak_kacamata_id]]) REFERENCES hak_kacamata ([[id]]) ON DELETE CASCADE ON UPDATE CASCADE',
            'FOREIGN KEY ([[status_peserta_id]]) REFERENCES status_peserta ([[id]]) ON DELETE CASCADE ON UPDATE CASCADE',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('plafon_kacamata');
    }
}
