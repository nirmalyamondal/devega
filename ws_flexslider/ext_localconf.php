<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}


call_user_func(
    function ($extKey) {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'WapplerSystems.WsFlexslider',
            'Pi1',
            [
                \WapplerSystems\WsFlexslider\Controller\FlexsliderController::class => 'list',
            ],
            // non-cacheable actions
            [
                \WapplerSystems\WsFlexslider\Controller\FlexsliderController::class => 'list',
            ]
            
        );

        //\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:ws_flexslider/Configuration/TSconfig/ContentElementWizard.txt">');

                // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        wsflexslider {
                            iconIdentifier = wsflexslider-plugin-pi1
                            title = LLL:EXT:ws_flexslider/Resources/Private/Language/locallang_db.xlf:tx_wsflexslider_pi1.name
                            description = LLL:EXT:ws_flexslider/Resources/Private/Language/locallang_db.xlf:tx_wsflexslider_pi1.description
                            tt_content_defValues {
                                CType = list
                                list_type = wsflexslider_pi1
                            }
                        }
                    }
                    show = *
                }
           }'
        );

            $icons = [
                'ext-wsflexslider-wizard-icon' => 'plugin_wizard.png',
                'ext-wsflexslider-image' => 'picture.png',
            ];
            $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
            foreach ($icons as $identifier => $path) {
                $iconRegistry->registerIcon(
                    $identifier,
                    \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
                    ['source' => 'EXT:'.$extKey.'/Resources/Public/Icons/' . $path]
                );
            }

    },
    'ws_flexslider'
);

