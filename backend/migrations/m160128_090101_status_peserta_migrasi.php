<?php

use yii\db\Schema;

class m160128_090101_status_peserta_migrasi extends \yii\db\Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('status_peserta', [
            'id' => Schema::TYPE_PK,
            'status_peserta' => Schema::TYPE_STRING . '(45) NOT NULL',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('status_peserta');
    }
}
