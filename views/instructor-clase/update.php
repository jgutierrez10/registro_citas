<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\InstructorClase */

$this->title = 'Update Instructor Clase: ' . ' ' . $model->instructor_clase_id;
$this->params['breadcrumbs'][] = ['label' => 'Instructor Clases', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->instructor_clase_id, 'url' => ['view', 'id' => $model->instructor_clase_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="instructor-clase-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
