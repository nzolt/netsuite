<?php

namespace Nzolt\NetSuite;

class EmployeeRatesList
{

    /**
     * @var EmployeeRates[] $employeeRates
     */
    protected $employeeRates = null;

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
     * @return EmployeeRates[]
     */
    public function getEmployeeRates()
    {
      return $this->employeeRates;
    }

    /**
     * @param EmployeeRates[] $employeeRates
     * @return \Nzolt\NetSuite\EmployeeRatesList
     */
    public function setEmployeeRates(array $employeeRates = null)
    {
      $this->employeeRates = $employeeRates;
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
     * @return \Nzolt\NetSuite\EmployeeRatesList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
