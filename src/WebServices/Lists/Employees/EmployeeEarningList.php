<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Employees;

/**
 * EmployeeEarningList
 */
class EmployeeEarningList {

    /**
     * @access public
     * @var EmployeeEarning[]
     */
    public $employeeEarning;

    /**
     * @access public
     * @var boolean
     */
    protected $replaceAll;

    static $paramtypesmap = array(
    	"employeeEarning" => "EmployeeEarning[]",
    	"replaceAll" => "boolean",
    );

    /**
     * Set replaceAll
     *
     * @param boolean $replaceAll
     * @return EmployeeEarningList
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