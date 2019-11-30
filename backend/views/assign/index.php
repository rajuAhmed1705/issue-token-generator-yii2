<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\web\JsExpression;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IssueAssignSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Issue Assigns';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="issue-assign-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <!-- <?= Html::a('Create Issue Assign', ['create'], ['class' => 'btn btn-success']) ?> -->
    </p>

    <?php Pjax::begin(['id' => 'p0']); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'issue_id',
            //'assign_dev',
            [
                'label' => 'Issue Type',
                'attribute' => 'issue_id',
                'value' => 'issue.issue_type'
            ],
            [
                'label' => 'Message',
                'attribute' => 'issue_id',
                'value' => 'issue.message'
            ],
            [
                'label' => 'Project Id',
                'attribute' => 'issue_id',
                'value' => 'issue.project_id'
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

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{myButton}',  // the default buttons + your custom button
                'buttons' => [
                    'myButton' => function ($url, $model, $key) {     // render your custom button

                        return Html::button('solved', ['assign/index', 'class' => 'solve', 'data-issue-id' => $model->id,'name'=> $model->id], ['class' => 'btn btn-danger btn-xs']);
                    },

                ],
            ]
        ],
    ]); ?>
    <?php Pjax::end(); ?>

</div>
</div>

<?php
 $site_url = Url::base();
    $this->registerJs("$('.solve').on('click', function(){
                var variable_item = $(this).attr('data-issue-id');
                console.log(variable_item);
            
                $.ajax({
                    type: 'post',
                    url:  '$site_url/assign/issu-update',
                    data: {ident_var:variable_item},
                    success: function(data) {
                            if(data.status == 1){
                                $.pjax.reload({container:'#p0'});
                            }else{
                                console.log('Please select tokens');
                            }
                    },
                    error: function() {
                        console.log('error');
                    }
                });
            });

        ", 
        yii\web\View::POS_READY, 'issue_solve'
    );

?>