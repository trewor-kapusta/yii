<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('registerSubmitted')): ?>
        <div class="alert alert-success">
            Done
        </div>
    <?php else: ?>
        <p>
            Create an account
        </p>
        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                    <?= $form->field($model, 'username') ?>
                    <?= $form->field($model, 'password')->passwordInput() ?>
                    <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    <?php endif; ?>
</div>
