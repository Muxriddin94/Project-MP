<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Staffing */

$this->title = 'Create Staffing';
$this->params['breadcrumbs'][] = ['label' => 'Staffings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staffing-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
