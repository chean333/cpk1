<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\chell */

$this->title = 'Create Chell';
$this->params['breadcrumbs'][] = ['label' => 'Chells', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chell-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
