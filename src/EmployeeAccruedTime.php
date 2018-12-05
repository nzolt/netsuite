<?php

namespace Nzolt\NetSuite;

class EmployeeAccruedTime
{

    /**
     * @var RecordRef $payrollItem
     */
    protected $payrollItem = null;

    /**
     * @var float $accruedHours
     */
    protected $accruedHours = null;

    /**
     * @var float $accrualRate
     */
    protected $accrualRate = null;

    /**
     * @var float $monetaryRate
     */
    protected $monetaryRate = null;

    /**
     * @var boolean $resetAccruedHoursAtYearEnd
     */
    protected $resetAccruedHoursAtYearEnd = null;

    /**
     * @var EmployeeAccruedTimeAccrualMethod $accrualMethod
     */
    protected $accrualMethod = null;

    /**
     * @var float $maximumAccruedHours
     */
    protected $maximumAccruedHours = null;

    /**
     * @var boolean $inactive
     */
    protected $inactive = null;

    /**
     * @var \DateTime $effectiveDate
     */
    protected $effectiveDate = null;

    /**
     * @var \DateTime $expirationDate
     */
    protected $expirationDate = null;

    
    public function __construct()
    {
    
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
     * @return \Nzolt\NetSuite\EmployeeAccruedTime
     */
    public function setPayrollItem($payrollItem)
    {
      $this->payrollItem = $payrollItem;
      return $this;
    }

    /**
     * @return float
     */
    public function getAccruedHours()
    {
      return $this->accruedHours;
    }

    /**
     * @param float $accruedHours
     * @return \Nzolt\NetSuite\EmployeeAccruedTime
     */
    public function setAccruedHours($accruedHours)
    {
      $this->accruedHours = $accruedHours;
      return $this;
    }

    /**
     * @return float
     */
    public function getAccrualRate()
    {
      return $this->accrualRate;
    }

    /**
     * @param float $accrualRate
     * @return \Nzolt\NetSuite\EmployeeAccruedTime
     */
    public function setAccrualRate($accrualRate)
    {
      $this->accrualRate = $accrualRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getMonetaryRate()
    {
      return $this->monetaryRate;
    }

    /**
     * @param float $monetaryRate
     * @return \Nzolt\NetSuite\EmployeeAccruedTime
     */
    public function setMonetaryRate($monetaryRate)
    {
      $this->monetaryRate = $monetaryRate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getResetAccruedHoursAtYearEnd()
    {
      return $this->resetAccruedHoursAtYearEnd;
    }

    /**
     * @param boolean $resetAccruedHoursAtYearEnd
     * @return \Nzolt\NetSuite\EmployeeAccruedTime
     */
    public function setResetAccruedHoursAtYearEnd($resetAccruedHoursAtYearEnd)
    {
      $this->resetAccruedHoursAtYearEnd = $resetAccruedHoursAtYearEnd;
      return $this;
    }

    /**
     * @return EmployeeAccruedTimeAccrualMethod
     */
    public function getAccrualMethod()
    {
      return $this->accrualMethod;
    }

    /**
     * @param EmployeeAccruedTimeAccrualMethod $accrualMethod
     * @return \Nzolt\NetSuite\EmployeeAccruedTime
     */
    public function setAccrualMethod($accrualMethod)
    {
      $this->accrualMethod = $accrualMethod;
      return $this;
    }

    /**
     * @return float
     */
    public function getMaximumAccruedHours()
    {
      return $this->maximumAccruedHours;
    }

    /**
     * @param float $maximumAccruedHours
     * @return \Nzolt\NetSuite\EmployeeAccruedTime
     */
    public function setMaximumAccruedHours($maximumAccruedHours)
    {
      $this->maximumAccruedHours = $maximumAccruedHours;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInactive()
    {
      return $this->inactive;
    }

    /**
     * @param boolean $inactive
     * @return \Nzolt\NetSuite\EmployeeAccruedTime
     */
    public function setInactive($inactive)
    {
      $this->inactive = $inactive;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
      if ($this->effectiveDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->effectiveDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $effectiveDate
     * @return \Nzolt\NetSuite\EmployeeAccruedTime
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
      if ($effectiveDate == null) {
       $this->effectiveDate = null;
      } else {
        $this->effectiveDate = $effectiveDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDate()
    {
      if ($this->expirationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->expirationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $expirationDate
     * @return \Nzolt\NetSuite\EmployeeAccruedTime
     */
    public function setExpirationDate(\DateTime $expirationDate = null)
    {
      if ($expirationDate == null) {
       $this->expirationDate = null;
      } else {
        $this->expirationDate = $expirationDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
