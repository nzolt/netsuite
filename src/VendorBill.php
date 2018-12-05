<?php

namespace Nzolt\NetSuite;

class VendorBill extends Record
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
     * @var RecordRef $billAddressList
     */
    protected $billAddressList = null;

    /**
     * @var RecordRef $account
     */
    protected $account = null;

    /**
     * @var RecordRef $entity
     */
    protected $entity = null;

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var RecordRef $approvalStatus
     */
    protected $approvalStatus = null;

    /**
     * @var RecordRef $nextApprover
     */
    protected $nextApprover = null;

    /**
     * @var string $vatRegNum
     */
    protected $vatRegNum = null;

    /**
     * @var RecordRef $postingPeriod
     */
    protected $postingPeriod = null;

    /**
     * @var \DateTime $tranDate
     */
    protected $tranDate = null;

    /**
     * @var string $currencyName
     */
    protected $currencyName = null;

    /**
     * @var Address $billingAddress
     */
    protected $billingAddress = null;

    /**
     * @var float $exchangeRate
     */
    protected $exchangeRate = null;

    /**
     * @var RecordRef $entityTaxRegNum
     */
    protected $entityTaxRegNum = null;

    /**
     * @var RecordRef $terms
     */
    protected $terms = null;

    /**
     * @var \DateTime $dueDate
     */
    protected $dueDate = null;

    /**
     * @var \DateTime $discountDate
     */
    protected $discountDate = null;

    /**
     * @var string $tranId
     */
    protected $tranId = null;

    /**
     * @var float $userTotal
     */
    protected $userTotal = null;

    /**
     * @var float $discountAmount
     */
    protected $discountAmount = null;

    /**
     * @var float $taxTotal
     */
    protected $taxTotal = null;

    /**
     * @var boolean $paymentHold
     */
    protected $paymentHold = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var float $tax2Total
     */
    protected $tax2Total = null;

    /**
     * @var float $creditLimit
     */
    protected $creditLimit = null;

    /**
     * @var float $availableVendorCredit
     */
    protected $availableVendorCredit = null;

    /**
     * @var RecordRef $currency
     */
    protected $currency = null;

    /**
     * @var RecordRef $class
     */
    protected $class = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var LandedCostMethod $landedCostMethod
     */
    protected $landedCostMethod = null;

    /**
     * @var boolean $landedCostPerLine
     */
    protected $landedCostPerLine = null;

    /**
     * @var string $transactionNumber
     */
    protected $transactionNumber = null;

    /**
     * @var VendorBillExpenseList $expenseList
     */
    protected $expenseList = null;

    /**
     * @var AccountingBookDetailList $accountingBookDetailList
     */
    protected $accountingBookDetailList = null;

    /**
     * @var VendorBillItemList $itemList
     */
    protected $itemList = null;

    /**
     * @var PurchLandedCostList $landedCostsList
     */
    protected $landedCostsList = null;

    /**
     * @var RecordRefList $purchaseOrderList
     */
    protected $purchaseOrderList = null;

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
     * @return \Nzolt\NetSuite\VendorBill
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
     * @return \Nzolt\NetSuite\VendorBill
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
     * @return \Nzolt\NetSuite\VendorBill
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
     * @return \Nzolt\NetSuite\VendorBill
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
     * @return \Nzolt\NetSuite\VendorBill
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
     * @return \Nzolt\NetSuite\VendorBill
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
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
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
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setBillAddressList($billAddressList)
    {
      $this->billAddressList = $billAddressList;
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
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setAccount($account)
    {
      $this->account = $account;
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
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
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
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getApprovalStatus()
    {
      return $this->approvalStatus;
    }

    /**
     * @param RecordRef $approvalStatus
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setApprovalStatus($approvalStatus)
    {
      $this->approvalStatus = $approvalStatus;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getNextApprover()
    {
      return $this->nextApprover;
    }

    /**
     * @param RecordRef $nextApprover
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setNextApprover($nextApprover)
    {
      $this->nextApprover = $nextApprover;
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
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setVatRegNum($vatRegNum)
    {
      $this->vatRegNum = $vatRegNum;
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
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setPostingPeriod($postingPeriod)
    {
      $this->postingPeriod = $postingPeriod;
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
     * @return \Nzolt\NetSuite\VendorBill
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
    public function getCurrencyName()
    {
      return $this->currencyName;
    }

    /**
     * @param string $currencyName
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setCurrencyName($currencyName)
    {
      $this->currencyName = $currencyName;
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
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setBillingAddress($billingAddress)
    {
      $this->billingAddress = $billingAddress;
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
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setExchangeRate($exchangeRate)
    {
      $this->exchangeRate = $exchangeRate;
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
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setEntityTaxRegNum($entityTaxRegNum)
    {
      $this->entityTaxRegNum = $entityTaxRegNum;
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
     * @return \Nzolt\NetSuite\VendorBill
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
     * @return \Nzolt\NetSuite\VendorBill
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
     * @return \DateTime
     */
    public function getDiscountDate()
    {
      if ($this->discountDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->discountDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $discountDate
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setDiscountDate(\DateTime $discountDate = null)
    {
      if ($discountDate == null) {
       $this->discountDate = null;
      } else {
        $this->discountDate = $discountDate->format(\DateTime::ATOM);
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
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setTranId($tranId)
    {
      $this->tranId = $tranId;
      return $this;
    }

    /**
     * @return float
     */
    public function getUserTotal()
    {
      return $this->userTotal;
    }

    /**
     * @param float $userTotal
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setUserTotal($userTotal)
    {
      $this->userTotal = $userTotal;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscountAmount()
    {
      return $this->discountAmount;
    }

    /**
     * @param float $discountAmount
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setDiscountAmount($discountAmount)
    {
      $this->discountAmount = $discountAmount;
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
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setTaxTotal($taxTotal)
    {
      $this->taxTotal = $taxTotal;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPaymentHold()
    {
      return $this->paymentHold;
    }

    /**
     * @param boolean $paymentHold
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setPaymentHold($paymentHold)
    {
      $this->paymentHold = $paymentHold;
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
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
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
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setTax2Total($tax2Total)
    {
      $this->tax2Total = $tax2Total;
      return $this;
    }

    /**
     * @return float
     */
    public function getCreditLimit()
    {
      return $this->creditLimit;
    }

    /**
     * @param float $creditLimit
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setCreditLimit($creditLimit)
    {
      $this->creditLimit = $creditLimit;
      return $this;
    }

    /**
     * @return float
     */
    public function getAvailableVendorCredit()
    {
      return $this->availableVendorCredit;
    }

    /**
     * @param float $availableVendorCredit
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setAvailableVendorCredit($availableVendorCredit)
    {
      $this->availableVendorCredit = $availableVendorCredit;
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
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
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
     * @return \Nzolt\NetSuite\VendorBill
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
     * @return \Nzolt\NetSuite\VendorBill
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
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setLocation($location)
    {
      $this->location = $location;
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
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return LandedCostMethod
     */
    public function getLandedCostMethod()
    {
      return $this->landedCostMethod;
    }

    /**
     * @param LandedCostMethod $landedCostMethod
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setLandedCostMethod($landedCostMethod)
    {
      $this->landedCostMethod = $landedCostMethod;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLandedCostPerLine()
    {
      return $this->landedCostPerLine;
    }

    /**
     * @param boolean $landedCostPerLine
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setLandedCostPerLine($landedCostPerLine)
    {
      $this->landedCostPerLine = $landedCostPerLine;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionNumber()
    {
      return $this->transactionNumber;
    }

    /**
     * @param string $transactionNumber
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setTransactionNumber($transactionNumber)
    {
      $this->transactionNumber = $transactionNumber;
      return $this;
    }

    /**
     * @return VendorBillExpenseList
     */
    public function getExpenseList()
    {
      return $this->expenseList;
    }

    /**
     * @param VendorBillExpenseList $expenseList
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setExpenseList($expenseList)
    {
      $this->expenseList = $expenseList;
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
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setAccountingBookDetailList($accountingBookDetailList)
    {
      $this->accountingBookDetailList = $accountingBookDetailList;
      return $this;
    }

    /**
     * @return VendorBillItemList
     */
    public function getItemList()
    {
      return $this->itemList;
    }

    /**
     * @param VendorBillItemList $itemList
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setItemList($itemList)
    {
      $this->itemList = $itemList;
      return $this;
    }

    /**
     * @return PurchLandedCostList
     */
    public function getLandedCostsList()
    {
      return $this->landedCostsList;
    }

    /**
     * @param PurchLandedCostList $landedCostsList
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setLandedCostsList($landedCostsList)
    {
      $this->landedCostsList = $landedCostsList;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getPurchaseOrderList()
    {
      return $this->purchaseOrderList;
    }

    /**
     * @param RecordRefList $purchaseOrderList
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setPurchaseOrderList($purchaseOrderList)
    {
      $this->purchaseOrderList = $purchaseOrderList;
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
     * @return \Nzolt\NetSuite\VendorBill
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
     * @return \Nzolt\NetSuite\VendorBill
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
     * @return \Nzolt\NetSuite\VendorBill
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
     * @return \Nzolt\NetSuite\VendorBill
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
