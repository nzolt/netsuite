<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;

/**
 * TermSearchBasic
 */
class TermSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $dateDriven;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $dayDiscountExpires;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $dayOfMonthNetDue;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $daysUntilExpiry;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $daysUntilNetDue;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $discountPercent;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $discountPercentDateDriven;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $dueNextMonthIfWithinDays;

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
    protected $preferred;

    static $paramtypesmap = array(
    	"dateDriven" => "SearchBooleanField",
    	"dayDiscountExpires" => "SearchLongField",
    	"dayOfMonthNetDue" => "SearchLongField",
    	"daysUntilExpiry" => "SearchLongField",
    	"daysUntilNetDue" => "SearchLongField",
    	"discountPercent" => "SearchDoubleField",
    	"discountPercentDateDriven" => "SearchDoubleField",
    	"dueNextMonthIfWithinDays" => "SearchLongField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isInactive" => "SearchBooleanField",
    	"name" => "SearchStringField",
    	"preferred" => "SearchBooleanField",
    );

    /**
     * Set dateDriven
     *
     * @param SearchBooleanField $dateDriven
     * @return TermSearchBasic
     */
    public function setDateDriven(SearchBooleanField $dateDriven) {
        $this->dateDriven = $dateDriven;
        return $this;
    }

    /**
     * Get dateDriven
     *
     * @return SearchBooleanField
     */
    public function getDateDriven() {
        return $this->dateDriven;
    }


    /**
     * Set dayDiscountExpires
     *
     * @param SearchLongField $dayDiscountExpires
     * @return TermSearchBasic
     */
    public function setDayDiscountExpires(SearchLongField $dayDiscountExpires) {
        $this->dayDiscountExpires = $dayDiscountExpires;
        return $this;
    }

    /**
     * Get dayDiscountExpires
     *
     * @return SearchLongField
     */
    public function getDayDiscountExpires() {
        return $this->dayDiscountExpires;
    }


    /**
     * Set dayOfMonthNetDue
     *
     * @param SearchLongField $dayOfMonthNetDue
     * @return TermSearchBasic
     */
    public function setDayOfMonthNetDue(SearchLongField $dayOfMonthNetDue) {
        $this->dayOfMonthNetDue = $dayOfMonthNetDue;
        return $this;
    }

    /**
     * Get dayOfMonthNetDue
     *
     * @return SearchLongField
     */
    public function getDayOfMonthNetDue() {
        return $this->dayOfMonthNetDue;
    }


    /**
     * Set daysUntilExpiry
     *
     * @param SearchLongField $daysUntilExpiry
     * @return TermSearchBasic
     */
    public function setDaysUntilExpiry(SearchLongField $daysUntilExpiry) {
        $this->daysUntilExpiry = $daysUntilExpiry;
        return $this;
    }

    /**
     * Get daysUntilExpiry
     *
     * @return SearchLongField
     */
    public function getDaysUntilExpiry() {
        return $this->daysUntilExpiry;
    }


    /**
     * Set daysUntilNetDue
     *
     * @param SearchLongField $daysUntilNetDue
     * @return TermSearchBasic
     */
    public function setDaysUntilNetDue(SearchLongField $daysUntilNetDue) {
        $this->daysUntilNetDue = $daysUntilNetDue;
        return $this;
    }

    /**
     * Get daysUntilNetDue
     *
     * @return SearchLongField
     */
    public function getDaysUntilNetDue() {
        return $this->daysUntilNetDue;
    }


    /**
     * Set discountPercent
     *
     * @param SearchDoubleField $discountPercent
     * @return TermSearchBasic
     */
    public function setDiscountPercent(SearchDoubleField $discountPercent) {
        $this->discountPercent = $discountPercent;
        return $this;
    }

    /**
     * Get discountPercent
     *
     * @return SearchDoubleField
     */
    public function getDiscountPercent() {
        return $this->discountPercent;
    }


    /**
     * Set discountPercentDateDriven
     *
     * @param SearchDoubleField $discountPercentDateDriven
     * @return TermSearchBasic
     */
    public function setDiscountPercentDateDriven(SearchDoubleField $discountPercentDateDriven) {
        $this->discountPercentDateDriven = $discountPercentDateDriven;
        return $this;
    }

    /**
     * Get discountPercentDateDriven
     *
     * @return SearchDoubleField
     */
    public function getDiscountPercentDateDriven() {
        return $this->discountPercentDateDriven;
    }


    /**
     * Set dueNextMonthIfWithinDays
     *
     * @param SearchLongField $dueNextMonthIfWithinDays
     * @return TermSearchBasic
     */
    public function setDueNextMonthIfWithinDays(SearchLongField $dueNextMonthIfWithinDays) {
        $this->dueNextMonthIfWithinDays = $dueNextMonthIfWithinDays;
        return $this;
    }

    /**
     * Get dueNextMonthIfWithinDays
     *
     * @return SearchLongField
     */
    public function getDueNextMonthIfWithinDays() {
        return $this->dueNextMonthIfWithinDays;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return TermSearchBasic
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
     * @return TermSearchBasic
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
     * @return TermSearchBasic
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
     * @return TermSearchBasic
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
     * @return TermSearchBasic
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
     * @return TermSearchBasic
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
     * Set preferred
     *
     * @param SearchBooleanField $preferred
     * @return TermSearchBasic
     */
    public function setPreferred(SearchBooleanField $preferred) {
        $this->preferred = $preferred;
        return $this;
    }

    /**
     * Get preferred
     *
     * @return SearchBooleanField
     */
    public function getPreferred() {
        return $this->preferred;
    }

}