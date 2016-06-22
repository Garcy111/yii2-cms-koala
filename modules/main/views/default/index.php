<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use app\assets\MainAsset;
use app\assets\GridbootstrapAsset;

$this->title = 'Главная страница';
MainAsset::register($this);
GridbootstrapAsset::register($this);
?>
<div class="main-default-index">
    <h1>Главная страница</h1>
    <?php if (Yii::$app->user->can('user')): ?>
        <p>Вы зашли на сайт, Ваше имя: <?= Yii::$app->user->identity->username; ?> </p> 
        <?= Html::a('Выйти', ['/logout']); ?>
    <?php else: ?>
        <?= Html::a('Войти на сайт', ['/login']); ?>
    <?php endif ?>
</div>