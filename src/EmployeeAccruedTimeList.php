<?php

namespace Nzolt\NetSuite;

class EmployeeAccruedTimeList
{

    /**
     * @var EmployeeAccruedTime[] $employeeAccruedTime
     */
    protected $employeeAccruedTime = null;

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
     * @return EmployeeAccruedTime[]
     */
    public function getEmployeeAccruedTime()
    {
      return $this->employeeAccruedTime;
    }

    /**
     * @param EmployeeAccruedTime[] $employeeAccruedTime
     * @return \Nzolt\NetSuite\EmployeeAccruedTimeList
     */
    public function setEmployeeAccruedTime(array $employeeAccruedTime = null)
    {
      $this->employeeAccruedTime = $employeeAccruedTime;
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
     * @return \Nzolt\NetSuite\EmployeeAccruedTimeList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
