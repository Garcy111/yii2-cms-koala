<?php
use yii\helpers\Html;
function rusdate($param, $time=0) {
	if(intval($time)==0)$time=time();
	$MonthNames=array("Января", "Февраля", "Марта", "Апреля", "Мая", "Июня", "Июля", "Августа", "Сентября", "Октября", "Ноября", "Декабря");
	if(strpos($param,'M')===false) return date($param, $time);
	else return date(str_replace('M',$MonthNames[date('n',$time)-1],$param), $time);
}
?>


<!-- Sidebar -->
<section id="sidebar" class="column is-4-desktop is-12-tablet is-12-mobile">
	<header class="personal-info is-hidden-touch">
		<div class="logo"></div>
		<h1 class="title logo-title">WebSnack</h1>
		<p>Тут должен быть крутой слоган, но я его не придумал</p>
		<div class="separator"></div>
	</header>
	<div class="categories-post">
		<h1 class="title">Разделы блога</h1>
		<ul class="categories">
		<?php foreach ($categories as $category): ?>
			<li><?= Html::a($category->name, ['/blog/default/index', 'ctg' => $category->id]) ?></li>
		<?php endforeach ?>
		</ul>
		<div class="separator"></div>
	</div>
	<div class="popular-posts">
	<h1 class="title">Самое обсуждаемое</h1>
		<?php foreach($popular as $pop): ?>
			<article class="popular-post">
				<figure class="image">
				 <?= Html::a(Html::img($pop->miniature, ['class' => 'popular-post-image', 'alt' => 'Preview']), ['/blog/default/post', 'link' => $pop->link]) ?>
				</figure>
				<h1 class="title"><a href="#"><?= $pop->title ?></a></h1>
				<div class="popular-post-date">
					<?= rusdate('j M, Y', $pop->date); ?>
				</div>
			</article>
		<?php endforeach ?>
		<div class="separator"></div>
	</div>
	<div class="tags">
		<h1 class="title">Метки</h1>
		<?php foreach ($tags as $tag): ?>
			<span><i class="fa fa-tag"></i><?= Html::a($tag->name, ['/blog/default/index', 'tag' => $tag->name]) ?></span>
		<?php endforeach ?>
		<div class="separator"></div>
	</div>
	<footer class="footer">
		<ul class="soc">
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-vk"></i></a></li>
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-instagram"></i></a></li>
		</ul>
		<p class="bottom-info">
			<span>© websnack.ru</span>
			<span>Garcy999@yandex.ru</span>
		</p>
	</footer>
</section>
<!-- End sidebar -->