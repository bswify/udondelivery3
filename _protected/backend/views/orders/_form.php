<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Orders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'OrderDate')->widget(\janisto\timepicker\TimePicker::className(), [
    //'language' => 'fi',
    'mode' => 'date',
    'clientOptions'=>[
        'dateFormat' => 'yy-mm-dd',
        //'timeFormat' => 'HH:mm:ss',
        'showSecond' => true,
    ]
]) ?>

    <?= $form->field($model, 'OrderNote')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'OrderTotalPrice')->textInput() ?>

    <?= $form->field($model, 'OrderStatus')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'IDOrderDetails')->textInput() ?>

    <?= $form->field($model, 'IDPaymant')->textInput() ?>

    <?= $form->field($model, 'IDDelivery')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
