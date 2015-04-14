<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Salon */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="salon-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_salon')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'ubicacion_salon')->textInput(['maxlength' => 200]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
