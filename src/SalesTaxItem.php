<?php

namespace Nzolt\NetSuite;

class SalesTaxItem extends Record
{

    /**
     * @var string $itemId
     */
    protected $itemId = null;

    /**
     * @var string $displayName
     */
    protected $displayName = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $rate
     */
    protected $rate = null;

    /**
     * @var RecordRef $taxType
     */
    protected $taxType = null;

    /**
     * @var RecordRef $taxAgency
     */
    protected $taxAgency = null;

    /**
     * @var RecordRef $purchaseAccount
     */
    protected $purchaseAccount = null;

    /**
     * @var RecordRef $saleAccount
     */
    protected $saleAccount = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var \DateTime $effectiveFrom
     */
    protected $effectiveFrom = null;

    /**
     * @var \DateTime $validUntil
     */
    protected $validUntil = null;

    /**
     * @var RecordRefList $subsidiaryList
     */
    protected $subsidiaryList = null;

    /**
     * @var boolean $includeChildren
     */
    protected $includeChildren = null;

    /**
     * @var boolean $eccode
     */
    protected $eccode = null;

    /**
     * @var boolean $reverseCharge
     */
    protected $reverseCharge = null;

    /**
     * @var RecordRef $parent
     */
    protected $parent = null;

    /**
     * @var boolean $service
     */
    protected $service = null;

    /**
     * @var boolean $exempt
     */
    protected $exempt = null;

    /**
     * @var boolean $isDefault
     */
    protected $isDefault = null;

    /**
     * @var boolean $excludeFromTaxReports
     */
    protected $excludeFromTaxReports = null;

    /**
     * @var SalesTaxItemAvailable $available
     */
    protected $available = null;

    /**
     * @var boolean $export
     */
    protected $export = null;

    /**
     * @var RecordRef $taxAccount
     */
    protected $taxAccount = null;

    /**
     * @var string $county
     */
    protected $county = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $state
     */
    protected $state = null;

    /**
     * @var string $zip
     */
    protected $zip = null;

    /**
     * @var RecordRef $nexusCountry
     */
    protected $nexusCountry = null;

    /**
     * @var CustomFieldList $customFieldList
     */
    protected $customFieldList = null;

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
     * @return \Nzolt\NetSuite\SalesTaxItem
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
      return $this->displayName;
    }

    /**
     * @param string $displayName
     * @return \Nzolt\NetSuite\SalesTaxItem
     */
    public function setDisplayName($displayName)
    {
      $this->displayName = $displayName;
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
     * @return \Nzolt\NetSuite\SalesTaxItem
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getRate()
    {
      return $this->rate;
    }

    /**
     * @param string $rate
     * @return \Nzolt\NetSuite\SalesTaxItem
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
     * @return \Nzolt\NetSuite\SalesTaxItem
     */
    public function setTaxType($taxType)
    {
      $this->taxType = $taxType;
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
     * @return \Nzolt\NetSuite\SalesTaxItem
     */
    public function setTaxAgency($taxAgency)
    {
      $this->taxAgency = $taxAgency;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPurchaseAccount()
    {
      return $this->purchaseAccount;
    }

    /**
     * @param RecordRef $purchaseAccount
     * @return \Nzolt\NetSuite\SalesTaxItem
     */
    public function setPurchaseAccount($purchaseAccount)
    {
      $this->purchaseAccount = $purchaseAccount;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSaleAccount()
    {
      return $this->saleAccount;
    }

    /**
     * @param RecordRef $saleAccount
     * @return \Nzolt\NetSuite\SalesTaxItem
     */
    public function setSaleAccount($saleAccount)
    {
      $this->saleAccount = $saleAccount;
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
     * @return \Nzolt\NetSuite\SalesTaxItem
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveFrom()
    {
      if ($this->effectiveFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->effectiveFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $effectiveFrom
     * @return \Nzolt\NetSuite\SalesTaxItem
     */
    public function setEffectiveFrom(\DateTime $effectiveFrom = null)
    {
      if ($effectiveFrom == null) {
       $this->effectiveFrom = null;
      } else {
        $this->effectiveFrom = $effectiveFrom->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValidUntil()
    {
      if ($this->validUntil == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->validUntil);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $validUntil
     * @return \Nzolt\NetSuite\SalesTaxItem
     */
    public function setValidUntil(\DateTime $validUntil = null)
    {
      if ($validUntil == null) {
       $this->validUntil = null;
      } else {
        $this->validUntil = $validUntil->format(\DateTime::ATOM);
      }
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
     * @return \Nzolt\NetSuite\SalesTaxItem
     */
    public function setSubsidiaryList($subsidiaryList)
    {
      $this->subsidiaryList = $subsidiaryList;
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
     * @return \Nzolt\NetSuite\SalesTaxItem
     */
    public function setIncludeChildren($includeChildren)
    {
      $this->includeChildren = $includeChildren;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEccode()
    {
      return $this->eccode;
    }

    /**
     * @param boolean $eccode
     * @return \Nzolt\NetSuite\SalesTaxItem
     */
    public function setEccode($eccode)
    {
      $this->eccode = $eccode;
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
     * @return \Nzolt\NetSuite\SalesTaxItem
     */
    public function setReverseCharge($reverseCharge)
    {
      $this->reverseCharge = $reverseCharge;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParent()
    {
      return $this->parent;
    }

    /**
     * @param RecordRef $parent
     * @return \Nzolt\NetSuite\SalesTaxItem
     */
    public function setParent($parent)
    {
      $this->parent = $parent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getService()
    {
      return $this->service;
    }

    /**
     * @param boolean $service
     * @return \Nzolt\NetSuite\SalesTaxItem
     */
    public function setService($service)
    {
      $this->service = $service;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExempt()
    {
      return $this->exempt;
    }

    /**
     * @param boolean $exempt
     * @return \Nzolt\NetSuite\SalesTaxItem
     */
    public function setExempt($exempt)
    {
      $this->exempt = $exempt;
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
     * @return \Nzolt\NetSuite\SalesTaxItem
     */
    public function setIsDefault($isDefault)
    {
      $this->isDefault = $isDefault;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeFromTaxReports()
    {
      return $this->excludeFromTaxReports;
    }

    /**
     * @param boolean $excludeFromTaxReports
     * @return \Nzolt\NetSuite\SalesTaxItem
     */
    public function setExcludeFromTaxReports($excludeFromTaxReports)
    {
      $this->excludeFromTaxReports = $excludeFromTaxReports;
      return $this;
    }

    /**
     * @return SalesTaxItemAvailable
     */
    public function getAvailable()
    {
      return $this->available;
    }

    /**
     * @param SalesTaxItemAvailable $available
     * @return \Nzolt\NetSuite\SalesTaxItem
     */
    public function setAvailable($available)
    {
      $this->available = $available;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExport()
    {
      return $this->export;
    }

    /**
     * @param boolean $export
     * @return \Nzolt\NetSuite\SalesTaxItem
     */
    public function setExport($export)
    {
      $this->export = $export;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxAccount()
    {
      return $this->taxAccount;
    }

    /**
     * @param RecordRef $taxAccount
     * @return \Nzolt\NetSuite\SalesTaxItem
     */
    public function setTaxAccount($taxAccount)
    {
      $this->taxAccount = $taxAccount;
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
     * @return \Nzolt\NetSuite\SalesTaxItem
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
     * @return \Nzolt\NetSuite\SalesTaxItem
     */
    public function setCity($city)
    {
      $this->city = $city;
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
     * @return \Nzolt\NetSuite\SalesTaxItem
     */
    public function setState($state)
    {
      $this->state = $state;
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
     * @return \Nzolt\NetSuite\SalesTaxItem
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
     * @return \Nzolt\NetSuite\SalesTaxItem
     */
    public function setNexusCountry($nexusCountry)
    {
      $this->nexusCountry = $nexusCountry;
      return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\SalesTaxItem
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
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
     * @return \Nzolt\NetSuite\SalesTaxItem
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
     * @return \Nzolt\NetSuite\SalesTaxItem
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
