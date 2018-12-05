<?php

namespace Nzolt\NetSuite;

class ManufacturingRoutingSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnBooleanField[] $autoCalculateLag
     */
    protected $autoCalculateLag = null;

    /**
     * @var SearchColumnSelectField[] $billOfMaterials
     */
    protected $billOfMaterials = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

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
     * @var SearchColumnSelectField[] $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchColumnSelectField[] $item
     */
    protected $item = null;

    /**
     * @var SearchColumnDoubleField[] $lagAmount
     */
    protected $lagAmount = null;

    /**
     * @var SearchColumnEnumSelectField[] $lagType
     */
    protected $lagType = null;

    /**
     * @var SearchColumnStringField[] $lagUnits
     */
    protected $lagUnits = null;

    /**
     * @var SearchColumnSelectField[] $location
     */
    protected $location = null;

    /**
     * @var SearchColumnSelectField[] $manufacturingCostTemplate
     */
    protected $manufacturingCostTemplate = null;

    /**
     * @var SearchColumnSelectField[] $manufacturingWorkCenter
     */
    protected $manufacturingWorkCenter = null;

    /**
     * @var SearchColumnStringField[] $memo
     */
    protected $memo = null;

    /**
     * @var SearchColumnStringField[] $name
     */
    protected $name = null;

    /**
     * @var SearchColumnStringField[] $operationName
     */
    protected $operationName = null;

    /**
     * @var SearchColumnDoubleField[] $operationYield
     */
    protected $operationYield = null;

    /**
     * @var SearchColumnDoubleField[] $runRate
     */
    protected $runRate = null;

    /**
     * @var SearchColumnLongField[] $sequence
     */
    protected $sequence = null;

    /**
     * @var SearchColumnDoubleField[] $setupTime
     */
    protected $setupTime = null;

    /**
     * @var SearchColumnCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAutoCalculateLag()
    {
      return $this->autoCalculateLag;
    }

    /**
     * @param SearchColumnBooleanField[] $autoCalculateLag
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchRowBasic
     */
    public function setAutoCalculateLag(array $autoCalculateLag = null)
    {
      $this->autoCalculateLag = $autoCalculateLag;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBillOfMaterials()
    {
      return $this->billOfMaterials;
    }

    /**
     * @param SearchColumnSelectField[] $billOfMaterials
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchRowBasic
     */
    public function setBillOfMaterials(array $billOfMaterials = null)
    {
      $this->billOfMaterials = $billOfMaterials;
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
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchRowBasic
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
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchRowBasic
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
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchRowBasic
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
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchRowBasic
     */
    public function setIsInactive(array $isInactive = null)
    {
      $this->isInactive = $isInactive;
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
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchRowBasic
     */
    public function setSubsidiary(array $subsidiary = null)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SearchColumnSelectField[] $item
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchRowBasic
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLagAmount()
    {
      return $this->lagAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $lagAmount
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchRowBasic
     */
    public function setLagAmount(array $lagAmount = null)
    {
      $this->lagAmount = $lagAmount;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getLagType()
    {
      return $this->lagType;
    }

    /**
     * @param SearchColumnEnumSelectField[] $lagType
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchRowBasic
     */
    public function setLagType(array $lagType = null)
    {
      $this->lagType = $lagType;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLagUnits()
    {
      return $this->lagUnits;
    }

    /**
     * @param SearchColumnStringField[] $lagUnits
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchRowBasic
     */
    public function setLagUnits(array $lagUnits = null)
    {
      $this->lagUnits = $lagUnits;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param SearchColumnSelectField[] $location
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchRowBasic
     */
    public function setLocation(array $location = null)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getManufacturingCostTemplate()
    {
      return $this->manufacturingCostTemplate;
    }

    /**
     * @param SearchColumnSelectField[] $manufacturingCostTemplate
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchRowBasic
     */
    public function setManufacturingCostTemplate(array $manufacturingCostTemplate = null)
    {
      $this->manufacturingCostTemplate = $manufacturingCostTemplate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getManufacturingWorkCenter()
    {
      return $this->manufacturingWorkCenter;
    }

    /**
     * @param SearchColumnSelectField[] $manufacturingWorkCenter
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchRowBasic
     */
    public function setManufacturingWorkCenter(array $manufacturingWorkCenter = null)
    {
      $this->manufacturingWorkCenter = $manufacturingWorkCenter;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMemo()
    {
      return $this->memo;
    }

    /**
     * @param SearchColumnStringField[] $memo
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchRowBasic
     */
    public function setMemo(array $memo = null)
    {
      $this->memo = $memo;
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
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchRowBasic
     */
    public function setName(array $name = null)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getOperationName()
    {
      return $this->operationName;
    }

    /**
     * @param SearchColumnStringField[] $operationName
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchRowBasic
     */
    public function setOperationName(array $operationName = null)
    {
      $this->operationName = $operationName;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getOperationYield()
    {
      return $this->operationYield;
    }

    /**
     * @param SearchColumnDoubleField[] $operationYield
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchRowBasic
     */
    public function setOperationYield(array $operationYield = null)
    {
      $this->operationYield = $operationYield;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRunRate()
    {
      return $this->runRate;
    }

    /**
     * @param SearchColumnDoubleField[] $runRate
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchRowBasic
     */
    public function setRunRate(array $runRate = null)
    {
      $this->runRate = $runRate;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getSequence()
    {
      return $this->sequence;
    }

    /**
     * @param SearchColumnLongField[] $sequence
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchRowBasic
     */
    public function setSequence(array $sequence = null)
    {
      $this->sequence = $sequence;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getSetupTime()
    {
      return $this->setupTime;
    }

    /**
     * @param SearchColumnDoubleField[] $setupTime
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchRowBasic
     */
    public function setSetupTime(array $setupTime = null)
    {
      $this->setupTime = $setupTime;
      return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
