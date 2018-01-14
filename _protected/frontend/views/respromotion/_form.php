<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Respromotion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="respromotion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ResPromotionName')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ResPromotionPrice')->textInput() ?>

    <?= $form->field($model, 'ResPromotionStart')->widget(\janisto\timepicker\TimePicker::className(), [
    //'language' => 'fi',
    'mode' => 'date',
    'clientOptions'=>[
        'dateFormat' => 'yy-mm-dd',
        //'timeFormat' => 'HH:mm:ss',
        'showSecond' => true,
    ]
])  ?>

    <?= $form->field($model, 'ResPromotionEnd')->widget(\janisto\timepicker\TimePicker::className(), [
    //'language' => 'fi',
    'mode' => 'date',
    'clientOptions'=>[
        'dateFormat' => 'yy-mm-dd',
        //'timeFormat' => 'HH:mm:ss',
        'showSecond' => true,
    ]
])  ?>

    <?= $form->field($model, 'IDRestaurant')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
