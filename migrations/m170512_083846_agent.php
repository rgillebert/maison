<?php

use yii\db\Migration;

class m170512_083846_agent extends Migration
{
    public function up()
    {
        echo 'create the agent table';
        $this->createTable('agent', [
            'agent_id' => $this->primaryKey(),
            'matricule' => $this->integer(),
            'nom' => $this->string(),
            'actionAgent_id' => $this->integer()]);
    }

    public function down()
    {
        echo 'drop the agent table';
        $this->dropTable('agent');

        return true;
    }

}
