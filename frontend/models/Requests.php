<?php

namespace frontend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "requests".
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $full_name
 * @property string|null $document_type
 * @property string|null $document_number
 * @property string|null $status
 * @property string|null $start_time
 * @property string|null $end_time
 * @property string|null $comment
 * @property string|null $message
 * @property CoreUser $user
 */
class Requests extends \yii\db\ActiveRecord
{

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => 'start_time',
                    ActiveRecord::EVENT_BEFORE_UPDATE => 'end_time'
                ],
                'value' => new Expression('NOW()')
            ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'requests';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['start_time', 'end_time'], 'safe'],
            [['comment', 'message'], 'string'],
            [['full_name', 'document_type', 'document_number', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'full_name' => 'Full Name',
            'document_type' => 'Document Type',
            'document_number' => 'Document Number',
            'status' => 'Status',
            'start_time' => 'Start Time',
            'end_time' => 'End Time',
            'comment' => 'Comment',
            'message' => 'Message',
        ];
    }

    public function getUser()
    {
        return $this->hasOne(CoreUser::className(), ['id' => 'user_id']);
    }
}
