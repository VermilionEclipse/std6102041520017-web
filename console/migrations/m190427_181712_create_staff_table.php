<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%staff}}`.
 */
class m190427_181712_create_staff_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%staff}}', [
            'id' => $this->primaryKey(),
            'staff_no' => $this ->string(10),
            'f_name' => $this->string(100),
            'l_name' => $this->string(100),
            'position' => $this->string(100),
            'sex' => $this->string(10),
            'd_o_b' => $this->date(),
            'salary' => $this->decimal(7,2),
            'branch_id' => $this->integer(11)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%staff}}');
    }
}
