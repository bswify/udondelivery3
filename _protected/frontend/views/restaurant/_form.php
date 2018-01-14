<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Restaurant */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="restaurant-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ResName')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ResAddress')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ResStatus')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ResLowPrice')->textInput() ?>

    <?= $form->field($model, 'ResTel')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ResTimeStart')->widget(\janisto\timepicker\TimePicker::className(), [
    //'language' => 'fi',
    'mode' => 'time',
    'clientOptions'=>[
        //'dateFormat' => 'yy-mm-dd',
        'timeFormat' => 'HH:mm:ss',
        'showSecond' => true,
    ]
])  ?>

    <?= $form->field($model, 'ResTimeEnd')->widget(\janisto\timepicker\TimePicker::className(), [
    //'language' => 'fi',
    'mode' => 'time',
    'clientOptions'=>[
        //'dateFormat' => 'yy-mm-dd',
        'timeFormat' => 'HH:mm:ss',
        'showSecond' => true,
    ]
])   ?>

    <?= $form->field($model, 'IDLocation')->textInput() ?>

    <?= $form->field($model, 'RUsername')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Rpasswords')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ResImg')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ResLat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ResLong')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'LoginType')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
