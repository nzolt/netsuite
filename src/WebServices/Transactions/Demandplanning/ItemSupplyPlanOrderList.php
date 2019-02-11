<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Demandplanning;

/**
 * ItemSupplyPlanOrderList
 */
class ItemSupplyPlanOrderList {

    /**
     * @access public
     * @var ItemSupplyPlanOrder[]
     */
    public $itemSupplyPlanOrder;

    /**
     * @access public
     * @var boolean
     */
    protected $replaceAll;

    static $paramtypesmap = array(
    	"itemSupplyPlanOrder" => "ItemSupplyPlanOrder[]",
    	"replaceAll" => "boolean",
    );

    /**
     * Set replaceAll
     *
     * @param boolean $replaceAll
     * @return ItemSupplyPlanOrderList
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