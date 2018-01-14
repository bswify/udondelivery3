<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RestaurantSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ข้อมูลร้านอาหาร';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="restaurant-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่มข้อมูลร้านอาหาร', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IDRestaurant',
            'ResName:ntext',
            'ResAddress:ntext',
            'ResStatus:ntext',
            'ResLowPrice',
            //'ResTel:ntext',
            //'ResTimeStart',
            //'ResTimeEnd',
            //'IDLocation',
            //'RUsername:ntext',
            //'Rpasswords:ntext',
            //'ResImg:ntext',
            //'ResLat:ntext',
            //'ResLong:ntext',
            //'LoginType:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
