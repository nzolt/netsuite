<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

use Nzolt\NetSuite\WebServices\Setup\Customization\Types\CustomizationFilterCompareType;

/**
 * OtherCustomFieldFilter
 */
class OtherCustomFieldFilter {

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
     * @var FldFilterSelList
     */
    protected $fldFilterSelList;

    /**
     * @access public
     * @var boolean
     */
    protected $fldFilterNotNull;

    static $paramtypesmap = array(
    	"fldFilter" => "RecordRef",
    	"fldFilterChecked" => "boolean",
    	"fldFilterCompareType" => "CustomizationFilterCompareType",
    	"fldFilterVal" => "string",
    	"fldFilterSelList" => "FldFilterSelList",
    	"fldFilterNotNull" => "boolean",
    );

    /**
     * Set fldFilterChecked
     *
     * @param boolean $fldFilterChecked
     * @return OtherCustomFieldFilter
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
     * @return OtherCustomFieldFilter
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
     * @return OtherCustomFieldFilter
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
     * Set fldFilterSelList
     *
     * @param FldFilterSelList $fldFilterSelList
     * @return OtherCustomFieldFilter
     */
    public function setFldFilterSelList(FldFilterSelList $fldFilterSelList) {
        $this->fldFilterSelList = $fldFilterSelList;
        return $this;
    }

    /**
     * Get fldFilterSelList
     *
     * @return FldFilterSelList
     */
    public function getFldFilterSelList() {
        return $this->fldFilterSelList;
    }


    /**
     * Set fldFilterNotNull
     *
     * @param boolean $fldFilterNotNull
     * @return OtherCustomFieldFilter
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

}