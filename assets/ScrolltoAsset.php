<?php

namespace app\assets;

use yii\web\AssetBundle;

class ScrolltoAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
        'libs/scrollto/jquery.scrollTo.min.js',
    ];
}