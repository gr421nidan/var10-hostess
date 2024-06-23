<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Room $model */

$this->title = 'Добавить номер';
$this->params['breadcrumbs'][] = ['label' => 'Номера', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="room-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
