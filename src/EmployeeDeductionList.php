<?php

namespace Nzolt\NetSuite;

class EmployeeDeductionList
{

    /**
     * @var EmployeeDeduction[] $employeeDeduction
     */
    protected $employeeDeduction = null;

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
     * @return EmployeeDeduction[]
     */
    public function getEmployeeDeduction()
    {
      return $this->employeeDeduction;
    }

    /**
     * @param EmployeeDeduction[] $employeeDeduction
     * @return \Nzolt\NetSuite\EmployeeDeductionList
     */
    public function setEmployeeDeduction(array $employeeDeduction = null)
    {
      $this->employeeDeduction = $employeeDeduction;
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
     * @return \Nzolt\NetSuite\EmployeeDeductionList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
