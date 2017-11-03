<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RegisterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ระบบบันทึกข้อมูลเลขหนังสือออกโรงพยาบาลไชยปราการ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="register-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Register', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Num',
            'date',
            'time',
            'department',
            'list',
             'mony',
            'register',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
