<?php defined('TYPO3') || die('Access denied.');

if (is_file(__DIR__ . '/InstanceConfiguration/InstanceConfiguration.php')) {
    require __DIR__ . '/InstanceConfiguration/InstanceConfiguration.php';
}
if (is_file(__DIR__ . '/InstanceConfiguration/SolrTikaEnv.php')) {
    require __DIR__ . '/InstanceConfiguration/SolrTikaEnv.php';
}
if (getenv('DDEV_PROJECT') != '' && is_file(__DIR__ . '/InstanceConfiguration/AdditionalConfigurationDDEV.php')) {
    require_once __DIR__ . '/InstanceConfiguration/AdditionalConfigurationDDEV.php';
}
if (is_file(__DIR__ . '/conf.local.php')) {
    require_once __DIR__ . '/conf.local.php';
}