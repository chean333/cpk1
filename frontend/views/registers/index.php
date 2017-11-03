<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RegistersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'เลขคุมทะเบียนบันทึกข้อความระบบจัดซื้อจัดจ้างโรงพยาบาลไชยปราการ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เลขคุมทะเบียนบันทึกข้อความ', ['create'], ['class' => 'btn btn-success']) ?>
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
