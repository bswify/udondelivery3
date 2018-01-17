<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Orders */

$this->title = $model->IDOrder;
$this->params['breadcrumbs'][] = ['label' => 'ข้อมูลการสั่งซื้อ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('แก้ไข', ['update', 'id' => $model->IDOrder], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบ', ['delete', 'id' => $model->IDOrder], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IDOrder',
            'OrderDate',
            'OrderNote:ntext',
            'OrderTotalPrice',
            'OrderStatus:ntext',
            'IDOrderDetails',
            'IDPaymant',
            'IDDelivery',
            'IDCustomer',
            'IDEmp',
        ],
    ]) ?>

</div>
