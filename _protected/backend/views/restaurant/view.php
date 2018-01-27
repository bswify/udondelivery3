<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Restaurant */

$this->title = $model->IDRestaurant;
$this->params['breadcrumbs'][] = ['label' => 'ข้อมูลร้านอาหาร', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="restaurant-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('แก้ไข', ['update', 'id' => $model->IDRestaurant], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบ', ['delete', 'id' => $model->IDRestaurant], [
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
           // 'IDRestaurant',
            'ResName:ntext',
            'ResAddress:ntext',
            'ResStatus:ntext',
            'ResLowPrice',
            'ResTel:ntext',
            'ResTimeStart',
            'ResTimeEnd',
            'IDLocation',
            'IDUser',
//            'RUsername:ntext',
//           // 'Rpasswords:ntext',
//            [
//                'attribute'=>'Rpasswords',
//                'value'=>'********'
//            ],
            //'ResImg:ntext',
            [
                'format'=>'raw',
                'attribute'=>'ResImg',
                'value'=>Html::img($model->photoViewer,['class'=>'img-thumbnail','style'=>'width:200px;'])
            ],
            // 'latlng:ntext',
            // 'LoginType:ntext',
        ],
    ]) ?>

</div>
