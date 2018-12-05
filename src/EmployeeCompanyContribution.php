<?php

namespace Nzolt\NetSuite;

class EmployeeCompanyContribution
{

    /**
     * @var RecordRef $payrollItem
     */
    protected $payrollItem = null;

    /**
     * @var string $rate
     */
    protected $rate = null;

    /**
     * @var float $limit
     */
    protected $limit = null;

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
     * @return \Nzolt\NetSuite\EmployeeCompanyContribution
     */
    public function setPayrollItem($payrollItem)
    {
      $this->payrollItem = $payrollItem;
      return $this;
    }

    /**
     * @return string
     */
    public function getRate()
    {
      return $this->rate;
    }

    /**
     * @param string $rate
     * @return \Nzolt\NetSuite\EmployeeCompanyContribution
     */
    public function setRate($rate)
    {
      $this->rate = $rate;
      return $this;
    }

    /**
     * @return float
     */
    public function getLimit()
    {
      return $this->limit;
    }

    /**
     * @param float $limit
     * @return \Nzolt\NetSuite\EmployeeCompanyContribution
     */
    public function setLimit($limit)
    {
      $this->limit = $limit;
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
     * @return \Nzolt\NetSuite\EmployeeCompanyContribution
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
     * @return \Nzolt\NetSuite\EmployeeCompanyContribution
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
     * @return \Nzolt\NetSuite\EmployeeCompanyContribution
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
