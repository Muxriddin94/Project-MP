<?php

use frontend\models\Requests;
use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\RequestsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Requests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requests-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Requests', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'user_id',
                'label' => 'Hodim',
                'value' => function (Requests $model) {
                    return $model->user->full_name;
                }
            ],
            'full_name',
            [
                'attribute' => 'document_type',
                'value' => function (Requests $model) {
                    if ($model->document_type == 'G') {
                        return 'Guvohnoma';
                    } elseif ($model->document_type == 'P') {
                        return 'Passport';
                    } else {
                        return 'Prava';
                    }
                }
            ],
            'document_number',
//            'status',
            [
                'attribute' => 'status',
                'format' => 'raw',
                'value' => function (Requests $model) {
                    if ($model->status == 1) {
                        return '
                        <button class="btn btn-primary">keldi</button>
                         ';
                    } elseif ($model->status == 2) {
                        return '
                         <button class="btn btn-success">ketti</button>
                        ';
                    } elseif ($model->status == 4) {
                        return '
                        <button class="btn btn-danger">otkaz</button>
                        ';
                    }
                }

            ],
            'start_time',
            'end_time',
            'comment:ntext',
            'message:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
