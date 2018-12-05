<?php

namespace Nzolt\NetSuite;

class PartnerAddressbookList
{

    /**
     * @var PartnerAddressbook[] $addressbook
     */
    protected $addressbook = null;

    /**
     * @var boolean $replaceAll
     */
    protected $replaceAll = null;

    /**
     * @param boolean $replaceAll
     */
    public function __construct($replaceAll)
    {
      $this->replaceAll = $replaceAll;
    }

    /**
     * @return PartnerAddressbook[]
     */
    public function getAddressbook()
    {
      return $this->addressbook;
    }

    /**
     * @param PartnerAddressbook[] $addressbook
     * @return \Nzolt\NetSuite\PartnerAddressbookList
     */
    public function setAddressbook(array $addressbook = null)
    {
      $this->addressbook = $addressbook;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReplaceAll()
    {
      return $this->replaceAll;
    }

    /**
     * @param boolean $replaceAll
     * @return \Nzolt\NetSuite\PartnerAddressbookList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
