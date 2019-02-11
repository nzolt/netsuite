<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Inventory;

/**
 * InventoryCostRevaluationCostComponentList
 */
class InventoryCostRevaluationCostComponentList {

    /**
     * @access public
     * @var InventoryCostRevaluationCostComponent[]
     */
    public $costComponent;

    /**
     * @access public
     * @var boolean
     */
    protected $replaceAll;

    static $paramtypesmap = array(
    	"costComponent" => "InventoryCostRevaluationCostComponent[]",
    	"replaceAll" => "boolean",
    );

    /**
     * Set replaceAll
     *
     * @param boolean $replaceAll
     * @return InventoryCostRevaluationCostComponentList
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