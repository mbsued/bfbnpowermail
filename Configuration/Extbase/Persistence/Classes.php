<?php
declare(strict_types = 1);

return [
    \Bfbn\Bfbnpowermail\Domain\Model\Form::class => [
        'tableName' => 'tx_powermail_domain_model_form',        
    ],
    \Bfbn\Bfbnpowermail\Domain\Model\Page::class => [
        'tableName' => 'tx_powermail_domain_model_page',        
    ],
    \Bfbn\Bfbnpowermail\Domain\Model\Field::class => [
        'tableName' => 'tx_powermail_domain_model_field',        
    ],	
];


return [
	\In2code\Powermail\Domain\Model\Form::class => [
		'subclasses' => [
		0 => \Bfbn\Bfbnpowermail\Domain\Model\Form::class,
		]
	],
	\Bfbn\Bfbnpowermail\Domain\Model\Form::class => [
		'tableName' => 'tx_powermail_domain_model_form',
		'recordType' => 0,
	],
	\In2code\Powermail\Domain\Model\Page::class => [
		'subclasses' => [
		0 => \Bfbn\Bfbnpowermail\Domain\Model\Page::class,
		]
	],
	\Bfbn\Bfbnpowermail\Domain\Model\Page::class => [
		'tableName' => 'tx_powermail_domain_model_page',
		'recordType' => 0,
	],
	\In2code\Powermail\Domain\Model\Field::class => [
		'subclasses' => [
		0 => \Bfbn\Bfbnpowermail\Domain\Model\Field::class,
		]
	],
	\Bfbn\Bfbnpowermail\Domain\Model\Field::class => [
		'tableName' => 'tx_powermail_domain_model_field',
		'recordType' => 0,
	],	
];