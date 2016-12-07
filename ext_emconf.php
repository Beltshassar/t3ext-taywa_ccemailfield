<?php
$EM_CONF[$_EXTKEY] = array(
	'title' => 'Add ccEmailField to postProcessor of the sysext Form',
	'description' => 'This extension takes the content a field and uses this content (an e-mail address) when sending the form as CC address',
	'category' => 'plugin',
	'state' => 'stable',
	'author' => 'Fabian Thommen',
	'author_email' => 'ft@taywa.ch',
	'author_company' => 'taywa gmbh, Zürich',
	'clearCacheOnLoad' => 0,
	'version' => '0.0.1',
	'constraints' => array(
		'depends' => array(
			'typo3' => '7.6.0-8.99.99',
			'form'  => '7.6.0-0.0.0',
		),
		'conflicts' => array(),
		'suggests' => array(),
	),
);