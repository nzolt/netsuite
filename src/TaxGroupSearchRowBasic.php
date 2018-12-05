<?php

namespace Nzolt\NetSuite;

class TaxGroupSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnStringField[] $city
     */
    protected $city = null;

    /**
     * @var SearchColumnEnumSelectField[] $country
     */
    protected $country = null;

    /**
     * @var SearchColumnStringField[] $county
     */
    protected $county = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnBooleanField[] $includeChildren
     */
    protected $includeChildren = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $isDefault
     */
    protected $isDefault = null;

    /**
     * @var SearchColumnBooleanField[] $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchColumnStringField[] $itemId
     */
    protected $itemId = null;

    /**
     * @var SearchColumnBooleanField[] $piggyBack
     */
    protected $piggyBack = null;

    /**
     * @var SearchColumnDoubleField[] $rate
     */
    protected $rate = null;

    /**
     * @var SearchColumnSelectField[] $state
     */
    protected $state = null;

    /**
     * @var SearchColumnStringField[] $stateDisplayName
     */
    protected $stateDisplayName = null;

    /**
     * @var SearchColumnSelectField[] $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchColumnSelectField[] $subsidiaryNoHierarchy
     */
    protected $subsidiaryNoHierarchy = null;

    /**
     * @var SearchColumnSelectField[] $taxItem1
     */
    protected $taxItem1 = null;

    /**
     * @var SearchColumnSelectField[] $taxItem2
     */
    protected $taxItem2 = null;

    /**
     * @var SearchColumnSelectField[] $taxType
     */
    protected $taxType = null;

    /**
     * @var SearchColumnDoubleField[] $unitPrice1
     */
    protected $unitPrice1 = null;

    /**
     * @var SearchColumnDoubleField[] $unitPrice2
     */
    protected $unitPrice2 = null;

    /**
     * @var SearchColumnStringField[] $zip
     */
    protected $zip = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param SearchColumnStringField[] $city
     * @return \Nzolt\NetSuite\TaxGroupSearchRowBasic
     */
    public function setCity(array $city = null)
    {
      $this->city = $city;
      return $this;
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
     * @return \Nzolt\NetSuite\TaxGroupSearchRowBasic
     */
    public function setCountry(array $country = null)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCounty()
    {
      return $this->county;
    }

    /**
     * @param SearchColumnStringField[] $county
     * @return \Nzolt\NetSuite\TaxGroupSearchRowBasic
     */
    public function setCounty(array $county = null)
    {
      $this->county = $county;
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
     * @return \Nzolt\NetSuite\TaxGroupSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIncludeChildren()
    {
      return $this->includeChildren;
    }

    /**
     * @param SearchColumnBooleanField[] $includeChildren
     * @return \Nzolt\NetSuite\TaxGroupSearchRowBasic
     */
    public function setIncludeChildren(array $includeChildren = null)
    {
      $this->includeChildren = $includeChildren;
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
     * @return \Nzolt\NetSuite\TaxGroupSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsDefault()
    {
      return $this->isDefault;
    }

    /**
     * @param SearchColumnBooleanField[] $isDefault
     * @return \Nzolt\NetSuite\TaxGroupSearchRowBasic
     */
    public function setIsDefault(array $isDefault = null)
    {
      $this->isDefault = $isDefault;
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
     * @return \Nzolt\NetSuite\TaxGroupSearchRowBasic
     */
    public function setIsInactive(array $isInactive = null)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getItemId()
    {
      return $this->itemId;
    }

    /**
     * @param SearchColumnStringField[] $itemId
     * @return \Nzolt\NetSuite\TaxGroupSearchRowBasic
     */
    public function setItemId(array $itemId = null)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPiggyBack()
    {
      return $this->piggyBack;
    }

    /**
     * @param SearchColumnBooleanField[] $piggyBack
     * @return \Nzolt\NetSuite\TaxGroupSearchRowBasic
     */
    public function setPiggyBack(array $piggyBack = null)
    {
      $this->piggyBack = $piggyBack;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRate()
    {
      return $this->rate;
    }

    /**
     * @param SearchColumnDoubleField[] $rate
     * @return \Nzolt\NetSuite\TaxGroupSearchRowBasic
     */
    public function setRate(array $rate = null)
    {
      $this->rate = $rate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param SearchColumnSelectField[] $state
     * @return \Nzolt\NetSuite\TaxGroupSearchRowBasic
     */
    public function setState(array $state = null)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getStateDisplayName()
    {
      return $this->stateDisplayName;
    }

    /**
     * @param SearchColumnStringField[] $stateDisplayName
     * @return \Nzolt\NetSuite\TaxGroupSearchRowBasic
     */
    public function setStateDisplayName(array $stateDisplayName = null)
    {
      $this->stateDisplayName = $stateDisplayName;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiary
     * @return \Nzolt\NetSuite\TaxGroupSearchRowBasic
     */
    public function setSubsidiary(array $subsidiary = null)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubsidiaryNoHierarchy()
    {
      return $this->subsidiaryNoHierarchy;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiaryNoHierarchy
     * @return \Nzolt\NetSuite\TaxGroupSearchRowBasic
     */
    public function setSubsidiaryNoHierarchy(array $subsidiaryNoHierarchy = null)
    {
      $this->subsidiaryNoHierarchy = $subsidiaryNoHierarchy;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTaxItem1()
    {
      return $this->taxItem1;
    }

    /**
     * @param SearchColumnSelectField[] $taxItem1
     * @return \Nzolt\NetSuite\TaxGroupSearchRowBasic
     */
    public function setTaxItem1(array $taxItem1 = null)
    {
      $this->taxItem1 = $taxItem1;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTaxItem2()
    {
      return $this->taxItem2;
    }

    /**
     * @param SearchColumnSelectField[] $taxItem2
     * @return \Nzolt\NetSuite\TaxGroupSearchRowBasic
     */
    public function setTaxItem2(array $taxItem2 = null)
    {
      $this->taxItem2 = $taxItem2;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTaxType()
    {
      return $this->taxType;
    }

    /**
     * @param SearchColumnSelectField[] $taxType
     * @return \Nzolt\NetSuite\TaxGroupSearchRowBasic
     */
    public function setTaxType(array $taxType = null)
    {
      $this->taxType = $taxType;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getUnitPrice1()
    {
      return $this->unitPrice1;
    }

    /**
     * @param SearchColumnDoubleField[] $unitPrice1
     * @return \Nzolt\NetSuite\TaxGroupSearchRowBasic
     */
    public function setUnitPrice1(array $unitPrice1 = null)
    {
      $this->unitPrice1 = $unitPrice1;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getUnitPrice2()
    {
      return $this->unitPrice2;
    }

    /**
     * @param SearchColumnDoubleField[] $unitPrice2
     * @return \Nzolt\NetSuite\TaxGroupSearchRowBasic
     */
    public function setUnitPrice2(array $unitPrice2 = null)
    {
      $this->unitPrice2 = $unitPrice2;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getZip()
    {
      return $this->zip;
    }

    /**
     * @param SearchColumnStringField[] $zip
     * @return \Nzolt\NetSuite\TaxGroupSearchRowBasic
     */
    public function setZip(array $zip = null)
    {
      $this->zip = $zip;
      return $this;
    }

}
