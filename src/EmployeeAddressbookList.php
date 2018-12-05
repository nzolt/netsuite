<?php

namespace Nzolt\NetSuite;

class EmployeeAddressbookList
{

    /**
     * @var EmployeeAddressbook[] $addressbook
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
     * @return EmployeeAddressbook[]
     */
    public function getAddressbook()
    {
      return $this->addressbook;
    }

    /**
     * @param EmployeeAddressbook[] $addressbook
     * @return \Nzolt\NetSuite\EmployeeAddressbookList
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
     * @return \Nzolt\NetSuite\EmployeeAddressbookList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
