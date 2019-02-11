<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Marketing;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * Campaign
 */
class Campaign extends Record {

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var string
     */
    protected $campaignId;

    /**
     * @access public
     * @var string
     */
    protected $title;

    /**
     * @access public
     * @var RecordRef
     */
    public $category;

    /**
     * @access public
     * @var RecordRef
     */
    public $owner;

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
    protected $url;

    /**
     * @access public
     * @var float
     */
    protected $baseCost;

    /**
     * @access public
     * @var float
     */
    protected $cost;

    /**
     * @access public
     * @var float
     */
    protected $expectedRevenue;

    /**
     * @access public
     * @var string
     */
    protected $message;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var boolean
     */
    protected $local;

    /**
     * @access public
     * @var float
     */
    protected $totalRevenue;

    /**
     * @access public
     * @var float
     */
    protected $roi;

    /**
     * @access public
     * @var float
     */
    protected $profit;

    /**
     * @access public
     * @var float
     */
    protected $costPerCustomer;

    /**
     * @access public
     * @var float
     */
    protected $convCostPerCustomer;

    /**
     * @access public
     * @var integer
     */
    protected $conversions;

    /**
     * @access public
     * @var integer
     */
    protected $leadsGenerated;

    /**
     * @access public
     * @var integer
     */
    protected $uniqueVisitors;

    /**
     * @access public
     * @var RecordRef
     */
    public $vertical;

    /**
     * @access public
     * @var RecordRef
     */
    public $audience;

    /**
     * @access public
     * @var RecordRef
     */
    public $offer;

    /**
     * @access public
     * @var RecordRef
     */
    public $promotionCode;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $itemList;

    /**
     * @access public
     * @var RecordRef
     */
    public $family;

    /**
     * @access public
     * @var RecordRef
     */
    public $searchEngine;

    /**
     * @access public
     * @var string
     */
    protected $keyword;

    /**
     * @access public
     * @var CampaignEmailList
     */
    protected $campaignEmailList;

    /**
     * @access public
     * @var CampaignDirectMailList
     */
    protected $campaignDirectMailList;

    /**
     * @access public
     * @var CampaignEventList
     */
    protected $campaignEventList;

    /**
     * @access public
     * @var CampaignEventResponseList
     */
    protected $eventResponseList;

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
    	"campaignId" => "string",
    	"title" => "string",
    	"category" => "RecordRef",
    	"owner" => "RecordRef",
    	"startDate" => "dateTime",
    	"endDate" => "dateTime",
    	"url" => "string",
    	"baseCost" => "float",
    	"cost" => "float",
    	"expectedRevenue" => "float",
    	"message" => "string",
    	"isInactive" => "boolean",
    	"local" => "boolean",
    	"totalRevenue" => "float",
    	"roi" => "float",
    	"profit" => "float",
    	"costPerCustomer" => "float",
    	"convCostPerCustomer" => "float",
    	"conversions" => "integer",
    	"leadsGenerated" => "integer",
    	"uniqueVisitors" => "integer",
    	"vertical" => "RecordRef",
    	"audience" => "RecordRef",
    	"offer" => "RecordRef",
    	"promotionCode" => "RecordRef",
    	"itemList" => "RecordRefList",
    	"family" => "RecordRef",
    	"searchEngine" => "RecordRef",
    	"keyword" => "string",
    	"campaignEmailList" => "CampaignEmailList",
    	"campaignDirectMailList" => "CampaignDirectMailList",
    	"campaignEventList" => "CampaignEventList",
    	"eventResponseList" => "CampaignEventResponseList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set campaignId
     *
     * @param string $campaignId
     * @return Campaign
     */
    public function setCampaignId($campaignId) {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * Get campaignId
     *
     * @return string
     */
    public function getCampaignId() {
        return $this->campaignId;
    }


    /**
     * Set title
     *
     * @param string $title
     * @return Campaign
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
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Campaign
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
     * @return Campaign
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
     * Set url
     *
     * @param string $url
     * @return Campaign
     */
    public function setUrl($url) {
        $this->url = $url;
        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl() {
        return $this->url;
    }


    /**
     * Set baseCost
     *
     * @param float $baseCost
     * @return Campaign
     */
    public function setBaseCost($baseCost) {
        $this->baseCost = $baseCost;
        return $this;
    }

    /**
     * Get baseCost
     *
     * @return float
     */
    public function getBaseCost() {
        return $this->baseCost;
    }


    /**
     * Set cost
     *
     * @param float $cost
     * @return Campaign
     */
    public function setCost($cost) {
        $this->cost = $cost;
        return $this;
    }

    /**
     * Get cost
     *
     * @return float
     */
    public function getCost() {
        return $this->cost;
    }


    /**
     * Set expectedRevenue
     *
     * @param float $expectedRevenue
     * @return Campaign
     */
    public function setExpectedRevenue($expectedRevenue) {
        $this->expectedRevenue = $expectedRevenue;
        return $this;
    }

    /**
     * Get expectedRevenue
     *
     * @return float
     */
    public function getExpectedRevenue() {
        return $this->expectedRevenue;
    }


    /**
     * Set message
     *
     * @param string $message
     * @return Campaign
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
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return Campaign
     */
    public function setIsInactive($isInactive) {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Get isInactive
     *
     * @return boolean
     */
    public function getIsInactive() {
        return $this->isInactive;
    }


    /**
     * Set local
     *
     * @param boolean $local
     * @return Campaign
     */
    public function setLocal($local) {
        $this->local = $local;
        return $this;
    }

    /**
     * Get local
     *
     * @return boolean
     */
    public function getLocal() {
        return $this->local;
    }


    /**
     * Set totalRevenue
     *
     * @param float $totalRevenue
     * @return Campaign
     */
    public function setTotalRevenue($totalRevenue) {
        $this->totalRevenue = $totalRevenue;
        return $this;
    }

    /**
     * Get totalRevenue
     *
     * @return float
     */
    public function getTotalRevenue() {
        return $this->totalRevenue;
    }


    /**
     * Set roi
     *
     * @param float $roi
     * @return Campaign
     */
    public function setRoi($roi) {
        $this->roi = $roi;
        return $this;
    }

    /**
     * Get roi
     *
     * @return float
     */
    public function getRoi() {
        return $this->roi;
    }


    /**
     * Set profit
     *
     * @param float $profit
     * @return Campaign
     */
    public function setProfit($profit) {
        $this->profit = $profit;
        return $this;
    }

    /**
     * Get profit
     *
     * @return float
     */
    public function getProfit() {
        return $this->profit;
    }


    /**
     * Set costPerCustomer
     *
     * @param float $costPerCustomer
     * @return Campaign
     */
    public function setCostPerCustomer($costPerCustomer) {
        $this->costPerCustomer = $costPerCustomer;
        return $this;
    }

    /**
     * Get costPerCustomer
     *
     * @return float
     */
    public function getCostPerCustomer() {
        return $this->costPerCustomer;
    }


    /**
     * Set convCostPerCustomer
     *
     * @param float $convCostPerCustomer
     * @return Campaign
     */
    public function setConvCostPerCustomer($convCostPerCustomer) {
        $this->convCostPerCustomer = $convCostPerCustomer;
        return $this;
    }

    /**
     * Get convCostPerCustomer
     *
     * @return float
     */
    public function getConvCostPerCustomer() {
        return $this->convCostPerCustomer;
    }


    /**
     * Set conversions
     *
     * @param integer $conversions
     * @return Campaign
     */
    public function setConversions($conversions) {
        $this->conversions = $conversions;
        return $this;
    }

    /**
     * Get conversions
     *
     * @return integer
     */
    public function getConversions() {
        return $this->conversions;
    }


    /**
     * Set leadsGenerated
     *
     * @param integer $leadsGenerated
     * @return Campaign
     */
    public function setLeadsGenerated($leadsGenerated) {
        $this->leadsGenerated = $leadsGenerated;
        return $this;
    }

    /**
     * Get leadsGenerated
     *
     * @return integer
     */
    public function getLeadsGenerated() {
        return $this->leadsGenerated;
    }


    /**
     * Set uniqueVisitors
     *
     * @param integer $uniqueVisitors
     * @return Campaign
     */
    public function setUniqueVisitors($uniqueVisitors) {
        $this->uniqueVisitors = $uniqueVisitors;
        return $this;
    }

    /**
     * Get uniqueVisitors
     *
     * @return integer
     */
    public function getUniqueVisitors() {
        return $this->uniqueVisitors;
    }


    /**
     * Set itemList
     *
     * @param RecordRefList $itemList
     * @return Campaign
     */
    public function setItemList(RecordRefList $itemList) {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * Get itemList
     *
     * @return RecordRefList
     */
    public function getItemList() {
        return $this->itemList;
    }


    /**
     * Set keyword
     *
     * @param string $keyword
     * @return Campaign
     */
    public function setKeyword($keyword) {
        $this->keyword = $keyword;
        return $this;
    }

    /**
     * Get keyword
     *
     * @return string
     */
    public function getKeyword() {
        return $this->keyword;
    }


    /**
     * Set campaignEmailList
     *
     * @param CampaignEmailList $campaignEmailList
     * @return Campaign
     */
    public function setCampaignEmailList(CampaignEmailList $campaignEmailList) {
        $this->campaignEmailList = $campaignEmailList;
        return $this;
    }

    /**
     * Get campaignEmailList
     *
     * @return CampaignEmailList
     */
    public function getCampaignEmailList() {
        return $this->campaignEmailList;
    }


    /**
     * Set campaignDirectMailList
     *
     * @param CampaignDirectMailList $campaignDirectMailList
     * @return Campaign
     */
    public function setCampaignDirectMailList(CampaignDirectMailList $campaignDirectMailList) {
        $this->campaignDirectMailList = $campaignDirectMailList;
        return $this;
    }

    /**
     * Get campaignDirectMailList
     *
     * @return CampaignDirectMailList
     */
    public function getCampaignDirectMailList() {
        return $this->campaignDirectMailList;
    }


    /**
     * Set campaignEventList
     *
     * @param CampaignEventList $campaignEventList
     * @return Campaign
     */
    public function setCampaignEventList(CampaignEventList $campaignEventList) {
        $this->campaignEventList = $campaignEventList;
        return $this;
    }

    /**
     * Get campaignEventList
     *
     * @return CampaignEventList
     */
    public function getCampaignEventList() {
        return $this->campaignEventList;
    }


    /**
     * Set eventResponseList
     *
     * @param CampaignEventResponseList $eventResponseList
     * @return Campaign
     */
    public function setEventResponseList(CampaignEventResponseList $eventResponseList) {
        $this->eventResponseList = $eventResponseList;
        return $this;
    }

    /**
     * Get eventResponseList
     *
     * @return CampaignEventResponseList
     */
    public function getEventResponseList() {
        return $this->eventResponseList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return Campaign
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
     * @return Campaign
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
     * @return Campaign
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