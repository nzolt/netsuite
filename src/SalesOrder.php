<?php

namespace Nzolt\NetSuite;

class SalesOrder extends Record
{

    /**
     * @var \DateTime $createdDate
     */
    protected $createdDate = null;

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var RecordRef $entity
     */
    protected $entity = null;

    /**
     * @var RecordRef $job
     */
    protected $job = null;

    /**
     * @var RecordRef $currency
     */
    protected $currency = null;

    /**
     * @var RecordRef $drAccount
     */
    protected $drAccount = null;

    /**
     * @var RecordRef $fxAccount
     */
    protected $fxAccount = null;

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
     * @var RecordRef $createdFrom
     */
    protected $createdFrom = null;

    /**
     * @var SalesOrderOrderStatus $orderStatus
     */
    protected $orderStatus = null;

    /**
     * @var \DateTime $nextBill
     */
    protected $nextBill = null;

    /**
     * @var RecordRef $opportunity
     */
    protected $opportunity = null;

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
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var string $otherRefNum
     */
    protected $otherRefNum = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var \DateTime $salesEffectiveDate
     */
    protected $salesEffectiveDate = null;

    /**
     * @var boolean $excludeCommission
     */
    protected $excludeCommission = null;

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
     * @var float $exchangeRate
     */
    protected $exchangeRate = null;

    /**
     * @var RecordRef $promoCode
     */
    protected $promoCode = null;

    /**
     * @var string $currencyName
     */
    protected $currencyName = null;

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
     * @var \DateTime $actualShipDate
     */
    protected $actualShipDate = null;

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
     * @var boolean $isMultiShipTo
     */
    protected $isMultiShipTo = null;

    /**
     * @var string $shippingTax2Rate
     */
    protected $shippingTax2Rate = null;

    /**
     * @var RecordRef $shippingTaxCode
     */
    protected $shippingTaxCode = null;

    /**
     * @var RecordRef $handlingTaxCode
     */
    protected $handlingTaxCode = null;

    /**
     * @var float $handlingTax1Rate
     */
    protected $handlingTax1Rate = null;

    /**
     * @var string $handlingTax2Rate
     */
    protected $handlingTax2Rate = null;

    /**
     * @var float $handlingCost
     */
    protected $handlingCost = null;

    /**
     * @var string $trackingNumbers
     */
    protected $trackingNumbers = null;

    /**
     * @var string $linkedTrackingNumbers
     */
    protected $linkedTrackingNumbers = null;

    /**
     * @var boolean $shipComplete
     */
    protected $shipComplete = null;

    /**
     * @var RecordRef $paymentMethod
     */
    protected $paymentMethod = null;

    /**
     * @var string $shopperIpAddress
     */
    protected $shopperIpAddress = null;

    /**
     * @var boolean $saveOnAuthDecline
     */
    protected $saveOnAuthDecline = null;

    /**
     * @var boolean $canHaveStackable
     */
    protected $canHaveStackable = null;

    /**
     * @var RecordRef $creditCard
     */
    protected $creditCard = null;

    /**
     * @var RevenueStatus $revenueStatus
     */
    protected $revenueStatus = null;

    /**
     * @var float $recognizedRevenue
     */
    protected $recognizedRevenue = null;

    /**
     * @var float $deferredRevenue
     */
    protected $deferredRevenue = null;

    /**
     * @var boolean $revRecOnRevCommitment
     */
    protected $revRecOnRevCommitment = null;

    /**
     * @var RevenueCommitStatus $revCommitStatus
     */
    protected $revCommitStatus = null;

    /**
     * @var string $ccNumber
     */
    protected $ccNumber = null;

    /**
     * @var \DateTime $ccExpireDate
     */
    protected $ccExpireDate = null;

    /**
     * @var string $ccName
     */
    protected $ccName = null;

    /**
     * @var string $ccStreet
     */
    protected $ccStreet = null;

    /**
     * @var string $ccZipCode
     */
    protected $ccZipCode = null;

    /**
     * @var string $payPalStatus
     */
    protected $payPalStatus = null;

    /**
     * @var RecordRef $creditCardProcessor
     */
    protected $creditCardProcessor = null;

    /**
     * @var string $payPalTranId
     */
    protected $payPalTranId = null;

    /**
     * @var boolean $ccApproved
     */
    protected $ccApproved = null;

    /**
     * @var boolean $getAuth
     */
    protected $getAuth = null;

    /**
     * @var string $authCode
     */
    protected $authCode = null;

    /**
     * @var AvsMatchCode $ccAvsStreetMatch
     */
    protected $ccAvsStreetMatch = null;

    /**
     * @var AvsMatchCode $ccAvsZipMatch
     */
    protected $ccAvsZipMatch = null;

    /**
     * @var boolean $isRecurringPayment
     */
    protected $isRecurringPayment = null;

    /**
     * @var AvsMatchCode $ccSecurityCodeMatch
     */
    protected $ccSecurityCodeMatch = null;

    /**
     * @var float $altSalesTotal
     */
    protected $altSalesTotal = null;

    /**
     * @var boolean $ignoreAvs
     */
    protected $ignoreAvs = null;

    /**
     * @var TransactionPaymentEventResult $paymentEventResult
     */
    protected $paymentEventResult = null;

    /**
     * @var TransactionPaymentEventHoldReason $paymentEventHoldReason
     */
    protected $paymentEventHoldReason = null;

    /**
     * @var TransactionPaymentEventType $paymentEventType
     */
    protected $paymentEventType = null;

    /**
     * @var \DateTime $paymentEventDate
     */
    protected $paymentEventDate = null;

    /**
     * @var string $paymentEventUpdatedBy
     */
    protected $paymentEventUpdatedBy = null;

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
     * @var RecordRef $revRecSchedule
     */
    protected $revRecSchedule = null;

    /**
     * @var \DateTime $revRecStartDate
     */
    protected $revRecStartDate = null;

    /**
     * @var \DateTime $revRecEndDate
     */
    protected $revRecEndDate = null;

    /**
     * @var string $paypalAuthId
     */
    protected $paypalAuthId = null;

    /**
     * @var float $balance
     */
    protected $balance = null;

    /**
     * @var boolean $paypalProcess
     */
    protected $paypalProcess = null;

    /**
     * @var RecordRef $billingSchedule
     */
    protected $billingSchedule = null;

    /**
     * @var string $ccSecurityCode
     */
    protected $ccSecurityCode = null;

    /**
     * @var string $threeDStatusCode
     */
    protected $threeDStatusCode = null;

    /**
     * @var RecordRef $class
     */
    protected $class = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var RecordRef $intercoTransaction
     */
    protected $intercoTransaction = null;

    /**
     * @var IntercoStatus $intercoStatus
     */
    protected $intercoStatus = null;

    /**
     * @var string $debitCardIssueNo
     */
    protected $debitCardIssueNo = null;

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
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var string $pnRefNum
     */
    protected $pnRefNum = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var float $tax2Total
     */
    protected $tax2Total = null;

    /**
     * @var RecordRef $terms
     */
    protected $terms = null;

    /**
     * @var \DateTime $validFrom
     */
    protected $validFrom = null;

    /**
     * @var string $vatRegNum
     */
    protected $vatRegNum = null;

    /**
     * @var float $giftCertApplied
     */
    protected $giftCertApplied = null;

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
     * @var boolean $tranIsVsoeBundle
     */
    protected $tranIsVsoeBundle = null;

    /**
     * @var boolean $vsoeAutoCalc
     */
    protected $vsoeAutoCalc = null;

    /**
     * @var boolean $syncPartnerTeams
     */
    protected $syncPartnerTeams = null;

    /**
     * @var SalesOrderSalesTeamList $salesTeamList
     */
    protected $salesTeamList = null;

    /**
     * @var SalesOrderPartnersList $partnersList
     */
    protected $partnersList = null;

    /**
     * @var GiftCertRedemptionList $giftCertRedemptionList
     */
    protected $giftCertRedemptionList = null;

    /**
     * @var PromotionsList $promotionsList
     */
    protected $promotionsList = null;

    /**
     * @var SalesOrderItemList $itemList
     */
    protected $itemList = null;

    /**
     * @var SalesOrderShipGroupList $shipGroupList
     */
    protected $shipGroupList = null;

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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return RecordRef
     */
    public function getCustomForm()
    {
      return $this->customForm;
    }

    /**
     * @param RecordRef $customForm
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setJob($job)
    {
      $this->job = $job;
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDrAccount()
    {
      return $this->drAccount;
    }

    /**
     * @param RecordRef $drAccount
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setDrAccount($drAccount)
    {
      $this->drAccount = $drAccount;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getFxAccount()
    {
      return $this->fxAccount;
    }

    /**
     * @param RecordRef $fxAccount
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setFxAccount($fxAccount)
    {
      $this->fxAccount = $fxAccount;
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setSource($source)
    {
      $this->source = $source;
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setCreatedFrom($createdFrom)
    {
      $this->createdFrom = $createdFrom;
      return $this;
    }

    /**
     * @return SalesOrderOrderStatus
     */
    public function getOrderStatus()
    {
      return $this->orderStatus;
    }

    /**
     * @param SalesOrderOrderStatus $orderStatus
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setOrderStatus($orderStatus)
    {
      $this->orderStatus = $orderStatus;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNextBill()
    {
      if ($this->nextBill == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->nextBill);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $nextBill
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setNextBill(\DateTime $nextBill = null)
    {
      if ($nextBill == null) {
       $this->nextBill = null;
      } else {
        $this->nextBill = $nextBill->format(\DateTime::ATOM);
      }
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setOpportunity($opportunity)
    {
      $this->opportunity = $opportunity;
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setLeadSource($leadSource)
    {
      $this->leadSource = $leadSource;
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return string
     */
    public function getOtherRefNum()
    {
      return $this->otherRefNum;
    }

    /**
     * @param string $otherRefNum
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSalesEffectiveDate()
    {
      if ($this->salesEffectiveDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->salesEffectiveDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $salesEffectiveDate
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setSalesEffectiveDate(\DateTime $salesEffectiveDate = null)
    {
      if ($salesEffectiveDate == null) {
       $this->salesEffectiveDate = null;
      } else {
        $this->salesEffectiveDate = $salesEffectiveDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeCommission()
    {
      return $this->excludeCommission;
    }

    /**
     * @param boolean $excludeCommission
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setExcludeCommission($excludeCommission)
    {
      $this->excludeCommission = $excludeCommission;
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setEstGrossProfitPercent($estGrossProfitPercent)
    {
      $this->estGrossProfitPercent = $estGrossProfitPercent;
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setExchangeRate($exchangeRate)
    {
      $this->exchangeRate = $exchangeRate;
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setPromoCode($promoCode)
    {
      $this->promoCode = $promoCode;
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setCurrencyName($currencyName)
    {
      $this->currencyName = $currencyName;
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setTaxRate($taxRate)
    {
      $this->taxRate = $taxRate;
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setFax($fax)
    {
      $this->fax = $fax;
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \DateTime
     */
    public function getActualShipDate()
    {
      if ($this->actualShipDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->actualShipDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $actualShipDate
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setActualShipDate(\DateTime $actualShipDate = null)
    {
      if ($actualShipDate == null) {
       $this->actualShipDate = null;
      } else {
        $this->actualShipDate = $actualShipDate->format(\DateTime::ATOM);
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setShippingTax1Rate($shippingTax1Rate)
    {
      $this->shippingTax1Rate = $shippingTax1Rate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMultiShipTo()
    {
      return $this->isMultiShipTo;
    }

    /**
     * @param boolean $isMultiShipTo
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setIsMultiShipTo($isMultiShipTo)
    {
      $this->isMultiShipTo = $isMultiShipTo;
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setShippingTax2Rate($shippingTax2Rate)
    {
      $this->shippingTax2Rate = $shippingTax2Rate;
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setShippingTaxCode($shippingTaxCode)
    {
      $this->shippingTaxCode = $shippingTaxCode;
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setHandlingTax1Rate($handlingTax1Rate)
    {
      $this->handlingTax1Rate = $handlingTax1Rate;
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setHandlingTax2Rate($handlingTax2Rate)
    {
      $this->handlingTax2Rate = $handlingTax2Rate;
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setTrackingNumbers($trackingNumbers)
    {
      $this->trackingNumbers = $trackingNumbers;
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setLinkedTrackingNumbers($linkedTrackingNumbers)
    {
      $this->linkedTrackingNumbers = $linkedTrackingNumbers;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShipComplete()
    {
      return $this->shipComplete;
    }

    /**
     * @param boolean $shipComplete
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setShipComplete($shipComplete)
    {
      $this->shipComplete = $shipComplete;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPaymentMethod()
    {
      return $this->paymentMethod;
    }

    /**
     * @param RecordRef $paymentMethod
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setPaymentMethod($paymentMethod)
    {
      $this->paymentMethod = $paymentMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getShopperIpAddress()
    {
      return $this->shopperIpAddress;
    }

    /**
     * @param string $shopperIpAddress
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setShopperIpAddress($shopperIpAddress)
    {
      $this->shopperIpAddress = $shopperIpAddress;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSaveOnAuthDecline()
    {
      return $this->saveOnAuthDecline;
    }

    /**
     * @param boolean $saveOnAuthDecline
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setSaveOnAuthDecline($saveOnAuthDecline)
    {
      $this->saveOnAuthDecline = $saveOnAuthDecline;
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setCanHaveStackable($canHaveStackable)
    {
      $this->canHaveStackable = $canHaveStackable;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCreditCard()
    {
      return $this->creditCard;
    }

    /**
     * @param RecordRef $creditCard
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setCreditCard($creditCard)
    {
      $this->creditCard = $creditCard;
      return $this;
    }

    /**
     * @return RevenueStatus
     */
    public function getRevenueStatus()
    {
      return $this->revenueStatus;
    }

    /**
     * @param RevenueStatus $revenueStatus
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setRevenueStatus($revenueStatus)
    {
      $this->revenueStatus = $revenueStatus;
      return $this;
    }

    /**
     * @return float
     */
    public function getRecognizedRevenue()
    {
      return $this->recognizedRevenue;
    }

    /**
     * @param float $recognizedRevenue
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setRecognizedRevenue($recognizedRevenue)
    {
      $this->recognizedRevenue = $recognizedRevenue;
      return $this;
    }

    /**
     * @return float
     */
    public function getDeferredRevenue()
    {
      return $this->deferredRevenue;
    }

    /**
     * @param float $deferredRevenue
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setDeferredRevenue($deferredRevenue)
    {
      $this->deferredRevenue = $deferredRevenue;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRevRecOnRevCommitment()
    {
      return $this->revRecOnRevCommitment;
    }

    /**
     * @param boolean $revRecOnRevCommitment
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setRevRecOnRevCommitment($revRecOnRevCommitment)
    {
      $this->revRecOnRevCommitment = $revRecOnRevCommitment;
      return $this;
    }

    /**
     * @return RevenueCommitStatus
     */
    public function getRevCommitStatus()
    {
      return $this->revCommitStatus;
    }

    /**
     * @param RevenueCommitStatus $revCommitStatus
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setRevCommitStatus($revCommitStatus)
    {
      $this->revCommitStatus = $revCommitStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getCcNumber()
    {
      return $this->ccNumber;
    }

    /**
     * @param string $ccNumber
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setCcNumber($ccNumber)
    {
      $this->ccNumber = $ccNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCcExpireDate()
    {
      if ($this->ccExpireDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ccExpireDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ccExpireDate
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setCcExpireDate(\DateTime $ccExpireDate = null)
    {
      if ($ccExpireDate == null) {
       $this->ccExpireDate = null;
      } else {
        $this->ccExpireDate = $ccExpireDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getCcName()
    {
      return $this->ccName;
    }

    /**
     * @param string $ccName
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setCcName($ccName)
    {
      $this->ccName = $ccName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCcStreet()
    {
      return $this->ccStreet;
    }

    /**
     * @param string $ccStreet
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setCcStreet($ccStreet)
    {
      $this->ccStreet = $ccStreet;
      return $this;
    }

    /**
     * @return string
     */
    public function getCcZipCode()
    {
      return $this->ccZipCode;
    }

    /**
     * @param string $ccZipCode
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setCcZipCode($ccZipCode)
    {
      $this->ccZipCode = $ccZipCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayPalStatus()
    {
      return $this->payPalStatus;
    }

    /**
     * @param string $payPalStatus
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setPayPalStatus($payPalStatus)
    {
      $this->payPalStatus = $payPalStatus;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCreditCardProcessor()
    {
      return $this->creditCardProcessor;
    }

    /**
     * @param RecordRef $creditCardProcessor
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setCreditCardProcessor($creditCardProcessor)
    {
      $this->creditCardProcessor = $creditCardProcessor;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayPalTranId()
    {
      return $this->payPalTranId;
    }

    /**
     * @param string $payPalTranId
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setPayPalTranId($payPalTranId)
    {
      $this->payPalTranId = $payPalTranId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCcApproved()
    {
      return $this->ccApproved;
    }

    /**
     * @param boolean $ccApproved
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setCcApproved($ccApproved)
    {
      $this->ccApproved = $ccApproved;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGetAuth()
    {
      return $this->getAuth;
    }

    /**
     * @param boolean $getAuth
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setGetAuth($getAuth)
    {
      $this->getAuth = $getAuth;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthCode()
    {
      return $this->authCode;
    }

    /**
     * @param string $authCode
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setAuthCode($authCode)
    {
      $this->authCode = $authCode;
      return $this;
    }

    /**
     * @return AvsMatchCode
     */
    public function getCcAvsStreetMatch()
    {
      return $this->ccAvsStreetMatch;
    }

    /**
     * @param AvsMatchCode $ccAvsStreetMatch
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setCcAvsStreetMatch($ccAvsStreetMatch)
    {
      $this->ccAvsStreetMatch = $ccAvsStreetMatch;
      return $this;
    }

    /**
     * @return AvsMatchCode
     */
    public function getCcAvsZipMatch()
    {
      return $this->ccAvsZipMatch;
    }

    /**
     * @param AvsMatchCode $ccAvsZipMatch
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setCcAvsZipMatch($ccAvsZipMatch)
    {
      $this->ccAvsZipMatch = $ccAvsZipMatch;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRecurringPayment()
    {
      return $this->isRecurringPayment;
    }

    /**
     * @param boolean $isRecurringPayment
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setIsRecurringPayment($isRecurringPayment)
    {
      $this->isRecurringPayment = $isRecurringPayment;
      return $this;
    }

    /**
     * @return AvsMatchCode
     */
    public function getCcSecurityCodeMatch()
    {
      return $this->ccSecurityCodeMatch;
    }

    /**
     * @param AvsMatchCode $ccSecurityCodeMatch
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setCcSecurityCodeMatch($ccSecurityCodeMatch)
    {
      $this->ccSecurityCodeMatch = $ccSecurityCodeMatch;
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setAltSalesTotal($altSalesTotal)
    {
      $this->altSalesTotal = $altSalesTotal;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIgnoreAvs()
    {
      return $this->ignoreAvs;
    }

    /**
     * @param boolean $ignoreAvs
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setIgnoreAvs($ignoreAvs)
    {
      $this->ignoreAvs = $ignoreAvs;
      return $this;
    }

    /**
     * @return TransactionPaymentEventResult
     */
    public function getPaymentEventResult()
    {
      return $this->paymentEventResult;
    }

    /**
     * @param TransactionPaymentEventResult $paymentEventResult
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setPaymentEventResult($paymentEventResult)
    {
      $this->paymentEventResult = $paymentEventResult;
      return $this;
    }

    /**
     * @return TransactionPaymentEventHoldReason
     */
    public function getPaymentEventHoldReason()
    {
      return $this->paymentEventHoldReason;
    }

    /**
     * @param TransactionPaymentEventHoldReason $paymentEventHoldReason
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setPaymentEventHoldReason($paymentEventHoldReason)
    {
      $this->paymentEventHoldReason = $paymentEventHoldReason;
      return $this;
    }

    /**
     * @return TransactionPaymentEventType
     */
    public function getPaymentEventType()
    {
      return $this->paymentEventType;
    }

    /**
     * @param TransactionPaymentEventType $paymentEventType
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setPaymentEventType($paymentEventType)
    {
      $this->paymentEventType = $paymentEventType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPaymentEventDate()
    {
      if ($this->paymentEventDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->paymentEventDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $paymentEventDate
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setPaymentEventDate(\DateTime $paymentEventDate = null)
    {
      if ($paymentEventDate == null) {
       $this->paymentEventDate = null;
      } else {
        $this->paymentEventDate = $paymentEventDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentEventUpdatedBy()
    {
      return $this->paymentEventUpdatedBy;
    }

    /**
     * @param string $paymentEventUpdatedBy
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setPaymentEventUpdatedBy($paymentEventUpdatedBy)
    {
      $this->paymentEventUpdatedBy = $paymentEventUpdatedBy;
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setTotal($total)
    {
      $this->total = $total;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevRecSchedule()
    {
      return $this->revRecSchedule;
    }

    /**
     * @param RecordRef $revRecSchedule
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setRevRecSchedule($revRecSchedule)
    {
      $this->revRecSchedule = $revRecSchedule;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRevRecStartDate()
    {
      if ($this->revRecStartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->revRecStartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $revRecStartDate
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setRevRecStartDate(\DateTime $revRecStartDate = null)
    {
      if ($revRecStartDate == null) {
       $this->revRecStartDate = null;
      } else {
        $this->revRecStartDate = $revRecStartDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRevRecEndDate()
    {
      if ($this->revRecEndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->revRecEndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $revRecEndDate
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setRevRecEndDate(\DateTime $revRecEndDate = null)
    {
      if ($revRecEndDate == null) {
       $this->revRecEndDate = null;
      } else {
        $this->revRecEndDate = $revRecEndDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getPaypalAuthId()
    {
      return $this->paypalAuthId;
    }

    /**
     * @param string $paypalAuthId
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setPaypalAuthId($paypalAuthId)
    {
      $this->paypalAuthId = $paypalAuthId;
      return $this;
    }

    /**
     * @return float
     */
    public function getBalance()
    {
      return $this->balance;
    }

    /**
     * @param float $balance
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setBalance($balance)
    {
      $this->balance = $balance;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPaypalProcess()
    {
      return $this->paypalProcess;
    }

    /**
     * @param boolean $paypalProcess
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setPaypalProcess($paypalProcess)
    {
      $this->paypalProcess = $paypalProcess;
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setBillingSchedule($billingSchedule)
    {
      $this->billingSchedule = $billingSchedule;
      return $this;
    }

    /**
     * @return string
     */
    public function getCcSecurityCode()
    {
      return $this->ccSecurityCode;
    }

    /**
     * @param string $ccSecurityCode
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setCcSecurityCode($ccSecurityCode)
    {
      $this->ccSecurityCode = $ccSecurityCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getThreeDStatusCode()
    {
      return $this->threeDStatusCode;
    }

    /**
     * @param string $threeDStatusCode
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setThreeDStatusCode($threeDStatusCode)
    {
      $this->threeDStatusCode = $threeDStatusCode;
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setClass($class)
    {
      $this->class = $class;
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setDepartment($department)
    {
      $this->department = $department;
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIntercoTransaction()
    {
      return $this->intercoTransaction;
    }

    /**
     * @param RecordRef $intercoTransaction
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setIntercoTransaction($intercoTransaction)
    {
      $this->intercoTransaction = $intercoTransaction;
      return $this;
    }

    /**
     * @return IntercoStatus
     */
    public function getIntercoStatus()
    {
      return $this->intercoStatus;
    }

    /**
     * @param IntercoStatus $intercoStatus
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setIntercoStatus($intercoStatus)
    {
      $this->intercoStatus = $intercoStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getDebitCardIssueNo()
    {
      return $this->debitCardIssueNo;
    }

    /**
     * @param string $debitCardIssueNo
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setDebitCardIssueNo($debitCardIssueNo)
    {
      $this->debitCardIssueNo = $debitCardIssueNo;
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setTaxDetailsOverride($taxDetailsOverride)
    {
      $this->taxDetailsOverride = $taxDetailsOverride;
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return string
     */
    public function getPnRefNum()
    {
      return $this->pnRefNum;
    }

    /**
     * @param string $pnRefNum
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setPnRefNum($pnRefNum)
    {
      $this->pnRefNum = $pnRefNum;
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setStatus($status)
    {
      $this->status = $status;
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setTax2Total($tax2Total)
    {
      $this->tax2Total = $tax2Total;
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setTerms($terms)
    {
      $this->terms = $terms;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValidFrom()
    {
      if ($this->validFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->validFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $validFrom
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setValidFrom(\DateTime $validFrom = null)
    {
      if ($validFrom == null) {
       $this->validFrom = null;
      } else {
        $this->validFrom = $validFrom->format(\DateTime::ATOM);
      }
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setVatRegNum($vatRegNum)
    {
      $this->vatRegNum = $vatRegNum;
      return $this;
    }

    /**
     * @return float
     */
    public function getGiftCertApplied()
    {
      return $this->giftCertApplied;
    }

    /**
     * @param float $giftCertApplied
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setGiftCertApplied($giftCertApplied)
    {
      $this->giftCertApplied = $giftCertApplied;
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setRecurAnnually($recurAnnually)
    {
      $this->recurAnnually = $recurAnnually;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTranIsVsoeBundle()
    {
      return $this->tranIsVsoeBundle;
    }

    /**
     * @param boolean $tranIsVsoeBundle
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setTranIsVsoeBundle($tranIsVsoeBundle)
    {
      $this->tranIsVsoeBundle = $tranIsVsoeBundle;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getVsoeAutoCalc()
    {
      return $this->vsoeAutoCalc;
    }

    /**
     * @param boolean $vsoeAutoCalc
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setVsoeAutoCalc($vsoeAutoCalc)
    {
      $this->vsoeAutoCalc = $vsoeAutoCalc;
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setSyncPartnerTeams($syncPartnerTeams)
    {
      $this->syncPartnerTeams = $syncPartnerTeams;
      return $this;
    }

    /**
     * @return SalesOrderSalesTeamList
     */
    public function getSalesTeamList()
    {
      return $this->salesTeamList;
    }

    /**
     * @param SalesOrderSalesTeamList $salesTeamList
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setSalesTeamList($salesTeamList)
    {
      $this->salesTeamList = $salesTeamList;
      return $this;
    }

    /**
     * @return SalesOrderPartnersList
     */
    public function getPartnersList()
    {
      return $this->partnersList;
    }

    /**
     * @param SalesOrderPartnersList $partnersList
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setPartnersList($partnersList)
    {
      $this->partnersList = $partnersList;
      return $this;
    }

    /**
     * @return GiftCertRedemptionList
     */
    public function getGiftCertRedemptionList()
    {
      return $this->giftCertRedemptionList;
    }

    /**
     * @param GiftCertRedemptionList $giftCertRedemptionList
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setGiftCertRedemptionList($giftCertRedemptionList)
    {
      $this->giftCertRedemptionList = $giftCertRedemptionList;
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setPromotionsList($promotionsList)
    {
      $this->promotionsList = $promotionsList;
      return $this;
    }

    /**
     * @return SalesOrderItemList
     */
    public function getItemList()
    {
      return $this->itemList;
    }

    /**
     * @param SalesOrderItemList $itemList
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setItemList($itemList)
    {
      $this->itemList = $itemList;
      return $this;
    }

    /**
     * @return SalesOrderShipGroupList
     */
    public function getShipGroupList()
    {
      return $this->shipGroupList;
    }

    /**
     * @param SalesOrderShipGroupList $shipGroupList
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setShipGroupList($shipGroupList)
    {
      $this->shipGroupList = $shipGroupList;
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
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
     * @return \Nzolt\NetSuite\SalesOrder
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
