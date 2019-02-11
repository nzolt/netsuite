<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Marketing;

/**
 * PromotionCodeCurrency
 */
class PromotionCodeCurrency {

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var float
     */
    protected $minimumOrderAmount;

    static $paramtypesmap = array(
    	"currency" => "RecordRef",
    	"minimumOrderAmount" => "float",
    );

    /**
     * Set minimumOrderAmount
     *
     * @param float $minimumOrderAmount
     * @return PromotionCodeCurrency
     */
    public function setMinimumOrderAmount($minimumOrderAmount) {
        $this->minimumOrderAmount = $minimumOrderAmount;
        return $this;
    }

    /**
     * Get minimumOrderAmount
     *
     * @return float
     */
    public function getMinimumOrderAmount() {
        return $this->minimumOrderAmount;
    }

}