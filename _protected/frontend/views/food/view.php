<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\Food;

/* @var $this yii\web\View */
/* @var $model frontend\models\Food */

$this->title = "รายการอาหาร : ". $model->IDFood;
$this->params['breadcrumbs'][] = ['label' => 'ข้อมูลเมนูอาหาร', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="food-view">

<!--    <h1><= Html::encode($this->title) ?></h1>-->

    <p>
        <?= Html::a(Yii::t('app', 'กลับ'), ['index'], ['class' => 'btn btn-warning']) ?>
        <?= Html::a('แก้ไข', ['update', 'id' => $model->IDFood], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบ', ['delete', 'id' => $model->IDFood], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <div class="panel panel-default">
        <div class="panel-body">

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'IDFood',
                    //'FoodImg:ntext',
                    [
                        'format' => 'raw',
                        'attribute' => 'FoodImg',
                        'value' => Html::img(Yii::getAlias('@ShowFoodPhoto') . '/' . $model->FoodImg, ['class' => 'img-thumbnail', 'style' => 'width:200px;'])
                    ],
                    'FoodName:ntext',
                    'FoodPrice',
                    'IDFoodType',
                    'IDRestaurant',
                    'MenuTypeName:ntext',
                ],
            ]) ?>

        </div>
    </div>

</div>
