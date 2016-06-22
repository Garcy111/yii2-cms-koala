<?php

namespace app\assets;

use yii\web\AssetBundle;

class OwlcarouselAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'libs/owl-carousel/owl.carousel.css',
    ];
    public $js = [
        'libs/owl-carousel/owl.carousel.min.js',
    ];
}