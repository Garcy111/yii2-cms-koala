<?php

namespace app\assets;

use yii\web\AssetBundle;

class BlocksitAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'libs/blocksit/grid.css',
    ];
    public $js = [
        'libs/blocksit/blocksit.min.js',
        'libs/blocksit/setting-grid.js',
    ];
}