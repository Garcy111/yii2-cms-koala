<?php

namespace app\assets;

use yii\web\AssetBundle;

class HamburgersAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/libs/hamburgers/hamburgers.css',
    ];
    public $js = [
       '/libs/hamburgers/hamburgers.js',
    ];
}