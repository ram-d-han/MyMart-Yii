<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        'Uploads' => 'http://localhost/myMart/backend/web/Uploads/'
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'StatisticComponent' => [
            'class' => 'frontend\components\StatisticComponent',
            'on save-statistic' => ['frontend\components\StatisticComponent', 'handlerSave'],
        ],
    ],
];