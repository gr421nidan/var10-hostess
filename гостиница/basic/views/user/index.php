<?php

use app\models\User;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Посетители';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Оформить посетителя', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'username',
            'name',
            'surname',
            'tel',
            //'password',
            //'role',
            [
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::a('Редактировать', ['update', 'username' => $model->username], ['class' => 'btn btn-primary']);
                }
            ],
            [
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::a('Удалить', ['delete', 'username' => $model->username], ['class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Вы уверены, что хотите удалить посетителя?',
                            'method' => 'post',
                        ],]);
                }
            ],
        ],
    ]); ?>


</div>
