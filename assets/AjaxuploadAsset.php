<?php

namespace app\assets;

use yii\web\AssetBundle;

class AjaxuploadAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
    'libs/ajaxupload/SimpleAjaxUploader.min.js',
    ];
}