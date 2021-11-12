<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\EmployeesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employees-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Employees', ['create'], ['class' => 'btn btn-outline-success btn-lg btn-block']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'company_id',
                'label'=>'Company',
                'value' => function (\frontend\models\Employees $model) {
                    return $model->company->name;
                }
            ],
            'name',
            'age',
            'gender',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
