<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * Pricing
 */
class Pricing {

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var RecordRef
     */
    public $priceLevel;

    /**
     * @access public
     * @var float
     */
    protected $discount;

    /**
     * @access public
     * @var PriceList
     */
    protected $priceList;

    static $paramtypesmap = array(
    	"currency" => "RecordRef",
    	"priceLevel" => "RecordRef",
    	"discount" => "float",
    	"priceList" => "PriceList",
    );

    /**
     * Set discount
     *
     * @param float $discount
     * @return Pricing
     */
    public function setDiscount($discount) {
        $this->discount = $discount;
        return $this;
    }

    /**
     * Get discount
     *
     * @return float
     */
    public function getDiscount() {
        return $this->discount;
    }


    /**
     * Set priceList
     *
     * @param PriceList $priceList
     * @return Pricing
     */
    public function setPriceList(PriceList $priceList) {
        $this->priceList = $priceList;
        return $this;
    }

    /**
     * Get priceList
     *
     * @return PriceList
     */
    public function getPriceList() {
        return $this->priceList;
    }

}