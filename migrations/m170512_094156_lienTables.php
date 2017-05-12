<?php

use yii\db\Migration;

class m170512_094156_lienTables extends Migration
{
    public function up()
    {
       // add foreign key 1 for table actionAgent
        $this->addForeignKey(
            'fk-actionAgent_actionPO',
            'actionAgent',
            'actionAgent_idActionPO',
            'actionPO',
            'actionPO_id',
            'SET NULL'
        );
       // add foreign key 2 for table actionAgent
        $this->addForeignKey(
            'fk-actionAgent-agent',
            'actionAgent',
            'actionAgent_idAgent',
            'actionAgent',
            'actionAgent_id',
            'SET NULL'
        );
       // add foreign key for table actionPO
        $this->addForeignKey(
            'fk-actionPO-etage',
            'actionPO',
            'etage_id',
            'etage',
            'etage_id',
            'SET NULL'
        );

    }

    public function down()
    {
        echo "m170512_094156_lienTables cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
