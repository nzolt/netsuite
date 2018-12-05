<?php

namespace Nzolt\NetSuite;

class TimeItem
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var RecordRef $employee
     */
    protected $employee = null;

    /**
     * @var TimeItemTimeType $timeType
     */
    protected $timeType = null;

    /**
     * @var \DateTime $tranDate
     */
    protected $tranDate = null;

    /**
     * @var RecordRef $customer
     */
    protected $customer = null;

    /**
     * @var boolean $isBillable
     */
    protected $isBillable = null;

    /**
     * @var RecordRef $payrollItem
     */
    protected $payrollItem = null;

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    /**
     * @var RecordRef $temporaryLocalJurisdiction
     */
    protected $temporaryLocalJurisdiction = null;

    /**
     * @var RecordRef $temporaryStateJurisdiction
     */
    protected $temporaryStateJurisdiction = null;

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
     * @var float $rate
     */
    protected $rate = null;

    /**
     * @var boolean $overrideRate
     */
    protected $overrideRate = null;

    /**
     * @var Duration $hoursTotal
     */
    protected $hoursTotal = null;

    /**
     * @var RecordRef $caseTaskEvent
     */
    protected $caseTaskEvent = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var boolean $isUtilized
     */
    protected $isUtilized = null;

    /**
     * @var boolean $isProductive
     */
    protected $isProductive = null;

    /**
     * @var boolean $isExempt
     */
    protected $isExempt = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Nzolt\NetSuite\TimeItem
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \Nzolt\NetSuite\TimeItem
     */
    public function setEmployee($employee)
    {
      $this->employee = $employee;
      return $this;
    }

    /**
     * @return TimeItemTimeType
     */
    public function getTimeType()
    {
      return $this->timeType;
    }

    /**
     * @param TimeItemTimeType $timeType
     * @return \Nzolt\NetSuite\TimeItem
     */
    public function setTimeType($timeType)
    {
      $this->timeType = $timeType;
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
     * @return \Nzolt\NetSuite\TimeItem
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
    public function getCustomer()
    {
      return $this->customer;
    }

    /**
     * @param RecordRef $customer
     * @return \Nzolt\NetSuite\TimeItem
     */
    public function setCustomer($customer)
    {
      $this->customer = $customer;
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
     * @return \Nzolt\NetSuite\TimeItem
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
     * @return \Nzolt\NetSuite\TimeItem
     */
    public function setPayrollItem($payrollItem)
    {
      $this->payrollItem = $payrollItem;
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
     * @return \Nzolt\NetSuite\TimeItem
     */
    public function setItem($item)
    {
      $this->item = $item;
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
     * @return \Nzolt\NetSuite\TimeItem
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
     * @return \Nzolt\NetSuite\TimeItem
     */
    public function setTemporaryStateJurisdiction($temporaryStateJurisdiction)
    {
      $this->temporaryStateJurisdiction = $temporaryStateJurisdiction;
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
     * @return \Nzolt\NetSuite\TimeItem
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
     * @return \Nzolt\NetSuite\TimeItem
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
     * @return \Nzolt\NetSuite\TimeItem
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
     * @return \Nzolt\NetSuite\TimeItem
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
     * @return \Nzolt\NetSuite\TimeItem
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
     * @return \Nzolt\NetSuite\TimeItem
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
     * @return \Nzolt\NetSuite\TimeItem
     */
    public function setOverrideRate($overrideRate)
    {
      $this->overrideRate = $overrideRate;
      return $this;
    }

    /**
     * @return Duration
     */
    public function getHoursTotal()
    {
      return $this->hoursTotal;
    }

    /**
     * @param Duration $hoursTotal
     * @return \Nzolt\NetSuite\TimeItem
     */
    public function setHoursTotal($hoursTotal)
    {
      $this->hoursTotal = $hoursTotal;
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
     * @return \Nzolt\NetSuite\TimeItem
     */
    public function setCaseTaskEvent($caseTaskEvent)
    {
      $this->caseTaskEvent = $caseTaskEvent;
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
     * @return \Nzolt\NetSuite\TimeItem
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsUtilized()
    {
      return $this->isUtilized;
    }

    /**
     * @param boolean $isUtilized
     * @return \Nzolt\NetSuite\TimeItem
     */
    public function setIsUtilized($isUtilized)
    {
      $this->isUtilized = $isUtilized;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsProductive()
    {
      return $this->isProductive;
    }

    /**
     * @param boolean $isProductive
     * @return \Nzolt\NetSuite\TimeItem
     */
    public function setIsProductive($isProductive)
    {
      $this->isProductive = $isProductive;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsExempt()
    {
      return $this->isExempt;
    }

    /**
     * @param boolean $isExempt
     * @return \Nzolt\NetSuite\TimeItem
     */
    public function setIsExempt($isExempt)
    {
      $this->isExempt = $isExempt;
      return $this;
    }

}
