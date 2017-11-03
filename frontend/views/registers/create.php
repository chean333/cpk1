<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Registers */

$this->title = 'Create Registers';
$this->params['breadcrumbs'][] = ['label' => 'Registers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
