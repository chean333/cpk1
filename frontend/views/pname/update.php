<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pname */

$this->title = 'Update Pname: ' . $model->pname;
$this->params['breadcrumbs'][] = ['label' => 'Pnames', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pname, 'url' => ['view', 'id' => $model->pname]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pname-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
