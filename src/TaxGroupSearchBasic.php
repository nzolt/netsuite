<?php

namespace Nzolt\NetSuite;

class TaxGroupSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchStringField $city
     */
    protected $city = null;

    /**
     * @var SearchEnumMultiSelectField $country
     */
    protected $country = null;

    /**
     * @var SearchStringField $county
     */
    protected $county = null;

    /**
     * @var SearchStringField $description
     */
    protected $description = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchBooleanField $includeChildren
     */
    protected $includeChildren = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchBooleanField $isDefault
     */
    protected $isDefault = null;

    /**
     * @var SearchBooleanField $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchStringField $itemId
     */
    protected $itemId = null;

    /**
     * @var SearchBooleanField $piggyBack
     */
    protected $piggyBack = null;

    /**
     * @var SearchDoubleField $rate
     */
    protected $rate = null;

    /**
     * @var SearchMultiSelectField $state
     */
    protected $state = null;

    /**
     * @var SearchMultiSelectField $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchMultiSelectField $taxItem1
     */
    protected $taxItem1 = null;

    /**
     * @var SearchMultiSelectField $taxItem2
     */
    protected $taxItem2 = null;

    /**
     * @var SearchMultiSelectField $taxType
     */
    protected $taxType = null;

    /**
     * @var SearchDoubleField $unitPrice1
     */
    protected $unitPrice1 = null;

    /**
     * @var SearchDoubleField $unitPrice2
     */
    protected $unitPrice2 = null;

    /**
     * @var SearchStringField $zip
     */
    protected $zip = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchStringField
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param SearchStringField $city
     * @return \Nzolt\NetSuite\TaxGroupSearchBasic
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
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
     * @return \Nzolt\NetSuite\TaxGroupSearchBasic
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCounty()
    {
      return $this->county;
    }

    /**
     * @param SearchStringField $county
     * @return \Nzolt\NetSuite\TaxGroupSearchBasic
     */
    public function setCounty($county)
    {
      $this->county = $county;
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
     * @return \Nzolt\NetSuite\TaxGroupSearchBasic
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \Nzolt\NetSuite\TaxGroupSearchBasic
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
     * @return \Nzolt\NetSuite\TaxGroupSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIncludeChildren()
    {
      return $this->includeChildren;
    }

    /**
     * @param SearchBooleanField $includeChildren
     * @return \Nzolt\NetSuite\TaxGroupSearchBasic
     */
    public function setIncludeChildren($includeChildren)
    {
      $this->includeChildren = $includeChildren;
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
     * @return \Nzolt\NetSuite\TaxGroupSearchBasic
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
     * @return \Nzolt\NetSuite\TaxGroupSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsDefault()
    {
      return $this->isDefault;
    }

    /**
     * @param SearchBooleanField $isDefault
     * @return \Nzolt\NetSuite\TaxGroupSearchBasic
     */
    public function setIsDefault($isDefault)
    {
      $this->isDefault = $isDefault;
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
     * @return \Nzolt\NetSuite\TaxGroupSearchBasic
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getItemId()
    {
      return $this->itemId;
    }

    /**
     * @param SearchStringField $itemId
     * @return \Nzolt\NetSuite\TaxGroupSearchBasic
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPiggyBack()
    {
      return $this->piggyBack;
    }

    /**
     * @param SearchBooleanField $piggyBack
     * @return \Nzolt\NetSuite\TaxGroupSearchBasic
     */
    public function setPiggyBack($piggyBack)
    {
      $this->piggyBack = $piggyBack;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRate()
    {
      return $this->rate;
    }

    /**
     * @param SearchDoubleField $rate
     * @return \Nzolt\NetSuite\TaxGroupSearchBasic
     */
    public function setRate($rate)
    {
      $this->rate = $rate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param SearchMultiSelectField $state
     * @return \Nzolt\NetSuite\TaxGroupSearchBasic
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return \Nzolt\NetSuite\TaxGroupSearchBasic
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTaxItem1()
    {
      return $this->taxItem1;
    }

    /**
     * @param SearchMultiSelectField $taxItem1
     * @return \Nzolt\NetSuite\TaxGroupSearchBasic
     */
    public function setTaxItem1($taxItem1)
    {
      $this->taxItem1 = $taxItem1;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTaxItem2()
    {
      return $this->taxItem2;
    }

    /**
     * @param SearchMultiSelectField $taxItem2
     * @return \Nzolt\NetSuite\TaxGroupSearchBasic
     */
    public function setTaxItem2($taxItem2)
    {
      $this->taxItem2 = $taxItem2;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTaxType()
    {
      return $this->taxType;
    }

    /**
     * @param SearchMultiSelectField $taxType
     * @return \Nzolt\NetSuite\TaxGroupSearchBasic
     */
    public function setTaxType($taxType)
    {
      $this->taxType = $taxType;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getUnitPrice1()
    {
      return $this->unitPrice1;
    }

    /**
     * @param SearchDoubleField $unitPrice1
     * @return \Nzolt\NetSuite\TaxGroupSearchBasic
     */
    public function setUnitPrice1($unitPrice1)
    {
      $this->unitPrice1 = $unitPrice1;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getUnitPrice2()
    {
      return $this->unitPrice2;
    }

    /**
     * @param SearchDoubleField $unitPrice2
     * @return \Nzolt\NetSuite\TaxGroupSearchBasic
     */
    public function setUnitPrice2($unitPrice2)
    {
      $this->unitPrice2 = $unitPrice2;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getZip()
    {
      return $this->zip;
    }

    /**
     * @param SearchStringField $zip
     * @return \Nzolt\NetSuite\TaxGroupSearchBasic
     */
    public function setZip($zip)
    {
      $this->zip = $zip;
      return $this;
    }

}
