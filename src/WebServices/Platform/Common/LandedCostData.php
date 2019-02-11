<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

/**
 * LandedCostData
 */
class LandedCostData {

    /**
     * @access public
     * @var RecordRef
     */
    public $costCategory;

    /**
     * @access public
     * @var float
     */
    protected $amount;

    static $paramtypesmap = array(
    	"costCategory" => "RecordRef",
    	"amount" => "float",
    );

    /**
     * Set amount
     *
     * @param float $amount
     * @return LandedCostData
     */
    public function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount() {
        return $this->amount;
    }

}