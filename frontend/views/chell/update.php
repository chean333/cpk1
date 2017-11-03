<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\chell */

$this->title = 'Update Chell: ' . $model->number;
$this->params['breadcrumbs'][] = ['label' => 'Chells', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->number, 'url' => ['view', 'id' => $model->number]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="chell-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
