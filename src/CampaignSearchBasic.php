<?php

namespace Nzolt\NetSuite;

class CampaignSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchMultiSelectField $audience
     */
    protected $audience = null;

    /**
     * @var SearchDoubleField $baseCost
     */
    protected $baseCost = null;

    /**
     * @var SearchEnumMultiSelectField $campaignEventType
     */
    protected $campaignEventType = null;

    /**
     * @var SearchStringField $campaignId
     */
    protected $campaignId = null;

    /**
     * @var SearchMultiSelectField $category
     */
    protected $category = null;

    /**
     * @var SearchMultiSelectField $channel
     */
    protected $channel = null;

    /**
     * @var SearchDoubleField $cost
     */
    protected $cost = null;

    /**
     * @var SearchDateField $createdDate
     */
    protected $createdDate = null;

    /**
     * @var SearchDateField $endDate
     */
    protected $endDate = null;

    /**
     * @var SearchStringField $event
     */
    protected $event = null;

    /**
     * @var SearchDoubleField $expectedRevenue
     */
    protected $expectedRevenue = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchMultiSelectField $family
     */
    protected $family = null;

    /**
     * @var SearchMultiSelectField $group
     */
    protected $group = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchBooleanField $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchBooleanField $isSalesCampaign
     */
    protected $isSalesCampaign = null;

    /**
     * @var SearchMultiSelectField $item
     */
    protected $item = null;

    /**
     * @var SearchStringField $keyword
     */
    protected $keyword = null;

    /**
     * @var SearchDateField $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchMultiSelectField $manager
     */
    protected $manager = null;

    /**
     * @var SearchMultiSelectField $managerRole
     */
    protected $managerRole = null;

    /**
     * @var SearchLongField $number
     */
    protected $number = null;

    /**
     * @var SearchMultiSelectField $offer
     */
    protected $offer = null;

    /**
     * @var SearchMultiSelectField $promoCode
     */
    protected $promoCode = null;

    /**
     * @var SearchMultiSelectField $recipient
     */
    protected $recipient = null;

    /**
     * @var SearchEnumMultiSelectField $response
     */
    protected $response = null;

    /**
     * @var SearchEnumMultiSelectField $responseCategory
     */
    protected $responseCategory = null;

    /**
     * @var SearchLongField $responseCode
     */
    protected $responseCode = null;

    /**
     * @var SearchStringField $responseComments
     */
    protected $responseComments = null;

    /**
     * @var SearchDateField $responseDate
     */
    protected $responseDate = null;

    /**
     * @var SearchDateField $scheduleDate
     */
    protected $scheduleDate = null;

    /**
     * @var SearchMultiSelectField $searchEngine
     */
    protected $searchEngine = null;

    /**
     * @var SearchDateField $startDate
     */
    protected $startDate = null;

    /**
     * @var SearchEnumMultiSelectField $status
     */
    protected $status = null;

    /**
     * @var SearchMultiSelectField $subscription
     */
    protected $subscription = null;

    /**
     * @var SearchMultiSelectField $template
     */
    protected $template = null;

    /**
     * @var SearchStringField $title
     */
    protected $title = null;

    /**
     * @var SearchMultiSelectField $vertical
     */
    protected $vertical = null;

    /**
     * @var SearchCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAudience()
    {
      return $this->audience;
    }

    /**
     * @param SearchMultiSelectField $audience
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setAudience($audience)
    {
      $this->audience = $audience;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getBaseCost()
    {
      return $this->baseCost;
    }

    /**
     * @param SearchDoubleField $baseCost
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setBaseCost($baseCost)
    {
      $this->baseCost = $baseCost;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getCampaignEventType()
    {
      return $this->campaignEventType;
    }

    /**
     * @param SearchEnumMultiSelectField $campaignEventType
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setCampaignEventType($campaignEventType)
    {
      $this->campaignEventType = $campaignEventType;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCampaignId()
    {
      return $this->campaignId;
    }

    /**
     * @param SearchStringField $campaignId
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = $campaignId;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param SearchMultiSelectField $category
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setCategory($category)
    {
      $this->category = $category;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getChannel()
    {
      return $this->channel;
    }

    /**
     * @param SearchMultiSelectField $channel
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setChannel($channel)
    {
      $this->channel = $channel;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCost()
    {
      return $this->cost;
    }

    /**
     * @param SearchDoubleField $cost
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setCost($cost)
    {
      $this->cost = $cost;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCreatedDate()
    {
      return $this->createdDate;
    }

    /**
     * @param SearchDateField $createdDate
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setCreatedDate($createdDate)
    {
      $this->createdDate = $createdDate;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param SearchDateField $endDate
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getEvent()
    {
      return $this->event;
    }

    /**
     * @param SearchStringField $event
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setEvent($event)
    {
      $this->event = $event;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getExpectedRevenue()
    {
      return $this->expectedRevenue;
    }

    /**
     * @param SearchDoubleField $expectedRevenue
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setExpectedRevenue($expectedRevenue)
    {
      $this->expectedRevenue = $expectedRevenue;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString()
    {
      return $this->externalIdString;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getFamily()
    {
      return $this->family;
    }

    /**
     * @param SearchMultiSelectField $family
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setFamily($family)
    {
      $this->family = $family;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getGroup()
    {
      return $this->group;
    }

    /**
     * @param SearchMultiSelectField $group
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setGroup($group)
    {
      $this->group = $group;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber()
    {
      return $this->internalIdNumber;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param SearchBooleanField $isInactive
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsSalesCampaign()
    {
      return $this->isSalesCampaign;
    }

    /**
     * @param SearchBooleanField $isSalesCampaign
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setIsSalesCampaign($isSalesCampaign)
    {
      $this->isSalesCampaign = $isSalesCampaign;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SearchMultiSelectField $item
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getKeyword()
    {
      return $this->keyword;
    }

    /**
     * @param SearchStringField $keyword
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setKeyword($keyword)
    {
      $this->keyword = $keyword;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastModifiedDate()
    {
      return $this->lastModifiedDate;
    }

    /**
     * @param SearchDateField $lastModifiedDate
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setLastModifiedDate($lastModifiedDate)
    {
      $this->lastModifiedDate = $lastModifiedDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getManager()
    {
      return $this->manager;
    }

    /**
     * @param SearchMultiSelectField $manager
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setManager($manager)
    {
      $this->manager = $manager;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getManagerRole()
    {
      return $this->managerRole;
    }

    /**
     * @param SearchMultiSelectField $managerRole
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setManagerRole($managerRole)
    {
      $this->managerRole = $managerRole;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param SearchLongField $number
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getOffer()
    {
      return $this->offer;
    }

    /**
     * @param SearchMultiSelectField $offer
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setOffer($offer)
    {
      $this->offer = $offer;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPromoCode()
    {
      return $this->promoCode;
    }

    /**
     * @param SearchMultiSelectField $promoCode
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setPromoCode($promoCode)
    {
      $this->promoCode = $promoCode;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRecipient()
    {
      return $this->recipient;
    }

    /**
     * @param SearchMultiSelectField $recipient
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setRecipient($recipient)
    {
      $this->recipient = $recipient;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getResponse()
    {
      return $this->response;
    }

    /**
     * @param SearchEnumMultiSelectField $response
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setResponse($response)
    {
      $this->response = $response;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getResponseCategory()
    {
      return $this->responseCategory;
    }

    /**
     * @param SearchEnumMultiSelectField $responseCategory
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setResponseCategory($responseCategory)
    {
      $this->responseCategory = $responseCategory;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getResponseCode()
    {
      return $this->responseCode;
    }

    /**
     * @param SearchLongField $responseCode
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setResponseCode($responseCode)
    {
      $this->responseCode = $responseCode;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getResponseComments()
    {
      return $this->responseComments;
    }

    /**
     * @param SearchStringField $responseComments
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setResponseComments($responseComments)
    {
      $this->responseComments = $responseComments;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getResponseDate()
    {
      return $this->responseDate;
    }

    /**
     * @param SearchDateField $responseDate
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setResponseDate($responseDate)
    {
      $this->responseDate = $responseDate;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getScheduleDate()
    {
      return $this->scheduleDate;
    }

    /**
     * @param SearchDateField $scheduleDate
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setScheduleDate($scheduleDate)
    {
      $this->scheduleDate = $scheduleDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSearchEngine()
    {
      return $this->searchEngine;
    }

    /**
     * @param SearchMultiSelectField $searchEngine
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setSearchEngine($searchEngine)
    {
      $this->searchEngine = $searchEngine;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getStartDate()
    {
      return $this->startDate;
    }

    /**
     * @param SearchDateField $startDate
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param SearchEnumMultiSelectField $status
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubscription()
    {
      return $this->subscription;
    }

    /**
     * @param SearchMultiSelectField $subscription
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setSubscription($subscription)
    {
      $this->subscription = $subscription;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTemplate()
    {
      return $this->template;
    }

    /**
     * @param SearchMultiSelectField $template
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setTemplate($template)
    {
      $this->template = $template;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param SearchStringField $title
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getVertical()
    {
      return $this->vertical;
    }

    /**
     * @param SearchMultiSelectField $vertical
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setVertical($vertical)
    {
      $this->vertical = $vertical;
      return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\CampaignSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
