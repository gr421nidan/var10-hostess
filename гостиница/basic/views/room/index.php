<?php

use app\models\Room;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Номера';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="room-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php if (Yii::$app->user->identity->isAdmin()):?>
            <?= Html::a('Добавить номера', ['create'], ['class' => 'btn btn-success'])?>
        <?php endif; ?>
    </p>
    <?php
    $columns = [
        ['class' => 'yii\grid\SerialColumn'],
        'name',
        'description:ntext',
        'count',
        'price',
    ];

    if (Yii::$app->user->identity->isAdmin()) {
        $columns[] = [
            'class' => ActionColumn::className(),
            'urlCreator' => function ($action, Room $model, $key, $index, $column) {
                return Url::toRoute([$action, 'id' => $model->id]);
            },
        ];
    } else {
        $columns[] = [
            'format' => 'raw',
            'value' => function ($model) {
                return Html::beginForm(['/room/booking', 'id' => $model->id])
                    . Html::textInput('count', 0)
                    . Html::submitButton(
                        'Забронировать',
                        ['class' => 'btn btn-primary']
                    )
                    . Html::endForm();
            },
        ];
    }
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => $columns
    ]); ?>


</div>
