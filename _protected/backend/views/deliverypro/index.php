<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DeliveryproSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'โปรโมชั่นการจัดส่ง';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deliverypro-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่มโปรโมชั่นการจัดส่ง', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IDDeliveryPro',
            'DeliveryProName:ntext',
            'DeliveryProPiont',
            'DeliveryProPrice',
            'DeliveryProStart',
            //'DeliveryProEnd',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>