<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lname */

$this->title = 'Update Lname: ' . $model->lname;
$this->params['breadcrumbs'][] = ['label' => 'Lnames', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->lname, 'url' => ['view', 'id' => $model->lname]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lname-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
