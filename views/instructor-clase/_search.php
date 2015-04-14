<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PostSearchInstructorClase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="instructor-clase-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'instructor_clase_id') ?>

    <?= $form->field($model, 'usuario_id') ?>

    <?= $form->field($model, 'clase_id') ?>

    <?= $form->field($model, 'rol_instructor_clase') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
