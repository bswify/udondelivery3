<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OrdersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ข้อมูลการสั่งซื้อ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่มข้อมูลการสั่งซื้อ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IDOrder',
            'OrderDate',
            'OrderNote:ntext',
            'OrderTotalPrice',
            'OrderStatus:ntext',
            //'IDOrderDetails',
            //'IDPaymant',
            //'IDDelivery',
            //'IDCustomer',
            //'IDEmp',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
