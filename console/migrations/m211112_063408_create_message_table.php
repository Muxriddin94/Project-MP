<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%message}}`.
 */
class m211112_063408_create_message_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%message}}', [
            'id' => $this->primaryKey(),
            'full_name'=>$this->string(),
            'document'=>$this->string(),
            'status'=>$this->integer(),
            'start_time'=>$this->timestamp(),
            'end_time'=>$this->timestamp(),
            'created_by'=>$this->integer(),
            'updated_by'=>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%message}}');
    }
}
