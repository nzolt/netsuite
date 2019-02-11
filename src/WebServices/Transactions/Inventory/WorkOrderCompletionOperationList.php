<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Inventory;

/**
 * WorkOrderCompletionOperationList
 */
class WorkOrderCompletionOperationList {

    /**
     * @access public
     * @var WorkOrderCompletionOperation[]
     */
    public $workOrderCompletionOperation;

    /**
     * @access public
     * @var boolean
     */
    protected $replaceAll;

    static $paramtypesmap = array(
    	"workOrderCompletionOperation" => "WorkOrderCompletionOperation[]",
    	"replaceAll" => "boolean",
    );

    /**
     * Set replaceAll
     *
     * @param boolean $replaceAll
     * @return WorkOrderCompletionOperationList
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