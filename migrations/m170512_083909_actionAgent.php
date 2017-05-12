<?php

use yii\db\Migration;

class m170512_083909_actionAgent extends Migration
{
    public function up()
    {
        echo 'create the actionAgent table';
        $this->createTable('actionAgent', [
            'actionAgent_id' => $this->primaryKey(),
            'actionAgent_idAgent' => $this->integer()->notNull(),
            'actionAgent_idActionPO' => $this->integer()->notNull(),
            'actionAgent_ordre' => $this->integer()
        ]);

    }

    public function down()
    {
        echo 'drop the actionAgent table';
        $this->dropTable('actionAgent');
    
        return true;
    }


 
}
