<?php

declare(strict_types=1);

namespace AshokaTree\DevegaProfile\Controller;


/**
 * This file is part of the "Profile Display" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022 Nirmalya Mondal <nirmalya.mondal@gmail.com>, AshokaTree
 */

use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * ProfileController
 */
class ProfileController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * profileRepository
     * 
     * @var \AshokaTree\DevegaProfile\Domain\Repository\ProfileRepository
     */
    protected $profileRepository = null;

    /**
     * @param \AshokaTree\DevegaProfile\Domain\Repository\ProfileRepository $profileRepository
     */
    public function injectRecordRepository(\AshokaTree\DevegaProfile\Domain\Repository\ProfileRepository $profileRepository)
    {
        $this->profileRepository = $profileRepository;
    }

    /**
     * @var \TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface
     */
    protected $configurationManager;

    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $totalIds = GeneralUtility::trimExplode(',', $this->settings['profile'], true);
        $totalProfiles = count($totalIds);
        if($totalProfiles = 1) { $setWidth = ""; }
        if($totalProfiles = 2) { $setWidth = ""; }
        if($totalProfiles = 3) { $setWidth = ""; }
        $profiles = $this->profileRepository->findByUidList($this->settings['profile']);
        //$profiles = $this->profileRepository->findBySysfolderOrAll(3);
        $this->view->assign('profiles', $profiles);
        return $this->htmlResponse();
    }
}
