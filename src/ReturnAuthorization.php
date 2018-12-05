<?php

namespace Nzolt\NetSuite;

class ReturnAuthorization extends Record
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
     * @var RecordRef $currency
     */
    protected $currency = null;

    /**
     * @var RecordRef $entity
     */
    protected $entity = null;

    /**
     * @var string $vatRegNum
     */
    protected $vatRegNum = null;

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
     * @var RecordRef $intercoTransaction
     */
    protected $intercoTransaction = null;

    /**
     * @var IntercoStatus $intercoStatus
     */
    protected $intercoStatus = null;

    /**
     * @var RecordRef $job
     */
    protected $job = null;

    /**
     * @var RecordRef $partner
     */
    protected $partner = null;

    /**
     * @var string $otherRefNum
     */
    protected $otherRefNum = null;

    /**
     * @var RecordRef $leadSource
     */
    protected $leadSource = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var RecordRef $drAccount
     */
    protected $drAccount = null;

    /**
     * @var RecordRef $fxAccount
     */
    protected $fxAccount = null;

    /**
     * @var \DateTime $salesEffectiveDate
     */
    protected $salesEffectiveDate = null;

    /**
     * @var RecordRef $createdFrom
     */
    protected $createdFrom = null;

    /**
     * @var RecordRef $revRecSchedule
     */
    protected $revRecSchedule = null;

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
     * @var \DateTime $revRecStartDate
     */
    protected $revRecStartDate = null;

    /**
     * @var \DateTime $revRecEndDate
     */
    protected $revRecEndDate = null;

    /**
     * @var boolean $excludeCommission
     */
    protected $excludeCommission = null;

    /**
     * @var float $exchangeRate
     */
    protected $exchangeRate = null;

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
     * @var RecordRef $shipAddressList
     */
    protected $shipAddressList = null;

    /**
     * @var string $shipAddress
     */
    protected $shipAddress = null;

    /**
     * @var RecordRef $salesGroup
     */
    protected $salesGroup = null;

    /**
     * @var boolean $syncSalesTeams
     */
    protected $syncSalesTeams = null;

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
     * @var RecordRef $paymentMethod
     */
    protected $paymentMethod = null;

    /**
     * @var RecordRef $creditCard
     */
    protected $creditCard = null;

    /**
     * @var string $ccNumber
     */
    protected $ccNumber = null;

    /**
     * @var float $altSalesTotal
     */
    protected $altSalesTotal = null;

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
     * @var boolean $ccApproved
     */
    protected $ccApproved = null;

    /**
     * @var string $pnRefNum
     */
    protected $pnRefNum = null;

    /**
     * @var float $subTotal
     */
    protected $subTotal = null;

    /**
     * @var float $discountTotal
     */
    protected $discountTotal = null;

    /**
     * @var float $total
     */
    protected $total = null;

    /**
     * @var RecordRef $creditCardProcessor
     */
    protected $creditCardProcessor = null;

    /**
     * @var string $payPalAuthId
     */
    protected $payPalAuthId = null;

    /**
     * @var boolean $payPalProcess
     */
    protected $payPalProcess = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $fax
     */
    protected $fax = null;

    /**
     * @var string $debitCardIssueNo
     */
    protected $debitCardIssueNo = null;

    /**
     * @var boolean $isTaxable
     */
    protected $isTaxable = null;

    /**
     * @var RecordRef $promoCode
     */
    protected $promoCode = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var float $taxTotal
     */
    protected $taxTotal = null;

    /**
     * @var float $tax2Total
     */
    protected $tax2Total = null;

    /**
     * @var \DateTime $validFrom
     */
    protected $validFrom = null;

    /**
     * @var ReturnAuthorizationOrderStatus $orderStatus
     */
    protected $orderStatus = null;

    /**
     * @var RecordRef $salesRep
     */
    protected $salesRep = null;

    /**
     * @var RecordRef $giftCert
     */
    protected $giftCert = null;

    /**
     * @var string $contribPct
     */
    protected $contribPct = null;

    /**
     * @var float $giftCertTotal
     */
    protected $giftCertTotal = null;

    /**
     * @var float $giftCertApplied
     */
    protected $giftCertApplied = null;

    /**
     * @var float $giftCertAvailable
     */
    protected $giftCertAvailable = null;

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
     * @var ReturnAuthorizationItemList $itemList
     */
    protected $itemList = null;

    /**
     * @var AccountingBookDetailList $accountingBookDetailList
     */
    protected $accountingBookDetailList = null;

    /**
     * @var ReturnAuthorizationSalesTeamList $salesTeamList
     */
    protected $salesTeamList = null;

    /**
     * @var ReturnAuthorizationPartnersList $partnersList
     */
    protected $partnersList = null;

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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setVatRegNum($vatRegNum)
    {
      $this->vatRegNum = $vatRegNum;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setSource($source)
    {
      $this->source = $source;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setIntercoStatus($intercoStatus)
    {
      $this->intercoStatus = $intercoStatus;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setJob($job)
    {
      $this->job = $job;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setPartner($partner)
    {
      $this->partner = $partner;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setOtherRefNum($otherRefNum)
    {
      $this->otherRefNum = $otherRefNum;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setLeadSource($leadSource)
    {
      $this->leadSource = $leadSource;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setFxAccount($fxAccount)
    {
      $this->fxAccount = $fxAccount;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return RecordRef
     */
    public function getCreatedFrom()
    {
      return $this->createdFrom;
    }

    /**
     * @param RecordRef $createdFrom
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setCreatedFrom($createdFrom)
    {
      $this->createdFrom = $createdFrom;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setRevRecSchedule($revRecSchedule)
    {
      $this->revRecSchedule = $revRecSchedule;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setEstGrossProfitPercent($estGrossProfitPercent)
    {
      $this->estGrossProfitPercent = $estGrossProfitPercent;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return boolean
     */
    public function getExcludeCommission()
    {
      return $this->excludeCommission;
    }

    /**
     * @param boolean $excludeCommission
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setExcludeCommission($excludeCommission)
    {
      $this->excludeCommission = $excludeCommission;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setDiscountRate($discountRate)
    {
      $this->discountRate = $discountRate;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setToBeFaxed($toBeFaxed)
    {
      $this->toBeFaxed = $toBeFaxed;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setBillAddressList($billAddressList)
    {
      $this->billAddressList = $billAddressList;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setShipAddressList($shipAddressList)
    {
      $this->shipAddressList = $shipAddressList;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipAddress()
    {
      return $this->shipAddress;
    }

    /**
     * @param string $shipAddress
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setShipAddress($shipAddress)
    {
      $this->shipAddress = $shipAddress;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setSyncSalesTeams($syncSalesTeams)
    {
      $this->syncSalesTeams = $syncSalesTeams;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setRevCommitStatus($revCommitStatus)
    {
      $this->revCommitStatus = $revCommitStatus;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setPaymentMethod($paymentMethod)
    {
      $this->paymentMethod = $paymentMethod;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setCcNumber($ccNumber)
    {
      $this->ccNumber = $ccNumber;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setAltSalesTotal($altSalesTotal)
    {
      $this->altSalesTotal = $altSalesTotal;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setCcZipCode($ccZipCode)
    {
      $this->ccZipCode = $ccZipCode;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setCcApproved($ccApproved)
    {
      $this->ccApproved = $ccApproved;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setPnRefNum($pnRefNum)
    {
      $this->pnRefNum = $pnRefNum;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setDiscountTotal($discountTotal)
    {
      $this->discountTotal = $discountTotal;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setTotal($total)
    {
      $this->total = $total;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setCreditCardProcessor($creditCardProcessor)
    {
      $this->creditCardProcessor = $creditCardProcessor;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayPalAuthId()
    {
      return $this->payPalAuthId;
    }

    /**
     * @param string $payPalAuthId
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setPayPalAuthId($payPalAuthId)
    {
      $this->payPalAuthId = $payPalAuthId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPayPalProcess()
    {
      return $this->payPalProcess;
    }

    /**
     * @param boolean $payPalProcess
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setPayPalProcess($payPalProcess)
    {
      $this->payPalProcess = $payPalProcess;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setEmail($email)
    {
      $this->email = $email;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setFax($fax)
    {
      $this->fax = $fax;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setDebitCardIssueNo($debitCardIssueNo)
    {
      $this->debitCardIssueNo = $debitCardIssueNo;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setIsTaxable($isTaxable)
    {
      $this->isTaxable = $isTaxable;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setPromoCode($promoCode)
    {
      $this->promoCode = $promoCode;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setStatus($status)
    {
      $this->status = $status;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setTaxTotal($taxTotal)
    {
      $this->taxTotal = $taxTotal;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return ReturnAuthorizationOrderStatus
     */
    public function getOrderStatus()
    {
      return $this->orderStatus;
    }

    /**
     * @param ReturnAuthorizationOrderStatus $orderStatus
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setOrderStatus($orderStatus)
    {
      $this->orderStatus = $orderStatus;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setSalesRep($salesRep)
    {
      $this->salesRep = $salesRep;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getGiftCert()
    {
      return $this->giftCert;
    }

    /**
     * @param RecordRef $giftCert
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setGiftCert($giftCert)
    {
      $this->giftCert = $giftCert;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setContribPct($contribPct)
    {
      $this->contribPct = $contribPct;
      return $this;
    }

    /**
     * @return float
     */
    public function getGiftCertTotal()
    {
      return $this->giftCertTotal;
    }

    /**
     * @param float $giftCertTotal
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setGiftCertTotal($giftCertTotal)
    {
      $this->giftCertTotal = $giftCertTotal;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setGiftCertApplied($giftCertApplied)
    {
      $this->giftCertApplied = $giftCertApplied;
      return $this;
    }

    /**
     * @return float
     */
    public function getGiftCertAvailable()
    {
      return $this->giftCertAvailable;
    }

    /**
     * @param float $giftCertAvailable
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setGiftCertAvailable($giftCertAvailable)
    {
      $this->giftCertAvailable = $giftCertAvailable;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setSyncPartnerTeams($syncPartnerTeams)
    {
      $this->syncPartnerTeams = $syncPartnerTeams;
      return $this;
    }

    /**
     * @return ReturnAuthorizationItemList
     */
    public function getItemList()
    {
      return $this->itemList;
    }

    /**
     * @param ReturnAuthorizationItemList $itemList
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setAccountingBookDetailList($accountingBookDetailList)
    {
      $this->accountingBookDetailList = $accountingBookDetailList;
      return $this;
    }

    /**
     * @return ReturnAuthorizationSalesTeamList
     */
    public function getSalesTeamList()
    {
      return $this->salesTeamList;
    }

    /**
     * @param ReturnAuthorizationSalesTeamList $salesTeamList
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setSalesTeamList($salesTeamList)
    {
      $this->salesTeamList = $salesTeamList;
      return $this;
    }

    /**
     * @return ReturnAuthorizationPartnersList
     */
    public function getPartnersList()
    {
      return $this->partnersList;
    }

    /**
     * @param ReturnAuthorizationPartnersList $partnersList
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setPartnersList($partnersList)
    {
      $this->partnersList = $partnersList;
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
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
     * @return \Nzolt\NetSuite\ReturnAuthorization
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
