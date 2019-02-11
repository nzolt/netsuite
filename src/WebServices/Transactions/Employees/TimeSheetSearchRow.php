<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Employees;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\TimeSheetSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TimeEntrySearchRowBasic;

/**
 * TimeSheetSearchRow
 */
class TimeSheetSearchRow extends SearchRow {

    /**
     * @access public
     * @var TimeSheetSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $employeeJoin;

    /**
     * @access public
     * @var TimeEntrySearchRowBasic
     */
    protected $timeEntryJoin;

    /**
     * @access public
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "TimeSheetSearchRowBasic",
    	"employeeJoin" => "EmployeeSearchRowBasic",
    	"timeEntryJoin" => "TimeEntrySearchRowBasic",
    	"customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * Set basic
     *
     * @param TimeSheetSearchRowBasic $basic
     * @return TimeSheetSearchRow
     */
    public function setBasic(TimeSheetSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return TimeSheetSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set employeeJoin
     *
     * @param EmployeeSearchRowBasic $employeeJoin
     * @return TimeSheetSearchRow
     */
    public function setEmployeeJoin(EmployeeSearchRowBasic $employeeJoin) {
        $this->employeeJoin = $employeeJoin;
        return $this;
    }

    /**
     * Get employeeJoin
     *
     * @return EmployeeSearchRowBasic
     */
    public function getEmployeeJoin() {
        return $this->employeeJoin;
    }


    /**
     * Set timeEntryJoin
     *
     * @param TimeEntrySearchRowBasic $timeEntryJoin
     * @return TimeSheetSearchRow
     */
    public function setTimeEntryJoin(TimeEntrySearchRowBasic $timeEntryJoin) {
        $this->timeEntryJoin = $timeEntryJoin;
        return $this;
    }

    /**
     * Get timeEntryJoin
     *
     * @return TimeEntrySearchRowBasic
     */
    public function getTimeEntryJoin() {
        return $this->timeEntryJoin;
    }

}