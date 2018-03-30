<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\bootstrap\Alert;
?>

<?php
if( Yii::$app->getSession()->hasFlash('success') ) {
    echo Alert::widget([
        'options' => [
            'class' => 'alert-success', //这里是提示框的class
        ],
        'body' => Yii::$app->getSession()->getFlash('success'), //消息体
    ]);
}
if( Yii::$app->getSession()->hasFlash('error') ) {
    echo Alert::widget([
        'options' => [
            'class' => 'alert-error',
        ],
        'body' => Yii::$app->getSession()->getFlash('error'),
    ]);
} ?>

<?php $form = ActiveForm::begin(); ?>


<?= $form->field($addplat, 'typeid')->dropDownList(['1'=>'测试','2'=>'正式'], ['style'=>'width:120px'])->label('正/测') ?>
<?= $form->field($addplat, 'platname')->textInput(['maxlength' => 200])->label('平台名称') ?>
<?= $form->field($addplat, 'number1')->textInput(['maxlength' => 200])->label('管理员账号') ?>
<?= $form->field($addplat, 'password1')->textInput(['maxlength' => 200,'value'=>123456])->label('管理员密码') ?>
<?= $form->field($addplat, 'number2')->textInput(['maxlength' => 200])->label('操作员账号') ?>
<?= $form->field($addplat, 'password2')->textInput(['maxlength' => 200,'value'=>123456])->label('操作员密码') ?>
<?= $form->field($addplat, 'address')->textInput(['maxlength' => 200])->label('测试地址') ?>
<?= $form->field($addplat, 'notice')->dropDownList(['web'=>'web','h5'=>'h5','app'=>'app','pc'=>'pc','数字报'=>'数字报'], ['style'=>'width:120px'])->label('备注') ?>

<?= Html::submitButton('提交', ['class'=>'btn btn-primary','name' =>'submit-button']) ?>

<?= Html::resetButton('重置', ['class'=>'btn btn-primary','name' =>'submit-button']) ?>

<?php ActiveForm::end(); ?>
