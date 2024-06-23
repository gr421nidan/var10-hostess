<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Добро пожаловать в нашу гостиницу!</h1>

        <p class="lead">Хотите заселиться?</p>
        <p>
            <?php if (Yii::$app->user->isGuest): ?>
                <a class="btn btn-lg btn-success" href="<?= \yii\helpers\Url::to(['site/login']) ?>">Заселиться</a>
            <?php else: ?>
                <a class="btn btn-lg btn-success" href="<?= \yii\helpers\Url::to(['room/index']) ?>">Заселиться</a>
            <?php endif; ?>
        </p>
    </div>

</div>
