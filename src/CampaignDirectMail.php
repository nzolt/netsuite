<?php

namespace Nzolt\NetSuite;

class CampaignDirectMail
{

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var RecordRef $campaignGroup
     */
    protected $campaignGroup = null;

    /**
     * @var RecordRef $template
     */
    protected $template = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var RecordRef $subscription
     */
    protected $subscription = null;

    /**
     * @var RecordRef $channel
     */
    protected $channel = null;

    /**
     * @var float $cost
     */
    protected $cost = null;

    /**
     * @var CampaignCampaignDirectMailStatus $status
     */
    protected $status = null;

    /**
     * @var \DateTime $dateScheduled
     */
    protected $dateScheduled = null;

    /**
     * @var RecordRef $promoCode
     */
    protected $promoCode = null;

    /**
     * @var CustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
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
     * @return \Nzolt\NetSuite\CampaignDirectMail
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCampaignGroup()
    {
      return $this->campaignGroup;
    }

    /**
     * @param RecordRef $campaignGroup
     * @return \Nzolt\NetSuite\CampaignDirectMail
     */
    public function setCampaignGroup($campaignGroup)
    {
      $this->campaignGroup = $campaignGroup;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTemplate()
    {
      return $this->template;
    }

    /**
     * @param RecordRef $template
     * @return \Nzolt\NetSuite\CampaignDirectMail
     */
    public function setTemplate($template)
    {
      $this->template = $template;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Nzolt\NetSuite\CampaignDirectMail
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubscription()
    {
      return $this->subscription;
    }

    /**
     * @param RecordRef $subscription
     * @return \Nzolt\NetSuite\CampaignDirectMail
     */
    public function setSubscription($subscription)
    {
      $this->subscription = $subscription;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getChannel()
    {
      return $this->channel;
    }

    /**
     * @param RecordRef $channel
     * @return \Nzolt\NetSuite\CampaignDirectMail
     */
    public function setChannel($channel)
    {
      $this->channel = $channel;
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
     * @return \Nzolt\NetSuite\CampaignDirectMail
     */
    public function setCost($cost)
    {
      $this->cost = $cost;
      return $this;
    }

    /**
     * @return CampaignCampaignDirectMailStatus
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param CampaignCampaignDirectMailStatus $status
     * @return \Nzolt\NetSuite\CampaignDirectMail
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateScheduled()
    {
      if ($this->dateScheduled == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dateScheduled);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dateScheduled
     * @return \Nzolt\NetSuite\CampaignDirectMail
     */
    public function setDateScheduled(\DateTime $dateScheduled = null)
    {
      if ($dateScheduled == null) {
       $this->dateScheduled = null;
      } else {
        $this->dateScheduled = $dateScheduled->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPromoCode()
    {
      return $this->promoCode;
    }

    /**
     * @param RecordRef $promoCode
     * @return \Nzolt\NetSuite\CampaignDirectMail
     */
    public function setPromoCode($promoCode)
    {
      $this->promoCode = $promoCode;
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
     * @return \Nzolt\NetSuite\CampaignDirectMail
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
