<?php

namespace Nzolt\NetSuite;

class TaxTypeSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchEnumMultiSelectField $country
     */
    protected $country = null;

    /**
     * @var SearchStringField $description
     */
    protected $description = null;

    /**
     * @var SearchBooleanField $doesNotAddToTotal
     */
    protected $doesNotAddToTotal = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchBooleanField $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchStringField $name
     */
    protected $name = null;

    /**
     * @var SearchMultiSelectField $nexus
     */
    protected $nexus = null;

    /**
     * @var SearchMultiSelectField $payablesAccount
     */
    protected $payablesAccount = null;

    /**
     * @var SearchBooleanField $postToItemCost
     */
    protected $postToItemCost = null;

    /**
     * @var SearchMultiSelectField $receivablesAccount
     */
    protected $receivablesAccount = null;

    /**
     * @var SearchBooleanField $reverseCharge
     */
    protected $reverseCharge = null;

    /**
     * @var SearchBooleanField $taxInNetAmount
     */
    protected $taxInNetAmount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param SearchEnumMultiSelectField $country
     * @return \Nzolt\NetSuite\TaxTypeSearchBasic
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param SearchStringField $description
     * @return \Nzolt\NetSuite\TaxTypeSearchBasic
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getDoesNotAddToTotal()
    {
      return $this->doesNotAddToTotal;
    }

    /**
     * @param SearchBooleanField $doesNotAddToTotal
     * @return \Nzolt\NetSuite\TaxTypeSearchBasic
     */
    public function setDoesNotAddToTotal($doesNotAddToTotal)
    {
      $this->doesNotAddToTotal = $doesNotAddToTotal;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return \Nzolt\NetSuite\TaxTypeSearchBasic
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString()
    {
      return $this->externalIdString;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return \Nzolt\NetSuite\TaxTypeSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return \Nzolt\NetSuite\TaxTypeSearchBasic
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber()
    {
      return $this->internalIdNumber;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return \Nzolt\NetSuite\TaxTypeSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param SearchBooleanField $isInactive
     * @return \Nzolt\NetSuite\TaxTypeSearchBasic
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param SearchStringField $name
     * @return \Nzolt\NetSuite\TaxTypeSearchBasic
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getNexus()
    {
      return $this->nexus;
    }

    /**
     * @param SearchMultiSelectField $nexus
     * @return \Nzolt\NetSuite\TaxTypeSearchBasic
     */
    public function setNexus($nexus)
    {
      $this->nexus = $nexus;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPayablesAccount()
    {
      return $this->payablesAccount;
    }

    /**
     * @param SearchMultiSelectField $payablesAccount
     * @return \Nzolt\NetSuite\TaxTypeSearchBasic
     */
    public function setPayablesAccount($payablesAccount)
    {
      $this->payablesAccount = $payablesAccount;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPostToItemCost()
    {
      return $this->postToItemCost;
    }

    /**
     * @param SearchBooleanField $postToItemCost
     * @return \Nzolt\NetSuite\TaxTypeSearchBasic
     */
    public function setPostToItemCost($postToItemCost)
    {
      $this->postToItemCost = $postToItemCost;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getReceivablesAccount()
    {
      return $this->receivablesAccount;
    }

    /**
     * @param SearchMultiSelectField $receivablesAccount
     * @return \Nzolt\NetSuite\TaxTypeSearchBasic
     */
    public function setReceivablesAccount($receivablesAccount)
    {
      $this->receivablesAccount = $receivablesAccount;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getReverseCharge()
    {
      return $this->reverseCharge;
    }

    /**
     * @param SearchBooleanField $reverseCharge
     * @return \Nzolt\NetSuite\TaxTypeSearchBasic
     */
    public function setReverseCharge($reverseCharge)
    {
      $this->reverseCharge = $reverseCharge;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getTaxInNetAmount()
    {
      return $this->taxInNetAmount;
    }

    /**
     * @param SearchBooleanField $taxInNetAmount
     * @return \Nzolt\NetSuite\TaxTypeSearchBasic
     */
    public function setTaxInNetAmount($taxInNetAmount)
    {
      $this->taxInNetAmount = $taxInNetAmount;
      return $this;
    }

}
