<?php

use yii\db\Migration;

class m170512_084327_actionPO extends Migration
{
    public function up()
    {
        echo 'create the actionPO';
        $this->createTable('actionPO', [
            'actionPO_id' => $this->primaryKey(),
            'actionPO_annee' => $this->integer(),
            'actionPO_action' => $this->string(),
            'actionPO_description' => $this->string(),
            'etage_id' => $this->integer(),
            'actionAgent_id' => $this->integer()
        ]);
    }

    public function down()
    {
        echo "drop the ActionPO table";
        $this->dropTable('actionPO');
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
