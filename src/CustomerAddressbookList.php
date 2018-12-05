<?php

namespace Nzolt\NetSuite;

class CustomerAddressbookList
{

    /**
     * @var CustomerAddressbook[] $addressbook
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
     * @return CustomerAddressbook[]
     */
    public function getAddressbook()
    {
      return $this->addressbook;
    }

    /**
     * @param CustomerAddressbook[] $addressbook
     * @return \Nzolt\NetSuite\CustomerAddressbookList
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
     * @return \Nzolt\NetSuite\CustomerAddressbookList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
