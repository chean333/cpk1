<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;
use kartik\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\Registers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="registers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'number')->textInput() ?>



    <?php echo '<label class="control-lablel">date</label>';
    echo DatePicker::widget([
      'model'=> $model,
      'attribute'=>'date',
      'options'=>['placeholder'=>'Enter birth date...'],
      'pluginOptions'=>[
        'autoclose'=>true,
        'format'=>'yyyy-mm-dd',
        'todayHighlight'=>true,

      ]
    ]);
    ?>

    <?= $form->field($model, 'department')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'texts')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mony')->textInput() ?>

    <?= $form->field($model, 'register')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
