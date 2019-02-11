<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;

/**
 * BudgetSearchBasic
 */
class BudgetSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $account;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $amount;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $category;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $class;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $currency;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $customer;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $department;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $global;

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
    protected $item;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $location;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $subsidiary;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $year;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $year2;

    static $paramtypesmap = array(
    	"account" => "SearchMultiSelectField",
    	"amount" => "SearchDoubleField",
    	"category" => "SearchMultiSelectField",
    	"class" => "SearchMultiSelectField",
    	"currency" => "SearchMultiSelectField",
    	"customer" => "SearchMultiSelectField",
    	"department" => "SearchMultiSelectField",
    	"global" => "SearchBooleanField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"item" => "SearchMultiSelectField",
    	"location" => "SearchMultiSelectField",
    	"subsidiary" => "SearchMultiSelectField",
    	"year" => "SearchMultiSelectField",
    	"year2" => "SearchMultiSelectField",
    );

    /**
     * Set account
     *
     * @param SearchMultiSelectField $account
     * @return BudgetSearchBasic
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
     * Set amount
     *
     * @param SearchDoubleField $amount
     * @return BudgetSearchBasic
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
     * Set category
     *
     * @param SearchMultiSelectField $category
     * @return BudgetSearchBasic
     */
    public function setCategory(SearchMultiSelectField $category) {
        $this->category = $category;
        return $this;
    }

    /**
     * Get category
     *
     * @return SearchMultiSelectField
     */
    public function getCategory() {
        return $this->category;
    }


    /**
     * Set class
     *
     * @param SearchMultiSelectField $class
     * @return BudgetSearchBasic
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
     * Set currency
     *
     * @param SearchMultiSelectField $currency
     * @return BudgetSearchBasic
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
     * Set customer
     *
     * @param SearchMultiSelectField $customer
     * @return BudgetSearchBasic
     */
    public function setCustomer(SearchMultiSelectField $customer) {
        $this->customer = $customer;
        return $this;
    }

    /**
     * Get customer
     *
     * @return SearchMultiSelectField
     */
    public function getCustomer() {
        return $this->customer;
    }


    /**
     * Set department
     *
     * @param SearchMultiSelectField $department
     * @return BudgetSearchBasic
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
     * Set global
     *
     * @param SearchBooleanField $global
     * @return BudgetSearchBasic
     */
    public function setGlobal(SearchBooleanField $global) {
        $this->global = $global;
        return $this;
    }

    /**
     * Get global
     *
     * @return SearchBooleanField
     */
    public function getGlobal() {
        return $this->global;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return BudgetSearchBasic
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
     * @return BudgetSearchBasic
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
     * Set item
     *
     * @param SearchMultiSelectField $item
     * @return BudgetSearchBasic
     */
    public function setItem(SearchMultiSelectField $item) {
        $this->item = $item;
        return $this;
    }

    /**
     * Get item
     *
     * @return SearchMultiSelectField
     */
    public function getItem() {
        return $this->item;
    }


    /**
     * Set location
     *
     * @param SearchMultiSelectField $location
     * @return BudgetSearchBasic
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
     * Set subsidiary
     *
     * @param SearchMultiSelectField $subsidiary
     * @return BudgetSearchBasic
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
     * Set year
     *
     * @param SearchMultiSelectField $year
     * @return BudgetSearchBasic
     */
    public function setYear(SearchMultiSelectField $year) {
        $this->year = $year;
        return $this;
    }

    /**
     * Get year
     *
     * @return SearchMultiSelectField
     */
    public function getYear() {
        return $this->year;
    }


    /**
     * Set year2
     *
     * @param SearchMultiSelectField $year2
     * @return BudgetSearchBasic
     */
    public function setYear2(SearchMultiSelectField $year2) {
        $this->year2 = $year2;
        return $this;
    }

    /**
     * Get year2
     *
     * @return SearchMultiSelectField
     */
    public function getYear2() {
        return $this->year2;
    }

}