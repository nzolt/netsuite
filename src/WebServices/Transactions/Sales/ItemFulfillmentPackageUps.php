<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales;

use Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentPackageUpsPackagingUps;
use Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentPackageUpsCodMethodUps;
use Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentPackageUpsDeliveryConfUps;

/**
 * ItemFulfillmentPackageUps
 */
class ItemFulfillmentPackageUps {

    /**
     * @access public
     * @var float
     */
    protected $packageWeightUps;

    /**
     * @access public
     * @var string
     */
    protected $packageDescrUps;

    /**
     * @access public
     * @var string
     */
    protected $packageTrackingNumberUps;

    /**
     * @access public
     * @var ItemFulfillmentPackageUpsPackagingUps
     */
    protected $packagingUps;

    /**
     * @access public
     * @var boolean
     */
    protected $useInsuredValueUps;

    /**
     * @access public
     * @var float
     */
    protected $insuredValueUps;

    /**
     * @access public
     * @var string
     */
    protected $reference1Ups;

    /**
     * @access public
     * @var string
     */
    protected $reference2Ups;

    /**
     * @access public
     * @var integer
     */
    protected $packageLengthUps;

    /**
     * @access public
     * @var integer
     */
    protected $packageWidthUps;

    /**
     * @access public
     * @var integer
     */
    protected $packageHeightUps;

    /**
     * @access public
     * @var boolean
     */
    protected $additionalHandlingUps;

    /**
     * @access public
     * @var boolean
     */
    protected $useCodUps;

    /**
     * @access public
     * @var float
     */
    protected $codAmountUps;

    /**
     * @access public
     * @var ItemFulfillmentPackageUpsCodMethodUps
     */
    protected $codMethodUps;

    /**
     * @access public
     * @var ItemFulfillmentPackageUpsDeliveryConfUps
     */
    protected $deliveryConfUps;

    static $paramtypesmap = array(
    	"packageWeightUps" => "float",
    	"packageDescrUps" => "string",
    	"packageTrackingNumberUps" => "string",
    	"packagingUps" => "ItemFulfillmentPackageUpsPackagingUps",
    	"useInsuredValueUps" => "boolean",
    	"insuredValueUps" => "float",
    	"reference1Ups" => "string",
    	"reference2Ups" => "string",
    	"packageLengthUps" => "integer",
    	"packageWidthUps" => "integer",
    	"packageHeightUps" => "integer",
    	"additionalHandlingUps" => "boolean",
    	"useCodUps" => "boolean",
    	"codAmountUps" => "float",
    	"codMethodUps" => "ItemFulfillmentPackageUpsCodMethodUps",
    	"deliveryConfUps" => "ItemFulfillmentPackageUpsDeliveryConfUps",
    );

    /**
     * Set packageWeightUps
     *
     * @param float $packageWeightUps
     * @return ItemFulfillmentPackageUps
     */
    public function setPackageWeightUps($packageWeightUps) {
        $this->packageWeightUps = $packageWeightUps;
        return $this;
    }

    /**
     * Get packageWeightUps
     *
     * @return float
     */
    public function getPackageWeightUps() {
        return $this->packageWeightUps;
    }


    /**
     * Set packageDescrUps
     *
     * @param string $packageDescrUps
     * @return ItemFulfillmentPackageUps
     */
    public function setPackageDescrUps($packageDescrUps) {
        $this->packageDescrUps = $packageDescrUps;
        return $this;
    }

    /**
     * Get packageDescrUps
     *
     * @return string
     */
    public function getPackageDescrUps() {
        return $this->packageDescrUps;
    }


    /**
     * Set packageTrackingNumberUps
     *
     * @param string $packageTrackingNumberUps
     * @return ItemFulfillmentPackageUps
     */
    public function setPackageTrackingNumberUps($packageTrackingNumberUps) {
        $this->packageTrackingNumberUps = $packageTrackingNumberUps;
        return $this;
    }

    /**
     * Get packageTrackingNumberUps
     *
     * @return string
     */
    public function getPackageTrackingNumberUps() {
        return $this->packageTrackingNumberUps;
    }


    /**
     * Set packagingUps
     *
     * @param ItemFulfillmentPackageUpsPackagingUps $packagingUps
     * @return ItemFulfillmentPackageUps
     */
    public function setPackagingUps(ItemFulfillmentPackageUpsPackagingUps $packagingUps) {
        $this->packagingUps = $packagingUps;
        return $this;
    }

    /**
     * Get packagingUps
     *
     * @return ItemFulfillmentPackageUpsPackagingUps
     */
    public function getPackagingUps() {
        return $this->packagingUps;
    }


    /**
     * Set useInsuredValueUps
     *
     * @param boolean $useInsuredValueUps
     * @return ItemFulfillmentPackageUps
     */
    public function setUseInsuredValueUps($useInsuredValueUps) {
        $this->useInsuredValueUps = $useInsuredValueUps;
        return $this;
    }

    /**
     * Get useInsuredValueUps
     *
     * @return boolean
     */
    public function getUseInsuredValueUps() {
        return $this->useInsuredValueUps;
    }


    /**
     * Set insuredValueUps
     *
     * @param float $insuredValueUps
     * @return ItemFulfillmentPackageUps
     */
    public function setInsuredValueUps($insuredValueUps) {
        $this->insuredValueUps = $insuredValueUps;
        return $this;
    }

    /**
     * Get insuredValueUps
     *
     * @return float
     */
    public function getInsuredValueUps() {
        return $this->insuredValueUps;
    }


    /**
     * Set reference1Ups
     *
     * @param string $reference1Ups
     * @return ItemFulfillmentPackageUps
     */
    public function setReference1Ups($reference1Ups) {
        $this->reference1Ups = $reference1Ups;
        return $this;
    }

    /**
     * Get reference1Ups
     *
     * @return string
     */
    public function getReference1Ups() {
        return $this->reference1Ups;
    }


    /**
     * Set reference2Ups
     *
     * @param string $reference2Ups
     * @return ItemFulfillmentPackageUps
     */
    public function setReference2Ups($reference2Ups) {
        $this->reference2Ups = $reference2Ups;
        return $this;
    }

    /**
     * Get reference2Ups
     *
     * @return string
     */
    public function getReference2Ups() {
        return $this->reference2Ups;
    }


    /**
     * Set packageLengthUps
     *
     * @param integer $packageLengthUps
     * @return ItemFulfillmentPackageUps
     */
    public function setPackageLengthUps($packageLengthUps) {
        $this->packageLengthUps = $packageLengthUps;
        return $this;
    }

    /**
     * Get packageLengthUps
     *
     * @return integer
     */
    public function getPackageLengthUps() {
        return $this->packageLengthUps;
    }


    /**
     * Set packageWidthUps
     *
     * @param integer $packageWidthUps
     * @return ItemFulfillmentPackageUps
     */
    public function setPackageWidthUps($packageWidthUps) {
        $this->packageWidthUps = $packageWidthUps;
        return $this;
    }

    /**
     * Get packageWidthUps
     *
     * @return integer
     */
    public function getPackageWidthUps() {
        return $this->packageWidthUps;
    }


    /**
     * Set packageHeightUps
     *
     * @param integer $packageHeightUps
     * @return ItemFulfillmentPackageUps
     */
    public function setPackageHeightUps($packageHeightUps) {
        $this->packageHeightUps = $packageHeightUps;
        return $this;
    }

    /**
     * Get packageHeightUps
     *
     * @return integer
     */
    public function getPackageHeightUps() {
        return $this->packageHeightUps;
    }


    /**
     * Set additionalHandlingUps
     *
     * @param boolean $additionalHandlingUps
     * @return ItemFulfillmentPackageUps
     */
    public function setAdditionalHandlingUps($additionalHandlingUps) {
        $this->additionalHandlingUps = $additionalHandlingUps;
        return $this;
    }

    /**
     * Get additionalHandlingUps
     *
     * @return boolean
     */
    public function getAdditionalHandlingUps() {
        return $this->additionalHandlingUps;
    }


    /**
     * Set useCodUps
     *
     * @param boolean $useCodUps
     * @return ItemFulfillmentPackageUps
     */
    public function setUseCodUps($useCodUps) {
        $this->useCodUps = $useCodUps;
        return $this;
    }

    /**
     * Get useCodUps
     *
     * @return boolean
     */
    public function getUseCodUps() {
        return $this->useCodUps;
    }


    /**
     * Set codAmountUps
     *
     * @param float $codAmountUps
     * @return ItemFulfillmentPackageUps
     */
    public function setCodAmountUps($codAmountUps) {
        $this->codAmountUps = $codAmountUps;
        return $this;
    }

    /**
     * Get codAmountUps
     *
     * @return float
     */
    public function getCodAmountUps() {
        return $this->codAmountUps;
    }


    /**
     * Set codMethodUps
     *
     * @param ItemFulfillmentPackageUpsCodMethodUps $codMethodUps
     * @return ItemFulfillmentPackageUps
     */
    public function setCodMethodUps(ItemFulfillmentPackageUpsCodMethodUps $codMethodUps) {
        $this->codMethodUps = $codMethodUps;
        return $this;
    }

    /**
     * Get codMethodUps
     *
     * @return ItemFulfillmentPackageUpsCodMethodUps
     */
    public function getCodMethodUps() {
        return $this->codMethodUps;
    }


    /**
     * Set deliveryConfUps
     *
     * @param ItemFulfillmentPackageUpsDeliveryConfUps $deliveryConfUps
     * @return ItemFulfillmentPackageUps
     */
    public function setDeliveryConfUps(ItemFulfillmentPackageUpsDeliveryConfUps $deliveryConfUps) {
        $this->deliveryConfUps = $deliveryConfUps;
        return $this;
    }

    /**
     * Get deliveryConfUps
     *
     * @return ItemFulfillmentPackageUpsDeliveryConfUps
     */
    public function getDeliveryConfUps() {
        return $this->deliveryConfUps;
    }

}