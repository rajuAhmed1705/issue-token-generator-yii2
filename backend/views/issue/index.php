<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Menu;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IssueTableSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Issue Tables';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="issue-table-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <p>
        <!-- <?= Html::a('Create Issue Table', ['create'], ['class' => 'btn btn-success']) ?> -->
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'email:email',
            'phone_no',
            // 'project_id',
            [
                'label' => 'Project Name',
                'attribute' => 'project_id',
                'value' => 'project.name'
            ],
            [
                'attribute' => 'status',
                'value' => function($data){
                    if($data->status == 1)
                    {
                        return 'solved';
                    }else
                    {
                        return 'unsloved';
                    }
                }
            ],
            'issue_type',
            'message',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {assign}',  // the default buttons + your custom button
                'buttons' => [
                    'view'=>function ($url) {
                        return Html::a('view', $url, ['class' => 'btn btn-success btn-xs']);
                    },
                    'update'=>function ($url) {
                        return Html::a('update', $url, ['class' => 'btn btn-primary btn-xs']);
                    },
                    'assign' => function($url, $model, $key) {     // render your custom button
                        return Html::a('assign', ['assign/create','id' =>$model->id], ['class' => 'btn btn-info btn-xs']);
                    },
                    //'view' => ['class' => 'btn btn-primary']
                ]
            ],

            
        ],
        'options'=>[
            'class'=>'grid-view gridview-newclass',
        ],
        'tableOptions' =>[
            'class' => 'table table-striped table-advance table-hover table-bordered'
        ],

    ]); ?>


</div>
