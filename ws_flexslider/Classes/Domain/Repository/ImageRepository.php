<?php
namespace WapplerSystems\WsFlexslider\Domain\Repository;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Extbase\Persistence\QueryInterface;

/**
 *
 *
 * @author     Sven Wappler
 * @subpackage Repository
 * @license    http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class ImageRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     * @var \TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface
     */
    protected $configurationManager;

    // Order by sorting
    protected $defaultOrderings = [
        'sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
    ];

    // Image repository settings
    public function initializeObject() {
        /** @var $querySettings \TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings */
        $querySettings = $this->objectManager->get('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Typo3QuerySettings');
        // go for $defaultQuerySettings = $this->createQuery()->getQuerySettings(); if you want to make use of the TS persistence.storagePid with defaultQuerySettings(), see #51529 for details
        // Remove the pid constraint
        $querySettings->setRespectStoragePage(FALSE);
        //$querySettings->setRespectStoragePage(TRUE);   
        $this->setDefaultQuerySettings($querySettings);
    }

}
