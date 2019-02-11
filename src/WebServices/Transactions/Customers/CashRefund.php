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
 * CashRefund
 */
class CashRefund extends Record {

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
     * @var string
     */
    protected $source;

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
    public $leadSource;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

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
     * @var dateTime
     */
    protected $salesEffectiveDate;

    /**
     * @access public
     * @var boolean
     */
    protected $refundCheck;

    /**
     * @access public
     * @var boolean
     */
    protected $toPrint2;

    /**
     * @access public
     * @var boolean
     */
    protected $excludeCommission;

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
     * @var RecordRef
     */
    public $account;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var float
     */
    protected $exchangeRate;

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
     * @var RecordRef
     */
    public $discountItem;

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
     * @var RecordRef
     */
    public $shippingTaxCode;

    /**
     * @access public
     * @var float
     */
    protected $shippingTax1Rate;

    /**
     * @access public
     * @var string
     */
    protected $shippingTax2Rate;

    /**
     * @access public
     * @var float
     */
    protected $shippingCost;

    /**
     * @access public
     * @var RecordRef
     */
    public $handlingTaxCode;

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
     * @var RecordRef
     */
    public $paymentMethod;

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
     * @var RecordRef
     */
    public $creditCard;

    /**
     * @access public
     * @var boolean
     */
    protected $chargeIt;

    /**
     * @access public
     * @var string
     */
    protected $ccNumber;

    /**
     * @access public
     * @var dateTime
     */
    protected $ccExpireDate;

    /**
     * @access public
     * @var string
     */
    protected $ccName;

    /**
     * @access public
     * @var string
     */
    protected $ccStreet;

    /**
     * @access public
     * @var string
     */
    protected $ccZipCode;

    /**
     * @access public
     * @var boolean
     */
    protected $ccApproved;

    /**
     * @access public
     * @var RecordRef
     */
    public $creditCardProcessor;

    /**
     * @access public
     * @var string
     */
    protected $debitCardIssueNo;

    /**
     * @access public
     * @var string
     */
    protected $pnRefNum;

    /**
     * @access public
     * @var dateTime
     */
    protected $validFrom;

    /**
     * @access public
     * @var string
     */
    protected $payPalTranId;

    /**
     * @access public
     * @var float
     */
    protected $subTotal;

    /**
     * @access public
     * @var boolean
     */
    protected $ccIsPurchaseCardBin;

    /**
     * @access public
     * @var float
     */
    protected $discountTotal;

    /**
     * @access public
     * @var boolean
     */
    protected $ccProcessAsPurchaseCard;

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
     * @var string
     */
    protected $payPalStatus;

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
     * @var string
     */
    protected $payPalAuthId;

    /**
     * @access public
     * @var string
     */
    protected $status;

    /**
     * @access public
     * @var RecordRef
     */
    public $job;

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
    protected $payPalProcess;

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
     * @var CashRefundItemList
     */
    protected $itemList;

    /**
     * @access public
     * @var CashRefundSalesTeamList
     */
    protected $salesTeamList;

    /**
     * @access public
     * @var CashRefundPartnersList
     */
    protected $partnersList;

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
    	"entity" => "RecordRef",
    	"vatRegNum" => "string",
    	"tranDate" => "dateTime",
    	"tranId" => "string",
    	"source" => "string",
    	"createdFrom" => "RecordRef",
    	"postingPeriod" => "RecordRef",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"leadSource" => "RecordRef",
    	"subsidiary" => "RecordRef",
    	"salesRep" => "RecordRef",
    	"partner" => "RecordRef",
    	"contribPct" => "string",
    	"otherRefNum" => "string",
    	"memo" => "string",
    	"salesEffectiveDate" => "dateTime",
    	"refundCheck" => "boolean",
    	"toPrint2" => "boolean",
    	"excludeCommission" => "boolean",
    	"totalCostEstimate" => "float",
    	"estGrossProfit" => "float",
    	"estGrossProfitPercent" => "float",
    	"account" => "RecordRef",
    	"currency" => "RecordRef",
    	"exchangeRate" => "float",
    	"currencyName" => "string",
    	"promoCode" => "RecordRef",
    	"discountItem" => "RecordRef",
    	"discountRate" => "string",
    	"isTaxable" => "boolean",
    	"taxItem" => "RecordRef",
    	"taxRate" => "float",
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
    	"shippingTaxCode" => "RecordRef",
    	"shippingTax1Rate" => "float",
    	"shippingTax2Rate" => "string",
    	"shippingCost" => "float",
    	"handlingTaxCode" => "RecordRef",
    	"handlingTax1Rate" => "float",
    	"handlingTax2Rate" => "string",
    	"handlingCost" => "float",
    	"salesGroup" => "RecordRef",
    	"syncSalesTeams" => "boolean",
    	"paymentMethod" => "RecordRef",
    	"revenueStatus" => "RevenueStatus",
    	"recognizedRevenue" => "float",
    	"deferredRevenue" => "float",
    	"revRecOnRevCommitment" => "boolean",
    	"creditCard" => "RecordRef",
    	"chargeIt" => "boolean",
    	"ccNumber" => "string",
    	"ccExpireDate" => "dateTime",
    	"ccName" => "string",
    	"ccStreet" => "string",
    	"ccZipCode" => "string",
    	"ccApproved" => "boolean",
    	"creditCardProcessor" => "RecordRef",
    	"debitCardIssueNo" => "string",
    	"pnRefNum" => "string",
    	"validFrom" => "dateTime",
    	"payPalTranId" => "string",
    	"subTotal" => "float",
    	"ccIsPurchaseCardBin" => "boolean",
    	"discountTotal" => "float",
    	"ccProcessAsPurchaseCard" => "boolean",
    	"taxTotal" => "float",
    	"tax2Total" => "float",
    	"altShippingCost" => "float",
    	"payPalStatus" => "string",
    	"altHandlingCost" => "float",
    	"total" => "float",
    	"payPalAuthId" => "string",
    	"status" => "string",
    	"job" => "RecordRef",
    	"giftCert" => "RecordRef",
    	"giftCertTotal" => "float",
    	"giftCertApplied" => "float",
    	"giftCertAvailable" => "float",
    	"tranIsVsoeBundle" => "boolean",
    	"payPalProcess" => "boolean",
    	"vsoeAutoCalc" => "boolean",
    	"syncPartnerTeams" => "boolean",
    	"itemList" => "CashRefundItemList",
    	"salesTeamList" => "CashRefundSalesTeamList",
    	"partnersList" => "CashRefundPartnersList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return CashRefund
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
     * @return CashRefund
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
     * @return CashRefund
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
     * @return CashRefund
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
     * @return CashRefund
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
     * Set source
     *
     * @param string $source
     * @return CashRefund
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
     * Set contribPct
     *
     * @param string $contribPct
     * @return CashRefund
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
     * @return CashRefund
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
     * @return CashRefund
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
     * Set salesEffectiveDate
     *
     * @param \DateTime $salesEffectiveDate
     * @return CashRefund
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
     * Set refundCheck
     *
     * @param boolean $refundCheck
     * @return CashRefund
     */
    public function setRefundCheck($refundCheck) {
        $this->refundCheck = $refundCheck;
        return $this;
    }

    /**
     * Get refundCheck
     *
     * @return boolean
     */
    public function getRefundCheck() {
        return $this->refundCheck;
    }


    /**
     * Set toPrint2
     *
     * @param boolean $toPrint2
     * @return CashRefund
     */
    public function setToPrint2($toPrint2) {
        $this->toPrint2 = $toPrint2;
        return $this;
    }

    /**
     * Get toPrint2
     *
     * @return boolean
     */
    public function getToPrint2() {
        return $this->toPrint2;
    }


    /**
     * Set excludeCommission
     *
     * @param boolean $excludeCommission
     * @return CashRefund
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
     * Set totalCostEstimate
     *
     * @param float $totalCostEstimate
     * @return CashRefund
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
     * @return CashRefund
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
     * @return CashRefund
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
     * Set exchangeRate
     *
     * @param float $exchangeRate
     * @return CashRefund
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
     * Set currencyName
     *
     * @param string $currencyName
     * @return CashRefund
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
     * Set discountRate
     *
     * @param string $discountRate
     * @return CashRefund
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
     * @return CashRefund
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
     * @return CashRefund
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
     * Set toBePrinted
     *
     * @param boolean $toBePrinted
     * @return CashRefund
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
     * @return CashRefund
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
     * @return CashRefund
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
     * @return CashRefund
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
     * @return CashRefund
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
     * @return CashRefund
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
     * @return CashRefund
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
     * Set shippingTax1Rate
     *
     * @param float $shippingTax1Rate
     * @return CashRefund
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
     * @return CashRefund
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
     * Set shippingCost
     *
     * @param float $shippingCost
     * @return CashRefund
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
     * Set handlingTax1Rate
     *
     * @param float $handlingTax1Rate
     * @return CashRefund
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
     * @return CashRefund
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
     * @return CashRefund
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
     * Set syncSalesTeams
     *
     * @param boolean $syncSalesTeams
     * @return CashRefund
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
     * Set revenueStatus
     *
     * @param RevenueStatus $revenueStatus
     * @return CashRefund
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
     * @return CashRefund
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
     * @return CashRefund
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
     * @return CashRefund
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
     * Set chargeIt
     *
     * @param boolean $chargeIt
     * @return CashRefund
     */
    public function setChargeIt($chargeIt) {
        $this->chargeIt = $chargeIt;
        return $this;
    }

    /**
     * Get chargeIt
     *
     * @return boolean
     */
    public function getChargeIt() {
        return $this->chargeIt;
    }


    /**
     * Set ccNumber
     *
     * @param string $ccNumber
     * @return CashRefund
     */
    public function setCcNumber($ccNumber) {
        $this->ccNumber = $ccNumber;
        return $this;
    }

    /**
     * Get ccNumber
     *
     * @return string
     */
    public function getCcNumber() {
        return $this->ccNumber;
    }


    /**
     * Set ccExpireDate
     *
     * @param \DateTime $ccExpireDate
     * @return CashRefund
     */
    public function setCcExpireDate(\DateTime $ccExpireDate) {
        $this->ccExpireDate = $ccExpireDate->format('c');
        return $this;
    }

    /**
     * Get ccExpireDate
     *
     * @return \DateTime
     */
    public function getCcExpireDate() {
        return new \DateTime($this->ccExpireDate);
    }


    /**
     * Set ccName
     *
     * @param string $ccName
     * @return CashRefund
     */
    public function setCcName($ccName) {
        $this->ccName = $ccName;
        return $this;
    }

    /**
     * Get ccName
     *
     * @return string
     */
    public function getCcName() {
        return $this->ccName;
    }


    /**
     * Set ccStreet
     *
     * @param string $ccStreet
     * @return CashRefund
     */
    public function setCcStreet($ccStreet) {
        $this->ccStreet = $ccStreet;
        return $this;
    }

    /**
     * Get ccStreet
     *
     * @return string
     */
    public function getCcStreet() {
        return $this->ccStreet;
    }


    /**
     * Set ccZipCode
     *
     * @param string $ccZipCode
     * @return CashRefund
     */
    public function setCcZipCode($ccZipCode) {
        $this->ccZipCode = $ccZipCode;
        return $this;
    }

    /**
     * Get ccZipCode
     *
     * @return string
     */
    public function getCcZipCode() {
        return $this->ccZipCode;
    }


    /**
     * Set ccApproved
     *
     * @param boolean $ccApproved
     * @return CashRefund
     */
    public function setCcApproved($ccApproved) {
        $this->ccApproved = $ccApproved;
        return $this;
    }

    /**
     * Get ccApproved
     *
     * @return boolean
     */
    public function getCcApproved() {
        return $this->ccApproved;
    }


    /**
     * Set debitCardIssueNo
     *
     * @param string $debitCardIssueNo
     * @return CashRefund
     */
    public function setDebitCardIssueNo($debitCardIssueNo) {
        $this->debitCardIssueNo = $debitCardIssueNo;
        return $this;
    }

    /**
     * Get debitCardIssueNo
     *
     * @return string
     */
    public function getDebitCardIssueNo() {
        return $this->debitCardIssueNo;
    }


    /**
     * Set pnRefNum
     *
     * @param string $pnRefNum
     * @return CashRefund
     */
    public function setPnRefNum($pnRefNum) {
        $this->pnRefNum = $pnRefNum;
        return $this;
    }

    /**
     * Get pnRefNum
     *
     * @return string
     */
    public function getPnRefNum() {
        return $this->pnRefNum;
    }


    /**
     * Set validFrom
     *
     * @param \DateTime $validFrom
     * @return CashRefund
     */
    public function setValidFrom(\DateTime $validFrom) {
        $this->validFrom = $validFrom->format('c');
        return $this;
    }

    /**
     * Get validFrom
     *
     * @return \DateTime
     */
    public function getValidFrom() {
        return new \DateTime($this->validFrom);
    }


    /**
     * Set payPalTranId
     *
     * @param string $payPalTranId
     * @return CashRefund
     */
    public function setPayPalTranId($payPalTranId) {
        $this->payPalTranId = $payPalTranId;
        return $this;
    }

    /**
     * Get payPalTranId
     *
     * @return string
     */
    public function getPayPalTranId() {
        return $this->payPalTranId;
    }


    /**
     * Set subTotal
     *
     * @param float $subTotal
     * @return CashRefund
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
     * Set ccIsPurchaseCardBin
     *
     * @param boolean $ccIsPurchaseCardBin
     * @return CashRefund
     */
    public function setCcIsPurchaseCardBin($ccIsPurchaseCardBin) {
        $this->ccIsPurchaseCardBin = $ccIsPurchaseCardBin;
        return $this;
    }

    /**
     * Get ccIsPurchaseCardBin
     *
     * @return boolean
     */
    public function getCcIsPurchaseCardBin() {
        return $this->ccIsPurchaseCardBin;
    }


    /**
     * Set discountTotal
     *
     * @param float $discountTotal
     * @return CashRefund
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
     * Set ccProcessAsPurchaseCard
     *
     * @param boolean $ccProcessAsPurchaseCard
     * @return CashRefund
     */
    public function setCcProcessAsPurchaseCard($ccProcessAsPurchaseCard) {
        $this->ccProcessAsPurchaseCard = $ccProcessAsPurchaseCard;
        return $this;
    }

    /**
     * Get ccProcessAsPurchaseCard
     *
     * @return boolean
     */
    public function getCcProcessAsPurchaseCard() {
        return $this->ccProcessAsPurchaseCard;
    }


    /**
     * Set taxTotal
     *
     * @param float $taxTotal
     * @return CashRefund
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
     * @return CashRefund
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
     * @return CashRefund
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
     * Set payPalStatus
     *
     * @param string $payPalStatus
     * @return CashRefund
     */
    public function setPayPalStatus($payPalStatus) {
        $this->payPalStatus = $payPalStatus;
        return $this;
    }

    /**
     * Get payPalStatus
     *
     * @return string
     */
    public function getPayPalStatus() {
        return $this->payPalStatus;
    }


    /**
     * Set altHandlingCost
     *
     * @param float $altHandlingCost
     * @return CashRefund
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
     * @return CashRefund
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
     * Set payPalAuthId
     *
     * @param string $payPalAuthId
     * @return CashRefund
     */
    public function setPayPalAuthId($payPalAuthId) {
        $this->payPalAuthId = $payPalAuthId;
        return $this;
    }

    /**
     * Get payPalAuthId
     *
     * @return string
     */
    public function getPayPalAuthId() {
        return $this->payPalAuthId;
    }


    /**
     * Set status
     *
     * @param string $status
     * @return CashRefund
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
     * @return CashRefund
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
     * @return CashRefund
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
     * @return CashRefund
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
     * @return CashRefund
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
     * Set payPalProcess
     *
     * @param boolean $payPalProcess
     * @return CashRefund
     */
    public function setPayPalProcess($payPalProcess) {
        $this->payPalProcess = $payPalProcess;
        return $this;
    }

    /**
     * Get payPalProcess
     *
     * @return boolean
     */
    public function getPayPalProcess() {
        return $this->payPalProcess;
    }


    /**
     * Set vsoeAutoCalc
     *
     * @param boolean $vsoeAutoCalc
     * @return CashRefund
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
     * @return CashRefund
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
     * Set itemList
     *
     * @param CashRefundItemList $itemList
     * @return CashRefund
     */
    public function setItemList(CashRefundItemList $itemList) {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * Get itemList
     *
     * @return CashRefundItemList
     */
    public function getItemList() {
        return $this->itemList;
    }


    /**
     * Set salesTeamList
     *
     * @param CashRefundSalesTeamList $salesTeamList
     * @return CashRefund
     */
    public function setSalesTeamList(CashRefundSalesTeamList $salesTeamList) {
        $this->salesTeamList = $salesTeamList;
        return $this;
    }

    /**
     * Get salesTeamList
     *
     * @return CashRefundSalesTeamList
     */
    public function getSalesTeamList() {
        return $this->salesTeamList;
    }


    /**
     * Set partnersList
     *
     * @param CashRefundPartnersList $partnersList
     * @return CashRefund
     */
    public function setPartnersList(CashRefundPartnersList $partnersList) {
        $this->partnersList = $partnersList;
        return $this;
    }

    /**
     * Get partnersList
     *
     * @return CashRefundPartnersList
     */
    public function getPartnersList() {
        return $this->partnersList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return CashRefund
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
     * @return CashRefund
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
     * @return CashRefund
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