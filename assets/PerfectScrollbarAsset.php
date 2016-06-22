<?php

namespace app\assets;

use yii\web\AssetBundle;

class PerfectScrollbarAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'libs/perfect-scrollbar/css/perfect-scrollbar.min.css',
    ];
    public $js = [
        'libs/perfect-scrollbar/js/min/perfect-scrollbar.jquery.min.js',
    ];
}