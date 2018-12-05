<?php

namespace Nzolt\NetSuite;

class TaxAcct extends Record
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var RecordRef $nexus
     */
    protected $nexus = null;

    /**
     * @var Country $country
     */
    protected $country = null;

    /**
     * @var TaxAcctType $taxAcctType
     */
    protected $taxAcctType = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param string $internalId
     * @param string $externalId
     */
    public function __construct($internalId, $externalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
      $this->externalId = $externalId;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Nzolt\NetSuite\TaxAcct
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Nzolt\NetSuite\TaxAcct
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getNexus()
    {
      return $this->nexus;
    }

    /**
     * @param RecordRef $nexus
     * @return \Nzolt\NetSuite\TaxAcct
     */
    public function setNexus($nexus)
    {
      $this->nexus = $nexus;
      return $this;
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param Country $country
     * @return \Nzolt\NetSuite\TaxAcct
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return TaxAcctType
     */
    public function getTaxAcctType()
    {
      return $this->taxAcctType;
    }

    /**
     * @param TaxAcctType $taxAcctType
     * @return \Nzolt\NetSuite\TaxAcct
     */
    public function setTaxAcctType($taxAcctType)
    {
      $this->taxAcctType = $taxAcctType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param boolean $isInactive
     * @return \Nzolt\NetSuite\TaxAcct
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
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
     * @return \Nzolt\NetSuite\TaxAcct
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Nzolt\NetSuite\TaxAcct
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
