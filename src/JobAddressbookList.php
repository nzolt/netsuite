<?php

namespace Nzolt\NetSuite;

class JobAddressbookList
{

    /**
     * @var JobAddressbook[] $addressbook
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
     * @return JobAddressbook[]
     */
    public function getAddressbook()
    {
      return $this->addressbook;
    }

    /**
     * @param JobAddressbook[] $addressbook
     * @return \Nzolt\NetSuite\JobAddressbookList
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
     * @return \Nzolt\NetSuite\JobAddressbookList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
