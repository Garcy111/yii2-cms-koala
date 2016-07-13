<?php
use yii\helpers\Html;

$this->title = $post->title;
$this->registerMetaTag(['name' => 'description', 'content' => $post->meta_desc]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $post->meta_keywords]);
function rdate($param, $time=0) {
	if(intval($time)==0)$time=time();
	$MonthNames=array("Января", "Февраля", "Марта", "Апреля", "Мая", "Июня", "Июля", "Августа", "Сентября", "Октября", "Ноября", "Декабря");
	if(strpos($param,'M')===false) return date($param, $time);
	else return date(str_replace('M',$MonthNames[date('n',$time)-1],$param), $time);
}
?>

<div id="main" class="columns is-multiline">
<!-- Posts -->
<section id="posts" class="column is-8-desktop is-12-tablet is-12-mobile">
		<article class="post-full">
			<header class="columns is-mobile post-header">
				<div class="column is-9 post-title">
					<h1 class="title"><?= $post->title ?></h1>
				</div>
				<div class="column is-3 post-meta">
					<div class="date"><?= rdate('j M, Y', $post->date); ?></div>
				</div>
			</header>
			<div class="post-content">
				<ul class="stats">
					<li><i class="fa fa-home"><span><?= Html::a('Главная', ['/blog']) ?></span></i></li>
					<?php if (!empty($post->category->name)): ?>
						<li><i class="fa fa-folder"><span><?= Html::a($post->category->name, ['/blog/default/index', 'ctg' => $post->category->id]) ?></span></i></li>
					<?php endif ?>
					<?php foreach ($post->tags as $tag): ?>
						<li><i class="fa fa-tag"><?= Html::a('<span>'.$tag->name.'</span>', ['/blog/default/index', 'tag' => $tag->name]) ?></i></li>
					<?php endforeach ?>
					<li>
					<div class="item-heart">
						<button class="icobutton icobutton--heart">
							<i class="fa fa-heart like" data-post-id="<?= $post->id ?>">
								<span><?= $post->likes ?></span>
							</i>
						</button>
					</div>
					</li>
					<li><i class="fa fa-comment"><span class="disqus-comment-count" data-disqus-url="<?= 'http://websnack.ru/blog/'.$post->link ?>">0</span></i></li>
				</ul>
				<div class="full-content">
					<?= $post->content ?>
				</div>
			</div>
		</article>
	<div id="disqus_thread"></div>
	<script>
		 var disqus_config = function () {
		 this.page.url = window.location.href; // Replace PAGE_URL with your page's canonical URL variable
		 this.page.identifier = '<?php echo $post->id ?>'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
			 this.page.title = '<?php echo $post->link ?>';
		 };
		(function() {
			var d = document, s = d.createElement('script');

			s.src = '//websnack2.disqus.com/embed.js';

			s.setAttribute('data-timestamp', +new Date());
			(d.head || d.body).appendChild(s);
		})();
	</script>
</section>
<!-- End posts -->
<?= $this->render('sidebar', ['popular' => $popular]) ?>
</div>