<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_usuario')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'clave_usuario')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'tipo_usuario_id')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'activo')->checkbox() ?>

    <?= $form->field($model, 'cliente_id')->textInput(['maxlength' => 10]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
