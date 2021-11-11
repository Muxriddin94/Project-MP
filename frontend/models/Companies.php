<?php

namespace frontend\models;

use Yii;
use yii\behaviors\AttributeBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "companies".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $adress
 * @property string|null $phone_number
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Companies extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => 'created_at',
                    ActiveRecord::EVENT_BEFORE_UPDATE => 'updated_at'
                ],
                'value' => new Expression('NOW()')
            ],
        ];
    }
//
//    public function beforeSave($insert)
//    {
//        $this->setAttribute('created_at', date('Y-m-d H:i:s'));
//        $this->setAttribute('updated_at', date('Y-m-d H:i:s'));
//    }

    public static function tableName()
    {
        return 'companies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'adress', 'phone_number'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'adress' => 'Adress',
            'phone_number' => 'Phone Number',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
