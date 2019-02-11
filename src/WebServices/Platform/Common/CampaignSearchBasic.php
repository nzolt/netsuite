<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * CampaignSearchBasic
 */
class CampaignSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $audience;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $baseCost;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $campaignEventType;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $campaignId;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $category;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $channel;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $cost;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $createdDate;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $endDate;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $event;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $expectedRevenue;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $externalId;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $externalIdString;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $family;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $group;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $internalId;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $internalIdNumber;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isInactive;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isSalesCampaign;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $item;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $keyword;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $manager;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $managerRole;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $number;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $offer;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $promoCode;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $recipient;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $response;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $responseCategory;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $responseCode;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $responseComments;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $responseDate;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $scheduleDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $searchEngine;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $startDate;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $status;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $subscription;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $template;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $title;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $vertical;

    /**
     * @access public
     * @var SearchCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"audience" => "SearchMultiSelectField",
    	"baseCost" => "SearchDoubleField",
    	"campaignEventType" => "SearchEnumMultiSelectField",
    	"campaignId" => "SearchStringField",
    	"category" => "SearchMultiSelectField",
    	"channel" => "SearchMultiSelectField",
    	"cost" => "SearchDoubleField",
    	"createdDate" => "SearchDateField",
    	"endDate" => "SearchDateField",
    	"event" => "SearchStringField",
    	"expectedRevenue" => "SearchDoubleField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"family" => "SearchMultiSelectField",
    	"group" => "SearchMultiSelectField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isInactive" => "SearchBooleanField",
    	"isSalesCampaign" => "SearchBooleanField",
    	"item" => "SearchMultiSelectField",
    	"keyword" => "SearchStringField",
    	"lastModifiedDate" => "SearchDateField",
    	"manager" => "SearchMultiSelectField",
    	"managerRole" => "SearchMultiSelectField",
    	"number" => "SearchLongField",
    	"offer" => "SearchMultiSelectField",
    	"promoCode" => "SearchMultiSelectField",
    	"recipient" => "SearchMultiSelectField",
    	"response" => "SearchEnumMultiSelectField",
    	"responseCategory" => "SearchEnumMultiSelectField",
    	"responseCode" => "SearchLongField",
    	"responseComments" => "SearchStringField",
    	"responseDate" => "SearchDateField",
    	"scheduleDate" => "SearchDateField",
    	"searchEngine" => "SearchMultiSelectField",
    	"startDate" => "SearchDateField",
    	"status" => "SearchEnumMultiSelectField",
    	"subscription" => "SearchMultiSelectField",
    	"template" => "SearchMultiSelectField",
    	"title" => "SearchStringField",
    	"vertical" => "SearchMultiSelectField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set audience
     *
     * @param SearchMultiSelectField $audience
     * @return CampaignSearchBasic
     */
    public function setAudience(SearchMultiSelectField $audience) {
        $this->audience = $audience;
        return $this;
    }

    /**
     * Get audience
     *
     * @return SearchMultiSelectField
     */
    public function getAudience() {
        return $this->audience;
    }


    /**
     * Set baseCost
     *
     * @param SearchDoubleField $baseCost
     * @return CampaignSearchBasic
     */
    public function setBaseCost(SearchDoubleField $baseCost) {
        $this->baseCost = $baseCost;
        return $this;
    }

    /**
     * Get baseCost
     *
     * @return SearchDoubleField
     */
    public function getBaseCost() {
        return $this->baseCost;
    }


    /**
     * Set campaignEventType
     *
     * @param SearchEnumMultiSelectField $campaignEventType
     * @return CampaignSearchBasic
     */
    public function setCampaignEventType(SearchEnumMultiSelectField $campaignEventType) {
        $this->campaignEventType = $campaignEventType;
        return $this;
    }

    /**
     * Get campaignEventType
     *
     * @return SearchEnumMultiSelectField
     */
    public function getCampaignEventType() {
        return $this->campaignEventType;
    }


    /**
     * Set campaignId
     *
     * @param SearchStringField $campaignId
     * @return CampaignSearchBasic
     */
    public function setCampaignId(SearchStringField $campaignId) {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * Get campaignId
     *
     * @return SearchStringField
     */
    public function getCampaignId() {
        return $this->campaignId;
    }


    /**
     * Set category
     *
     * @param SearchMultiSelectField $category
     * @return CampaignSearchBasic
     */
    public function setCategory(SearchMultiSelectField $category) {
        $this->category = $category;
        return $this;
    }

    /**
     * Get category
     *
     * @return SearchMultiSelectField
     */
    public function getCategory() {
        return $this->category;
    }


    /**
     * Set channel
     *
     * @param SearchMultiSelectField $channel
     * @return CampaignSearchBasic
     */
    public function setChannel(SearchMultiSelectField $channel) {
        $this->channel = $channel;
        return $this;
    }

    /**
     * Get channel
     *
     * @return SearchMultiSelectField
     */
    public function getChannel() {
        return $this->channel;
    }


    /**
     * Set cost
     *
     * @param SearchDoubleField $cost
     * @return CampaignSearchBasic
     */
    public function setCost(SearchDoubleField $cost) {
        $this->cost = $cost;
        return $this;
    }

    /**
     * Get cost
     *
     * @return SearchDoubleField
     */
    public function getCost() {
        return $this->cost;
    }


    /**
     * Set createdDate
     *
     * @param SearchDateField $createdDate
     * @return CampaignSearchBasic
     */
    public function setCreatedDate(SearchDateField $createdDate) {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * Get createdDate
     *
     * @return SearchDateField
     */
    public function getCreatedDate() {
        return $this->createdDate;
    }


    /**
     * Set endDate
     *
     * @param SearchDateField $endDate
     * @return CampaignSearchBasic
     */
    public function setEndDate(SearchDateField $endDate) {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Get endDate
     *
     * @return SearchDateField
     */
    public function getEndDate() {
        return $this->endDate;
    }


    /**
     * Set event
     *
     * @param SearchStringField $event
     * @return CampaignSearchBasic
     */
    public function setEvent(SearchStringField $event) {
        $this->event = $event;
        return $this;
    }

    /**
     * Get event
     *
     * @return SearchStringField
     */
    public function getEvent() {
        return $this->event;
    }


    /**
     * Set expectedRevenue
     *
     * @param SearchDoubleField $expectedRevenue
     * @return CampaignSearchBasic
     */
    public function setExpectedRevenue(SearchDoubleField $expectedRevenue) {
        $this->expectedRevenue = $expectedRevenue;
        return $this;
    }

    /**
     * Get expectedRevenue
     *
     * @return SearchDoubleField
     */
    public function getExpectedRevenue() {
        return $this->expectedRevenue;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return CampaignSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return SearchMultiSelectField
     */
    public function getExternalId() {
        return $this->externalId;
    }


    /**
     * Set externalIdString
     *
     * @param SearchStringField $externalIdString
     * @return CampaignSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString) {
        $this->externalIdString = $externalIdString;
        return $this;
    }

    /**
     * Get externalIdString
     *
     * @return SearchStringField
     */
    public function getExternalIdString() {
        return $this->externalIdString;
    }


    /**
     * Set family
     *
     * @param SearchMultiSelectField $family
     * @return CampaignSearchBasic
     */
    public function setFamily(SearchMultiSelectField $family) {
        $this->family = $family;
        return $this;
    }

    /**
     * Get family
     *
     * @return SearchMultiSelectField
     */
    public function getFamily() {
        return $this->family;
    }


    /**
     * Set group
     *
     * @param SearchMultiSelectField $group
     * @return CampaignSearchBasic
     */
    public function setGroup(SearchMultiSelectField $group) {
        $this->group = $group;
        return $this;
    }

    /**
     * Get group
     *
     * @return SearchMultiSelectField
     */
    public function getGroup() {
        return $this->group;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return CampaignSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return SearchMultiSelectField
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set internalIdNumber
     *
     * @param SearchLongField $internalIdNumber
     * @return CampaignSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber) {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * Get internalIdNumber
     *
     * @return SearchLongField
     */
    public function getInternalIdNumber() {
        return $this->internalIdNumber;
    }


    /**
     * Set isInactive
     *
     * @param SearchBooleanField $isInactive
     * @return CampaignSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive) {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Get isInactive
     *
     * @return SearchBooleanField
     */
    public function getIsInactive() {
        return $this->isInactive;
    }


    /**
     * Set isSalesCampaign
     *
     * @param SearchBooleanField $isSalesCampaign
     * @return CampaignSearchBasic
     */
    public function setIsSalesCampaign(SearchBooleanField $isSalesCampaign) {
        $this->isSalesCampaign = $isSalesCampaign;
        return $this;
    }

    /**
     * Get isSalesCampaign
     *
     * @return SearchBooleanField
     */
    public function getIsSalesCampaign() {
        return $this->isSalesCampaign;
    }


    /**
     * Set item
     *
     * @param SearchMultiSelectField $item
     * @return CampaignSearchBasic
     */
    public function setItem(SearchMultiSelectField $item) {
        $this->item = $item;
        return $this;
    }

    /**
     * Get item
     *
     * @return SearchMultiSelectField
     */
    public function getItem() {
        return $this->item;
    }


    /**
     * Set keyword
     *
     * @param SearchStringField $keyword
     * @return CampaignSearchBasic
     */
    public function setKeyword(SearchStringField $keyword) {
        $this->keyword = $keyword;
        return $this;
    }

    /**
     * Get keyword
     *
     * @return SearchStringField
     */
    public function getKeyword() {
        return $this->keyword;
    }


    /**
     * Set lastModifiedDate
     *
     * @param SearchDateField $lastModifiedDate
     * @return CampaignSearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate) {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * Get lastModifiedDate
     *
     * @return SearchDateField
     */
    public function getLastModifiedDate() {
        return $this->lastModifiedDate;
    }


    /**
     * Set manager
     *
     * @param SearchMultiSelectField $manager
     * @return CampaignSearchBasic
     */
    public function setManager(SearchMultiSelectField $manager) {
        $this->manager = $manager;
        return $this;
    }

    /**
     * Get manager
     *
     * @return SearchMultiSelectField
     */
    public function getManager() {
        return $this->manager;
    }


    /**
     * Set managerRole
     *
     * @param SearchMultiSelectField $managerRole
     * @return CampaignSearchBasic
     */
    public function setManagerRole(SearchMultiSelectField $managerRole) {
        $this->managerRole = $managerRole;
        return $this;
    }

    /**
     * Get managerRole
     *
     * @return SearchMultiSelectField
     */
    public function getManagerRole() {
        return $this->managerRole;
    }


    /**
     * Set number
     *
     * @param SearchLongField $number
     * @return CampaignSearchBasic
     */
    public function setNumber(SearchLongField $number) {
        $this->number = $number;
        return $this;
    }

    /**
     * Get number
     *
     * @return SearchLongField
     */
    public function getNumber() {
        return $this->number;
    }


    /**
     * Set offer
     *
     * @param SearchMultiSelectField $offer
     * @return CampaignSearchBasic
     */
    public function setOffer(SearchMultiSelectField $offer) {
        $this->offer = $offer;
        return $this;
    }

    /**
     * Get offer
     *
     * @return SearchMultiSelectField
     */
    public function getOffer() {
        return $this->offer;
    }


    /**
     * Set promoCode
     *
     * @param SearchMultiSelectField $promoCode
     * @return CampaignSearchBasic
     */
    public function setPromoCode(SearchMultiSelectField $promoCode) {
        $this->promoCode = $promoCode;
        return $this;
    }

    /**
     * Get promoCode
     *
     * @return SearchMultiSelectField
     */
    public function getPromoCode() {
        return $this->promoCode;
    }


    /**
     * Set recipient
     *
     * @param SearchMultiSelectField $recipient
     * @return CampaignSearchBasic
     */
    public function setRecipient(SearchMultiSelectField $recipient) {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * Get recipient
     *
     * @return SearchMultiSelectField
     */
    public function getRecipient() {
        return $this->recipient;
    }


    /**
     * Set response
     *
     * @param SearchEnumMultiSelectField $response
     * @return CampaignSearchBasic
     */
    public function setResponse(SearchEnumMultiSelectField $response) {
        $this->response = $response;
        return $this;
    }

    /**
     * Get response
     *
     * @return SearchEnumMultiSelectField
     */
    public function getResponse() {
        return $this->response;
    }


    /**
     * Set responseCategory
     *
     * @param SearchEnumMultiSelectField $responseCategory
     * @return CampaignSearchBasic
     */
    public function setResponseCategory(SearchEnumMultiSelectField $responseCategory) {
        $this->responseCategory = $responseCategory;
        return $this;
    }

    /**
     * Get responseCategory
     *
     * @return SearchEnumMultiSelectField
     */
    public function getResponseCategory() {
        return $this->responseCategory;
    }


    /**
     * Set responseCode
     *
     * @param SearchLongField $responseCode
     * @return CampaignSearchBasic
     */
    public function setResponseCode(SearchLongField $responseCode) {
        $this->responseCode = $responseCode;
        return $this;
    }

    /**
     * Get responseCode
     *
     * @return SearchLongField
     */
    public function getResponseCode() {
        return $this->responseCode;
    }


    /**
     * Set responseComments
     *
     * @param SearchStringField $responseComments
     * @return CampaignSearchBasic
     */
    public function setResponseComments(SearchStringField $responseComments) {
        $this->responseComments = $responseComments;
        return $this;
    }

    /**
     * Get responseComments
     *
     * @return SearchStringField
     */
    public function getResponseComments() {
        return $this->responseComments;
    }


    /**
     * Set responseDate
     *
     * @param SearchDateField $responseDate
     * @return CampaignSearchBasic
     */
    public function setResponseDate(SearchDateField $responseDate) {
        $this->responseDate = $responseDate;
        return $this;
    }

    /**
     * Get responseDate
     *
     * @return SearchDateField
     */
    public function getResponseDate() {
        return $this->responseDate;
    }


    /**
     * Set scheduleDate
     *
     * @param SearchDateField $scheduleDate
     * @return CampaignSearchBasic
     */
    public function setScheduleDate(SearchDateField $scheduleDate) {
        $this->scheduleDate = $scheduleDate;
        return $this;
    }

    /**
     * Get scheduleDate
     *
     * @return SearchDateField
     */
    public function getScheduleDate() {
        return $this->scheduleDate;
    }


    /**
     * Set searchEngine
     *
     * @param SearchMultiSelectField $searchEngine
     * @return CampaignSearchBasic
     */
    public function setSearchEngine(SearchMultiSelectField $searchEngine) {
        $this->searchEngine = $searchEngine;
        return $this;
    }

    /**
     * Get searchEngine
     *
     * @return SearchMultiSelectField
     */
    public function getSearchEngine() {
        return $this->searchEngine;
    }


    /**
     * Set startDate
     *
     * @param SearchDateField $startDate
     * @return CampaignSearchBasic
     */
    public function setStartDate(SearchDateField $startDate) {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Get startDate
     *
     * @return SearchDateField
     */
    public function getStartDate() {
        return $this->startDate;
    }


    /**
     * Set status
     *
     * @param SearchEnumMultiSelectField $status
     * @return CampaignSearchBasic
     */
    public function setStatus(SearchEnumMultiSelectField $status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return SearchEnumMultiSelectField
     */
    public function getStatus() {
        return $this->status;
    }


    /**
     * Set subscription
     *
     * @param SearchMultiSelectField $subscription
     * @return CampaignSearchBasic
     */
    public function setSubscription(SearchMultiSelectField $subscription) {
        $this->subscription = $subscription;
        return $this;
    }

    /**
     * Get subscription
     *
     * @return SearchMultiSelectField
     */
    public function getSubscription() {
        return $this->subscription;
    }


    /**
     * Set template
     *
     * @param SearchMultiSelectField $template
     * @return CampaignSearchBasic
     */
    public function setTemplate(SearchMultiSelectField $template) {
        $this->template = $template;
        return $this;
    }

    /**
     * Get template
     *
     * @return SearchMultiSelectField
     */
    public function getTemplate() {
        return $this->template;
    }


    /**
     * Set title
     *
     * @param SearchStringField $title
     * @return CampaignSearchBasic
     */
    public function setTitle(SearchStringField $title) {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return SearchStringField
     */
    public function getTitle() {
        return $this->title;
    }


    /**
     * Set vertical
     *
     * @param SearchMultiSelectField $vertical
     * @return CampaignSearchBasic
     */
    public function setVertical(SearchMultiSelectField $vertical) {
        $this->vertical = $vertical;
        return $this;
    }

    /**
     * Get vertical
     *
     * @return SearchMultiSelectField
     */
    public function getVertical() {
        return $this->vertical;
    }


    /**
     * Set customFieldList
     *
     * @param SearchCustomFieldList $customFieldList
     * @return CampaignSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }

}