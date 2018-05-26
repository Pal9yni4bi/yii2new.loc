<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m180526_100227_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id'            => $this->primaryKey(),
            'name'          => $this->string()->notNull(),
            'parent_id'     => $this->integer()->defaultValue(0),
            'description'   => $this->text()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('category');
    }
}
