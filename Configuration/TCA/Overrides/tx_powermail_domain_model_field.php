<?php

defined('TYPO3_MODE') || die('Access denied.');

/**
* extend powermail fields tx_powermail_domain_model_field
*/
$tempColumns = array (
	'bfbnreadonly' => array(
		'exclude' => 1,
		'label' => 'Readonly',
		'config' => array (
			'type' => 'check'
		),
	),
	'bfbncol' => array(
		'displayCond' => 'FIELD:type:=:textarea',
		'exclude' => 1,
		'label' => 'Spalten',
		'description' => 'Slider 20 - 40',
		'config' => array (
			'type' => 'input',
			'size' => 5,
			'eval' => 'trim,int',
			'range' => array (
				'lower' => 20,
				'upper' => 40,
			),
			'default' => 20,
			'slider' => array (
				'step' => 1,
				'width' => 200,
			),
		),
	),
	'bfbnrow' => array(
		'displayCond' => 'FIELD:type:=:textarea',
		'exclude' => 1,
		'label' => 'Zeilen',
		'description' => 'Slider 2 - 10',
		'config' => array (
			'type' => 'input',
			'size' => 5,
			'eval' => 'trim,int',
			'range' => array (
				'lower' => 2,
				'upper' => 10,
			),
			'default' => 5,
			'slider' => array (
				'step' => 1,
				'width' => 200,
			),
		),
	),	
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tx_powermail_domain_model_field',
    $tempColumns
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_powermail_domain_model_field',
    '--div--;BFBN, bfbnreadonly,bfbncol,bfbnrow',
    '',
    'after:own_marker_select'
);
