<?php

namespace app\assets;

use yii\web\AssetBundle;

class ChartAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
        '/libs/chart/Chart.bundle.min.js',
        '/libs/chart/chart.line.init.js',
    ];
}