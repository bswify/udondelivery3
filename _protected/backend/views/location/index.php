<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LocationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ข้อมูลตำแหน่ง';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="location-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่มข้อมูลตำแหน่ง', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IDLocation',
            'LocationName:ntext',
            //'IDLocationType',
           // 'locationType.LocationTypeName',
            [
                'attribute' => 'IDLocationType',
                'value' => 'locationType.LocationTypeName',
            ],
            //  'LocationTypeName',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
