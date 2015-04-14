<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cliente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_cliente')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'apellido_cliente')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'email_cliente')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'cedula_cliente')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'telefono_cliente')->textInput(['maxlength' => 11]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
