<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Common\Types\LandedCostSource;

/**
 * LandedCostSummary
 */
class LandedCostSummary {

    /**
     * @access public
     * @var RecordRef
     */
    public $category;

    /**
     * @access public
     * @var float
     */
    protected $amount;

    /**
     * @access public
     * @var LandedCostSource
     */
    protected $source;

    /**
     * @access public
     * @var RecordRef
     */
    public $transaction;

    static $paramtypesmap = array(
    	"category" => "RecordRef",
    	"amount" => "float",
    	"source" => "LandedCostSource",
    	"transaction" => "RecordRef",
    );

    /**
     * Set amount
     *
     * @param float $amount
     * @return LandedCostSummary
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


    /**
     * Set source
     *
     * @param LandedCostSource $source
     * @return LandedCostSummary
     */
    public function setSource(LandedCostSource $source) {
        $this->source = $source;
        return $this;
    }

    /**
     * Get source
     *
     * @return LandedCostSource
     */
    public function getSource() {
        return $this->source;
    }

}