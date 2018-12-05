<?php

namespace Nzolt\NetSuite;

class CustomerAddressbook
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
     * @var boolean $isResidential
     */
    protected $isResidential = null;

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @var Address $addressbookAddress
     */
    protected $addressbookAddress = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    
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
     * @return \Nzolt\NetSuite\CustomerAddressbook
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
     * @return \Nzolt\NetSuite\CustomerAddressbook
     */
    public function setDefaultBilling($defaultBilling)
    {
      $this->defaultBilling = $defaultBilling;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsResidential()
    {
      return $this->isResidential;
    }

    /**
     * @param boolean $isResidential
     * @return \Nzolt\NetSuite\CustomerAddressbook
     */
    public function setIsResidential($isResidential)
    {
      $this->isResidential = $isResidential;
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
     * @return \Nzolt\NetSuite\CustomerAddressbook
     */
    public function setLabel($label)
    {
      $this->label = $label;
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
     * @return \Nzolt\NetSuite\CustomerAddressbook
     */
    public function setAddressbookAddress($addressbookAddress)
    {
      $this->addressbookAddress = $addressbookAddress;
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
     * @return \Nzolt\NetSuite\CustomerAddressbook
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

}
