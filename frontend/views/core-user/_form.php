<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\CoreUser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="core-user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'department_id')->dropDownList(\yii\helpers\ArrayHelper::map(\frontend\models\Departaments::find()->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'staffing_id')->dropDownList(\yii\helpers\ArrayHelper::map(\frontend\models\Staffing::find()->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'room')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'condition')->dropdownList([
            'A' => 'Active',
            'P' => 'Passive'
        ]
    ); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
