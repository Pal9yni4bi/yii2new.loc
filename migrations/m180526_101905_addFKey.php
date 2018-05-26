<?php

use yii\db\Migration;

/**
 * Class m180526_101905_addFKey
 */
class m180526_101905_addFKey extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('category_to_category', 'category', 'parent_id', 'category', 'id');
        $this->addColumn('category', 'title', 'integer');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180526_101905_addFKey cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180526_101905_addFKey cannot be reverted.\n";

        return false;
    }
    */
}
