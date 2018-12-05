<?php

namespace Nzolt\NetSuite;

class EmployeeHrEducationList
{

    /**
     * @var EmployeeHrEducation[] $employeeHrEducation
     */
    protected $employeeHrEducation = null;

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
     * @return EmployeeHrEducation[]
     */
    public function getEmployeeHrEducation()
    {
      return $this->employeeHrEducation;
    }

    /**
     * @param EmployeeHrEducation[] $employeeHrEducation
     * @return \Nzolt\NetSuite\EmployeeHrEducationList
     */
    public function setEmployeeHrEducation(array $employeeHrEducation = null)
    {
      $this->employeeHrEducation = $employeeHrEducation;
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
     * @return \Nzolt\NetSuite\EmployeeHrEducationList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
