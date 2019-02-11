<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Inventory;

/**
 * InventoryAdjustmentInventoryList
 */
class InventoryAdjustmentInventoryList {

    /**
     * @access public
     * @var InventoryAdjustmentInventory[]
     */
    public $inventory;

    /**
     * @access public
     * @var boolean
     */
    protected $replaceAll;

    static $paramtypesmap = array(
    	"inventory" => "InventoryAdjustmentInventory[]",
    	"replaceAll" => "boolean",
    );

    /**
     * Set replaceAll
     *
     * @param boolean $replaceAll
     * @return InventoryAdjustmentInventoryList
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