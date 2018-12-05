<?php

namespace Nzolt\NetSuite;

class VendorAddressbook
{

    /**
     * @var boolean $defaultShipping
     */
    protected $defaultShipping = null;

    /**
     * @var boolean $defaultBilling
     */
    protected $defaultBilling = null;

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var Address $addressbookAddress
     */
    protected $addressbookAddress = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getDefaultShipping()
    {
      return $this->defaultShipping;
    }

    /**
     * @param boolean $defaultShipping
     * @return \Nzolt\NetSuite\VendorAddressbook
     */
    public function setDefaultShipping($defaultShipping)
    {
      $this->defaultShipping = $defaultShipping;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefaultBilling()
    {
      return $this->defaultBilling;
    }

    /**
     * @param boolean $defaultBilling
     * @return \Nzolt\NetSuite\VendorAddressbook
     */
    public function setDefaultBilling($defaultBilling)
    {
      $this->defaultBilling = $defaultBilling;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
      return $this->label;
    }

    /**
     * @param string $label
     * @return \Nzolt\NetSuite\VendorAddressbook
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param string $internalId
     * @return \Nzolt\NetSuite\VendorAddressbook
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return Address
     */
    public function getAddressbookAddress()
    {
      return $this->addressbookAddress;
    }

    /**
     * @param Address $addressbookAddress
     * @return \Nzolt\NetSuite\VendorAddressbook
     */
    public function setAddressbookAddress($addressbookAddress)
    {
      $this->addressbookAddress = $addressbookAddress;
      return $this;
    }

}
