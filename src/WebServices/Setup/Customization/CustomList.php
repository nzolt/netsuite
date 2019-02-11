<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;

/**
 * CustomList
 */
class CustomList extends Record {

    /**
     * @access public
     * @var string
     */
    protected $name;

    /**
     * @access public
     * @var RecordRef
     */
    public $owner;

    /**
     * @access public
     * @var boolean
     */
    protected $isOrdered;

    /**
     * @access public
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var boolean
     */
    protected $isMatrixOption;

    /**
     * @access public
     * @var string
     */
    protected $scriptId;

    /**
     * @access public
     * @var boolean
     */
    protected $convertToCustomRecord;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var CustomListCustomValueList
     */
    protected $customValueList;

    /**
     * @access public
     * @var CustomListTranslationsList
     */
    protected $translationsList;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    static $paramtypesmap = array(
    	"name" => "string",
    	"owner" => "RecordRef",
    	"isOrdered" => "boolean",
    	"description" => "string",
    	"isMatrixOption" => "boolean",
    	"scriptId" => "string",
    	"convertToCustomRecord" => "boolean",
    	"isInactive" => "boolean",
    	"customValueList" => "CustomListCustomValueList",
    	"translationsList" => "CustomListTranslationsList",
    	"internalId" => "string",
    );

    /**
     * Set name
     *
     * @param string $name
     * @return CustomList
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }


    /**
     * Set isOrdered
     *
     * @param boolean $isOrdered
     * @return CustomList
     */
    public function setIsOrdered($isOrdered) {
        $this->isOrdered = $isOrdered;
        return $this;
    }

    /**
     * Get isOrdered
     *
     * @return boolean
     */
    public function getIsOrdered() {
        return $this->isOrdered;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return CustomList
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
     * Set isMatrixOption
     *
     * @param boolean $isMatrixOption
     * @return CustomList
     */
    public function setIsMatrixOption($isMatrixOption) {
        $this->isMatrixOption = $isMatrixOption;
        return $this;
    }

    /**
     * Get isMatrixOption
     *
     * @return boolean
     */
    public function getIsMatrixOption() {
        return $this->isMatrixOption;
    }


    /**
     * Set scriptId
     *
     * @param string $scriptId
     * @return CustomList
     */
    public function setScriptId($scriptId) {
        $this->scriptId = $scriptId;
        return $this;
    }

    /**
     * Get scriptId
     *
     * @return string
     */
    public function getScriptId() {
        return $this->scriptId;
    }


    /**
     * Set convertToCustomRecord
     *
     * @param boolean $convertToCustomRecord
     * @return CustomList
     */
    public function setConvertToCustomRecord($convertToCustomRecord) {
        $this->convertToCustomRecord = $convertToCustomRecord;
        return $this;
    }

    /**
     * Get convertToCustomRecord
     *
     * @return boolean
     */
    public function getConvertToCustomRecord() {
        return $this->convertToCustomRecord;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return CustomList
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
     * Set customValueList
     *
     * @param CustomListCustomValueList $customValueList
     * @return CustomList
     */
    public function setCustomValueList(CustomListCustomValueList $customValueList) {
        $this->customValueList = $customValueList;
        return $this;
    }

    /**
     * Get customValueList
     *
     * @return CustomListCustomValueList
     */
    public function getCustomValueList() {
        return $this->customValueList;
    }


    /**
     * Set translationsList
     *
     * @param CustomListTranslationsList $translationsList
     * @return CustomList
     */
    public function setTranslationsList(CustomListTranslationsList $translationsList) {
        $this->translationsList = $translationsList;
        return $this;
    }

    /**
     * Get translationsList
     *
     * @return CustomListTranslationsList
     */
    public function getTranslationsList() {
        return $this->translationsList;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return CustomList
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

}