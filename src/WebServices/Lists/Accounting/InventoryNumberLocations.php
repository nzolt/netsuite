<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * InventoryNumberLocations
 */
class InventoryNumberLocations {

    /**
     * @access public
     * @var string
     */
    protected $location;

    /**
     * @access public
     * @var float
     */
    protected $quantityOnHand;

    /**
     * @access public
     * @var float
     */
    protected $quantityAvailable;

    /**
     * @access public
     * @var float
     */
    protected $quantityOnOrder;

    /**
     * @access public
     * @var float
     */
    protected $quantityInTransit;

    static $paramtypesmap = array(
    	"location" => "string",
    	"quantityOnHand" => "float",
    	"quantityAvailable" => "float",
    	"quantityOnOrder" => "float",
    	"quantityInTransit" => "float",
    );

    /**
     * Set location
     *
     * @param string $location
     * @return InventoryNumberLocations
     */
    public function setLocation($location) {
        $this->location = $location;
        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation() {
        return $this->location;
    }


    /**
     * Set quantityOnHand
     *
     * @param float $quantityOnHand
     * @return InventoryNumberLocations
     */
    public function setQuantityOnHand($quantityOnHand) {
        $this->quantityOnHand = $quantityOnHand;
        return $this;
    }

    /**
     * Get quantityOnHand
     *
     * @return float
     */
    public function getQuantityOnHand() {
        return $this->quantityOnHand;
    }


    /**
     * Set quantityAvailable
     *
     * @param float $quantityAvailable
     * @return InventoryNumberLocations
     */
    public function setQuantityAvailable($quantityAvailable) {
        $this->quantityAvailable = $quantityAvailable;
        return $this;
    }

    /**
     * Get quantityAvailable
     *
     * @return float
     */
    public function getQuantityAvailable() {
        return $this->quantityAvailable;
    }


    /**
     * Set quantityOnOrder
     *
     * @param float $quantityOnOrder
     * @return InventoryNumberLocations
     */
    public function setQuantityOnOrder($quantityOnOrder) {
        $this->quantityOnOrder = $quantityOnOrder;
        return $this;
    }

    /**
     * Get quantityOnOrder
     *
     * @return float
     */
    public function getQuantityOnOrder() {
        return $this->quantityOnOrder;
    }


    /**
     * Set quantityInTransit
     *
     * @param float $quantityInTransit
     * @return InventoryNumberLocations
     */
    public function setQuantityInTransit($quantityInTransit) {
        $this->quantityInTransit = $quantityInTransit;
        return $this;
    }

    /**
     * Get quantityInTransit
     *
     * @return float
     */
    public function getQuantityInTransit() {
        return $this->quantityInTransit;
    }

}