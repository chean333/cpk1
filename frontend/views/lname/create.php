<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Lname */

$this->title = 'Create Lname';
$this->params['breadcrumbs'][] = ['label' => 'Lnames', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lname-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
