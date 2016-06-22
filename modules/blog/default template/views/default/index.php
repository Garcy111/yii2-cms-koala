<?php
use yii\helpers\Html;

app\assets\GridbootstrapAsset::register($this);
$this->registerCssFile('/modules/blog/posts.css');
$this->title = 'Статьи';
?>

<ul class="categories">
<?php foreach ($categories as $category): ?>
	<li><?= Html::a($category->name, ['/blog', 'ctg' => $category->id]); ?></li>
<?php endforeach; ?>
</ul>

<?php foreach ($posts as $post): ?>
	<div class="post">
		<h1 class="title"><?= Html::a($post->title, ['/blog/default/post', 'link' => $post->link]); ?></h1>
		<?php if (!empty($post->miniature)): ?>
			<img class="miniature" src="<?= $post->miniature; ?>" alt="miniature">
		<?php endif; ?>
		<p class="description"><?= $post->description; ?></p>
	</div>
<?php endforeach; ?>