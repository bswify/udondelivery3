<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Resreview */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resreview-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ResReviewDate')->widget(\janisto\timepicker\TimePicker::className(), [
    //'language' => 'fi',
    'mode' => 'date',
    'clientOptions'=>[
        'dateFormat' => 'yy-mm-dd',
        //'timeFormat' => 'HH:mm:ss',
        'showSecond' => true,
    ]
]) ?>

    <?= $form->field($model, 'ResReviewScore')->textInput() ?>

    <?= $form->field($model, 'ResComment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ResReviewImage')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'IDRestaurant')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
