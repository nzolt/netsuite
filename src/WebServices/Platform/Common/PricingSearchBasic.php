<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;

/**
 * PricingSearchBasic
 */
class PricingSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $assignedPriceLevel;

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
     * @var SearchDoubleField
     */
    protected $maximumQuantity;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $minimumQuantity;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $priceLevel;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $rate;

    static $paramtypesmap = array(
    	"assignedPriceLevel" => "SearchBooleanField",
    	"currency" => "SearchMultiSelectField",
    	"customer" => "SearchMultiSelectField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"item" => "SearchMultiSelectField",
    	"maximumQuantity" => "SearchDoubleField",
    	"minimumQuantity" => "SearchDoubleField",
    	"priceLevel" => "SearchMultiSelectField",
    	"rate" => "SearchDoubleField",
    );

    /**
     * Set assignedPriceLevel
     *
     * @param SearchBooleanField $assignedPriceLevel
     * @return PricingSearchBasic
     */
    public function setAssignedPriceLevel(SearchBooleanField $assignedPriceLevel) {
        $this->assignedPriceLevel = $assignedPriceLevel;
        return $this;
    }

    /**
     * Get assignedPriceLevel
     *
     * @return SearchBooleanField
     */
    public function getAssignedPriceLevel() {
        return $this->assignedPriceLevel;
    }


    /**
     * Set currency
     *
     * @param SearchMultiSelectField $currency
     * @return PricingSearchBasic
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
     * @return PricingSearchBasic
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
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return PricingSearchBasic
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
     * @return PricingSearchBasic
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
     * @return PricingSearchBasic
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
     * Set maximumQuantity
     *
     * @param SearchDoubleField $maximumQuantity
     * @return PricingSearchBasic
     */
    public function setMaximumQuantity(SearchDoubleField $maximumQuantity) {
        $this->maximumQuantity = $maximumQuantity;
        return $this;
    }

    /**
     * Get maximumQuantity
     *
     * @return SearchDoubleField
     */
    public function getMaximumQuantity() {
        return $this->maximumQuantity;
    }


    /**
     * Set minimumQuantity
     *
     * @param SearchDoubleField $minimumQuantity
     * @return PricingSearchBasic
     */
    public function setMinimumQuantity(SearchDoubleField $minimumQuantity) {
        $this->minimumQuantity = $minimumQuantity;
        return $this;
    }

    /**
     * Get minimumQuantity
     *
     * @return SearchDoubleField
     */
    public function getMinimumQuantity() {
        return $this->minimumQuantity;
    }


    /**
     * Set priceLevel
     *
     * @param SearchMultiSelectField $priceLevel
     * @return PricingSearchBasic
     */
    public function setPriceLevel(SearchMultiSelectField $priceLevel) {
        $this->priceLevel = $priceLevel;
        return $this;
    }

    /**
     * Get priceLevel
     *
     * @return SearchMultiSelectField
     */
    public function getPriceLevel() {
        return $this->priceLevel;
    }


    /**
     * Set rate
     *
     * @param SearchDoubleField $rate
     * @return PricingSearchBasic
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

}