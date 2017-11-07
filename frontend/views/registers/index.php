<?php

use yii\helpers\Html;
use kartik\grid\GridView;
//use yii\helpers\Url;
use kartik\export\ExportMenu;
?>
<div class="panel panel-danger">
  <div class="panel-heading">
    เลขคุมทะเบียนบันทึกข้อความระบบจัดซื้อจัดจ้าง
  </div>
<?php

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

            ['class' => 'yii\grid\ActionColumn'],
            //หากจะให้สิทธิ์แก้ไชหรือลบข้อมูลได้ให้//เอาออกซะก็จะมีเมนูแก้ไชให้ออกมาโชว์

        ],

    ]); ?>



</div>
