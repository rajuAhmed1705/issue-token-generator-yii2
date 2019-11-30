<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
<div id="login-page">
    <div class="container">
        <div class="form-login">
        <h2 class="form-login-heading">sign in now</h2>
        <div class="login-wrap">
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true,'placeholder' => 'enter your username']) ?>

            <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'enter your password']) ?>

            <?= $form->field($model, 'rememberMe')->checkbox() ?>

            <div class="form-group">
                <?= Html::submitButton('Login', ['class' => 'btn btn-theme btn-block', 'name' => 'login-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>

        </div>
    </div>
  </div>
</div>
</div>
