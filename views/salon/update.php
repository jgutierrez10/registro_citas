<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Salon */

$this->title = 'Update Salon: ' . ' ' . $model->salon_id;
$this->params['breadcrumbs'][] = ['label' => 'Salons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->salon_id, 'url' => ['view', 'id' => $model->salon_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="salon-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
