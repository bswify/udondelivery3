<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Food */

$this->title = 'เพิ่มเมนูอาหาร';
$this->params['breadcrumbs'][] = ['label' => 'เมนูอาหาร', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="food-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
