<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\export\ExportMenu;
?>
<div class="panel panel-primary">
  <div class="panel-heading">
    เลขคุมทะเบียนใบสั่งซื้อสั่งจ้าง
  </div>
<?php
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
    <?php
    echo ExportMenu::widget([
        'dataProvider' => $dataProvider,
        'fontAwesome' => true,
    ]);
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            //เลขหน้าถ้าใส่ก็จะเรียงลำดับ1-> ครับ


            'number',
            'date',
            'department',
            'texts',
            'mony',
            'register',


            //['class' => 'yii\grid\ActionColumn'],
            ////หากจะให้สิทธิ์แก้ไชหรือลบข้อมูลได้ให้//เอาออกซะก็จะมีเมนูแก้ไชให้ออกมาโชว์
        ],
    ]); ?>
</div>
