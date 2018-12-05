<?php

namespace Nzolt\NetSuite;

class TimeSheetSearchRow extends SearchRow
{

    /**
     * @var TimeSheetSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var EmployeeSearchRowBasic $employeeJoin
     */
    protected $employeeJoin = null;

    /**
     * @var TimeBillSearchRowBasic $timeBillJoin
     */
    protected $timeBillJoin = null;

    /**
     * @var TimeEntrySearchRowBasic $timeEntryJoin
     */
    protected $timeEntryJoin = null;

    /**
     * @var CustomSearchRowBasic[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TimeSheetSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param TimeSheetSearchRowBasic $basic
     * @return \Nzolt\NetSuite\TimeSheetSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getEmployeeJoin()
    {
      return $this->employeeJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $employeeJoin
     * @return \Nzolt\NetSuite\TimeSheetSearchRow
     */
    public function setEmployeeJoin($employeeJoin)
    {
      $this->employeeJoin = $employeeJoin;
      return $this;
    }

    /**
     * @return TimeBillSearchRowBasic
     */
    public function getTimeBillJoin()
    {
      return $this->timeBillJoin;
    }

    /**
     * @param TimeBillSearchRowBasic $timeBillJoin
     * @return \Nzolt\NetSuite\TimeSheetSearchRow
     */
    public function setTimeBillJoin($timeBillJoin)
    {
      $this->timeBillJoin = $timeBillJoin;
      return $this;
    }

    /**
     * @return TimeEntrySearchRowBasic
     */
    public function getTimeEntryJoin()
    {
      return $this->timeEntryJoin;
    }

    /**
     * @param TimeEntrySearchRowBasic $timeEntryJoin
     * @return \Nzolt\NetSuite\TimeSheetSearchRow
     */
    public function setTimeEntryJoin($timeEntryJoin)
    {
      $this->timeEntryJoin = $timeEntryJoin;
      return $this;
    }

    /**
     * @return CustomSearchRowBasic[]
     */
    public function getCustomSearchJoin()
    {
      return $this->customSearchJoin;
    }

    /**
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return \Nzolt\NetSuite\TimeSheetSearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
