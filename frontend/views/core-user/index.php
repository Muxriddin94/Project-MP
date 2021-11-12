<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\CoreUserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Core Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="core-user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Core User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn',
            ],

            'id',
            [
                'attribute' => 'department_id',
                'label'=>'Departament',
                'value' => function (\frontend\models\CoreUser $model) {
                    return $model->department->name;
                }
            ],
            [
                'attribute' => 'staffing_id',
                'label'=>'Staffing',
                'value' => function (\frontend\models\CoreUser $model) {
                    return $model->staffing->name;
                }
            ],
            'full_name',
            'phone',
            'room',
            'condition',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
