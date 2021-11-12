<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\CoreUser */

$this->title = 'Create Core User';
$this->params['breadcrumbs'][] = ['label' => 'Core Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="core-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
