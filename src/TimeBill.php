<?php

namespace Nzolt\NetSuite;

class TimeBill extends Record
{

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var RecordRef $employee
     */
    protected $employee = null;

    /**
     * @var \DateTime $tranDate
     */
    protected $tranDate = null;

    /**
     * @var RecordRef $approvalStatus
     */
    protected $approvalStatus = null;

    /**
     * @var RecordRef $customer
     */
    protected $customer = null;

    /**
     * @var RecordRef $caseTaskEvent
     */
    protected $caseTaskEvent = null;

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
     * @var RecordRef $workplace
     */
    protected $workplace = null;

    /**
     * @var RecordRef $item
     */
    protected $item = null;

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
     * @var Duration $hours
     */
    protected $hours = null;

    /**
     * @var RecordRef $price
     */
    protected $price = null;

    /**
     * @var TimeBillTimeType $timeType
     */
    protected $timeType = null;

    /**
     * @var float $rate
     */
    protected $rate = null;

    /**
     * @var boolean $overrideRate
     */
    protected $overrideRate = null;

    /**
     * @var RecordRef $temporaryLocalJurisdiction
     */
    protected $temporaryLocalJurisdiction = null;

    /**
     * @var RecordRef $temporaryStateJurisdiction
     */
    protected $temporaryStateJurisdiction = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var string $rejectionNote
     */
    protected $rejectionNote = null;

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var boolean $supervisorApproval
     */
    protected $supervisorApproval = null;

    /**
     * @var \DateTime $createdDate
     */
    protected $createdDate = null;

    /**
     * @var \DateTime $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var RecordRef $timeSheet
     */
    protected $timeSheet = null;

    /**
     * @var string $status
     */
    protected $status = null;

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
     * @return \Nzolt\NetSuite\TimeBill
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEmployee()
    {
      return $this->employee;
    }

    /**
     * @param RecordRef $employee
     * @return \Nzolt\NetSuite\TimeBill
     */
    public function setEmployee($employee)
    {
      $this->employee = $employee;
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
     * @return \Nzolt\NetSuite\TimeBill
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
    public function getApprovalStatus()
    {
      return $this->approvalStatus;
    }

    /**
     * @param RecordRef $approvalStatus
     * @return \Nzolt\NetSuite\TimeBill
     */
    public function setApprovalStatus($approvalStatus)
    {
      $this->approvalStatus = $approvalStatus;
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
     * @return \Nzolt\NetSuite\TimeBill
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
     * @return \Nzolt\NetSuite\TimeBill
     */
    public function setCaseTaskEvent($caseTaskEvent)
    {
      $this->caseTaskEvent = $caseTaskEvent;
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
     * @return \Nzolt\NetSuite\TimeBill
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
     * @return \Nzolt\NetSuite\TimeBill
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
     * @return \Nzolt\NetSuite\TimeBill
     */
    public function setPaidExternally($paidExternally)
    {
      $this->paidExternally = $paidExternally;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getWorkplace()
    {
      return $this->workplace;
    }

    /**
     * @param RecordRef $workplace
     * @return \Nzolt\NetSuite\TimeBill
     */
    public function setWorkplace($workplace)
    {
      $this->workplace = $workplace;
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
     * @return \Nzolt\NetSuite\TimeBill
     */
    public function setItem($item)
    {
      $this->item = $item;
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
     * @return \Nzolt\NetSuite\TimeBill
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
     * @return \Nzolt\NetSuite\TimeBill
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
     * @return \Nzolt\NetSuite\TimeBill
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
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
     * @return \Nzolt\NetSuite\TimeBill
     */
    public function setHours($hours)
    {
      $this->hours = $hours;
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
     * @return \Nzolt\NetSuite\TimeBill
     */
    public function setPrice($price)
    {
      $this->price = $price;
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
     * @return \Nzolt\NetSuite\TimeBill
     */
    public function setTimeType($timeType)
    {
      $this->timeType = $timeType;
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
     * @return \Nzolt\NetSuite\TimeBill
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
     * @return \Nzolt\NetSuite\TimeBill
     */
    public function setOverrideRate($overrideRate)
    {
      $this->overrideRate = $overrideRate;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTemporaryLocalJurisdiction()
    {
      return $this->temporaryLocalJurisdiction;
    }

    /**
     * @param RecordRef $temporaryLocalJurisdiction
     * @return \Nzolt\NetSuite\TimeBill
     */
    public function setTemporaryLocalJurisdiction($temporaryLocalJurisdiction)
    {
      $this->temporaryLocalJurisdiction = $temporaryLocalJurisdiction;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTemporaryStateJurisdiction()
    {
      return $this->temporaryStateJurisdiction;
    }

    /**
     * @param RecordRef $temporaryStateJurisdiction
     * @return \Nzolt\NetSuite\TimeBill
     */
    public function setTemporaryStateJurisdiction($temporaryStateJurisdiction)
    {
      $this->temporaryStateJurisdiction = $temporaryStateJurisdiction;
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
     * @return \Nzolt\NetSuite\TimeBill
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return string
     */
    public function getRejectionNote()
    {
      return $this->rejectionNote;
    }

    /**
     * @param string $rejectionNote
     * @return \Nzolt\NetSuite\TimeBill
     */
    public function setRejectionNote($rejectionNote)
    {
      $this->rejectionNote = $rejectionNote;
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
     * @return \Nzolt\NetSuite\TimeBill
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSupervisorApproval()
    {
      return $this->supervisorApproval;
    }

    /**
     * @param boolean $supervisorApproval
     * @return \Nzolt\NetSuite\TimeBill
     */
    public function setSupervisorApproval($supervisorApproval)
    {
      $this->supervisorApproval = $supervisorApproval;
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
     * @return \Nzolt\NetSuite\TimeBill
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
     * @return \Nzolt\NetSuite\TimeBill
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
    public function getTimeSheet()
    {
      return $this->timeSheet;
    }

    /**
     * @param RecordRef $timeSheet
     * @return \Nzolt\NetSuite\TimeBill
     */
    public function setTimeSheet($timeSheet)
    {
      $this->timeSheet = $timeSheet;
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
     * @return \Nzolt\NetSuite\TimeBill
     */
    public function setStatus($status)
    {
      $this->status = $status;
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
     * @return \Nzolt\NetSuite\TimeBill
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
     * @return \Nzolt\NetSuite\TimeBill
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
     * @return \Nzolt\NetSuite\TimeBill
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
