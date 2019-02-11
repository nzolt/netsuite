<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;

/**
 * BillingScheduleSearchBasic
 */
class BillingScheduleSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $applyToSubtotal;

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
    protected $frequency;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $inArrears;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $initialAmount;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $initialTerms;

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
     * @var SearchBooleanField
     */
    protected $isPublic;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $name;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $recurrenceCount;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $recurrenceTerms;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $repeatEvery;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $type;

    static $paramtypesmap = array(
    	"applyToSubtotal" => "SearchBooleanField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"frequency" => "SearchEnumMultiSelectField",
    	"inArrears" => "SearchBooleanField",
    	"initialAmount" => "SearchDoubleField",
    	"initialTerms" => "SearchMultiSelectField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isInactive" => "SearchBooleanField",
    	"isPublic" => "SearchBooleanField",
    	"name" => "SearchStringField",
    	"recurrenceCount" => "SearchLongField",
    	"recurrenceTerms" => "SearchMultiSelectField",
    	"repeatEvery" => "SearchLongField",
    	"type" => "SearchEnumMultiSelectField",
    );

    /**
     * Set applyToSubtotal
     *
     * @param SearchBooleanField $applyToSubtotal
     * @return BillingScheduleSearchBasic
     */
    public function setApplyToSubtotal(SearchBooleanField $applyToSubtotal) {
        $this->applyToSubtotal = $applyToSubtotal;
        return $this;
    }

    /**
     * Get applyToSubtotal
     *
     * @return SearchBooleanField
     */
    public function getApplyToSubtotal() {
        return $this->applyToSubtotal;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return BillingScheduleSearchBasic
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
     * @return BillingScheduleSearchBasic
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
     * Set frequency
     *
     * @param SearchEnumMultiSelectField $frequency
     * @return BillingScheduleSearchBasic
     */
    public function setFrequency(SearchEnumMultiSelectField $frequency) {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * Get frequency
     *
     * @return SearchEnumMultiSelectField
     */
    public function getFrequency() {
        return $this->frequency;
    }


    /**
     * Set inArrears
     *
     * @param SearchBooleanField $inArrears
     * @return BillingScheduleSearchBasic
     */
    public function setInArrears(SearchBooleanField $inArrears) {
        $this->inArrears = $inArrears;
        return $this;
    }

    /**
     * Get inArrears
     *
     * @return SearchBooleanField
     */
    public function getInArrears() {
        return $this->inArrears;
    }


    /**
     * Set initialAmount
     *
     * @param SearchDoubleField $initialAmount
     * @return BillingScheduleSearchBasic
     */
    public function setInitialAmount(SearchDoubleField $initialAmount) {
        $this->initialAmount = $initialAmount;
        return $this;
    }

    /**
     * Get initialAmount
     *
     * @return SearchDoubleField
     */
    public function getInitialAmount() {
        return $this->initialAmount;
    }


    /**
     * Set initialTerms
     *
     * @param SearchMultiSelectField $initialTerms
     * @return BillingScheduleSearchBasic
     */
    public function setInitialTerms(SearchMultiSelectField $initialTerms) {
        $this->initialTerms = $initialTerms;
        return $this;
    }

    /**
     * Get initialTerms
     *
     * @return SearchMultiSelectField
     */
    public function getInitialTerms() {
        return $this->initialTerms;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return BillingScheduleSearchBasic
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
     * @return BillingScheduleSearchBasic
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
     * @return BillingScheduleSearchBasic
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
     * Set isPublic
     *
     * @param SearchBooleanField $isPublic
     * @return BillingScheduleSearchBasic
     */
    public function setIsPublic(SearchBooleanField $isPublic) {
        $this->isPublic = $isPublic;
        return $this;
    }

    /**
     * Get isPublic
     *
     * @return SearchBooleanField
     */
    public function getIsPublic() {
        return $this->isPublic;
    }


    /**
     * Set name
     *
     * @param SearchStringField $name
     * @return BillingScheduleSearchBasic
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
     * Set recurrenceCount
     *
     * @param SearchLongField $recurrenceCount
     * @return BillingScheduleSearchBasic
     */
    public function setRecurrenceCount(SearchLongField $recurrenceCount) {
        $this->recurrenceCount = $recurrenceCount;
        return $this;
    }

    /**
     * Get recurrenceCount
     *
     * @return SearchLongField
     */
    public function getRecurrenceCount() {
        return $this->recurrenceCount;
    }


    /**
     * Set recurrenceTerms
     *
     * @param SearchMultiSelectField $recurrenceTerms
     * @return BillingScheduleSearchBasic
     */
    public function setRecurrenceTerms(SearchMultiSelectField $recurrenceTerms) {
        $this->recurrenceTerms = $recurrenceTerms;
        return $this;
    }

    /**
     * Get recurrenceTerms
     *
     * @return SearchMultiSelectField
     */
    public function getRecurrenceTerms() {
        return $this->recurrenceTerms;
    }


    /**
     * Set repeatEvery
     *
     * @param SearchLongField $repeatEvery
     * @return BillingScheduleSearchBasic
     */
    public function setRepeatEvery(SearchLongField $repeatEvery) {
        $this->repeatEvery = $repeatEvery;
        return $this;
    }

    /**
     * Get repeatEvery
     *
     * @return SearchLongField
     */
    public function getRepeatEvery() {
        return $this->repeatEvery;
    }


    /**
     * Set type
     *
     * @param SearchEnumMultiSelectField $type
     * @return BillingScheduleSearchBasic
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

}