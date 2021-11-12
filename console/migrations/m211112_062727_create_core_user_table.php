<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%core_user}}`.
 */
class m211112_062727_create_core_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%core_user}}', [
            'id' => $this->primaryKey(),
            'department_id'=>$this->integer(),
            'staffing_id'=>$this->integer(),
            'full_name'=>$this->string(),
            'phone'=>$this->string(),
            'room'=>$this->string(),
            'condition'=>$this->string(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%core_user}}');
    }
}
