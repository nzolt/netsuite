<?php

namespace Nzolt\NetSuite;

class TimeSheetSearch extends SearchRecord
{

    /**
     * @var TimeSheetSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var EmployeeSearchBasic $employeeJoin
     */
    protected $employeeJoin = null;

    /**
     * @var TimeBillSearchBasic $timeBillJoin
     */
    protected $timeBillJoin = null;

    /**
     * @var TimeEntrySearchBasic $timeEntryJoin
     */
    protected $timeEntryJoin = null;

    /**
     * @var CustomSearchJoin[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TimeSheetSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param TimeSheetSearchBasic $basic
     * @return \Nzolt\NetSuite\TimeSheetSearch
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
     * @return \Nzolt\NetSuite\TimeSheetSearch
     */
    public function setEmployeeJoin($employeeJoin)
    {
      $this->employeeJoin = $employeeJoin;
      return $this;
    }

    /**
     * @return TimeBillSearchBasic
     */
    public function getTimeBillJoin()
    {
      return $this->timeBillJoin;
    }

    /**
     * @param TimeBillSearchBasic $timeBillJoin
     * @return \Nzolt\NetSuite\TimeSheetSearch
     */
    public function setTimeBillJoin($timeBillJoin)
    {
      $this->timeBillJoin = $timeBillJoin;
      return $this;
    }

    /**
     * @return TimeEntrySearchBasic
     */
    public function getTimeEntryJoin()
    {
      return $this->timeEntryJoin;
    }

    /**
     * @param TimeEntrySearchBasic $timeEntryJoin
     * @return \Nzolt\NetSuite\TimeSheetSearch
     */
    public function setTimeEntryJoin($timeEntryJoin)
    {
      $this->timeEntryJoin = $timeEntryJoin;
      return $this;
    }

    /**
     * @return CustomSearchJoin[]
     */
    public function getCustomSearchJoin()
    {
      return $this->customSearchJoin;
    }

    /**
     * @param CustomSearchJoin[] $customSearchJoin
     * @return \Nzolt\NetSuite\TimeSheetSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
