<?php

namespace Nzolt\NetSuite;

class TaxType extends Record
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
     * @var boolean $doesNotAddToTotal
     */
    protected $doesNotAddToTotal = null;

    /**
     * @var boolean $postToItemCost
     */
    protected $postToItemCost = null;

    /**
     * @var boolean $taxInNetAmount
     */
    protected $taxInNetAmount = null;

    /**
     * @var boolean $reverseCharge
     */
    protected $reverseCharge = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var TaxTypeNexusAccountsList $nexusAccountsList
     */
    protected $nexusAccountsList = null;

    /**
     * @var TaxTypeNexusesTaxList $nexusesTaxList
     */
    protected $nexusesTaxList = null;

    /**
     * @var Country $country
     */
    protected $country = null;

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
     * @return \Nzolt\NetSuite\TaxType
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
     * @return \Nzolt\NetSuite\TaxType
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDoesNotAddToTotal()
    {
      return $this->doesNotAddToTotal;
    }

    /**
     * @param boolean $doesNotAddToTotal
     * @return \Nzolt\NetSuite\TaxType
     */
    public function setDoesNotAddToTotal($doesNotAddToTotal)
    {
      $this->doesNotAddToTotal = $doesNotAddToTotal;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPostToItemCost()
    {
      return $this->postToItemCost;
    }

    /**
     * @param boolean $postToItemCost
     * @return \Nzolt\NetSuite\TaxType
     */
    public function setPostToItemCost($postToItemCost)
    {
      $this->postToItemCost = $postToItemCost;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTaxInNetAmount()
    {
      return $this->taxInNetAmount;
    }

    /**
     * @param boolean $taxInNetAmount
     * @return \Nzolt\NetSuite\TaxType
     */
    public function setTaxInNetAmount($taxInNetAmount)
    {
      $this->taxInNetAmount = $taxInNetAmount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReverseCharge()
    {
      return $this->reverseCharge;
    }

    /**
     * @param boolean $reverseCharge
     * @return \Nzolt\NetSuite\TaxType
     */
    public function setReverseCharge($reverseCharge)
    {
      $this->reverseCharge = $reverseCharge;
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
     * @return \Nzolt\NetSuite\TaxType
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return TaxTypeNexusAccountsList
     */
    public function getNexusAccountsList()
    {
      return $this->nexusAccountsList;
    }

    /**
     * @param TaxTypeNexusAccountsList $nexusAccountsList
     * @return \Nzolt\NetSuite\TaxType
     */
    public function setNexusAccountsList($nexusAccountsList)
    {
      $this->nexusAccountsList = $nexusAccountsList;
      return $this;
    }

    /**
     * @return TaxTypeNexusesTaxList
     */
    public function getNexusesTaxList()
    {
      return $this->nexusesTaxList;
    }

    /**
     * @param TaxTypeNexusesTaxList $nexusesTaxList
     * @return \Nzolt\NetSuite\TaxType
     */
    public function setNexusesTaxList($nexusesTaxList)
    {
      $this->nexusesTaxList = $nexusesTaxList;
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
     * @return \Nzolt\NetSuite\TaxType
     */
    public function setCountry($country)
    {
      $this->country = $country;
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
     * @return \Nzolt\NetSuite\TaxType
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
     * @return \Nzolt\NetSuite\TaxType
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
