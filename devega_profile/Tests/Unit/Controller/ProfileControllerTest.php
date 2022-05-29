<?php

declare(strict_types=1);

namespace AshokaTree\DevegaProfile\Tests\Unit\Controller;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;
use TYPO3Fluid\Fluid\View\ViewInterface;

/**
 * Test case
 *
 * @author Nirmalya Mondal <nirmalya.mondal@gmail.com>
 */
class ProfileControllerTest extends UnitTestCase
{
    /**
     * @var \AshokaTree\DevegaProfile\Controller\ProfileController|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder($this->buildAccessibleProxy(\AshokaTree\DevegaProfile\Controller\ProfileController::class))
            ->onlyMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllProfilesFromRepositoryAndAssignsThemToView(): void
    {
        $allProfiles = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $profileRepository = $this->getMockBuilder(\::class)
            ->onlyMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $profileRepository->expects(self::once())->method('findAll')->will(self::returnValue($allProfiles));
        $this->subject->_set('profileRepository', $profileRepository);

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('profiles', $allProfiles);
        $this->subject->_set('view', $view);

        $this->subject->listAction();
    }
}
