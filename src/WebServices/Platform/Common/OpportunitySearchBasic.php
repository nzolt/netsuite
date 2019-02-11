<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\PostingPeriodDate;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * OpportunitySearchBasic
 */
class OpportunitySearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $amount;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $availableOffline;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $buyingReason;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $buyingTimeFrame;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $class;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $closeDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $competitor;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $contribution;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $currency;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $custType;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $dateCreated;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $daysOpen;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $daysToClose;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $department;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $entity;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $entityStatus;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $estimatedBudget;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $expectedCloseDate;

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
    protected $forecastType;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $foreignProjectedAmount;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $foreignRangeHigh;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $foreignRangeLow;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $fxTranCostEstimate;

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
    protected $isBudgetApproved;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $item;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $leadSource;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $location;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $memo;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $number;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $partner;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $partnerContribution;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $partnerRole;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $partnerTeamMember;

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
     * @var SearchLongField
     */
    protected $probability;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $projAltSalesAmt;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $projectedTotal;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $rangeHigh;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $rangeHighAlt;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $rangeLow;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $rangeLowAlt;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $salesReadiness;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $salesRep;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $salesTeamMember;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $salesTeamRole;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $status;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $subsidiary;

    /**
     * @access public
     * @var RecordRef
     */
    public $taxPeriod;

    /**
     * @access public
     * @var PostingPeriodDate
     */
    protected $taxPeriodRelative;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $title;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $tranCostEstimate;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $tranDate;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $tranEstGrossProfit;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $tranEstGrossProfitPct;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $tranFxEstGrossProfit;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $tranId;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $winLossReason;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $wonBy;

    /**
     * @access public
     * @var SearchCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"amount" => "SearchDoubleField",
    	"availableOffline" => "SearchBooleanField",
    	"buyingReason" => "SearchMultiSelectField",
    	"buyingTimeFrame" => "SearchMultiSelectField",
    	"class" => "SearchMultiSelectField",
    	"closeDate" => "SearchDateField",
    	"competitor" => "SearchMultiSelectField",
    	"contribution" => "SearchLongField",
    	"currency" => "SearchMultiSelectField",
    	"custType" => "SearchMultiSelectField",
    	"dateCreated" => "SearchDateField",
    	"daysOpen" => "SearchLongField",
    	"daysToClose" => "SearchLongField",
    	"department" => "SearchMultiSelectField",
    	"entity" => "SearchMultiSelectField",
    	"entityStatus" => "SearchMultiSelectField",
    	"estimatedBudget" => "SearchDoubleField",
    	"expectedCloseDate" => "SearchDateField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"forecastType" => "SearchEnumMultiSelectField",
    	"foreignProjectedAmount" => "SearchDoubleField",
    	"foreignRangeHigh" => "SearchDoubleField",
    	"foreignRangeLow" => "SearchDoubleField",
    	"fxTranCostEstimate" => "SearchDoubleField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isBudgetApproved" => "SearchBooleanField",
    	"item" => "SearchMultiSelectField",
    	"lastModifiedDate" => "SearchDateField",
    	"leadSource" => "SearchMultiSelectField",
    	"location" => "SearchMultiSelectField",
    	"memo" => "SearchStringField",
    	"number" => "SearchLongField",
    	"partner" => "SearchMultiSelectField",
    	"partnerContribution" => "SearchLongField",
    	"partnerRole" => "SearchMultiSelectField",
    	"partnerTeamMember" => "SearchMultiSelectField",
    	"postingPeriod" => "RecordRef",
    	"postingPeriodRelative" => "PostingPeriodDate",
    	"probability" => "SearchLongField",
    	"projAltSalesAmt" => "SearchDoubleField",
    	"projectedTotal" => "SearchDoubleField",
    	"rangeHigh" => "SearchDoubleField",
    	"rangeHighAlt" => "SearchDoubleField",
    	"rangeLow" => "SearchDoubleField",
    	"rangeLowAlt" => "SearchDoubleField",
    	"salesReadiness" => "SearchMultiSelectField",
    	"salesRep" => "SearchMultiSelectField",
    	"salesTeamMember" => "SearchMultiSelectField",
    	"salesTeamRole" => "SearchMultiSelectField",
    	"status" => "SearchEnumMultiSelectField",
    	"subsidiary" => "SearchMultiSelectField",
    	"taxPeriod" => "RecordRef",
    	"taxPeriodRelative" => "PostingPeriodDate",
    	"title" => "SearchStringField",
    	"tranCostEstimate" => "SearchDoubleField",
    	"tranDate" => "SearchDateField",
    	"tranEstGrossProfit" => "SearchDoubleField",
    	"tranEstGrossProfitPct" => "SearchDoubleField",
    	"tranFxEstGrossProfit" => "SearchDoubleField",
    	"tranId" => "SearchStringField",
    	"winLossReason" => "SearchMultiSelectField",
    	"wonBy" => "SearchMultiSelectField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set amount
     *
     * @param SearchDoubleField $amount
     * @return OpportunitySearchBasic
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
     * Set availableOffline
     *
     * @param SearchBooleanField $availableOffline
     * @return OpportunitySearchBasic
     */
    public function setAvailableOffline(SearchBooleanField $availableOffline) {
        $this->availableOffline = $availableOffline;
        return $this;
    }

    /**
     * Get availableOffline
     *
     * @return SearchBooleanField
     */
    public function getAvailableOffline() {
        return $this->availableOffline;
    }


    /**
     * Set buyingReason
     *
     * @param SearchMultiSelectField $buyingReason
     * @return OpportunitySearchBasic
     */
    public function setBuyingReason(SearchMultiSelectField $buyingReason) {
        $this->buyingReason = $buyingReason;
        return $this;
    }

    /**
     * Get buyingReason
     *
     * @return SearchMultiSelectField
     */
    public function getBuyingReason() {
        return $this->buyingReason;
    }


    /**
     * Set buyingTimeFrame
     *
     * @param SearchMultiSelectField $buyingTimeFrame
     * @return OpportunitySearchBasic
     */
    public function setBuyingTimeFrame(SearchMultiSelectField $buyingTimeFrame) {
        $this->buyingTimeFrame = $buyingTimeFrame;
        return $this;
    }

    /**
     * Get buyingTimeFrame
     *
     * @return SearchMultiSelectField
     */
    public function getBuyingTimeFrame() {
        return $this->buyingTimeFrame;
    }


    /**
     * Set class
     *
     * @param SearchMultiSelectField $class
     * @return OpportunitySearchBasic
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
     * Set closeDate
     *
     * @param SearchDateField $closeDate
     * @return OpportunitySearchBasic
     */
    public function setCloseDate(SearchDateField $closeDate) {
        $this->closeDate = $closeDate;
        return $this;
    }

    /**
     * Get closeDate
     *
     * @return SearchDateField
     */
    public function getCloseDate() {
        return $this->closeDate;
    }


    /**
     * Set competitor
     *
     * @param SearchMultiSelectField $competitor
     * @return OpportunitySearchBasic
     */
    public function setCompetitor(SearchMultiSelectField $competitor) {
        $this->competitor = $competitor;
        return $this;
    }

    /**
     * Get competitor
     *
     * @return SearchMultiSelectField
     */
    public function getCompetitor() {
        return $this->competitor;
    }


    /**
     * Set contribution
     *
     * @param SearchLongField $contribution
     * @return OpportunitySearchBasic
     */
    public function setContribution(SearchLongField $contribution) {
        $this->contribution = $contribution;
        return $this;
    }

    /**
     * Get contribution
     *
     * @return SearchLongField
     */
    public function getContribution() {
        return $this->contribution;
    }


    /**
     * Set currency
     *
     * @param SearchMultiSelectField $currency
     * @return OpportunitySearchBasic
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
     * Set custType
     *
     * @param SearchMultiSelectField $custType
     * @return OpportunitySearchBasic
     */
    public function setCustType(SearchMultiSelectField $custType) {
        $this->custType = $custType;
        return $this;
    }

    /**
     * Get custType
     *
     * @return SearchMultiSelectField
     */
    public function getCustType() {
        return $this->custType;
    }


    /**
     * Set dateCreated
     *
     * @param SearchDateField $dateCreated
     * @return OpportunitySearchBasic
     */
    public function setDateCreated(SearchDateField $dateCreated) {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return SearchDateField
     */
    public function getDateCreated() {
        return $this->dateCreated;
    }


    /**
     * Set daysOpen
     *
     * @param SearchLongField $daysOpen
     * @return OpportunitySearchBasic
     */
    public function setDaysOpen(SearchLongField $daysOpen) {
        $this->daysOpen = $daysOpen;
        return $this;
    }

    /**
     * Get daysOpen
     *
     * @return SearchLongField
     */
    public function getDaysOpen() {
        return $this->daysOpen;
    }


    /**
     * Set daysToClose
     *
     * @param SearchLongField $daysToClose
     * @return OpportunitySearchBasic
     */
    public function setDaysToClose(SearchLongField $daysToClose) {
        $this->daysToClose = $daysToClose;
        return $this;
    }

    /**
     * Get daysToClose
     *
     * @return SearchLongField
     */
    public function getDaysToClose() {
        return $this->daysToClose;
    }


    /**
     * Set department
     *
     * @param SearchMultiSelectField $department
     * @return OpportunitySearchBasic
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
     * Set entity
     *
     * @param SearchMultiSelectField $entity
     * @return OpportunitySearchBasic
     */
    public function setEntity(SearchMultiSelectField $entity) {
        $this->entity = $entity;
        return $this;
    }

    /**
     * Get entity
     *
     * @return SearchMultiSelectField
     */
    public function getEntity() {
        return $this->entity;
    }


    /**
     * Set entityStatus
     *
     * @param SearchMultiSelectField $entityStatus
     * @return OpportunitySearchBasic
     */
    public function setEntityStatus(SearchMultiSelectField $entityStatus) {
        $this->entityStatus = $entityStatus;
        return $this;
    }

    /**
     * Get entityStatus
     *
     * @return SearchMultiSelectField
     */
    public function getEntityStatus() {
        return $this->entityStatus;
    }


    /**
     * Set estimatedBudget
     *
     * @param SearchDoubleField $estimatedBudget
     * @return OpportunitySearchBasic
     */
    public function setEstimatedBudget(SearchDoubleField $estimatedBudget) {
        $this->estimatedBudget = $estimatedBudget;
        return $this;
    }

    /**
     * Get estimatedBudget
     *
     * @return SearchDoubleField
     */
    public function getEstimatedBudget() {
        return $this->estimatedBudget;
    }


    /**
     * Set expectedCloseDate
     *
     * @param SearchDateField $expectedCloseDate
     * @return OpportunitySearchBasic
     */
    public function setExpectedCloseDate(SearchDateField $expectedCloseDate) {
        $this->expectedCloseDate = $expectedCloseDate;
        return $this;
    }

    /**
     * Get expectedCloseDate
     *
     * @return SearchDateField
     */
    public function getExpectedCloseDate() {
        return $this->expectedCloseDate;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return OpportunitySearchBasic
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
     * @return OpportunitySearchBasic
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
     * Set forecastType
     *
     * @param SearchEnumMultiSelectField $forecastType
     * @return OpportunitySearchBasic
     */
    public function setForecastType(SearchEnumMultiSelectField $forecastType) {
        $this->forecastType = $forecastType;
        return $this;
    }

    /**
     * Get forecastType
     *
     * @return SearchEnumMultiSelectField
     */
    public function getForecastType() {
        return $this->forecastType;
    }


    /**
     * Set foreignProjectedAmount
     *
     * @param SearchDoubleField $foreignProjectedAmount
     * @return OpportunitySearchBasic
     */
    public function setForeignProjectedAmount(SearchDoubleField $foreignProjectedAmount) {
        $this->foreignProjectedAmount = $foreignProjectedAmount;
        return $this;
    }

    /**
     * Get foreignProjectedAmount
     *
     * @return SearchDoubleField
     */
    public function getForeignProjectedAmount() {
        return $this->foreignProjectedAmount;
    }


    /**
     * Set foreignRangeHigh
     *
     * @param SearchDoubleField $foreignRangeHigh
     * @return OpportunitySearchBasic
     */
    public function setForeignRangeHigh(SearchDoubleField $foreignRangeHigh) {
        $this->foreignRangeHigh = $foreignRangeHigh;
        return $this;
    }

    /**
     * Get foreignRangeHigh
     *
     * @return SearchDoubleField
     */
    public function getForeignRangeHigh() {
        return $this->foreignRangeHigh;
    }


    /**
     * Set foreignRangeLow
     *
     * @param SearchDoubleField $foreignRangeLow
     * @return OpportunitySearchBasic
     */
    public function setForeignRangeLow(SearchDoubleField $foreignRangeLow) {
        $this->foreignRangeLow = $foreignRangeLow;
        return $this;
    }

    /**
     * Get foreignRangeLow
     *
     * @return SearchDoubleField
     */
    public function getForeignRangeLow() {
        return $this->foreignRangeLow;
    }


    /**
     * Set fxTranCostEstimate
     *
     * @param SearchDoubleField $fxTranCostEstimate
     * @return OpportunitySearchBasic
     */
    public function setFxTranCostEstimate(SearchDoubleField $fxTranCostEstimate) {
        $this->fxTranCostEstimate = $fxTranCostEstimate;
        return $this;
    }

    /**
     * Get fxTranCostEstimate
     *
     * @return SearchDoubleField
     */
    public function getFxTranCostEstimate() {
        return $this->fxTranCostEstimate;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return OpportunitySearchBasic
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
     * @return OpportunitySearchBasic
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
     * Set isBudgetApproved
     *
     * @param SearchBooleanField $isBudgetApproved
     * @return OpportunitySearchBasic
     */
    public function setIsBudgetApproved(SearchBooleanField $isBudgetApproved) {
        $this->isBudgetApproved = $isBudgetApproved;
        return $this;
    }

    /**
     * Get isBudgetApproved
     *
     * @return SearchBooleanField
     */
    public function getIsBudgetApproved() {
        return $this->isBudgetApproved;
    }


    /**
     * Set item
     *
     * @param SearchMultiSelectField $item
     * @return OpportunitySearchBasic
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
     * Set lastModifiedDate
     *
     * @param SearchDateField $lastModifiedDate
     * @return OpportunitySearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate) {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * Get lastModifiedDate
     *
     * @return SearchDateField
     */
    public function getLastModifiedDate() {
        return $this->lastModifiedDate;
    }


    /**
     * Set leadSource
     *
     * @param SearchMultiSelectField $leadSource
     * @return OpportunitySearchBasic
     */
    public function setLeadSource(SearchMultiSelectField $leadSource) {
        $this->leadSource = $leadSource;
        return $this;
    }

    /**
     * Get leadSource
     *
     * @return SearchMultiSelectField
     */
    public function getLeadSource() {
        return $this->leadSource;
    }


    /**
     * Set location
     *
     * @param SearchMultiSelectField $location
     * @return OpportunitySearchBasic
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
     * Set memo
     *
     * @param SearchStringField $memo
     * @return OpportunitySearchBasic
     */
    public function setMemo(SearchStringField $memo) {
        $this->memo = $memo;
        return $this;
    }

    /**
     * Get memo
     *
     * @return SearchStringField
     */
    public function getMemo() {
        return $this->memo;
    }


    /**
     * Set number
     *
     * @param SearchLongField $number
     * @return OpportunitySearchBasic
     */
    public function setNumber(SearchLongField $number) {
        $this->number = $number;
        return $this;
    }

    /**
     * Get number
     *
     * @return SearchLongField
     */
    public function getNumber() {
        return $this->number;
    }


    /**
     * Set partner
     *
     * @param SearchMultiSelectField $partner
     * @return OpportunitySearchBasic
     */
    public function setPartner(SearchMultiSelectField $partner) {
        $this->partner = $partner;
        return $this;
    }

    /**
     * Get partner
     *
     * @return SearchMultiSelectField
     */
    public function getPartner() {
        return $this->partner;
    }


    /**
     * Set partnerContribution
     *
     * @param SearchLongField $partnerContribution
     * @return OpportunitySearchBasic
     */
    public function setPartnerContribution(SearchLongField $partnerContribution) {
        $this->partnerContribution = $partnerContribution;
        return $this;
    }

    /**
     * Get partnerContribution
     *
     * @return SearchLongField
     */
    public function getPartnerContribution() {
        return $this->partnerContribution;
    }


    /**
     * Set partnerRole
     *
     * @param SearchMultiSelectField $partnerRole
     * @return OpportunitySearchBasic
     */
    public function setPartnerRole(SearchMultiSelectField $partnerRole) {
        $this->partnerRole = $partnerRole;
        return $this;
    }

    /**
     * Get partnerRole
     *
     * @return SearchMultiSelectField
     */
    public function getPartnerRole() {
        return $this->partnerRole;
    }


    /**
     * Set partnerTeamMember
     *
     * @param SearchMultiSelectField $partnerTeamMember
     * @return OpportunitySearchBasic
     */
    public function setPartnerTeamMember(SearchMultiSelectField $partnerTeamMember) {
        $this->partnerTeamMember = $partnerTeamMember;
        return $this;
    }

    /**
     * Get partnerTeamMember
     *
     * @return SearchMultiSelectField
     */
    public function getPartnerTeamMember() {
        return $this->partnerTeamMember;
    }


    /**
     * Set postingPeriodRelative
     *
     * @param PostingPeriodDate $postingPeriodRelative
     * @return OpportunitySearchBasic
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
     * Set probability
     *
     * @param SearchLongField $probability
     * @return OpportunitySearchBasic
     */
    public function setProbability(SearchLongField $probability) {
        $this->probability = $probability;
        return $this;
    }

    /**
     * Get probability
     *
     * @return SearchLongField
     */
    public function getProbability() {
        return $this->probability;
    }


    /**
     * Set projAltSalesAmt
     *
     * @param SearchDoubleField $projAltSalesAmt
     * @return OpportunitySearchBasic
     */
    public function setProjAltSalesAmt(SearchDoubleField $projAltSalesAmt) {
        $this->projAltSalesAmt = $projAltSalesAmt;
        return $this;
    }

    /**
     * Get projAltSalesAmt
     *
     * @return SearchDoubleField
     */
    public function getProjAltSalesAmt() {
        return $this->projAltSalesAmt;
    }


    /**
     * Set projectedTotal
     *
     * @param SearchDoubleField $projectedTotal
     * @return OpportunitySearchBasic
     */
    public function setProjectedTotal(SearchDoubleField $projectedTotal) {
        $this->projectedTotal = $projectedTotal;
        return $this;
    }

    /**
     * Get projectedTotal
     *
     * @return SearchDoubleField
     */
    public function getProjectedTotal() {
        return $this->projectedTotal;
    }


    /**
     * Set rangeHigh
     *
     * @param SearchDoubleField $rangeHigh
     * @return OpportunitySearchBasic
     */
    public function setRangeHigh(SearchDoubleField $rangeHigh) {
        $this->rangeHigh = $rangeHigh;
        return $this;
    }

    /**
     * Get rangeHigh
     *
     * @return SearchDoubleField
     */
    public function getRangeHigh() {
        return $this->rangeHigh;
    }


    /**
     * Set rangeHighAlt
     *
     * @param SearchDoubleField $rangeHighAlt
     * @return OpportunitySearchBasic
     */
    public function setRangeHighAlt(SearchDoubleField $rangeHighAlt) {
        $this->rangeHighAlt = $rangeHighAlt;
        return $this;
    }

    /**
     * Get rangeHighAlt
     *
     * @return SearchDoubleField
     */
    public function getRangeHighAlt() {
        return $this->rangeHighAlt;
    }


    /**
     * Set rangeLow
     *
     * @param SearchDoubleField $rangeLow
     * @return OpportunitySearchBasic
     */
    public function setRangeLow(SearchDoubleField $rangeLow) {
        $this->rangeLow = $rangeLow;
        return $this;
    }

    /**
     * Get rangeLow
     *
     * @return SearchDoubleField
     */
    public function getRangeLow() {
        return $this->rangeLow;
    }


    /**
     * Set rangeLowAlt
     *
     * @param SearchDoubleField $rangeLowAlt
     * @return OpportunitySearchBasic
     */
    public function setRangeLowAlt(SearchDoubleField $rangeLowAlt) {
        $this->rangeLowAlt = $rangeLowAlt;
        return $this;
    }

    /**
     * Get rangeLowAlt
     *
     * @return SearchDoubleField
     */
    public function getRangeLowAlt() {
        return $this->rangeLowAlt;
    }


    /**
     * Set salesReadiness
     *
     * @param SearchMultiSelectField $salesReadiness
     * @return OpportunitySearchBasic
     */
    public function setSalesReadiness(SearchMultiSelectField $salesReadiness) {
        $this->salesReadiness = $salesReadiness;
        return $this;
    }

    /**
     * Get salesReadiness
     *
     * @return SearchMultiSelectField
     */
    public function getSalesReadiness() {
        return $this->salesReadiness;
    }


    /**
     * Set salesRep
     *
     * @param SearchMultiSelectField $salesRep
     * @return OpportunitySearchBasic
     */
    public function setSalesRep(SearchMultiSelectField $salesRep) {
        $this->salesRep = $salesRep;
        return $this;
    }

    /**
     * Get salesRep
     *
     * @return SearchMultiSelectField
     */
    public function getSalesRep() {
        return $this->salesRep;
    }


    /**
     * Set salesTeamMember
     *
     * @param SearchMultiSelectField $salesTeamMember
     * @return OpportunitySearchBasic
     */
    public function setSalesTeamMember(SearchMultiSelectField $salesTeamMember) {
        $this->salesTeamMember = $salesTeamMember;
        return $this;
    }

    /**
     * Get salesTeamMember
     *
     * @return SearchMultiSelectField
     */
    public function getSalesTeamMember() {
        return $this->salesTeamMember;
    }


    /**
     * Set salesTeamRole
     *
     * @param SearchMultiSelectField $salesTeamRole
     * @return OpportunitySearchBasic
     */
    public function setSalesTeamRole(SearchMultiSelectField $salesTeamRole) {
        $this->salesTeamRole = $salesTeamRole;
        return $this;
    }

    /**
     * Get salesTeamRole
     *
     * @return SearchMultiSelectField
     */
    public function getSalesTeamRole() {
        return $this->salesTeamRole;
    }


    /**
     * Set status
     *
     * @param SearchEnumMultiSelectField $status
     * @return OpportunitySearchBasic
     */
    public function setStatus(SearchEnumMultiSelectField $status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return SearchEnumMultiSelectField
     */
    public function getStatus() {
        return $this->status;
    }


    /**
     * Set subsidiary
     *
     * @param SearchMultiSelectField $subsidiary
     * @return OpportunitySearchBasic
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
     * Set taxPeriodRelative
     *
     * @param PostingPeriodDate $taxPeriodRelative
     * @return OpportunitySearchBasic
     */
    public function setTaxPeriodRelative(PostingPeriodDate $taxPeriodRelative) {
        $this->taxPeriodRelative = $taxPeriodRelative;
        return $this;
    }

    /**
     * Get taxPeriodRelative
     *
     * @return PostingPeriodDate
     */
    public function getTaxPeriodRelative() {
        return $this->taxPeriodRelative;
    }


    /**
     * Set title
     *
     * @param SearchStringField $title
     * @return OpportunitySearchBasic
     */
    public function setTitle(SearchStringField $title) {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return SearchStringField
     */
    public function getTitle() {
        return $this->title;
    }


    /**
     * Set tranCostEstimate
     *
     * @param SearchDoubleField $tranCostEstimate
     * @return OpportunitySearchBasic
     */
    public function setTranCostEstimate(SearchDoubleField $tranCostEstimate) {
        $this->tranCostEstimate = $tranCostEstimate;
        return $this;
    }

    /**
     * Get tranCostEstimate
     *
     * @return SearchDoubleField
     */
    public function getTranCostEstimate() {
        return $this->tranCostEstimate;
    }


    /**
     * Set tranDate
     *
     * @param SearchDateField $tranDate
     * @return OpportunitySearchBasic
     */
    public function setTranDate(SearchDateField $tranDate) {
        $this->tranDate = $tranDate;
        return $this;
    }

    /**
     * Get tranDate
     *
     * @return SearchDateField
     */
    public function getTranDate() {
        return $this->tranDate;
    }


    /**
     * Set tranEstGrossProfit
     *
     * @param SearchDoubleField $tranEstGrossProfit
     * @return OpportunitySearchBasic
     */
    public function setTranEstGrossProfit(SearchDoubleField $tranEstGrossProfit) {
        $this->tranEstGrossProfit = $tranEstGrossProfit;
        return $this;
    }

    /**
     * Get tranEstGrossProfit
     *
     * @return SearchDoubleField
     */
    public function getTranEstGrossProfit() {
        return $this->tranEstGrossProfit;
    }


    /**
     * Set tranEstGrossProfitPct
     *
     * @param SearchDoubleField $tranEstGrossProfitPct
     * @return OpportunitySearchBasic
     */
    public function setTranEstGrossProfitPct(SearchDoubleField $tranEstGrossProfitPct) {
        $this->tranEstGrossProfitPct = $tranEstGrossProfitPct;
        return $this;
    }

    /**
     * Get tranEstGrossProfitPct
     *
     * @return SearchDoubleField
     */
    public function getTranEstGrossProfitPct() {
        return $this->tranEstGrossProfitPct;
    }


    /**
     * Set tranFxEstGrossProfit
     *
     * @param SearchDoubleField $tranFxEstGrossProfit
     * @return OpportunitySearchBasic
     */
    public function setTranFxEstGrossProfit(SearchDoubleField $tranFxEstGrossProfit) {
        $this->tranFxEstGrossProfit = $tranFxEstGrossProfit;
        return $this;
    }

    /**
     * Get tranFxEstGrossProfit
     *
     * @return SearchDoubleField
     */
    public function getTranFxEstGrossProfit() {
        return $this->tranFxEstGrossProfit;
    }


    /**
     * Set tranId
     *
     * @param SearchStringField $tranId
     * @return OpportunitySearchBasic
     */
    public function setTranId(SearchStringField $tranId) {
        $this->tranId = $tranId;
        return $this;
    }

    /**
     * Get tranId
     *
     * @return SearchStringField
     */
    public function getTranId() {
        return $this->tranId;
    }


    /**
     * Set winLossReason
     *
     * @param SearchMultiSelectField $winLossReason
     * @return OpportunitySearchBasic
     */
    public function setWinLossReason(SearchMultiSelectField $winLossReason) {
        $this->winLossReason = $winLossReason;
        return $this;
    }

    /**
     * Get winLossReason
     *
     * @return SearchMultiSelectField
     */
    public function getWinLossReason() {
        return $this->winLossReason;
    }


    /**
     * Set wonBy
     *
     * @param SearchMultiSelectField $wonBy
     * @return OpportunitySearchBasic
     */
    public function setWonBy(SearchMultiSelectField $wonBy) {
        $this->wonBy = $wonBy;
        return $this;
    }

    /**
     * Get wonBy
     *
     * @return SearchMultiSelectField
     */
    public function getWonBy() {
        return $this->wonBy;
    }


    /**
     * Set customFieldList
     *
     * @param SearchCustomFieldList $customFieldList
     * @return OpportunitySearchBasic
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