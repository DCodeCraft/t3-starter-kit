<?php
defined('TYPO3') or die('Access denied.');
call_user_func(function()
{
    $extensionKey = 't3_starter_kit';
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'T3 Starter-kit'
    );
});
