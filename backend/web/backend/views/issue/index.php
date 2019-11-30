<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\IssueTableSearch */
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

            'id',
            'project_id',
            'user_id',
            'issue_type',
            'message',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
