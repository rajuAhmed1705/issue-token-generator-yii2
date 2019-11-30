<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IssueTableSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Issue Tables';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="issue-table-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Issue Table', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'label' => 'Project Name',
                'attribute' => 'project_id',
                'value' => 'project.name'
            ],
            [
                'label' => 'User Name',
                'attribute' => 'user_id',
                'value' => 'user.username'
            ],
            'issue_type',
            'message',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {myButton}',  // the default buttons + your custom button
                'buttons' => [
                    'myButton' => function($url, $model, $key) {     // render your custom button
                        return Html::a('assign', ['assign/create','id' =>$model->id], ['class' => 'btn btn-success']);

                    }
                ]
            ]
        ],
    ]); ?>


</div>
