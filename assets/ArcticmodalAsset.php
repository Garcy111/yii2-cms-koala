<?php

namespace app\assets;

use yii\web\AssetBundle;

class ArcticmodalAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'libs/arcticmodal/jquery.arcticmodal-0.3.css',
        // 'libs/arcticmodal/themes/simple.css',
    ];
    public $js = [
    'libs/arcticmodal/jquery.arcticmodal-0.3.min.js',
    ];
    public $depends = [
    ];
}