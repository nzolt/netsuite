<?php

namespace Nzolt\NetSuite;

class TimeEntry extends Record
{

    /**
     * @var Duration $hours
     */
    protected $hours = null;

    /**
     * @var \DateTime $createdDate
     */
    protected $createdDate = null;

    /**
     * @var \DateTime $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var RecordRef $customer
     */
    protected $customer = null;

    /**
     * @var RecordRef $caseTaskEvent
     */
    protected $caseTaskEvent = null;

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    /**
     * @var boolean $isBillable
     */
    protected $isBillable = null;

    /**
     * @var RecordRef $payrollItem
     */
    protected $payrollItem = null;

    /**
     * @var boolean $paidExternally
     */
    protected $paidExternally = null;

    /**
     * @var RecordRef $price
     */
    protected $price = null;

    /**
     * @var float $rate
     */
    protected $rate = null;

    /**
     * @var boolean $overrideRate
     */
    protected $overrideRate = null;

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
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var string $billingClass
     */
    protected $billingClass = null;

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var RecordRef $approvalStatus
     */
    protected $approvalStatus = null;

    /**
     * @var TimeBillTimeType $timeType
     */
    protected $timeType = null;

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
     * @return Duration
     */
    public function getHours()
    {
      return $this->hours;
    }

    /**
     * @param Duration $hours
     * @return \Nzolt\NetSuite\TimeEntry
     */
    public function setHours($hours)
    {
      $this->hours = $hours;
      return $this;
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
     * @return \Nzolt\NetSuite\TimeEntry
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
     * @return \Nzolt\NetSuite\TimeEntry
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
    public function getCustomer()
    {
      return $this->customer;
    }

    /**
     * @param RecordRef $customer
     * @return \Nzolt\NetSuite\TimeEntry
     */
    public function setCustomer($customer)
    {
      $this->customer = $customer;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCaseTaskEvent()
    {
      return $this->caseTaskEvent;
    }

    /**
     * @param RecordRef $caseTaskEvent
     * @return \Nzolt\NetSuite\TimeEntry
     */
    public function setCaseTaskEvent($caseTaskEvent)
    {
      $this->caseTaskEvent = $caseTaskEvent;
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
     * @return \Nzolt\NetSuite\TimeEntry
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBillable()
    {
      return $this->isBillable;
    }

    /**
     * @param boolean $isBillable
     * @return \Nzolt\NetSuite\TimeEntry
     */
    public function setIsBillable($isBillable)
    {
      $this->isBillable = $isBillable;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPayrollItem()
    {
      return $this->payrollItem;
    }

    /**
     * @param RecordRef $payrollItem
     * @return \Nzolt\NetSuite\TimeEntry
     */
    public function setPayrollItem($payrollItem)
    {
      $this->payrollItem = $payrollItem;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPaidExternally()
    {
      return $this->paidExternally;
    }

    /**
     * @param boolean $paidExternally
     * @return \Nzolt\NetSuite\TimeEntry
     */
    public function setPaidExternally($paidExternally)
    {
      $this->paidExternally = $paidExternally;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPrice()
    {
      return $this->price;
    }

    /**
     * @param RecordRef $price
     * @return \Nzolt\NetSuite\TimeEntry
     */
    public function setPrice($price)
    {
      $this->price = $price;
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
     * @return \Nzolt\NetSuite\TimeEntry
     */
    public function setRate($rate)
    {
      $this->rate = $rate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOverrideRate()
    {
      return $this->overrideRate;
    }

    /**
     * @param boolean $overrideRate
     * @return \Nzolt\NetSuite\TimeEntry
     */
    public function setOverrideRate($overrideRate)
    {
      $this->overrideRate = $overrideRate;
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
     * @return \Nzolt\NetSuite\TimeEntry
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
     * @return \Nzolt\NetSuite\TimeEntry
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
     * @return \Nzolt\NetSuite\TimeEntry
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
     * @return \Nzolt\NetSuite\TimeEntry
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingClass()
    {
      return $this->billingClass;
    }

    /**
     * @param string $billingClass
     * @return \Nzolt\NetSuite\TimeEntry
     */
    public function setBillingClass($billingClass)
    {
      $this->billingClass = $billingClass;
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
     * @return \Nzolt\NetSuite\TimeEntry
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getApprovalStatus()
    {
      return $this->approvalStatus;
    }

    /**
     * @param RecordRef $approvalStatus
     * @return \Nzolt\NetSuite\TimeEntry
     */
    public function setApprovalStatus($approvalStatus)
    {
      $this->approvalStatus = $approvalStatus;
      return $this;
    }

    /**
     * @return TimeBillTimeType
     */
    public function getTimeType()
    {
      return $this->timeType;
    }

    /**
     * @param TimeBillTimeType $timeType
     * @return \Nzolt\NetSuite\TimeEntry
     */
    public function setTimeType($timeType)
    {
      $this->timeType = $timeType;
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
     * @return \Nzolt\NetSuite\TimeEntry
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
     * @return \Nzolt\NetSuite\TimeEntry
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
     * @return \Nzolt\NetSuite\TimeEntry
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
