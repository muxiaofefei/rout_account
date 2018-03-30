<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($addnum, 'acctype')->dropDownList(['2'=>'操作员','1'=>'管理员'], ['style'=>'width:120px'])->label('人员') ?>
<?= $form->field($addnum, 'number')->textInput(['maxlength' => 200])->label('账号') ?>
<?= $form->field($addnum, 'password')->textInput(['maxlength' => 200,'value'=>123456])->label('密码') ?>

<?= Html::submitButton('提交', ['class'=>'btn btn-primary','name' =>'submit-button']) ?>

<?= Html::resetButton('重置', ['class'=>'btn btn-primary','name' =>'submit-button']) ?>

<?php ActiveForm::end(); ?>
