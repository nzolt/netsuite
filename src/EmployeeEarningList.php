<?php

namespace Nzolt\NetSuite;

class EmployeeEarningList
{

    /**
     * @var EmployeeEarning[] $employeeEarning
     */
    protected $employeeEarning = null;

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
     * @return EmployeeEarning[]
     */
    public function getEmployeeEarning()
    {
      return $this->employeeEarning;
    }

    /**
     * @param EmployeeEarning[] $employeeEarning
     * @return \Nzolt\NetSuite\EmployeeEarningList
     */
    public function setEmployeeEarning(array $employeeEarning = null)
    {
      $this->employeeEarning = $employeeEarning;
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
     * @return \Nzolt\NetSuite\EmployeeEarningList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
