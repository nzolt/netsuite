<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Common\Address;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\RevenueStatus;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\AvsMatchCode;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * CashSale
 */
class CashSale extends Record {

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
    public $postingPeriod;

    /**
     * @access public
     * @var RecordRef
     */
    public $createdFrom;

    /**
     * @access public
     * @var RecordRef
     */
    public $opportunity;

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
     * @var RecordRef
     */
    public $revRecSchedule;

    /**
     * @access public
     * @var boolean
     */
    protected $undepFunds;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var RecordRef
     */
    public $account;

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
     * @var float
     */
    protected $handlingCost;

    /**
     * @access public
     * @var string
     */
    protected $handlingTax2Rate;

    /**
     * @access public
     * @var string
     */
    protected $linkedTrackingNumbers;

    /**
     * @access public
     * @var string
     */
    protected $trackingNumbers;

    /**
     * @access public
     * @var RecordRef
     */
    public $salesGroup;

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
     * @var string
     */
    protected $payPalStatus;

    /**
     * @access public
     * @var RecordRef
     */
    public $creditCard;

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
     * @var RecordRef
     */
    public $creditCardProcessor;

    /**
     * @access public
     * @var boolean
     */
    protected $ccApproved;

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
     * @var boolean
     */
    protected $ignoreAvs;

    /**
     * @access public
     * @var boolean
     */
    protected $ccProcessAsPurchaseCard;

    /**
     * @access public
     * @var RecordRef
     */
    public $itemCostDiscount;

    /**
     * @access public
     * @var string
     */
    protected $itemCostDiscRate;

    /**
     * @access public
     * @var float
     */
    protected $itemCostDiscAmount;

    /**
     * @access public
     * @var float
     */
    protected $itemCostTaxRate1;

    /**
     * @access public
     * @var float
     */
    protected $itemCostTaxRate2;

    /**
     * @access public
     * @var boolean
     */
    protected $itemCostDiscTaxable;

    /**
     * @access public
     * @var RecordRef
     */
    public $itemCostTaxCode;

    /**
     * @access public
     * @var float
     */
    protected $itemCostDiscTax1Amt;

    /**
     * @access public
     * @var boolean
     */
    protected $itemCostDiscPrint;

    /**
     * @access public
     * @var RecordRef
     */
    public $expCostDiscount;

    /**
     * @access public
     * @var string
     */
    protected $expCostDiscRate;

    /**
     * @access public
     * @var float
     */
    protected $expCostDiscAmount;

    /**
     * @access public
     * @var boolean
     */
    protected $expCostDiscTaxable;

    /**
     * @access public
     * @var boolean
     */
    protected $expCostDiscprint;

    /**
     * @access public
     * @var float
     */
    protected $expCostTaxRate1;

    /**
     * @access public
     * @var RecordRef
     */
    public $timeDiscount;

    /**
     * @access public
     * @var RecordRef
     */
    public $expCostTaxCode;

    /**
     * @access public
     * @var string
     */
    protected $timeDiscRate;

    /**
     * @access public
     * @var float
     */
    protected $expCostTaxRate2;

    /**
     * @access public
     * @var float
     */
    protected $expCostDiscTax1Amt;

    /**
     * @access public
     * @var float
     */
    protected $timeDiscAmount;

    /**
     * @access public
     * @var boolean
     */
    protected $timeDiscTaxable;

    /**
     * @access public
     * @var boolean
     */
    protected $timeDiscPrint;

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
    protected $timeTaxRate1;

    /**
     * @access public
     * @var float
     */
    protected $altShippingCost;

    /**
     * @access public
     * @var RecordRef
     */
    public $timeTaxCode;

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
     * @var float
     */
    protected $timeDiscTax1Amt;

    /**
     * @access public
     * @var string
     */
    protected $ccSecurityCode;

    /**
     * @access public
     * @var float
     */
    protected $timeTaxRate2;

    /**
     * @access public
     * @var AvsMatchCode
     */
    protected $ccSecurityCodeMatch;

    /**
     * @access public
     * @var boolean
     */
    protected $chargeIt;

    /**
     * @access public
     * @var string
     */
    protected $debitCardIssueNo;

    /**
     * @access public
     * @var string
     */
    protected $threeDStatusCode;

    /**
     * @access public
     * @var string
     */
    protected $pnRefNum;

    /**
     * @access public
     * @var string
     */
    protected $paypalAuthId;

    /**
     * @access public
     * @var string
     */
    protected $status;

    /**
     * @access public
     * @var boolean
     */
    protected $paypalProcess;

    /**
     * @access public
     * @var RecordRef
     */
    public $job;

    /**
     * @access public
     * @var RecordRef
     */
    public $billingSchedule;

    /**
     * @access public
     * @var string
     */
    protected $email;

    /**
     * @access public
     * @var float
     */
    protected $tax2Total;

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
     * @var CashSaleSalesTeamList
     */
    protected $salesTeamList;

    /**
     * @access public
     * @var CashSalePartnersList
     */
    protected $partnersList;

    /**
     * @access public
     * @var CashSaleItemList
     */
    protected $itemList;

    /**
     * @access public
     * @var CashSaleItemCostList
     */
    protected $itemCostList;

    /**
     * @access public
     * @var GiftCertRedemptionList
     */
    protected $giftCertRedemptionList;

    /**
     * @access public
     * @var CashSaleExpCostList
     */
    protected $expCostList;

    /**
     * @access public
     * @var CashSaleTimeList
     */
    protected $timeList;

    /**
     * @access public
     * @var CashSaleShipGroupList
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
    	"lastModifiedDate" => "dateTime",
    	"customForm" => "RecordRef",
    	"entity" => "RecordRef",
    	"tranDate" => "dateTime",
    	"tranId" => "string",
    	"source" => "string",
    	"postingPeriod" => "RecordRef",
    	"createdFrom" => "RecordRef",
    	"opportunity" => "RecordRef",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"subsidiary" => "RecordRef",
    	"salesRep" => "RecordRef",
    	"contribPct" => "string",
    	"partner" => "RecordRef",
    	"leadSource" => "RecordRef",
    	"startDate" => "dateTime",
    	"endDate" => "dateTime",
    	"otherRefNum" => "string",
    	"memo" => "string",
    	"salesEffectiveDate" => "dateTime",
    	"excludeCommission" => "boolean",
    	"revRecSchedule" => "RecordRef",
    	"undepFunds" => "boolean",
    	"currency" => "RecordRef",
    	"account" => "RecordRef",
    	"revRecStartDate" => "dateTime",
    	"revRecEndDate" => "dateTime",
    	"totalCostEstimate" => "float",
    	"estGrossProfit" => "float",
    	"estGrossProfitPercent" => "float",
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
    	"shipMethod" => "RecordRef",
    	"shippingCost" => "float",
    	"shippingTax1Rate" => "float",
    	"shippingTax2Rate" => "string",
    	"shippingTaxCode" => "RecordRef",
    	"handlingTaxCode" => "RecordRef",
    	"handlingTax1Rate" => "float",
    	"handlingCost" => "float",
    	"handlingTax2Rate" => "string",
    	"linkedTrackingNumbers" => "string",
    	"trackingNumbers" => "string",
    	"salesGroup" => "RecordRef",
    	"revenueStatus" => "RevenueStatus",
    	"recognizedRevenue" => "float",
    	"deferredRevenue" => "float",
    	"revRecOnRevCommitment" => "boolean",
    	"syncSalesTeams" => "boolean",
    	"paymentMethod" => "RecordRef",
    	"payPalStatus" => "string",
    	"creditCard" => "RecordRef",
    	"ccNumber" => "string",
    	"ccExpireDate" => "dateTime",
    	"ccName" => "string",
    	"ccStreet" => "string",
    	"ccZipCode" => "string",
    	"creditCardProcessor" => "RecordRef",
    	"ccApproved" => "boolean",
    	"authCode" => "string",
    	"ccAvsStreetMatch" => "AvsMatchCode",
    	"ccAvsZipMatch" => "AvsMatchCode",
    	"isRecurringPayment" => "boolean",
    	"payPalTranId" => "string",
    	"subTotal" => "float",
    	"ccIsPurchaseCardBin" => "boolean",
    	"ignoreAvs" => "boolean",
    	"ccProcessAsPurchaseCard" => "boolean",
    	"itemCostDiscount" => "RecordRef",
    	"itemCostDiscRate" => "string",
    	"itemCostDiscAmount" => "float",
    	"itemCostTaxRate1" => "float",
    	"itemCostTaxRate2" => "float",
    	"itemCostDiscTaxable" => "boolean",
    	"itemCostTaxCode" => "RecordRef",
    	"itemCostDiscTax1Amt" => "float",
    	"itemCostDiscPrint" => "boolean",
    	"expCostDiscount" => "RecordRef",
    	"expCostDiscRate" => "string",
    	"expCostDiscAmount" => "float",
    	"expCostDiscTaxable" => "boolean",
    	"expCostDiscprint" => "boolean",
    	"expCostTaxRate1" => "float",
    	"timeDiscount" => "RecordRef",
    	"expCostTaxCode" => "RecordRef",
    	"timeDiscRate" => "string",
    	"expCostTaxRate2" => "float",
    	"expCostDiscTax1Amt" => "float",
    	"timeDiscAmount" => "float",
    	"timeDiscTaxable" => "boolean",
    	"timeDiscPrint" => "boolean",
    	"discountTotal" => "float",
    	"taxTotal" => "float",
    	"timeTaxRate1" => "float",
    	"altShippingCost" => "float",
    	"timeTaxCode" => "RecordRef",
    	"altHandlingCost" => "float",
    	"total" => "float",
    	"timeDiscTax1Amt" => "float",
    	"ccSecurityCode" => "string",
    	"timeTaxRate2" => "float",
    	"ccSecurityCodeMatch" => "AvsMatchCode",
    	"chargeIt" => "boolean",
    	"debitCardIssueNo" => "string",
    	"threeDStatusCode" => "string",
    	"pnRefNum" => "string",
    	"paypalAuthId" => "string",
    	"status" => "string",
    	"paypalProcess" => "boolean",
    	"job" => "RecordRef",
    	"billingSchedule" => "RecordRef",
    	"email" => "string",
    	"tax2Total" => "float",
    	"validFrom" => "dateTime",
    	"vatRegNum" => "string",
    	"giftCertApplied" => "float",
    	"tranIsVsoeBundle" => "boolean",
    	"vsoeAutoCalc" => "boolean",
    	"syncPartnerTeams" => "boolean",
    	"salesTeamList" => "CashSaleSalesTeamList",
    	"partnersList" => "CashSalePartnersList",
    	"itemList" => "CashSaleItemList",
    	"itemCostList" => "CashSaleItemCostList",
    	"giftCertRedemptionList" => "GiftCertRedemptionList",
    	"expCostList" => "CashSaleExpCostList",
    	"timeList" => "CashSaleTimeList",
    	"shipGroupList" => "CashSaleShipGroupList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return CashSale
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
     * @return CashSale
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
     * Set tranDate
     *
     * @param \DateTime $tranDate
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * Set undepFunds
     *
     * @param boolean $undepFunds
     * @return CashSale
     */
    public function setUndepFunds($undepFunds) {
        $this->undepFunds = $undepFunds;
        return $this;
    }

    /**
     * Get undepFunds
     *
     * @return boolean
     */
    public function getUndepFunds() {
        return $this->undepFunds;
    }


    /**
     * Set revRecStartDate
     *
     * @param \DateTime $revRecStartDate
     * @return CashSale
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
     * @return CashSale
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
     * Set totalCostEstimate
     *
     * @param float $totalCostEstimate
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * Set toBeFaxed
     *
     * @param boolean $toBeFaxed
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * Set shippingCost
     *
     * @param float $shippingCost
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * Set handlingCost
     *
     * @param float $handlingCost
     * @return CashSale
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
     * Set handlingTax2Rate
     *
     * @param string $handlingTax2Rate
     * @return CashSale
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
     * Set linkedTrackingNumbers
     *
     * @param string $linkedTrackingNumbers
     * @return CashSale
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
     * Set trackingNumbers
     *
     * @param string $trackingNumbers
     * @return CashSale
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
     * Set revenueStatus
     *
     * @param RevenueStatus $revenueStatus
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * Set syncSalesTeams
     *
     * @param boolean $syncSalesTeams
     * @return CashSale
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
     * Set payPalStatus
     *
     * @param string $payPalStatus
     * @return CashSale
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
     * Set ccNumber
     *
     * @param string $ccNumber
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * Set authCode
     *
     * @param string $authCode
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * Set payPalTranId
     *
     * @param string $payPalTranId
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * Set ignoreAvs
     *
     * @param boolean $ignoreAvs
     * @return CashSale
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
     * Set ccProcessAsPurchaseCard
     *
     * @param boolean $ccProcessAsPurchaseCard
     * @return CashSale
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
     * Set itemCostDiscRate
     *
     * @param string $itemCostDiscRate
     * @return CashSale
     */
    public function setItemCostDiscRate($itemCostDiscRate) {
        $this->itemCostDiscRate = $itemCostDiscRate;
        return $this;
    }

    /**
     * Get itemCostDiscRate
     *
     * @return string
     */
    public function getItemCostDiscRate() {
        return $this->itemCostDiscRate;
    }


    /**
     * Set itemCostDiscAmount
     *
     * @param float $itemCostDiscAmount
     * @return CashSale
     */
    public function setItemCostDiscAmount($itemCostDiscAmount) {
        $this->itemCostDiscAmount = $itemCostDiscAmount;
        return $this;
    }

    /**
     * Get itemCostDiscAmount
     *
     * @return float
     */
    public function getItemCostDiscAmount() {
        return $this->itemCostDiscAmount;
    }


    /**
     * Set itemCostTaxRate1
     *
     * @param float $itemCostTaxRate1
     * @return CashSale
     */
    public function setItemCostTaxRate1($itemCostTaxRate1) {
        $this->itemCostTaxRate1 = $itemCostTaxRate1;
        return $this;
    }

    /**
     * Get itemCostTaxRate1
     *
     * @return float
     */
    public function getItemCostTaxRate1() {
        return $this->itemCostTaxRate1;
    }


    /**
     * Set itemCostTaxRate2
     *
     * @param float $itemCostTaxRate2
     * @return CashSale
     */
    public function setItemCostTaxRate2($itemCostTaxRate2) {
        $this->itemCostTaxRate2 = $itemCostTaxRate2;
        return $this;
    }

    /**
     * Get itemCostTaxRate2
     *
     * @return float
     */
    public function getItemCostTaxRate2() {
        return $this->itemCostTaxRate2;
    }


    /**
     * Set itemCostDiscTaxable
     *
     * @param boolean $itemCostDiscTaxable
     * @return CashSale
     */
    public function setItemCostDiscTaxable($itemCostDiscTaxable) {
        $this->itemCostDiscTaxable = $itemCostDiscTaxable;
        return $this;
    }

    /**
     * Get itemCostDiscTaxable
     *
     * @return boolean
     */
    public function getItemCostDiscTaxable() {
        return $this->itemCostDiscTaxable;
    }


    /**
     * Set itemCostDiscTax1Amt
     *
     * @param float $itemCostDiscTax1Amt
     * @return CashSale
     */
    public function setItemCostDiscTax1Amt($itemCostDiscTax1Amt) {
        $this->itemCostDiscTax1Amt = $itemCostDiscTax1Amt;
        return $this;
    }

    /**
     * Get itemCostDiscTax1Amt
     *
     * @return float
     */
    public function getItemCostDiscTax1Amt() {
        return $this->itemCostDiscTax1Amt;
    }


    /**
     * Set itemCostDiscPrint
     *
     * @param boolean $itemCostDiscPrint
     * @return CashSale
     */
    public function setItemCostDiscPrint($itemCostDiscPrint) {
        $this->itemCostDiscPrint = $itemCostDiscPrint;
        return $this;
    }

    /**
     * Get itemCostDiscPrint
     *
     * @return boolean
     */
    public function getItemCostDiscPrint() {
        return $this->itemCostDiscPrint;
    }


    /**
     * Set expCostDiscRate
     *
     * @param string $expCostDiscRate
     * @return CashSale
     */
    public function setExpCostDiscRate($expCostDiscRate) {
        $this->expCostDiscRate = $expCostDiscRate;
        return $this;
    }

    /**
     * Get expCostDiscRate
     *
     * @return string
     */
    public function getExpCostDiscRate() {
        return $this->expCostDiscRate;
    }


    /**
     * Set expCostDiscAmount
     *
     * @param float $expCostDiscAmount
     * @return CashSale
     */
    public function setExpCostDiscAmount($expCostDiscAmount) {
        $this->expCostDiscAmount = $expCostDiscAmount;
        return $this;
    }

    /**
     * Get expCostDiscAmount
     *
     * @return float
     */
    public function getExpCostDiscAmount() {
        return $this->expCostDiscAmount;
    }


    /**
     * Set expCostDiscTaxable
     *
     * @param boolean $expCostDiscTaxable
     * @return CashSale
     */
    public function setExpCostDiscTaxable($expCostDiscTaxable) {
        $this->expCostDiscTaxable = $expCostDiscTaxable;
        return $this;
    }

    /**
     * Get expCostDiscTaxable
     *
     * @return boolean
     */
    public function getExpCostDiscTaxable() {
        return $this->expCostDiscTaxable;
    }


    /**
     * Set expCostDiscprint
     *
     * @param boolean $expCostDiscprint
     * @return CashSale
     */
    public function setExpCostDiscprint($expCostDiscprint) {
        $this->expCostDiscprint = $expCostDiscprint;
        return $this;
    }

    /**
     * Get expCostDiscprint
     *
     * @return boolean
     */
    public function getExpCostDiscprint() {
        return $this->expCostDiscprint;
    }


    /**
     * Set expCostTaxRate1
     *
     * @param float $expCostTaxRate1
     * @return CashSale
     */
    public function setExpCostTaxRate1($expCostTaxRate1) {
        $this->expCostTaxRate1 = $expCostTaxRate1;
        return $this;
    }

    /**
     * Get expCostTaxRate1
     *
     * @return float
     */
    public function getExpCostTaxRate1() {
        return $this->expCostTaxRate1;
    }


    /**
     * Set timeDiscRate
     *
     * @param string $timeDiscRate
     * @return CashSale
     */
    public function setTimeDiscRate($timeDiscRate) {
        $this->timeDiscRate = $timeDiscRate;
        return $this;
    }

    /**
     * Get timeDiscRate
     *
     * @return string
     */
    public function getTimeDiscRate() {
        return $this->timeDiscRate;
    }


    /**
     * Set expCostTaxRate2
     *
     * @param float $expCostTaxRate2
     * @return CashSale
     */
    public function setExpCostTaxRate2($expCostTaxRate2) {
        $this->expCostTaxRate2 = $expCostTaxRate2;
        return $this;
    }

    /**
     * Get expCostTaxRate2
     *
     * @return float
     */
    public function getExpCostTaxRate2() {
        return $this->expCostTaxRate2;
    }


    /**
     * Set expCostDiscTax1Amt
     *
     * @param float $expCostDiscTax1Amt
     * @return CashSale
     */
    public function setExpCostDiscTax1Amt($expCostDiscTax1Amt) {
        $this->expCostDiscTax1Amt = $expCostDiscTax1Amt;
        return $this;
    }

    /**
     * Get expCostDiscTax1Amt
     *
     * @return float
     */
    public function getExpCostDiscTax1Amt() {
        return $this->expCostDiscTax1Amt;
    }


    /**
     * Set timeDiscAmount
     *
     * @param float $timeDiscAmount
     * @return CashSale
     */
    public function setTimeDiscAmount($timeDiscAmount) {
        $this->timeDiscAmount = $timeDiscAmount;
        return $this;
    }

    /**
     * Get timeDiscAmount
     *
     * @return float
     */
    public function getTimeDiscAmount() {
        return $this->timeDiscAmount;
    }


    /**
     * Set timeDiscTaxable
     *
     * @param boolean $timeDiscTaxable
     * @return CashSale
     */
    public function setTimeDiscTaxable($timeDiscTaxable) {
        $this->timeDiscTaxable = $timeDiscTaxable;
        return $this;
    }

    /**
     * Get timeDiscTaxable
     *
     * @return boolean
     */
    public function getTimeDiscTaxable() {
        return $this->timeDiscTaxable;
    }


    /**
     * Set timeDiscPrint
     *
     * @param boolean $timeDiscPrint
     * @return CashSale
     */
    public function setTimeDiscPrint($timeDiscPrint) {
        $this->timeDiscPrint = $timeDiscPrint;
        return $this;
    }

    /**
     * Get timeDiscPrint
     *
     * @return boolean
     */
    public function getTimeDiscPrint() {
        return $this->timeDiscPrint;
    }


    /**
     * Set discountTotal
     *
     * @param float $discountTotal
     * @return CashSale
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
     * @return CashSale
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
     * Set timeTaxRate1
     *
     * @param float $timeTaxRate1
     * @return CashSale
     */
    public function setTimeTaxRate1($timeTaxRate1) {
        $this->timeTaxRate1 = $timeTaxRate1;
        return $this;
    }

    /**
     * Get timeTaxRate1
     *
     * @return float
     */
    public function getTimeTaxRate1() {
        return $this->timeTaxRate1;
    }


    /**
     * Set altShippingCost
     *
     * @param float $altShippingCost
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * Set timeDiscTax1Amt
     *
     * @param float $timeDiscTax1Amt
     * @return CashSale
     */
    public function setTimeDiscTax1Amt($timeDiscTax1Amt) {
        $this->timeDiscTax1Amt = $timeDiscTax1Amt;
        return $this;
    }

    /**
     * Get timeDiscTax1Amt
     *
     * @return float
     */
    public function getTimeDiscTax1Amt() {
        return $this->timeDiscTax1Amt;
    }


    /**
     * Set ccSecurityCode
     *
     * @param string $ccSecurityCode
     * @return CashSale
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
     * Set timeTaxRate2
     *
     * @param float $timeTaxRate2
     * @return CashSale
     */
    public function setTimeTaxRate2($timeTaxRate2) {
        $this->timeTaxRate2 = $timeTaxRate2;
        return $this;
    }

    /**
     * Get timeTaxRate2
     *
     * @return float
     */
    public function getTimeTaxRate2() {
        return $this->timeTaxRate2;
    }


    /**
     * Set ccSecurityCodeMatch
     *
     * @param AvsMatchCode $ccSecurityCodeMatch
     * @return CashSale
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
     * Set chargeIt
     *
     * @param boolean $chargeIt
     * @return CashSale
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
     * Set debitCardIssueNo
     *
     * @param string $debitCardIssueNo
     * @return CashSale
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
     * Set threeDStatusCode
     *
     * @param string $threeDStatusCode
     * @return CashSale
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
     * Set pnRefNum
     *
     * @param string $pnRefNum
     * @return CashSale
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
     * Set paypalAuthId
     *
     * @param string $paypalAuthId
     * @return CashSale
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
     * Set status
     *
     * @param string $status
     * @return CashSale
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
     * Set paypalProcess
     *
     * @param boolean $paypalProcess
     * @return CashSale
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
     * Set email
     *
     * @param string $email
     * @return CashSale
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
     * Set tax2Total
     *
     * @param float $tax2Total
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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
     * @param CashSaleSalesTeamList $salesTeamList
     * @return CashSale
     */
    public function setSalesTeamList(CashSaleSalesTeamList $salesTeamList) {
        $this->salesTeamList = $salesTeamList;
        return $this;
    }

    /**
     * Get salesTeamList
     *
     * @return CashSaleSalesTeamList
     */
    public function getSalesTeamList() {
        return $this->salesTeamList;
    }


    /**
     * Set partnersList
     *
     * @param CashSalePartnersList $partnersList
     * @return CashSale
     */
    public function setPartnersList(CashSalePartnersList $partnersList) {
        $this->partnersList = $partnersList;
        return $this;
    }

    /**
     * Get partnersList
     *
     * @return CashSalePartnersList
     */
    public function getPartnersList() {
        return $this->partnersList;
    }


    /**
     * Set itemList
     *
     * @param CashSaleItemList $itemList
     * @return CashSale
     */
    public function setItemList(CashSaleItemList $itemList) {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * Get itemList
     *
     * @return CashSaleItemList
     */
    public function getItemList() {
        return $this->itemList;
    }


    /**
     * Set itemCostList
     *
     * @param CashSaleItemCostList $itemCostList
     * @return CashSale
     */
    public function setItemCostList(CashSaleItemCostList $itemCostList) {
        $this->itemCostList = $itemCostList;
        return $this;
    }

    /**
     * Get itemCostList
     *
     * @return CashSaleItemCostList
     */
    public function getItemCostList() {
        return $this->itemCostList;
    }


    /**
     * Set giftCertRedemptionList
     *
     * @param GiftCertRedemptionList $giftCertRedemptionList
     * @return CashSale
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
     * Set expCostList
     *
     * @param CashSaleExpCostList $expCostList
     * @return CashSale
     */
    public function setExpCostList(CashSaleExpCostList $expCostList) {
        $this->expCostList = $expCostList;
        return $this;
    }

    /**
     * Get expCostList
     *
     * @return CashSaleExpCostList
     */
    public function getExpCostList() {
        return $this->expCostList;
    }


    /**
     * Set timeList
     *
     * @param CashSaleTimeList $timeList
     * @return CashSale
     */
    public function setTimeList(CashSaleTimeList $timeList) {
        $this->timeList = $timeList;
        return $this;
    }

    /**
     * Get timeList
     *
     * @return CashSaleTimeList
     */
    public function getTimeList() {
        return $this->timeList;
    }


    /**
     * Set shipGroupList
     *
     * @param CashSaleShipGroupList $shipGroupList
     * @return CashSale
     */
    public function setShipGroupList(CashSaleShipGroupList $shipGroupList) {
        $this->shipGroupList = $shipGroupList;
        return $this;
    }

    /**
     * Get shipGroupList
     *
     * @return CashSaleShipGroupList
     */
    public function getShipGroupList() {
        return $this->shipGroupList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return CashSale
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
     * @return CashSale
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
     * @return CashSale
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