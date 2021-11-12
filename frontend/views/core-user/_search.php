<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\search\CoreUserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="core-user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'department_id') ?>

    <?= $form->field($model, 'staffing_id') ?>

    <?= $form->field($model, 'full_name') ?>

    <?= $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'room') ?>

    <?php // echo $form->field($model, 'condition') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
