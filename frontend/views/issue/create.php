<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\IssueTable */

$this->title = 'report your issue';
// $this->params['breadcrumbs'][] = ['label' => 'Issue Tables', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="issue-table-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <hr>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
