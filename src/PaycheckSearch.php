<?php

namespace Nzolt\NetSuite;

class PaycheckSearch extends SearchRecord
{

    /**
     * @var PaycheckSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var EmployeeSearchBasic $employeeJoin
     */
    protected $employeeJoin = null;

    /**
     * @var PayrollItemSearchBasic $payrollItemJoin
     */
    protected $payrollItemJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PaycheckSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param PaycheckSearchBasic $basic
     * @return \Nzolt\NetSuite\PaycheckSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getEmployeeJoin()
    {
      return $this->employeeJoin;
    }

    /**
     * @param EmployeeSearchBasic $employeeJoin
     * @return \Nzolt\NetSuite\PaycheckSearch
     */
    public function setEmployeeJoin($employeeJoin)
    {
      $this->employeeJoin = $employeeJoin;
      return $this;
    }

    /**
     * @return PayrollItemSearchBasic
     */
    public function getPayrollItemJoin()
    {
      return $this->payrollItemJoin;
    }

    /**
     * @param PayrollItemSearchBasic $payrollItemJoin
     * @return \Nzolt\NetSuite\PaycheckSearch
     */
    public function setPayrollItemJoin($payrollItemJoin)
    {
      $this->payrollItemJoin = $payrollItemJoin;
      return $this;
    }

}
