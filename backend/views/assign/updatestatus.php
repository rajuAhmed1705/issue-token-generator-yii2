<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\IssueAssign */

$this->title = 'Update Issue Assign: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Issue Assigns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="issue-assign-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
