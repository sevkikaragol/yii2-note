<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m210101_232218_not
 */
class m210101_232218_not extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->createTable('not', [
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
        return $this->dropTable('not');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210101_232218_not cannot be reverted.\n";

        return false;
    }
    */
}
