<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Mony */

$this->title = 'Create Mony';
$this->params['breadcrumbs'][] = ['label' => 'Monies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mony-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
