<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;

/**
 * InventoryDetail
 */
class InventoryDetail extends Record {

    /**
     * @access public
     * @var InventoryAssignmentList
     */
    protected $inventoryAssignmentList;

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    static $paramtypesmap = array(
    	"inventoryAssignmentList" => "InventoryAssignmentList",
    	"customForm" => "RecordRef",
    );

    /**
     * Set inventoryAssignmentList
     *
     * @param InventoryAssignmentList $inventoryAssignmentList
     * @return InventoryDetail
     */
    public function setInventoryAssignmentList(InventoryAssignmentList $inventoryAssignmentList) {
        $this->inventoryAssignmentList = $inventoryAssignmentList;
        return $this;
    }

    /**
     * Get inventoryAssignmentList
     *
     * @return InventoryAssignmentList
     */
    public function getInventoryAssignmentList() {
        return $this->inventoryAssignmentList;
    }

}