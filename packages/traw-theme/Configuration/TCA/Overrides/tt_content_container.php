<?php

defined('TYPO3') || die('Access denied.');

call_user_func(function ($_EXTKEY = 'traw_theme', $table = 'tt_content') {
    \TRAW\ContainerWrap\Configuration\Container::registerContainers(
        \TRAW\TrawTheme\Configuration\Container::getContainerConfiguration()
    );

    //Example with all configuration options
    \TRAW\ContainerWrap\Configuration\Container::registerContainers([
        'example_container' => [
            'label' => 'EXAMPLE_CONTAINER', //backend label
            'description' => 'description of the container',
            'value' => 'row-example',  //tca CType value
            'icon' => 'content-heart',
            'columnConfiguration' => [
                [
                    ['name' => 'Left column', 'colPos' => 100],
                    ['name' => 'Right column', 'colPos' => 101],
                ],
            ],
            'registerInNewContentElementWizard' => true, //in v13, set to false if you explicitly want to
            'saveAndCloseInNewContentElementWizard' => false,
            'group' => 'container',
            'header' => true, //add the --headers-- palette
            'bodytext' => true, //add the bodytext field
            
        ]
    ]);
});