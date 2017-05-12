<?php

use yii\db\Migration;

class m170512_100208_dropscolumns extends Migration
{
    public function up()
    {
        echo 'drop column actionAgent_id in table agent';
        $this->dropColumn('agent', 'actionAgent_id');
        
        echo 'drop column actionAgent_id in table actionPO';
        $this->dropColumn('actionPO', 'actionAgent_id');
    }

    public function down()
    {
        
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
