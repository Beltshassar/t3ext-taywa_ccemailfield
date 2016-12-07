<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][TYPO3\CMS\Form\PostProcess\MailPostProcessor::class] = [
    'className' => Taywa\Ccemailfield\MailPostProcessor::class,
];
