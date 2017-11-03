<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ChellSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'เลขคุมทะเบียนใบสั่งซื้อสั่งจ้าง';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chell-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่มเลขคุมทะเบียรนใบสั่งซื้อสั่งจ้าง', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'number',
            'date',
            'department',
            'texts',
            'mony',
            'register',
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
