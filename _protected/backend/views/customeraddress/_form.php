<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Customeraddress */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customeraddress-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CustomerAddNo')->textInput() ?>

    <?= $form->field($model, 'CustomerAddRoad')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'IDCustomer')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
