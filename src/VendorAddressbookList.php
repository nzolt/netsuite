<?php

namespace Nzolt\NetSuite;

class VendorAddressbookList
{

    /**
     * @var VendorAddressbook[] $addressbook
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
     * @return VendorAddressbook[]
     */
    public function getAddressbook()
    {
      return $this->addressbook;
    }

    /**
     * @param VendorAddressbook[] $addressbook
     * @return \Nzolt\NetSuite\VendorAddressbookList
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
     * @return \Nzolt\NetSuite\VendorAddressbookList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
