<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\SalesTaxItemAvailable;

/**
 * SalesTaxItem
 */
class SalesTaxItem extends Record {

    /**
     * @access public
     * @var string
     */
    protected $itemId;

    /**
     * @access public
     * @var string
     */
    protected $displayName;

    /**
     * @access public
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var string
     */
    protected $rate;

    /**
     * @access public
     * @var RecordRef
     */
    public $taxType;

    /**
     * @access public
     * @var RecordRef
     */
    public $taxAgency;

    /**
     * @access public
     * @var RecordRef
     */
    public $purchaseAccount;

    /**
     * @access public
     * @var RecordRef
     */
    public $saleAccount;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var dateTime
     */
    protected $effectiveFrom;

    /**
     * @access public
     * @var dateTime
     */
    protected $validUntil;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $subsidiaryList;

    /**
     * @access public
     * @var boolean
     */
    protected $includeChildren;

    /**
     * @access public
     * @var boolean
     */
    protected $eccode;

    /**
     * @access public
     * @var boolean
     */
    protected $reverseCharge;

    /**
     * @access public
     * @var RecordRef
     */
    public $parent;

    /**
     * @access public
     * @var boolean
     */
    protected $service;

    /**
     * @access public
     * @var boolean
     */
    protected $exempt;

    /**
     * @access public
     * @var boolean
     */
    protected $isDefault;

    /**
     * @access public
     * @var boolean
     */
    protected $excludeFromTaxReports;

    /**
     * @access public
     * @var SalesTaxItemAvailable
     */
    protected $available;

    /**
     * @access public
     * @var boolean
     */
    protected $export;

    /**
     * @access public
     * @var RecordRef
     */
    public $taxAccount;

    /**
     * @access public
     * @var string
     */
    protected $county;

    /**
     * @access public
     * @var string
     */
    protected $city;

    /**
     * @access public
     * @var string
     */
    protected $state;

    /**
     * @access public
     * @var string
     */
    protected $zip;

    /**
     * @access public
     * @var RecordRef
     */
    public $nexusCountry;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    /**
     * @access public
     * @var string
     */
    protected $externalId;

    static $paramtypesmap = array(
    	"itemId" => "string",
    	"displayName" => "string",
    	"description" => "string",
    	"rate" => "string",
    	"taxType" => "RecordRef",
    	"taxAgency" => "RecordRef",
    	"purchaseAccount" => "RecordRef",
    	"saleAccount" => "RecordRef",
    	"isInactive" => "boolean",
    	"effectiveFrom" => "dateTime",
    	"validUntil" => "dateTime",
    	"subsidiaryList" => "RecordRefList",
    	"includeChildren" => "boolean",
    	"eccode" => "boolean",
    	"reverseCharge" => "boolean",
    	"parent" => "RecordRef",
    	"service" => "boolean",
    	"exempt" => "boolean",
    	"isDefault" => "boolean",
    	"excludeFromTaxReports" => "boolean",
    	"available" => "SalesTaxItemAvailable",
    	"export" => "boolean",
    	"taxAccount" => "RecordRef",
    	"county" => "string",
    	"city" => "string",
    	"state" => "string",
    	"zip" => "string",
    	"nexusCountry" => "RecordRef",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set itemId
     *
     * @param string $itemId
     * @return SalesTaxItem
     */
    public function setItemId($itemId) {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * Get itemId
     *
     * @return string
     */
    public function getItemId() {
        return $this->itemId;
    }


    /**
     * Set displayName
     *
     * @param string $displayName
     * @return SalesTaxItem
     */
    public function setDisplayName($displayName) {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * Get displayName
     *
     * @return string
     */
    public function getDisplayName() {
        return $this->displayName;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return SalesTaxItem
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }


    /**
     * Set rate
     *
     * @param string $rate
     * @return SalesTaxItem
     */
    public function setRate($rate) {
        $this->rate = $rate;
        return $this;
    }

    /**
     * Get rate
     *
     * @return string
     */
    public function getRate() {
        return $this->rate;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return SalesTaxItem
     */
    public function setIsInactive($isInactive) {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Get isInactive
     *
     * @return boolean
     */
    public function getIsInactive() {
        return $this->isInactive;
    }


    /**
     * Set effectiveFrom
     *
     * @param \DateTime $effectiveFrom
     * @return SalesTaxItem
     */
    public function setEffectiveFrom(\DateTime $effectiveFrom) {
        $this->effectiveFrom = $effectiveFrom->format('c');
        return $this;
    }

    /**
     * Get effectiveFrom
     *
     * @return \DateTime
     */
    public function getEffectiveFrom() {
        return new \DateTime($this->effectiveFrom);
    }


    /**
     * Set validUntil
     *
     * @param \DateTime $validUntil
     * @return SalesTaxItem
     */
    public function setValidUntil(\DateTime $validUntil) {
        $this->validUntil = $validUntil->format('c');
        return $this;
    }

    /**
     * Get validUntil
     *
     * @return \DateTime
     */
    public function getValidUntil() {
        return new \DateTime($this->validUntil);
    }


    /**
     * Set subsidiaryList
     *
     * @param RecordRefList $subsidiaryList
     * @return SalesTaxItem
     */
    public function setSubsidiaryList(RecordRefList $subsidiaryList) {
        $this->subsidiaryList = $subsidiaryList;
        return $this;
    }

    /**
     * Get subsidiaryList
     *
     * @return RecordRefList
     */
    public function getSubsidiaryList() {
        return $this->subsidiaryList;
    }


    /**
     * Set includeChildren
     *
     * @param boolean $includeChildren
     * @return SalesTaxItem
     */
    public function setIncludeChildren($includeChildren) {
        $this->includeChildren = $includeChildren;
        return $this;
    }

    /**
     * Get includeChildren
     *
     * @return boolean
     */
    public function getIncludeChildren() {
        return $this->includeChildren;
    }


    /**
     * Set eccode
     *
     * @param boolean $eccode
     * @return SalesTaxItem
     */
    public function setEccode($eccode) {
        $this->eccode = $eccode;
        return $this;
    }

    /**
     * Get eccode
     *
     * @return boolean
     */
    public function getEccode() {
        return $this->eccode;
    }


    /**
     * Set reverseCharge
     *
     * @param boolean $reverseCharge
     * @return SalesTaxItem
     */
    public function setReverseCharge($reverseCharge) {
        $this->reverseCharge = $reverseCharge;
        return $this;
    }

    /**
     * Get reverseCharge
     *
     * @return boolean
     */
    public function getReverseCharge() {
        return $this->reverseCharge;
    }


    /**
     * Set service
     *
     * @param boolean $service
     * @return SalesTaxItem
     */
    public function setService($service) {
        $this->service = $service;
        return $this;
    }

    /**
     * Get service
     *
     * @return boolean
     */
    public function getService() {
        return $this->service;
    }


    /**
     * Set exempt
     *
     * @param boolean $exempt
     * @return SalesTaxItem
     */
    public function setExempt($exempt) {
        $this->exempt = $exempt;
        return $this;
    }

    /**
     * Get exempt
     *
     * @return boolean
     */
    public function getExempt() {
        return $this->exempt;
    }


    /**
     * Set isDefault
     *
     * @param boolean $isDefault
     * @return SalesTaxItem
     */
    public function setIsDefault($isDefault) {
        $this->isDefault = $isDefault;
        return $this;
    }

    /**
     * Get isDefault
     *
     * @return boolean
     */
    public function getIsDefault() {
        return $this->isDefault;
    }


    /**
     * Set excludeFromTaxReports
     *
     * @param boolean $excludeFromTaxReports
     * @return SalesTaxItem
     */
    public function setExcludeFromTaxReports($excludeFromTaxReports) {
        $this->excludeFromTaxReports = $excludeFromTaxReports;
        return $this;
    }

    /**
     * Get excludeFromTaxReports
     *
     * @return boolean
     */
    public function getExcludeFromTaxReports() {
        return $this->excludeFromTaxReports;
    }


    /**
     * Set available
     *
     * @param SalesTaxItemAvailable $available
     * @return SalesTaxItem
     */
    public function setAvailable(SalesTaxItemAvailable $available) {
        $this->available = $available;
        return $this;
    }

    /**
     * Get available
     *
     * @return SalesTaxItemAvailable
     */
    public function getAvailable() {
        return $this->available;
    }


    /**
     * Set export
     *
     * @param boolean $export
     * @return SalesTaxItem
     */
    public function setExport($export) {
        $this->export = $export;
        return $this;
    }

    /**
     * Get export
     *
     * @return boolean
     */
    public function getExport() {
        return $this->export;
    }


    /**
     * Set county
     *
     * @param string $county
     * @return SalesTaxItem
     */
    public function setCounty($county) {
        $this->county = $county;
        return $this;
    }

    /**
     * Get county
     *
     * @return string
     */
    public function getCounty() {
        return $this->county;
    }


    /**
     * Set city
     *
     * @param string $city
     * @return SalesTaxItem
     */
    public function setCity($city) {
        $this->city = $city;
        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity() {
        return $this->city;
    }


    /**
     * Set state
     *
     * @param string $state
     * @return SalesTaxItem
     */
    public function setState($state) {
        $this->state = $state;
        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState() {
        return $this->state;
    }


    /**
     * Set zip
     *
     * @param string $zip
     * @return SalesTaxItem
     */
    public function setZip($zip) {
        $this->zip = $zip;
        return $this;
    }

    /**
     * Get zip
     *
     * @return string
     */
    public function getZip() {
        return $this->zip;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return SalesTaxItem
     */
    public function setInternalId($internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return string
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set externalId
     *
     * @param string $externalId
     * @return SalesTaxItem
     */
    public function setExternalId($externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return string
     */
    public function getExternalId() {
        return $this->externalId;
    }

}