<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostSearchInstructorClase */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Instructor Clases';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="instructor-clase-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Instructor Clase', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'instructor_clase_id',
            'usuario_id',
            'clase_id',
            'rol_instructor_clase',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
