<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Project', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'type',
            'status',

            [
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'view'=>function ($url) {
                        return Html::a('view', $url, ['class' => 'btn btn-success btn-xs']);
                    },
                    'update'=>function ($url) {
                        return Html::a('update', $url, ['class' => 'btn btn-primary btn-xs']);
                    },
                    'delete'=>function ($url) {
                        return Html::a('delete', $url, ['class' => 'btn btn-danger btn-xs']);
                    },

                    //'view' => ['class' => 'btn btn-primary']
                ]
            ],
        ],
    ]); ?>


</div>
