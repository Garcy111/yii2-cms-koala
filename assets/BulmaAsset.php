<?php

namespace app\assets;

use yii\web\AssetBundle;

class BulmaAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'libs/bulma/css/bulma.min.css',
    ];
}