<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Project;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\IssueTable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="issue-table-form form-panel">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_no')->textInput() ?>

    <?= $form->field($model, 'project_id')->dropDownList(
        ArrayHelper::map(Project::find()->all(),'id','name'),
        ['prompt' => 'select project']
    ) ?>

    <?= $form->field($model, 'issue_type')->dropDownList(
            ['serious'=>'serious', 'moderate'=>'moderate', 'normal' => 'normal'],
            ['prompt' => 'select type']
    ) ?>
    <?= $form->field($model, 'status')->hiddenInput(['value'=> 2])->label(false); ?>
    <?= $form->field($model, 'message')->textArea(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
