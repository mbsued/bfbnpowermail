<?php

defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'bfbnpowermail',
    'Configuration/TypoScript',
    'Powermail Addition (after Powermail Template)'
);
