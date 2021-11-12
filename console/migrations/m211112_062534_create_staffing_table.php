<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%staffing}}`.
 */
class m211112_062534_create_staffing_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%staffing}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%staffing}}');
    }
}
