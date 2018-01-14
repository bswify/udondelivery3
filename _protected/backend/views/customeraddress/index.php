<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CustomeraddressSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ข้อมูลที่อยู่ลูกค้า';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customeraddress-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่มข้อมูลที่อยู่ลูกค้า', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IDCustomerAddress',
            'CustomerAddNo',
            'CustomerAddRoad:ntext',
            'IDCustomer',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
