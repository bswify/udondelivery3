<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ResreviewSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ข้อมูลรีวิวร้านอาหาร';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resreview-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่มข้อมูลรีวิวร้านอาหาร', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IDResReview',
            'ResReviewDate',
            'ResReviewScore',
            'ResComment:ntext',
            'ResReviewImage:ntext',
            //'IDRestaurant',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
