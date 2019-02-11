<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Common\Address;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * Opportunity
 */
class Opportunity extends Record {

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
     * @var float
     */
    protected $estimatedBudget;

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
     * @var string
     */
    protected $title;

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
     * @var dateTime
     */
    protected $tranDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $expectedCloseDate;

    /**
     * @access public
     * @var integer
     */
    protected $daysOpen;

    /**
     * @access public
     * @var RecordRef
     */
    public $forecastType;

    /**
     * @access public
     * @var string
     */
    protected $currencyName;

    /**
     * @access public
     * @var float
     */
    protected $exchangeRate;

    /**
     * @access public
     * @var float
     */
    protected $projectedTotal;

    /**
     * @access public
     * @var float
     */
    protected $rangeLow;

    /**
     * @access public
     * @var float
     */
    protected $rangeHigh;

    /**
     * @access public
     * @var float
     */
    protected $projAltSalesAmt;

    /**
     * @access public
     * @var float
     */
    protected $altSalesRangeLow;

    /**
     * @access public
     * @var float
     */
    protected $altSalesRangeHigh;

    /**
     * @access public
     * @var float
     */
    protected $weightedTotal;

    /**
     * @access public
     * @var string
     */
    protected $actionItem;

    /**
     * @access public
     * @var RecordRef
     */
    public $winLossReason;

    /**
     * @access public
     * @var string
     */
    protected $memo;

    /**
     * @access public
     * @var float
     */
    protected $taxTotal;

    /**
     * @access public
     * @var boolean
     */
    protected $isBudgetApproved;

    /**
     * @access public
     * @var float
     */
    protected $tax2Total;

    /**
     * @access public
     * @var RecordRef
     */
    public $salesReadiness;

    /**
     * @access public
     * @var float
     */
    protected $totalCostEstimate;

    /**
     * @access public
     * @var RecordRef
     */
    public $buyingTimeFrame;

    /**
     * @access public
     * @var float
     */
    protected $estGrossProfit;

    /**
     * @access public
     * @var RecordRef
     */
    public $buyingReason;

    /**
     * @access public
     * @var float
     */
    protected $estGrossProfitPercent;

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
     * @var RecordRef
     */
    public $class;

    /**
     * @access public
     * @var dateTime
     */
    protected $closeDate;

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
    public $department;

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
     * @var string
     */
    protected $status;

    /**
     * @access public
     * @var string
     */
    protected $vatRegNum;

    /**
     * @access public
     * @var boolean
     */
    protected $syncPartnerTeams;

    /**
     * @access public
     * @var OpportunitySalesTeamList
     */
    protected $salesTeamList;

    /**
     * @access public
     * @var OpportunityPartnersList
     */
    protected $partnersList;

    /**
     * @access public
     * @var OpportunityItemList
     */
    protected $itemList;

    /**
     * @access public
     * @var OpportunityCompetitorsList
     */
    protected $competitorsList;

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
    	"customForm" => "RecordRef",
    	"currency" => "RecordRef",
    	"estimatedBudget" => "float",
    	"entity" => "RecordRef",
    	"job" => "RecordRef",
    	"title" => "string",
    	"tranId" => "string",
    	"source" => "string",
    	"salesRep" => "RecordRef",
    	"contribPct" => "string",
    	"partner" => "RecordRef",
    	"salesGroup" => "RecordRef",
    	"syncSalesTeams" => "boolean",
    	"leadSource" => "RecordRef",
    	"entityStatus" => "RecordRef",
    	"probability" => "float",
    	"tranDate" => "dateTime",
    	"expectedCloseDate" => "dateTime",
    	"daysOpen" => "integer",
    	"forecastType" => "RecordRef",
    	"currencyName" => "string",
    	"exchangeRate" => "float",
    	"projectedTotal" => "float",
    	"rangeLow" => "float",
    	"rangeHigh" => "float",
    	"projAltSalesAmt" => "float",
    	"altSalesRangeLow" => "float",
    	"altSalesRangeHigh" => "float",
    	"weightedTotal" => "float",
    	"actionItem" => "string",
    	"winLossReason" => "RecordRef",
    	"memo" => "string",
    	"taxTotal" => "float",
    	"isBudgetApproved" => "boolean",
    	"tax2Total" => "float",
    	"salesReadiness" => "RecordRef",
    	"totalCostEstimate" => "float",
    	"buyingTimeFrame" => "RecordRef",
    	"estGrossProfit" => "float",
    	"buyingReason" => "RecordRef",
    	"estGrossProfitPercent" => "float",
    	"billingAddress" => "Address",
    	"billAddressList" => "RecordRef",
    	"shippingAddress" => "Address",
    	"shipIsResidential" => "boolean",
    	"shipAddressList" => "RecordRef",
    	"class" => "RecordRef",
    	"closeDate" => "dateTime",
    	"createdDate" => "dateTime",
    	"lastModifiedDate" => "dateTime",
    	"department" => "RecordRef",
    	"location" => "RecordRef",
    	"subsidiary" => "RecordRef",
    	"status" => "string",
    	"vatRegNum" => "string",
    	"syncPartnerTeams" => "boolean",
    	"salesTeamList" => "OpportunitySalesTeamList",
    	"partnersList" => "OpportunityPartnersList",
    	"itemList" => "OpportunityItemList",
    	"competitorsList" => "OpportunityCompetitorsList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set estimatedBudget
     *
     * @param float $estimatedBudget
     * @return Opportunity
     */
    public function setEstimatedBudget($estimatedBudget) {
        $this->estimatedBudget = $estimatedBudget;
        return $this;
    }

    /**
     * Get estimatedBudget
     *
     * @return float
     */
    public function getEstimatedBudget() {
        return $this->estimatedBudget;
    }


    /**
     * Set title
     *
     * @param string $title
     * @return Opportunity
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
     * Set tranId
     *
     * @param string $tranId
     * @return Opportunity
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
     * @return Opportunity
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
     * @return Opportunity
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
     * @return Opportunity
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
     * Set probability
     *
     * @param float $probability
     * @return Opportunity
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
     * Set tranDate
     *
     * @param \DateTime $tranDate
     * @return Opportunity
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
     * Set expectedCloseDate
     *
     * @param \DateTime $expectedCloseDate
     * @return Opportunity
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
     * Set daysOpen
     *
     * @param integer $daysOpen
     * @return Opportunity
     */
    public function setDaysOpen($daysOpen) {
        $this->daysOpen = $daysOpen;
        return $this;
    }

    /**
     * Get daysOpen
     *
     * @return integer
     */
    public function getDaysOpen() {
        return $this->daysOpen;
    }


    /**
     * Set currencyName
     *
     * @param string $currencyName
     * @return Opportunity
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
     * Set exchangeRate
     *
     * @param float $exchangeRate
     * @return Opportunity
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
     * Set projectedTotal
     *
     * @param float $projectedTotal
     * @return Opportunity
     */
    public function setProjectedTotal($projectedTotal) {
        $this->projectedTotal = $projectedTotal;
        return $this;
    }

    /**
     * Get projectedTotal
     *
     * @return float
     */
    public function getProjectedTotal() {
        return $this->projectedTotal;
    }


    /**
     * Set rangeLow
     *
     * @param float $rangeLow
     * @return Opportunity
     */
    public function setRangeLow($rangeLow) {
        $this->rangeLow = $rangeLow;
        return $this;
    }

    /**
     * Get rangeLow
     *
     * @return float
     */
    public function getRangeLow() {
        return $this->rangeLow;
    }


    /**
     * Set rangeHigh
     *
     * @param float $rangeHigh
     * @return Opportunity
     */
    public function setRangeHigh($rangeHigh) {
        $this->rangeHigh = $rangeHigh;
        return $this;
    }

    /**
     * Get rangeHigh
     *
     * @return float
     */
    public function getRangeHigh() {
        return $this->rangeHigh;
    }


    /**
     * Set projAltSalesAmt
     *
     * @param float $projAltSalesAmt
     * @return Opportunity
     */
    public function setProjAltSalesAmt($projAltSalesAmt) {
        $this->projAltSalesAmt = $projAltSalesAmt;
        return $this;
    }

    /**
     * Get projAltSalesAmt
     *
     * @return float
     */
    public function getProjAltSalesAmt() {
        return $this->projAltSalesAmt;
    }


    /**
     * Set altSalesRangeLow
     *
     * @param float $altSalesRangeLow
     * @return Opportunity
     */
    public function setAltSalesRangeLow($altSalesRangeLow) {
        $this->altSalesRangeLow = $altSalesRangeLow;
        return $this;
    }

    /**
     * Get altSalesRangeLow
     *
     * @return float
     */
    public function getAltSalesRangeLow() {
        return $this->altSalesRangeLow;
    }


    /**
     * Set altSalesRangeHigh
     *
     * @param float $altSalesRangeHigh
     * @return Opportunity
     */
    public function setAltSalesRangeHigh($altSalesRangeHigh) {
        $this->altSalesRangeHigh = $altSalesRangeHigh;
        return $this;
    }

    /**
     * Get altSalesRangeHigh
     *
     * @return float
     */
    public function getAltSalesRangeHigh() {
        return $this->altSalesRangeHigh;
    }


    /**
     * Set weightedTotal
     *
     * @param float $weightedTotal
     * @return Opportunity
     */
    public function setWeightedTotal($weightedTotal) {
        $this->weightedTotal = $weightedTotal;
        return $this;
    }

    /**
     * Get weightedTotal
     *
     * @return float
     */
    public function getWeightedTotal() {
        return $this->weightedTotal;
    }


    /**
     * Set actionItem
     *
     * @param string $actionItem
     * @return Opportunity
     */
    public function setActionItem($actionItem) {
        $this->actionItem = $actionItem;
        return $this;
    }

    /**
     * Get actionItem
     *
     * @return string
     */
    public function getActionItem() {
        return $this->actionItem;
    }


    /**
     * Set memo
     *
     * @param string $memo
     * @return Opportunity
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
     * Set taxTotal
     *
     * @param float $taxTotal
     * @return Opportunity
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
     * Set isBudgetApproved
     *
     * @param boolean $isBudgetApproved
     * @return Opportunity
     */
    public function setIsBudgetApproved($isBudgetApproved) {
        $this->isBudgetApproved = $isBudgetApproved;
        return $this;
    }

    /**
     * Get isBudgetApproved
     *
     * @return boolean
     */
    public function getIsBudgetApproved() {
        return $this->isBudgetApproved;
    }


    /**
     * Set tax2Total
     *
     * @param float $tax2Total
     * @return Opportunity
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
     * Set totalCostEstimate
     *
     * @param float $totalCostEstimate
     * @return Opportunity
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
     * @return Opportunity
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
     * @return Opportunity
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
     * Set billingAddress
     *
     * @param Address $billingAddress
     * @return Opportunity
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
     * @return Opportunity
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
     * @return Opportunity
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
     * Set closeDate
     *
     * @param \DateTime $closeDate
     * @return Opportunity
     */
    public function setCloseDate(\DateTime $closeDate) {
        $this->closeDate = $closeDate->format('c');
        return $this;
    }

    /**
     * Get closeDate
     *
     * @return \DateTime
     */
    public function getCloseDate() {
        return new \DateTime($this->closeDate);
    }


    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return Opportunity
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
     * @return Opportunity
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
     * Set status
     *
     * @param string $status
     * @return Opportunity
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
     * Set vatRegNum
     *
     * @param string $vatRegNum
     * @return Opportunity
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
     * Set syncPartnerTeams
     *
     * @param boolean $syncPartnerTeams
     * @return Opportunity
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
     * @param OpportunitySalesTeamList $salesTeamList
     * @return Opportunity
     */
    public function setSalesTeamList(OpportunitySalesTeamList $salesTeamList) {
        $this->salesTeamList = $salesTeamList;
        return $this;
    }

    /**
     * Get salesTeamList
     *
     * @return OpportunitySalesTeamList
     */
    public function getSalesTeamList() {
        return $this->salesTeamList;
    }


    /**
     * Set partnersList
     *
     * @param OpportunityPartnersList $partnersList
     * @return Opportunity
     */
    public function setPartnersList(OpportunityPartnersList $partnersList) {
        $this->partnersList = $partnersList;
        return $this;
    }

    /**
     * Get partnersList
     *
     * @return OpportunityPartnersList
     */
    public function getPartnersList() {
        return $this->partnersList;
    }


    /**
     * Set itemList
     *
     * @param OpportunityItemList $itemList
     * @return Opportunity
     */
    public function setItemList(OpportunityItemList $itemList) {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * Get itemList
     *
     * @return OpportunityItemList
     */
    public function getItemList() {
        return $this->itemList;
    }


    /**
     * Set competitorsList
     *
     * @param OpportunityCompetitorsList $competitorsList
     * @return Opportunity
     */
    public function setCompetitorsList(OpportunityCompetitorsList $competitorsList) {
        $this->competitorsList = $competitorsList;
        return $this;
    }

    /**
     * Get competitorsList
     *
     * @return OpportunityCompetitorsList
     */
    public function getCompetitorsList() {
        return $this->competitorsList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return Opportunity
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
     * @return Opportunity
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
     * @return Opportunity
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