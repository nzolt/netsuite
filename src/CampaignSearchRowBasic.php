<?php

namespace Nzolt\NetSuite;

class CampaignSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnSelectField[] $audience
     */
    protected $audience = null;

    /**
     * @var SearchColumnDoubleField[] $baseCost
     */
    protected $baseCost = null;

    /**
     * @var SearchColumnStringField[] $campaignId
     */
    protected $campaignId = null;

    /**
     * @var SearchColumnSelectField[] $category
     */
    protected $category = null;

    /**
     * @var SearchColumnSelectField[] $channel
     */
    protected $channel = null;

    /**
     * @var SearchColumnDoubleField[] $cost
     */
    protected $cost = null;

    /**
     * @var SearchColumnDateField[] $createdDate
     */
    protected $createdDate = null;

    /**
     * @var SearchColumnDateField[] $endDate
     */
    protected $endDate = null;

    /**
     * @var SearchColumnStringField[] $event
     */
    protected $event = null;

    /**
     * @var SearchColumnDateField[] $executedDate
     */
    protected $executedDate = null;

    /**
     * @var SearchColumnDoubleField[] $expectedRevenue
     */
    protected $expectedRevenue = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnSelectField[] $family
     */
    protected $family = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchColumnBooleanField[] $isSalesCampaign
     */
    protected $isSalesCampaign = null;

    /**
     * @var SearchColumnSelectField[] $item
     */
    protected $item = null;

    /**
     * @var SearchColumnStringField[] $keyword
     */
    protected $keyword = null;

    /**
     * @var SearchColumnDateField[] $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchColumnSelectField[] $managerRole
     */
    protected $managerRole = null;

    /**
     * @var SearchColumnStringField[] $message
     */
    protected $message = null;

    /**
     * @var SearchColumnSelectField[] $offer
     */
    protected $offer = null;

    /**
     * @var SearchColumnSelectField[] $owner
     */
    protected $owner = null;

    /**
     * @var SearchColumnStringField[] $promoCode
     */
    protected $promoCode = null;

    /**
     * @var SearchColumnSelectField[] $recipient
     */
    protected $recipient = null;

    /**
     * @var SearchColumnEnumSelectField[] $response
     */
    protected $response = null;

    /**
     * @var SearchColumnEnumSelectField[] $responseCategory
     */
    protected $responseCategory = null;

    /**
     * @var SearchColumnLongField[] $responseCode
     */
    protected $responseCode = null;

    /**
     * @var SearchColumnDateField[] $responseDate
     */
    protected $responseDate = null;

    /**
     * @var SearchColumnStringField[] $responseNotes
     */
    protected $responseNotes = null;

    /**
     * @var SearchColumnDoubleField[] $revenue
     */
    protected $revenue = null;

    /**
     * @var SearchColumnDoubleField[] $roi
     */
    protected $roi = null;

    /**
     * @var SearchColumnDateField[] $scheduledDate
     */
    protected $scheduledDate = null;

    /**
     * @var SearchColumnSelectField[] $searchEngine
     */
    protected $searchEngine = null;

    /**
     * @var SearchColumnDateField[] $startDate
     */
    protected $startDate = null;

    /**
     * @var SearchColumnEnumSelectField[] $status
     */
    protected $status = null;

    /**
     * @var SearchColumnSelectField[] $subscription
     */
    protected $subscription = null;

    /**
     * @var SearchColumnStringField[] $title
     */
    protected $title = null;

    /**
     * @var SearchColumnStringField[] $url
     */
    protected $url = null;

    /**
     * @var SearchColumnSelectField[] $vertical
     */
    protected $vertical = null;

    /**
     * @var SearchColumnCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAudience()
    {
      return $this->audience;
    }

    /**
     * @param SearchColumnSelectField[] $audience
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setAudience(array $audience = null)
    {
      $this->audience = $audience;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBaseCost()
    {
      return $this->baseCost;
    }

    /**
     * @param SearchColumnDoubleField[] $baseCost
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setBaseCost(array $baseCost = null)
    {
      $this->baseCost = $baseCost;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCampaignId()
    {
      return $this->campaignId;
    }

    /**
     * @param SearchColumnStringField[] $campaignId
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setCampaignId(array $campaignId = null)
    {
      $this->campaignId = $campaignId;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param SearchColumnSelectField[] $category
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setCategory(array $category = null)
    {
      $this->category = $category;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getChannel()
    {
      return $this->channel;
    }

    /**
     * @param SearchColumnSelectField[] $channel
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setChannel(array $channel = null)
    {
      $this->channel = $channel;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCost()
    {
      return $this->cost;
    }

    /**
     * @param SearchColumnDoubleField[] $cost
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setCost(array $cost = null)
    {
      $this->cost = $cost;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCreatedDate()
    {
      return $this->createdDate;
    }

    /**
     * @param SearchColumnDateField[] $createdDate
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setCreatedDate(array $createdDate = null)
    {
      $this->createdDate = $createdDate;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param SearchColumnDateField[] $endDate
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setEndDate(array $endDate = null)
    {
      $this->endDate = $endDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getEvent()
    {
      return $this->event;
    }

    /**
     * @param SearchColumnStringField[] $event
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setEvent(array $event = null)
    {
      $this->event = $event;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getExecutedDate()
    {
      return $this->executedDate;
    }

    /**
     * @param SearchColumnDateField[] $executedDate
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setExecutedDate(array $executedDate = null)
    {
      $this->executedDate = $executedDate;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getExpectedRevenue()
    {
      return $this->expectedRevenue;
    }

    /**
     * @param SearchColumnDoubleField[] $expectedRevenue
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setExpectedRevenue(array $expectedRevenue = null)
    {
      $this->expectedRevenue = $expectedRevenue;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getFamily()
    {
      return $this->family;
    }

    /**
     * @param SearchColumnSelectField[] $family
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setFamily(array $family = null)
    {
      $this->family = $family;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param SearchColumnBooleanField[] $isInactive
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setIsInactive(array $isInactive = null)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsSalesCampaign()
    {
      return $this->isSalesCampaign;
    }

    /**
     * @param SearchColumnBooleanField[] $isSalesCampaign
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setIsSalesCampaign(array $isSalesCampaign = null)
    {
      $this->isSalesCampaign = $isSalesCampaign;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SearchColumnSelectField[] $item
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getKeyword()
    {
      return $this->keyword;
    }

    /**
     * @param SearchColumnStringField[] $keyword
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setKeyword(array $keyword = null)
    {
      $this->keyword = $keyword;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastModifiedDate()
    {
      return $this->lastModifiedDate;
    }

    /**
     * @param SearchColumnDateField[] $lastModifiedDate
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setLastModifiedDate(array $lastModifiedDate = null)
    {
      $this->lastModifiedDate = $lastModifiedDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getManagerRole()
    {
      return $this->managerRole;
    }

    /**
     * @param SearchColumnSelectField[] $managerRole
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setManagerRole(array $managerRole = null)
    {
      $this->managerRole = $managerRole;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param SearchColumnStringField[] $message
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setMessage(array $message = null)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getOffer()
    {
      return $this->offer;
    }

    /**
     * @param SearchColumnSelectField[] $offer
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setOffer(array $offer = null)
    {
      $this->offer = $offer;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getOwner()
    {
      return $this->owner;
    }

    /**
     * @param SearchColumnSelectField[] $owner
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setOwner(array $owner = null)
    {
      $this->owner = $owner;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPromoCode()
    {
      return $this->promoCode;
    }

    /**
     * @param SearchColumnStringField[] $promoCode
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setPromoCode(array $promoCode = null)
    {
      $this->promoCode = $promoCode;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getRecipient()
    {
      return $this->recipient;
    }

    /**
     * @param SearchColumnSelectField[] $recipient
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setRecipient(array $recipient = null)
    {
      $this->recipient = $recipient;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getResponse()
    {
      return $this->response;
    }

    /**
     * @param SearchColumnEnumSelectField[] $response
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setResponse(array $response = null)
    {
      $this->response = $response;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getResponseCategory()
    {
      return $this->responseCategory;
    }

    /**
     * @param SearchColumnEnumSelectField[] $responseCategory
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setResponseCategory(array $responseCategory = null)
    {
      $this->responseCategory = $responseCategory;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getResponseCode()
    {
      return $this->responseCode;
    }

    /**
     * @param SearchColumnLongField[] $responseCode
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setResponseCode(array $responseCode = null)
    {
      $this->responseCode = $responseCode;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getResponseDate()
    {
      return $this->responseDate;
    }

    /**
     * @param SearchColumnDateField[] $responseDate
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setResponseDate(array $responseDate = null)
    {
      $this->responseDate = $responseDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getResponseNotes()
    {
      return $this->responseNotes;
    }

    /**
     * @param SearchColumnStringField[] $responseNotes
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setResponseNotes(array $responseNotes = null)
    {
      $this->responseNotes = $responseNotes;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRevenue()
    {
      return $this->revenue;
    }

    /**
     * @param SearchColumnDoubleField[] $revenue
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setRevenue(array $revenue = null)
    {
      $this->revenue = $revenue;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRoi()
    {
      return $this->roi;
    }

    /**
     * @param SearchColumnDoubleField[] $roi
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setRoi(array $roi = null)
    {
      $this->roi = $roi;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getScheduledDate()
    {
      return $this->scheduledDate;
    }

    /**
     * @param SearchColumnDateField[] $scheduledDate
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setScheduledDate(array $scheduledDate = null)
    {
      $this->scheduledDate = $scheduledDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSearchEngine()
    {
      return $this->searchEngine;
    }

    /**
     * @param SearchColumnSelectField[] $searchEngine
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setSearchEngine(array $searchEngine = null)
    {
      $this->searchEngine = $searchEngine;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartDate()
    {
      return $this->startDate;
    }

    /**
     * @param SearchColumnDateField[] $startDate
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setStartDate(array $startDate = null)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param SearchColumnEnumSelectField[] $status
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setStatus(array $status = null)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubscription()
    {
      return $this->subscription;
    }

    /**
     * @param SearchColumnSelectField[] $subscription
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setSubscription(array $subscription = null)
    {
      $this->subscription = $subscription;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param SearchColumnStringField[] $title
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setTitle(array $title = null)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param SearchColumnStringField[] $url
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setUrl(array $url = null)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getVertical()
    {
      return $this->vertical;
    }

    /**
     * @param SearchColumnSelectField[] $vertical
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setVertical(array $vertical = null)
    {
      $this->vertical = $vertical;
      return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\CampaignSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
