<?php

use yii\db\Migration;

class m170512_083904_etage extends Migration
{
    public function up()
    {
        echo 'create the etage table';
        $this->createTable('etage', [
            'etage_id' => $this->primarykey(),
            'etage_description' => $this->string()->notNull()
        ]);
    }

    public function down()
    {
        //echo "m170512_083904_etage cannot be reverted.\n";
        echo 'drop the etage table';
        $this->dropTable('etage');
        return true;
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
