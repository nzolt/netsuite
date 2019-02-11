<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * PayrollItemSearchBasic
 */
class PayrollItemSearchBasic extends SearchRecordBasic {

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
     * @var SearchMultiSelectField
     */
    protected $expenseAccount;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $itemTypeNoHierarchy;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $liabilityAccount;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $name;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $subsidiary;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $vendor;

    /**
     * @access public
     * @var SearchCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"expenseAccount" => "SearchMultiSelectField",
    	"itemTypeNoHierarchy" => "SearchEnumMultiSelectField",
    	"liabilityAccount" => "SearchMultiSelectField",
    	"name" => "SearchStringField",
    	"subsidiary" => "SearchMultiSelectField",
    	"vendor" => "SearchMultiSelectField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return PayrollItemSearchBasic
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
     * @return PayrollItemSearchBasic
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
     * @return PayrollItemSearchBasic
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
     * @return PayrollItemSearchBasic
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
     * Set expenseAccount
     *
     * @param SearchMultiSelectField $expenseAccount
     * @return PayrollItemSearchBasic
     */
    public function setExpenseAccount(SearchMultiSelectField $expenseAccount) {
        $this->expenseAccount = $expenseAccount;
        return $this;
    }

    /**
     * Get expenseAccount
     *
     * @return SearchMultiSelectField
     */
    public function getExpenseAccount() {
        return $this->expenseAccount;
    }


    /**
     * Set itemTypeNoHierarchy
     *
     * @param SearchEnumMultiSelectField $itemTypeNoHierarchy
     * @return PayrollItemSearchBasic
     */
    public function setItemTypeNoHierarchy(SearchEnumMultiSelectField $itemTypeNoHierarchy) {
        $this->itemTypeNoHierarchy = $itemTypeNoHierarchy;
        return $this;
    }

    /**
     * Get itemTypeNoHierarchy
     *
     * @return SearchEnumMultiSelectField
     */
    public function getItemTypeNoHierarchy() {
        return $this->itemTypeNoHierarchy;
    }


    /**
     * Set liabilityAccount
     *
     * @param SearchMultiSelectField $liabilityAccount
     * @return PayrollItemSearchBasic
     */
    public function setLiabilityAccount(SearchMultiSelectField $liabilityAccount) {
        $this->liabilityAccount = $liabilityAccount;
        return $this;
    }

    /**
     * Get liabilityAccount
     *
     * @return SearchMultiSelectField
     */
    public function getLiabilityAccount() {
        return $this->liabilityAccount;
    }


    /**
     * Set name
     *
     * @param SearchStringField $name
     * @return PayrollItemSearchBasic
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
     * Set subsidiary
     *
     * @param SearchMultiSelectField $subsidiary
     * @return PayrollItemSearchBasic
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
     * Set vendor
     *
     * @param SearchMultiSelectField $vendor
     * @return PayrollItemSearchBasic
     */
    public function setVendor(SearchMultiSelectField $vendor) {
        $this->vendor = $vendor;
        return $this;
    }

    /**
     * Get vendor
     *
     * @return SearchMultiSelectField
     */
    public function getVendor() {
        return $this->vendor;
    }


    /**
     * Set customFieldList
     *
     * @param SearchCustomFieldList $customFieldList
     * @return PayrollItemSearchBasic
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