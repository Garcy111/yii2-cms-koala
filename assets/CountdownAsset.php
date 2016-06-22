<?php

namespace app\assets;

use yii\web\AssetBundle;

class CountdownAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'libs/countdown/jquery.countdown.css',
    ];
    public $js = [
    'libs/countdown/jquery.countdown.min.js',
    'libs/countdown/jquery.countdown-ru.js',
    'libs/countdown/jquery.plugin.js',
    ];
    public $depends = [
    ];
}