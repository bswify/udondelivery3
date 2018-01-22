<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use borales\extensions\phoneInput\PhoneInput;

/* @var $this yii\web\View */
/* @var $model backend\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'EmpFName')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'EmpLname')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'EmpPhone')->widget(PhoneInput::className(), [
    'jsOptions' => [
        'preferredCountries' => ['th']]
]) ?>

    <?= $form->field($model, 'EUsername')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'Epasswords')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'LoginType')->dropDownList(
        ['promp'=>'เลือกประเภทผู้ใช้งาน','แอดมิน' => 'แอดมิน', 'เจ้าของร้าน' => 'เจ้าของร้าน'
        ,'ลูกค้า' => 'ลูกค้า','พนักงานจัดส่ง' => 'พนักงานจัดส่ง']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
