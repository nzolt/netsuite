<?php

namespace Nzolt\NetSuite;

class ManufacturingRouting extends Record
{

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var RecordRef $billOfMaterials
     */
    protected $billOfMaterials = null;

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    /**
     * @var RecordRefList $locationList
     */
    protected $locationList = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var boolean $isDefault
     */
    protected $isDefault = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var boolean $autoCalculateLag
     */
    protected $autoCalculateLag = null;

    /**
     * @var ManufacturingRoutingRoutingStepList $routingStepList
     */
    protected $routingStepList = null;

    /**
     * @var ManufacturingRoutingRoutingComponentList $routingComponentList
     */
    protected $routingComponentList = null;

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
     * @return RecordRef
     */
    public function getCustomForm()
    {
      return $this->customForm;
    }

    /**
     * @param RecordRef $customForm
     * @return \Nzolt\NetSuite\ManufacturingRouting
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillOfMaterials()
    {
      return $this->billOfMaterials;
    }

    /**
     * @param RecordRef $billOfMaterials
     * @return \Nzolt\NetSuite\ManufacturingRouting
     */
    public function setBillOfMaterials($billOfMaterials)
    {
      $this->billOfMaterials = $billOfMaterials;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param RecordRef $subsidiary
     * @return \Nzolt\NetSuite\ManufacturingRouting
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param RecordRef $item
     * @return \Nzolt\NetSuite\ManufacturingRouting
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getLocationList()
    {
      return $this->locationList;
    }

    /**
     * @param RecordRefList $locationList
     * @return \Nzolt\NetSuite\ManufacturingRouting
     */
    public function setLocationList($locationList)
    {
      $this->locationList = $locationList;
      return $this;
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
     * @return \Nzolt\NetSuite\ManufacturingRouting
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getMemo()
    {
      return $this->memo;
    }

    /**
     * @param string $memo
     * @return \Nzolt\NetSuite\ManufacturingRouting
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
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
     * @return \Nzolt\NetSuite\ManufacturingRouting
     */
    public function setIsDefault($isDefault)
    {
      $this->isDefault = $isDefault;
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
     * @return \Nzolt\NetSuite\ManufacturingRouting
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoCalculateLag()
    {
      return $this->autoCalculateLag;
    }

    /**
     * @param boolean $autoCalculateLag
     * @return \Nzolt\NetSuite\ManufacturingRouting
     */
    public function setAutoCalculateLag($autoCalculateLag)
    {
      $this->autoCalculateLag = $autoCalculateLag;
      return $this;
    }

    /**
     * @return ManufacturingRoutingRoutingStepList
     */
    public function getRoutingStepList()
    {
      return $this->routingStepList;
    }

    /**
     * @param ManufacturingRoutingRoutingStepList $routingStepList
     * @return \Nzolt\NetSuite\ManufacturingRouting
     */
    public function setRoutingStepList($routingStepList)
    {
      $this->routingStepList = $routingStepList;
      return $this;
    }

    /**
     * @return ManufacturingRoutingRoutingComponentList
     */
    public function getRoutingComponentList()
    {
      return $this->routingComponentList;
    }

    /**
     * @param ManufacturingRoutingRoutingComponentList $routingComponentList
     * @return \Nzolt\NetSuite\ManufacturingRouting
     */
    public function setRoutingComponentList($routingComponentList)
    {
      $this->routingComponentList = $routingComponentList;
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
     * @return \Nzolt\NetSuite\ManufacturingRouting
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
     * @return \Nzolt\NetSuite\ManufacturingRouting
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
     * @return \Nzolt\NetSuite\ManufacturingRouting
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
