<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_devegaprofile_domain_model_profile', 'EXT:devega_profile/Resources/Private/Language/locallang_csh_tx_devegaprofile_domain_model_profile.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_devegaprofile_domain_model_profile');
})();
