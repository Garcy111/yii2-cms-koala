<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\web\YiiAsset;
app\assets\FontawesomeAsset::register($this);
$this->registerCssFile('/styles/fonts.css');
$this->registerCssFile('/modules/blog/main.css', ['depends' => 'app\assets\BulmaAsset']);
$this->registerCssFile('/modules/blog/like.css');
$this->registerJsFile('/modules/blog/toProgress.min.js', ['depends' => 'yii\web\YiiAsset', 'position' => \yii\web\View::POS_HEAD]);
$this->registerJsFile('/modules/blog/main.js');
$this->registerJsFile('/modules/blog/mo.min.js');
$this->registerJsFile('/modules/blog/like.js');

// YiiAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <?= app\components\ModalWidget::widget() ?>
    <div id="top-progress-bar"></div>
    <div class="hero is-fullheight hero-preload"></div>
    <header class="header">
		<div class="column is-7-desktop is-8-tablet is-10-mobile">
	<nav>
		<a href="/" class=""><div class="logo"></div></a>
		<ul class="menu is-hidden-mobile">
			<li><a class="menu-tab-click" href="/">Блог</a></li>
			<li><a class="menu-tab" href="#">Пенька</a></li>
			<li><a class="menu-tab" href="#">Крот</a></li>
			<li><a class="menu-tab" href="#">Бутерброд</a></li>
		</ul>
	</nav>
	</div>
		<div class="column is-5-desktop is-4-tablet is-2-mobile">
			<!-- Hamburger menu (on mobile) -->
			<div class="mobile-menu is-hidden-tablet">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</div>
			<!-- End Hamburger menu -->
			<div class="sign-in is-hidden-mobile">
				<?php if (Yii::$app->user->isGuest): ?>
				<?= Html::a('Вход', ['/user/default/login']) ?>
				<span>/</span>
				<a href="/reg">Регистрация</a>
				<?php else: ?>
					<h3 class="username">Привет, <?= Yii::$app->user->identity->username ?></h3>
					<?= Html::a('<div class="logout"><i class="fa fa-sign-out"></i></div>', ['/user/default/logout']) ?>
				<?php endif ?>
			</div>
			<div class="search-box is-hidden-touch">
			<?= Html::beginForm(['/blog/search/index'], 'GET') ?>
				<p class="control has-addons">
					<input class="search-input" name="query" type="text" placeholder="Поиск">
					<button class="button button-search">
						<i class="fa fa-search"></i>
					</button>
				</p>
			<?= Html::endForm() ?>
			</div>
		</div>
	</header>
    <?= $content ?>
    <script src="/modules/blog/preloader.js"></script>
    <div class="modal">
	<div class="modal-background"></div>
	<div class="modal-content">
	<ul class="list-mobile-menu">
		<li><a href="#">Блог</a></li>
		<li><a href="#">Уроки</a></li>
		<li><a href="#">Контакты</a></li>
	</ul>
	</div>
	<button class="modal-close"></button>
</div>
<script id="dsq-count-scr" src="//websnack2.disqus.com/count.js" async></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>