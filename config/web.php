<?php

$params = require(__DIR__ . '/params.php');
$eauth = require(__DIR__ . '/eauth.php');

$config = [
    'id' => 'app',
    'defaultRoute' => 'main/default/index',
    'basePath' => dirname(__DIR__),
    'language' => 'ru-RU',
    'bootstrap' => ['log'
    ],
    'modules' => [
        'main' => [
            'class' => 'app\modules\main\Module',
        ],
        'blog' => [
            'class' => 'app\modules\blog\Module',
        ],
        'shop' => [
            'class' => 'app\modules\shop\Module',
        ],
        'user' => [
            'class' => 'app\modules\user\Module',
        ],
        'admin' => [
            'class' => 'app\modules\admin\Module',
        ],
    ],
    'components' => [
        'request' => [
            'baseUrl' => '',
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '7ZbOxQ8ulmgmNXlLEdGFszvGj_pbZZSX',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\modules\user\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => ['user/default/login'],
        ],
        'reCaptcha' => [
            'name' => 'reCaptcha',
            'class' => 'himiklab\yii2\recaptcha\ReCaptcha',
            'siteKey' => '6LdL_woTAAAAAKgZgmi39IhEJarh2uq3PilmNCbh',
            'secret' => '6LdL_woTAAAAAC9dD9eFsQhnJIY9xpN8nVJKAyfK',
        ],
        'errorHandler' => [
            'errorAction' => 'main/default/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
        ],
        'authManager' => [
            'class' => 'yii\rbac\PhpManager',
            'defaultRoles' => ['guest'],
            'itemFile' => '@app/rbac/items.php',
            'assignmentFile' => '@app/rbac/assignments.php',
            'ruleFile' => '@app/rbac/rules.php'
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'eauth' => $eauth,
         'i18n' => [
            'translations' => [
                'eauth' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@eauth/messages',
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '' => 'main/default/index',
                // '<_a:error>' => 'main/default/<_a>',
                'activation/<id>/<hash>' => 'user/default/activation',
                'user' => 'user/default',
                '<_a:(login|logout|reg|recovery)>' => 'user/default/<_a>',
                '<_a:(update)>' => 'user/profile/<_a>',
                'profile' => 'user/profile',
                'login/<service:google|facebook|etc>' => 'user/default/login',
                // module admin
                'admin' => 'admin/default/index',
                'admin/<_a:(login|logout|blog|settings)>' => 'admin/default/<_a>',
                // module blog
                'blog/category/<ctg>' => 'blog/default/index',
                'blog/tag/<tag>' => 'blog/default/index',
                'blog/page/<page>' => 'blog/default/index',
                'blog/<link>' => 'blog/default/post',
                // module shop
                'shop' => 'shop/default/index',
                'shop/<_a(cart)>' => 'shop/default/<_a>',
            ],
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
