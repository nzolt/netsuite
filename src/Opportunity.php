<?php

namespace Nzolt\NetSuite;

class Opportunity extends Record
{

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var RecordRef $currency
     */
    protected $currency = null;

    /**
     * @var float $estimatedBudget
     */
    protected $estimatedBudget = null;

    /**
     * @var RecordRef $entity
     */
    protected $entity = null;

    /**
     * @var RecordRef $job
     */
    protected $job = null;

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var string $tranId
     */
    protected $tranId = null;

    /**
     * @var RecordRef $entityTaxRegNum
     */
    protected $entityTaxRegNum = null;

    /**
     * @var float $oneTime
     */
    protected $oneTime = null;

    /**
     * @var float $recurWeekly
     */
    protected $recurWeekly = null;

    /**
     * @var float $recurMonthly
     */
    protected $recurMonthly = null;

    /**
     * @var float $recurQuarterly
     */
    protected $recurQuarterly = null;

    /**
     * @var float $recurAnnually
     */
    protected $recurAnnually = null;

    /**
     * @var string $source
     */
    protected $source = null;

    /**
     * @var RecordRef $salesRep
     */
    protected $salesRep = null;

    /**
     * @var string $contribPct
     */
    protected $contribPct = null;

    /**
     * @var RecordRef $partner
     */
    protected $partner = null;

    /**
     * @var RecordRef $salesGroup
     */
    protected $salesGroup = null;

    /**
     * @var boolean $syncSalesTeams
     */
    protected $syncSalesTeams = null;

    /**
     * @var RecordRef $leadSource
     */
    protected $leadSource = null;

    /**
     * @var RecordRef $entityStatus
     */
    protected $entityStatus = null;

    /**
     * @var float $probability
     */
    protected $probability = null;

    /**
     * @var \DateTime $tranDate
     */
    protected $tranDate = null;

    /**
     * @var \DateTime $expectedCloseDate
     */
    protected $expectedCloseDate = null;

    /**
     * @var int $daysOpen
     */
    protected $daysOpen = null;

    /**
     * @var RecordRef $forecastType
     */
    protected $forecastType = null;

    /**
     * @var string $currencyName
     */
    protected $currencyName = null;

    /**
     * @var float $exchangeRate
     */
    protected $exchangeRate = null;

    /**
     * @var float $projectedTotal
     */
    protected $projectedTotal = null;

    /**
     * @var float $rangeLow
     */
    protected $rangeLow = null;

    /**
     * @var float $rangeHigh
     */
    protected $rangeHigh = null;

    /**
     * @var float $projAltSalesAmt
     */
    protected $projAltSalesAmt = null;

    /**
     * @var float $altSalesRangeLow
     */
    protected $altSalesRangeLow = null;

    /**
     * @var float $altSalesRangeHigh
     */
    protected $altSalesRangeHigh = null;

    /**
     * @var float $weightedTotal
     */
    protected $weightedTotal = null;

    /**
     * @var string $actionItem
     */
    protected $actionItem = null;

    /**
     * @var RecordRef $winLossReason
     */
    protected $winLossReason = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var float $taxTotal
     */
    protected $taxTotal = null;

    /**
     * @var boolean $isBudgetApproved
     */
    protected $isBudgetApproved = null;

    /**
     * @var float $tax2Total
     */
    protected $tax2Total = null;

    /**
     * @var RecordRef $salesReadiness
     */
    protected $salesReadiness = null;

    /**
     * @var float $totalCostEstimate
     */
    protected $totalCostEstimate = null;

    /**
     * @var RecordRef $buyingTimeFrame
     */
    protected $buyingTimeFrame = null;

    /**
     * @var float $estGrossProfit
     */
    protected $estGrossProfit = null;

    /**
     * @var RecordRef $buyingReason
     */
    protected $buyingReason = null;

    /**
     * @var float $estGrossProfitPercent
     */
    protected $estGrossProfitPercent = null;

    /**
     * @var Address $billingAddress
     */
    protected $billingAddress = null;

    /**
     * @var RecordRef $billAddressList
     */
    protected $billAddressList = null;

    /**
     * @var Address $shippingAddress
     */
    protected $shippingAddress = null;

    /**
     * @var boolean $shipIsResidential
     */
    protected $shipIsResidential = null;

    /**
     * @var RecordRef $shipAddressList
     */
    protected $shipAddressList = null;

    /**
     * @var RecordRef $class
     */
    protected $class = null;

    /**
     * @var \DateTime $closeDate
     */
    protected $closeDate = null;

    /**
     * @var \DateTime $createdDate
     */
    protected $createdDate = null;

    /**
     * @var \DateTime $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var RecordRef $nexus
     */
    protected $nexus = null;

    /**
     * @var RecordRef $subsidiaryTaxRegNum
     */
    protected $subsidiaryTaxRegNum = null;

    /**
     * @var boolean $taxRegOverride
     */
    protected $taxRegOverride = null;

    /**
     * @var boolean $taxDetailsOverride
     */
    protected $taxDetailsOverride = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $vatRegNum
     */
    protected $vatRegNum = null;

    /**
     * @var boolean $syncPartnerTeams
     */
    protected $syncPartnerTeams = null;

    /**
     * @var OpportunitySalesTeamList $salesTeamList
     */
    protected $salesTeamList = null;

    /**
     * @var OpportunityPartnersList $partnersList
     */
    protected $partnersList = null;

    /**
     * @var OpportunityItemList $itemList
     */
    protected $itemList = null;

    /**
     * @var OpportunityCompetitorsList $competitorsList
     */
    protected $competitorsList = null;

    /**
     * @var AccountingBookDetailList $accountingBookDetailList
     */
    protected $accountingBookDetailList = null;

    /**
     * @var TaxDetailsList $taxDetailsList
     */
    protected $taxDetailsList = null;

    /**
     * @var CustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param string $internalId
     * @param string $externalId
     */
    public function __construct($internalId, $externalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
      $this->externalId = $externalId;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm()
    {
      return $this->customForm;
    }

    /**
     * @param RecordRef $customForm
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param RecordRef $currency
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedBudget()
    {
      return $this->estimatedBudget;
    }

    /**
     * @param float $estimatedBudget
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setEstimatedBudget($estimatedBudget)
    {
      $this->estimatedBudget = $estimatedBudget;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEntity()
    {
      return $this->entity;
    }

    /**
     * @param RecordRef $entity
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getJob()
    {
      return $this->job;
    }

    /**
     * @param RecordRef $job
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setJob($job)
    {
      $this->job = $job;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param string $title
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return string
     */
    public function getTranId()
    {
      return $this->tranId;
    }

    /**
     * @param string $tranId
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setTranId($tranId)
    {
      $this->tranId = $tranId;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEntityTaxRegNum()
    {
      return $this->entityTaxRegNum;
    }

    /**
     * @param RecordRef $entityTaxRegNum
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setEntityTaxRegNum($entityTaxRegNum)
    {
      $this->entityTaxRegNum = $entityTaxRegNum;
      return $this;
    }

    /**
     * @return float
     */
    public function getOneTime()
    {
      return $this->oneTime;
    }

    /**
     * @param float $oneTime
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setOneTime($oneTime)
    {
      $this->oneTime = $oneTime;
      return $this;
    }

    /**
     * @return float
     */
    public function getRecurWeekly()
    {
      return $this->recurWeekly;
    }

    /**
     * @param float $recurWeekly
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setRecurWeekly($recurWeekly)
    {
      $this->recurWeekly = $recurWeekly;
      return $this;
    }

    /**
     * @return float
     */
    public function getRecurMonthly()
    {
      return $this->recurMonthly;
    }

    /**
     * @param float $recurMonthly
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setRecurMonthly($recurMonthly)
    {
      $this->recurMonthly = $recurMonthly;
      return $this;
    }

    /**
     * @return float
     */
    public function getRecurQuarterly()
    {
      return $this->recurQuarterly;
    }

    /**
     * @param float $recurQuarterly
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setRecurQuarterly($recurQuarterly)
    {
      $this->recurQuarterly = $recurQuarterly;
      return $this;
    }

    /**
     * @return float
     */
    public function getRecurAnnually()
    {
      return $this->recurAnnually;
    }

    /**
     * @param float $recurAnnually
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setRecurAnnually($recurAnnually)
    {
      $this->recurAnnually = $recurAnnually;
      return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
      return $this->source;
    }

    /**
     * @param string $source
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setSource($source)
    {
      $this->source = $source;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSalesRep()
    {
      return $this->salesRep;
    }

    /**
     * @param RecordRef $salesRep
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setSalesRep($salesRep)
    {
      $this->salesRep = $salesRep;
      return $this;
    }

    /**
     * @return string
     */
    public function getContribPct()
    {
      return $this->contribPct;
    }

    /**
     * @param string $contribPct
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setContribPct($contribPct)
    {
      $this->contribPct = $contribPct;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPartner()
    {
      return $this->partner;
    }

    /**
     * @param RecordRef $partner
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setPartner($partner)
    {
      $this->partner = $partner;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSalesGroup()
    {
      return $this->salesGroup;
    }

    /**
     * @param RecordRef $salesGroup
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setSalesGroup($salesGroup)
    {
      $this->salesGroup = $salesGroup;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSyncSalesTeams()
    {
      return $this->syncSalesTeams;
    }

    /**
     * @param boolean $syncSalesTeams
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setSyncSalesTeams($syncSalesTeams)
    {
      $this->syncSalesTeams = $syncSalesTeams;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLeadSource()
    {
      return $this->leadSource;
    }

    /**
     * @param RecordRef $leadSource
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setLeadSource($leadSource)
    {
      $this->leadSource = $leadSource;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEntityStatus()
    {
      return $this->entityStatus;
    }

    /**
     * @param RecordRef $entityStatus
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setEntityStatus($entityStatus)
    {
      $this->entityStatus = $entityStatus;
      return $this;
    }

    /**
     * @return float
     */
    public function getProbability()
    {
      return $this->probability;
    }

    /**
     * @param float $probability
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setProbability($probability)
    {
      $this->probability = $probability;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTranDate()
    {
      if ($this->tranDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->tranDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $tranDate
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setTranDate(\DateTime $tranDate = null)
    {
      if ($tranDate == null) {
       $this->tranDate = null;
      } else {
        $this->tranDate = $tranDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpectedCloseDate()
    {
      if ($this->expectedCloseDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->expectedCloseDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $expectedCloseDate
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setExpectedCloseDate(\DateTime $expectedCloseDate = null)
    {
      if ($expectedCloseDate == null) {
       $this->expectedCloseDate = null;
      } else {
        $this->expectedCloseDate = $expectedCloseDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getDaysOpen()
    {
      return $this->daysOpen;
    }

    /**
     * @param int $daysOpen
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setDaysOpen($daysOpen)
    {
      $this->daysOpen = $daysOpen;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getForecastType()
    {
      return $this->forecastType;
    }

    /**
     * @param RecordRef $forecastType
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setForecastType($forecastType)
    {
      $this->forecastType = $forecastType;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyName()
    {
      return $this->currencyName;
    }

    /**
     * @param string $currencyName
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setCurrencyName($currencyName)
    {
      $this->currencyName = $currencyName;
      return $this;
    }

    /**
     * @return float
     */
    public function getExchangeRate()
    {
      return $this->exchangeRate;
    }

    /**
     * @param float $exchangeRate
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setExchangeRate($exchangeRate)
    {
      $this->exchangeRate = $exchangeRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getProjectedTotal()
    {
      return $this->projectedTotal;
    }

    /**
     * @param float $projectedTotal
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setProjectedTotal($projectedTotal)
    {
      $this->projectedTotal = $projectedTotal;
      return $this;
    }

    /**
     * @return float
     */
    public function getRangeLow()
    {
      return $this->rangeLow;
    }

    /**
     * @param float $rangeLow
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setRangeLow($rangeLow)
    {
      $this->rangeLow = $rangeLow;
      return $this;
    }

    /**
     * @return float
     */
    public function getRangeHigh()
    {
      return $this->rangeHigh;
    }

    /**
     * @param float $rangeHigh
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setRangeHigh($rangeHigh)
    {
      $this->rangeHigh = $rangeHigh;
      return $this;
    }

    /**
     * @return float
     */
    public function getProjAltSalesAmt()
    {
      return $this->projAltSalesAmt;
    }

    /**
     * @param float $projAltSalesAmt
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setProjAltSalesAmt($projAltSalesAmt)
    {
      $this->projAltSalesAmt = $projAltSalesAmt;
      return $this;
    }

    /**
     * @return float
     */
    public function getAltSalesRangeLow()
    {
      return $this->altSalesRangeLow;
    }

    /**
     * @param float $altSalesRangeLow
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setAltSalesRangeLow($altSalesRangeLow)
    {
      $this->altSalesRangeLow = $altSalesRangeLow;
      return $this;
    }

    /**
     * @return float
     */
    public function getAltSalesRangeHigh()
    {
      return $this->altSalesRangeHigh;
    }

    /**
     * @param float $altSalesRangeHigh
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setAltSalesRangeHigh($altSalesRangeHigh)
    {
      $this->altSalesRangeHigh = $altSalesRangeHigh;
      return $this;
    }

    /**
     * @return float
     */
    public function getWeightedTotal()
    {
      return $this->weightedTotal;
    }

    /**
     * @param float $weightedTotal
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setWeightedTotal($weightedTotal)
    {
      $this->weightedTotal = $weightedTotal;
      return $this;
    }

    /**
     * @return string
     */
    public function getActionItem()
    {
      return $this->actionItem;
    }

    /**
     * @param string $actionItem
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setActionItem($actionItem)
    {
      $this->actionItem = $actionItem;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getWinLossReason()
    {
      return $this->winLossReason;
    }

    /**
     * @param RecordRef $winLossReason
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setWinLossReason($winLossReason)
    {
      $this->winLossReason = $winLossReason;
      return $this;
    }

    /**
     * @return string
     */
    public function getMemo()
    {
      return $this->memo;
    }

    /**
     * @param string $memo
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxTotal()
    {
      return $this->taxTotal;
    }

    /**
     * @param float $taxTotal
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setTaxTotal($taxTotal)
    {
      $this->taxTotal = $taxTotal;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBudgetApproved()
    {
      return $this->isBudgetApproved;
    }

    /**
     * @param boolean $isBudgetApproved
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setIsBudgetApproved($isBudgetApproved)
    {
      $this->isBudgetApproved = $isBudgetApproved;
      return $this;
    }

    /**
     * @return float
     */
    public function getTax2Total()
    {
      return $this->tax2Total;
    }

    /**
     * @param float $tax2Total
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setTax2Total($tax2Total)
    {
      $this->tax2Total = $tax2Total;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSalesReadiness()
    {
      return $this->salesReadiness;
    }

    /**
     * @param RecordRef $salesReadiness
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setSalesReadiness($salesReadiness)
    {
      $this->salesReadiness = $salesReadiness;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalCostEstimate()
    {
      return $this->totalCostEstimate;
    }

    /**
     * @param float $totalCostEstimate
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setTotalCostEstimate($totalCostEstimate)
    {
      $this->totalCostEstimate = $totalCostEstimate;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBuyingTimeFrame()
    {
      return $this->buyingTimeFrame;
    }

    /**
     * @param RecordRef $buyingTimeFrame
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setBuyingTimeFrame($buyingTimeFrame)
    {
      $this->buyingTimeFrame = $buyingTimeFrame;
      return $this;
    }

    /**
     * @return float
     */
    public function getEstGrossProfit()
    {
      return $this->estGrossProfit;
    }

    /**
     * @param float $estGrossProfit
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setEstGrossProfit($estGrossProfit)
    {
      $this->estGrossProfit = $estGrossProfit;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBuyingReason()
    {
      return $this->buyingReason;
    }

    /**
     * @param RecordRef $buyingReason
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setBuyingReason($buyingReason)
    {
      $this->buyingReason = $buyingReason;
      return $this;
    }

    /**
     * @return float
     */
    public function getEstGrossProfitPercent()
    {
      return $this->estGrossProfitPercent;
    }

    /**
     * @param float $estGrossProfitPercent
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setEstGrossProfitPercent($estGrossProfitPercent)
    {
      $this->estGrossProfitPercent = $estGrossProfitPercent;
      return $this;
    }

    /**
     * @return Address
     */
    public function getBillingAddress()
    {
      return $this->billingAddress;
    }

    /**
     * @param Address $billingAddress
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setBillingAddress($billingAddress)
    {
      $this->billingAddress = $billingAddress;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillAddressList()
    {
      return $this->billAddressList;
    }

    /**
     * @param RecordRef $billAddressList
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setBillAddressList($billAddressList)
    {
      $this->billAddressList = $billAddressList;
      return $this;
    }

    /**
     * @return Address
     */
    public function getShippingAddress()
    {
      return $this->shippingAddress;
    }

    /**
     * @param Address $shippingAddress
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setShippingAddress($shippingAddress)
    {
      $this->shippingAddress = $shippingAddress;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShipIsResidential()
    {
      return $this->shipIsResidential;
    }

    /**
     * @param boolean $shipIsResidential
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setShipIsResidential($shipIsResidential)
    {
      $this->shipIsResidential = $shipIsResidential;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShipAddressList()
    {
      return $this->shipAddressList;
    }

    /**
     * @param RecordRef $shipAddressList
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setShipAddressList($shipAddressList)
    {
      $this->shipAddressList = $shipAddressList;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param RecordRef $class
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCloseDate()
    {
      if ($this->closeDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->closeDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $closeDate
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setCloseDate(\DateTime $closeDate = null)
    {
      if ($closeDate == null) {
       $this->closeDate = null;
      } else {
        $this->closeDate = $closeDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
      if ($this->createdDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->createdDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $createdDate
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setCreatedDate(\DateTime $createdDate = null)
    {
      if ($createdDate == null) {
       $this->createdDate = null;
      } else {
        $this->createdDate = $createdDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
      if ($this->lastModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastModifiedDate
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate = null)
    {
      if ($lastModifiedDate == null) {
       $this->lastModifiedDate = null;
      } else {
        $this->lastModifiedDate = $lastModifiedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getNexus()
    {
      return $this->nexus;
    }

    /**
     * @param RecordRef $nexus
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setNexus($nexus)
    {
      $this->nexus = $nexus;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubsidiaryTaxRegNum()
    {
      return $this->subsidiaryTaxRegNum;
    }

    /**
     * @param RecordRef $subsidiaryTaxRegNum
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setSubsidiaryTaxRegNum($subsidiaryTaxRegNum)
    {
      $this->subsidiaryTaxRegNum = $subsidiaryTaxRegNum;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTaxRegOverride()
    {
      return $this->taxRegOverride;
    }

    /**
     * @param boolean $taxRegOverride
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setTaxRegOverride($taxRegOverride)
    {
      $this->taxRegOverride = $taxRegOverride;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTaxDetailsOverride()
    {
      return $this->taxDetailsOverride;
    }

    /**
     * @param boolean $taxDetailsOverride
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setTaxDetailsOverride($taxDetailsOverride)
    {
      $this->taxDetailsOverride = $taxDetailsOverride;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param RecordRef $department
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setDepartment($department)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param RecordRef $location
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param RecordRef $subsidiary
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getVatRegNum()
    {
      return $this->vatRegNum;
    }

    /**
     * @param string $vatRegNum
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setVatRegNum($vatRegNum)
    {
      $this->vatRegNum = $vatRegNum;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSyncPartnerTeams()
    {
      return $this->syncPartnerTeams;
    }

    /**
     * @param boolean $syncPartnerTeams
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setSyncPartnerTeams($syncPartnerTeams)
    {
      $this->syncPartnerTeams = $syncPartnerTeams;
      return $this;
    }

    /**
     * @return OpportunitySalesTeamList
     */
    public function getSalesTeamList()
    {
      return $this->salesTeamList;
    }

    /**
     * @param OpportunitySalesTeamList $salesTeamList
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setSalesTeamList($salesTeamList)
    {
      $this->salesTeamList = $salesTeamList;
      return $this;
    }

    /**
     * @return OpportunityPartnersList
     */
    public function getPartnersList()
    {
      return $this->partnersList;
    }

    /**
     * @param OpportunityPartnersList $partnersList
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setPartnersList($partnersList)
    {
      $this->partnersList = $partnersList;
      return $this;
    }

    /**
     * @return OpportunityItemList
     */
    public function getItemList()
    {
      return $this->itemList;
    }

    /**
     * @param OpportunityItemList $itemList
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setItemList($itemList)
    {
      $this->itemList = $itemList;
      return $this;
    }

    /**
     * @return OpportunityCompetitorsList
     */
    public function getCompetitorsList()
    {
      return $this->competitorsList;
    }

    /**
     * @param OpportunityCompetitorsList $competitorsList
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setCompetitorsList($competitorsList)
    {
      $this->competitorsList = $competitorsList;
      return $this;
    }

    /**
     * @return AccountingBookDetailList
     */
    public function getAccountingBookDetailList()
    {
      return $this->accountingBookDetailList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setAccountingBookDetailList($accountingBookDetailList)
    {
      $this->accountingBookDetailList = $accountingBookDetailList;
      return $this;
    }

    /**
     * @return TaxDetailsList
     */
    public function getTaxDetailsList()
    {
      return $this->taxDetailsList;
    }

    /**
     * @param TaxDetailsList $taxDetailsList
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setTaxDetailsList($taxDetailsList)
    {
      $this->taxDetailsList = $taxDetailsList;
      return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param string $internalId
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Nzolt\NetSuite\Opportunity
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
