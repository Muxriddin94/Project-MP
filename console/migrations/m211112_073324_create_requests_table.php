<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%requests}}`.
 */
class m211112_073324_create_requests_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%requests}}', [
            'id' => $this->primaryKey(),
            'user_id'=>$this->integer(),
            'full_name'=>$this->string(),
            'document_type'=>$this->string(),
            'document_number'=>$this->string(),
            'status'=>$this->string(),
            'start_time'=>$this->timestamp(),
            'end_time'=>$this->timestamp(),
            'comment'=>$this->text(),
            'message'=>$this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%requests}}');
    }
}
