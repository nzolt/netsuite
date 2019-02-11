<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales;

use Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentPackageUspsPackagingUsps;
use Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentPackageUspsDeliveryConfUsps;

/**
 * ItemFulfillmentPackageUsps
 */
class ItemFulfillmentPackageUsps {

    /**
     * @access public
     * @var float
     */
    protected $packageWeightUsps;

    /**
     * @access public
     * @var string
     */
    protected $packageDescrUsps;

    /**
     * @access public
     * @var string
     */
    protected $packageTrackingNumberUsps;

    /**
     * @access public
     * @var ItemFulfillmentPackageUspsPackagingUsps
     */
    protected $packagingUsps;

    /**
     * @access public
     * @var boolean
     */
    protected $useInsuredValueUsps;

    /**
     * @access public
     * @var float
     */
    protected $insuredValueUsps;

    /**
     * @access public
     * @var string
     */
    protected $reference1Usps;

    /**
     * @access public
     * @var string
     */
    protected $reference2Usps;

    /**
     * @access public
     * @var integer
     */
    protected $packageLengthUsps;

    /**
     * @access public
     * @var integer
     */
    protected $packageWidthUsps;

    /**
     * @access public
     * @var integer
     */
    protected $packageHeightUsps;

    /**
     * @access public
     * @var ItemFulfillmentPackageUspsDeliveryConfUsps
     */
    protected $deliveryConfUsps;

    static $paramtypesmap = array(
    	"packageWeightUsps" => "float",
    	"packageDescrUsps" => "string",
    	"packageTrackingNumberUsps" => "string",
    	"packagingUsps" => "ItemFulfillmentPackageUspsPackagingUsps",
    	"useInsuredValueUsps" => "boolean",
    	"insuredValueUsps" => "float",
    	"reference1Usps" => "string",
    	"reference2Usps" => "string",
    	"packageLengthUsps" => "integer",
    	"packageWidthUsps" => "integer",
    	"packageHeightUsps" => "integer",
    	"deliveryConfUsps" => "ItemFulfillmentPackageUspsDeliveryConfUsps",
    );

    /**
     * Set packageWeightUsps
     *
     * @param float $packageWeightUsps
     * @return ItemFulfillmentPackageUsps
     */
    public function setPackageWeightUsps($packageWeightUsps) {
        $this->packageWeightUsps = $packageWeightUsps;
        return $this;
    }

    /**
     * Get packageWeightUsps
     *
     * @return float
     */
    public function getPackageWeightUsps() {
        return $this->packageWeightUsps;
    }


    /**
     * Set packageDescrUsps
     *
     * @param string $packageDescrUsps
     * @return ItemFulfillmentPackageUsps
     */
    public function setPackageDescrUsps($packageDescrUsps) {
        $this->packageDescrUsps = $packageDescrUsps;
        return $this;
    }

    /**
     * Get packageDescrUsps
     *
     * @return string
     */
    public function getPackageDescrUsps() {
        return $this->packageDescrUsps;
    }


    /**
     * Set packageTrackingNumberUsps
     *
     * @param string $packageTrackingNumberUsps
     * @return ItemFulfillmentPackageUsps
     */
    public function setPackageTrackingNumberUsps($packageTrackingNumberUsps) {
        $this->packageTrackingNumberUsps = $packageTrackingNumberUsps;
        return $this;
    }

    /**
     * Get packageTrackingNumberUsps
     *
     * @return string
     */
    public function getPackageTrackingNumberUsps() {
        return $this->packageTrackingNumberUsps;
    }


    /**
     * Set packagingUsps
     *
     * @param ItemFulfillmentPackageUspsPackagingUsps $packagingUsps
     * @return ItemFulfillmentPackageUsps
     */
    public function setPackagingUsps(ItemFulfillmentPackageUspsPackagingUsps $packagingUsps) {
        $this->packagingUsps = $packagingUsps;
        return $this;
    }

    /**
     * Get packagingUsps
     *
     * @return ItemFulfillmentPackageUspsPackagingUsps
     */
    public function getPackagingUsps() {
        return $this->packagingUsps;
    }


    /**
     * Set useInsuredValueUsps
     *
     * @param boolean $useInsuredValueUsps
     * @return ItemFulfillmentPackageUsps
     */
    public function setUseInsuredValueUsps($useInsuredValueUsps) {
        $this->useInsuredValueUsps = $useInsuredValueUsps;
        return $this;
    }

    /**
     * Get useInsuredValueUsps
     *
     * @return boolean
     */
    public function getUseInsuredValueUsps() {
        return $this->useInsuredValueUsps;
    }


    /**
     * Set insuredValueUsps
     *
     * @param float $insuredValueUsps
     * @return ItemFulfillmentPackageUsps
     */
    public function setInsuredValueUsps($insuredValueUsps) {
        $this->insuredValueUsps = $insuredValueUsps;
        return $this;
    }

    /**
     * Get insuredValueUsps
     *
     * @return float
     */
    public function getInsuredValueUsps() {
        return $this->insuredValueUsps;
    }


    /**
     * Set reference1Usps
     *
     * @param string $reference1Usps
     * @return ItemFulfillmentPackageUsps
     */
    public function setReference1Usps($reference1Usps) {
        $this->reference1Usps = $reference1Usps;
        return $this;
    }

    /**
     * Get reference1Usps
     *
     * @return string
     */
    public function getReference1Usps() {
        return $this->reference1Usps;
    }


    /**
     * Set reference2Usps
     *
     * @param string $reference2Usps
     * @return ItemFulfillmentPackageUsps
     */
    public function setReference2Usps($reference2Usps) {
        $this->reference2Usps = $reference2Usps;
        return $this;
    }

    /**
     * Get reference2Usps
     *
     * @return string
     */
    public function getReference2Usps() {
        return $this->reference2Usps;
    }


    /**
     * Set packageLengthUsps
     *
     * @param integer $packageLengthUsps
     * @return ItemFulfillmentPackageUsps
     */
    public function setPackageLengthUsps($packageLengthUsps) {
        $this->packageLengthUsps = $packageLengthUsps;
        return $this;
    }

    /**
     * Get packageLengthUsps
     *
     * @return integer
     */
    public function getPackageLengthUsps() {
        return $this->packageLengthUsps;
    }


    /**
     * Set packageWidthUsps
     *
     * @param integer $packageWidthUsps
     * @return ItemFulfillmentPackageUsps
     */
    public function setPackageWidthUsps($packageWidthUsps) {
        $this->packageWidthUsps = $packageWidthUsps;
        return $this;
    }

    /**
     * Get packageWidthUsps
     *
     * @return integer
     */
    public function getPackageWidthUsps() {
        return $this->packageWidthUsps;
    }


    /**
     * Set packageHeightUsps
     *
     * @param integer $packageHeightUsps
     * @return ItemFulfillmentPackageUsps
     */
    public function setPackageHeightUsps($packageHeightUsps) {
        $this->packageHeightUsps = $packageHeightUsps;
        return $this;
    }

    /**
     * Get packageHeightUsps
     *
     * @return integer
     */
    public function getPackageHeightUsps() {
        return $this->packageHeightUsps;
    }


    /**
     * Set deliveryConfUsps
     *
     * @param ItemFulfillmentPackageUspsDeliveryConfUsps $deliveryConfUsps
     * @return ItemFulfillmentPackageUsps
     */
    public function setDeliveryConfUsps(ItemFulfillmentPackageUspsDeliveryConfUsps $deliveryConfUsps) {
        $this->deliveryConfUsps = $deliveryConfUsps;
        return $this;
    }

    /**
     * Get deliveryConfUsps
     *
     * @return ItemFulfillmentPackageUspsDeliveryConfUsps
     */
    public function getDeliveryConfUsps() {
        return $this->deliveryConfUsps;
    }

}