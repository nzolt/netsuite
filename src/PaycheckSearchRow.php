<?php

namespace Nzolt\NetSuite;

class PaycheckSearchRow extends SearchRow
{

    /**
     * @var PaycheckSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var EmployeeSearchRowBasic $employeeJoin
     */
    protected $employeeJoin = null;

    /**
     * @var PayrollItemSearchRowBasic $payrollItemJoin
     */
    protected $payrollItemJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PaycheckSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param PaycheckSearchRowBasic $basic
     * @return \Nzolt\NetSuite\PaycheckSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getEmployeeJoin()
    {
      return $this->employeeJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $employeeJoin
     * @return \Nzolt\NetSuite\PaycheckSearchRow
     */
    public function setEmployeeJoin($employeeJoin)
    {
      $this->employeeJoin = $employeeJoin;
      return $this;
    }

    /**
     * @return PayrollItemSearchRowBasic
     */
    public function getPayrollItemJoin()
    {
      return $this->payrollItemJoin;
    }

    /**
     * @param PayrollItemSearchRowBasic $payrollItemJoin
     * @return \Nzolt\NetSuite\PaycheckSearchRow
     */
    public function setPayrollItemJoin($payrollItemJoin)
    {
      $this->payrollItemJoin = $payrollItemJoin;
      return $this;
    }

}
