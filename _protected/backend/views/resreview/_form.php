<?php
use consynki\yii\input\ImageInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Restaurant;
use backend\models\Customer;

/* @var $this yii\web\View */
/* @var $model backend\models\Resreview */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resreview-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ResReviewDate')->widget(\janisto\timepicker\TimePicker::className(), [
    //'language' => 'fi',
    'mode' => 'date',
    'language' => 'th',
    'clientOptions'=>[
        
        'dateFormat' => 'yy-mm-dd',
        //'timeFormat' => 'HH:mm:ss',
        'showSecond' => true,
    ]
])  ?>

    <?= $form->field($model, 'ResReviewScore')->textInput(['type' => 'number']) ?>

    <?= $form->field($model, 'ResComment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ResReviewImage')->widget(ImageInput::className(), [
		'value' => '/img/current-image.png' //Optional current value
    ]) ?>

    <?= $form->field($model, 'IDRestaurant')->dropDownList(
        ArrayHelper::map(Restaurant::find()->all(),'IDRestaurant','ResName'),
        ['promp'=>'เลือกร้านอาหาร']) ?>

    <?= $form->field($model, 'IDCustomer')->dropDownList(
        ArrayHelper::map(Customer::find()->all(),'IDCustomer','CustomerFName'),
        ['promp'=>'เลือกลูกค้า']) ?>

    <div class="form-group">
        <?= Html::submitButton('บันทึก', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
