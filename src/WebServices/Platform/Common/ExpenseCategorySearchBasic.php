<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * ExpenseCategorySearchBasic
 */
class ExpenseCategorySearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $account;

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
     * @var SearchBooleanField
     */
    protected $rateRequired;

    /**
     * @access public
     * @var SearchCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"account" => "SearchMultiSelectField",
    	"description" => "SearchStringField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isInactive" => "SearchBooleanField",
    	"name" => "SearchStringField",
    	"rateRequired" => "SearchBooleanField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set account
     *
     * @param SearchMultiSelectField $account
     * @return ExpenseCategorySearchBasic
     */
    public function setAccount(SearchMultiSelectField $account) {
        $this->account = $account;
        return $this;
    }

    /**
     * Get account
     *
     * @return SearchMultiSelectField
     */
    public function getAccount() {
        return $this->account;
    }


    /**
     * Set description
     *
     * @param SearchStringField $description
     * @return ExpenseCategorySearchBasic
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
     * @return ExpenseCategorySearchBasic
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
     * @return ExpenseCategorySearchBasic
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
     * @return ExpenseCategorySearchBasic
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
     * @return ExpenseCategorySearchBasic
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
     * @return ExpenseCategorySearchBasic
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
     * @return ExpenseCategorySearchBasic
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
     * Set rateRequired
     *
     * @param SearchBooleanField $rateRequired
     * @return ExpenseCategorySearchBasic
     */
    public function setRateRequired(SearchBooleanField $rateRequired) {
        $this->rateRequired = $rateRequired;
        return $this;
    }

    /**
     * Get rateRequired
     *
     * @return SearchBooleanField
     */
    public function getRateRequired() {
        return $this->rateRequired;
    }


    /**
     * Set customFieldList
     *
     * @param SearchCustomFieldList $customFieldList
     * @return ExpenseCategorySearchBasic
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