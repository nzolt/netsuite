<?php

namespace Nzolt\NetSuite;

class EmployeeHcmPositionList
{

    /**
     * @var EmployeeHcmPosition[] $employeeHcmPosition
     */
    protected $employeeHcmPosition = null;

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
     * @return EmployeeHcmPosition[]
     */
    public function getEmployeeHcmPosition()
    {
      return $this->employeeHcmPosition;
    }

    /**
     * @param EmployeeHcmPosition[] $employeeHcmPosition
     * @return \Nzolt\NetSuite\EmployeeHcmPositionList
     */
    public function setEmployeeHcmPosition(array $employeeHcmPosition = null)
    {
      $this->employeeHcmPosition = $employeeHcmPosition;
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
     * @return \Nzolt\NetSuite\EmployeeHcmPositionList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
