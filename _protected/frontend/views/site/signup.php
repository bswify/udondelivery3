<?php
use nenad\passwordStrength\PasswordInput;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

$this->title = Yii::t('app', 'Signup');
$this->params['breadcrumbs'][] = $this->title;
$script = <<< JS

		$(document).ready(function(){

		// Javascript method's body can be found in assets/js/demos.js
				demo.initDashboardPageCharts();

		});


JS;
$this->registerJs($script,View::POS_END,'myOption');
?>
<div class="site-signup">



  <div class="col-lg-12 col-md-12">
    <div class="card">
      <div class="card-header" data-background-color="orange">
        <h4 class="title">
          <h1><?= Html::encode($this->title) ?></h1>
        </h4>
        <p class="category"><?= Yii::t('app', 'Please fill out the following fields to signup:') ?></p>
      </div>
      <div class="card-content table-responsive">
				<?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

		    <?= $form->field($model, 'username') ?>
		    <?= $form->field($model, 'email') ?>
		    <?= $form->field($model, 'password')->widget(PasswordInput::classname(), []) ?>

		    <div class="form-group">
		      <?= Html::submitButton(Yii::t('app', 'Signup'), ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
		    </div>

		    <?php ActiveForm::end(); ?>

		    <?php if ($model->scenario === 'rna'): ?>
		    <div style="color:#666;margin:1em 0">
		      <i>*<?= Yii::t('app', 'We will send you an email with account activation link.') ?></i>
		    </div>
		    <?php endif ?>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header card-chart" data-background-color="green">
          <div class="ct-chart" id="dailySalesChart"></div>
        </div>
        <div class="card-content">
          <h4 class="title">Daily Sales</h4>
          <p class="category">
            <span class="text-success">
              <i class="fa fa-long-arrow-up"></i>
              55%
            </span>
            increase in today sales.</p>
        </div>
        <div class="card-footer">
          <div class="stats">
            <i class="material-icons">access_time</i>
            updated 4 minutes ago
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <div class="card-header card-chart" data-background-color="orange">
          <div class="ct-chart" id="emailsSubscriptionChart"></div>
        </div>
        <div class="card-content">
          <h4 class="title">Email Subscriptions</h4>
          <p class="category">Last Campaign Performance</p>
        </div>
        <div class="card-footer">
          <div class="stats">
            <i class="material-icons">access_time</i>
            campaign sent 2 days ago
          </div>
        </div>

      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <div class="card-header card-chart" data-background-color="red">
          <div class="ct-chart" id="completedTasksChart"></div>
        </div>
        <div class="card-content">
          <h4 class="title">Completed Tasks</h4>
          <p class="category">Last Campaign Performance</p>
        </div>
        <div class="card-footer">
          <div class="stats">
            <i class="material-icons">access_time</i>
            campaign sent 2 days ago
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
