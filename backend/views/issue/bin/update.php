<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\IssueTable */

$this->title = 'Update Issue Table: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Issue Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="issue-table-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
