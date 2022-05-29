<?php

declare(strict_types=1);

namespace AshokaTree\DevegaProfile\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Nirmalya Mondal <nirmalya.mondal@gmail.com>
 */
class ProfileTest extends UnitTestCase
{
    /**
     * @var \AshokaTree\DevegaProfile\Domain\Model\Profile|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \AshokaTree\DevegaProfile\Domain\Model\Profile::class,
            ['dummy']
        );
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName(): void
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('name'));
    }

    /**
     * @test
     */
    public function getImageReturnsInitialValueForFileReference(): void
    {
        self::assertEquals(
            null,
            $this->subject->getImage()
        );
    }

    /**
     * @test
     */
    public function setImageForFileReferenceSetsImage(): void
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setImage($fileReferenceFixture);

        self::assertEquals($fileReferenceFixture, $this->subject->_get('image'));
    }

    /**
     * @test
     */
    public function getAbteilungReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getAbteilung()
        );
    }

    /**
     * @test
     */
    public function setAbteilungForStringSetsAbteilung(): void
    {
        $this->subject->setAbteilung('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('abteilung'));
    }

    /**
     * @test
     */
    public function getZusatzReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getZusatz()
        );
    }

    /**
     * @test
     */
    public function setZusatzForStringSetsZusatz(): void
    {
        $this->subject->setZusatz('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('zusatz'));
    }

    /**
     * @test
     */
    public function getTelefonReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getTelefon()
        );
    }

    /**
     * @test
     */
    public function setTelefonForStringSetsTelefon(): void
    {
        $this->subject->setTelefon('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('telefon'));
    }

    /**
     * @test
     */
    public function getHandyReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getHandy()
        );
    }

    /**
     * @test
     */
    public function setHandyForStringSetsHandy(): void
    {
        $this->subject->setHandy('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('handy'));
    }

    /**
     * @test
     */
    public function getEmailReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getEmail()
        );
    }

    /**
     * @test
     */
    public function setEmailForStringSetsEmail(): void
    {
        $this->subject->setEmail('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('email'));
    }

    /**
     * @test
     */
    public function getLinktextReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getLinktext()
        );
    }

    /**
     * @test
     */
    public function setLinktextForStringSetsLinktext(): void
    {
        $this->subject->setLinktext('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('linktext'));
    }

    /**
     * @test
     */
    public function getLinkReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getLink()
        );
    }

    /**
     * @test
     */
    public function setLinkForStringSetsLink(): void
    {
        $this->subject->setLink('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('link'));
    }
}
