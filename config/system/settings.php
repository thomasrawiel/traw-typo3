<?php
return [
    'BE' => [
        'debug' => true,
        'installToolPassword' => '$argon2i$v=19$m=65536,t=16,p=1$RDhRc1o0MG1ic1c3Y0drcQ$5ZvFB4QQwRWN6bz0tfvXtKSeM7C127C+a/xLWJbzYHw',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8mb4',
                'dbname' => 'db',
                'driver' => 'mysqli',
                'host' => 'db',
                'password' => 'db',
                'port' => 3306,
                'tableoptions' => [
                    'charset' => 'utf8mb4',
                    'collate' => 'utf8mb4_unicode_ci',
                ],
                'user' => 'db',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
            'loginLogoAlt' => '',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'powermail' => [
            'disableBackendModule' => '0',
            'disableIpLog' => '1',
            'disableMarketingInformation' => '0',
            'disablePluginInformation' => '0',
            'disablePluginInformationMailPreview' => '0',
            'enableCaching' => '0',
            'extender' => [
                'In2code\Powermail\Domain\Model\Field' => [
                    'powermailautocomplete' => 'TRAW\\Powermailautocomplete\\Domain\\Model\\Field',
                ],
                'In2code\Powermail\Domain\Model\Form' => [
                    'powermailautocomplete' => 'TRAW\\Powermailautocomplete\\Domain\\Model\\Form',
                ],
            ],
            'replaceIrreWithElementBrowser' => '0',
        ],
        'scheduler' => [
            'maxLifetime' => '1440',
        ],
        'staticfilecache' => [
            'backendDisplayMode' => 'both',
            'boostMode' => '0',
            'cacheTagsEnable' => '0',
            'clearCacheForAllDomains' => '1',
            'debugHeaders' => '0',
            'disableInDevelopment' => '0',
            'enableGeneratorBrotli' => '0',
            'enableGeneratorGzip' => '1',
            'enableGeneratorManifest' => '0',
            'enableGeneratorPhp' => '0',
            'enableGeneratorPlain' => '0',
            'hashUriInCache' => '0',
            'htaccessTemplateName' => 'EXT:staticfilecache/Resources/Private/Templates/Htaccess.html',
            'inlineAssetsFileSize' => '50000',
            'inlineScriptMinify' => '0',
            'inlineServiceFavIcon' => '0',
            'inlineServiceScripts' => '0',
            'inlineServiceStyles' => '0',
            'inlineStyleAssets' => 'ico,png,woff2',
            'inlineStyleMinify' => '0',
            'largeIdentifierInCacheTable' => '0',
            'overrideCacheDirectory' => '',
            'phpTemplateName' => 'EXT:staticfilecache/Resources/Private/Templates/Php.html',
            'rawurldecodeCacheFileName' => '0',
            'renameTablesToOtherPrefix' => '0',
            'sendCacheControlHeaderRedirectAfterCacheTimeout' => '0',
            'sendHttp2PushEnable' => '0',
            'sendHttp2PushFileExtensions' => 'css,js',
            'sendHttp2PushFileLimit' => '10',
            'sendHttp2PushLimitToArea' => '',
            'useFallbackMiddleware' => '1',
            'useReverseUriLengthInPriority' => '1',
            'validFallbackHeaders' => 'Content-Type,Content-Language,Content-Security-Policy,Link,X-SFC-Tags',
            'validHtaccessHeaders' => 'Content-Type,Content-Language,Content-Security-Policy,Link,X-SFC-Tags',
        ],
        'vhs_col' => [
            'enableGalleryProcessor' => '0',
        ],
        'whatchado' => [
            'whatchadoApiKey' => '',
            'whatchadoApiUrl' => 'https://whatchado.com/api2/videostories/',
        ],
    ],
    'FE' => [
        'cacheHash' => [
            'enforceValidation' => true,
        ],
        'debug' => true,
        'disableNoCacheParameter' => true,
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'processor' => 'GraphicsMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'RGB',
        'processor_effects' => false,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
    ],
    'LOG' => [
        'TYPO3' => [
            'CMS' => [
                'deprecations' => [
                    'writerConfiguration' => [
                        'notice' => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/local/bin/mailpit sendmail -t --smtp-addr 127.0.0.1:1025',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'UTF8filesystem' => true,
        'caching' => [
            'cacheConfigurations' => [
                'hash' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'imagesizes' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'pages' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'rootline' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
            ],
        ],
        'devIPmask' => '*',
        'displayErrors' => 1,
        'encryptionKey' => 'a512dcbeb5bb16622563511c3a2b16b5cc6206f518684f2c0f07f35a81e746263604287e62299f127f093924289db55a',
        'exceptionalErrors' => 12290,
        'features' => [
            'security.backend.enforceContentSecurityPolicy' => true,
            'security.usePasswordPolicyForFrontendUsers' => true,
        ],
        'sitename' => 'TRAW Test Instance',
        'systemMaintainers' => [
            1,
        ],
    ],
];
