<?php
use consynki\yii\input\ImageInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Customer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CustomerFName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CustomerLName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CustomerImage')->widget(ImageInput::className(), [
		'value' => '/img/current-image.png' //Optional current value
    ]) ?>

    <?= $form->field($model, 'CustomerPoint')->textInput() ?>

    <?= $form->field($model, 'CustomerPhone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CUsername')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'CPasswords')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'LoginType')->dropDownList(
        ['promp'=>'เลือกประเภทผู้ใช้งาน','แอดมิน' => 'แอดมิน', 'เจ้าของร้าน' => 'เจ้าของร้าน'
        ,'ลูกค้า' => 'ลูกค้า','พนักงานจัดส่ง' => 'พนักงานจัดส่ง']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
