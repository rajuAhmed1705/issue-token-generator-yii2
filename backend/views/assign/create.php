<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\IssueAssign */

$this->title = 'Create Issue Assign';
$this->params['breadcrumbs'][] = ['label' => 'Issue Assigns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="issue-assign-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
