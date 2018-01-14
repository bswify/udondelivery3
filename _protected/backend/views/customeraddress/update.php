<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Customeraddress */

$this->title = 'แก้ไขข้อมูลที่อยู่ลูกค้า: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'ข้อมูลที่อยู่ลูกค้า', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDCustomerAddress, 'url' => ['view', 'id' => $model->IDCustomerAddress]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="customeraddress-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
