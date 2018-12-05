<?php

namespace Nzolt\NetSuite;

class Nexus extends Record
{

    /**
     * @var Country $country
     */
    protected $country = null;

    /**
     * @var RecordRef $state
     */
    protected $state = null;

    /**
     * @var RecordRef $taxAgency
     */
    protected $taxAgency = null;

    /**
     * @var RecordRef $taxAgencyPst
     */
    protected $taxAgencyPst = null;

    /**
     * @var RecordRef $taxCode
     */
    protected $taxCode = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var RecordRef $parentNexus
     */
    protected $parentNexus = null;

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
     * @return Country
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param Country $country
     * @return \Nzolt\NetSuite\Nexus
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param RecordRef $state
     * @return \Nzolt\NetSuite\Nexus
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxAgency()
    {
      return $this->taxAgency;
    }

    /**
     * @param RecordRef $taxAgency
     * @return \Nzolt\NetSuite\Nexus
     */
    public function setTaxAgency($taxAgency)
    {
      $this->taxAgency = $taxAgency;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxAgencyPst()
    {
      return $this->taxAgencyPst;
    }

    /**
     * @param RecordRef $taxAgencyPst
     * @return \Nzolt\NetSuite\Nexus
     */
    public function setTaxAgencyPst($taxAgencyPst)
    {
      $this->taxAgencyPst = $taxAgencyPst;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxCode()
    {
      return $this->taxCode;
    }

    /**
     * @param RecordRef $taxCode
     * @return \Nzolt\NetSuite\Nexus
     */
    public function setTaxCode($taxCode)
    {
      $this->taxCode = $taxCode;
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
     * @return \Nzolt\NetSuite\Nexus
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParentNexus()
    {
      return $this->parentNexus;
    }

    /**
     * @param RecordRef $parentNexus
     * @return \Nzolt\NetSuite\Nexus
     */
    public function setParentNexus($parentNexus)
    {
      $this->parentNexus = $parentNexus;
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
     * @return \Nzolt\NetSuite\Nexus
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
     * @return \Nzolt\NetSuite\Nexus
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
     * @return \Nzolt\NetSuite\Nexus
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
