<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
 <?= Html::a('Back', ['/country/index'], ['class'=>'btn btn-info grid-button']) ?>
 <hr>
<?php $form = ActiveForm::begin(); ?>
 
    <?= $form->field($model, 'code'); ?>
    <?= $form->field($model, 'name'); ?>
    <?= $form->field($model, 'population'); ?>
     
    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']); ?>
 
<?php ActiveForm::end(); ?>