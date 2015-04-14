<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\InstructorClase */

$this->title = 'Create Instructor Clase';
$this->params['breadcrumbs'][] = ['label' => 'Instructor Clases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="instructor-clase-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
