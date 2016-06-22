<?php

namespace app\assets;

use yii\web\AssetBundle;

class TinymceAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $js = [
        'libs/tinymce/tinymce.min.js',
        'libs/tinymce/init.js',
    ];

   public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
}