<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectCustomField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * ItemAccountMappingSearchBasic
 */
class ItemAccountMappingSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $accountingBook;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $class;

    /**
     * @access public
     * @var SearchMultiSelectCustomField
     */
    protected $customDimension;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $department;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $destinationAccount;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $effectiveDate;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $endDate;

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
     * @var SearchEnumMultiSelectField
     */
    protected $itemAccount;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $location;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $sourceAccount;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $subsidiary;

    /**
     * @access public
     * @var SearchCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"accountingBook" => "SearchMultiSelectField",
    	"class" => "SearchMultiSelectField",
    	"customDimension" => "SearchMultiSelectCustomField",
    	"department" => "SearchMultiSelectField",
    	"destinationAccount" => "SearchMultiSelectField",
    	"effectiveDate" => "SearchDateField",
    	"endDate" => "SearchDateField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"itemAccount" => "SearchEnumMultiSelectField",
    	"location" => "SearchMultiSelectField",
    	"sourceAccount" => "SearchMultiSelectField",
    	"subsidiary" => "SearchMultiSelectField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set accountingBook
     *
     * @param SearchMultiSelectField $accountingBook
     * @return ItemAccountMappingSearchBasic
     */
    public function setAccountingBook(SearchMultiSelectField $accountingBook) {
        $this->accountingBook = $accountingBook;
        return $this;
    }

    /**
     * Get accountingBook
     *
     * @return SearchMultiSelectField
     */
    public function getAccountingBook() {
        return $this->accountingBook;
    }


    /**
     * Set class
     *
     * @param SearchMultiSelectField $class
     * @return ItemAccountMappingSearchBasic
     */
    public function setClass(SearchMultiSelectField $class) {
        $this->class = $class;
        return $this;
    }

    /**
     * Get class
     *
     * @return SearchMultiSelectField
     */
    public function getClass() {
        return $this->class;
    }


    /**
     * Set customDimension
     *
     * @param SearchMultiSelectCustomField $customDimension
     * @return ItemAccountMappingSearchBasic
     */
    public function setCustomDimension(SearchMultiSelectCustomField $customDimension) {
        $this->customDimension = $customDimension;
        return $this;
    }

    /**
     * Get customDimension
     *
     * @return SearchMultiSelectCustomField
     */
    public function getCustomDimension() {
        return $this->customDimension;
    }


    /**
     * Set department
     *
     * @param SearchMultiSelectField $department
     * @return ItemAccountMappingSearchBasic
     */
    public function setDepartment(SearchMultiSelectField $department) {
        $this->department = $department;
        return $this;
    }

    /**
     * Get department
     *
     * @return SearchMultiSelectField
     */
    public function getDepartment() {
        return $this->department;
    }


    /**
     * Set destinationAccount
     *
     * @param SearchMultiSelectField $destinationAccount
     * @return ItemAccountMappingSearchBasic
     */
    public function setDestinationAccount(SearchMultiSelectField $destinationAccount) {
        $this->destinationAccount = $destinationAccount;
        return $this;
    }

    /**
     * Get destinationAccount
     *
     * @return SearchMultiSelectField
     */
    public function getDestinationAccount() {
        return $this->destinationAccount;
    }


    /**
     * Set effectiveDate
     *
     * @param SearchDateField $effectiveDate
     * @return ItemAccountMappingSearchBasic
     */
    public function setEffectiveDate(SearchDateField $effectiveDate) {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * Get effectiveDate
     *
     * @return SearchDateField
     */
    public function getEffectiveDate() {
        return $this->effectiveDate;
    }


    /**
     * Set endDate
     *
     * @param SearchDateField $endDate
     * @return ItemAccountMappingSearchBasic
     */
    public function setEndDate(SearchDateField $endDate) {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Get endDate
     *
     * @return SearchDateField
     */
    public function getEndDate() {
        return $this->endDate;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return ItemAccountMappingSearchBasic
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
     * @return ItemAccountMappingSearchBasic
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
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return ItemAccountMappingSearchBasic
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
     * @return ItemAccountMappingSearchBasic
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
     * Set itemAccount
     *
     * @param SearchEnumMultiSelectField $itemAccount
     * @return ItemAccountMappingSearchBasic
     */
    public function setItemAccount(SearchEnumMultiSelectField $itemAccount) {
        $this->itemAccount = $itemAccount;
        return $this;
    }

    /**
     * Get itemAccount
     *
     * @return SearchEnumMultiSelectField
     */
    public function getItemAccount() {
        return $this->itemAccount;
    }


    /**
     * Set location
     *
     * @param SearchMultiSelectField $location
     * @return ItemAccountMappingSearchBasic
     */
    public function setLocation(SearchMultiSelectField $location) {
        $this->location = $location;
        return $this;
    }

    /**
     * Get location
     *
     * @return SearchMultiSelectField
     */
    public function getLocation() {
        return $this->location;
    }


    /**
     * Set sourceAccount
     *
     * @param SearchMultiSelectField $sourceAccount
     * @return ItemAccountMappingSearchBasic
     */
    public function setSourceAccount(SearchMultiSelectField $sourceAccount) {
        $this->sourceAccount = $sourceAccount;
        return $this;
    }

    /**
     * Get sourceAccount
     *
     * @return SearchMultiSelectField
     */
    public function getSourceAccount() {
        return $this->sourceAccount;
    }


    /**
     * Set subsidiary
     *
     * @param SearchMultiSelectField $subsidiary
     * @return ItemAccountMappingSearchBasic
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
     * Set customFieldList
     *
     * @param SearchCustomFieldList $customFieldList
     * @return ItemAccountMappingSearchBasic
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