<?php

namespace Nzolt\NetSuite;

class TaxTypeSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnEnumSelectField[] $country
     */
    protected $country = null;

    /**
     * @var SearchColumnStringField[] $description
     */
    protected $description = null;

    /**
     * @var SearchColumnBooleanField[] $doesNotAddToTotal
     */
    protected $doesNotAddToTotal = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchColumnStringField[] $name
     */
    protected $name = null;

    /**
     * @var SearchColumnSelectField[] $nexus
     */
    protected $nexus = null;

    /**
     * @var SearchColumnSelectField[] $payablesAccount
     */
    protected $payablesAccount = null;

    /**
     * @var SearchColumnBooleanField[] $postToItemCost
     */
    protected $postToItemCost = null;

    /**
     * @var SearchColumnSelectField[] $receivablesAccount
     */
    protected $receivablesAccount = null;

    /**
     * @var SearchColumnBooleanField[] $reverseCharge
     */
    protected $reverseCharge = null;

    /**
     * @var SearchColumnBooleanField[] $taxInNetAmount
     */
    protected $taxInNetAmount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param SearchColumnEnumSelectField[] $country
     * @return \Nzolt\NetSuite\TaxTypeSearchRowBasic
     */
    public function setCountry(array $country = null)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param SearchColumnStringField[] $description
     * @return \Nzolt\NetSuite\TaxTypeSearchRowBasic
     */
    public function setDescription(array $description = null)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getDoesNotAddToTotal()
    {
      return $this->doesNotAddToTotal;
    }

    /**
     * @param SearchColumnBooleanField[] $doesNotAddToTotal
     * @return \Nzolt\NetSuite\TaxTypeSearchRowBasic
     */
    public function setDoesNotAddToTotal(array $doesNotAddToTotal = null)
    {
      $this->doesNotAddToTotal = $doesNotAddToTotal;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return \Nzolt\NetSuite\TaxTypeSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return \Nzolt\NetSuite\TaxTypeSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param SearchColumnBooleanField[] $isInactive
     * @return \Nzolt\NetSuite\TaxTypeSearchRowBasic
     */
    public function setIsInactive(array $isInactive = null)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return \Nzolt\NetSuite\TaxTypeSearchRowBasic
     */
    public function setName(array $name = null)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getNexus()
    {
      return $this->nexus;
    }

    /**
     * @param SearchColumnSelectField[] $nexus
     * @return \Nzolt\NetSuite\TaxTypeSearchRowBasic
     */
    public function setNexus(array $nexus = null)
    {
      $this->nexus = $nexus;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPayablesAccount()
    {
      return $this->payablesAccount;
    }

    /**
     * @param SearchColumnSelectField[] $payablesAccount
     * @return \Nzolt\NetSuite\TaxTypeSearchRowBasic
     */
    public function setPayablesAccount(array $payablesAccount = null)
    {
      $this->payablesAccount = $payablesAccount;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPostToItemCost()
    {
      return $this->postToItemCost;
    }

    /**
     * @param SearchColumnBooleanField[] $postToItemCost
     * @return \Nzolt\NetSuite\TaxTypeSearchRowBasic
     */
    public function setPostToItemCost(array $postToItemCost = null)
    {
      $this->postToItemCost = $postToItemCost;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getReceivablesAccount()
    {
      return $this->receivablesAccount;
    }

    /**
     * @param SearchColumnSelectField[] $receivablesAccount
     * @return \Nzolt\NetSuite\TaxTypeSearchRowBasic
     */
    public function setReceivablesAccount(array $receivablesAccount = null)
    {
      $this->receivablesAccount = $receivablesAccount;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getReverseCharge()
    {
      return $this->reverseCharge;
    }

    /**
     * @param SearchColumnBooleanField[] $reverseCharge
     * @return \Nzolt\NetSuite\TaxTypeSearchRowBasic
     */
    public function setReverseCharge(array $reverseCharge = null)
    {
      $this->reverseCharge = $reverseCharge;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getTaxInNetAmount()
    {
      return $this->taxInNetAmount;
    }

    /**
     * @param SearchColumnBooleanField[] $taxInNetAmount
     * @return \Nzolt\NetSuite\TaxTypeSearchRowBasic
     */
    public function setTaxInNetAmount(array $taxInNetAmount = null)
    {
      $this->taxInNetAmount = $taxInNetAmount;
      return $this;
    }

}
