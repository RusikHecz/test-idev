<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%todo}}`.
 */
class m230322_111203_add_version_column_to_todo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('todo', 'version', $this->integer()->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('todo', 'version');
    }
}
