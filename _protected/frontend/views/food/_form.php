<?php
use consynki\yii\input\ImageInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Foodtype;

/* @var $this yii\web\View */
/* @var $model frontend\models\Food */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="food-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'FoodImg')->widget(ImageInput::className(), [
		'value' => '/img/current-image.png' //Optional current value
    ]) ?>

    <?= $form->field($model, 'FoodName')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'FoodPrice')->textInput(['type' => 'number']) ?>

    <?= $form->field($model, 'IDFoodType')->dropDownList(
        ArrayHelper::map(Foodtype::find()->all(),'IDFoodType','FoodTypeName'),
        ['promp'=>'เลือกประเภทอาหาร']
        ) ?>

    <?= $form->field($model, 'IDRestaurant')->textInput() ?>

    <?= $form->field($model, 'MenuTypeName')->dropDownList(
        ['เมนูธรรมดา' => 'เมนูธรรมดา', 'เมนูแนะนำ' => 'เมนูแนะนำ']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
