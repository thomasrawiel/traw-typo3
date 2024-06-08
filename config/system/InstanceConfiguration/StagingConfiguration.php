<?php
(defined('TYPO3') || getenv('DEPLOY_NAME') === 'local') || die('Access denied.');

return [
    'ddev' => [
        'stage' => [
            'db' => 'db',
            'user' => 'db',
            'pwd' => 'db',
            'host' => 'db',
            'port' => '3306',
            'domain' => 'traw.ddev.site',
            'context' => 'Development/DDEV',
            'level-path' => 'var/www/html',
            //'liveServer' => 'live', //enable when running ddev live instance
            'ip' => '',
            'webuser' => '',
            'webpwd' => '',
            'levelName' => 'DDEV stage'
        ],
    ],
];