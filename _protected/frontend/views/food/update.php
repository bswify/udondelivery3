<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Food */

$this->title = 'แก้ไขเมนูอาหาร:'.$model->FoodName;
$this->params['breadcrumbs'][] = ['label' => 'เมนูอาหาร', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDFood, 'url' => ['view', 'id' => $model->IDFood]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="food-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
