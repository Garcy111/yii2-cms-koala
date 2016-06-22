<?php

namespace app\assets;

use yii\web\AssetBundle;

class SumoselectAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'libs/sumoselect/sumoselect.css',
    ];
    public $js = [
        'libs/sumoselect/jquery.sumoselect.min.js',
    ];
}