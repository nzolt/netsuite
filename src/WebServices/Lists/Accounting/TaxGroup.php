<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;

/**
 * TaxGroup
 */
class TaxGroup extends Record {

    /**
     * @access public
     * @var string
     */
    protected $itemId;

    /**
     * @access public
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var string
     */
    protected $state;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $subsidiaryList;

    /**
     * @access public
     * @var RecordRef
     */
    public $taxitem1;

    /**
     * @access public
     * @var string
     */
    protected $unitprice1;

    /**
     * @access public
     * @var RecordRef
     */
    public $taxitem2;

    /**
     * @access public
     * @var string
     */
    protected $unitprice2;

    /**
     * @access public
     * @var boolean
     */
    protected $piggyback;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var float
     */
    protected $rate;

    /**
     * @access public
     * @var RecordRef
     */
    public $taxType;

    /**
     * @access public
     * @var boolean
     */
    protected $includeChildren;

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
    protected $zip;

    /**
     * @access public
     * @var RecordRef
     */
    public $nexusCountry;

    /**
     * @access public
     * @var boolean
     */
    protected $isDefault;

    /**
     * @access public
     * @var TaxGroupTaxItemList
     */
    protected $taxItemList;

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
    	"description" => "string",
    	"state" => "string",
    	"subsidiaryList" => "RecordRefList",
    	"taxitem1" => "RecordRef",
    	"unitprice1" => "string",
    	"taxitem2" => "RecordRef",
    	"unitprice2" => "string",
    	"piggyback" => "boolean",
    	"isInactive" => "boolean",
    	"rate" => "float",
    	"taxType" => "RecordRef",
    	"includeChildren" => "boolean",
    	"county" => "string",
    	"city" => "string",
    	"zip" => "string",
    	"nexusCountry" => "RecordRef",
    	"isDefault" => "boolean",
    	"taxItemList" => "TaxGroupTaxItemList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set itemId
     *
     * @param string $itemId
     * @return TaxGroup
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
     * Set description
     *
     * @param string $description
     * @return TaxGroup
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
     * Set state
     *
     * @param string $state
     * @return TaxGroup
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
     * Set subsidiaryList
     *
     * @param RecordRefList $subsidiaryList
     * @return TaxGroup
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
     * Set unitprice1
     *
     * @param string $unitprice1
     * @return TaxGroup
     */
    public function setUnitprice1($unitprice1) {
        $this->unitprice1 = $unitprice1;
        return $this;
    }

    /**
     * Get unitprice1
     *
     * @return string
     */
    public function getUnitprice1() {
        return $this->unitprice1;
    }


    /**
     * Set unitprice2
     *
     * @param string $unitprice2
     * @return TaxGroup
     */
    public function setUnitprice2($unitprice2) {
        $this->unitprice2 = $unitprice2;
        return $this;
    }

    /**
     * Get unitprice2
     *
     * @return string
     */
    public function getUnitprice2() {
        return $this->unitprice2;
    }


    /**
     * Set piggyback
     *
     * @param boolean $piggyback
     * @return TaxGroup
     */
    public function setPiggyback($piggyback) {
        $this->piggyback = $piggyback;
        return $this;
    }

    /**
     * Get piggyback
     *
     * @return boolean
     */
    public function getPiggyback() {
        return $this->piggyback;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return TaxGroup
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
     * Set rate
     *
     * @param float $rate
     * @return TaxGroup
     */
    public function setRate($rate) {
        $this->rate = $rate;
        return $this;
    }

    /**
     * Get rate
     *
     * @return float
     */
    public function getRate() {
        return $this->rate;
    }


    /**
     * Set includeChildren
     *
     * @param boolean $includeChildren
     * @return TaxGroup
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
     * Set county
     *
     * @param string $county
     * @return TaxGroup
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
     * @return TaxGroup
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
     * Set zip
     *
     * @param string $zip
     * @return TaxGroup
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
     * Set isDefault
     *
     * @param boolean $isDefault
     * @return TaxGroup
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
     * Set taxItemList
     *
     * @param TaxGroupTaxItemList $taxItemList
     * @return TaxGroup
     */
    public function setTaxItemList(TaxGroupTaxItemList $taxItemList) {
        $this->taxItemList = $taxItemList;
        return $this;
    }

    /**
     * Get taxItemList
     *
     * @return TaxGroupTaxItemList
     */
    public function getTaxItemList() {
        return $this->taxItemList;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return TaxGroup
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
     * @return TaxGroup
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