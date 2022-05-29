<?php

/*
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(array('Contact Person','contact_person'),'CType','pim_wp');

$GLOBALS['TCA']['tt_content']['types']['contact_person']['showitem']='
--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
header;Name,image;Photo,phone,fax,email,description,vcard,
--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,
--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
';
$GLOBALS['TCA']['tt_content']['types']['contact_person']['columnsOverrides'] = [
	'image' => [
		'config' => [
			'maxitems' => 1,
			'overrideChildTca' => [],
		]
	]
];



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(array('Text & Image','textimage'),'CType','pim_siteconf');

$GLOBALS['TCA']['tt_content']['types']['textimage']['showitem']='
--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header;header,
bodytext,image,
--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,
--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
';

$GLOBALS['TCA']['tt_content']['types']['textimage']['columnsOverrides'] = [
    'bodytext' => [
        'config' => [
            'enableRichtext' => true,
            'richtextConfiguration' => 'default'
    	]
	],
	'image' => [
		'config' => [
			'maxitems' => 1
		]
	]
];

*/