<?php

use yii\helpers\Html;
use yii\grid\GridView;

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
                'value' => function (\frontend\models\Requests $model) {
                    return $model->user->full_name;
                }
            ],
            'full_name',
            [
                'attribute' => 'document_type',
                'value' => function (\frontend\models\Requests $model) {
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
                'format'=>'raw',
                'value' => function (\frontend\models\Requests $model) {
                    if ($model->status == 1) {
                        return '
            <button class="btn btn-primary">keldi</button>
            ';
                    }elseif ($model->status == 2){
                        return '
                         <button class="btn btn-success">ketti</button>
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
