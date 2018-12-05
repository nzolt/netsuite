<?php

namespace Nzolt\NetSuite;

class ManufacturingRoutingSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchBooleanField $autoCalculateLag
     */
    protected $autoCalculateLag = null;

    /**
     * @var SearchMultiSelectField $billOfMaterials
     */
    protected $billOfMaterials = null;

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
     * @var SearchBooleanField $isDefault
     */
    protected $isDefault = null;

    /**
     * @var SearchBooleanField $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchMultiSelectField $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchMultiSelectField $item
     */
    protected $item = null;

    /**
     * @var SearchDoubleField $lagAmount
     */
    protected $lagAmount = null;

    /**
     * @var SearchEnumMultiSelectField $lagType
     */
    protected $lagType = null;

    /**
     * @var SearchStringField $lagUnits
     */
    protected $lagUnits = null;

    /**
     * @var SearchMultiSelectField $location
     */
    protected $location = null;

    /**
     * @var SearchMultiSelectField $manufacturingCostTemplate
     */
    protected $manufacturingCostTemplate = null;

    /**
     * @var SearchMultiSelectField $manufacturingWorkCenter
     */
    protected $manufacturingWorkCenter = null;

    /**
     * @var SearchStringField $memo
     */
    protected $memo = null;

    /**
     * @var SearchStringField $name
     */
    protected $name = null;

    /**
     * @var SearchStringField $operationName
     */
    protected $operationName = null;

    /**
     * @var SearchDoubleField $operationYield
     */
    protected $operationYield = null;

    /**
     * @var SearchDoubleField $runRate
     */
    protected $runRate = null;

    /**
     * @var SearchLongField $sequence
     */
    protected $sequence = null;

    /**
     * @var SearchDoubleField $setupTime
     */
    protected $setupTime = null;

    /**
     * @var SearchCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchBooleanField
     */
    public function getAutoCalculateLag()
    {
      return $this->autoCalculateLag;
    }

    /**
     * @param SearchBooleanField $autoCalculateLag
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchBasic
     */
    public function setAutoCalculateLag($autoCalculateLag)
    {
      $this->autoCalculateLag = $autoCalculateLag;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBillOfMaterials()
    {
      return $this->billOfMaterials;
    }

    /**
     * @param SearchMultiSelectField $billOfMaterials
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchBasic
     */
    public function setBillOfMaterials($billOfMaterials)
    {
      $this->billOfMaterials = $billOfMaterials;
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
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchBasic
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
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchBasic
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
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchBasic
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
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchBasic
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
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchBasic
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
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchBasic
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
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
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchBasic
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SearchMultiSelectField $item
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchBasic
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLagAmount()
    {
      return $this->lagAmount;
    }

    /**
     * @param SearchDoubleField $lagAmount
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchBasic
     */
    public function setLagAmount($lagAmount)
    {
      $this->lagAmount = $lagAmount;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getLagType()
    {
      return $this->lagType;
    }

    /**
     * @param SearchEnumMultiSelectField $lagType
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchBasic
     */
    public function setLagType($lagType)
    {
      $this->lagType = $lagType;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getLagUnits()
    {
      return $this->lagUnits;
    }

    /**
     * @param SearchStringField $lagUnits
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchBasic
     */
    public function setLagUnits($lagUnits)
    {
      $this->lagUnits = $lagUnits;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param SearchMultiSelectField $location
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchBasic
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getManufacturingCostTemplate()
    {
      return $this->manufacturingCostTemplate;
    }

    /**
     * @param SearchMultiSelectField $manufacturingCostTemplate
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchBasic
     */
    public function setManufacturingCostTemplate($manufacturingCostTemplate)
    {
      $this->manufacturingCostTemplate = $manufacturingCostTemplate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getManufacturingWorkCenter()
    {
      return $this->manufacturingWorkCenter;
    }

    /**
     * @param SearchMultiSelectField $manufacturingWorkCenter
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchBasic
     */
    public function setManufacturingWorkCenter($manufacturingWorkCenter)
    {
      $this->manufacturingWorkCenter = $manufacturingWorkCenter;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMemo()
    {
      return $this->memo;
    }

    /**
     * @param SearchStringField $memo
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchBasic
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
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
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchBasic
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getOperationName()
    {
      return $this->operationName;
    }

    /**
     * @param SearchStringField $operationName
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchBasic
     */
    public function setOperationName($operationName)
    {
      $this->operationName = $operationName;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getOperationYield()
    {
      return $this->operationYield;
    }

    /**
     * @param SearchDoubleField $operationYield
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchBasic
     */
    public function setOperationYield($operationYield)
    {
      $this->operationYield = $operationYield;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRunRate()
    {
      return $this->runRate;
    }

    /**
     * @param SearchDoubleField $runRate
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchBasic
     */
    public function setRunRate($runRate)
    {
      $this->runRate = $runRate;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getSequence()
    {
      return $this->sequence;
    }

    /**
     * @param SearchLongField $sequence
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchBasic
     */
    public function setSequence($sequence)
    {
      $this->sequence = $sequence;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getSetupTime()
    {
      return $this->setupTime;
    }

    /**
     * @param SearchDoubleField $setupTime
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchBasic
     */
    public function setSetupTime($setupTime)
    {
      $this->setupTime = $setupTime;
      return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
