<?php

namespace Nzolt\NetSuite;

class OpportunitySearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnStringField[] $actionItem
     */
    protected $actionItem = null;

    /**
     * @var SearchColumnBooleanField[] $availableOffline
     */
    protected $availableOffline = null;

    /**
     * @var SearchColumnStringField[] $buyingReason
     */
    protected $buyingReason = null;

    /**
     * @var SearchColumnStringField[] $buyingTimeFrame
     */
    protected $buyingTimeFrame = null;

    /**
     * @var SearchColumnSelectField[] $class
     */
    protected $class = null;

    /**
     * @var SearchColumnDateField[] $closeDate
     */
    protected $closeDate = null;

    /**
     * @var SearchColumnSelectField[] $competitor
     */
    protected $competitor = null;

    /**
     * @var SearchColumnDoubleField[] $contribution
     */
    protected $contribution = null;

    /**
     * @var SearchColumnDoubleField[] $contributionPrimary
     */
    protected $contributionPrimary = null;

    /**
     * @var SearchColumnSelectField[] $currency
     */
    protected $currency = null;

    /**
     * @var SearchColumnStringField[] $custType
     */
    protected $custType = null;

    /**
     * @var SearchColumnDateField[] $dateCreated
     */
    protected $dateCreated = null;

    /**
     * @var SearchColumnLongField[] $daysOpen
     */
    protected $daysOpen = null;

    /**
     * @var SearchColumnLongField[] $daysToClose
     */
    protected $daysToClose = null;

    /**
     * @var SearchColumnSelectField[] $decisionMaker
     */
    protected $decisionMaker = null;

    /**
     * @var SearchColumnSelectField[] $department
     */
    protected $department = null;

    /**
     * @var SearchColumnEnumSelectField[] $status
     */
    protected $status = null;

    /**
     * @var SearchColumnSelectField[] $entity
     */
    protected $entity = null;

    /**
     * @var SearchColumnSelectField[] $entityStatus
     */
    protected $entityStatus = null;

    /**
     * @var SearchColumnDoubleField[] $estimatedBudget
     */
    protected $estimatedBudget = null;

    /**
     * @var SearchColumnDateField[] $expectedCloseDate
     */
    protected $expectedCloseDate = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnEnumSelectField[] $forecastType
     */
    protected $forecastType = null;

    /**
     * @var SearchColumnDoubleField[] $foreignProjectedAmount
     */
    protected $foreignProjectedAmount = null;

    /**
     * @var SearchColumnDoubleField[] $foreignRangeHigh
     */
    protected $foreignRangeHigh = null;

    /**
     * @var SearchColumnDoubleField[] $foreignRangeLow
     */
    protected $foreignRangeLow = null;

    /**
     * @var SearchColumnDoubleField[] $fxTranCostEstimate
     */
    protected $fxTranCostEstimate = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $isBudgetApproved
     */
    protected $isBudgetApproved = null;

    /**
     * @var SearchColumnDateField[] $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchColumnSelectField[] $leadSource
     */
    protected $leadSource = null;

    /**
     * @var SearchColumnSelectField[] $location
     */
    protected $location = null;

    /**
     * @var SearchColumnStringField[] $memo
     */
    protected $memo = null;

    /**
     * @var SearchColumnSelectField[] $partner
     */
    protected $partner = null;

    /**
     * @var SearchColumnDoubleField[] $partnerContribution
     */
    protected $partnerContribution = null;

    /**
     * @var SearchColumnSelectField[] $partnerRole
     */
    protected $partnerRole = null;

    /**
     * @var SearchColumnSelectField[] $partnerTeamMember
     */
    protected $partnerTeamMember = null;

    /**
     * @var SearchColumnStringField[] $period
     */
    protected $period = null;

    /**
     * @var SearchColumnDoubleField[] $probability
     */
    protected $probability = null;

    /**
     * @var SearchColumnDoubleField[] $projAltSalesAmt
     */
    protected $projAltSalesAmt = null;

    /**
     * @var SearchColumnDoubleField[] $projectedTotal
     */
    protected $projectedTotal = null;

    /**
     * @var SearchColumnDoubleField[] $rangeHigh
     */
    protected $rangeHigh = null;

    /**
     * @var SearchColumnDoubleField[] $rangeHighAlt
     */
    protected $rangeHighAlt = null;

    /**
     * @var SearchColumnDoubleField[] $rangeLow
     */
    protected $rangeLow = null;

    /**
     * @var SearchColumnDoubleField[] $rangeLowAlt
     */
    protected $rangeLowAlt = null;

    /**
     * @var SearchColumnStringField[] $salesReadiness
     */
    protected $salesReadiness = null;

    /**
     * @var SearchColumnSelectField[] $salesRep
     */
    protected $salesRep = null;

    /**
     * @var SearchColumnSelectField[] $salesTeamMember
     */
    protected $salesTeamMember = null;

    /**
     * @var SearchColumnSelectField[] $salesTeamRole
     */
    protected $salesTeamRole = null;

    /**
     * @var SearchColumnSelectField[] $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchColumnSelectField[] $taxPeriod
     */
    protected $taxPeriod = null;

    /**
     * @var SearchColumnStringField[] $title
     */
    protected $title = null;

    /**
     * @var SearchColumnDoubleField[] $total
     */
    protected $total = null;

    /**
     * @var SearchColumnDoubleField[] $tranCostEstimate
     */
    protected $tranCostEstimate = null;

    /**
     * @var SearchColumnDateField[] $tranDate
     */
    protected $tranDate = null;

    /**
     * @var SearchColumnDoubleField[] $tranEstGrossProfit
     */
    protected $tranEstGrossProfit = null;

    /**
     * @var SearchColumnDoubleField[] $tranEstGrossProfitPct
     */
    protected $tranEstGrossProfitPct = null;

    /**
     * @var SearchColumnDoubleField[] $tranFxEstGrossProfit
     */
    protected $tranFxEstGrossProfit = null;

    /**
     * @var SearchColumnStringField[] $tranId
     */
    protected $tranId = null;

    /**
     * @var SearchColumnDoubleField[] $weightedTotal
     */
    protected $weightedTotal = null;

    /**
     * @var SearchColumnSelectField[] $winLossReason
     */
    protected $winLossReason = null;

    /**
     * @var SearchColumnSelectField[] $wonBy
     */
    protected $wonBy = null;

    /**
     * @var SearchColumnCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getActionItem()
    {
      return $this->actionItem;
    }

    /**
     * @param SearchColumnStringField[] $actionItem
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setActionItem(array $actionItem = null)
    {
      $this->actionItem = $actionItem;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAvailableOffline()
    {
      return $this->availableOffline;
    }

    /**
     * @param SearchColumnBooleanField[] $availableOffline
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setAvailableOffline(array $availableOffline = null)
    {
      $this->availableOffline = $availableOffline;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBuyingReason()
    {
      return $this->buyingReason;
    }

    /**
     * @param SearchColumnStringField[] $buyingReason
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setBuyingReason(array $buyingReason = null)
    {
      $this->buyingReason = $buyingReason;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBuyingTimeFrame()
    {
      return $this->buyingTimeFrame;
    }

    /**
     * @param SearchColumnStringField[] $buyingTimeFrame
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setBuyingTimeFrame(array $buyingTimeFrame = null)
    {
      $this->buyingTimeFrame = $buyingTimeFrame;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param SearchColumnSelectField[] $class
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setClass(array $class = null)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCloseDate()
    {
      return $this->closeDate;
    }

    /**
     * @param SearchColumnDateField[] $closeDate
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setCloseDate(array $closeDate = null)
    {
      $this->closeDate = $closeDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCompetitor()
    {
      return $this->competitor;
    }

    /**
     * @param SearchColumnSelectField[] $competitor
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setCompetitor(array $competitor = null)
    {
      $this->competitor = $competitor;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getContribution()
    {
      return $this->contribution;
    }

    /**
     * @param SearchColumnDoubleField[] $contribution
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setContribution(array $contribution = null)
    {
      $this->contribution = $contribution;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getContributionPrimary()
    {
      return $this->contributionPrimary;
    }

    /**
     * @param SearchColumnDoubleField[] $contributionPrimary
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setContributionPrimary(array $contributionPrimary = null)
    {
      $this->contributionPrimary = $contributionPrimary;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param SearchColumnSelectField[] $currency
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setCurrency(array $currency = null)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCustType()
    {
      return $this->custType;
    }

    /**
     * @param SearchColumnStringField[] $custType
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setCustType(array $custType = null)
    {
      $this->custType = $custType;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDateCreated()
    {
      return $this->dateCreated;
    }

    /**
     * @param SearchColumnDateField[] $dateCreated
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setDateCreated(array $dateCreated = null)
    {
      $this->dateCreated = $dateCreated;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getDaysOpen()
    {
      return $this->daysOpen;
    }

    /**
     * @param SearchColumnLongField[] $daysOpen
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setDaysOpen(array $daysOpen = null)
    {
      $this->daysOpen = $daysOpen;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getDaysToClose()
    {
      return $this->daysToClose;
    }

    /**
     * @param SearchColumnLongField[] $daysToClose
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setDaysToClose(array $daysToClose = null)
    {
      $this->daysToClose = $daysToClose;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDecisionMaker()
    {
      return $this->decisionMaker;
    }

    /**
     * @param SearchColumnSelectField[] $decisionMaker
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setDecisionMaker(array $decisionMaker = null)
    {
      $this->decisionMaker = $decisionMaker;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param SearchColumnSelectField[] $department
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setDepartment(array $department = null)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param SearchColumnEnumSelectField[] $status
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setStatus(array $status = null)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getEntity()
    {
      return $this->entity;
    }

    /**
     * @param SearchColumnSelectField[] $entity
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setEntity(array $entity = null)
    {
      $this->entity = $entity;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getEntityStatus()
    {
      return $this->entityStatus;
    }

    /**
     * @param SearchColumnSelectField[] $entityStatus
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setEntityStatus(array $entityStatus = null)
    {
      $this->entityStatus = $entityStatus;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedBudget()
    {
      return $this->estimatedBudget;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedBudget
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setEstimatedBudget(array $estimatedBudget = null)
    {
      $this->estimatedBudget = $estimatedBudget;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getExpectedCloseDate()
    {
      return $this->expectedCloseDate;
    }

    /**
     * @param SearchColumnDateField[] $expectedCloseDate
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setExpectedCloseDate(array $expectedCloseDate = null)
    {
      $this->expectedCloseDate = $expectedCloseDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getForecastType()
    {
      return $this->forecastType;
    }

    /**
     * @param SearchColumnEnumSelectField[] $forecastType
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setForecastType(array $forecastType = null)
    {
      $this->forecastType = $forecastType;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getForeignProjectedAmount()
    {
      return $this->foreignProjectedAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $foreignProjectedAmount
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setForeignProjectedAmount(array $foreignProjectedAmount = null)
    {
      $this->foreignProjectedAmount = $foreignProjectedAmount;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getForeignRangeHigh()
    {
      return $this->foreignRangeHigh;
    }

    /**
     * @param SearchColumnDoubleField[] $foreignRangeHigh
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setForeignRangeHigh(array $foreignRangeHigh = null)
    {
      $this->foreignRangeHigh = $foreignRangeHigh;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getForeignRangeLow()
    {
      return $this->foreignRangeLow;
    }

    /**
     * @param SearchColumnDoubleField[] $foreignRangeLow
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setForeignRangeLow(array $foreignRangeLow = null)
    {
      $this->foreignRangeLow = $foreignRangeLow;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxTranCostEstimate()
    {
      return $this->fxTranCostEstimate;
    }

    /**
     * @param SearchColumnDoubleField[] $fxTranCostEstimate
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setFxTranCostEstimate(array $fxTranCostEstimate = null)
    {
      $this->fxTranCostEstimate = $fxTranCostEstimate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsBudgetApproved()
    {
      return $this->isBudgetApproved;
    }

    /**
     * @param SearchColumnBooleanField[] $isBudgetApproved
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setIsBudgetApproved(array $isBudgetApproved = null)
    {
      $this->isBudgetApproved = $isBudgetApproved;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastModifiedDate()
    {
      return $this->lastModifiedDate;
    }

    /**
     * @param SearchColumnDateField[] $lastModifiedDate
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setLastModifiedDate(array $lastModifiedDate = null)
    {
      $this->lastModifiedDate = $lastModifiedDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLeadSource()
    {
      return $this->leadSource;
    }

    /**
     * @param SearchColumnSelectField[] $leadSource
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setLeadSource(array $leadSource = null)
    {
      $this->leadSource = $leadSource;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param SearchColumnSelectField[] $location
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setLocation(array $location = null)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMemo()
    {
      return $this->memo;
    }

    /**
     * @param SearchColumnStringField[] $memo
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setMemo(array $memo = null)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPartner()
    {
      return $this->partner;
    }

    /**
     * @param SearchColumnSelectField[] $partner
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setPartner(array $partner = null)
    {
      $this->partner = $partner;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPartnerContribution()
    {
      return $this->partnerContribution;
    }

    /**
     * @param SearchColumnDoubleField[] $partnerContribution
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setPartnerContribution(array $partnerContribution = null)
    {
      $this->partnerContribution = $partnerContribution;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPartnerRole()
    {
      return $this->partnerRole;
    }

    /**
     * @param SearchColumnSelectField[] $partnerRole
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setPartnerRole(array $partnerRole = null)
    {
      $this->partnerRole = $partnerRole;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPartnerTeamMember()
    {
      return $this->partnerTeamMember;
    }

    /**
     * @param SearchColumnSelectField[] $partnerTeamMember
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setPartnerTeamMember(array $partnerTeamMember = null)
    {
      $this->partnerTeamMember = $partnerTeamMember;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPeriod()
    {
      return $this->period;
    }

    /**
     * @param SearchColumnStringField[] $period
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setPeriod(array $period = null)
    {
      $this->period = $period;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getProbability()
    {
      return $this->probability;
    }

    /**
     * @param SearchColumnDoubleField[] $probability
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setProbability(array $probability = null)
    {
      $this->probability = $probability;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getProjAltSalesAmt()
    {
      return $this->projAltSalesAmt;
    }

    /**
     * @param SearchColumnDoubleField[] $projAltSalesAmt
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setProjAltSalesAmt(array $projAltSalesAmt = null)
    {
      $this->projAltSalesAmt = $projAltSalesAmt;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getProjectedTotal()
    {
      return $this->projectedTotal;
    }

    /**
     * @param SearchColumnDoubleField[] $projectedTotal
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setProjectedTotal(array $projectedTotal = null)
    {
      $this->projectedTotal = $projectedTotal;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRangeHigh()
    {
      return $this->rangeHigh;
    }

    /**
     * @param SearchColumnDoubleField[] $rangeHigh
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setRangeHigh(array $rangeHigh = null)
    {
      $this->rangeHigh = $rangeHigh;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRangeHighAlt()
    {
      return $this->rangeHighAlt;
    }

    /**
     * @param SearchColumnDoubleField[] $rangeHighAlt
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setRangeHighAlt(array $rangeHighAlt = null)
    {
      $this->rangeHighAlt = $rangeHighAlt;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRangeLow()
    {
      return $this->rangeLow;
    }

    /**
     * @param SearchColumnDoubleField[] $rangeLow
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setRangeLow(array $rangeLow = null)
    {
      $this->rangeLow = $rangeLow;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRangeLowAlt()
    {
      return $this->rangeLowAlt;
    }

    /**
     * @param SearchColumnDoubleField[] $rangeLowAlt
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setRangeLowAlt(array $rangeLowAlt = null)
    {
      $this->rangeLowAlt = $rangeLowAlt;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSalesReadiness()
    {
      return $this->salesReadiness;
    }

    /**
     * @param SearchColumnStringField[] $salesReadiness
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setSalesReadiness(array $salesReadiness = null)
    {
      $this->salesReadiness = $salesReadiness;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSalesRep()
    {
      return $this->salesRep;
    }

    /**
     * @param SearchColumnSelectField[] $salesRep
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setSalesRep(array $salesRep = null)
    {
      $this->salesRep = $salesRep;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSalesTeamMember()
    {
      return $this->salesTeamMember;
    }

    /**
     * @param SearchColumnSelectField[] $salesTeamMember
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setSalesTeamMember(array $salesTeamMember = null)
    {
      $this->salesTeamMember = $salesTeamMember;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSalesTeamRole()
    {
      return $this->salesTeamRole;
    }

    /**
     * @param SearchColumnSelectField[] $salesTeamRole
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setSalesTeamRole(array $salesTeamRole = null)
    {
      $this->salesTeamRole = $salesTeamRole;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiary
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setSubsidiary(array $subsidiary = null)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTaxPeriod()
    {
      return $this->taxPeriod;
    }

    /**
     * @param SearchColumnSelectField[] $taxPeriod
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setTaxPeriod(array $taxPeriod = null)
    {
      $this->taxPeriod = $taxPeriod;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param SearchColumnStringField[] $title
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setTitle(array $title = null)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTotal()
    {
      return $this->total;
    }

    /**
     * @param SearchColumnDoubleField[] $total
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setTotal(array $total = null)
    {
      $this->total = $total;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTranCostEstimate()
    {
      return $this->tranCostEstimate;
    }

    /**
     * @param SearchColumnDoubleField[] $tranCostEstimate
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setTranCostEstimate(array $tranCostEstimate = null)
    {
      $this->tranCostEstimate = $tranCostEstimate;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getTranDate()
    {
      return $this->tranDate;
    }

    /**
     * @param SearchColumnDateField[] $tranDate
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setTranDate(array $tranDate = null)
    {
      $this->tranDate = $tranDate;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTranEstGrossProfit()
    {
      return $this->tranEstGrossProfit;
    }

    /**
     * @param SearchColumnDoubleField[] $tranEstGrossProfit
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setTranEstGrossProfit(array $tranEstGrossProfit = null)
    {
      $this->tranEstGrossProfit = $tranEstGrossProfit;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTranEstGrossProfitPct()
    {
      return $this->tranEstGrossProfitPct;
    }

    /**
     * @param SearchColumnDoubleField[] $tranEstGrossProfitPct
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setTranEstGrossProfitPct(array $tranEstGrossProfitPct = null)
    {
      $this->tranEstGrossProfitPct = $tranEstGrossProfitPct;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTranFxEstGrossProfit()
    {
      return $this->tranFxEstGrossProfit;
    }

    /**
     * @param SearchColumnDoubleField[] $tranFxEstGrossProfit
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setTranFxEstGrossProfit(array $tranFxEstGrossProfit = null)
    {
      $this->tranFxEstGrossProfit = $tranFxEstGrossProfit;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTranId()
    {
      return $this->tranId;
    }

    /**
     * @param SearchColumnStringField[] $tranId
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setTranId(array $tranId = null)
    {
      $this->tranId = $tranId;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getWeightedTotal()
    {
      return $this->weightedTotal;
    }

    /**
     * @param SearchColumnDoubleField[] $weightedTotal
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setWeightedTotal(array $weightedTotal = null)
    {
      $this->weightedTotal = $weightedTotal;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getWinLossReason()
    {
      return $this->winLossReason;
    }

    /**
     * @param SearchColumnSelectField[] $winLossReason
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setWinLossReason(array $winLossReason = null)
    {
      $this->winLossReason = $winLossReason;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getWonBy()
    {
      return $this->wonBy;
    }

    /**
     * @param SearchColumnSelectField[] $wonBy
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setWonBy(array $wonBy = null)
    {
      $this->wonBy = $wonBy;
      return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\OpportunitySearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
