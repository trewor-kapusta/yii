<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'O mnie';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-edit">
    <h1><?= Html::encode($this->title) ?></h1>

        <p>
            Edit your personal information
        </p>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'edit-form']); ?>

                <?= $form->field($model, 'me')->textarea(['autofocus' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Update', ['class' => 'btn btn-primary', 'name' => 'edit-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

</div>
