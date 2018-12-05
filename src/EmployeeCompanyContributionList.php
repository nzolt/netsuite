<?php

namespace Nzolt\NetSuite;

class EmployeeCompanyContributionList
{

    /**
     * @var EmployeeCompanyContribution[] $employeeCompanyContribution
     */
    protected $employeeCompanyContribution = null;

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
     * @return EmployeeCompanyContribution[]
     */
    public function getEmployeeCompanyContribution()
    {
      return $this->employeeCompanyContribution;
    }

    /**
     * @param EmployeeCompanyContribution[] $employeeCompanyContribution
     * @return \Nzolt\NetSuite\EmployeeCompanyContributionList
     */
    public function setEmployeeCompanyContribution(array $employeeCompanyContribution = null)
    {
      $this->employeeCompanyContribution = $employeeCompanyContribution;
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
     * @return \Nzolt\NetSuite\EmployeeCompanyContributionList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
