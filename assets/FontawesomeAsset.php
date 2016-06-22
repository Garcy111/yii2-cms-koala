<?php

namespace app\assets;

use yii\web\AssetBundle;

class FontawesomeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'libs/font-awesome-4.6.0/css/font-awesome.min.css',
    ];
}