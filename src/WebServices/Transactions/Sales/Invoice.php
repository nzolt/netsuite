<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Common\Address;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\RevenueStatus;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * Invoice
 */
class Invoice extends Record {

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
    public $nextApprover;

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
    public $terms;

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
    public $currency;

    /**
     * @access public
     * @var dateTime
     */
    protected $dueDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $discountDate;

    /**
     * @access public
     * @var float
     */
    protected $discountAmount;

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
     * @var float
     */
    protected $amountPaid;

    /**
     * @access public
     * @var float
     */
    protected $amountRemaining;

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
     * @var string
     */
    protected $onCreditHold;

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
    protected $trackingNumbers;

    /**
     * @access public
     * @var string
     */
    protected $linkedTrackingNumbers;

    /**
     * @access public
     * @var RecordRef
     */
    public $salesGroup;

    /**
     * @access public
     * @var float
     */
    protected $subTotal;

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
     * @var string
     */
    protected $vatRegNum;

    /**
     * @access public
     * @var RecordRef
     */
    public $expCostDiscount;

    /**
     * @access public
     * @var RecordRef
     */
    public $itemCostDiscount;

    /**
     * @access public
     * @var RecordRef
     */
    public $timeDiscount;

    /**
     * @access public
     * @var string
     */
    protected $expCostDiscRate;

    /**
     * @access public
     * @var string
     */
    protected $itemCostDiscRate;

    /**
     * @access public
     * @var string
     */
    protected $timeDiscRate;

    /**
     * @access public
     * @var float
     */
    protected $expCostDiscAmount;

    /**
     * @access public
     * @var float
     */
    protected $expCostTaxRate1;

    /**
     * @access public
     * @var float
     */
    protected $expCostTaxRate2;

    /**
     * @access public
     * @var float
     */
    protected $itemCostDiscAmount;

    /**
     * @access public
     * @var RecordRef
     */
    public $expCostTaxCode;

    /**
     * @access public
     * @var float
     */
    protected $expCostDiscTax1Amt;

    /**
     * @access public
     * @var float
     */
    protected $itemCostTaxRate1;

    /**
     * @access public
     * @var float
     */
    protected $timeDiscAmount;

    /**
     * @access public
     * @var RecordRef
     */
    public $itemCostTaxCode;

    /**
     * @access public
     * @var boolean
     */
    protected $expCostDiscTaxable;

    /**
     * @access public
     * @var boolean
     */
    protected $itemCostDiscTaxable;

    /**
     * @access public
     * @var float
     */
    protected $itemCostTaxRate2;

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
     * @var boolean
     */
    protected $timeDiscTaxable;

    /**
     * @access public
     * @var float
     */
    protected $timeTaxRate1;

    /**
     * @access public
     * @var boolean
     */
    protected $expCostDiscPrint;

    /**
     * @access public
     * @var RecordRef
     */
    public $timeTaxCode;

    /**
     * @access public
     * @var boolean
     */
    protected $timeDiscPrint;

    /**
     * @access public
     * @var float
     */
    protected $giftCertApplied;

    /**
     * @access public
     * @var float
     */
    protected $timeDiscTax1Amt;

    /**
     * @access public
     * @var boolean
     */
    protected $tranIsVsoeBundle;

    /**
     * @access public
     * @var float
     */
    protected $timeTaxRate2;

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
     * @var InvoiceSalesTeamList
     */
    protected $salesTeamList;

    /**
     * @access public
     * @var InvoicePartnersList
     */
    protected $partnersList;

    /**
     * @access public
     * @var InvoiceItemList
     */
    protected $itemList;

    /**
     * @access public
     * @var InvoiceItemCostList
     */
    protected $itemCostList;

    /**
     * @access public
     * @var GiftCertRedemptionList
     */
    protected $giftCertRedemptionList;

    /**
     * @access public
     * @var InvoiceExpCostList
     */
    protected $expCostList;

    /**
     * @access public
     * @var InvoiceTimeList
     */
    protected $timeList;

    /**
     * @access public
     * @var InvoiceShipGroupList
     */
    protected $shipGroupList;

    /**
     * @access public
     * @var RecordRef
     */
    public $approvalStatus;

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
    	"nextApprover" => "RecordRef",
    	"entity" => "RecordRef",
    	"tranDate" => "dateTime",
    	"tranId" => "string",
    	"source" => "string",
    	"createdFrom" => "RecordRef",
    	"postingPeriod" => "RecordRef",
    	"opportunity" => "RecordRef",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"terms" => "RecordRef",
    	"location" => "RecordRef",
    	"subsidiary" => "RecordRef",
    	"currency" => "RecordRef",
    	"dueDate" => "dateTime",
    	"discountDate" => "dateTime",
    	"discountAmount" => "float",
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
    	"totalCostEstimate" => "float",
    	"estGrossProfit" => "float",
    	"estGrossProfitPercent" => "float",
    	"revRecSchedule" => "RecordRef",
    	"revRecStartDate" => "dateTime",
    	"revRecEndDate" => "dateTime",
    	"amountPaid" => "float",
    	"amountRemaining" => "float",
    	"balance" => "float",
    	"account" => "RecordRef",
    	"onCreditHold" => "string",
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
    	"trackingNumbers" => "string",
    	"linkedTrackingNumbers" => "string",
    	"salesGroup" => "RecordRef",
    	"subTotal" => "float",
    	"revenueStatus" => "RevenueStatus",
    	"recognizedRevenue" => "float",
    	"deferredRevenue" => "float",
    	"revRecOnRevCommitment" => "boolean",
    	"syncSalesTeams" => "boolean",
    	"discountTotal" => "float",
    	"taxTotal" => "float",
    	"altShippingCost" => "float",
    	"altHandlingCost" => "float",
    	"total" => "float",
    	"status" => "string",
    	"job" => "RecordRef",
    	"billingSchedule" => "RecordRef",
    	"email" => "string",
    	"tax2Total" => "float",
    	"vatRegNum" => "string",
    	"expCostDiscount" => "RecordRef",
    	"itemCostDiscount" => "RecordRef",
    	"timeDiscount" => "RecordRef",
    	"expCostDiscRate" => "string",
    	"itemCostDiscRate" => "string",
    	"timeDiscRate" => "string",
    	"expCostDiscAmount" => "float",
    	"expCostTaxRate1" => "float",
    	"expCostTaxRate2" => "float",
    	"itemCostDiscAmount" => "float",
    	"expCostTaxCode" => "RecordRef",
    	"expCostDiscTax1Amt" => "float",
    	"itemCostTaxRate1" => "float",
    	"timeDiscAmount" => "float",
    	"itemCostTaxCode" => "RecordRef",
    	"expCostDiscTaxable" => "boolean",
    	"itemCostDiscTaxable" => "boolean",
    	"itemCostTaxRate2" => "float",
    	"itemCostDiscTax1Amt" => "float",
    	"itemCostDiscPrint" => "boolean",
    	"timeDiscTaxable" => "boolean",
    	"timeTaxRate1" => "float",
    	"expCostDiscPrint" => "boolean",
    	"timeTaxCode" => "RecordRef",
    	"timeDiscPrint" => "boolean",
    	"giftCertApplied" => "float",
    	"timeDiscTax1Amt" => "float",
    	"tranIsVsoeBundle" => "boolean",
    	"timeTaxRate2" => "float",
    	"vsoeAutoCalc" => "boolean",
    	"syncPartnerTeams" => "boolean",
    	"salesTeamList" => "InvoiceSalesTeamList",
    	"partnersList" => "InvoicePartnersList",
    	"itemList" => "InvoiceItemList",
    	"itemCostList" => "InvoiceItemCostList",
    	"giftCertRedemptionList" => "GiftCertRedemptionList",
    	"expCostList" => "InvoiceExpCostList",
    	"timeList" => "InvoiceTimeList",
    	"shipGroupList" => "InvoiceShipGroupList",
    	"approvalStatus" => "RecordRef",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * Set dueDate
     *
     * @param \DateTime $dueDate
     * @return Invoice
     */
    public function setDueDate(\DateTime $dueDate) {
        $this->dueDate = $dueDate->format('c');
        return $this;
    }

    /**
     * Get dueDate
     *
     * @return \DateTime
     */
    public function getDueDate() {
        return new \DateTime($this->dueDate);
    }


    /**
     * Set discountDate
     *
     * @param \DateTime $discountDate
     * @return Invoice
     */
    public function setDiscountDate(\DateTime $discountDate) {
        $this->discountDate = $discountDate->format('c');
        return $this;
    }

    /**
     * Get discountDate
     *
     * @return \DateTime
     */
    public function getDiscountDate() {
        return new \DateTime($this->discountDate);
    }


    /**
     * Set discountAmount
     *
     * @param float $discountAmount
     * @return Invoice
     */
    public function setDiscountAmount($discountAmount) {
        $this->discountAmount = $discountAmount;
        return $this;
    }

    /**
     * Get discountAmount
     *
     * @return float
     */
    public function getDiscountAmount() {
        return $this->discountAmount;
    }


    /**
     * Set contribPct
     *
     * @param string $contribPct
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * Set revRecStartDate
     *
     * @param \DateTime $revRecStartDate
     * @return Invoice
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
     * @return Invoice
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
     * Set amountPaid
     *
     * @param float $amountPaid
     * @return Invoice
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
     * Set amountRemaining
     *
     * @param float $amountRemaining
     * @return Invoice
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
     * Set balance
     *
     * @param float $balance
     * @return Invoice
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
     * Set onCreditHold
     *
     * @param string $onCreditHold
     * @return Invoice
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
     * Set exchangeRate
     *
     * @param float $exchangeRate
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * Set trackingNumbers
     *
     * @param string $trackingNumbers
     * @return Invoice
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
     * @return Invoice
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
     * Set subTotal
     *
     * @param float $subTotal
     * @return Invoice
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
     * Set revenueStatus
     *
     * @param RevenueStatus $revenueStatus
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * Set discountTotal
     *
     * @param float $discountTotal
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * Set status
     *
     * @param string $status
     * @return Invoice
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
     * Set email
     *
     * @param string $email
     * @return Invoice
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
     * @return Invoice
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
     * Set vatRegNum
     *
     * @param string $vatRegNum
     * @return Invoice
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
     * Set expCostDiscRate
     *
     * @param string $expCostDiscRate
     * @return Invoice
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
     * Set itemCostDiscRate
     *
     * @param string $itemCostDiscRate
     * @return Invoice
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
     * Set timeDiscRate
     *
     * @param string $timeDiscRate
     * @return Invoice
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
     * Set expCostDiscAmount
     *
     * @param float $expCostDiscAmount
     * @return Invoice
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
     * Set expCostTaxRate1
     *
     * @param float $expCostTaxRate1
     * @return Invoice
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
     * Set expCostTaxRate2
     *
     * @param float $expCostTaxRate2
     * @return Invoice
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
     * Set itemCostDiscAmount
     *
     * @param float $itemCostDiscAmount
     * @return Invoice
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
     * Set expCostDiscTax1Amt
     *
     * @param float $expCostDiscTax1Amt
     * @return Invoice
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
     * Set itemCostTaxRate1
     *
     * @param float $itemCostTaxRate1
     * @return Invoice
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
     * Set timeDiscAmount
     *
     * @param float $timeDiscAmount
     * @return Invoice
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
     * Set expCostDiscTaxable
     *
     * @param boolean $expCostDiscTaxable
     * @return Invoice
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
     * Set itemCostDiscTaxable
     *
     * @param boolean $itemCostDiscTaxable
     * @return Invoice
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
     * Set itemCostTaxRate2
     *
     * @param float $itemCostTaxRate2
     * @return Invoice
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
     * Set itemCostDiscTax1Amt
     *
     * @param float $itemCostDiscTax1Amt
     * @return Invoice
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
     * @return Invoice
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
     * Set timeDiscTaxable
     *
     * @param boolean $timeDiscTaxable
     * @return Invoice
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
     * Set timeTaxRate1
     *
     * @param float $timeTaxRate1
     * @return Invoice
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
     * Set expCostDiscPrint
     *
     * @param boolean $expCostDiscPrint
     * @return Invoice
     */
    public function setExpCostDiscPrint($expCostDiscPrint) {
        $this->expCostDiscPrint = $expCostDiscPrint;
        return $this;
    }

    /**
     * Get expCostDiscPrint
     *
     * @return boolean
     */
    public function getExpCostDiscPrint() {
        return $this->expCostDiscPrint;
    }


    /**
     * Set timeDiscPrint
     *
     * @param boolean $timeDiscPrint
     * @return Invoice
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
     * Set giftCertApplied
     *
     * @param float $giftCertApplied
     * @return Invoice
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
     * Set timeDiscTax1Amt
     *
     * @param float $timeDiscTax1Amt
     * @return Invoice
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
     * Set tranIsVsoeBundle
     *
     * @param boolean $tranIsVsoeBundle
     * @return Invoice
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
     * Set timeTaxRate2
     *
     * @param float $timeTaxRate2
     * @return Invoice
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
     * Set vsoeAutoCalc
     *
     * @param boolean $vsoeAutoCalc
     * @return Invoice
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
     * @return Invoice
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
     * @param InvoiceSalesTeamList $salesTeamList
     * @return Invoice
     */
    public function setSalesTeamList(InvoiceSalesTeamList $salesTeamList) {
        $this->salesTeamList = $salesTeamList;
        return $this;
    }

    /**
     * Get salesTeamList
     *
     * @return InvoiceSalesTeamList
     */
    public function getSalesTeamList() {
        return $this->salesTeamList;
    }


    /**
     * Set partnersList
     *
     * @param InvoicePartnersList $partnersList
     * @return Invoice
     */
    public function setPartnersList(InvoicePartnersList $partnersList) {
        $this->partnersList = $partnersList;
        return $this;
    }

    /**
     * Get partnersList
     *
     * @return InvoicePartnersList
     */
    public function getPartnersList() {
        return $this->partnersList;
    }


    /**
     * Set itemList
     *
     * @param InvoiceItemList $itemList
     * @return Invoice
     */
    public function setItemList(InvoiceItemList $itemList) {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * Get itemList
     *
     * @return InvoiceItemList
     */
    public function getItemList() {
        return $this->itemList;
    }


    /**
     * Set itemCostList
     *
     * @param InvoiceItemCostList $itemCostList
     * @return Invoice
     */
    public function setItemCostList(InvoiceItemCostList $itemCostList) {
        $this->itemCostList = $itemCostList;
        return $this;
    }

    /**
     * Get itemCostList
     *
     * @return InvoiceItemCostList
     */
    public function getItemCostList() {
        return $this->itemCostList;
    }


    /**
     * Set giftCertRedemptionList
     *
     * @param GiftCertRedemptionList $giftCertRedemptionList
     * @return Invoice
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
     * @param InvoiceExpCostList $expCostList
     * @return Invoice
     */
    public function setExpCostList(InvoiceExpCostList $expCostList) {
        $this->expCostList = $expCostList;
        return $this;
    }

    /**
     * Get expCostList
     *
     * @return InvoiceExpCostList
     */
    public function getExpCostList() {
        return $this->expCostList;
    }


    /**
     * Set timeList
     *
     * @param InvoiceTimeList $timeList
     * @return Invoice
     */
    public function setTimeList(InvoiceTimeList $timeList) {
        $this->timeList = $timeList;
        return $this;
    }

    /**
     * Get timeList
     *
     * @return InvoiceTimeList
     */
    public function getTimeList() {
        return $this->timeList;
    }


    /**
     * Set shipGroupList
     *
     * @param InvoiceShipGroupList $shipGroupList
     * @return Invoice
     */
    public function setShipGroupList(InvoiceShipGroupList $shipGroupList) {
        $this->shipGroupList = $shipGroupList;
        return $this;
    }

    /**
     * Get shipGroupList
     *
     * @return InvoiceShipGroupList
     */
    public function getShipGroupList() {
        return $this->shipGroupList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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