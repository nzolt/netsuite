<?php

namespace Nzolt\NetSuite;

class EmployeeEarning
{

    /**
     * @var RecordRef $payrollItem
     */
    protected $payrollItem = null;

    /**
     * @var string $payRate
     */
    protected $payRate = null;

    /**
     * @var boolean $primaryEarning
     */
    protected $primaryEarning = null;

    /**
     * @var float $defaultHours
     */
    protected $defaultHours = null;

    /**
     * @var boolean $inactive
     */
    protected $inactive = null;

    /**
     * @var boolean $defaultEarning
     */
    protected $defaultEarning = null;

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
     * @return \Nzolt\NetSuite\EmployeeEarning
     */
    public function setPayrollItem($payrollItem)
    {
      $this->payrollItem = $payrollItem;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayRate()
    {
      return $this->payRate;
    }

    /**
     * @param string $payRate
     * @return \Nzolt\NetSuite\EmployeeEarning
     */
    public function setPayRate($payRate)
    {
      $this->payRate = $payRate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPrimaryEarning()
    {
      return $this->primaryEarning;
    }

    /**
     * @param boolean $primaryEarning
     * @return \Nzolt\NetSuite\EmployeeEarning
     */
    public function setPrimaryEarning($primaryEarning)
    {
      $this->primaryEarning = $primaryEarning;
      return $this;
    }

    /**
     * @return float
     */
    public function getDefaultHours()
    {
      return $this->defaultHours;
    }

    /**
     * @param float $defaultHours
     * @return \Nzolt\NetSuite\EmployeeEarning
     */
    public function setDefaultHours($defaultHours)
    {
      $this->defaultHours = $defaultHours;
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
     * @return \Nzolt\NetSuite\EmployeeEarning
     */
    public function setInactive($inactive)
    {
      $this->inactive = $inactive;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefaultEarning()
    {
      return $this->defaultEarning;
    }

    /**
     * @param boolean $defaultEarning
     * @return \Nzolt\NetSuite\EmployeeEarning
     */
    public function setDefaultEarning($defaultEarning)
    {
      $this->defaultEarning = $defaultEarning;
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
     * @return \Nzolt\NetSuite\EmployeeEarning
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
     * @return \Nzolt\NetSuite\EmployeeEarning
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
