<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Inventory;

/**
 * WorkOrderIssueComponentList
 */
class WorkOrderIssueComponentList {

    /**
     * @access public
     * @var WorkOrderIssueComponent[]
     */
    public $workOrderIssueComponent;

    /**
     * @access public
     * @var boolean
     */
    protected $replaceAll;

    static $paramtypesmap = array(
    	"workOrderIssueComponent" => "WorkOrderIssueComponent[]",
    	"replaceAll" => "boolean",
    );

    /**
     * Set replaceAll
     *
     * @param boolean $replaceAll
     * @return WorkOrderIssueComponentList
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