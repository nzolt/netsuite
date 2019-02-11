<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

use Nzolt\NetSuite\WebServices\Setup\Customization\Types\CustomizationFilterCompareType;

/**
 * ItemNumberCustomFieldFilter
 */
class ItemNumberCustomFieldFilter {

    /**
     * @access public
     * @var RecordRef
     */
    public $fldFilter;

    /**
     * @access public
     * @var boolean
     */
    protected $fldFilterChecked;

    /**
     * @access public
     * @var CustomizationFilterCompareType
     */
    protected $fldFilterCompareType;

    /**
     * @access public
     * @var string
     */
    protected $fldFilterVal;

    /**
     * @access public
     * @var boolean
     */
    protected $fldFilterNotNull;

    /**
     * @access public
     * @var boolean
     */
    protected $fldfilterNull;

    /**
     * @access public
     * @var RecordRef
     */
    public $fldCompareField;

    static $paramtypesmap = array(
    	"fldFilter" => "RecordRef",
    	"fldFilterChecked" => "boolean",
    	"fldFilterCompareType" => "CustomizationFilterCompareType",
    	"fldFilterVal" => "string",
    	"fldFilterNotNull" => "boolean",
    	"fldfilterNull" => "boolean",
    	"fldCompareField" => "RecordRef",
    );

    /**
     * Set fldFilterChecked
     *
     * @param boolean $fldFilterChecked
     * @return ItemNumberCustomFieldFilter
     */
    public function setFldFilterChecked($fldFilterChecked) {
        $this->fldFilterChecked = $fldFilterChecked;
        return $this;
    }

    /**
     * Get fldFilterChecked
     *
     * @return boolean
     */
    public function getFldFilterChecked() {
        return $this->fldFilterChecked;
    }


    /**
     * Set fldFilterCompareType
     *
     * @param CustomizationFilterCompareType $fldFilterCompareType
     * @return ItemNumberCustomFieldFilter
     */
    public function setFldFilterCompareType(CustomizationFilterCompareType $fldFilterCompareType) {
        $this->fldFilterCompareType = $fldFilterCompareType;
        return $this;
    }

    /**
     * Get fldFilterCompareType
     *
     * @return CustomizationFilterCompareType
     */
    public function getFldFilterCompareType() {
        return $this->fldFilterCompareType;
    }


    /**
     * Set fldFilterVal
     *
     * @param string $fldFilterVal
     * @return ItemNumberCustomFieldFilter
     */
    public function setFldFilterVal($fldFilterVal) {
        $this->fldFilterVal = $fldFilterVal;
        return $this;
    }

    /**
     * Get fldFilterVal
     *
     * @return string
     */
    public function getFldFilterVal() {
        return $this->fldFilterVal;
    }


    /**
     * Set fldFilterNotNull
     *
     * @param boolean $fldFilterNotNull
     * @return ItemNumberCustomFieldFilter
     */
    public function setFldFilterNotNull($fldFilterNotNull) {
        $this->fldFilterNotNull = $fldFilterNotNull;
        return $this;
    }

    /**
     * Get fldFilterNotNull
     *
     * @return boolean
     */
    public function getFldFilterNotNull() {
        return $this->fldFilterNotNull;
    }


    /**
     * Set fldfilterNull
     *
     * @param boolean $fldfilterNull
     * @return ItemNumberCustomFieldFilter
     */
    public function setFldfilterNull($fldfilterNull) {
        $this->fldfilterNull = $fldfilterNull;
        return $this;
    }

    /**
     * Get fldfilterNull
     *
     * @return boolean
     */
    public function getFldfilterNull() {
        return $this->fldfilterNull;
    }

}