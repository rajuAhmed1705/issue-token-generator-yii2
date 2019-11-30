<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Project;

/* @var $this yii\web\View */
/* @var $model app\models\IssueTable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="issue-table-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'project_id')->textInput() ?> -->
    <?= $form->field($model, 'project_id')->dropDownList(
        ArrayHelper::map(Project::find()->all(),'id','name'),
        ['prompt' => 'select project']
    ) ?>


    <!-- <?= $form->field($model, 'user_id')->textInput() ?> -->
    <?= $form->field($model, 'user_id')->hiddenInput(['value'=> \Yii::$app->user->identity->id])->label(false); ?>

    <?= $form->field($model, 'issue_type')->dropDownList(
        ['serious'=>'serious', 'moderate'=>'moderate', 'normal' => 'normal'],
        ['prompt' => 'select type']
    ) ?>

    <?= $form->field($model, 'message')->textArea(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
