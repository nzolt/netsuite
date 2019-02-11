<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Employees;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\TimeSheetSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TimeEntrySearchBasic;

/**
 * TimeSheetSearch
 */
class TimeSheetSearch extends SearchRecord {

    /**
     * @access public
     * @var TimeSheetSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    protected $employeeJoin;

    /**
     * @access public
     * @var TimeEntrySearchBasic
     */
    protected $timeEntryJoin;

    /**
     * @access public
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "TimeSheetSearchBasic",
    	"employeeJoin" => "EmployeeSearchBasic",
    	"timeEntryJoin" => "TimeEntrySearchBasic",
    	"customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * Set basic
     *
     * @param TimeSheetSearchBasic $basic
     * @return TimeSheetSearch
     */
    public function setBasic(TimeSheetSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return TimeSheetSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set employeeJoin
     *
     * @param EmployeeSearchBasic $employeeJoin
     * @return TimeSheetSearch
     */
    public function setEmployeeJoin(EmployeeSearchBasic $employeeJoin) {
        $this->employeeJoin = $employeeJoin;
        return $this;
    }

    /**
     * Get employeeJoin
     *
     * @return EmployeeSearchBasic
     */
    public function getEmployeeJoin() {
        return $this->employeeJoin;
    }


    /**
     * Set timeEntryJoin
     *
     * @param TimeEntrySearchBasic $timeEntryJoin
     * @return TimeSheetSearch
     */
    public function setTimeEntryJoin(TimeEntrySearchBasic $timeEntryJoin) {
        $this->timeEntryJoin = $timeEntryJoin;
        return $this;
    }

    /**
     * Get timeEntryJoin
     *
     * @return TimeEntrySearchBasic
     */
    public function getTimeEntryJoin() {
        return $this->timeEntryJoin;
    }

}