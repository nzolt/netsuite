<?php

namespace Nzolt\NetSuite;

class CashSaleSalesTeam
{

    /**
     * @var RecordRef $employee
     */
    protected $employee = null;

    /**
     * @var RecordRef $salesRole
     */
    protected $salesRole = null;

    /**
     * @var boolean $isPrimary
     */
    protected $isPrimary = null;

    /**
     * @var float $contribution
     */
    protected $contribution = null;

    
    public function __construct()
    {
    
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
     * @return \Nzolt\NetSuite\CashSaleSalesTeam
     */
    public function setEmployee($employee)
    {
      $this->employee = $employee;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSalesRole()
    {
      return $this->salesRole;
    }

    /**
     * @param RecordRef $salesRole
     * @return \Nzolt\NetSuite\CashSaleSalesTeam
     */
    public function setSalesRole($salesRole)
    {
      $this->salesRole = $salesRole;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPrimary()
    {
      return $this->isPrimary;
    }

    /**
     * @param boolean $isPrimary
     * @return \Nzolt\NetSuite\CashSaleSalesTeam
     */
    public function setIsPrimary($isPrimary)
    {
      $this->isPrimary = $isPrimary;
      return $this;
    }

    /**
     * @return float
     */
    public function getContribution()
    {
      return $this->contribution;
    }

    /**
     * @param float $contribution
     * @return \Nzolt\NetSuite\CashSaleSalesTeam
     */
    public function setContribution($contribution)
    {
      $this->contribution = $contribution;
      return $this;
    }

}
