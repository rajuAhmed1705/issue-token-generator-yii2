<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\IssueTable */

$this->title = 'Create Issue Table';
$this->params['breadcrumbs'][] = ['label' => 'Issue Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="issue-table-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
