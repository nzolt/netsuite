<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * ItemVendor
 */
class ItemVendor {

    /**
     * @access public
     * @var RecordRef
     */
    public $vendor;

    /**
     * @access public
     * @var string
     */
    protected $vendorCode;

    /**
     * @access public
     * @var string
     */
    protected $vendorCurrencyName;

    /**
     * @access public
     * @var RecordRef
     */
    public $vendorCurrency;

    /**
     * @access public
     * @var float
     */
    protected $purchasePrice;

    /**
     * @access public
     * @var boolean
     */
    protected $preferredVendor;

    /**
     * @access public
     * @var RecordRef
     */
    public $schedule;

    /**
     * @access public
     * @var string
     */
    protected $subsidiary;

    static $paramtypesmap = array(
    	"vendor" => "RecordRef",
    	"vendorCode" => "string",
    	"vendorCurrencyName" => "string",
    	"vendorCurrency" => "RecordRef",
    	"purchasePrice" => "float",
    	"preferredVendor" => "boolean",
    	"schedule" => "RecordRef",
    	"subsidiary" => "string",
    );

    /**
     * Set vendorCode
     *
     * @param string $vendorCode
     * @return ItemVendor
     */
    public function setVendorCode($vendorCode) {
        $this->vendorCode = $vendorCode;
        return $this;
    }

    /**
     * Get vendorCode
     *
     * @return string
     */
    public function getVendorCode() {
        return $this->vendorCode;
    }


    /**
     * Set vendorCurrencyName
     *
     * @param string $vendorCurrencyName
     * @return ItemVendor
     */
    public function setVendorCurrencyName($vendorCurrencyName) {
        $this->vendorCurrencyName = $vendorCurrencyName;
        return $this;
    }

    /**
     * Get vendorCurrencyName
     *
     * @return string
     */
    public function getVendorCurrencyName() {
        return $this->vendorCurrencyName;
    }


    /**
     * Set purchasePrice
     *
     * @param float $purchasePrice
     * @return ItemVendor
     */
    public function setPurchasePrice($purchasePrice) {
        $this->purchasePrice = $purchasePrice;
        return $this;
    }

    /**
     * Get purchasePrice
     *
     * @return float
     */
    public function getPurchasePrice() {
        return $this->purchasePrice;
    }


    /**
     * Set preferredVendor
     *
     * @param boolean $preferredVendor
     * @return ItemVendor
     */
    public function setPreferredVendor($preferredVendor) {
        $this->preferredVendor = $preferredVendor;
        return $this;
    }

    /**
     * Get preferredVendor
     *
     * @return boolean
     */
    public function getPreferredVendor() {
        return $this->preferredVendor;
    }


    /**
     * Set subsidiary
     *
     * @param string $subsidiary
     * @return ItemVendor
     */
    public function setSubsidiary($subsidiary) {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * Get subsidiary
     *
     * @return string
     */
    public function getSubsidiary() {
        return $this->subsidiary;
    }

}