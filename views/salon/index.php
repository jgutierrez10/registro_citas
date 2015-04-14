<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostSearchSalon */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Salons';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="salon-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Salon', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'salon_id',
            'nombre_salon',
            'ubicacion_salon',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
