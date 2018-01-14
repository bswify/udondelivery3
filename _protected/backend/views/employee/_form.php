<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'EmpFName')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'EmpLname')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'EmpPhone')->textInput() ?>

    <?= $form->field($model, 'EUsername')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Epasswords')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'LoginType')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
