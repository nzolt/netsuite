<?php

namespace Nzolt\NetSuite;

class WorkOrderCompletion extends Record
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
     * @var string $tranId
     */
    protected $tranId = null;

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    /**
     * @var float $quantity
     */
    protected $quantity = null;

    /**
     * @var float $scrapQuantity
     */
    protected $scrapQuantity = null;

    /**
     * @var RecordRef $units
     */
    protected $units = null;

    /**
     * @var boolean $isBackflush
     */
    protected $isBackflush = null;

    /**
     * @var float $orderQuantity
     */
    protected $orderQuantity = null;

    /**
     * @var float $total
     */
    protected $total = null;

    /**
     * @var RecordRef $createdFrom
     */
    protected $createdFrom = null;

    /**
     * @var InventoryDetail $inventoryDetail
     */
    protected $inventoryDetail = null;

    /**
     * @var \DateTime $tranDate
     */
    protected $tranDate = null;

    /**
     * @var RecordRef $postingPeriod
     */
    protected $postingPeriod = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var RecordRef $class
     */
    protected $class = null;

    /**
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var RecordRef $revision
     */
    protected $revision = null;

    /**
     * @var RecordRef $startOperation
     */
    protected $startOperation = null;

    /**
     * @var RecordRef $endOperation
     */
    protected $endOperation = null;

    /**
     * @var float $completedQuantity
     */
    protected $completedQuantity = null;

    /**
     * @var RecordRef $manufacturingRouting
     */
    protected $manufacturingRouting = null;

    /**
     * @var WorkOrderCompletionComponentList $componentList
     */
    protected $componentList = null;

    /**
     * @var WorkOrderCompletionOperationList $operationList
     */
    protected $operationList = null;

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
     * @return \Nzolt\NetSuite\WorkOrderCompletion
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
     * @return \Nzolt\NetSuite\WorkOrderCompletion
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
     * @return \Nzolt\NetSuite\WorkOrderCompletion
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
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
     * @return \Nzolt\NetSuite\WorkOrderCompletion
     */
    public function setTranId($tranId)
    {
      $this->tranId = $tranId;
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
     * @return \Nzolt\NetSuite\WorkOrderCompletion
     */
    public function setItem($item)
    {
      $this->item = $item;
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
     * @return \Nzolt\NetSuite\WorkOrderCompletion
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getScrapQuantity()
    {
      return $this->scrapQuantity;
    }

    /**
     * @param float $scrapQuantity
     * @return \Nzolt\NetSuite\WorkOrderCompletion
     */
    public function setScrapQuantity($scrapQuantity)
    {
      $this->scrapQuantity = $scrapQuantity;
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
     * @return \Nzolt\NetSuite\WorkOrderCompletion
     */
    public function setUnits($units)
    {
      $this->units = $units;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBackflush()
    {
      return $this->isBackflush;
    }

    /**
     * @param boolean $isBackflush
     * @return \Nzolt\NetSuite\WorkOrderCompletion
     */
    public function setIsBackflush($isBackflush)
    {
      $this->isBackflush = $isBackflush;
      return $this;
    }

    /**
     * @return float
     */
    public function getOrderQuantity()
    {
      return $this->orderQuantity;
    }

    /**
     * @param float $orderQuantity
     * @return \Nzolt\NetSuite\WorkOrderCompletion
     */
    public function setOrderQuantity($orderQuantity)
    {
      $this->orderQuantity = $orderQuantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotal()
    {
      return $this->total;
    }

    /**
     * @param float $total
     * @return \Nzolt\NetSuite\WorkOrderCompletion
     */
    public function setTotal($total)
    {
      $this->total = $total;
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
     * @return \Nzolt\NetSuite\WorkOrderCompletion
     */
    public function setCreatedFrom($createdFrom)
    {
      $this->createdFrom = $createdFrom;
      return $this;
    }

    /**
     * @return InventoryDetail
     */
    public function getInventoryDetail()
    {
      return $this->inventoryDetail;
    }

    /**
     * @param InventoryDetail $inventoryDetail
     * @return \Nzolt\NetSuite\WorkOrderCompletion
     */
    public function setInventoryDetail($inventoryDetail)
    {
      $this->inventoryDetail = $inventoryDetail;
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
     * @return \Nzolt\NetSuite\WorkOrderCompletion
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
     * @return RecordRef
     */
    public function getPostingPeriod()
    {
      return $this->postingPeriod;
    }

    /**
     * @param RecordRef $postingPeriod
     * @return \Nzolt\NetSuite\WorkOrderCompletion
     */
    public function setPostingPeriod($postingPeriod)
    {
      $this->postingPeriod = $postingPeriod;
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
     * @return \Nzolt\NetSuite\WorkOrderCompletion
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
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
     * @return \Nzolt\NetSuite\WorkOrderCompletion
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
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
     * @return \Nzolt\NetSuite\WorkOrderCompletion
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
     * @return \Nzolt\NetSuite\WorkOrderCompletion
     */
    public function setClass($class)
    {
      $this->class = $class;
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
     * @return \Nzolt\NetSuite\WorkOrderCompletion
     */
    public function setLocation($location)
    {
      $this->location = $location;
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
     * @return \Nzolt\NetSuite\WorkOrderCompletion
     */
    public function setRevision($revision)
    {
      $this->revision = $revision;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getStartOperation()
    {
      return $this->startOperation;
    }

    /**
     * @param RecordRef $startOperation
     * @return \Nzolt\NetSuite\WorkOrderCompletion
     */
    public function setStartOperation($startOperation)
    {
      $this->startOperation = $startOperation;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEndOperation()
    {
      return $this->endOperation;
    }

    /**
     * @param RecordRef $endOperation
     * @return \Nzolt\NetSuite\WorkOrderCompletion
     */
    public function setEndOperation($endOperation)
    {
      $this->endOperation = $endOperation;
      return $this;
    }

    /**
     * @return float
     */
    public function getCompletedQuantity()
    {
      return $this->completedQuantity;
    }

    /**
     * @param float $completedQuantity
     * @return \Nzolt\NetSuite\WorkOrderCompletion
     */
    public function setCompletedQuantity($completedQuantity)
    {
      $this->completedQuantity = $completedQuantity;
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
     * @return \Nzolt\NetSuite\WorkOrderCompletion
     */
    public function setManufacturingRouting($manufacturingRouting)
    {
      $this->manufacturingRouting = $manufacturingRouting;
      return $this;
    }

    /**
     * @return WorkOrderCompletionComponentList
     */
    public function getComponentList()
    {
      return $this->componentList;
    }

    /**
     * @param WorkOrderCompletionComponentList $componentList
     * @return \Nzolt\NetSuite\WorkOrderCompletion
     */
    public function setComponentList($componentList)
    {
      $this->componentList = $componentList;
      return $this;
    }

    /**
     * @return WorkOrderCompletionOperationList
     */
    public function getOperationList()
    {
      return $this->operationList;
    }

    /**
     * @param WorkOrderCompletionOperationList $operationList
     * @return \Nzolt\NetSuite\WorkOrderCompletion
     */
    public function setOperationList($operationList)
    {
      $this->operationList = $operationList;
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
     * @return \Nzolt\NetSuite\WorkOrderCompletion
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
     * @return \Nzolt\NetSuite\WorkOrderCompletion
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
     * @return \Nzolt\NetSuite\WorkOrderCompletion
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
