<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Booking $model */

$this->title = 'Редактировать бронирование: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Бронирование', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="booking-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
