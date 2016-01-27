<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '',
            // unique CSRF cookie parameter for frontend (set by kartik-v/yii2-app-practical-a)
            'csrfParam' => '_frontendCsrf',
        ],
        // unique identity cookie configuration for frontend (set by kartik-v/yii2-app-practical-a)
        'user' => [
            'identityCookie' => [
                'name' => '_frontendUser', // unique for frontend
                'path' => '/' // set it to correct path for frontend app.
            ]
        ],
        // unique session configuration for frontend (set by kartik-v/yii2-app-practical-a)
        'session' => [
            'name' => '_frontendSessionId', // unique for frontend
            'savePath' => __DIR__ . '/../runtime/sessions' // set it to correct path for frontend app.
        ]
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
