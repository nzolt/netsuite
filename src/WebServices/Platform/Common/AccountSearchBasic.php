<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * AccountSearchBasic
 */
class AccountSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $balance;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $cashFlowRateType;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $category1099Misc;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $description;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $externalId;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $externalIdString;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $generalRateType;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $internalId;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $internalIdNumber;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isInactive;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $name;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $number;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $parent;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $subsidiary;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $type;

    /**
     * @access public
     * @var SearchCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"balance" => "SearchDoubleField",
    	"cashFlowRateType" => "SearchEnumMultiSelectField",
    	"category1099Misc" => "SearchMultiSelectField",
    	"description" => "SearchStringField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"generalRateType" => "SearchEnumMultiSelectField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isInactive" => "SearchBooleanField",
    	"name" => "SearchStringField",
    	"number" => "SearchStringField",
    	"parent" => "SearchMultiSelectField",
    	"subsidiary" => "SearchMultiSelectField",
    	"type" => "SearchEnumMultiSelectField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set balance
     *
     * @param SearchDoubleField $balance
     * @return AccountSearchBasic
     */
    public function setBalance(SearchDoubleField $balance) {
        $this->balance = $balance;
        return $this;
    }

    /**
     * Get balance
     *
     * @return SearchDoubleField
     */
    public function getBalance() {
        return $this->balance;
    }


    /**
     * Set cashFlowRateType
     *
     * @param SearchEnumMultiSelectField $cashFlowRateType
     * @return AccountSearchBasic
     */
    public function setCashFlowRateType(SearchEnumMultiSelectField $cashFlowRateType) {
        $this->cashFlowRateType = $cashFlowRateType;
        return $this;
    }

    /**
     * Get cashFlowRateType
     *
     * @return SearchEnumMultiSelectField
     */
    public function getCashFlowRateType() {
        return $this->cashFlowRateType;
    }


    /**
     * Set category1099Misc
     *
     * @param SearchMultiSelectField $category1099Misc
     * @return AccountSearchBasic
     */
    public function setCategory1099Misc(SearchMultiSelectField $category1099Misc) {
        $this->category1099Misc = $category1099Misc;
        return $this;
    }

    /**
     * Get category1099Misc
     *
     * @return SearchMultiSelectField
     */
    public function getCategory1099Misc() {
        return $this->category1099Misc;
    }


    /**
     * Set description
     *
     * @param SearchStringField $description
     * @return AccountSearchBasic
     */
    public function setDescription(SearchStringField $description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return SearchStringField
     */
    public function getDescription() {
        return $this->description;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return AccountSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return SearchMultiSelectField
     */
    public function getExternalId() {
        return $this->externalId;
    }


    /**
     * Set externalIdString
     *
     * @param SearchStringField $externalIdString
     * @return AccountSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString) {
        $this->externalIdString = $externalIdString;
        return $this;
    }

    /**
     * Get externalIdString
     *
     * @return SearchStringField
     */
    public function getExternalIdString() {
        return $this->externalIdString;
    }


    /**
     * Set generalRateType
     *
     * @param SearchEnumMultiSelectField $generalRateType
     * @return AccountSearchBasic
     */
    public function setGeneralRateType(SearchEnumMultiSelectField $generalRateType) {
        $this->generalRateType = $generalRateType;
        return $this;
    }

    /**
     * Get generalRateType
     *
     * @return SearchEnumMultiSelectField
     */
    public function getGeneralRateType() {
        return $this->generalRateType;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return AccountSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return SearchMultiSelectField
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set internalIdNumber
     *
     * @param SearchLongField $internalIdNumber
     * @return AccountSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber) {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * Get internalIdNumber
     *
     * @return SearchLongField
     */
    public function getInternalIdNumber() {
        return $this->internalIdNumber;
    }


    /**
     * Set isInactive
     *
     * @param SearchBooleanField $isInactive
     * @return AccountSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive) {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Get isInactive
     *
     * @return SearchBooleanField
     */
    public function getIsInactive() {
        return $this->isInactive;
    }


    /**
     * Set name
     *
     * @param SearchStringField $name
     * @return AccountSearchBasic
     */
    public function setName(SearchStringField $name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return SearchStringField
     */
    public function getName() {
        return $this->name;
    }


    /**
     * Set number
     *
     * @param SearchStringField $number
     * @return AccountSearchBasic
     */
    public function setNumber(SearchStringField $number) {
        $this->number = $number;
        return $this;
    }

    /**
     * Get number
     *
     * @return SearchStringField
     */
    public function getNumber() {
        return $this->number;
    }


    /**
     * Set parent
     *
     * @param SearchMultiSelectField $parent
     * @return AccountSearchBasic
     */
    public function setParent(SearchMultiSelectField $parent) {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Get parent
     *
     * @return SearchMultiSelectField
     */
    public function getParent() {
        return $this->parent;
    }


    /**
     * Set subsidiary
     *
     * @param SearchMultiSelectField $subsidiary
     * @return AccountSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary) {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * Get subsidiary
     *
     * @return SearchMultiSelectField
     */
    public function getSubsidiary() {
        return $this->subsidiary;
    }


    /**
     * Set type
     *
     * @param SearchEnumMultiSelectField $type
     * @return AccountSearchBasic
     */
    public function setType(SearchEnumMultiSelectField $type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return SearchEnumMultiSelectField
     */
    public function getType() {
        return $this->type;
    }


    /**
     * Set customFieldList
     *
     * @param SearchCustomFieldList $customFieldList
     * @return AccountSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }

}