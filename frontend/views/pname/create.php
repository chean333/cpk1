<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pname */

$this->title = 'Create Pname';
$this->params['breadcrumbs'][] = ['label' => 'Pnames', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pname-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
