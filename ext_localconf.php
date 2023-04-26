<?php
defined('TYPO3_MODE') || die('Access denied.');
// XCLASS Form
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\In2code\Powermail\Domain\Model\Form::class] = [
    'className' => \Bfbn\Bfbnpowermail\Domain\Model\Form::class
];

// Register extended domain class Form
//\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\Container\Container::class)
//    ->registerImplementation(
//        \In2code\Powermail\Domain\Model\Form::class,
//        \Bfbn\Bfbnpowermail\Domain\Model\Form::class
//    );
	
// XCLASS Page
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\In2code\Powermail\Domain\Model\Page::class] = [
    'className' => \Bfbn\Bfbnpowermail\Domain\Model\Page::class
];	

// Register extended domain class Page	
// \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\Container\Container::class)
//    ->registerImplementation(
//        \In2code\Powermail\Domain\Model\Page::class,
//        \Bfbn\Bfbnpowermail\Domain\Model\Page::class
//    );
// XCLASS Filed
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\In2code\Powermail\Domain\Model\Field::class] = [
    'className' => \Bfbn\Bfbnpowermail\Domain\Model\Field::class
];

// Register extended domain class Field	
//\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\Container\Container::class)
//    ->registerImplementation(
//        \In2code\Powermail\Domain\Model\Field::class,
//        \Bfbn\Bfbnpowermail\Domain\Model\Field::class
//    );	
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\In2code\Powermail\Domain\Repository\FormRepository::class] = [
	'className' => \Bfbn\Bfbnpowermail\Domain\Repository\FormRepository::class
];
