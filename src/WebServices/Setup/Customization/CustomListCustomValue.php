<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

/**
 * CustomListCustomValue
 */
class CustomListCustomValue {

    /**
     * @access public
     * @var string
     */
    protected $value;

    /**
     * @access public
     * @var string
     */
    protected $abbreviation;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var integer
     */
    protected $valueId;

    /**
     * @access public
     * @var LanguageValueList
     */
    protected $valueLanguageValueList;

    static $paramtypesmap = array(
    	"value" => "string",
    	"abbreviation" => "string",
    	"isInactive" => "boolean",
    	"valueId" => "integer",
    	"valueLanguageValueList" => "LanguageValueList",
    );

    /**
     * Set value
     *
     * @param string $value
     * @return CustomListCustomValue
     */
    public function setValue($value) {
        $this->value = $value;
        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue() {
        return $this->value;
    }


    /**
     * Set abbreviation
     *
     * @param string $abbreviation
     * @return CustomListCustomValue
     */
    public function setAbbreviation($abbreviation) {
        $this->abbreviation = $abbreviation;
        return $this;
    }

    /**
     * Get abbreviation
     *
     * @return string
     */
    public function getAbbreviation() {
        return $this->abbreviation;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return CustomListCustomValue
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
     * Set valueId
     *
     * @param integer $valueId
     * @return CustomListCustomValue
     */
    public function setValueId($valueId) {
        $this->valueId = $valueId;
        return $this;
    }

    /**
     * Get valueId
     *
     * @return integer
     */
    public function getValueId() {
        return $this->valueId;
    }


    /**
     * Set valueLanguageValueList
     *
     * @param LanguageValueList $valueLanguageValueList
     * @return CustomListCustomValue
     */
    public function setValueLanguageValueList(LanguageValueList $valueLanguageValueList) {
        $this->valueLanguageValueList = $valueLanguageValueList;
        return $this;
    }

    /**
     * Get valueLanguageValueList
     *
     * @return LanguageValueList
     */
    public function getValueLanguageValueList() {
        return $this->valueLanguageValueList;
    }

}