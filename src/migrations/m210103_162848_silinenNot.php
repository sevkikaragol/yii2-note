<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m210103_162848_silinenNot
 */
class m210103_162848_silinenNot extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->createTable('silinenNot', [
            'id' => Schema::TYPE_PK,
            // $this->primaryKey()
            'name' => Schema::TYPE_STRING ,
            // $this->string(255) // String with 255 characters
            'body' => Schema::TYPE_TEXT,

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable('silinenNot');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210103_162848_silinenNot cannot be reverted.\n";

        return false;
    }
    */
}
