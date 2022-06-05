<?php
defined('TYPO3') || die();

$boot = static function (): void {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
	    @import \'EXT:devega_theme/Configuration/TSconfig/Page/devega_theme.txt\'
    ');
};

$boot();
unset($boot);    
