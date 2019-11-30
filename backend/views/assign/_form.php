<?php

use backend\models\User;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\IssueAssign */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="issue-assign-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'issue_id')->hiddenInput(['value'=>  Yii::$app->getRequest()->getQueryParam('id')])->label(false); ?>

    <?= $form->field($model, 'assign_dev')->dropDownList(
        ArrayHelper::map(User::find()->all(),'id','username'),
        ['prompt' => 'select developer']
    ) ?>

    <?= $form->field($model, 'status')->dropDownList(
            ['2'=>'unsolved','1' => 'solved'],
            ['prompt' => 'select status']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
