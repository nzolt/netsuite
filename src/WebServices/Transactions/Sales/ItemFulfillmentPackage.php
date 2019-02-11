<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales;

/**
 * ItemFulfillmentPackage
 */
class ItemFulfillmentPackage {

    /**
     * @access public
     * @var float
     */
    protected $packageWeight;

    /**
     * @access public
     * @var string
     */
    protected $packageDescr;

    /**
     * @access public
     * @var string
     */
    protected $packageTrackingNumber;

    static $paramtypesmap = array(
    	"packageWeight" => "float",
    	"packageDescr" => "string",
    	"packageTrackingNumber" => "string",
    );

    /**
     * Set packageWeight
     *
     * @param float $packageWeight
     * @return ItemFulfillmentPackage
     */
    public function setPackageWeight($packageWeight) {
        $this->packageWeight = $packageWeight;
        return $this;
    }

    /**
     * Get packageWeight
     *
     * @return float
     */
    public function getPackageWeight() {
        return $this->packageWeight;
    }


    /**
     * Set packageDescr
     *
     * @param string $packageDescr
     * @return ItemFulfillmentPackage
     */
    public function setPackageDescr($packageDescr) {
        $this->packageDescr = $packageDescr;
        return $this;
    }

    /**
     * Get packageDescr
     *
     * @return string
     */
    public function getPackageDescr() {
        return $this->packageDescr;
    }


    /**
     * Set packageTrackingNumber
     *
     * @param string $packageTrackingNumber
     * @return ItemFulfillmentPackage
     */
    public function setPackageTrackingNumber($packageTrackingNumber) {
        $this->packageTrackingNumber = $packageTrackingNumber;
        return $this;
    }

    /**
     * Get packageTrackingNumber
     *
     * @return string
     */
    public function getPackageTrackingNumber() {
        return $this->packageTrackingNumber;
    }

}