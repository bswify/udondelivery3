<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Food */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="food-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'FoodName')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'FoodPrice')->textInput() ?>

    <?= $form->field($model, 'IDFoodType')->textInput() ?>

    <?= $form->field($model, 'IDRestaurant')->textInput() ?>

    <?= $form->field($model, 'MenuTypeName')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
