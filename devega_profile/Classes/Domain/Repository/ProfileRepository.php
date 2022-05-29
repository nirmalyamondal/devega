<?php
namespace AshokaTree\DevegaProfile\Domain\Repository;

/***
 *
 * This file is part of the "AshokaTree Vertical Slider" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Nirmalya Mondal <nirmalya.mondal@gmail.com>, https://ashokatree.net
 *
 ***/
use TYPO3\CMS\Core\Utility\GeneralUtility;

use TYPO3\CMS\Core\Database\ConnectionPool; 
use TYPO3\CMS\Core\Database\Query\Restriction\FrontendRestrictionContainer; 
use TYPO3\CMS\Extbase\Object\ObjectManager; 
use TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException; 
use TYPO3\CMS\Extbase\Persistence\Generic\Mapper\DataMapper;

/**
 * The repository for Profile
 */
class ProfileRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * @var \TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface
     */
    protected $configurationManager;

    // Order by sorting
	protected $defaultOrderings = [
		'sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
	];

    // Angebot repository settings
    public function initializeObject() {
        /** @var $querySettings \TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings */
        $querySettings = $this->objectManager->get('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Typo3QuerySettings');
        // go for $defaultQuerySettings = $this->createQuery()->getQuerySettings(); if you want to make use of the TS persistence.storagePid with defaultQuerySettings(), see #51529 for details
        // Remove the pid constraint
        $querySettings->setRespectStoragePage(FALSE);
        //$querySettings->setRespectStoragePage(TRUE);   
        $this->setDefaultQuerySettings($querySettings);
    }

	public function findBySysfolderOrAll($pidList){
        $pidArray = GeneralUtility::trimExplode(',', $pidList, true);
        $query = $this->createQuery();
        // add the pid constraint
        $query->getQuerySettings()->setRespectStoragePage(TRUE);
        $query->getQuerySettings()->setStoragePageIds($pidArray);
        return $query->execute();
	}

    /**
     * Finds objects based on selected projects
     *
     * @param string|array $uids
     * @return object
     */
    public function findByUids($uids = [])
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setRespectStoragePage(false);
        $constraints = [];

        if ($uids) {
            $uids = is_array($uids) ? $uids : \TYPO3\CMS\Core\Utility\GeneralUtility::trimExplode(',', $uids);            
            $constraints[] = $query->in('uid', $uids);
        }
        if (count($constraints)) {
            $query->matching($query->logicalAnd($constraints));
        }
        return $query->execute();
    }

    /**
     * Finds objects based on selected projects
     *
     * @param string $uidList
     * @return object
     */
    public function findByUidList($uidList)
    {
        $uids = GeneralUtility::intExplode(',', $uidList, true);
        if ($uidList === '' || count($uids) === 0) {
            return [];
        }

        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable($this->getTableName());
        $queryBuilder->setRestrictions(GeneralUtility::makeInstance(FrontendRestrictionContainer::class));

        $records = $queryBuilder
            ->select('*')
            ->from($this->getTableName())
            ->where($queryBuilder->expr()->in('uid', $uids))
            ->add('orderBy', 'FIELD('.$this->getTableName().'.uid,' . implode(',', $uids) . ')')
            ->execute()
            ->fetchAll();

        $objectManager = GeneralUtility::makeInstance(ObjectManager::class);
        $dataMapper = $objectManager->get(DataMapper::class);
        $result = $dataMapper->map($this->objectType, $records);

        return $result;
    }

    /**
     * Return the current table name
     *
     * @return string
     */
    protected function getTableName()
    {
        $objectManager = GeneralUtility::makeInstance(ObjectManager::class);
        $dataMapper = $objectManager->get(DataMapper::class);
        $tableName = $dataMapper->getDataMap($this->objectType)->getTableName();
        return $tableName;
    }

}
