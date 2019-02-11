<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

/**
 * VendorCurrency
 */
class VendorCurrency {

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var float
     */
    protected $balance;

    /**
     * @access public
     * @var float
     */
    protected $unbilledOrders;

    static $paramtypesmap = array(
    	"currency" => "RecordRef",
    	"balance" => "float",
    	"unbilledOrders" => "float",
    );

    /**
     * Set balance
     *
     * @param float $balance
     * @return VendorCurrency
     */
    public function setBalance($balance) {
        $this->balance = $balance;
        return $this;
    }

    /**
     * Get balance
     *
     * @return float
     */
    public function getBalance() {
        return $this->balance;
    }


    /**
     * Set unbilledOrders
     *
     * @param float $unbilledOrders
     * @return VendorCurrency
     */
    public function setUnbilledOrders($unbilledOrders) {
        $this->unbilledOrders = $unbilledOrders;
        return $this;
    }

    /**
     * Get unbilledOrders
     *
     * @return float
     */
    public function getUnbilledOrders() {
        return $this->unbilledOrders;
    }

}