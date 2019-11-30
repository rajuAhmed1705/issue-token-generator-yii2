<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'full_name',
            'username',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            'email:email',
            'status',
            //'created_at',
            //'updated_at',
            //'verification_token',

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
