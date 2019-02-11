<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * InventoryItemBinNumber
 */
class InventoryItemBinNumber {

    /**
     * @access public
     * @var RecordRef
     */
    public $binNumber;

    /**
     * @access public
     * @var string
     */
    protected $onHand;

    /**
     * @access public
     * @var string
     */
    protected $onHandAvail;

    /**
     * @access public
     * @var string
     */
    protected $location;

    /**
     * @access public
     * @var boolean
     */
    protected $preferredBin;

    static $paramtypesmap = array(
    	"binNumber" => "RecordRef",
    	"onHand" => "string",
    	"onHandAvail" => "string",
    	"location" => "string",
    	"preferredBin" => "boolean",
    );

    /**
     * Set onHand
     *
     * @param string $onHand
     * @return InventoryItemBinNumber
     */
    public function setOnHand($onHand) {
        $this->onHand = $onHand;
        return $this;
    }

    /**
     * Get onHand
     *
     * @return string
     */
    public function getOnHand() {
        return $this->onHand;
    }


    /**
     * Set onHandAvail
     *
     * @param string $onHandAvail
     * @return InventoryItemBinNumber
     */
    public function setOnHandAvail($onHandAvail) {
        $this->onHandAvail = $onHandAvail;
        return $this;
    }

    /**
     * Get onHandAvail
     *
     * @return string
     */
    public function getOnHandAvail() {
        return $this->onHandAvail;
    }


    /**
     * Set location
     *
     * @param string $location
     * @return InventoryItemBinNumber
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
     * Set preferredBin
     *
     * @param boolean $preferredBin
     * @return InventoryItemBinNumber
     */
    public function setPreferredBin($preferredBin) {
        $this->preferredBin = $preferredBin;
        return $this;
    }

    /**
     * Get preferredBin
     *
     * @return boolean
     */
    public function getPreferredBin() {
        return $this->preferredBin;
    }

}