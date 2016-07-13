<?php
    use yii\helpers\Html;
    $this->title = 'Главная';
    app\assets\ChartAsset::register($this);
?>

<div class="admin-default-index">
<div class="content">
<h1 class="title">Общая статистика</h1>

<div class="container-flex">
	<div class="flex-item stat-products">
		<h1 class="counter"><?= $products ?></h1>
		<h2 class="counter-text">Статей</h2>
		<i class="fa fa-book" aria-hidden="true"></i>
		<div class="more-info"><?= Html::a('Подробнее', ['/admin/products/']) ?></div>
	</div>
	<div class="flex-item stat-users">
		<h1 class="counter"><?= $users ?></h1>
		<h2 class="counter-text">Пользователей</h2>
		<i class="fa fa-user" aria-hidden="true"></i>
		<div class="more-info"><?= Html::a('Подробнее', ['/admin/users/']) ?></div>
	</div>
</div>

</div>
</div>