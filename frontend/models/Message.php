<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "message".
 *
 * @property int $id
 * @property string|null $full_name
 * @property string|null $document
 * @property int|null $status
 * @property string|null $start_time
 * @property string|null $end_time
 * @property int|null $created_by
 * @property int|null $updated_by
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'message';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'created_by', 'updated_by'], 'integer'],
            [['start_time', 'end_time'], 'safe'],
            [['full_name', 'document'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name' => 'Full Name',
            'document' => 'Document',
            'status' => 'Status',
            'start_time' => 'Start Time',
            'end_time' => 'End Time',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
