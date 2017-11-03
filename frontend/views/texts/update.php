<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Texts */

$this->title = 'Update Texts: ' . $model->texts;
$this->params['breadcrumbs'][] = ['label' => 'Texts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->texts, 'url' => ['view', 'id' => $model->texts]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="texts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
