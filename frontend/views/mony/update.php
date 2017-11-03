<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mony */

$this->title = 'Update Mony: ' . $model->mony;
$this->params['breadcrumbs'][] = ['label' => 'Monies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mony, 'url' => ['view', 'id' => $model->mony]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mony-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
