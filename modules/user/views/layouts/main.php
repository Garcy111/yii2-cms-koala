<?php
use yii\helpers\Html;
use yii\web\YiiAsset;

YiiAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->registerMetaTag(['name' => 'description', 'content' => 'description :)']); ?>
    <?= $this->registerMetaTag(['name' => 'keywords', 'content' => 'key words :)']); ?>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="container">
    <?= app\widgets\admin\ModalWidget::widget() ?>
    
    <?= $content ?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>