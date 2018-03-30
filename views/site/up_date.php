<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<?php $form = ActiveForm::begin(); ?>


<?= $form->field($upde_Form, 'platname')->textInput(['maxlength' => 200,'value'=>$data['plat'][0]['platname']])->label('平台名称') ?>

<?= $form->field($upde_Form, 'address')->textInput(['maxlength' => 200,'value'=>$data['url'][0]['address']])->label('测试网址') ?>

<?= Html::submitButton('提交', ['class'=>'btn btn-primary','name' =>'submit-button']) ?>

<?= Html::resetButton('重置', ['class'=>'btn btn-primary','name' =>'submit-button']) ?>

<?php ActiveForm::end(); ?>
