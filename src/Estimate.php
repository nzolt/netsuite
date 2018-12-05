<?php

namespace Nzolt\NetSuite;

class Estimate extends Record
{

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
     * @var RecordRef $entity
     */
    protected $entity = null;

    /**
     * @var RecordRef $job
     */
    protected $job = null;

    /**
     * @var \DateTime $tranDate
     */
    protected $tranDate = null;

    /**
     * @var string $tranId
     */
    protected $tranId = null;

    /**
     * @var RecordRef $entityTaxRegNum
     */
    protected $entityTaxRegNum = null;

    /**
     * @var string $source
     */
    protected $source = null;

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var RecordRef $currency
     */
    protected $currency = null;

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var RecordRef $entityStatus
     */
    protected $entityStatus = null;

    /**
     * @var float $probability
     */
    protected $probability = null;

    /**
     * @var boolean $includeInForecast
     */
    protected $includeInForecast = null;

    /**
     * @var RecordRef $forecastType
     */
    protected $forecastType = null;

    /**
     * @var RecordRef $opportunity
     */
    protected $opportunity = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var RecordRef $class
     */
    protected $class = null;

    /**
     * @var RecordRef $terms
     */
    protected $terms = null;

    /**
     * @var \DateTime $dueDate
     */
    protected $dueDate = null;

    /**
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var RecordRef $billingSchedule
     */
    protected $billingSchedule = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var RecordRef $salesRep
     */
    protected $salesRep = null;

    /**
     * @var RecordRef $partner
     */
    protected $partner = null;

    /**
     * @var string $contribPct
     */
    protected $contribPct = null;

    /**
     * @var RecordRef $leadSource
     */
    protected $leadSource = null;

    /**
     * @var \DateTime $expectedCloseDate
     */
    protected $expectedCloseDate = null;

    /**
     * @var string $otherRefNum
     */
    protected $otherRefNum = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var float $totalCostEstimate
     */
    protected $totalCostEstimate = null;

    /**
     * @var float $estGrossProfit
     */
    protected $estGrossProfit = null;

    /**
     * @var float $estGrossProfitPercent
     */
    protected $estGrossProfitPercent = null;

    /**
     * @var RecordRef $createdFrom
     */
    protected $createdFrom = null;

    /**
     * @var float $exchangeRate
     */
    protected $exchangeRate = null;

    /**
     * @var string $currencyName
     */
    protected $currencyName = null;

    /**
     * @var RecordRef $promoCode
     */
    protected $promoCode = null;

    /**
     * @var RecordRef $discountItem
     */
    protected $discountItem = null;

    /**
     * @var string $discountRate
     */
    protected $discountRate = null;

    /**
     * @var boolean $isTaxable
     */
    protected $isTaxable = null;

    /**
     * @var RecordRef $taxItem
     */
    protected $taxItem = null;

    /**
     * @var float $taxRate
     */
    protected $taxRate = null;

    /**
     * @var string $vatRegNum
     */
    protected $vatRegNum = null;

    /**
     * @var boolean $toBePrinted
     */
    protected $toBePrinted = null;

    /**
     * @var boolean $toBeEmailed
     */
    protected $toBeEmailed = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var boolean $toBeFaxed
     */
    protected $toBeFaxed = null;

    /**
     * @var string $fax
     */
    protected $fax = null;

    /**
     * @var boolean $visibleToCustomer
     */
    protected $visibleToCustomer = null;

    /**
     * @var RecordRef $messageSel
     */
    protected $messageSel = null;

    /**
     * @var string $message
     */
    protected $message = null;

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
     * @var string $fob
     */
    protected $fob = null;

    /**
     * @var \DateTime $shipDate
     */
    protected $shipDate = null;

    /**
     * @var RecordRef $shipMethod
     */
    protected $shipMethod = null;

    /**
     * @var float $shippingCost
     */
    protected $shippingCost = null;

    /**
     * @var float $shippingTax1Rate
     */
    protected $shippingTax1Rate = null;

    /**
     * @var RecordRef $shippingTaxCode
     */
    protected $shippingTaxCode = null;

    /**
     * @var string $shippingTax2Rate
     */
    protected $shippingTax2Rate = null;

    /**
     * @var RecordRef $handlingTaxCode
     */
    protected $handlingTaxCode = null;

    /**
     * @var float $handlingTax1Rate
     */
    protected $handlingTax1Rate = null;

    /**
     * @var float $handlingCost
     */
    protected $handlingCost = null;

    /**
     * @var string $trackingNumbers
     */
    protected $trackingNumbers = null;

    /**
     * @var string $handlingTax2Rate
     */
    protected $handlingTax2Rate = null;

    /**
     * @var string $linkedTrackingNumbers
     */
    protected $linkedTrackingNumbers = null;

    /**
     * @var RecordRef $salesGroup
     */
    protected $salesGroup = null;

    /**
     * @var boolean $syncSalesTeams
     */
    protected $syncSalesTeams = null;

    /**
     * @var float $altSalesTotal
     */
    protected $altSalesTotal = null;

    /**
     * @var boolean $canHaveStackable
     */
    protected $canHaveStackable = null;

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
     * @var float $subTotal
     */
    protected $subTotal = null;

    /**
     * @var float $discountTotal
     */
    protected $discountTotal = null;

    /**
     * @var float $taxTotal
     */
    protected $taxTotal = null;

    /**
     * @var float $altShippingCost
     */
    protected $altShippingCost = null;

    /**
     * @var float $altHandlingCost
     */
    protected $altHandlingCost = null;

    /**
     * @var float $total
     */
    protected $total = null;

    /**
     * @var float $tax2Total
     */
    protected $tax2Total = null;

    /**
     * @var EstimateItemList $itemList
     */
    protected $itemList = null;

    /**
     * @var AccountingBookDetailList $accountingBookDetailList
     */
    protected $accountingBookDetailList = null;

    /**
     * @var EstimateSalesTeamList $salesTeamList
     */
    protected $salesTeamList = null;

    /**
     * @var boolean $syncPartnerTeams
     */
    protected $syncPartnerTeams = null;

    /**
     * @var EstimatePartnersList $partnersList
     */
    protected $partnersList = null;

    /**
     * @var PromotionsList $promotionsList
     */
    protected $promotionsList = null;

    /**
     * @var EstimateShipGroupList $shipGroupList
     */
    protected $shipGroupList = null;

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
     * @return \Nzolt\NetSuite\Estimate
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
     * @return \Nzolt\NetSuite\Estimate
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
     * @return \Nzolt\NetSuite\Estimate
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
     * @return \Nzolt\NetSuite\Estimate
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
     * @return \Nzolt\NetSuite\Estimate
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setTaxDetailsOverride($taxDetailsOverride)
    {
      $this->taxDetailsOverride = $taxDetailsOverride;
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
     * @return \Nzolt\NetSuite\Estimate
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setJob($job)
    {
      $this->job = $job;
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
     * @return \Nzolt\NetSuite\Estimate
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
     * @return string
     */
    public function getTranId()
    {
      return $this->tranId;
    }

    /**
     * @param string $tranId
     * @return \Nzolt\NetSuite\Estimate
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setEntityTaxRegNum($entityTaxRegNum)
    {
      $this->entityTaxRegNum = $entityTaxRegNum;
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setSource($source)
    {
      $this->source = $source;
      return $this;
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
     * @return \Nzolt\NetSuite\Estimate
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setTitle($title)
    {
      $this->title = $title;
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
     * @return \Nzolt\NetSuite\Estimate
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setProbability($probability)
    {
      $this->probability = $probability;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeInForecast()
    {
      return $this->includeInForecast;
    }

    /**
     * @param boolean $includeInForecast
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setIncludeInForecast($includeInForecast)
    {
      $this->includeInForecast = $includeInForecast;
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setForecastType($forecastType)
    {
      $this->forecastType = $forecastType;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getOpportunity()
    {
      return $this->opportunity;
    }

    /**
     * @param RecordRef $opportunity
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setOpportunity($opportunity)
    {
      $this->opportunity = $opportunity;
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setDepartment($department)
    {
      $this->department = $department;
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTerms()
    {
      return $this->terms;
    }

    /**
     * @param RecordRef $terms
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setTerms($terms)
    {
      $this->terms = $terms;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDueDate()
    {
      if ($this->dueDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dueDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dueDate
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setDueDate(\DateTime $dueDate = null)
    {
      if ($dueDate == null) {
       $this->dueDate = null;
      } else {
        $this->dueDate = $dueDate->format(\DateTime::ATOM);
      }
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
     * @return \Nzolt\NetSuite\Estimate
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillingSchedule()
    {
      return $this->billingSchedule;
    }

    /**
     * @param RecordRef $billingSchedule
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setBillingSchedule($billingSchedule)
    {
      $this->billingSchedule = $billingSchedule;
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setStatus($status)
    {
      $this->status = $status;
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setSalesRep($salesRep)
    {
      $this->salesRep = $salesRep;
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setPartner($partner)
    {
      $this->partner = $partner;
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setContribPct($contribPct)
    {
      $this->contribPct = $contribPct;
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setLeadSource($leadSource)
    {
      $this->leadSource = $leadSource;
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
     * @return \Nzolt\NetSuite\Estimate
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
     * @return string
     */
    public function getOtherRefNum()
    {
      return $this->otherRefNum;
    }

    /**
     * @param string $otherRefNum
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setOtherRefNum($otherRefNum)
    {
      $this->otherRefNum = $otherRefNum;
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->endDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endDate
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
      if ($endDate == null) {
       $this->endDate = null;
      } else {
        $this->endDate = $endDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->startDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startDate
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
      if ($startDate == null) {
       $this->startDate = null;
      } else {
        $this->startDate = $startDate->format(\DateTime::ATOM);
      }
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setTotalCostEstimate($totalCostEstimate)
    {
      $this->totalCostEstimate = $totalCostEstimate;
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setEstGrossProfit($estGrossProfit)
    {
      $this->estGrossProfit = $estGrossProfit;
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setEstGrossProfitPercent($estGrossProfitPercent)
    {
      $this->estGrossProfitPercent = $estGrossProfitPercent;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCreatedFrom()
    {
      return $this->createdFrom;
    }

    /**
     * @param RecordRef $createdFrom
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setCreatedFrom($createdFrom)
    {
      $this->createdFrom = $createdFrom;
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setExchangeRate($exchangeRate)
    {
      $this->exchangeRate = $exchangeRate;
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setCurrencyName($currencyName)
    {
      $this->currencyName = $currencyName;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPromoCode()
    {
      return $this->promoCode;
    }

    /**
     * @param RecordRef $promoCode
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setPromoCode($promoCode)
    {
      $this->promoCode = $promoCode;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDiscountItem()
    {
      return $this->discountItem;
    }

    /**
     * @param RecordRef $discountItem
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setDiscountItem($discountItem)
    {
      $this->discountItem = $discountItem;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiscountRate()
    {
      return $this->discountRate;
    }

    /**
     * @param string $discountRate
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setDiscountRate($discountRate)
    {
      $this->discountRate = $discountRate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTaxable()
    {
      return $this->isTaxable;
    }

    /**
     * @param boolean $isTaxable
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setIsTaxable($isTaxable)
    {
      $this->isTaxable = $isTaxable;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxItem()
    {
      return $this->taxItem;
    }

    /**
     * @param RecordRef $taxItem
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setTaxItem($taxItem)
    {
      $this->taxItem = $taxItem;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxRate()
    {
      return $this->taxRate;
    }

    /**
     * @param float $taxRate
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setTaxRate($taxRate)
    {
      $this->taxRate = $taxRate;
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setVatRegNum($vatRegNum)
    {
      $this->vatRegNum = $vatRegNum;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getToBePrinted()
    {
      return $this->toBePrinted;
    }

    /**
     * @param boolean $toBePrinted
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setToBePrinted($toBePrinted)
    {
      $this->toBePrinted = $toBePrinted;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getToBeEmailed()
    {
      return $this->toBeEmailed;
    }

    /**
     * @param boolean $toBeEmailed
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setToBeEmailed($toBeEmailed)
    {
      $this->toBeEmailed = $toBeEmailed;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getToBeFaxed()
    {
      return $this->toBeFaxed;
    }

    /**
     * @param boolean $toBeFaxed
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setToBeFaxed($toBeFaxed)
    {
      $this->toBeFaxed = $toBeFaxed;
      return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
      return $this->fax;
    }

    /**
     * @param string $fax
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setFax($fax)
    {
      $this->fax = $fax;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getVisibleToCustomer()
    {
      return $this->visibleToCustomer;
    }

    /**
     * @param boolean $visibleToCustomer
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setVisibleToCustomer($visibleToCustomer)
    {
      $this->visibleToCustomer = $visibleToCustomer;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getMessageSel()
    {
      return $this->messageSel;
    }

    /**
     * @param RecordRef $messageSel
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setMessageSel($messageSel)
    {
      $this->messageSel = $messageSel;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setMessage($message)
    {
      $this->message = $message;
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
     * @return \Nzolt\NetSuite\Estimate
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
     * @return \Nzolt\NetSuite\Estimate
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
     * @return \Nzolt\NetSuite\Estimate
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
     * @return \Nzolt\NetSuite\Estimate
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setShipAddressList($shipAddressList)
    {
      $this->shipAddressList = $shipAddressList;
      return $this;
    }

    /**
     * @return string
     */
    public function getFob()
    {
      return $this->fob;
    }

    /**
     * @param string $fob
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setFob($fob)
    {
      $this->fob = $fob;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getShipDate()
    {
      if ($this->shipDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->shipDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $shipDate
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setShipDate(\DateTime $shipDate = null)
    {
      if ($shipDate == null) {
       $this->shipDate = null;
      } else {
        $this->shipDate = $shipDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShipMethod()
    {
      return $this->shipMethod;
    }

    /**
     * @param RecordRef $shipMethod
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setShipMethod($shipMethod)
    {
      $this->shipMethod = $shipMethod;
      return $this;
    }

    /**
     * @return float
     */
    public function getShippingCost()
    {
      return $this->shippingCost;
    }

    /**
     * @param float $shippingCost
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setShippingCost($shippingCost)
    {
      $this->shippingCost = $shippingCost;
      return $this;
    }

    /**
     * @return float
     */
    public function getShippingTax1Rate()
    {
      return $this->shippingTax1Rate;
    }

    /**
     * @param float $shippingTax1Rate
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setShippingTax1Rate($shippingTax1Rate)
    {
      $this->shippingTax1Rate = $shippingTax1Rate;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShippingTaxCode()
    {
      return $this->shippingTaxCode;
    }

    /**
     * @param RecordRef $shippingTaxCode
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setShippingTaxCode($shippingTaxCode)
    {
      $this->shippingTaxCode = $shippingTaxCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingTax2Rate()
    {
      return $this->shippingTax2Rate;
    }

    /**
     * @param string $shippingTax2Rate
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setShippingTax2Rate($shippingTax2Rate)
    {
      $this->shippingTax2Rate = $shippingTax2Rate;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getHandlingTaxCode()
    {
      return $this->handlingTaxCode;
    }

    /**
     * @param RecordRef $handlingTaxCode
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setHandlingTaxCode($handlingTaxCode)
    {
      $this->handlingTaxCode = $handlingTaxCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getHandlingTax1Rate()
    {
      return $this->handlingTax1Rate;
    }

    /**
     * @param float $handlingTax1Rate
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setHandlingTax1Rate($handlingTax1Rate)
    {
      $this->handlingTax1Rate = $handlingTax1Rate;
      return $this;
    }

    /**
     * @return float
     */
    public function getHandlingCost()
    {
      return $this->handlingCost;
    }

    /**
     * @param float $handlingCost
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setHandlingCost($handlingCost)
    {
      $this->handlingCost = $handlingCost;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrackingNumbers()
    {
      return $this->trackingNumbers;
    }

    /**
     * @param string $trackingNumbers
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setTrackingNumbers($trackingNumbers)
    {
      $this->trackingNumbers = $trackingNumbers;
      return $this;
    }

    /**
     * @return string
     */
    public function getHandlingTax2Rate()
    {
      return $this->handlingTax2Rate;
    }

    /**
     * @param string $handlingTax2Rate
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setHandlingTax2Rate($handlingTax2Rate)
    {
      $this->handlingTax2Rate = $handlingTax2Rate;
      return $this;
    }

    /**
     * @return string
     */
    public function getLinkedTrackingNumbers()
    {
      return $this->linkedTrackingNumbers;
    }

    /**
     * @param string $linkedTrackingNumbers
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setLinkedTrackingNumbers($linkedTrackingNumbers)
    {
      $this->linkedTrackingNumbers = $linkedTrackingNumbers;
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
     * @return \Nzolt\NetSuite\Estimate
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setSyncSalesTeams($syncSalesTeams)
    {
      $this->syncSalesTeams = $syncSalesTeams;
      return $this;
    }

    /**
     * @return float
     */
    public function getAltSalesTotal()
    {
      return $this->altSalesTotal;
    }

    /**
     * @param float $altSalesTotal
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setAltSalesTotal($altSalesTotal)
    {
      $this->altSalesTotal = $altSalesTotal;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCanHaveStackable()
    {
      return $this->canHaveStackable;
    }

    /**
     * @param boolean $canHaveStackable
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setCanHaveStackable($canHaveStackable)
    {
      $this->canHaveStackable = $canHaveStackable;
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
     * @return \Nzolt\NetSuite\Estimate
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
     * @return \Nzolt\NetSuite\Estimate
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
     * @return \Nzolt\NetSuite\Estimate
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
     * @return \Nzolt\NetSuite\Estimate
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setRecurAnnually($recurAnnually)
    {
      $this->recurAnnually = $recurAnnually;
      return $this;
    }

    /**
     * @return float
     */
    public function getSubTotal()
    {
      return $this->subTotal;
    }

    /**
     * @param float $subTotal
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setSubTotal($subTotal)
    {
      $this->subTotal = $subTotal;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscountTotal()
    {
      return $this->discountTotal;
    }

    /**
     * @param float $discountTotal
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setDiscountTotal($discountTotal)
    {
      $this->discountTotal = $discountTotal;
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setTaxTotal($taxTotal)
    {
      $this->taxTotal = $taxTotal;
      return $this;
    }

    /**
     * @return float
     */
    public function getAltShippingCost()
    {
      return $this->altShippingCost;
    }

    /**
     * @param float $altShippingCost
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setAltShippingCost($altShippingCost)
    {
      $this->altShippingCost = $altShippingCost;
      return $this;
    }

    /**
     * @return float
     */
    public function getAltHandlingCost()
    {
      return $this->altHandlingCost;
    }

    /**
     * @param float $altHandlingCost
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setAltHandlingCost($altHandlingCost)
    {
      $this->altHandlingCost = $altHandlingCost;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotal()
    {
      return $this->total;
    }

    /**
     * @param float $total
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setTotal($total)
    {
      $this->total = $total;
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setTax2Total($tax2Total)
    {
      $this->tax2Total = $tax2Total;
      return $this;
    }

    /**
     * @return EstimateItemList
     */
    public function getItemList()
    {
      return $this->itemList;
    }

    /**
     * @param EstimateItemList $itemList
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setItemList($itemList)
    {
      $this->itemList = $itemList;
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setAccountingBookDetailList($accountingBookDetailList)
    {
      $this->accountingBookDetailList = $accountingBookDetailList;
      return $this;
    }

    /**
     * @return EstimateSalesTeamList
     */
    public function getSalesTeamList()
    {
      return $this->salesTeamList;
    }

    /**
     * @param EstimateSalesTeamList $salesTeamList
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setSalesTeamList($salesTeamList)
    {
      $this->salesTeamList = $salesTeamList;
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setSyncPartnerTeams($syncPartnerTeams)
    {
      $this->syncPartnerTeams = $syncPartnerTeams;
      return $this;
    }

    /**
     * @return EstimatePartnersList
     */
    public function getPartnersList()
    {
      return $this->partnersList;
    }

    /**
     * @param EstimatePartnersList $partnersList
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setPartnersList($partnersList)
    {
      $this->partnersList = $partnersList;
      return $this;
    }

    /**
     * @return PromotionsList
     */
    public function getPromotionsList()
    {
      return $this->promotionsList;
    }

    /**
     * @param PromotionsList $promotionsList
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setPromotionsList($promotionsList)
    {
      $this->promotionsList = $promotionsList;
      return $this;
    }

    /**
     * @return EstimateShipGroupList
     */
    public function getShipGroupList()
    {
      return $this->shipGroupList;
    }

    /**
     * @param EstimateShipGroupList $shipGroupList
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setShipGroupList($shipGroupList)
    {
      $this->shipGroupList = $shipGroupList;
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
     * @return \Nzolt\NetSuite\Estimate
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
     * @return \Nzolt\NetSuite\Estimate
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
     * @return \Nzolt\NetSuite\Estimate
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
     * @return \Nzolt\NetSuite\Estimate
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
