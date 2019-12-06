<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
 <?= Html::a('Back', ['/student/index'], ['class'=>'btn btn-info grid-button']) ?>
 <hr>
<?php $form = ActiveForm::begin(); ?>
 
    <?= $form->field($model, 'name'); ?>
    <?= $form->field($model, 'email'); ?>
    <?= $form->field($model, 'password'); ?>
    <?= $form->field($model, 'mobile'); ?>
    <?= $form->field($model, 'address'); ?>
    <?= $form->field($model, 'course'); ?>
    <?= $form->field($model, 'section'); ?>
     <!-- <?= $form->field($model, 'profile_pic')->fileInput() ?> -->
     
    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']); ?>
 
<?php ActiveForm::end(); ?>