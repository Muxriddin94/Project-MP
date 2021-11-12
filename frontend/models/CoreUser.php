<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "core_user".
 *
 * @property int $id
 * @property int|null $department_id
 * @property int|null $staffing_id
 * @property string|null $full_name
 * @property string|null $phone
 * @property string|null $room
 * @property Staffing $staffing
 * @property Departaments $department
 * @property string|null $condition
 */
class CoreUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'core_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['department_id', 'staffing_id'], 'integer'],
            [['full_name', 'phone', 'room'], 'string', 'max' => 255],
            [['condition'], 'string', 'max' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'department_id' => 'Department ID',
            'staffing_id' => 'Staffing ID',
            'full_name' => 'Full Name',
            'phone' => 'Phone',
            'room' => 'Room',
            'condition' => 'Condition',
        ];
    }

    public function getStaffing()
    {
        return $this->hasOne(Staffing::className(), ['id' => 'staffing_id']);
    }

    public function getDepartment()
    {
        return $this->hasOne(Departaments::className(), ['id' => 'department_id']);
    }
}
