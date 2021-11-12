<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Requests */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requests-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->dropDownList(\yii\helpers\ArrayHelper::map(\frontend\models\CoreUser::find()->all(), 'id', 'full_name')) ?>

    <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'document_type')->dropdownList([
            'P' => 'Passport',
            'G' => 'Guvohnoma',
            'A' => 'Prava'
        ]
    ); ?>
    <?= $form->field($model, 'document_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropdownList([
            1 => 'Keldi',
            2 => 'Kirdi',
            3 => 'Chiqdi',
            4 => 'Otkaz',
        ]
    ); ?>

    <!--    --><? //= $form->field($model, 'start_time')->textInput() ?>
    <!---->
    <!--    --><? //= $form->field($model, 'end_time')->textInput() ?>

    <?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'message')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
