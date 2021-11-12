<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "employees".
 *
 * @property int $id
 * @property int|null $company_id
 * @property string|null $name
 * @property string|null $age
 * @property string|null $gender
 * @property string|null $content
 * @property Companies $company
 */
class Employees extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employees';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_id'], 'integer'],
            [['content'], 'string'],
            [['name', 'age'], 'string', 'max' => 255],
            [['gender'], 'string', 'max' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_id' => 'Company ID',
            'name' => 'Name',
            'age' => 'Age',
            'gender' => 'Gender',
            'content' => 'Content',
        ];
    }

    public function getCompany()
    {
        return $this->hasOne(Companies::className(), ['id' => 'company_id']);
    }
}
