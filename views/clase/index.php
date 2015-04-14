<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostClase */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clases';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clase-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Clase', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'clase_id',
            'nombre_clase',
            'descripcion_clase',
            'fecha_clase',
            'hora_inicio_clase',
            // 'hora_fin_clase',
            // 'duracion_minuto_clase',
            // 'tipo_clase_id',
            // 'salon_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
