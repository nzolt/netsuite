<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

/**
 * CustomerItemPricing
 */
class CustomerItemPricing {

    /**
     * @access public
     * @var RecordRef
     */
    public $item;

    /**
     * @access public
     * @var RecordRef
     */
    public $level;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var float
     */
    protected $price;

    static $paramtypesmap = array(
    	"item" => "RecordRef",
    	"level" => "RecordRef",
    	"currency" => "RecordRef",
    	"price" => "float",
    );

    /**
     * Set price
     *
     * @param float $price
     * @return CustomerItemPricing
     */
    public function setPrice($price) {
        $this->price = $price;
        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice() {
        return $this->price;
    }

}