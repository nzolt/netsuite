<?php

namespace Nzolt\NetSuite;

class TaxGroup extends Record
{

    /**
     * @var string $itemId
     */
    protected $itemId = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $state
     */
    protected $state = null;

    /**
     * @var RecordRefList $subsidiaryList
     */
    protected $subsidiaryList = null;

    /**
     * @var RecordRef $taxitem1
     */
    protected $taxitem1 = null;

    /**
     * @var string $unitprice1
     */
    protected $unitprice1 = null;

    /**
     * @var RecordRef $taxitem2
     */
    protected $taxitem2 = null;

    /**
     * @var string $unitprice2
     */
    protected $unitprice2 = null;

    /**
     * @var boolean $piggyback
     */
    protected $piggyback = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var float $rate
     */
    protected $rate = null;

    /**
     * @var RecordRef $taxType
     */
    protected $taxType = null;

    /**
     * @var boolean $includeChildren
     */
    protected $includeChildren = null;

    /**
     * @var string $county
     */
    protected $county = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $zip
     */
    protected $zip = null;

    /**
     * @var RecordRef $nexusCountry
     */
    protected $nexusCountry = null;

    /**
     * @var boolean $isDefault
     */
    protected $isDefault = null;

    /**
     * @var TaxGroupTaxItemList $taxItemList
     */
    protected $taxItemList = null;

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
    public function getItemId()
    {
      return $this->itemId;
    }

    /**
     * @param string $itemId
     * @return \Nzolt\NetSuite\TaxGroup
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
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
     * @return \Nzolt\NetSuite\TaxGroup
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param string $state
     * @return \Nzolt\NetSuite\TaxGroup
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getSubsidiaryList()
    {
      return $this->subsidiaryList;
    }

    /**
     * @param RecordRefList $subsidiaryList
     * @return \Nzolt\NetSuite\TaxGroup
     */
    public function setSubsidiaryList($subsidiaryList)
    {
      $this->subsidiaryList = $subsidiaryList;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxitem1()
    {
      return $this->taxitem1;
    }

    /**
     * @param RecordRef $taxitem1
     * @return \Nzolt\NetSuite\TaxGroup
     */
    public function setTaxitem1($taxitem1)
    {
      $this->taxitem1 = $taxitem1;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnitprice1()
    {
      return $this->unitprice1;
    }

    /**
     * @param string $unitprice1
     * @return \Nzolt\NetSuite\TaxGroup
     */
    public function setUnitprice1($unitprice1)
    {
      $this->unitprice1 = $unitprice1;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxitem2()
    {
      return $this->taxitem2;
    }

    /**
     * @param RecordRef $taxitem2
     * @return \Nzolt\NetSuite\TaxGroup
     */
    public function setTaxitem2($taxitem2)
    {
      $this->taxitem2 = $taxitem2;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnitprice2()
    {
      return $this->unitprice2;
    }

    /**
     * @param string $unitprice2
     * @return \Nzolt\NetSuite\TaxGroup
     */
    public function setUnitprice2($unitprice2)
    {
      $this->unitprice2 = $unitprice2;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPiggyback()
    {
      return $this->piggyback;
    }

    /**
     * @param boolean $piggyback
     * @return \Nzolt\NetSuite\TaxGroup
     */
    public function setPiggyback($piggyback)
    {
      $this->piggyback = $piggyback;
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
     * @return \Nzolt\NetSuite\TaxGroup
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return float
     */
    public function getRate()
    {
      return $this->rate;
    }

    /**
     * @param float $rate
     * @return \Nzolt\NetSuite\TaxGroup
     */
    public function setRate($rate)
    {
      $this->rate = $rate;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxType()
    {
      return $this->taxType;
    }

    /**
     * @param RecordRef $taxType
     * @return \Nzolt\NetSuite\TaxGroup
     */
    public function setTaxType($taxType)
    {
      $this->taxType = $taxType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeChildren()
    {
      return $this->includeChildren;
    }

    /**
     * @param boolean $includeChildren
     * @return \Nzolt\NetSuite\TaxGroup
     */
    public function setIncludeChildren($includeChildren)
    {
      $this->includeChildren = $includeChildren;
      return $this;
    }

    /**
     * @return string
     */
    public function getCounty()
    {
      return $this->county;
    }

    /**
     * @param string $county
     * @return \Nzolt\NetSuite\TaxGroup
     */
    public function setCounty($county)
    {
      $this->county = $county;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param string $city
     * @return \Nzolt\NetSuite\TaxGroup
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return string
     */
    public function getZip()
    {
      return $this->zip;
    }

    /**
     * @param string $zip
     * @return \Nzolt\NetSuite\TaxGroup
     */
    public function setZip($zip)
    {
      $this->zip = $zip;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getNexusCountry()
    {
      return $this->nexusCountry;
    }

    /**
     * @param RecordRef $nexusCountry
     * @return \Nzolt\NetSuite\TaxGroup
     */
    public function setNexusCountry($nexusCountry)
    {
      $this->nexusCountry = $nexusCountry;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDefault()
    {
      return $this->isDefault;
    }

    /**
     * @param boolean $isDefault
     * @return \Nzolt\NetSuite\TaxGroup
     */
    public function setIsDefault($isDefault)
    {
      $this->isDefault = $isDefault;
      return $this;
    }

    /**
     * @return TaxGroupTaxItemList
     */
    public function getTaxItemList()
    {
      return $this->taxItemList;
    }

    /**
     * @param TaxGroupTaxItemList $taxItemList
     * @return \Nzolt\NetSuite\TaxGroup
     */
    public function setTaxItemList($taxItemList)
    {
      $this->taxItemList = $taxItemList;
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
     * @return \Nzolt\NetSuite\TaxGroup
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
     * @return \Nzolt\NetSuite\TaxGroup
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
