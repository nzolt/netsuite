<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * Price
 */
class Price {

    /**
     * @access public
     * @var float
     */
    protected $value;

    /**
     * @access public
     * @var float
     */
    protected $quantity;

    static $paramtypesmap = array(
    	"value" => "float",
    	"quantity" => "float",
    );

    /**
     * Set value
     *
     * @param float $value
     * @return Price
     */
    public function setValue($value) {
        $this->value = $value;
        return $this;
    }

    /**
     * Get value
     *
     * @return float
     */
    public function getValue() {
        return $this->value;
    }


    /**
     * Set quantity
     *
     * @param float $quantity
     * @return Price
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