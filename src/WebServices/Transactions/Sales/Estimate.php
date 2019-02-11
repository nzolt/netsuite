<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Common\Address;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * Estimate
 */
class Estimate extends Record {

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
    public $entity;

    /**
     * @access public
     * @var RecordRef
     */
    public $job;

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
    public $customForm;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var string
     */
    protected $title;

    /**
     * @access public
     * @var RecordRef
     */
    public $entityStatus;

    /**
     * @access public
     * @var float
     */
    protected $probability;

    /**
     * @access public
     * @var boolean
     */
    protected $includeInForecast;

    /**
     * @access public
     * @var RecordRef
     */
    public $forecastType;

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
     * @var dateTime
     */
    protected $dueDate;

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
    public $billingSchedule;

    /**
     * @access public
     * @var string
     */
    protected $status;

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
     * @var RecordRef
     */
    public $leadSource;

    /**
     * @access public
     * @var dateTime
     */
    protected $expectedCloseDate;

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
    protected $endDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $startDate;

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
    public $createdFrom;

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
     * @var string
     */
    protected $vatRegNum;

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
     * @var boolean
     */
    protected $visibleToCustomer;

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
     * @var RecordRef
     */
    public $shippingTaxCode;

    /**
     * @access public
     * @var string
     */
    protected $shippingTax2Rate;

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
    protected $trackingNumbers;

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
     * @var float
     */
    protected $altSalesTotal;

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
     * @var float
     */
    protected $tax2Total;

    /**
     * @access public
     * @var EstimateItemList
     */
    protected $itemList;

    /**
     * @access public
     * @var EstimateSalesTeamList
     */
    protected $salesTeamList;

    /**
     * @access public
     * @var boolean
     */
    protected $syncPartnerTeams;

    /**
     * @access public
     * @var EstimatePartnersList
     */
    protected $partnersList;

    /**
     * @access public
     * @var EstimateShipGroupList
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
    	"entity" => "RecordRef",
    	"job" => "RecordRef",
    	"tranDate" => "dateTime",
    	"tranId" => "string",
    	"source" => "string",
    	"customForm" => "RecordRef",
    	"currency" => "RecordRef",
    	"title" => "string",
    	"entityStatus" => "RecordRef",
    	"probability" => "float",
    	"includeInForecast" => "boolean",
    	"forecastType" => "RecordRef",
    	"opportunity" => "RecordRef",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"terms" => "RecordRef",
    	"dueDate" => "dateTime",
    	"location" => "RecordRef",
    	"subsidiary" => "RecordRef",
    	"billingSchedule" => "RecordRef",
    	"status" => "string",
    	"salesRep" => "RecordRef",
    	"partner" => "RecordRef",
    	"contribPct" => "string",
    	"leadSource" => "RecordRef",
    	"expectedCloseDate" => "dateTime",
    	"otherRefNum" => "string",
    	"memo" => "string",
    	"endDate" => "dateTime",
    	"startDate" => "dateTime",
    	"totalCostEstimate" => "float",
    	"estGrossProfit" => "float",
    	"estGrossProfitPercent" => "float",
    	"createdFrom" => "RecordRef",
    	"exchangeRate" => "float",
    	"currencyName" => "string",
    	"promoCode" => "RecordRef",
    	"discountItem" => "RecordRef",
    	"discountRate" => "string",
    	"isTaxable" => "boolean",
    	"taxItem" => "RecordRef",
    	"taxRate" => "float",
    	"vatRegNum" => "string",
    	"toBePrinted" => "boolean",
    	"toBeEmailed" => "boolean",
    	"email" => "string",
    	"toBeFaxed" => "boolean",
    	"fax" => "string",
    	"visibleToCustomer" => "boolean",
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
    	"shippingTaxCode" => "RecordRef",
    	"shippingTax2Rate" => "string",
    	"handlingTaxCode" => "RecordRef",
    	"handlingTax1Rate" => "float",
    	"handlingCost" => "float",
    	"trackingNumbers" => "string",
    	"handlingTax2Rate" => "string",
    	"linkedTrackingNumbers" => "string",
    	"salesGroup" => "RecordRef",
    	"syncSalesTeams" => "boolean",
    	"altSalesTotal" => "float",
    	"subTotal" => "float",
    	"discountTotal" => "float",
    	"taxTotal" => "float",
    	"altShippingCost" => "float",
    	"altHandlingCost" => "float",
    	"total" => "float",
    	"tax2Total" => "float",
    	"itemList" => "EstimateItemList",
    	"salesTeamList" => "EstimateSalesTeamList",
    	"syncPartnerTeams" => "boolean",
    	"partnersList" => "EstimatePartnersList",
    	"shipGroupList" => "EstimateShipGroupList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return Estimate
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
     * @return Estimate
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
     * @return Estimate
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
     * @return Estimate
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
     * @return Estimate
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
     * Set title
     *
     * @param string $title
     * @return Estimate
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }


    /**
     * Set probability
     *
     * @param float $probability
     * @return Estimate
     */
    public function setProbability($probability) {
        $this->probability = $probability;
        return $this;
    }

    /**
     * Get probability
     *
     * @return float
     */
    public function getProbability() {
        return $this->probability;
    }


    /**
     * Set includeInForecast
     *
     * @param boolean $includeInForecast
     * @return Estimate
     */
    public function setIncludeInForecast($includeInForecast) {
        $this->includeInForecast = $includeInForecast;
        return $this;
    }

    /**
     * Get includeInForecast
     *
     * @return boolean
     */
    public function getIncludeInForecast() {
        return $this->includeInForecast;
    }


    /**
     * Set dueDate
     *
     * @param \DateTime $dueDate
     * @return Estimate
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
     * Set status
     *
     * @param string $status
     * @return Estimate
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
     * Set contribPct
     *
     * @param string $contribPct
     * @return Estimate
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
     * Set expectedCloseDate
     *
     * @param \DateTime $expectedCloseDate
     * @return Estimate
     */
    public function setExpectedCloseDate(\DateTime $expectedCloseDate) {
        $this->expectedCloseDate = $expectedCloseDate->format('c');
        return $this;
    }

    /**
     * Get expectedCloseDate
     *
     * @return \DateTime
     */
    public function getExpectedCloseDate() {
        return new \DateTime($this->expectedCloseDate);
    }


    /**
     * Set otherRefNum
     *
     * @param string $otherRefNum
     * @return Estimate
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
     * @return Estimate
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
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return Estimate
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
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Estimate
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
     * Set totalCostEstimate
     *
     * @param float $totalCostEstimate
     * @return Estimate
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
     * @return Estimate
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
     * @return Estimate
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
     * @return Estimate
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
     * @return Estimate
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
     * @return Estimate
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
     * @return Estimate
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
     * @return Estimate
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
     * Set vatRegNum
     *
     * @param string $vatRegNum
     * @return Estimate
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
     * Set toBePrinted
     *
     * @param boolean $toBePrinted
     * @return Estimate
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
     * @return Estimate
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
     * @return Estimate
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
     * @return Estimate
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
     * @return Estimate
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
     * Set visibleToCustomer
     *
     * @param boolean $visibleToCustomer
     * @return Estimate
     */
    public function setVisibleToCustomer($visibleToCustomer) {
        $this->visibleToCustomer = $visibleToCustomer;
        return $this;
    }

    /**
     * Get visibleToCustomer
     *
     * @return boolean
     */
    public function getVisibleToCustomer() {
        return $this->visibleToCustomer;
    }


    /**
     * Set message
     *
     * @param string $message
     * @return Estimate
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
     * @return Estimate
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
     * @return Estimate
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
     * @return Estimate
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
     * @return Estimate
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
     * @return Estimate
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
     * @return Estimate
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
     * @return Estimate
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
     * @return Estimate
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
     * @return Estimate
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
     * @return Estimate
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
     * @return Estimate
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
     * Set handlingTax2Rate
     *
     * @param string $handlingTax2Rate
     * @return Estimate
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
     * @return Estimate
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
     * Set syncSalesTeams
     *
     * @param boolean $syncSalesTeams
     * @return Estimate
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
     * Set altSalesTotal
     *
     * @param float $altSalesTotal
     * @return Estimate
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
     * Set subTotal
     *
     * @param float $subTotal
     * @return Estimate
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
     * @return Estimate
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
     * @return Estimate
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
     * @return Estimate
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
     * @return Estimate
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
     * @return Estimate
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
     * Set tax2Total
     *
     * @param float $tax2Total
     * @return Estimate
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
     * Set itemList
     *
     * @param EstimateItemList $itemList
     * @return Estimate
     */
    public function setItemList(EstimateItemList $itemList) {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * Get itemList
     *
     * @return EstimateItemList
     */
    public function getItemList() {
        return $this->itemList;
    }


    /**
     * Set salesTeamList
     *
     * @param EstimateSalesTeamList $salesTeamList
     * @return Estimate
     */
    public function setSalesTeamList(EstimateSalesTeamList $salesTeamList) {
        $this->salesTeamList = $salesTeamList;
        return $this;
    }

    /**
     * Get salesTeamList
     *
     * @return EstimateSalesTeamList
     */
    public function getSalesTeamList() {
        return $this->salesTeamList;
    }


    /**
     * Set syncPartnerTeams
     *
     * @param boolean $syncPartnerTeams
     * @return Estimate
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
     * Set partnersList
     *
     * @param EstimatePartnersList $partnersList
     * @return Estimate
     */
    public function setPartnersList(EstimatePartnersList $partnersList) {
        $this->partnersList = $partnersList;
        return $this;
    }

    /**
     * Get partnersList
     *
     * @return EstimatePartnersList
     */
    public function getPartnersList() {
        return $this->partnersList;
    }


    /**
     * Set shipGroupList
     *
     * @param EstimateShipGroupList $shipGroupList
     * @return Estimate
     */
    public function setShipGroupList(EstimateShipGroupList $shipGroupList) {
        $this->shipGroupList = $shipGroupList;
        return $this;
    }

    /**
     * Get shipGroupList
     *
     * @return EstimateShipGroupList
     */
    public function getShipGroupList() {
        return $this->shipGroupList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return Estimate
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
     * @return Estimate
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
     * @return Estimate
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