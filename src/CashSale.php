<?php

namespace Nzolt\NetSuite;

class CashSale extends Record
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
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var RecordRef $entity
     */
    protected $entity = null;

    /**
     * @var RecordRef $billingAccount
     */
    protected $billingAccount = null;

    /**
     * @var boolean $recurringBill
     */
    protected $recurringBill = null;

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
     * @var RecordRef $postingPeriod
     */
    protected $postingPeriod = null;

    /**
     * @var RecordRef $createdFrom
     */
    protected $createdFrom = null;

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
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

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
     * @var RecordRef $revRecSchedule
     */
    protected $revRecSchedule = null;

    /**
     * @var boolean $undepFunds
     */
    protected $undepFunds = null;

    /**
     * @var boolean $canHaveStackable
     */
    protected $canHaveStackable = null;

    /**
     * @var RecordRef $currency
     */
    protected $currency = null;

    /**
     * @var RecordRef $account
     */
    protected $account = null;

    /**
     * @var \DateTime $revRecStartDate
     */
    protected $revRecStartDate = null;

    /**
     * @var \DateTime $revRecEndDate
     */
    protected $revRecEndDate = null;

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
     * @var boolean $toBePrinted
     */
    protected $toBePrinted = null;

    /**
     * @var boolean $toBeEmailed
     */
    protected $toBeEmailed = null;

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
     * @var float $handlingCost
     */
    protected $handlingCost = null;

    /**
     * @var string $handlingTax2Rate
     */
    protected $handlingTax2Rate = null;

    /**
     * @var string $linkedTrackingNumbers
     */
    protected $linkedTrackingNumbers = null;

    /**
     * @var string $trackingNumbers
     */
    protected $trackingNumbers = null;

    /**
     * @var RecordRef $salesGroup
     */
    protected $salesGroup = null;

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
     * @var boolean $syncSalesTeams
     */
    protected $syncSalesTeams = null;

    /**
     * @var RecordRef $paymentMethod
     */
    protected $paymentMethod = null;

    /**
     * @var string $payPalStatus
     */
    protected $payPalStatus = null;

    /**
     * @var RecordRef $creditCard
     */
    protected $creditCard = null;

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
     * @var RecordRef $creditCardProcessor
     */
    protected $creditCardProcessor = null;

    /**
     * @var boolean $ccApproved
     */
    protected $ccApproved = null;

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
     * @var string $payPalTranId
     */
    protected $payPalTranId = null;

    /**
     * @var float $subTotal
     */
    protected $subTotal = null;

    /**
     * @var boolean $ccIsPurchaseCardBin
     */
    protected $ccIsPurchaseCardBin = null;

    /**
     * @var boolean $ignoreAvs
     */
    protected $ignoreAvs = null;

    /**
     * @var boolean $ccProcessAsPurchaseCard
     */
    protected $ccProcessAsPurchaseCard = null;

    /**
     * @var RecordRef $itemCostDiscount
     */
    protected $itemCostDiscount = null;

    /**
     * @var string $itemCostDiscRate
     */
    protected $itemCostDiscRate = null;

    /**
     * @var float $itemCostDiscAmount
     */
    protected $itemCostDiscAmount = null;

    /**
     * @var float $itemCostTaxRate1
     */
    protected $itemCostTaxRate1 = null;

    /**
     * @var float $itemCostTaxRate2
     */
    protected $itemCostTaxRate2 = null;

    /**
     * @var boolean $itemCostDiscTaxable
     */
    protected $itemCostDiscTaxable = null;

    /**
     * @var RecordRef $itemCostTaxCode
     */
    protected $itemCostTaxCode = null;

    /**
     * @var float $itemCostDiscTax1Amt
     */
    protected $itemCostDiscTax1Amt = null;

    /**
     * @var boolean $itemCostDiscPrint
     */
    protected $itemCostDiscPrint = null;

    /**
     * @var RecordRef $expCostDiscount
     */
    protected $expCostDiscount = null;

    /**
     * @var string $expCostDiscRate
     */
    protected $expCostDiscRate = null;

    /**
     * @var float $expCostDiscAmount
     */
    protected $expCostDiscAmount = null;

    /**
     * @var boolean $expCostDiscTaxable
     */
    protected $expCostDiscTaxable = null;

    /**
     * @var boolean $expCostDiscprint
     */
    protected $expCostDiscprint = null;

    /**
     * @var float $expCostTaxRate1
     */
    protected $expCostTaxRate1 = null;

    /**
     * @var RecordRef $timeDiscount
     */
    protected $timeDiscount = null;

    /**
     * @var RecordRef $expCostTaxCode
     */
    protected $expCostTaxCode = null;

    /**
     * @var string $timeDiscRate
     */
    protected $timeDiscRate = null;

    /**
     * @var float $expCostTaxRate2
     */
    protected $expCostTaxRate2 = null;

    /**
     * @var float $expCostDiscTax1Amt
     */
    protected $expCostDiscTax1Amt = null;

    /**
     * @var float $timeDiscAmount
     */
    protected $timeDiscAmount = null;

    /**
     * @var boolean $timeDiscTaxable
     */
    protected $timeDiscTaxable = null;

    /**
     * @var boolean $timeDiscPrint
     */
    protected $timeDiscPrint = null;

    /**
     * @var float $discountTotal
     */
    protected $discountTotal = null;

    /**
     * @var float $taxTotal
     */
    protected $taxTotal = null;

    /**
     * @var float $timeTaxRate1
     */
    protected $timeTaxRate1 = null;

    /**
     * @var float $altShippingCost
     */
    protected $altShippingCost = null;

    /**
     * @var RecordRef $timeTaxCode
     */
    protected $timeTaxCode = null;

    /**
     * @var float $altHandlingCost
     */
    protected $altHandlingCost = null;

    /**
     * @var float $total
     */
    protected $total = null;

    /**
     * @var float $timeDiscTax1Amt
     */
    protected $timeDiscTax1Amt = null;

    /**
     * @var string $ccSecurityCode
     */
    protected $ccSecurityCode = null;

    /**
     * @var float $timeTaxRate2
     */
    protected $timeTaxRate2 = null;

    /**
     * @var AvsMatchCode $ccSecurityCodeMatch
     */
    protected $ccSecurityCodeMatch = null;

    /**
     * @var boolean $chargeIt
     */
    protected $chargeIt = null;

    /**
     * @var string $debitCardIssueNo
     */
    protected $debitCardIssueNo = null;

    /**
     * @var string $threeDStatusCode
     */
    protected $threeDStatusCode = null;

    /**
     * @var string $pnRefNum
     */
    protected $pnRefNum = null;

    /**
     * @var string $paypalAuthId
     */
    protected $paypalAuthId = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var boolean $paypalProcess
     */
    protected $paypalProcess = null;

    /**
     * @var RecordRef $job
     */
    protected $job = null;

    /**
     * @var RecordRef $billingSchedule
     */
    protected $billingSchedule = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var float $tax2Total
     */
    protected $tax2Total = null;

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
     * @var CashSaleSalesTeamList $salesTeamList
     */
    protected $salesTeamList = null;

    /**
     * @var CashSalePartnersList $partnersList
     */
    protected $partnersList = null;

    /**
     * @var CashSaleItemList $itemList
     */
    protected $itemList = null;

    /**
     * @var AccountingBookDetailList $accountingBookDetailList
     */
    protected $accountingBookDetailList = null;

    /**
     * @var CashSaleItemCostList $itemCostList
     */
    protected $itemCostList = null;

    /**
     * @var GiftCertRedemptionList $giftCertRedemptionList
     */
    protected $giftCertRedemptionList = null;

    /**
     * @var PromotionsList $promotionsList
     */
    protected $promotionsList = null;

    /**
     * @var CashSaleExpCostList $expCostList
     */
    protected $expCostList = null;

    /**
     * @var CashSaleTimeList $timeList
     */
    protected $timeList = null;

    /**
     * @var CashSaleShipGroupList $shipGroupList
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setTaxDetailsOverride($taxDetailsOverride)
    {
      $this->taxDetailsOverride = $taxDetailsOverride;
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillingAccount()
    {
      return $this->billingAccount;
    }

    /**
     * @param RecordRef $billingAccount
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setBillingAccount($billingAccount)
    {
      $this->billingAccount = $billingAccount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRecurringBill()
    {
      return $this->recurringBill;
    }

    /**
     * @param boolean $recurringBill
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setRecurringBill($recurringBill)
    {
      $this->recurringBill = $recurringBill;
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setSource($source)
    {
      $this->source = $source;
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setPostingPeriod($postingPeriod)
    {
      $this->postingPeriod = $postingPeriod;
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setCreatedFrom($createdFrom)
    {
      $this->createdFrom = $createdFrom;
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setClass($class)
    {
      $this->class = $class;
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setPartner($partner)
    {
      $this->partner = $partner;
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setExcludeCommission($excludeCommission)
    {
      $this->excludeCommission = $excludeCommission;
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setRevRecSchedule($revRecSchedule)
    {
      $this->revRecSchedule = $revRecSchedule;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUndepFunds()
    {
      return $this->undepFunds;
    }

    /**
     * @param boolean $undepFunds
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setUndepFunds($undepFunds)
    {
      $this->undepFunds = $undepFunds;
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setCanHaveStackable($canHaveStackable)
    {
      $this->canHaveStackable = $canHaveStackable;
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAccount()
    {
      return $this->account;
    }

    /**
     * @param RecordRef $account
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setAccount($account)
    {
      $this->account = $account;
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return float
     */
    public function getTotalCostEstimate()
    {
      return $this->totalCostEstimate;
    }

    /**
     * @param float $totalCostEstimate
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setToBeEmailed($toBeEmailed)
    {
      $this->toBeEmailed = $toBeEmailed;
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setShippingTax1Rate($shippingTax1Rate)
    {
      $this->shippingTax1Rate = $shippingTax1Rate;
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setHandlingCost($handlingCost)
    {
      $this->handlingCost = $handlingCost;
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setLinkedTrackingNumbers($linkedTrackingNumbers)
    {
      $this->linkedTrackingNumbers = $linkedTrackingNumbers;
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setTrackingNumbers($trackingNumbers)
    {
      $this->trackingNumbers = $trackingNumbers;
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setSalesGroup($salesGroup)
    {
      $this->salesGroup = $salesGroup;
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setRevRecOnRevCommitment($revRecOnRevCommitment)
    {
      $this->revRecOnRevCommitment = $revRecOnRevCommitment;
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setSyncSalesTeams($syncSalesTeams)
    {
      $this->syncSalesTeams = $syncSalesTeams;
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setPaymentMethod($paymentMethod)
    {
      $this->paymentMethod = $paymentMethod;
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setPayPalStatus($payPalStatus)
    {
      $this->payPalStatus = $payPalStatus;
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setCreditCard($creditCard)
    {
      $this->creditCard = $creditCard;
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setCcZipCode($ccZipCode)
    {
      $this->ccZipCode = $ccZipCode;
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setCreditCardProcessor($creditCardProcessor)
    {
      $this->creditCardProcessor = $creditCardProcessor;
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setCcApproved($ccApproved)
    {
      $this->ccApproved = $ccApproved;
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setIsRecurringPayment($isRecurringPayment)
    {
      $this->isRecurringPayment = $isRecurringPayment;
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setPayPalTranId($payPalTranId)
    {
      $this->payPalTranId = $payPalTranId;
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setSubTotal($subTotal)
    {
      $this->subTotal = $subTotal;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCcIsPurchaseCardBin()
    {
      return $this->ccIsPurchaseCardBin;
    }

    /**
     * @param boolean $ccIsPurchaseCardBin
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setCcIsPurchaseCardBin($ccIsPurchaseCardBin)
    {
      $this->ccIsPurchaseCardBin = $ccIsPurchaseCardBin;
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setIgnoreAvs($ignoreAvs)
    {
      $this->ignoreAvs = $ignoreAvs;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCcProcessAsPurchaseCard()
    {
      return $this->ccProcessAsPurchaseCard;
    }

    /**
     * @param boolean $ccProcessAsPurchaseCard
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setCcProcessAsPurchaseCard($ccProcessAsPurchaseCard)
    {
      $this->ccProcessAsPurchaseCard = $ccProcessAsPurchaseCard;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItemCostDiscount()
    {
      return $this->itemCostDiscount;
    }

    /**
     * @param RecordRef $itemCostDiscount
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setItemCostDiscount($itemCostDiscount)
    {
      $this->itemCostDiscount = $itemCostDiscount;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemCostDiscRate()
    {
      return $this->itemCostDiscRate;
    }

    /**
     * @param string $itemCostDiscRate
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setItemCostDiscRate($itemCostDiscRate)
    {
      $this->itemCostDiscRate = $itemCostDiscRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getItemCostDiscAmount()
    {
      return $this->itemCostDiscAmount;
    }

    /**
     * @param float $itemCostDiscAmount
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setItemCostDiscAmount($itemCostDiscAmount)
    {
      $this->itemCostDiscAmount = $itemCostDiscAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getItemCostTaxRate1()
    {
      return $this->itemCostTaxRate1;
    }

    /**
     * @param float $itemCostTaxRate1
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setItemCostTaxRate1($itemCostTaxRate1)
    {
      $this->itemCostTaxRate1 = $itemCostTaxRate1;
      return $this;
    }

    /**
     * @return float
     */
    public function getItemCostTaxRate2()
    {
      return $this->itemCostTaxRate2;
    }

    /**
     * @param float $itemCostTaxRate2
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setItemCostTaxRate2($itemCostTaxRate2)
    {
      $this->itemCostTaxRate2 = $itemCostTaxRate2;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getItemCostDiscTaxable()
    {
      return $this->itemCostDiscTaxable;
    }

    /**
     * @param boolean $itemCostDiscTaxable
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setItemCostDiscTaxable($itemCostDiscTaxable)
    {
      $this->itemCostDiscTaxable = $itemCostDiscTaxable;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItemCostTaxCode()
    {
      return $this->itemCostTaxCode;
    }

    /**
     * @param RecordRef $itemCostTaxCode
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setItemCostTaxCode($itemCostTaxCode)
    {
      $this->itemCostTaxCode = $itemCostTaxCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getItemCostDiscTax1Amt()
    {
      return $this->itemCostDiscTax1Amt;
    }

    /**
     * @param float $itemCostDiscTax1Amt
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setItemCostDiscTax1Amt($itemCostDiscTax1Amt)
    {
      $this->itemCostDiscTax1Amt = $itemCostDiscTax1Amt;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getItemCostDiscPrint()
    {
      return $this->itemCostDiscPrint;
    }

    /**
     * @param boolean $itemCostDiscPrint
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setItemCostDiscPrint($itemCostDiscPrint)
    {
      $this->itemCostDiscPrint = $itemCostDiscPrint;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getExpCostDiscount()
    {
      return $this->expCostDiscount;
    }

    /**
     * @param RecordRef $expCostDiscount
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setExpCostDiscount($expCostDiscount)
    {
      $this->expCostDiscount = $expCostDiscount;
      return $this;
    }

    /**
     * @return string
     */
    public function getExpCostDiscRate()
    {
      return $this->expCostDiscRate;
    }

    /**
     * @param string $expCostDiscRate
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setExpCostDiscRate($expCostDiscRate)
    {
      $this->expCostDiscRate = $expCostDiscRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getExpCostDiscAmount()
    {
      return $this->expCostDiscAmount;
    }

    /**
     * @param float $expCostDiscAmount
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setExpCostDiscAmount($expCostDiscAmount)
    {
      $this->expCostDiscAmount = $expCostDiscAmount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExpCostDiscTaxable()
    {
      return $this->expCostDiscTaxable;
    }

    /**
     * @param boolean $expCostDiscTaxable
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setExpCostDiscTaxable($expCostDiscTaxable)
    {
      $this->expCostDiscTaxable = $expCostDiscTaxable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExpCostDiscprint()
    {
      return $this->expCostDiscprint;
    }

    /**
     * @param boolean $expCostDiscprint
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setExpCostDiscprint($expCostDiscprint)
    {
      $this->expCostDiscprint = $expCostDiscprint;
      return $this;
    }

    /**
     * @return float
     */
    public function getExpCostTaxRate1()
    {
      return $this->expCostTaxRate1;
    }

    /**
     * @param float $expCostTaxRate1
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setExpCostTaxRate1($expCostTaxRate1)
    {
      $this->expCostTaxRate1 = $expCostTaxRate1;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTimeDiscount()
    {
      return $this->timeDiscount;
    }

    /**
     * @param RecordRef $timeDiscount
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setTimeDiscount($timeDiscount)
    {
      $this->timeDiscount = $timeDiscount;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getExpCostTaxCode()
    {
      return $this->expCostTaxCode;
    }

    /**
     * @param RecordRef $expCostTaxCode
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setExpCostTaxCode($expCostTaxCode)
    {
      $this->expCostTaxCode = $expCostTaxCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTimeDiscRate()
    {
      return $this->timeDiscRate;
    }

    /**
     * @param string $timeDiscRate
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setTimeDiscRate($timeDiscRate)
    {
      $this->timeDiscRate = $timeDiscRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getExpCostTaxRate2()
    {
      return $this->expCostTaxRate2;
    }

    /**
     * @param float $expCostTaxRate2
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setExpCostTaxRate2($expCostTaxRate2)
    {
      $this->expCostTaxRate2 = $expCostTaxRate2;
      return $this;
    }

    /**
     * @return float
     */
    public function getExpCostDiscTax1Amt()
    {
      return $this->expCostDiscTax1Amt;
    }

    /**
     * @param float $expCostDiscTax1Amt
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setExpCostDiscTax1Amt($expCostDiscTax1Amt)
    {
      $this->expCostDiscTax1Amt = $expCostDiscTax1Amt;
      return $this;
    }

    /**
     * @return float
     */
    public function getTimeDiscAmount()
    {
      return $this->timeDiscAmount;
    }

    /**
     * @param float $timeDiscAmount
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setTimeDiscAmount($timeDiscAmount)
    {
      $this->timeDiscAmount = $timeDiscAmount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTimeDiscTaxable()
    {
      return $this->timeDiscTaxable;
    }

    /**
     * @param boolean $timeDiscTaxable
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setTimeDiscTaxable($timeDiscTaxable)
    {
      $this->timeDiscTaxable = $timeDiscTaxable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTimeDiscPrint()
    {
      return $this->timeDiscPrint;
    }

    /**
     * @param boolean $timeDiscPrint
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setTimeDiscPrint($timeDiscPrint)
    {
      $this->timeDiscPrint = $timeDiscPrint;
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setTaxTotal($taxTotal)
    {
      $this->taxTotal = $taxTotal;
      return $this;
    }

    /**
     * @return float
     */
    public function getTimeTaxRate1()
    {
      return $this->timeTaxRate1;
    }

    /**
     * @param float $timeTaxRate1
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setTimeTaxRate1($timeTaxRate1)
    {
      $this->timeTaxRate1 = $timeTaxRate1;
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setAltShippingCost($altShippingCost)
    {
      $this->altShippingCost = $altShippingCost;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTimeTaxCode()
    {
      return $this->timeTaxCode;
    }

    /**
     * @param RecordRef $timeTaxCode
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setTimeTaxCode($timeTaxCode)
    {
      $this->timeTaxCode = $timeTaxCode;
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setTotal($total)
    {
      $this->total = $total;
      return $this;
    }

    /**
     * @return float
     */
    public function getTimeDiscTax1Amt()
    {
      return $this->timeDiscTax1Amt;
    }

    /**
     * @param float $timeDiscTax1Amt
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setTimeDiscTax1Amt($timeDiscTax1Amt)
    {
      $this->timeDiscTax1Amt = $timeDiscTax1Amt;
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setCcSecurityCode($ccSecurityCode)
    {
      $this->ccSecurityCode = $ccSecurityCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getTimeTaxRate2()
    {
      return $this->timeTaxRate2;
    }

    /**
     * @param float $timeTaxRate2
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setTimeTaxRate2($timeTaxRate2)
    {
      $this->timeTaxRate2 = $timeTaxRate2;
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setCcSecurityCodeMatch($ccSecurityCodeMatch)
    {
      $this->ccSecurityCodeMatch = $ccSecurityCodeMatch;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getChargeIt()
    {
      return $this->chargeIt;
    }

    /**
     * @param boolean $chargeIt
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setChargeIt($chargeIt)
    {
      $this->chargeIt = $chargeIt;
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setDebitCardIssueNo($debitCardIssueNo)
    {
      $this->debitCardIssueNo = $debitCardIssueNo;
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setThreeDStatusCode($threeDStatusCode)
    {
      $this->threeDStatusCode = $threeDStatusCode;
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setPnRefNum($pnRefNum)
    {
      $this->pnRefNum = $pnRefNum;
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setPaypalAuthId($paypalAuthId)
    {
      $this->paypalAuthId = $paypalAuthId;
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setStatus($status)
    {
      $this->status = $status;
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setPaypalProcess($paypalProcess)
    {
      $this->paypalProcess = $paypalProcess;
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setJob($job)
    {
      $this->job = $job;
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setBillingSchedule($billingSchedule)
    {
      $this->billingSchedule = $billingSchedule;
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setEmail($email)
    {
      $this->email = $email;
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setTax2Total($tax2Total)
    {
      $this->tax2Total = $tax2Total;
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setGiftCertApplied($giftCertApplied)
    {
      $this->giftCertApplied = $giftCertApplied;
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setSyncPartnerTeams($syncPartnerTeams)
    {
      $this->syncPartnerTeams = $syncPartnerTeams;
      return $this;
    }

    /**
     * @return CashSaleSalesTeamList
     */
    public function getSalesTeamList()
    {
      return $this->salesTeamList;
    }

    /**
     * @param CashSaleSalesTeamList $salesTeamList
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setSalesTeamList($salesTeamList)
    {
      $this->salesTeamList = $salesTeamList;
      return $this;
    }

    /**
     * @return CashSalePartnersList
     */
    public function getPartnersList()
    {
      return $this->partnersList;
    }

    /**
     * @param CashSalePartnersList $partnersList
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setPartnersList($partnersList)
    {
      $this->partnersList = $partnersList;
      return $this;
    }

    /**
     * @return CashSaleItemList
     */
    public function getItemList()
    {
      return $this->itemList;
    }

    /**
     * @param CashSaleItemList $itemList
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setAccountingBookDetailList($accountingBookDetailList)
    {
      $this->accountingBookDetailList = $accountingBookDetailList;
      return $this;
    }

    /**
     * @return CashSaleItemCostList
     */
    public function getItemCostList()
    {
      return $this->itemCostList;
    }

    /**
     * @param CashSaleItemCostList $itemCostList
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setItemCostList($itemCostList)
    {
      $this->itemCostList = $itemCostList;
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setPromotionsList($promotionsList)
    {
      $this->promotionsList = $promotionsList;
      return $this;
    }

    /**
     * @return CashSaleExpCostList
     */
    public function getExpCostList()
    {
      return $this->expCostList;
    }

    /**
     * @param CashSaleExpCostList $expCostList
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setExpCostList($expCostList)
    {
      $this->expCostList = $expCostList;
      return $this;
    }

    /**
     * @return CashSaleTimeList
     */
    public function getTimeList()
    {
      return $this->timeList;
    }

    /**
     * @param CashSaleTimeList $timeList
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setTimeList($timeList)
    {
      $this->timeList = $timeList;
      return $this;
    }

    /**
     * @return CashSaleShipGroupList
     */
    public function getShipGroupList()
    {
      return $this->shipGroupList;
    }

    /**
     * @param CashSaleShipGroupList $shipGroupList
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
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
     * @return \Nzolt\NetSuite\CashSale
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
