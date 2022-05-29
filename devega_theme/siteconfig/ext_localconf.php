<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'] = 'EXT:siteconfig/Configuration/RTE/Default.yaml';
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['pim_ckeditor'] = 'EXT:siteconfig/Configuration/RTE/Default.yaml';

if (TYPO3_MODE === 'BE') {
	$icons = [
		'textimage' => 'textimage.svg',
	];
	$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
	foreach ($icons as $identifier => $path) {
		$iconRegistry->registerIcon(
			$identifier,
			\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
			['source' => 'EXT:siteconfig/Resources/Public/Icons/' . $path]
		);
	}
}