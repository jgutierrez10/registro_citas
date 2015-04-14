<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Clase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clase-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_clase')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'descripcion_clase')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'fecha_clase')->textInput() ?>

    <?= $form->field($model, 'hora_inicio_clase')->textInput() ?>

    <?= $form->field($model, 'hora_fin_clase')->textInput() ?>

    <?= $form->field($model, 'duracion_minuto_clase')->textInput() ?>

    <?= $form->field($model, 'tipo_clase_id')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'salon_id')->textInput(['maxlength' => 10]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
