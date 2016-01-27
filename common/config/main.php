<?php
return [
    'name' => 'Yakes Application',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<alias:index|about|contact|login|logout>' => 'site/<alias>',
            ]
        ]
    ],
];
