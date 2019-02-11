<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Inventory;

/**
 * InventoryCostRevaluationCostComponent
 */
class InventoryCostRevaluationCostComponent {

    /**
     * @access public
     * @var float
     */
    protected $cost;

    /**
     * @access public
     * @var RecordRef
     */
    public $componentItem;

    /**
     * @access public
     * @var float
     */
    protected $quantity;

    /**
     * @access public
     * @var RecordRef
     */
    public $units;

    /**
     * @access public
     * @var RecordRef
     */
    public $costCategory;

    static $paramtypesmap = array(
    	"cost" => "float",
    	"componentItem" => "RecordRef",
    	"quantity" => "float",
    	"units" => "RecordRef",
    	"costCategory" => "RecordRef",
    );

    /**
     * Set cost
     *
     * @param float $cost
     * @return InventoryCostRevaluationCostComponent
     */
    public function setCost($cost) {
        $this->cost = $cost;
        return $this;
    }

    /**
     * Get cost
     *
     * @return float
     */
    public function getCost() {
        return $this->cost;
    }


    /**
     * Set quantity
     *
     * @param float $quantity
     * @return InventoryCostRevaluationCostComponent
     */
    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Get quantity
     *
     * @return float
     */
    public function getQuantity() {
        return $this->quantity;
    }

}