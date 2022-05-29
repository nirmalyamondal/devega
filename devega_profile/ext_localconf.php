<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'DevegaProfile',
        'Pi1',
        [
            \AshokaTree\DevegaProfile\Controller\ProfileController::class => 'list'
        ],
        // non-cacheable actions
        [
            \AshokaTree\DevegaProfile\Controller\ProfileController::class => 'list'
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    pi1 {
                        iconIdentifier = devega_profile-plugin-pi1
                        title = LLL:EXT:devega_profile/Resources/Private/Language/locallang_db.xlf:tx_devega_profile_pi1.name
                        description = LLL:EXT:devega_profile/Resources/Private/Language/locallang_db.xlf:tx_devega_profile_pi1.description
                        tt_content_defValues {
                            CType = list
                            list_type = devegaprofile_pi1
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
