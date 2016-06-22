<?php

namespace app\assets;

use yii\web\AssetBundle;

class GridbootstrapAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'libs/bootstrap/css/bootstrap-grid-3.3.1.min.css',
    ];
}