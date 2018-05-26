<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m180526_100405_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product', [
            'id'            => $this->primaryKey(),
            'name'          => $this->string()->notNull(),
            'parent_id'     => $this->integer()->defaultValue(0), // родительская категория
            'description'   => $this->text(),
            'old_price'     => $this->integer(),
            'price'         => $this->integer(),
            'amount'        => $this->integer()->unsigned() // остаток на складе
        ]);

        $this->addForeignKey('product_to_category', 'product', 'parent_id', 'category', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product');
    }
}
