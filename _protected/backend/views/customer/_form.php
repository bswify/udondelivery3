<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Customer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CustomerFName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CustomerLName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CustomerImage')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'CustomerPoint')->textInput() ?>

    <?= $form->field($model, 'CustomerPhone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CUsername')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'CPasswords')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'LoginType')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
