<?php
use consynki\yii\input\ImageInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Location;

/* @var $this yii\web\View */
/* @var $model backend\models\Restaurant */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="restaurant-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ResName')->textarea(['rows' => 2]) ?>

    <?= $form->field($model, 'ResAddress')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ResStatus')->dropDownList(
        ['ไม่อนุมัติ' => 'ไม่อนุมัติ', 'อนุมัติ' => 'อนุมัติ'])
         ?>

    <?= $form->field($model, 'ResLowPrice')->textInput() ?>

    <?= $form->field($model, 'ResTel')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'ResTimeStart')->widget(\janisto\timepicker\TimePicker::className(), [
    //'language' => 'fi',
    'mode' => 'time',
    'clientOptions'=>[
        //'dateFormat' => 'yy-mm-dd',
        'timeFormat' => 'HH:mm:ss',
        'showSecond' => true,
    ]
]) ?>

    <?= $form->field($model, 'ResTimeEnd')->widget(\janisto\timepicker\TimePicker::className(), [
    //'language' => 'fi',
    'mode' => 'time',
    'clientOptions'=>[
        //'dateFormat' => 'yy-mm-dd',
        'timeFormat' => 'HH:mm:ss',
        'showSecond' => true,
    ]
]) ?>

    <?= $form->field($model, 'IDLocation')->dropDownList(
        ArrayHelper::map(Location::find()->all(),'IDLocation','LocationName'),
        ['promp'=>'เลือกตำแหน่ง']) ?>

    <?= $form->field($model, 'RUsername')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'Rpasswords')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'ResImg')->widget(ImageInput::className(), [
		'value' => '/img/current-image.png' //Optional current value
    ]) ?>

    <?= $form->field($model, 'ResLat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ResLong')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'LoginType')->dropDownList(
        ['promp'=>'เลือกประเภทผู้ใช้งาน','แอดมิน' => 'แอดมิน', 'เจ้าของร้าน' => 'เจ้าของร้าน'
        ,'ลูกค้า' => 'ลูกค้า','พนักงานจัดส่ง' => 'พนักงานจัดส่ง']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
