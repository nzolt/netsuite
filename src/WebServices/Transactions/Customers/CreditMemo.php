<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Customers;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Common\Address;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\RevenueStatus;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * CreditMemo
 */
class CreditMemo extends Record {

    /**
     * @access public
     * @var dateTime
     */
    protected $createdDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var RecordRef
     */
    public $entity;

    /**
     * @access public
     * @var string
     */
    protected $vatRegNum;

    /**
     * @access public
     * @var dateTime
     */
    protected $tranDate;

    /**
     * @access public
     * @var string
     */
    protected $tranId;

    /**
     * @access public
     * @var RecordRef
     */
    public $createdFrom;

    /**
     * @access public
     * @var RecordRef
     */
    public $postingPeriod;

    /**
     * @access public
     * @var RecordRef
     */
    public $department;

    /**
     * @access public
     * @var RecordRef
     */
    public $class;

    /**
     * @access public
     * @var RecordRef
     */
    public $location;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

    /**
     * @access public
     * @var RecordRef
     */
    public $job;

    /**
     * @access public
     * @var RecordRef
     */
    public $salesRep;

    /**
     * @access public
     * @var RecordRef
     */
    public $partner;

    /**
     * @access public
     * @var string
     */
    protected $contribPct;

    /**
     * @access public
     * @var string
     */
    protected $otherRefNum;

    /**
     * @access public
     * @var string
     */
    protected $memo;

    /**
     * @access public
     * @var boolean
     */
    protected $excludeCommission;

    /**
     * @access public
     * @var RecordRef
     */
    public $leadSource;

    /**
     * @access public
     * @var float
     */
    protected $balance;

    /**
     * @access public
     * @var RecordRef
     */
    public $account;

    /**
     * @access public
     * @var float
     */
    protected $exchangeRate;

    /**
     * @access public
     * @var string
     */
    protected $onCreditHold;

    /**
     * @access public
     * @var float
     */
    protected $amountPaid;

    /**
     * @access public
     * @var dateTime
     */
    protected $salesEffectiveDate;

    /**
     * @access public
     * @var float
     */
    protected $totalCostEstimate;

    /**
     * @access public
     * @var float
     */
    protected $estGrossProfit;

    /**
     * @access public
     * @var float
     */
    protected $estGrossProfitPercent;

    /**
     * @access public
     * @var string
     */
    protected $currencyName;

    /**
     * @access public
     * @var RecordRef
     */
    public $promoCode;

    /**
     * @access public
     * @var float
     */
    protected $amountRemaining;

    /**
     * @access public
     * @var RecordRef
     */
    public $discountItem;

    /**
     * @access public
     * @var string
     */
    protected $source;

    /**
     * @access public
     * @var string
     */
    protected $discountRate;

    /**
     * @access public
     * @var boolean
     */
    protected $isTaxable;

    /**
     * @access public
     * @var RecordRef
     */
    public $taxItem;

    /**
     * @access public
     * @var float
     */
    protected $taxRate;

    /**
     * @access public
     * @var float
     */
    protected $unapplied;

    /**
     * @access public
     * @var boolean
     */
    protected $autoApply;

    /**
     * @access public
     * @var float
     */
    protected $applied;

    /**
     * @access public
     * @var boolean
     */
    protected $toBePrinted;

    /**
     * @access public
     * @var boolean
     */
    protected $toBeEmailed;

    /**
     * @access public
     * @var string
     */
    protected $email;

    /**
     * @access public
     * @var boolean
     */
    protected $toBeFaxed;

    /**
     * @access public
     * @var string
     */
    protected $fax;

    /**
     * @access public
     * @var RecordRef
     */
    public $messageSel;

    /**
     * @access public
     * @var string
     */
    protected $message;

    /**
     * @access public
     * @var Address
     */
    protected $billingAddress;

    /**
     * @access public
     * @var RecordRef
     */
    public $billAddressList;

    /**
     * @access public
     * @var RecordRef
     */
    public $shipMethod;

    /**
     * @access public
     * @var float
     */
    protected $shippingCost;

    /**
     * @access public
     * @var float
     */
    protected $shippingTax1Rate;

    /**
     * @access public
     * @var RecordRef
     */
    public $shippingTaxCode;

    /**
     * @access public
     * @var RecordRef
     */
    public $handlingTaxCode;

    /**
     * @access public
     * @var string
     */
    protected $shippingTax2Rate;

    /**
     * @access public
     * @var float
     */
    protected $handlingTax1Rate;

    /**
     * @access public
     * @var string
     */
    protected $handlingTax2Rate;

    /**
     * @access public
     * @var float
     */
    protected $handlingCost;

    /**
     * @access public
     * @var float
     */
    protected $subTotal;

    /**
     * @access public
     * @var float
     */
    protected $discountTotal;

    /**
     * @access public
     * @var RevenueStatus
     */
    protected $revenueStatus;

    /**
     * @access public
     * @var float
     */
    protected $recognizedRevenue;

    /**
     * @access public
     * @var float
     */
    protected $deferredRevenue;

    /**
     * @access public
     * @var boolean
     */
    protected $revRecOnRevCommitment;

    /**
     * @access public
     * @var float
     */
    protected $taxTotal;

    /**
     * @access public
     * @var float
     */
    protected $tax2Total;

    /**
     * @access public
     * @var float
     */
    protected $altShippingCost;

    /**
     * @access public
     * @var float
     */
    protected $altHandlingCost;

    /**
     * @access public
     * @var float
     */
    protected $total;

    /**
     * @access public
     * @var RecordRef
     */
    public $salesGroup;

    /**
     * @access public
     * @var boolean
     */
    protected $syncSalesTeams;

    /**
     * @access public
     * @var string
     */
    protected $status;

    /**
     * @access public
     * @var RecordRef
     */
    public $giftCert;

    /**
     * @access public
     * @var float
     */
    protected $giftCertTotal;

    /**
     * @access public
     * @var float
     */
    protected $giftCertApplied;

    /**
     * @access public
     * @var float
     */
    protected $giftCertAvailable;

    /**
     * @access public
     * @var boolean
     */
    protected $tranIsVsoeBundle;

    /**
     * @access public
     * @var boolean
     */
    protected $vsoeAutoCalc;

    /**
     * @access public
     * @var boolean
     */
    protected $syncPartnerTeams;

    /**
     * @access public
     * @var CreditMemoSalesTeamList
     */
    protected $salesTeamList;

    /**
     * @access public
     * @var CreditMemoItemList
     */
    protected $itemList;

    /**
     * @access public
     * @var CreditMemoPartnersList
     */
    protected $partnersList;

    /**
     * @access public
     * @var CreditMemoApplyList
     */
    protected $applyList;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    /**
     * @access public
     * @var string
     */
    protected $externalId;

    static $paramtypesmap = array(
    	"createdDate" => "dateTime",
    	"lastModifiedDate" => "dateTime",
    	"customForm" => "RecordRef",
    	"currency" => "RecordRef",
    	"entity" => "RecordRef",
    	"vatRegNum" => "string",
    	"tranDate" => "dateTime",
    	"tranId" => "string",
    	"createdFrom" => "RecordRef",
    	"postingPeriod" => "RecordRef",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"subsidiary" => "RecordRef",
    	"job" => "RecordRef",
    	"salesRep" => "RecordRef",
    	"partner" => "RecordRef",
    	"contribPct" => "string",
    	"otherRefNum" => "string",
    	"memo" => "string",
    	"excludeCommission" => "boolean",
    	"leadSource" => "RecordRef",
    	"balance" => "float",
    	"account" => "RecordRef",
    	"exchangeRate" => "float",
    	"onCreditHold" => "string",
    	"amountPaid" => "float",
    	"salesEffectiveDate" => "dateTime",
    	"totalCostEstimate" => "float",
    	"estGrossProfit" => "float",
    	"estGrossProfitPercent" => "float",
    	"currencyName" => "string",
    	"promoCode" => "RecordRef",
    	"amountRemaining" => "float",
    	"discountItem" => "RecordRef",
    	"source" => "string",
    	"discountRate" => "string",
    	"isTaxable" => "boolean",
    	"taxItem" => "RecordRef",
    	"taxRate" => "float",
    	"unapplied" => "float",
    	"autoApply" => "boolean",
    	"applied" => "float",
    	"toBePrinted" => "boolean",
    	"toBeEmailed" => "boolean",
    	"email" => "string",
    	"toBeFaxed" => "boolean",
    	"fax" => "string",
    	"messageSel" => "RecordRef",
    	"message" => "string",
    	"billingAddress" => "Address",
    	"billAddressList" => "RecordRef",
    	"shipMethod" => "RecordRef",
    	"shippingCost" => "float",
    	"shippingTax1Rate" => "float",
    	"shippingTaxCode" => "RecordRef",
    	"handlingTaxCode" => "RecordRef",
    	"shippingTax2Rate" => "string",
    	"handlingTax1Rate" => "float",
    	"handlingTax2Rate" => "string",
    	"handlingCost" => "float",
    	"subTotal" => "float",
    	"discountTotal" => "float",
    	"revenueStatus" => "RevenueStatus",
    	"recognizedRevenue" => "float",
    	"deferredRevenue" => "float",
    	"revRecOnRevCommitment" => "boolean",
    	"taxTotal" => "float",
    	"tax2Total" => "float",
    	"altShippingCost" => "float",
    	"altHandlingCost" => "float",
    	"total" => "float",
    	"salesGroup" => "RecordRef",
    	"syncSalesTeams" => "boolean",
    	"status" => "string",
    	"giftCert" => "RecordRef",
    	"giftCertTotal" => "float",
    	"giftCertApplied" => "float",
    	"giftCertAvailable" => "float",
    	"tranIsVsoeBundle" => "boolean",
    	"vsoeAutoCalc" => "boolean",
    	"syncPartnerTeams" => "boolean",
    	"salesTeamList" => "CreditMemoSalesTeamList",
    	"itemList" => "CreditMemoItemList",
    	"partnersList" => "CreditMemoPartnersList",
    	"applyList" => "CreditMemoApplyList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return CreditMemo
     */
    public function setCreatedDate(\DateTime $createdDate) {
        $this->createdDate = $createdDate->format('c');
        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate() {
        return new \DateTime($this->createdDate);
    }


    /**
     * Set lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return CreditMemo
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate) {
        $this->lastModifiedDate = $lastModifiedDate->format('c');
        return $this;
    }

    /**
     * Get lastModifiedDate
     *
     * @return \DateTime
     */
    public function getLastModifiedDate() {
        return new \DateTime($this->lastModifiedDate);
    }


    /**
     * Set vatRegNum
     *
     * @param string $vatRegNum
     * @return CreditMemo
     */
    public function setVatRegNum($vatRegNum) {
        $this->vatRegNum = $vatRegNum;
        return $this;
    }

    /**
     * Get vatRegNum
     *
     * @return string
     */
    public function getVatRegNum() {
        return $this->vatRegNum;
    }


    /**
     * Set tranDate
     *
     * @param \DateTime $tranDate
     * @return CreditMemo
     */
    public function setTranDate(\DateTime $tranDate) {
        $this->tranDate = $tranDate->format('c');
        return $this;
    }

    /**
     * Get tranDate
     *
     * @return \DateTime
     */
    public function getTranDate() {
        return new \DateTime($this->tranDate);
    }


    /**
     * Set tranId
     *
     * @param string $tranId
     * @return CreditMemo
     */
    public function setTranId($tranId) {
        $this->tranId = $tranId;
        return $this;
    }

    /**
     * Get tranId
     *
     * @return string
     */
    public function getTranId() {
        return $this->tranId;
    }


    /**
     * Set contribPct
     *
     * @param string $contribPct
     * @return CreditMemo
     */
    public function setContribPct($contribPct) {
        $this->contribPct = $contribPct;
        return $this;
    }

    /**
     * Get contribPct
     *
     * @return string
     */
    public function getContribPct() {
        return $this->contribPct;
    }


    /**
     * Set otherRefNum
     *
     * @param string $otherRefNum
     * @return CreditMemo
     */
    public function setOtherRefNum($otherRefNum) {
        $this->otherRefNum = $otherRefNum;
        return $this;
    }

    /**
     * Get otherRefNum
     *
     * @return string
     */
    public function getOtherRefNum() {
        return $this->otherRefNum;
    }


    /**
     * Set memo
     *
     * @param string $memo
     * @return CreditMemo
     */
    public function setMemo($memo) {
        $this->memo = $memo;
        return $this;
    }

    /**
     * Get memo
     *
     * @return string
     */
    public function getMemo() {
        return $this->memo;
    }


    /**
     * Set excludeCommission
     *
     * @param boolean $excludeCommission
     * @return CreditMemo
     */
    public function setExcludeCommission($excludeCommission) {
        $this->excludeCommission = $excludeCommission;
        return $this;
    }

    /**
     * Get excludeCommission
     *
     * @return boolean
     */
    public function getExcludeCommission() {
        return $this->excludeCommission;
    }


    /**
     * Set balance
     *
     * @param float $balance
     * @return CreditMemo
     */
    public function setBalance($balance) {
        $this->balance = $balance;
        return $this;
    }

    /**
     * Get balance
     *
     * @return float
     */
    public function getBalance() {
        return $this->balance;
    }


    /**
     * Set exchangeRate
     *
     * @param float $exchangeRate
     * @return CreditMemo
     */
    public function setExchangeRate($exchangeRate) {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * Get exchangeRate
     *
     * @return float
     */
    public function getExchangeRate() {
        return $this->exchangeRate;
    }


    /**
     * Set onCreditHold
     *
     * @param string $onCreditHold
     * @return CreditMemo
     */
    public function setOnCreditHold($onCreditHold) {
        $this->onCreditHold = $onCreditHold;
        return $this;
    }

    /**
     * Get onCreditHold
     *
     * @return string
     */
    public function getOnCreditHold() {
        return $this->onCreditHold;
    }


    /**
     * Set amountPaid
     *
     * @param float $amountPaid
     * @return CreditMemo
     */
    public function setAmountPaid($amountPaid) {
        $this->amountPaid = $amountPaid;
        return $this;
    }

    /**
     * Get amountPaid
     *
     * @return float
     */
    public function getAmountPaid() {
        return $this->amountPaid;
    }


    /**
     * Set salesEffectiveDate
     *
     * @param \DateTime $salesEffectiveDate
     * @return CreditMemo
     */
    public function setSalesEffectiveDate(\DateTime $salesEffectiveDate) {
        $this->salesEffectiveDate = $salesEffectiveDate->format('c');
        return $this;
    }

    /**
     * Get salesEffectiveDate
     *
     * @return \DateTime
     */
    public function getSalesEffectiveDate() {
        return new \DateTime($this->salesEffectiveDate);
    }


    /**
     * Set totalCostEstimate
     *
     * @param float $totalCostEstimate
     * @return CreditMemo
     */
    public function setTotalCostEstimate($totalCostEstimate) {
        $this->totalCostEstimate = $totalCostEstimate;
        return $this;
    }

    /**
     * Get totalCostEstimate
     *
     * @return float
     */
    public function getTotalCostEstimate() {
        return $this->totalCostEstimate;
    }


    /**
     * Set estGrossProfit
     *
     * @param float $estGrossProfit
     * @return CreditMemo
     */
    public function setEstGrossProfit($estGrossProfit) {
        $this->estGrossProfit = $estGrossProfit;
        return $this;
    }

    /**
     * Get estGrossProfit
     *
     * @return float
     */
    public function getEstGrossProfit() {
        return $this->estGrossProfit;
    }


    /**
     * Set estGrossProfitPercent
     *
     * @param float $estGrossProfitPercent
     * @return CreditMemo
     */
    public function setEstGrossProfitPercent($estGrossProfitPercent) {
        $this->estGrossProfitPercent = $estGrossProfitPercent;
        return $this;
    }

    /**
     * Get estGrossProfitPercent
     *
     * @return float
     */
    public function getEstGrossProfitPercent() {
        return $this->estGrossProfitPercent;
    }


    /**
     * Set currencyName
     *
     * @param string $currencyName
     * @return CreditMemo
     */
    public function setCurrencyName($currencyName) {
        $this->currencyName = $currencyName;
        return $this;
    }

    /**
     * Get currencyName
     *
     * @return string
     */
    public function getCurrencyName() {
        return $this->currencyName;
    }


    /**
     * Set amountRemaining
     *
     * @param float $amountRemaining
     * @return CreditMemo
     */
    public function setAmountRemaining($amountRemaining) {
        $this->amountRemaining = $amountRemaining;
        return $this;
    }

    /**
     * Get amountRemaining
     *
     * @return float
     */
    public function getAmountRemaining() {
        return $this->amountRemaining;
    }


    /**
     * Set source
     *
     * @param string $source
     * @return CreditMemo
     */
    public function setSource($source) {
        $this->source = $source;
        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource() {
        return $this->source;
    }


    /**
     * Set discountRate
     *
     * @param string $discountRate
     * @return CreditMemo
     */
    public function setDiscountRate($discountRate) {
        $this->discountRate = $discountRate;
        return $this;
    }

    /**
     * Get discountRate
     *
     * @return string
     */
    public function getDiscountRate() {
        return $this->discountRate;
    }


    /**
     * Set isTaxable
     *
     * @param boolean $isTaxable
     * @return CreditMemo
     */
    public function setIsTaxable($isTaxable) {
        $this->isTaxable = $isTaxable;
        return $this;
    }

    /**
     * Get isTaxable
     *
     * @return boolean
     */
    public function getIsTaxable() {
        return $this->isTaxable;
    }


    /**
     * Set taxRate
     *
     * @param float $taxRate
     * @return CreditMemo
     */
    public function setTaxRate($taxRate) {
        $this->taxRate = $taxRate;
        return $this;
    }

    /**
     * Get taxRate
     *
     * @return float
     */
    public function getTaxRate() {
        return $this->taxRate;
    }


    /**
     * Set unapplied
     *
     * @param float $unapplied
     * @return CreditMemo
     */
    public function setUnapplied($unapplied) {
        $this->unapplied = $unapplied;
        return $this;
    }

    /**
     * Get unapplied
     *
     * @return float
     */
    public function getUnapplied() {
        return $this->unapplied;
    }


    /**
     * Set autoApply
     *
     * @param boolean $autoApply
     * @return CreditMemo
     */
    public function setAutoApply($autoApply) {
        $this->autoApply = $autoApply;
        return $this;
    }

    /**
     * Get autoApply
     *
     * @return boolean
     */
    public function getAutoApply() {
        return $this->autoApply;
    }


    /**
     * Set applied
     *
     * @param float $applied
     * @return CreditMemo
     */
    public function setApplied($applied) {
        $this->applied = $applied;
        return $this;
    }

    /**
     * Get applied
     *
     * @return float
     */
    public function getApplied() {
        return $this->applied;
    }


    /**
     * Set toBePrinted
     *
     * @param boolean $toBePrinted
     * @return CreditMemo
     */
    public function setToBePrinted($toBePrinted) {
        $this->toBePrinted = $toBePrinted;
        return $this;
    }

    /**
     * Get toBePrinted
     *
     * @return boolean
     */
    public function getToBePrinted() {
        return $this->toBePrinted;
    }


    /**
     * Set toBeEmailed
     *
     * @param boolean $toBeEmailed
     * @return CreditMemo
     */
    public function setToBeEmailed($toBeEmailed) {
        $this->toBeEmailed = $toBeEmailed;
        return $this;
    }

    /**
     * Get toBeEmailed
     *
     * @return boolean
     */
    public function getToBeEmailed() {
        return $this->toBeEmailed;
    }


    /**
     * Set email
     *
     * @param string $email
     * @return CreditMemo
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }


    /**
     * Set toBeFaxed
     *
     * @param boolean $toBeFaxed
     * @return CreditMemo
     */
    public function setToBeFaxed($toBeFaxed) {
        $this->toBeFaxed = $toBeFaxed;
        return $this;
    }

    /**
     * Get toBeFaxed
     *
     * @return boolean
     */
    public function getToBeFaxed() {
        return $this->toBeFaxed;
    }


    /**
     * Set fax
     *
     * @param string $fax
     * @return CreditMemo
     */
    public function setFax($fax) {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax() {
        return $this->fax;
    }


    /**
     * Set message
     *
     * @param string $message
     * @return CreditMemo
     */
    public function setMessage($message) {
        $this->message = $message;
        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage() {
        return $this->message;
    }


    /**
     * Set billingAddress
     *
     * @param Address $billingAddress
     * @return CreditMemo
     */
    public function setBillingAddress(Address $billingAddress) {
        $this->billingAddress = $billingAddress;
        return $this;
    }

    /**
     * Get billingAddress
     *
     * @return Address
     */
    public function getBillingAddress() {
        return $this->billingAddress;
    }


    /**
     * Set shippingCost
     *
     * @param float $shippingCost
     * @return CreditMemo
     */
    public function setShippingCost($shippingCost) {
        $this->shippingCost = $shippingCost;
        return $this;
    }

    /**
     * Get shippingCost
     *
     * @return float
     */
    public function getShippingCost() {
        return $this->shippingCost;
    }


    /**
     * Set shippingTax1Rate
     *
     * @param float $shippingTax1Rate
     * @return CreditMemo
     */
    public function setShippingTax1Rate($shippingTax1Rate) {
        $this->shippingTax1Rate = $shippingTax1Rate;
        return $this;
    }

    /**
     * Get shippingTax1Rate
     *
     * @return float
     */
    public function getShippingTax1Rate() {
        return $this->shippingTax1Rate;
    }


    /**
     * Set shippingTax2Rate
     *
     * @param string $shippingTax2Rate
     * @return CreditMemo
     */
    public function setShippingTax2Rate($shippingTax2Rate) {
        $this->shippingTax2Rate = $shippingTax2Rate;
        return $this;
    }

    /**
     * Get shippingTax2Rate
     *
     * @return string
     */
    public function getShippingTax2Rate() {
        return $this->shippingTax2Rate;
    }


    /**
     * Set handlingTax1Rate
     *
     * @param float $handlingTax1Rate
     * @return CreditMemo
     */
    public function setHandlingTax1Rate($handlingTax1Rate) {
        $this->handlingTax1Rate = $handlingTax1Rate;
        return $this;
    }

    /**
     * Get handlingTax1Rate
     *
     * @return float
     */
    public function getHandlingTax1Rate() {
        return $this->handlingTax1Rate;
    }


    /**
     * Set handlingTax2Rate
     *
     * @param string $handlingTax2Rate
     * @return CreditMemo
     */
    public function setHandlingTax2Rate($handlingTax2Rate) {
        $this->handlingTax2Rate = $handlingTax2Rate;
        return $this;
    }

    /**
     * Get handlingTax2Rate
     *
     * @return string
     */
    public function getHandlingTax2Rate() {
        return $this->handlingTax2Rate;
    }


    /**
     * Set handlingCost
     *
     * @param float $handlingCost
     * @return CreditMemo
     */
    public function setHandlingCost($handlingCost) {
        $this->handlingCost = $handlingCost;
        return $this;
    }

    /**
     * Get handlingCost
     *
     * @return float
     */
    public function getHandlingCost() {
        return $this->handlingCost;
    }


    /**
     * Set subTotal
     *
     * @param float $subTotal
     * @return CreditMemo
     */
    public function setSubTotal($subTotal) {
        $this->subTotal = $subTotal;
        return $this;
    }

    /**
     * Get subTotal
     *
     * @return float
     */
    public function getSubTotal() {
        return $this->subTotal;
    }


    /**
     * Set discountTotal
     *
     * @param float $discountTotal
     * @return CreditMemo
     */
    public function setDiscountTotal($discountTotal) {
        $this->discountTotal = $discountTotal;
        return $this;
    }

    /**
     * Get discountTotal
     *
     * @return float
     */
    public function getDiscountTotal() {
        return $this->discountTotal;
    }


    /**
     * Set revenueStatus
     *
     * @param RevenueStatus $revenueStatus
     * @return CreditMemo
     */
    public function setRevenueStatus(RevenueStatus $revenueStatus) {
        $this->revenueStatus = $revenueStatus;
        return $this;
    }

    /**
     * Get revenueStatus
     *
     * @return RevenueStatus
     */
    public function getRevenueStatus() {
        return $this->revenueStatus;
    }


    /**
     * Set recognizedRevenue
     *
     * @param float $recognizedRevenue
     * @return CreditMemo
     */
    public function setRecognizedRevenue($recognizedRevenue) {
        $this->recognizedRevenue = $recognizedRevenue;
        return $this;
    }

    /**
     * Get recognizedRevenue
     *
     * @return float
     */
    public function getRecognizedRevenue() {
        return $this->recognizedRevenue;
    }


    /**
     * Set deferredRevenue
     *
     * @param float $deferredRevenue
     * @return CreditMemo
     */
    public function setDeferredRevenue($deferredRevenue) {
        $this->deferredRevenue = $deferredRevenue;
        return $this;
    }

    /**
     * Get deferredRevenue
     *
     * @return float
     */
    public function getDeferredRevenue() {
        return $this->deferredRevenue;
    }


    /**
     * Set revRecOnRevCommitment
     *
     * @param boolean $revRecOnRevCommitment
     * @return CreditMemo
     */
    public function setRevRecOnRevCommitment($revRecOnRevCommitment) {
        $this->revRecOnRevCommitment = $revRecOnRevCommitment;
        return $this;
    }

    /**
     * Get revRecOnRevCommitment
     *
     * @return boolean
     */
    public function getRevRecOnRevCommitment() {
        return $this->revRecOnRevCommitment;
    }


    /**
     * Set taxTotal
     *
     * @param float $taxTotal
     * @return CreditMemo
     */
    public function setTaxTotal($taxTotal) {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * Get taxTotal
     *
     * @return float
     */
    public function getTaxTotal() {
        return $this->taxTotal;
    }


    /**
     * Set tax2Total
     *
     * @param float $tax2Total
     * @return CreditMemo
     */
    public function setTax2Total($tax2Total) {
        $this->tax2Total = $tax2Total;
        return $this;
    }

    /**
     * Get tax2Total
     *
     * @return float
     */
    public function getTax2Total() {
        return $this->tax2Total;
    }


    /**
     * Set altShippingCost
     *
     * @param float $altShippingCost
     * @return CreditMemo
     */
    public function setAltShippingCost($altShippingCost) {
        $this->altShippingCost = $altShippingCost;
        return $this;
    }

    /**
     * Get altShippingCost
     *
     * @return float
     */
    public function getAltShippingCost() {
        return $this->altShippingCost;
    }


    /**
     * Set altHandlingCost
     *
     * @param float $altHandlingCost
     * @return CreditMemo
     */
    public function setAltHandlingCost($altHandlingCost) {
        $this->altHandlingCost = $altHandlingCost;
        return $this;
    }

    /**
     * Get altHandlingCost
     *
     * @return float
     */
    public function getAltHandlingCost() {
        return $this->altHandlingCost;
    }


    /**
     * Set total
     *
     * @param float $total
     * @return CreditMemo
     */
    public function setTotal($total) {
        $this->total = $total;
        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal() {
        return $this->total;
    }


    /**
     * Set syncSalesTeams
     *
     * @param boolean $syncSalesTeams
     * @return CreditMemo
     */
    public function setSyncSalesTeams($syncSalesTeams) {
        $this->syncSalesTeams = $syncSalesTeams;
        return $this;
    }

    /**
     * Get syncSalesTeams
     *
     * @return boolean
     */
    public function getSyncSalesTeams() {
        return $this->syncSalesTeams;
    }


    /**
     * Set status
     *
     * @param string $status
     * @return CreditMemo
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus() {
        return $this->status;
    }


    /**
     * Set giftCertTotal
     *
     * @param float $giftCertTotal
     * @return CreditMemo
     */
    public function setGiftCertTotal($giftCertTotal) {
        $this->giftCertTotal = $giftCertTotal;
        return $this;
    }

    /**
     * Get giftCertTotal
     *
     * @return float
     */
    public function getGiftCertTotal() {
        return $this->giftCertTotal;
    }


    /**
     * Set giftCertApplied
     *
     * @param float $giftCertApplied
     * @return CreditMemo
     */
    public function setGiftCertApplied($giftCertApplied) {
        $this->giftCertApplied = $giftCertApplied;
        return $this;
    }

    /**
     * Get giftCertApplied
     *
     * @return float
     */
    public function getGiftCertApplied() {
        return $this->giftCertApplied;
    }


    /**
     * Set giftCertAvailable
     *
     * @param float $giftCertAvailable
     * @return CreditMemo
     */
    public function setGiftCertAvailable($giftCertAvailable) {
        $this->giftCertAvailable = $giftCertAvailable;
        return $this;
    }

    /**
     * Get giftCertAvailable
     *
     * @return float
     */
    public function getGiftCertAvailable() {
        return $this->giftCertAvailable;
    }


    /**
     * Set tranIsVsoeBundle
     *
     * @param boolean $tranIsVsoeBundle
     * @return CreditMemo
     */
    public function setTranIsVsoeBundle($tranIsVsoeBundle) {
        $this->tranIsVsoeBundle = $tranIsVsoeBundle;
        return $this;
    }

    /**
     * Get tranIsVsoeBundle
     *
     * @return boolean
     */
    public function getTranIsVsoeBundle() {
        return $this->tranIsVsoeBundle;
    }


    /**
     * Set vsoeAutoCalc
     *
     * @param boolean $vsoeAutoCalc
     * @return CreditMemo
     */
    public function setVsoeAutoCalc($vsoeAutoCalc) {
        $this->vsoeAutoCalc = $vsoeAutoCalc;
        return $this;
    }

    /**
     * Get vsoeAutoCalc
     *
     * @return boolean
     */
    public function getVsoeAutoCalc() {
        return $this->vsoeAutoCalc;
    }


    /**
     * Set syncPartnerTeams
     *
     * @param boolean $syncPartnerTeams
     * @return CreditMemo
     */
    public function setSyncPartnerTeams($syncPartnerTeams) {
        $this->syncPartnerTeams = $syncPartnerTeams;
        return $this;
    }

    /**
     * Get syncPartnerTeams
     *
     * @return boolean
     */
    public function getSyncPartnerTeams() {
        return $this->syncPartnerTeams;
    }


    /**
     * Set salesTeamList
     *
     * @param CreditMemoSalesTeamList $salesTeamList
     * @return CreditMemo
     */
    public function setSalesTeamList(CreditMemoSalesTeamList $salesTeamList) {
        $this->salesTeamList = $salesTeamList;
        return $this;
    }

    /**
     * Get salesTeamList
     *
     * @return CreditMemoSalesTeamList
     */
    public function getSalesTeamList() {
        return $this->salesTeamList;
    }


    /**
     * Set itemList
     *
     * @param CreditMemoItemList $itemList
     * @return CreditMemo
     */
    public function setItemList(CreditMemoItemList $itemList) {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * Get itemList
     *
     * @return CreditMemoItemList
     */
    public function getItemList() {
        return $this->itemList;
    }


    /**
     * Set partnersList
     *
     * @param CreditMemoPartnersList $partnersList
     * @return CreditMemo
     */
    public function setPartnersList(CreditMemoPartnersList $partnersList) {
        $this->partnersList = $partnersList;
        return $this;
    }

    /**
     * Get partnersList
     *
     * @return CreditMemoPartnersList
     */
    public function getPartnersList() {
        return $this->partnersList;
    }


    /**
     * Set applyList
     *
     * @param CreditMemoApplyList $applyList
     * @return CreditMemo
     */
    public function setApplyList(CreditMemoApplyList $applyList) {
        $this->applyList = $applyList;
        return $this;
    }

    /**
     * Get applyList
     *
     * @return CreditMemoApplyList
     */
    public function getApplyList() {
        return $this->applyList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return CreditMemo
     */
    public function setCustomFieldList(CustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return CustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return CreditMemo
     */
    public function setInternalId($internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return string
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set externalId
     *
     * @param string $externalId
     * @return CreditMemo
     */
    public function setExternalId($externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return string
     */
    public function getExternalId() {
        return $this->externalId;
    }

}