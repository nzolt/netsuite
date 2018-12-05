<?php

namespace Nzolt\NetSuite;

class WorkOrder extends Record
{

    /**
     * @var \DateTime $createdDate
     */
    protected $createdDate = null;

    /**
     * @var \DateTime $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var RecordRef $manufacturingRouting
     */
    protected $manufacturingRouting = null;

    /**
     * @var boolean $autoCalculateLag
     */
    protected $autoCalculateLag = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $tranId
     */
    protected $tranId = null;

    /**
     * @var RecordRef $entity
     */
    protected $entity = null;

    /**
     * @var RecordRef $job
     */
    protected $job = null;

    /**
     * @var RecordRef $assemblyItem
     */
    protected $assemblyItem = null;

    /**
     * @var boolean $expandAssembly
     */
    protected $expandAssembly = null;

    /**
     * @var boolean $isWip
     */
    protected $isWip = null;

    /**
     * @var float $quantity
     */
    protected $quantity = null;

    /**
     * @var RecordRef $billOfMaterials
     */
    protected $billOfMaterials = null;

    /**
     * @var RecordRef $units
     */
    protected $units = null;

    /**
     * @var \DateTime $tranDate
     */
    protected $tranDate = null;

    /**
     * @var WorkOrderOrderStatus $orderStatus
     */
    protected $orderStatus = null;

    /**
     * @var boolean $firmed
     */
    protected $firmed = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var RecordRef $class
     */
    protected $class = null;

    /**
     * @var WorkOrderItemList $itemList
     */
    protected $itemList = null;

    /**
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var WorkOrderSchedulingMethod $schedulingMethod
     */
    protected $schedulingMethod = null;

    /**
     * @var SalesTeamList $salesTeamList
     */
    protected $salesTeamList = null;

    /**
     * @var PartnersList $partnersList
     */
    protected $partnersList = null;

    /**
     * @var RecordRef $createdFrom
     */
    protected $createdFrom = null;

    /**
     * @var string $sourceTransactionId
     */
    protected $sourceTransactionId = null;

    /**
     * @var int $sourceTransactionLine
     */
    protected $sourceTransactionLine = null;

    /**
     * @var boolean $specialOrder
     */
    protected $specialOrder = null;

    /**
     * @var float $buildable
     */
    protected $buildable = null;

    /**
     * @var CustomFieldList $options
     */
    protected $options = null;

    /**
     * @var float $built
     */
    protected $built = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var RecordRef $revision
     */
    protected $revision = null;

    /**
     * @var RecordRef $billOfMaterialsRevision
     */
    protected $billOfMaterialsRevision = null;

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var AccountingBookDetailList $accountingBookDetailList
     */
    protected $accountingBookDetailList = null;

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
     * @return \DateTime
     */
    public function getCreatedDate()
    {
      if ($this->createdDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->createdDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $createdDate
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setCreatedDate(\DateTime $createdDate = null)
    {
      if ($createdDate == null) {
       $this->createdDate = null;
      } else {
        $this->createdDate = $createdDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
      if ($this->lastModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastModifiedDate
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate = null)
    {
      if ($lastModifiedDate == null) {
       $this->lastModifiedDate = null;
      } else {
        $this->lastModifiedDate = $lastModifiedDate->format(\DateTime::ATOM);
      }
      return $this;
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
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getManufacturingRouting()
    {
      return $this->manufacturingRouting;
    }

    /**
     * @param RecordRef $manufacturingRouting
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setManufacturingRouting($manufacturingRouting)
    {
      $this->manufacturingRouting = $manufacturingRouting;
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
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setAutoCalculateLag($autoCalculateLag)
    {
      $this->autoCalculateLag = $autoCalculateLag;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getTranId()
    {
      return $this->tranId;
    }

    /**
     * @param string $tranId
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setTranId($tranId)
    {
      $this->tranId = $tranId;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEntity()
    {
      return $this->entity;
    }

    /**
     * @param RecordRef $entity
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getJob()
    {
      return $this->job;
    }

    /**
     * @param RecordRef $job
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setJob($job)
    {
      $this->job = $job;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAssemblyItem()
    {
      return $this->assemblyItem;
    }

    /**
     * @param RecordRef $assemblyItem
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setAssemblyItem($assemblyItem)
    {
      $this->assemblyItem = $assemblyItem;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExpandAssembly()
    {
      return $this->expandAssembly;
    }

    /**
     * @param boolean $expandAssembly
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setExpandAssembly($expandAssembly)
    {
      $this->expandAssembly = $expandAssembly;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsWip()
    {
      return $this->isWip;
    }

    /**
     * @param boolean $isWip
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setIsWip($isWip)
    {
      $this->isWip = $isWip;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param float $quantity
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
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
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setBillOfMaterials($billOfMaterials)
    {
      $this->billOfMaterials = $billOfMaterials;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUnits()
    {
      return $this->units;
    }

    /**
     * @param RecordRef $units
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setUnits($units)
    {
      $this->units = $units;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTranDate()
    {
      if ($this->tranDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->tranDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $tranDate
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setTranDate(\DateTime $tranDate = null)
    {
      if ($tranDate == null) {
       $this->tranDate = null;
      } else {
        $this->tranDate = $tranDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return WorkOrderOrderStatus
     */
    public function getOrderStatus()
    {
      return $this->orderStatus;
    }

    /**
     * @param WorkOrderOrderStatus $orderStatus
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setOrderStatus($orderStatus)
    {
      $this->orderStatus = $orderStatus;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFirmed()
    {
      return $this->firmed;
    }

    /**
     * @param boolean $firmed
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setFirmed($firmed)
    {
      $this->firmed = $firmed;
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
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param RecordRef $department
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setDepartment($department)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param RecordRef $class
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return WorkOrderItemList
     */
    public function getItemList()
    {
      return $this->itemList;
    }

    /**
     * @param WorkOrderItemList $itemList
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setItemList($itemList)
    {
      $this->itemList = $itemList;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param RecordRef $location
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return WorkOrderSchedulingMethod
     */
    public function getSchedulingMethod()
    {
      return $this->schedulingMethod;
    }

    /**
     * @param WorkOrderSchedulingMethod $schedulingMethod
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setSchedulingMethod($schedulingMethod)
    {
      $this->schedulingMethod = $schedulingMethod;
      return $this;
    }

    /**
     * @return SalesTeamList
     */
    public function getSalesTeamList()
    {
      return $this->salesTeamList;
    }

    /**
     * @param SalesTeamList $salesTeamList
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setSalesTeamList($salesTeamList)
    {
      $this->salesTeamList = $salesTeamList;
      return $this;
    }

    /**
     * @return PartnersList
     */
    public function getPartnersList()
    {
      return $this->partnersList;
    }

    /**
     * @param PartnersList $partnersList
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setPartnersList($partnersList)
    {
      $this->partnersList = $partnersList;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCreatedFrom()
    {
      return $this->createdFrom;
    }

    /**
     * @param RecordRef $createdFrom
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setCreatedFrom($createdFrom)
    {
      $this->createdFrom = $createdFrom;
      return $this;
    }

    /**
     * @return string
     */
    public function getSourceTransactionId()
    {
      return $this->sourceTransactionId;
    }

    /**
     * @param string $sourceTransactionId
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setSourceTransactionId($sourceTransactionId)
    {
      $this->sourceTransactionId = $sourceTransactionId;
      return $this;
    }

    /**
     * @return int
     */
    public function getSourceTransactionLine()
    {
      return $this->sourceTransactionLine;
    }

    /**
     * @param int $sourceTransactionLine
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setSourceTransactionLine($sourceTransactionLine)
    {
      $this->sourceTransactionLine = $sourceTransactionLine;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSpecialOrder()
    {
      return $this->specialOrder;
    }

    /**
     * @param boolean $specialOrder
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setSpecialOrder($specialOrder)
    {
      $this->specialOrder = $specialOrder;
      return $this;
    }

    /**
     * @return float
     */
    public function getBuildable()
    {
      return $this->buildable;
    }

    /**
     * @param float $buildable
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setBuildable($buildable)
    {
      $this->buildable = $buildable;
      return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getOptions()
    {
      return $this->options;
    }

    /**
     * @param CustomFieldList $options
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setOptions($options)
    {
      $this->options = $options;
      return $this;
    }

    /**
     * @return float
     */
    public function getBuilt()
    {
      return $this->built;
    }

    /**
     * @param float $built
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setBuilt($built)
    {
      $this->built = $built;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->startDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startDate
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setStartDate(\DateTime $startDate = null)
    {
      if ($startDate == null) {
       $this->startDate = null;
      } else {
        $this->startDate = $startDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->endDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endDate
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setEndDate(\DateTime $endDate = null)
    {
      if ($endDate == null) {
       $this->endDate = null;
      } else {
        $this->endDate = $endDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevision()
    {
      return $this->revision;
    }

    /**
     * @param RecordRef $revision
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setRevision($revision)
    {
      $this->revision = $revision;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillOfMaterialsRevision()
    {
      return $this->billOfMaterialsRevision;
    }

    /**
     * @param RecordRef $billOfMaterialsRevision
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setBillOfMaterialsRevision($billOfMaterialsRevision)
    {
      $this->billOfMaterialsRevision = $billOfMaterialsRevision;
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
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return AccountingBookDetailList
     */
    public function getAccountingBookDetailList()
    {
      return $this->accountingBookDetailList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setAccountingBookDetailList($accountingBookDetailList)
    {
      $this->accountingBookDetailList = $accountingBookDetailList;
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
     * @return \Nzolt\NetSuite\WorkOrder
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
     * @return \Nzolt\NetSuite\WorkOrder
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
     * @return \Nzolt\NetSuite\WorkOrder
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
