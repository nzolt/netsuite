<?php

namespace Nzolt\NetSuite;

class Campaign extends Record
{

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var string $campaignId
     */
    protected $campaignId = null;

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var RecordRef $category
     */
    protected $category = null;

    /**
     * @var RecordRef $owner
     */
    protected $owner = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @var float $baseCost
     */
    protected $baseCost = null;

    /**
     * @var float $cost
     */
    protected $cost = null;

    /**
     * @var float $expectedRevenue
     */
    protected $expectedRevenue = null;

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var boolean $local
     */
    protected $local = null;

    /**
     * @var float $totalRevenue
     */
    protected $totalRevenue = null;

    /**
     * @var float $roi
     */
    protected $roi = null;

    /**
     * @var float $profit
     */
    protected $profit = null;

    /**
     * @var float $costPerCustomer
     */
    protected $costPerCustomer = null;

    /**
     * @var float $convCostPerCustomer
     */
    protected $convCostPerCustomer = null;

    /**
     * @var int $conversions
     */
    protected $conversions = null;

    /**
     * @var int $leadsGenerated
     */
    protected $leadsGenerated = null;

    /**
     * @var int $uniqueVisitors
     */
    protected $uniqueVisitors = null;

    /**
     * @var RecordRef $vertical
     */
    protected $vertical = null;

    /**
     * @var RecordRef $audience
     */
    protected $audience = null;

    /**
     * @var RecordRef $offer
     */
    protected $offer = null;

    /**
     * @var RecordRef $promotionCode
     */
    protected $promotionCode = null;

    /**
     * @var RecordRefList $itemList
     */
    protected $itemList = null;

    /**
     * @var RecordRef $family
     */
    protected $family = null;

    /**
     * @var RecordRef $searchEngine
     */
    protected $searchEngine = null;

    /**
     * @var string $keyword
     */
    protected $keyword = null;

    /**
     * @var CampaignEmailList $campaignEmailList
     */
    protected $campaignEmailList = null;

    /**
     * @var CampaignDirectMailList $campaignDirectMailList
     */
    protected $campaignDirectMailList = null;

    /**
     * @var CampaignEventList $campaignEventList
     */
    protected $campaignEventList = null;

    /**
     * @var CampaignEventResponseList $eventResponseList
     */
    protected $eventResponseList = null;

    /**
     * @var CustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param string $internalId
     * @param string $externalId
     */
    public function __construct($internalId, $externalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
      $this->externalId = $externalId;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm()
    {
      return $this->customForm;
    }

    /**
     * @param RecordRef $customForm
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
      return $this;
    }

    /**
     * @return string
     */
    public function getCampaignId()
    {
      return $this->campaignId;
    }

    /**
     * @param string $campaignId
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = $campaignId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param string $title
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param RecordRef $category
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setCategory($category)
    {
      $this->category = $category;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getOwner()
    {
      return $this->owner;
    }

    /**
     * @param RecordRef $owner
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setOwner($owner)
    {
      $this->owner = $owner;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->startDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startDate
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setStartDate(\DateTime $startDate = null)
    {
      if ($startDate == null) {
       $this->startDate = null;
      } else {
        $this->startDate = $startDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->endDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endDate
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setEndDate(\DateTime $endDate = null)
    {
      if ($endDate == null) {
       $this->endDate = null;
      } else {
        $this->endDate = $endDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return float
     */
    public function getBaseCost()
    {
      return $this->baseCost;
    }

    /**
     * @param float $baseCost
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setBaseCost($baseCost)
    {
      $this->baseCost = $baseCost;
      return $this;
    }

    /**
     * @return float
     */
    public function getCost()
    {
      return $this->cost;
    }

    /**
     * @param float $cost
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setCost($cost)
    {
      $this->cost = $cost;
      return $this;
    }

    /**
     * @return float
     */
    public function getExpectedRevenue()
    {
      return $this->expectedRevenue;
    }

    /**
     * @param float $expectedRevenue
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setExpectedRevenue($expectedRevenue)
    {
      $this->expectedRevenue = $expectedRevenue;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param boolean $isInactive
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLocal()
    {
      return $this->local;
    }

    /**
     * @param boolean $local
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setLocal($local)
    {
      $this->local = $local;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalRevenue()
    {
      return $this->totalRevenue;
    }

    /**
     * @param float $totalRevenue
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setTotalRevenue($totalRevenue)
    {
      $this->totalRevenue = $totalRevenue;
      return $this;
    }

    /**
     * @return float
     */
    public function getRoi()
    {
      return $this->roi;
    }

    /**
     * @param float $roi
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setRoi($roi)
    {
      $this->roi = $roi;
      return $this;
    }

    /**
     * @return float
     */
    public function getProfit()
    {
      return $this->profit;
    }

    /**
     * @param float $profit
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setProfit($profit)
    {
      $this->profit = $profit;
      return $this;
    }

    /**
     * @return float
     */
    public function getCostPerCustomer()
    {
      return $this->costPerCustomer;
    }

    /**
     * @param float $costPerCustomer
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setCostPerCustomer($costPerCustomer)
    {
      $this->costPerCustomer = $costPerCustomer;
      return $this;
    }

    /**
     * @return float
     */
    public function getConvCostPerCustomer()
    {
      return $this->convCostPerCustomer;
    }

    /**
     * @param float $convCostPerCustomer
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setConvCostPerCustomer($convCostPerCustomer)
    {
      $this->convCostPerCustomer = $convCostPerCustomer;
      return $this;
    }

    /**
     * @return int
     */
    public function getConversions()
    {
      return $this->conversions;
    }

    /**
     * @param int $conversions
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setConversions($conversions)
    {
      $this->conversions = $conversions;
      return $this;
    }

    /**
     * @return int
     */
    public function getLeadsGenerated()
    {
      return $this->leadsGenerated;
    }

    /**
     * @param int $leadsGenerated
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setLeadsGenerated($leadsGenerated)
    {
      $this->leadsGenerated = $leadsGenerated;
      return $this;
    }

    /**
     * @return int
     */
    public function getUniqueVisitors()
    {
      return $this->uniqueVisitors;
    }

    /**
     * @param int $uniqueVisitors
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setUniqueVisitors($uniqueVisitors)
    {
      $this->uniqueVisitors = $uniqueVisitors;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getVertical()
    {
      return $this->vertical;
    }

    /**
     * @param RecordRef $vertical
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setVertical($vertical)
    {
      $this->vertical = $vertical;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAudience()
    {
      return $this->audience;
    }

    /**
     * @param RecordRef $audience
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setAudience($audience)
    {
      $this->audience = $audience;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getOffer()
    {
      return $this->offer;
    }

    /**
     * @param RecordRef $offer
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setOffer($offer)
    {
      $this->offer = $offer;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPromotionCode()
    {
      return $this->promotionCode;
    }

    /**
     * @param RecordRef $promotionCode
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setPromotionCode($promotionCode)
    {
      $this->promotionCode = $promotionCode;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getItemList()
    {
      return $this->itemList;
    }

    /**
     * @param RecordRefList $itemList
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setItemList($itemList)
    {
      $this->itemList = $itemList;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getFamily()
    {
      return $this->family;
    }

    /**
     * @param RecordRef $family
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setFamily($family)
    {
      $this->family = $family;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSearchEngine()
    {
      return $this->searchEngine;
    }

    /**
     * @param RecordRef $searchEngine
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setSearchEngine($searchEngine)
    {
      $this->searchEngine = $searchEngine;
      return $this;
    }

    /**
     * @return string
     */
    public function getKeyword()
    {
      return $this->keyword;
    }

    /**
     * @param string $keyword
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setKeyword($keyword)
    {
      $this->keyword = $keyword;
      return $this;
    }

    /**
     * @return CampaignEmailList
     */
    public function getCampaignEmailList()
    {
      return $this->campaignEmailList;
    }

    /**
     * @param CampaignEmailList $campaignEmailList
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setCampaignEmailList($campaignEmailList)
    {
      $this->campaignEmailList = $campaignEmailList;
      return $this;
    }

    /**
     * @return CampaignDirectMailList
     */
    public function getCampaignDirectMailList()
    {
      return $this->campaignDirectMailList;
    }

    /**
     * @param CampaignDirectMailList $campaignDirectMailList
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setCampaignDirectMailList($campaignDirectMailList)
    {
      $this->campaignDirectMailList = $campaignDirectMailList;
      return $this;
    }

    /**
     * @return CampaignEventList
     */
    public function getCampaignEventList()
    {
      return $this->campaignEventList;
    }

    /**
     * @param CampaignEventList $campaignEventList
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setCampaignEventList($campaignEventList)
    {
      $this->campaignEventList = $campaignEventList;
      return $this;
    }

    /**
     * @return CampaignEventResponseList
     */
    public function getEventResponseList()
    {
      return $this->eventResponseList;
    }

    /**
     * @param CampaignEventResponseList $eventResponseList
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setEventResponseList($eventResponseList)
    {
      $this->eventResponseList = $eventResponseList;
      return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param string $internalId
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Nzolt\NetSuite\Campaign
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
