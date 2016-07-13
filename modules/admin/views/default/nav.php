<?php
    use yii\helpers\Html;

    $controller = $this->context->action->controller->id;
    $route = $this->context->action->uniqueId;
?>
<nav>
<ul class="nav">

	<div class="profile">
		<?php $user = Yii::$app->user->identity; ?>
		<?= Html::img($user->avatar, ['class' => 'profile-avatar']) ?>
		<?= '<h1 class="profile-username">' . $user->username . '</h1>' ?>
		<p class="profile-status"><span class="ind"></span> Online</p>
	</div>

	<li <?php if ($route === 'admin/default/index'): ?> class="click" <?php endif?>>
		<?= Html::a('<i class="fa fa-home" aria-hidden="true"></i> Главная', ['/admin']); ?>
	</li>

	<li <?php if ($route === 'admin/menu/index'): ?> class="click" <?php endif?>>
		<?= Html::a('<i class="fa fa-bars" aria-hidden="true"></i> Меню', ['/admin/menu/index']); ?>
	</li>

	<!-- Posts -->
	<div class="nav-part">
	<div class="nav-parent">
		<li <?php if ($controller == 'posts' || $controller == 'post-categories'): ?> class="click" <?php endif?>>
			<?= Html::a('<i class="fa fa-pencil" aria-hidden="true"></i> Записи <i class="fa fa-angle-right" aria-hidden="true"></i>', ['/admin/posts']); ?>
		</li>
	</div>
	<div class="nav-child">
		<li <?php if ($route === 'admin/posts/index'): ?> class="click" <?php endif?>>
			<?= Html::a('Все записи', ['/admin/posts']); ?>
		</li>
		<li <?php if ($route === 'admin/posts/create'): ?> class="click" <?php endif?>>
			<?= Html::a('Создать запись', ['/admin/posts/create']); ?>
		</li>
		<li <?php if ($route === 'admin/post-categories/index'): ?> class="click" <?php endif?>>
			<?= Html::a('Категории', ['/admin/post-categories']); ?>
		</li>
		<li <?php if ($route === 'admin/tags/index'): ?> class="click" <?php endif?>>
			<?= Html::a('Метки', ['/admin/tags']); ?>
		</li>
	</div>
	</div>
	<!-- End posts -->

	<!-- Products -->
	<div class="nav-part">
	<div class="nav-parent">
		<li <?php if ($controller == 'products' || $controller == 'product-category' || $controller == 'attribute' || $controller == 'value'): ?> class="click" <?php endif?>>
			<?= Html::a('<i class="fa fa-product-hunt" aria-hidden="true"></i> Продукты <i class="fa fa-angle-right" aria-hidden="true"></i>', ['/admin/products']); ?>
		</li>
	</div>
	<div class="nav-child">
		<li <?php if ($route === 'admin/products/index'): ?> class="click" <?php endif?>>
			<?= Html::a('Все продукты', ['/admin/products']); ?>
		</li>
		<li <?php if ($route === 'admin/products/create'): ?> class="click" <?php endif?>>
			<?= Html::a('Создать продукт', ['/admin/products/create']); ?>
		</li>
		<li <?php if ($route === 'admin/product-category/index'): ?> class="click" <?php endif?>>
			<?= Html::a('Категории', ['/admin/product-category']); ?>
		</li>
		<li <?php if ($route === 'admin/attribute/index'): ?> class="click" <?php endif?>>
			<?= Html::a('Атрибуты', ['/admin/attribute']); ?>
		</li>
		<li <?php if ($route === 'admin/value/index'): ?> class="click" <?php endif?>>
			<?= Html::a('Значения', ['/admin/value']); ?>
		</li>
	</div>
	</div>
	<!-- End products -->

	<li <?php if ($controller == 'orders'): ?> class="click" <?php endif?>>
		<?= Html::a('<i class="fa fa-shopping-bag" aria-hidden="true"></i> Заказы', ['/admin/orders']); ?>
	</li>

	<li <?php if ($route === 'admin/pages/index'): ?> class="click" <?php endif?>>
		<?= Html::a('<i class="fa fa-file-text" aria-hidden="true"></i> Страницы', ['/admin/pages/index']); ?>
	</li>

	<div class="nav-part">
	<div class="nav-parent">
		<li <?php if ($controller == 'users'): ?> class="click" <?php endif?>>
			<?= Html::a('<i class="fa fa-user"></i> Пользователи <i class="fa fa-angle-right" aria-hidden="true"></i>', ['/admin/users']); ?>
		</li>
	</div>
	<div class="nav-child">
		<li <?php if ($route === 'admin/users/index'): ?> class="click" <?php endif?>>
			<?= Html::a('Все пользователи', ['/admin/users']); ?>
		</li>
		<li <?php if ($route === 'admin/users/create'): ?> class="click" <?php endif?>>
			<?= Html::a('Создать пользователя', ['/admin/users/create']); ?>
		</li>
	</div>
	</div>
</ul>
</nav>