<?php

use yii\db\Schema;

class m160128_090101_hak_kacamata_migrasi extends \yii\db\Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('hak_kacamata', [
            'id' => Schema::TYPE_PK,
            'hak_kacamata' => Schema::TYPE_STRING . '(45) NOT NULL',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('hak_kacamata');
    }
}
