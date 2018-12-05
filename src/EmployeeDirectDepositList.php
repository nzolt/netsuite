<?php

namespace Nzolt\NetSuite;

class EmployeeDirectDepositList
{

    /**
     * @var EmployeeDirectDeposit[] $employeeDirectDeposit
     */
    protected $employeeDirectDeposit = null;

    /**
     * @var boolean $replaceAll
     */
    protected $replaceAll = null;

    /**
     * @param boolean $replaceAll
     */
    public function __construct($replaceAll)
    {
      $this->replaceAll = $replaceAll;
    }

    /**
     * @return EmployeeDirectDeposit[]
     */
    public function getEmployeeDirectDeposit()
    {
      return $this->employeeDirectDeposit;
    }

    /**
     * @param EmployeeDirectDeposit[] $employeeDirectDeposit
     * @return \Nzolt\NetSuite\EmployeeDirectDepositList
     */
    public function setEmployeeDirectDeposit(array $employeeDirectDeposit = null)
    {
      $this->employeeDirectDeposit = $employeeDirectDeposit;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReplaceAll()
    {
      return $this->replaceAll;
    }

    /**
     * @param boolean $replaceAll
     * @return \Nzolt\NetSuite\EmployeeDirectDepositList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
