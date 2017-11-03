<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\chell */

$this->title = $model->number;
$this->params['breadcrumbs'][] = ['label' => 'Chells', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chell-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->number], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->number], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'number',
            'department',
            'texts',
            'mony',
            'register',
            'date',
        ],
    ]) ?>

</div>
