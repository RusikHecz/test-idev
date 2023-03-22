<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use Yii;

/* @var $this yii\web\View */
/* @var $model app\module\todo\models\Todo */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="order-form" id="update-form">
    <div id="flash-message"></div>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput() ?>

    <?= $form->field($model, 'priority')->textInput() ?>

    <?= $form->field($model, 'done')->checkbox() ?>

    <div class="visually-hidden">
        <?= $form->field($model, 'version')->hiddenInput() ?>
    </div>

    <?php if (!Yii::$app->session->hasFlash('danger')): ?>
        <div class="form-group mt-2">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    <?php endif; ?>

    <?php if (Yii::$app->session->hasFlash('danger')): ?>
        <div class="flash-success">
            <?= Html::a('Edit Again', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Cancel', ['/todo/index'], ['class' => 'btn btn-primary']) ?>
        </div>
    <?php endif; ?>
    <?php ActiveForm::end(); ?>

</div>
