<?php
use yii\helpers\Html;

app\assets\GridbootstrapAsset::register($this);
$this->registerCssFile('/modules/main/posts.css');
$this->title = $post->title;
$this->registerMetaTag(['name' => 'description', 'content' => $post->meta_desc]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $post->meta_keywords]);
?>

<div class="post">
	<h1 class="title"><?= $post->title ?></h1>
	<?= $post->content; ?>
</div>