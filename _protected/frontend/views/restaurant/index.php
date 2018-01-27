<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\RestaurantSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ข้อมูลร้านอาหาร';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="restaurant-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <!-- <= Html::a('เพิ่มอมูลร้านอาหาร', ['create'], ['class' => 'btn btn-success']) ?> -->
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
            'IDUser',
//            [
//                'options'=>['style'=>'width:150px;'],
//                'format'=>'raw',
//                'attribute'=>'ResImg',
//                'value'=>function($model){
//                    return Html::tag('div','',[
//                        'style'=>'width:100px;height:100px;
//                              border-top: 10px solid rgba(255, 255, 255, .46);
//                              background-image:url('.Yii::getAlias('@uploadUrl').'/images/Restaurantimg'.'/'.$model->ResImg.');
//                              background-size: cover;
//                              background-position:center center;
//                              background-repeat:no-repeat;
//                              align-items: center;margin: auto;
//                              ']);
//                }
//            ],
            //'ResTel:ntext',
            //'ResTimeStart',
            //'ResTimeEnd',
            //'IDLocation',
            //'RUsername:ntext',
            //'Rpasswords:ntext',
            //'ResImg:ntext',
            //'latlng:ntext',
            //'LoginType:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
