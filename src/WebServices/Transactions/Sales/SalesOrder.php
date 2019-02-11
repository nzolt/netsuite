<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Transactions\Sales\Types\SalesOrderOrderStatus;
use Nzolt\NetSuite\WebServices\Platform\Common\Address;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\RevenueStatus;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\RevenueCommitStatus;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\AvsMatchCode;
use Nzolt\NetSuite\WebServices\Transactions\Sales\Types\TransactionPaymentEventResult;
use Nzolt\NetSuite\WebServices\Transactions\Sales\Types\TransactionPaymentEventHoldReason;
use Nzolt\NetSuite\WebServices\Transactions\Sales\Types\TransactionPaymentEventType;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\IntercoStatus;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * SalesOrder
 */
class SalesOrder extends Record {

    /**
     * @access public
     * @var dateTime
     */
    protected $createdDate;

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
     * @var RecordRef
     */
    public $job;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var RecordRef
     */
    public $drAccount;

    /**
     * @access public
     * @var RecordRef
     */
    public $fxAccount;

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
     * @var SalesOrderOrderStatus
     */
    protected $orderStatus;

    /**
     * @access public
     * @var RecordRef
     */
    public $opportunity;

    /**
     * @access public
     * @var RecordRef
     */
    public $salesRep;

    /**
     * @access public
     * @var string
     */
    protected $contribPct;

    /**
     * @access public
     * @var RecordRef
     */
    public $partner;

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
    public $leadSource;

    /**
     * @access public
     * @var dateTime
     */
    protected $startDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $endDate;

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
     * @var float
     */
    protected $exchangeRate;

    /**
     * @access public
     * @var RecordRef
     */
    public $promoCode;

    /**
     * @access public
     * @var string
     */
    protected $currencyName;

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
     * @var Address
     */
    protected $shippingAddress;

    /**
     * @access public
     * @var boolean
     */
    protected $shipIsResidential;

    /**
     * @access public
     * @var RecordRef
     */
    public $shipAddressList;

    /**
     * @access public
     * @var string
     */
    protected $fob;

    /**
     * @access public
     * @var dateTime
     */
    protected $shipDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $actualShipDate;

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
     * @var boolean
     */
    protected $isMultiShipTo;

    /**
     * @access public
     * @var string
     */
    protected $shippingTax2Rate;

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
     * @var string
     */
    protected $trackingNumbers;

    /**
     * @access public
     * @var string
     */
    protected $linkedTrackingNumbers;

    /**
     * @access public
     * @var boolean
     */
    protected $shipComplete;

    /**
     * @access public
     * @var RecordRef
     */
    public $paymentMethod;

    /**
     * @access public
     * @var string
     */
    protected $shopperIpAddress;

    /**
     * @access public
     * @var boolean
     */
    protected $saveOnAuthDecline;

    /**
     * @access public
     * @var RecordRef
     */
    public $creditCard;

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
     * @var RevenueCommitStatus
     */
    protected $revCommitStatus;

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
     * @var string
     */
    protected $payPalStatus;

    /**
     * @access public
     * @var RecordRef
     */
    public $creditCardProcessor;

    /**
     * @access public
     * @var string
     */
    protected $payPalTranId;

    /**
     * @access public
     * @var boolean
     */
    protected $ccApproved;

    /**
     * @access public
     * @var boolean
     */
    protected $getAuth;

    /**
     * @access public
     * @var string
     */
    protected $authCode;

    /**
     * @access public
     * @var AvsMatchCode
     */
    protected $ccAvsStreetMatch;

    /**
     * @access public
     * @var AvsMatchCode
     */
    protected $ccAvsZipMatch;

    /**
     * @access public
     * @var boolean
     */
    protected $isRecurringPayment;

    /**
     * @access public
     * @var AvsMatchCode
     */
    protected $ccSecurityCodeMatch;

    /**
     * @access public
     * @var float
     */
    protected $altSalesTotal;

    /**
     * @access public
     * @var boolean
     */
    protected $ignoreAvs;

    /**
     * @access public
     * @var TransactionPaymentEventResult
     */
    protected $paymentEventResult;

    /**
     * @access public
     * @var TransactionPaymentEventHoldReason
     */
    protected $paymentEventHoldReason;

    /**
     * @access public
     * @var TransactionPaymentEventType
     */
    protected $paymentEventType;

    /**
     * @access public
     * @var dateTime
     */
    protected $paymentEventDate;

    /**
     * @access public
     * @var string
     */
    protected $paymentEventUpdatedBy;

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
     * @var float
     */
    protected $taxTotal;

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
    public $revRecSchedule;

    /**
     * @access public
     * @var dateTime
     */
    protected $revRecStartDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $revRecEndDate;

    /**
     * @access public
     * @var string
     */
    protected $paypalAuthId;

    /**
     * @access public
     * @var float
     */
    protected $balance;

    /**
     * @access public
     * @var boolean
     */
    protected $paypalProcess;

    /**
     * @access public
     * @var RecordRef
     */
    public $billingSchedule;

    /**
     * @access public
     * @var string
     */
    protected $ccSecurityCode;

    /**
     * @access public
     * @var string
     */
    protected $threeDStatusCode;

    /**
     * @access public
     * @var RecordRef
     */
    public $class;

    /**
     * @access public
     * @var RecordRef
     */
    public $department;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

    /**
     * @access public
     * @var RecordRef
     */
    public $intercoTransaction;

    /**
     * @access public
     * @var IntercoStatus
     */
    protected $intercoStatus;

    /**
     * @access public
     * @var string
     */
    protected $debitCardIssueNo;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $location;

    /**
     * @access public
     * @var string
     */
    protected $pnRefNum;

    /**
     * @access public
     * @var string
     */
    protected $status;

    /**
     * @access public
     * @var float
     */
    protected $tax2Total;

    /**
     * @access public
     * @var RecordRef
     */
    public $terms;

    /**
     * @access public
     * @var dateTime
     */
    protected $validFrom;

    /**
     * @access public
     * @var string
     */
    protected $vatRegNum;

    /**
     * @access public
     * @var float
     */
    protected $giftCertApplied;

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
     * @var SalesOrderSalesTeamList
     */
    protected $salesTeamList;

    /**
     * @access public
     * @var SalesOrderPartnersList
     */
    protected $partnersList;

    /**
     * @access public
     * @var GiftCertRedemptionList
     */
    protected $giftCertRedemptionList;

    /**
     * @access public
     * @var SalesOrderItemList
     */
    protected $itemList;

    /**
     * @access public
     * @var SalesOrderShipGroupList
     */
    protected $shipGroupList;

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
    	"customForm" => "RecordRef",
    	"entity" => "RecordRef",
    	"job" => "RecordRef",
    	"currency" => "RecordRef",
    	"drAccount" => "RecordRef",
    	"fxAccount" => "RecordRef",
    	"tranDate" => "dateTime",
    	"tranId" => "string",
    	"source" => "string",
    	"createdFrom" => "RecordRef",
    	"orderStatus" => "SalesOrderOrderStatus",
    	"opportunity" => "RecordRef",
    	"salesRep" => "RecordRef",
    	"contribPct" => "string",
    	"partner" => "RecordRef",
    	"salesGroup" => "RecordRef",
    	"syncSalesTeams" => "boolean",
    	"leadSource" => "RecordRef",
    	"startDate" => "dateTime",
    	"endDate" => "dateTime",
    	"otherRefNum" => "string",
    	"memo" => "string",
    	"salesEffectiveDate" => "dateTime",
    	"excludeCommission" => "boolean",
    	"totalCostEstimate" => "float",
    	"estGrossProfit" => "float",
    	"estGrossProfitPercent" => "float",
    	"exchangeRate" => "float",
    	"promoCode" => "RecordRef",
    	"currencyName" => "string",
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
    	"shippingAddress" => "Address",
    	"shipIsResidential" => "boolean",
    	"shipAddressList" => "RecordRef",
    	"fob" => "string",
    	"shipDate" => "dateTime",
    	"actualShipDate" => "dateTime",
    	"shipMethod" => "RecordRef",
    	"shippingCost" => "float",
    	"shippingTax1Rate" => "float",
    	"isMultiShipTo" => "boolean",
    	"shippingTax2Rate" => "string",
    	"shippingTaxCode" => "RecordRef",
    	"handlingTaxCode" => "RecordRef",
    	"handlingTax1Rate" => "float",
    	"handlingTax2Rate" => "string",
    	"handlingCost" => "float",
    	"trackingNumbers" => "string",
    	"linkedTrackingNumbers" => "string",
    	"shipComplete" => "boolean",
    	"paymentMethod" => "RecordRef",
    	"shopperIpAddress" => "string",
    	"saveOnAuthDecline" => "boolean",
    	"creditCard" => "RecordRef",
    	"revenueStatus" => "RevenueStatus",
    	"recognizedRevenue" => "float",
    	"deferredRevenue" => "float",
    	"revRecOnRevCommitment" => "boolean",
    	"revCommitStatus" => "RevenueCommitStatus",
    	"ccNumber" => "string",
    	"ccExpireDate" => "dateTime",
    	"ccName" => "string",
    	"ccStreet" => "string",
    	"ccZipCode" => "string",
    	"payPalStatus" => "string",
    	"creditCardProcessor" => "RecordRef",
    	"payPalTranId" => "string",
    	"ccApproved" => "boolean",
    	"getAuth" => "boolean",
    	"authCode" => "string",
    	"ccAvsStreetMatch" => "AvsMatchCode",
    	"ccAvsZipMatch" => "AvsMatchCode",
    	"isRecurringPayment" => "boolean",
    	"ccSecurityCodeMatch" => "AvsMatchCode",
    	"altSalesTotal" => "float",
    	"ignoreAvs" => "boolean",
    	"paymentEventResult" => "TransactionPaymentEventResult",
    	"paymentEventHoldReason" => "TransactionPaymentEventHoldReason",
    	"paymentEventType" => "TransactionPaymentEventType",
    	"paymentEventDate" => "dateTime",
    	"paymentEventUpdatedBy" => "string",
    	"subTotal" => "float",
    	"discountTotal" => "float",
    	"taxTotal" => "float",
    	"altShippingCost" => "float",
    	"altHandlingCost" => "float",
    	"total" => "float",
    	"revRecSchedule" => "RecordRef",
    	"revRecStartDate" => "dateTime",
    	"revRecEndDate" => "dateTime",
    	"paypalAuthId" => "string",
    	"balance" => "float",
    	"paypalProcess" => "boolean",
    	"billingSchedule" => "RecordRef",
    	"ccSecurityCode" => "string",
    	"threeDStatusCode" => "string",
    	"class" => "RecordRef",
    	"department" => "RecordRef",
    	"subsidiary" => "RecordRef",
    	"intercoTransaction" => "RecordRef",
    	"intercoStatus" => "IntercoStatus",
    	"debitCardIssueNo" => "string",
    	"lastModifiedDate" => "dateTime",
    	"location" => "RecordRef",
    	"pnRefNum" => "string",
    	"status" => "string",
    	"tax2Total" => "float",
    	"terms" => "RecordRef",
    	"validFrom" => "dateTime",
    	"vatRegNum" => "string",
    	"giftCertApplied" => "float",
    	"tranIsVsoeBundle" => "boolean",
    	"vsoeAutoCalc" => "boolean",
    	"syncPartnerTeams" => "boolean",
    	"salesTeamList" => "SalesOrderSalesTeamList",
    	"partnersList" => "SalesOrderPartnersList",
    	"giftCertRedemptionList" => "GiftCertRedemptionList",
    	"itemList" => "SalesOrderItemList",
    	"shipGroupList" => "SalesOrderShipGroupList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return SalesOrder
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
     * Set tranDate
     *
     * @param \DateTime $tranDate
     * @return SalesOrder
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
     * @return SalesOrder
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
     * @return SalesOrder
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
     * Set orderStatus
     *
     * @param SalesOrderOrderStatus $orderStatus
     * @return SalesOrder
     */
    public function setOrderStatus(SalesOrderOrderStatus $orderStatus) {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * Get orderStatus
     *
     * @return SalesOrderOrderStatus
     */
    public function getOrderStatus() {
        return $this->orderStatus;
    }


    /**
     * Set contribPct
     *
     * @param string $contribPct
     * @return SalesOrder
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
     * Set syncSalesTeams
     *
     * @param boolean $syncSalesTeams
     * @return SalesOrder
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
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return SalesOrder
     */
    public function setStartDate(\DateTime $startDate) {
        $this->startDate = $startDate->format('c');
        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate() {
        return new \DateTime($this->startDate);
    }


    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return SalesOrder
     */
    public function setEndDate(\DateTime $endDate) {
        $this->endDate = $endDate->format('c');
        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate() {
        return new \DateTime($this->endDate);
    }


    /**
     * Set otherRefNum
     *
     * @param string $otherRefNum
     * @return SalesOrder
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
     * @return SalesOrder
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
     * @return SalesOrder
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
     * Set excludeCommission
     *
     * @param boolean $excludeCommission
     * @return SalesOrder
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
     * @return SalesOrder
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
     * @return SalesOrder
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
     * @return SalesOrder
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
     * @return SalesOrder
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
     * @return SalesOrder
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
     * @return SalesOrder
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
     * @return SalesOrder
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
     * @return SalesOrder
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
     * @return SalesOrder
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
     * @return SalesOrder
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
     * @return SalesOrder
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
     * @return SalesOrder
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
     * @return SalesOrder
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
     * @return SalesOrder
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
     * @return SalesOrder
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
     * Set shippingAddress
     *
     * @param Address $shippingAddress
     * @return SalesOrder
     */
    public function setShippingAddress(Address $shippingAddress) {
        $this->shippingAddress = $shippingAddress;
        return $this;
    }

    /**
     * Get shippingAddress
     *
     * @return Address
     */
    public function getShippingAddress() {
        return $this->shippingAddress;
    }


    /**
     * Set shipIsResidential
     *
     * @param boolean $shipIsResidential
     * @return SalesOrder
     */
    public function setShipIsResidential($shipIsResidential) {
        $this->shipIsResidential = $shipIsResidential;
        return $this;
    }

    /**
     * Get shipIsResidential
     *
     * @return boolean
     */
    public function getShipIsResidential() {
        return $this->shipIsResidential;
    }


    /**
     * Set fob
     *
     * @param string $fob
     * @return SalesOrder
     */
    public function setFob($fob) {
        $this->fob = $fob;
        return $this;
    }

    /**
     * Get fob
     *
     * @return string
     */
    public function getFob() {
        return $this->fob;
    }


    /**
     * Set shipDate
     *
     * @param \DateTime $shipDate
     * @return SalesOrder
     */
    public function setShipDate(\DateTime $shipDate) {
        $this->shipDate = $shipDate->format('c');
        return $this;
    }

    /**
     * Get shipDate
     *
     * @return \DateTime
     */
    public function getShipDate() {
        return new \DateTime($this->shipDate);
    }


    /**
     * Set actualShipDate
     *
     * @param \DateTime $actualShipDate
     * @return SalesOrder
     */
    public function setActualShipDate(\DateTime $actualShipDate) {
        $this->actualShipDate = $actualShipDate->format('c');
        return $this;
    }

    /**
     * Get actualShipDate
     *
     * @return \DateTime
     */
    public function getActualShipDate() {
        return new \DateTime($this->actualShipDate);
    }


    /**
     * Set shippingCost
     *
     * @param float $shippingCost
     * @return SalesOrder
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
     * @return SalesOrder
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
     * Set isMultiShipTo
     *
     * @param boolean $isMultiShipTo
     * @return SalesOrder
     */
    public function setIsMultiShipTo($isMultiShipTo) {
        $this->isMultiShipTo = $isMultiShipTo;
        return $this;
    }

    /**
     * Get isMultiShipTo
     *
     * @return boolean
     */
    public function getIsMultiShipTo() {
        return $this->isMultiShipTo;
    }


    /**
     * Set shippingTax2Rate
     *
     * @param string $shippingTax2Rate
     * @return SalesOrder
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
     * @return SalesOrder
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
     * @return SalesOrder
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
     * @return SalesOrder
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
     * Set trackingNumbers
     *
     * @param string $trackingNumbers
     * @return SalesOrder
     */
    public function setTrackingNumbers($trackingNumbers) {
        $this->trackingNumbers = $trackingNumbers;
        return $this;
    }

    /**
     * Get trackingNumbers
     *
     * @return string
     */
    public function getTrackingNumbers() {
        return $this->trackingNumbers;
    }


    /**
     * Set linkedTrackingNumbers
     *
     * @param string $linkedTrackingNumbers
     * @return SalesOrder
     */
    public function setLinkedTrackingNumbers($linkedTrackingNumbers) {
        $this->linkedTrackingNumbers = $linkedTrackingNumbers;
        return $this;
    }

    /**
     * Get linkedTrackingNumbers
     *
     * @return string
     */
    public function getLinkedTrackingNumbers() {
        return $this->linkedTrackingNumbers;
    }


    /**
     * Set shipComplete
     *
     * @param boolean $shipComplete
     * @return SalesOrder
     */
    public function setShipComplete($shipComplete) {
        $this->shipComplete = $shipComplete;
        return $this;
    }

    /**
     * Get shipComplete
     *
     * @return boolean
     */
    public function getShipComplete() {
        return $this->shipComplete;
    }


    /**
     * Set shopperIpAddress
     *
     * @param string $shopperIpAddress
     * @return SalesOrder
     */
    public function setShopperIpAddress($shopperIpAddress) {
        $this->shopperIpAddress = $shopperIpAddress;
        return $this;
    }

    /**
     * Get shopperIpAddress
     *
     * @return string
     */
    public function getShopperIpAddress() {
        return $this->shopperIpAddress;
    }


    /**
     * Set saveOnAuthDecline
     *
     * @param boolean $saveOnAuthDecline
     * @return SalesOrder
     */
    public function setSaveOnAuthDecline($saveOnAuthDecline) {
        $this->saveOnAuthDecline = $saveOnAuthDecline;
        return $this;
    }

    /**
     * Get saveOnAuthDecline
     *
     * @return boolean
     */
    public function getSaveOnAuthDecline() {
        return $this->saveOnAuthDecline;
    }


    /**
     * Set revenueStatus
     *
     * @param RevenueStatus $revenueStatus
     * @return SalesOrder
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
     * @return SalesOrder
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
     * @return SalesOrder
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
     * @return SalesOrder
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
     * Set revCommitStatus
     *
     * @param RevenueCommitStatus $revCommitStatus
     * @return SalesOrder
     */
    public function setRevCommitStatus(RevenueCommitStatus $revCommitStatus) {
        $this->revCommitStatus = $revCommitStatus;
        return $this;
    }

    /**
     * Get revCommitStatus
     *
     * @return RevenueCommitStatus
     */
    public function getRevCommitStatus() {
        return $this->revCommitStatus;
    }


    /**
     * Set ccNumber
     *
     * @param string $ccNumber
     * @return SalesOrder
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
     * @return SalesOrder
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
     * @return SalesOrder
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
     * @return SalesOrder
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
     * @return SalesOrder
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
     * Set payPalStatus
     *
     * @param string $payPalStatus
     * @return SalesOrder
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
     * Set payPalTranId
     *
     * @param string $payPalTranId
     * @return SalesOrder
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
     * Set ccApproved
     *
     * @param boolean $ccApproved
     * @return SalesOrder
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
     * Set getAuth
     *
     * @param boolean $getAuth
     * @return SalesOrder
     */
    public function setGetAuth($getAuth) {
        $this->getAuth = $getAuth;
        return $this;
    }

    /**
     * Get getAuth
     *
     * @return boolean
     */
    public function getGetAuth() {
        return $this->getAuth;
    }


    /**
     * Set authCode
     *
     * @param string $authCode
     * @return SalesOrder
     */
    public function setAuthCode($authCode) {
        $this->authCode = $authCode;
        return $this;
    }

    /**
     * Get authCode
     *
     * @return string
     */
    public function getAuthCode() {
        return $this->authCode;
    }


    /**
     * Set ccAvsStreetMatch
     *
     * @param AvsMatchCode $ccAvsStreetMatch
     * @return SalesOrder
     */
    public function setCcAvsStreetMatch(AvsMatchCode $ccAvsStreetMatch) {
        $this->ccAvsStreetMatch = $ccAvsStreetMatch;
        return $this;
    }

    /**
     * Get ccAvsStreetMatch
     *
     * @return AvsMatchCode
     */
    public function getCcAvsStreetMatch() {
        return $this->ccAvsStreetMatch;
    }


    /**
     * Set ccAvsZipMatch
     *
     * @param AvsMatchCode $ccAvsZipMatch
     * @return SalesOrder
     */
    public function setCcAvsZipMatch(AvsMatchCode $ccAvsZipMatch) {
        $this->ccAvsZipMatch = $ccAvsZipMatch;
        return $this;
    }

    /**
     * Get ccAvsZipMatch
     *
     * @return AvsMatchCode
     */
    public function getCcAvsZipMatch() {
        return $this->ccAvsZipMatch;
    }


    /**
     * Set isRecurringPayment
     *
     * @param boolean $isRecurringPayment
     * @return SalesOrder
     */
    public function setIsRecurringPayment($isRecurringPayment) {
        $this->isRecurringPayment = $isRecurringPayment;
        return $this;
    }

    /**
     * Get isRecurringPayment
     *
     * @return boolean
     */
    public function getIsRecurringPayment() {
        return $this->isRecurringPayment;
    }


    /**
     * Set ccSecurityCodeMatch
     *
     * @param AvsMatchCode $ccSecurityCodeMatch
     * @return SalesOrder
     */
    public function setCcSecurityCodeMatch(AvsMatchCode $ccSecurityCodeMatch) {
        $this->ccSecurityCodeMatch = $ccSecurityCodeMatch;
        return $this;
    }

    /**
     * Get ccSecurityCodeMatch
     *
     * @return AvsMatchCode
     */
    public function getCcSecurityCodeMatch() {
        return $this->ccSecurityCodeMatch;
    }


    /**
     * Set altSalesTotal
     *
     * @param float $altSalesTotal
     * @return SalesOrder
     */
    public function setAltSalesTotal($altSalesTotal) {
        $this->altSalesTotal = $altSalesTotal;
        return $this;
    }

    /**
     * Get altSalesTotal
     *
     * @return float
     */
    public function getAltSalesTotal() {
        return $this->altSalesTotal;
    }


    /**
     * Set ignoreAvs
     *
     * @param boolean $ignoreAvs
     * @return SalesOrder
     */
    public function setIgnoreAvs($ignoreAvs) {
        $this->ignoreAvs = $ignoreAvs;
        return $this;
    }

    /**
     * Get ignoreAvs
     *
     * @return boolean
     */
    public function getIgnoreAvs() {
        return $this->ignoreAvs;
    }


    /**
     * Set paymentEventResult
     *
     * @param TransactionPaymentEventResult $paymentEventResult
     * @return SalesOrder
     */
    public function setPaymentEventResult(TransactionPaymentEventResult $paymentEventResult) {
        $this->paymentEventResult = $paymentEventResult;
        return $this;
    }

    /**
     * Get paymentEventResult
     *
     * @return TransactionPaymentEventResult
     */
    public function getPaymentEventResult() {
        return $this->paymentEventResult;
    }


    /**
     * Set paymentEventHoldReason
     *
     * @param TransactionPaymentEventHoldReason $paymentEventHoldReason
     * @return SalesOrder
     */
    public function setPaymentEventHoldReason(TransactionPaymentEventHoldReason $paymentEventHoldReason) {
        $this->paymentEventHoldReason = $paymentEventHoldReason;
        return $this;
    }

    /**
     * Get paymentEventHoldReason
     *
     * @return TransactionPaymentEventHoldReason
     */
    public function getPaymentEventHoldReason() {
        return $this->paymentEventHoldReason;
    }


    /**
     * Set paymentEventType
     *
     * @param TransactionPaymentEventType $paymentEventType
     * @return SalesOrder
     */
    public function setPaymentEventType(TransactionPaymentEventType $paymentEventType) {
        $this->paymentEventType = $paymentEventType;
        return $this;
    }

    /**
     * Get paymentEventType
     *
     * @return TransactionPaymentEventType
     */
    public function getPaymentEventType() {
        return $this->paymentEventType;
    }


    /**
     * Set paymentEventDate
     *
     * @param \DateTime $paymentEventDate
     * @return SalesOrder
     */
    public function setPaymentEventDate(\DateTime $paymentEventDate) {
        $this->paymentEventDate = $paymentEventDate->format('c');
        return $this;
    }

    /**
     * Get paymentEventDate
     *
     * @return \DateTime
     */
    public function getPaymentEventDate() {
        return new \DateTime($this->paymentEventDate);
    }


    /**
     * Set paymentEventUpdatedBy
     *
     * @param string $paymentEventUpdatedBy
     * @return SalesOrder
     */
    public function setPaymentEventUpdatedBy($paymentEventUpdatedBy) {
        $this->paymentEventUpdatedBy = $paymentEventUpdatedBy;
        return $this;
    }

    /**
     * Get paymentEventUpdatedBy
     *
     * @return string
     */
    public function getPaymentEventUpdatedBy() {
        return $this->paymentEventUpdatedBy;
    }


    /**
     * Set subTotal
     *
     * @param float $subTotal
     * @return SalesOrder
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
     * @return SalesOrder
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
     * Set taxTotal
     *
     * @param float $taxTotal
     * @return SalesOrder
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
     * Set altShippingCost
     *
     * @param float $altShippingCost
     * @return SalesOrder
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
     * @return SalesOrder
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
     * @return SalesOrder
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
     * Set revRecStartDate
     *
     * @param \DateTime $revRecStartDate
     * @return SalesOrder
     */
    public function setRevRecStartDate(\DateTime $revRecStartDate) {
        $this->revRecStartDate = $revRecStartDate->format('c');
        return $this;
    }

    /**
     * Get revRecStartDate
     *
     * @return \DateTime
     */
    public function getRevRecStartDate() {
        return new \DateTime($this->revRecStartDate);
    }


    /**
     * Set revRecEndDate
     *
     * @param \DateTime $revRecEndDate
     * @return SalesOrder
     */
    public function setRevRecEndDate(\DateTime $revRecEndDate) {
        $this->revRecEndDate = $revRecEndDate->format('c');
        return $this;
    }

    /**
     * Get revRecEndDate
     *
     * @return \DateTime
     */
    public function getRevRecEndDate() {
        return new \DateTime($this->revRecEndDate);
    }


    /**
     * Set paypalAuthId
     *
     * @param string $paypalAuthId
     * @return SalesOrder
     */
    public function setPaypalAuthId($paypalAuthId) {
        $this->paypalAuthId = $paypalAuthId;
        return $this;
    }

    /**
     * Get paypalAuthId
     *
     * @return string
     */
    public function getPaypalAuthId() {
        return $this->paypalAuthId;
    }


    /**
     * Set balance
     *
     * @param float $balance
     * @return SalesOrder
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
     * Set paypalProcess
     *
     * @param boolean $paypalProcess
     * @return SalesOrder
     */
    public function setPaypalProcess($paypalProcess) {
        $this->paypalProcess = $paypalProcess;
        return $this;
    }

    /**
     * Get paypalProcess
     *
     * @return boolean
     */
    public function getPaypalProcess() {
        return $this->paypalProcess;
    }


    /**
     * Set ccSecurityCode
     *
     * @param string $ccSecurityCode
     * @return SalesOrder
     */
    public function setCcSecurityCode($ccSecurityCode) {
        $this->ccSecurityCode = $ccSecurityCode;
        return $this;
    }

    /**
     * Get ccSecurityCode
     *
     * @return string
     */
    public function getCcSecurityCode() {
        return $this->ccSecurityCode;
    }


    /**
     * Set threeDStatusCode
     *
     * @param string $threeDStatusCode
     * @return SalesOrder
     */
    public function setThreeDStatusCode($threeDStatusCode) {
        $this->threeDStatusCode = $threeDStatusCode;
        return $this;
    }

    /**
     * Get threeDStatusCode
     *
     * @return string
     */
    public function getThreeDStatusCode() {
        return $this->threeDStatusCode;
    }


    /**
     * Set intercoStatus
     *
     * @param IntercoStatus $intercoStatus
     * @return SalesOrder
     */
    public function setIntercoStatus(IntercoStatus $intercoStatus) {
        $this->intercoStatus = $intercoStatus;
        return $this;
    }

    /**
     * Get intercoStatus
     *
     * @return IntercoStatus
     */
    public function getIntercoStatus() {
        return $this->intercoStatus;
    }


    /**
     * Set debitCardIssueNo
     *
     * @param string $debitCardIssueNo
     * @return SalesOrder
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
     * Set lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return SalesOrder
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
     * Set pnRefNum
     *
     * @param string $pnRefNum
     * @return SalesOrder
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
     * Set status
     *
     * @param string $status
     * @return SalesOrder
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
     * Set tax2Total
     *
     * @param float $tax2Total
     * @return SalesOrder
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
     * Set validFrom
     *
     * @param \DateTime $validFrom
     * @return SalesOrder
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
     * Set vatRegNum
     *
     * @param string $vatRegNum
     * @return SalesOrder
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
     * Set giftCertApplied
     *
     * @param float $giftCertApplied
     * @return SalesOrder
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
     * Set tranIsVsoeBundle
     *
     * @param boolean $tranIsVsoeBundle
     * @return SalesOrder
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
     * @return SalesOrder
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
     * @return SalesOrder
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
     * @param SalesOrderSalesTeamList $salesTeamList
     * @return SalesOrder
     */
    public function setSalesTeamList(SalesOrderSalesTeamList $salesTeamList) {
        $this->salesTeamList = $salesTeamList;
        return $this;
    }

    /**
     * Get salesTeamList
     *
     * @return SalesOrderSalesTeamList
     */
    public function getSalesTeamList() {
        return $this->salesTeamList;
    }


    /**
     * Set partnersList
     *
     * @param SalesOrderPartnersList $partnersList
     * @return SalesOrder
     */
    public function setPartnersList(SalesOrderPartnersList $partnersList) {
        $this->partnersList = $partnersList;
        return $this;
    }

    /**
     * Get partnersList
     *
     * @return SalesOrderPartnersList
     */
    public function getPartnersList() {
        return $this->partnersList;
    }


    /**
     * Set giftCertRedemptionList
     *
     * @param GiftCertRedemptionList $giftCertRedemptionList
     * @return SalesOrder
     */
    public function setGiftCertRedemptionList(GiftCertRedemptionList $giftCertRedemptionList) {
        $this->giftCertRedemptionList = $giftCertRedemptionList;
        return $this;
    }

    /**
     * Get giftCertRedemptionList
     *
     * @return GiftCertRedemptionList
     */
    public function getGiftCertRedemptionList() {
        return $this->giftCertRedemptionList;
    }


    /**
     * Set itemList
     *
     * @param SalesOrderItemList $itemList
     * @return SalesOrder
     */
    public function setItemList(SalesOrderItemList $itemList) {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * Get itemList
     *
     * @return SalesOrderItemList
     */
    public function getItemList() {
        return $this->itemList;
    }


    /**
     * Set shipGroupList
     *
     * @param SalesOrderShipGroupList $shipGroupList
     * @return SalesOrder
     */
    public function setShipGroupList(SalesOrderShipGroupList $shipGroupList) {
        $this->shipGroupList = $shipGroupList;
        return $this;
    }

    /**
     * Get shipGroupList
     *
     * @return SalesOrderShipGroupList
     */
    public function getShipGroupList() {
        return $this->shipGroupList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return SalesOrder
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
     * @return SalesOrder
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
     * @return SalesOrder
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