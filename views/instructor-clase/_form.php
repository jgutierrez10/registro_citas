<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InstructorClase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="instructor-clase-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'usuario_id')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'clase_id')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'rol_instructor_clase')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
