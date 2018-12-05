<?php

namespace Nzolt\NetSuite;

class CreditMemo extends Record
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
     * @var RecordRef $createdFrom
     */
    protected $createdFrom = null;

    /**
     * @var RecordRef $postingPeriod
     */
    protected $postingPeriod = null;

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
     * @var RecordRef $job
     */
    protected $job = null;

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
     * @var string $otherRefNum
     */
    protected $otherRefNum = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var boolean $excludeCommission
     */
    protected $excludeCommission = null;

    /**
     * @var RecordRef $leadSource
     */
    protected $leadSource = null;

    /**
     * @var float $balance
     */
    protected $balance = null;

    /**
     * @var RecordRef $account
     */
    protected $account = null;

    /**
     * @var float $exchangeRate
     */
    protected $exchangeRate = null;

    /**
     * @var string $onCreditHold
     */
    protected $onCreditHold = null;

    /**
     * @var float $amountPaid
     */
    protected $amountPaid = null;

    /**
     * @var \DateTime $salesEffectiveDate
     */
    protected $salesEffectiveDate = null;

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
     * @var string $currencyName
     */
    protected $currencyName = null;

    /**
     * @var RecordRef $promoCode
     */
    protected $promoCode = null;

    /**
     * @var float $amountRemaining
     */
    protected $amountRemaining = null;

    /**
     * @var RecordRef $discountItem
     */
    protected $discountItem = null;

    /**
     * @var string $source
     */
    protected $source = null;

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
     * @var float $unapplied
     */
    protected $unapplied = null;

    /**
     * @var boolean $autoApply
     */
    protected $autoApply = null;

    /**
     * @var float $applied
     */
    protected $applied = null;

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
     * @var RecordRef $handlingTaxCode
     */
    protected $handlingTaxCode = null;

    /**
     * @var string $shippingTax2Rate
     */
    protected $shippingTax2Rate = null;

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
     * @var float $subTotal
     */
    protected $subTotal = null;

    /**
     * @var float $discountTotal
     */
    protected $discountTotal = null;

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
     * @var float $taxTotal
     */
    protected $taxTotal = null;

    /**
     * @var float $tax2Total
     */
    protected $tax2Total = null;

    /**
     * @var float $altShippingCost
     */
    protected $altShippingCost = null;

    /**
     * @var float $altHandlingCost
     */
    protected $altHandlingCost = null;

    /**
     * @var boolean $isMultiShipTo
     */
    protected $isMultiShipTo = null;

    /**
     * @var float $total
     */
    protected $total = null;

    /**
     * @var RecordRef $salesGroup
     */
    protected $salesGroup = null;

    /**
     * @var boolean $syncSalesTeams
     */
    protected $syncSalesTeams = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var RecordRef $giftCert
     */
    protected $giftCert = null;

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
     * @var CreditMemoSalesTeamList $salesTeamList
     */
    protected $salesTeamList = null;

    /**
     * @var CreditMemoItemList $itemList
     */
    protected $itemList = null;

    /**
     * @var AccountingBookDetailList $accountingBookDetailList
     */
    protected $accountingBookDetailList = null;

    /**
     * @var CreditMemoPartnersList $partnersList
     */
    protected $partnersList = null;

    /**
     * @var CreditMemoApplyList $applyList
     */
    protected $applyList = null;

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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setEntityTaxRegNum($entityTaxRegNum)
    {
      $this->entityTaxRegNum = $entityTaxRegNum;
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setCreatedFrom($createdFrom)
    {
      $this->createdFrom = $createdFrom;
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setPostingPeriod($postingPeriod)
    {
      $this->postingPeriod = $postingPeriod;
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setJob($job)
    {
      $this->job = $job;
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setContribPct($contribPct)
    {
      $this->contribPct = $contribPct;
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setExcludeCommission($excludeCommission)
    {
      $this->excludeCommission = $excludeCommission;
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setLeadSource($leadSource)
    {
      $this->leadSource = $leadSource;
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setBalance($balance)
    {
      $this->balance = $balance;
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setAccount($account)
    {
      $this->account = $account;
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setExchangeRate($exchangeRate)
    {
      $this->exchangeRate = $exchangeRate;
      return $this;
    }

    /**
     * @return string
     */
    public function getOnCreditHold()
    {
      return $this->onCreditHold;
    }

    /**
     * @param string $onCreditHold
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setOnCreditHold($onCreditHold)
    {
      $this->onCreditHold = $onCreditHold;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmountPaid()
    {
      return $this->amountPaid;
    }

    /**
     * @param float $amountPaid
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setAmountPaid($amountPaid)
    {
      $this->amountPaid = $amountPaid;
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return float
     */
    public function getTotalCostEstimate()
    {
      return $this->totalCostEstimate;
    }

    /**
     * @param float $totalCostEstimate
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setEstGrossProfitPercent($estGrossProfitPercent)
    {
      $this->estGrossProfitPercent = $estGrossProfitPercent;
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setPromoCode($promoCode)
    {
      $this->promoCode = $promoCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmountRemaining()
    {
      return $this->amountRemaining;
    }

    /**
     * @param float $amountRemaining
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setAmountRemaining($amountRemaining)
    {
      $this->amountRemaining = $amountRemaining;
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setDiscountItem($discountItem)
    {
      $this->discountItem = $discountItem;
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setSource($source)
    {
      $this->source = $source;
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setTaxRate($taxRate)
    {
      $this->taxRate = $taxRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnapplied()
    {
      return $this->unapplied;
    }

    /**
     * @param float $unapplied
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setUnapplied($unapplied)
    {
      $this->unapplied = $unapplied;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoApply()
    {
      return $this->autoApply;
    }

    /**
     * @param boolean $autoApply
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setAutoApply($autoApply)
    {
      $this->autoApply = $autoApply;
      return $this;
    }

    /**
     * @return float
     */
    public function getApplied()
    {
      return $this->applied;
    }

    /**
     * @param float $applied
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setApplied($applied)
    {
      $this->applied = $applied;
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setBillAddressList($billAddressList)
    {
      $this->billAddressList = $billAddressList;
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setHandlingTaxCode($handlingTaxCode)
    {
      $this->handlingTaxCode = $handlingTaxCode;
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setShippingTax2Rate($shippingTax2Rate)
    {
      $this->shippingTax2Rate = $shippingTax2Rate;
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setHandlingCost($handlingCost)
    {
      $this->handlingCost = $handlingCost;
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setDiscountTotal($discountTotal)
    {
      $this->discountTotal = $discountTotal;
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setRevRecOnRevCommitment($revRecOnRevCommitment)
    {
      $this->revRecOnRevCommitment = $revRecOnRevCommitment;
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setTax2Total($tax2Total)
    {
      $this->tax2Total = $tax2Total;
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setAltHandlingCost($altHandlingCost)
    {
      $this->altHandlingCost = $altHandlingCost;
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setIsMultiShipTo($isMultiShipTo)
    {
      $this->isMultiShipTo = $isMultiShipTo;
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setTotal($total)
    {
      $this->total = $total;
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setSyncSalesTeams($syncSalesTeams)
    {
      $this->syncSalesTeams = $syncSalesTeams;
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setStatus($status)
    {
      $this->status = $status;
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setGiftCert($giftCert)
    {
      $this->giftCert = $giftCert;
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setSyncPartnerTeams($syncPartnerTeams)
    {
      $this->syncPartnerTeams = $syncPartnerTeams;
      return $this;
    }

    /**
     * @return CreditMemoSalesTeamList
     */
    public function getSalesTeamList()
    {
      return $this->salesTeamList;
    }

    /**
     * @param CreditMemoSalesTeamList $salesTeamList
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setSalesTeamList($salesTeamList)
    {
      $this->salesTeamList = $salesTeamList;
      return $this;
    }

    /**
     * @return CreditMemoItemList
     */
    public function getItemList()
    {
      return $this->itemList;
    }

    /**
     * @param CreditMemoItemList $itemList
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setAccountingBookDetailList($accountingBookDetailList)
    {
      $this->accountingBookDetailList = $accountingBookDetailList;
      return $this;
    }

    /**
     * @return CreditMemoPartnersList
     */
    public function getPartnersList()
    {
      return $this->partnersList;
    }

    /**
     * @param CreditMemoPartnersList $partnersList
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setPartnersList($partnersList)
    {
      $this->partnersList = $partnersList;
      return $this;
    }

    /**
     * @return CreditMemoApplyList
     */
    public function getApplyList()
    {
      return $this->applyList;
    }

    /**
     * @param CreditMemoApplyList $applyList
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setApplyList($applyList)
    {
      $this->applyList = $applyList;
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
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
     * @return \Nzolt\NetSuite\CreditMemo
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
