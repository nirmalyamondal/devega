<?php

declare(strict_types=1);

namespace AshokaTree\DevegaProfile\Domain\Model;


/**
 * This file is part of the "Profile Display" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022 Nirmalya Mondal <nirmalya.mondal@gmail.com>, AshokaTree
 */

/**
 * Profile
 */
class Profile extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     *
     * @var string
     */
    protected $name = '';

    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $image = '';

    /**
     * abteilung
     *
     * @var string
     */
    protected $abteilung = '';

    /**
     * zusatz
     *
     * @var string
     */
    protected $zusatz = '';

    /**
     * telefon
     *
     * @var string
     */
    protected $telefon = '';

    /**
     * handy
     *
     * @var string
     */
    protected $handy = '';

    /**
     * email
     *
     * @var string
     */
    protected $email = '';

    /**
     * linktext
     *
     * @var string
     */
    protected $linktext = '';

    /**
     * link
     *
     * @var string
     */
    protected $link = '';

    /**
     * Returns the name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Returns the abteilung
     *
     * @return string
     */
    public function getAbteilung()
    {
        return $this->abteilung;
    }

    /**
     * Sets the abteilung
     *
     * @param string $abteilung
     * @return void
     */
    public function setAbteilung(string $abteilung)
    {
        $this->abteilung = $abteilung;
    }

    /**
     * Returns the zusatz
     *
     * @return string
     */
    public function getZusatz()
    {
        return $this->zusatz;
    }

    /**
     * Sets the zusatz
     *
     * @param string $zusatz
     * @return void
     */
    public function setZusatz(string $zusatz)
    {
        $this->zusatz = $zusatz;
    }

    /**
     * Returns the telefon
     *
     * @return string
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * Sets the telefon
     *
     * @param string $telefon
     * @return void
     */
    public function setTelefon(string $telefon)
    {
        $this->telefon = $telefon;
    }

    /**
     * Returns the handy
     *
     * @return string
     */
    public function getHandy()
    {
        return $this->handy;
    }

    /**
     * Sets the handy
     *
     * @param string $handy
     * @return void
     */
    public function setHandy(string $handy)
    {
        $this->handy = $handy;
    }

    /**
     * Returns the email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     *
     * @param string $email
     * @return void
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * Returns the linktext
     *
     * @return string
     */
    public function getLinktext()
    {
        return $this->linktext;
    }

    /**
     * Sets the linktext
     *
     * @param string $linktext
     * @return void
     */
    public function setLinktext(string $linktext)
    {
        $this->linktext = $linktext;
    }

    /**
     * Returns the link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets the link
     *
     * @param string $link
     * @return void
     */
    public function setLink(string $link)
    {
        $this->link = $link;
    }

    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     *
     * @param string $image
     * @return void
     */
    public function setImage(string $image)
    {
        $this->image = $image;
    }
}
