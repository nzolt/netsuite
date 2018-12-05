<?php

namespace Nzolt\NetSuite;

class OpportunitySearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchDoubleField $amount
     */
    protected $amount = null;

    /**
     * @var SearchBooleanField $availableOffline
     */
    protected $availableOffline = null;

    /**
     * @var SearchMultiSelectField $buyingReason
     */
    protected $buyingReason = null;

    /**
     * @var SearchMultiSelectField $buyingTimeFrame
     */
    protected $buyingTimeFrame = null;

    /**
     * @var SearchMultiSelectField $class
     */
    protected $class = null;

    /**
     * @var SearchDateField $closeDate
     */
    protected $closeDate = null;

    /**
     * @var SearchMultiSelectField $competitor
     */
    protected $competitor = null;

    /**
     * @var SearchLongField $contribution
     */
    protected $contribution = null;

    /**
     * @var SearchMultiSelectField $currency
     */
    protected $currency = null;

    /**
     * @var SearchMultiSelectField $custType
     */
    protected $custType = null;

    /**
     * @var SearchDateField $dateCreated
     */
    protected $dateCreated = null;

    /**
     * @var SearchLongField $daysOpen
     */
    protected $daysOpen = null;

    /**
     * @var SearchLongField $daysToClose
     */
    protected $daysToClose = null;

    /**
     * @var SearchMultiSelectField $department
     */
    protected $department = null;

    /**
     * @var SearchMultiSelectField $entity
     */
    protected $entity = null;

    /**
     * @var SearchMultiSelectField $entityStatus
     */
    protected $entityStatus = null;

    /**
     * @var SearchDoubleField $estimatedBudget
     */
    protected $estimatedBudget = null;

    /**
     * @var SearchDateField $expectedCloseDate
     */
    protected $expectedCloseDate = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchEnumMultiSelectField $forecastType
     */
    protected $forecastType = null;

    /**
     * @var SearchDoubleField $foreignProjectedAmount
     */
    protected $foreignProjectedAmount = null;

    /**
     * @var SearchDoubleField $foreignRangeHigh
     */
    protected $foreignRangeHigh = null;

    /**
     * @var SearchDoubleField $foreignRangeLow
     */
    protected $foreignRangeLow = null;

    /**
     * @var SearchDoubleField $fxTranCostEstimate
     */
    protected $fxTranCostEstimate = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchBooleanField $isBudgetApproved
     */
    protected $isBudgetApproved = null;

    /**
     * @var SearchMultiSelectField $item
     */
    protected $item = null;

    /**
     * @var SearchDateField $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchMultiSelectField $leadSource
     */
    protected $leadSource = null;

    /**
     * @var SearchMultiSelectField $location
     */
    protected $location = null;

    /**
     * @var SearchStringField $memo
     */
    protected $memo = null;

    /**
     * @var SearchLongField $number
     */
    protected $number = null;

    /**
     * @var SearchMultiSelectField $partner
     */
    protected $partner = null;

    /**
     * @var SearchLongField $partnerContribution
     */
    protected $partnerContribution = null;

    /**
     * @var SearchMultiSelectField $partnerRole
     */
    protected $partnerRole = null;

    /**
     * @var SearchMultiSelectField $partnerTeamMember
     */
    protected $partnerTeamMember = null;

    /**
     * @var RecordRef $postingPeriod
     */
    protected $postingPeriod = null;

    /**
     * @var PostingPeriodDate $postingPeriodRelative
     */
    protected $postingPeriodRelative = null;

    /**
     * @var SearchLongField $probability
     */
    protected $probability = null;

    /**
     * @var SearchDoubleField $projAltSalesAmt
     */
    protected $projAltSalesAmt = null;

    /**
     * @var SearchDoubleField $projectedTotal
     */
    protected $projectedTotal = null;

    /**
     * @var SearchDoubleField $rangeHigh
     */
    protected $rangeHigh = null;

    /**
     * @var SearchDoubleField $rangeHighAlt
     */
    protected $rangeHighAlt = null;

    /**
     * @var SearchDoubleField $rangeLow
     */
    protected $rangeLow = null;

    /**
     * @var SearchDoubleField $rangeLowAlt
     */
    protected $rangeLowAlt = null;

    /**
     * @var SearchMultiSelectField $salesReadiness
     */
    protected $salesReadiness = null;

    /**
     * @var SearchMultiSelectField $salesRep
     */
    protected $salesRep = null;

    /**
     * @var SearchMultiSelectField $salesTeamMember
     */
    protected $salesTeamMember = null;

    /**
     * @var SearchMultiSelectField $salesTeamRole
     */
    protected $salesTeamRole = null;

    /**
     * @var SearchEnumMultiSelectField $status
     */
    protected $status = null;

    /**
     * @var SearchMultiSelectField $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var RecordRef $taxPeriod
     */
    protected $taxPeriod = null;

    /**
     * @var PostingPeriodDate $taxPeriodRelative
     */
    protected $taxPeriodRelative = null;

    /**
     * @var SearchStringField $title
     */
    protected $title = null;

    /**
     * @var SearchDoubleField $tranCostEstimate
     */
    protected $tranCostEstimate = null;

    /**
     * @var SearchDateField $tranDate
     */
    protected $tranDate = null;

    /**
     * @var SearchDoubleField $tranEstGrossProfit
     */
    protected $tranEstGrossProfit = null;

    /**
     * @var SearchDoubleField $tranEstGrossProfitPct
     */
    protected $tranEstGrossProfitPct = null;

    /**
     * @var SearchDoubleField $tranFxEstGrossProfit
     */
    protected $tranFxEstGrossProfit = null;

    /**
     * @var SearchStringField $tranId
     */
    protected $tranId = null;

    /**
     * @var SearchMultiSelectField $winLossReason
     */
    protected $winLossReason = null;

    /**
     * @var SearchMultiSelectField $wonBy
     */
    protected $wonBy = null;

    /**
     * @var SearchCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchDoubleField
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param SearchDoubleField $amount
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAvailableOffline()
    {
      return $this->availableOffline;
    }

    /**
     * @param SearchBooleanField $availableOffline
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setAvailableOffline($availableOffline)
    {
      $this->availableOffline = $availableOffline;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBuyingReason()
    {
      return $this->buyingReason;
    }

    /**
     * @param SearchMultiSelectField $buyingReason
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setBuyingReason($buyingReason)
    {
      $this->buyingReason = $buyingReason;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBuyingTimeFrame()
    {
      return $this->buyingTimeFrame;
    }

    /**
     * @param SearchMultiSelectField $buyingTimeFrame
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setBuyingTimeFrame($buyingTimeFrame)
    {
      $this->buyingTimeFrame = $buyingTimeFrame;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param SearchMultiSelectField $class
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCloseDate()
    {
      return $this->closeDate;
    }

    /**
     * @param SearchDateField $closeDate
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setCloseDate($closeDate)
    {
      $this->closeDate = $closeDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCompetitor()
    {
      return $this->competitor;
    }

    /**
     * @param SearchMultiSelectField $competitor
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setCompetitor($competitor)
    {
      $this->competitor = $competitor;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getContribution()
    {
      return $this->contribution;
    }

    /**
     * @param SearchLongField $contribution
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setContribution($contribution)
    {
      $this->contribution = $contribution;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param SearchMultiSelectField $currency
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCustType()
    {
      return $this->custType;
    }

    /**
     * @param SearchMultiSelectField $custType
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setCustType($custType)
    {
      $this->custType = $custType;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDateCreated()
    {
      return $this->dateCreated;
    }

    /**
     * @param SearchDateField $dateCreated
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setDateCreated($dateCreated)
    {
      $this->dateCreated = $dateCreated;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getDaysOpen()
    {
      return $this->daysOpen;
    }

    /**
     * @param SearchLongField $daysOpen
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setDaysOpen($daysOpen)
    {
      $this->daysOpen = $daysOpen;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getDaysToClose()
    {
      return $this->daysToClose;
    }

    /**
     * @param SearchLongField $daysToClose
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setDaysToClose($daysToClose)
    {
      $this->daysToClose = $daysToClose;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param SearchMultiSelectField $department
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setDepartment($department)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEntity()
    {
      return $this->entity;
    }

    /**
     * @param SearchMultiSelectField $entity
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEntityStatus()
    {
      return $this->entityStatus;
    }

    /**
     * @param SearchMultiSelectField $entityStatus
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setEntityStatus($entityStatus)
    {
      $this->entityStatus = $entityStatus;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedBudget()
    {
      return $this->estimatedBudget;
    }

    /**
     * @param SearchDoubleField $estimatedBudget
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setEstimatedBudget($estimatedBudget)
    {
      $this->estimatedBudget = $estimatedBudget;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getExpectedCloseDate()
    {
      return $this->expectedCloseDate;
    }

    /**
     * @param SearchDateField $expectedCloseDate
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setExpectedCloseDate($expectedCloseDate)
    {
      $this->expectedCloseDate = $expectedCloseDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString()
    {
      return $this->externalIdString;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getForecastType()
    {
      return $this->forecastType;
    }

    /**
     * @param SearchEnumMultiSelectField $forecastType
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setForecastType($forecastType)
    {
      $this->forecastType = $forecastType;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getForeignProjectedAmount()
    {
      return $this->foreignProjectedAmount;
    }

    /**
     * @param SearchDoubleField $foreignProjectedAmount
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setForeignProjectedAmount($foreignProjectedAmount)
    {
      $this->foreignProjectedAmount = $foreignProjectedAmount;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getForeignRangeHigh()
    {
      return $this->foreignRangeHigh;
    }

    /**
     * @param SearchDoubleField $foreignRangeHigh
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setForeignRangeHigh($foreignRangeHigh)
    {
      $this->foreignRangeHigh = $foreignRangeHigh;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getForeignRangeLow()
    {
      return $this->foreignRangeLow;
    }

    /**
     * @param SearchDoubleField $foreignRangeLow
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setForeignRangeLow($foreignRangeLow)
    {
      $this->foreignRangeLow = $foreignRangeLow;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxTranCostEstimate()
    {
      return $this->fxTranCostEstimate;
    }

    /**
     * @param SearchDoubleField $fxTranCostEstimate
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setFxTranCostEstimate($fxTranCostEstimate)
    {
      $this->fxTranCostEstimate = $fxTranCostEstimate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber()
    {
      return $this->internalIdNumber;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsBudgetApproved()
    {
      return $this->isBudgetApproved;
    }

    /**
     * @param SearchBooleanField $isBudgetApproved
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setIsBudgetApproved($isBudgetApproved)
    {
      $this->isBudgetApproved = $isBudgetApproved;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SearchMultiSelectField $item
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastModifiedDate()
    {
      return $this->lastModifiedDate;
    }

    /**
     * @param SearchDateField $lastModifiedDate
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setLastModifiedDate($lastModifiedDate)
    {
      $this->lastModifiedDate = $lastModifiedDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLeadSource()
    {
      return $this->leadSource;
    }

    /**
     * @param SearchMultiSelectField $leadSource
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setLeadSource($leadSource)
    {
      $this->leadSource = $leadSource;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param SearchMultiSelectField $location
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMemo()
    {
      return $this->memo;
    }

    /**
     * @param SearchStringField $memo
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param SearchLongField $number
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPartner()
    {
      return $this->partner;
    }

    /**
     * @param SearchMultiSelectField $partner
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setPartner($partner)
    {
      $this->partner = $partner;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getPartnerContribution()
    {
      return $this->partnerContribution;
    }

    /**
     * @param SearchLongField $partnerContribution
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setPartnerContribution($partnerContribution)
    {
      $this->partnerContribution = $partnerContribution;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPartnerRole()
    {
      return $this->partnerRole;
    }

    /**
     * @param SearchMultiSelectField $partnerRole
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setPartnerRole($partnerRole)
    {
      $this->partnerRole = $partnerRole;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPartnerTeamMember()
    {
      return $this->partnerTeamMember;
    }

    /**
     * @param SearchMultiSelectField $partnerTeamMember
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setPartnerTeamMember($partnerTeamMember)
    {
      $this->partnerTeamMember = $partnerTeamMember;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPostingPeriod()
    {
      return $this->postingPeriod;
    }

    /**
     * @param RecordRef $postingPeriod
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setPostingPeriod($postingPeriod)
    {
      $this->postingPeriod = $postingPeriod;
      return $this;
    }

    /**
     * @return PostingPeriodDate
     */
    public function getPostingPeriodRelative()
    {
      return $this->postingPeriodRelative;
    }

    /**
     * @param PostingPeriodDate $postingPeriodRelative
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setPostingPeriodRelative($postingPeriodRelative)
    {
      $this->postingPeriodRelative = $postingPeriodRelative;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getProbability()
    {
      return $this->probability;
    }

    /**
     * @param SearchLongField $probability
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setProbability($probability)
    {
      $this->probability = $probability;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getProjAltSalesAmt()
    {
      return $this->projAltSalesAmt;
    }

    /**
     * @param SearchDoubleField $projAltSalesAmt
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setProjAltSalesAmt($projAltSalesAmt)
    {
      $this->projAltSalesAmt = $projAltSalesAmt;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getProjectedTotal()
    {
      return $this->projectedTotal;
    }

    /**
     * @param SearchDoubleField $projectedTotal
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setProjectedTotal($projectedTotal)
    {
      $this->projectedTotal = $projectedTotal;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRangeHigh()
    {
      return $this->rangeHigh;
    }

    /**
     * @param SearchDoubleField $rangeHigh
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setRangeHigh($rangeHigh)
    {
      $this->rangeHigh = $rangeHigh;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRangeHighAlt()
    {
      return $this->rangeHighAlt;
    }

    /**
     * @param SearchDoubleField $rangeHighAlt
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setRangeHighAlt($rangeHighAlt)
    {
      $this->rangeHighAlt = $rangeHighAlt;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRangeLow()
    {
      return $this->rangeLow;
    }

    /**
     * @param SearchDoubleField $rangeLow
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setRangeLow($rangeLow)
    {
      $this->rangeLow = $rangeLow;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRangeLowAlt()
    {
      return $this->rangeLowAlt;
    }

    /**
     * @param SearchDoubleField $rangeLowAlt
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setRangeLowAlt($rangeLowAlt)
    {
      $this->rangeLowAlt = $rangeLowAlt;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSalesReadiness()
    {
      return $this->salesReadiness;
    }

    /**
     * @param SearchMultiSelectField $salesReadiness
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setSalesReadiness($salesReadiness)
    {
      $this->salesReadiness = $salesReadiness;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSalesRep()
    {
      return $this->salesRep;
    }

    /**
     * @param SearchMultiSelectField $salesRep
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setSalesRep($salesRep)
    {
      $this->salesRep = $salesRep;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSalesTeamMember()
    {
      return $this->salesTeamMember;
    }

    /**
     * @param SearchMultiSelectField $salesTeamMember
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setSalesTeamMember($salesTeamMember)
    {
      $this->salesTeamMember = $salesTeamMember;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSalesTeamRole()
    {
      return $this->salesTeamRole;
    }

    /**
     * @param SearchMultiSelectField $salesTeamRole
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setSalesTeamRole($salesTeamRole)
    {
      $this->salesTeamRole = $salesTeamRole;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param SearchEnumMultiSelectField $status
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxPeriod()
    {
      return $this->taxPeriod;
    }

    /**
     * @param RecordRef $taxPeriod
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setTaxPeriod($taxPeriod)
    {
      $this->taxPeriod = $taxPeriod;
      return $this;
    }

    /**
     * @return PostingPeriodDate
     */
    public function getTaxPeriodRelative()
    {
      return $this->taxPeriodRelative;
    }

    /**
     * @param PostingPeriodDate $taxPeriodRelative
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setTaxPeriodRelative($taxPeriodRelative)
    {
      $this->taxPeriodRelative = $taxPeriodRelative;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param SearchStringField $title
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTranCostEstimate()
    {
      return $this->tranCostEstimate;
    }

    /**
     * @param SearchDoubleField $tranCostEstimate
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setTranCostEstimate($tranCostEstimate)
    {
      $this->tranCostEstimate = $tranCostEstimate;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getTranDate()
    {
      return $this->tranDate;
    }

    /**
     * @param SearchDateField $tranDate
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setTranDate($tranDate)
    {
      $this->tranDate = $tranDate;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTranEstGrossProfit()
    {
      return $this->tranEstGrossProfit;
    }

    /**
     * @param SearchDoubleField $tranEstGrossProfit
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setTranEstGrossProfit($tranEstGrossProfit)
    {
      $this->tranEstGrossProfit = $tranEstGrossProfit;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTranEstGrossProfitPct()
    {
      return $this->tranEstGrossProfitPct;
    }

    /**
     * @param SearchDoubleField $tranEstGrossProfitPct
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setTranEstGrossProfitPct($tranEstGrossProfitPct)
    {
      $this->tranEstGrossProfitPct = $tranEstGrossProfitPct;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTranFxEstGrossProfit()
    {
      return $this->tranFxEstGrossProfit;
    }

    /**
     * @param SearchDoubleField $tranFxEstGrossProfit
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setTranFxEstGrossProfit($tranFxEstGrossProfit)
    {
      $this->tranFxEstGrossProfit = $tranFxEstGrossProfit;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTranId()
    {
      return $this->tranId;
    }

    /**
     * @param SearchStringField $tranId
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setTranId($tranId)
    {
      $this->tranId = $tranId;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getWinLossReason()
    {
      return $this->winLossReason;
    }

    /**
     * @param SearchMultiSelectField $winLossReason
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setWinLossReason($winLossReason)
    {
      $this->winLossReason = $winLossReason;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getWonBy()
    {
      return $this->wonBy;
    }

    /**
     * @param SearchMultiSelectField $wonBy
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setWonBy($wonBy)
    {
      $this->wonBy = $wonBy;
      return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\OpportunitySearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
