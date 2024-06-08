<?php

$config = \TYPO3\CodingStandards\CsFixerConfig::create();

$config->getFinder()->in(__DIR__ . '/vendor/traw/*');

return $config;
