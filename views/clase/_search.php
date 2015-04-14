<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PostClase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clase-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'clase_id') ?>

    <?= $form->field($model, 'nombre_clase') ?>

    <?= $form->field($model, 'descripcion_clase') ?>

    <?= $form->field($model, 'fecha_clase') ?>

    <?= $form->field($model, 'hora_inicio_clase') ?>

    <?php // echo $form->field($model, 'hora_fin_clase') ?>

    <?php // echo $form->field($model, 'duracion_minuto_clase') ?>

    <?php // echo $form->field($model, 'tipo_clase_id') ?>

    <?php // echo $form->field($model, 'salon_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
