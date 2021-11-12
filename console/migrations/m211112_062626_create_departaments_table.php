<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%departaments}}`.
 */
class m211112_062626_create_departaments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%departaments}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%departaments}}');
    }
}
