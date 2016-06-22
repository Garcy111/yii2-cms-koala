<?php

namespace app\assets;

use yii\web\AssetBundle;

class EauthAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'widgets/eauth/eauth.css',
    ];
    public $js = [
        'widgets/eauth/eauth.js',
    ];
    public $depends = [
    ];
}