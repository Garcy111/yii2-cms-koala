<?php
    use yii\helpers\Html;
    app\assets\BlocksitAsset::register($this);
    $this->registerJsFile('/modules/shop/js/shop.js');
?>

<div class="shop-default-index">
<?= Html::a('Корзина', ['cart']) ?>
    <div id="grid">
    <?php foreach ($products as $product): ?>
        <div class="grid">
        <div class="wrap">
            <?= Html::img($product->photo) ?>
            <h1 class="title"> <?= $product->name ?> </h1>
            <p>Цена: <?= $product->price ?> руб.</p>
            <?php for($i=0; count($product->values) > $i; $i++): ?>
                <p>
                <?= $product->values[$i]->productAttribute->name ?>
                <?= $product->values[$i]->value ?>
                </p>
            <?php endfor ?>
            <?= Html::button('Добавить в корзину', ['class' => 'addCart', 'data-product-id' => $product->id]) ?>
       </div>
       </div>
    <?php endforeach ?>
    </div>
</div>