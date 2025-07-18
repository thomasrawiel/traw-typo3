<?php

defined('TYPO3') || die('Access denied.');

call_user_func(function ($_EXTKEY = 'traw_theme', $table = 'pages') {
     \TRAW\VhsCol\Configuration\Doktypes::registerDoktypes([
        [
            'label' => 'My Events',
            'value' => 22,
            'icon' => 'actions-calendar',
            'group' => 'traw-doktype',
        ],
        [
            'label' => 'My special Type',
            'value' => 23,
            'icon' => 'apps-pagetree-folder-contains-tt-address',
            'group' => 'traw-doktype',
            'itemType' => \TYPO3\CMS\Core\Domain\Repository\PageRepository::DOKTYPE_SYSFOLDER,
            'allowedTables' => 'tt_content,tt_address',

        ],
    ], 'TRAW Theme Doktypes');
});
