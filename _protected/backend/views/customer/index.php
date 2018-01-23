<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->registerCss("
@media screen and (max-width: 1200px) {
	.table {
		overflow-x: auto;
		display: block;
	}
  .btn-group {
    float: left;
    display:flex;
    position: relative;
}
}");


$this->title = 'ข้อมูลลูกค้า';
$this->params['breadcrumbs'][] = $this->title;

//print_r($dataProvider->models)
?>
<div class="customer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่มข้อมูลลูกค้า', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IDCustomer',
            'CustomerFName',
            'CustomerLName',
            'CustomerImage:ntext',
            'CustomerPoint',
            'CustomerPhone',
            //'CUsername:ntext',
            //'CPasswords:ntext',
            //'LoginType:ntext',

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => "การทำงาน",
                'options'=>['style'=>'width:120px;'],
                'template'=>'<div class="btn-group btn-group-sm" role="group" aria-label="..."> {view} {update} {delete} </div>',
                'buttons'=>[
                    'view'=>function($url,$model,$key){
                        return Html::a('<i class="glyphicon glyphicon-eye-open"></i>',$url,
                        ['title'=>'View user',
                          'class'=>'btn btn-warning']);
                    },
                    'update'=>function($url,$model,$key){
                        return Html::a('<i class="glyphicon glyphicon-pencil"></i>',$url,
                        ['title'=>'Edit user',
                        'class'=>'btn btn-warning']);
                    },
                    'delete'=>function($url,$model,$key){
                         return Html::a('<i class="glyphicon glyphicon-trash"></i>', $url,[
                                'title' => Yii::t('yii', 'Delete user'),
                                'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                                'data-method' => 'post',
                                'data-pjax' => '0',
                                'class'=>'btn btn-warning'
                                ]);
                    }
                ]
            ],
        ],
    ]); ?>


</div>
