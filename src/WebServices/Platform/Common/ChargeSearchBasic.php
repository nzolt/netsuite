<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\PostingPeriodDate;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * ChargeSearchBasic
 */
class ChargeSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $amount;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $billingItem;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $billTo;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $chargeDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $class;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $chargeType;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $createdDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $currency;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $department;

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
    protected $location;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $modifiedDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $postingPeriod;

    /**
     * @access public
     * @var PostingPeriodDate
     */
    protected $postingPeriodRelative;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $quantity;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $rate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $rule;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $runId;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $salesOrder;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $stage;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $use;

    /**
     * @access public
     * @var SearchCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"amount" => "SearchDoubleField",
    	"billingItem" => "SearchMultiSelectField",
    	"billTo" => "SearchMultiSelectField",
    	"chargeDate" => "SearchDateField",
    	"class" => "SearchMultiSelectField",
    	"chargeType" => "SearchMultiSelectField",
    	"createdDate" => "SearchDateField",
    	"currency" => "SearchMultiSelectField",
    	"department" => "SearchMultiSelectField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"location" => "SearchMultiSelectField",
    	"modifiedDate" => "SearchDateField",
    	"postingPeriod" => "RecordRef",
    	"postingPeriodRelative" => "PostingPeriodDate",
    	"quantity" => "SearchDoubleField",
    	"rate" => "SearchDoubleField",
    	"rule" => "SearchMultiSelectField",
    	"runId" => "SearchStringField",
    	"salesOrder" => "SearchLongField",
    	"stage" => "SearchEnumMultiSelectField",
    	"use" => "SearchEnumMultiSelectField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set amount
     *
     * @param SearchDoubleField $amount
     * @return ChargeSearchBasic
     */
    public function setAmount(SearchDoubleField $amount) {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Get amount
     *
     * @return SearchDoubleField
     */
    public function getAmount() {
        return $this->amount;
    }


    /**
     * Set billingItem
     *
     * @param SearchMultiSelectField $billingItem
     * @return ChargeSearchBasic
     */
    public function setBillingItem(SearchMultiSelectField $billingItem) {
        $this->billingItem = $billingItem;
        return $this;
    }

    /**
     * Get billingItem
     *
     * @return SearchMultiSelectField
     */
    public function getBillingItem() {
        return $this->billingItem;
    }


    /**
     * Set billTo
     *
     * @param SearchMultiSelectField $billTo
     * @return ChargeSearchBasic
     */
    public function setBillTo(SearchMultiSelectField $billTo) {
        $this->billTo = $billTo;
        return $this;
    }

    /**
     * Get billTo
     *
     * @return SearchMultiSelectField
     */
    public function getBillTo() {
        return $this->billTo;
    }


    /**
     * Set chargeDate
     *
     * @param SearchDateField $chargeDate
     * @return ChargeSearchBasic
     */
    public function setChargeDate(SearchDateField $chargeDate) {
        $this->chargeDate = $chargeDate;
        return $this;
    }

    /**
     * Get chargeDate
     *
     * @return SearchDateField
     */
    public function getChargeDate() {
        return $this->chargeDate;
    }


    /**
     * Set class
     *
     * @param SearchMultiSelectField $class
     * @return ChargeSearchBasic
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
     * Set chargeType
     *
     * @param SearchMultiSelectField $chargeType
     * @return ChargeSearchBasic
     */
    public function setChargeType(SearchMultiSelectField $chargeType) {
        $this->chargeType = $chargeType;
        return $this;
    }

    /**
     * Get chargeType
     *
     * @return SearchMultiSelectField
     */
    public function getChargeType() {
        return $this->chargeType;
    }


    /**
     * Set createdDate
     *
     * @param SearchDateField $createdDate
     * @return ChargeSearchBasic
     */
    public function setCreatedDate(SearchDateField $createdDate) {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * Get createdDate
     *
     * @return SearchDateField
     */
    public function getCreatedDate() {
        return $this->createdDate;
    }


    /**
     * Set currency
     *
     * @param SearchMultiSelectField $currency
     * @return ChargeSearchBasic
     */
    public function setCurrency(SearchMultiSelectField $currency) {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Get currency
     *
     * @return SearchMultiSelectField
     */
    public function getCurrency() {
        return $this->currency;
    }


    /**
     * Set department
     *
     * @param SearchMultiSelectField $department
     * @return ChargeSearchBasic
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
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return ChargeSearchBasic
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
     * @return ChargeSearchBasic
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
     * @return ChargeSearchBasic
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
     * @return ChargeSearchBasic
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
     * Set location
     *
     * @param SearchMultiSelectField $location
     * @return ChargeSearchBasic
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
     * Set modifiedDate
     *
     * @param SearchDateField $modifiedDate
     * @return ChargeSearchBasic
     */
    public function setModifiedDate(SearchDateField $modifiedDate) {
        $this->modifiedDate = $modifiedDate;
        return $this;
    }

    /**
     * Get modifiedDate
     *
     * @return SearchDateField
     */
    public function getModifiedDate() {
        return $this->modifiedDate;
    }


    /**
     * Set postingPeriodRelative
     *
     * @param PostingPeriodDate $postingPeriodRelative
     * @return ChargeSearchBasic
     */
    public function setPostingPeriodRelative(PostingPeriodDate $postingPeriodRelative) {
        $this->postingPeriodRelative = $postingPeriodRelative;
        return $this;
    }

    /**
     * Get postingPeriodRelative
     *
     * @return PostingPeriodDate
     */
    public function getPostingPeriodRelative() {
        return $this->postingPeriodRelative;
    }


    /**
     * Set quantity
     *
     * @param SearchDoubleField $quantity
     * @return ChargeSearchBasic
     */
    public function setQuantity(SearchDoubleField $quantity) {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Get quantity
     *
     * @return SearchDoubleField
     */
    public function getQuantity() {
        return $this->quantity;
    }


    /**
     * Set rate
     *
     * @param SearchDoubleField $rate
     * @return ChargeSearchBasic
     */
    public function setRate(SearchDoubleField $rate) {
        $this->rate = $rate;
        return $this;
    }

    /**
     * Get rate
     *
     * @return SearchDoubleField
     */
    public function getRate() {
        return $this->rate;
    }


    /**
     * Set rule
     *
     * @param SearchMultiSelectField $rule
     * @return ChargeSearchBasic
     */
    public function setRule(SearchMultiSelectField $rule) {
        $this->rule = $rule;
        return $this;
    }

    /**
     * Get rule
     *
     * @return SearchMultiSelectField
     */
    public function getRule() {
        return $this->rule;
    }


    /**
     * Set runId
     *
     * @param SearchStringField $runId
     * @return ChargeSearchBasic
     */
    public function setRunId(SearchStringField $runId) {
        $this->runId = $runId;
        return $this;
    }

    /**
     * Get runId
     *
     * @return SearchStringField
     */
    public function getRunId() {
        return $this->runId;
    }


    /**
     * Set salesOrder
     *
     * @param SearchLongField $salesOrder
     * @return ChargeSearchBasic
     */
    public function setSalesOrder(SearchLongField $salesOrder) {
        $this->salesOrder = $salesOrder;
        return $this;
    }

    /**
     * Get salesOrder
     *
     * @return SearchLongField
     */
    public function getSalesOrder() {
        return $this->salesOrder;
    }


    /**
     * Set stage
     *
     * @param SearchEnumMultiSelectField $stage
     * @return ChargeSearchBasic
     */
    public function setStage(SearchEnumMultiSelectField $stage) {
        $this->stage = $stage;
        return $this;
    }

    /**
     * Get stage
     *
     * @return SearchEnumMultiSelectField
     */
    public function getStage() {
        return $this->stage;
    }


    /**
     * Set use
     *
     * @param SearchEnumMultiSelectField $use
     * @return ChargeSearchBasic
     */
    public function setUse(SearchEnumMultiSelectField $use) {
        $this->use = $use;
        return $this;
    }

    /**
     * Get use
     *
     * @return SearchEnumMultiSelectField
     */
    public function getUse() {
        return $this->use;
    }


    /**
     * Set customFieldList
     *
     * @param SearchCustomFieldList $customFieldList
     * @return ChargeSearchBasic
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