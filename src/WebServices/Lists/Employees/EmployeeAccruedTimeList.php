<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Employees;

/**
 * EmployeeAccruedTimeList
 */
class EmployeeAccruedTimeList {

    /**
     * @access public
     * @var EmployeeAccruedTime[]
     */
    public $employeeAccruedTime;

    /**
     * @access public
     * @var boolean
     */
    protected $replaceAll;

    static $paramtypesmap = array(
    	"employeeAccruedTime" => "EmployeeAccruedTime[]",
    	"replaceAll" => "boolean",
    );

    /**
     * Set replaceAll
     *
     * @param boolean $replaceAll
     * @return EmployeeAccruedTimeList
     */
    public function setReplaceAll($replaceAll) {
        $this->replaceAll = $replaceAll;
        return $this;
    }

    /**
     * Get replaceAll
     *
     * @return boolean
     */
    public function getReplaceAll() {
        return $this->replaceAll;
    }

}