<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\module\todo\models\Todo */

$this->title = 'Create Todo';
$this->params['breadcrumbs'][] = ['label' => 'Todo', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
