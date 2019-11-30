<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Project */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?> -->
    <?= $form->field($model, 'type')->dropDownList(
        ['web app'=>'web app', 'android'=>'android', 'IOS app' => 'IOS app'],
        ['prompt' => 'select type']
    ) ?>

    <!-- <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?> -->
    <?= $form->field($model, 'status')->dropDownList(
        ['running'=>'running', 'finished'=>'finished', 'maintainance' => 'maintainance'],
        ['prompt' => 'select status']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
