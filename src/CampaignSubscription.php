<?php

namespace Nzolt\NetSuite;

class CampaignSubscription extends Record
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var boolean $subscribedByDefault
     */
    protected $subscribedByDefault = null;

    /**
     * @var boolean $unsubscribed
     */
    protected $unsubscribed = null;

    /**
     * @var string $externalName
     */
    protected $externalName = null;

    /**
     * @var string $externalDescription
     */
    protected $externalDescription = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

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
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Nzolt\NetSuite\CampaignSubscription
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \Nzolt\NetSuite\CampaignSubscription
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSubscribedByDefault()
    {
      return $this->subscribedByDefault;
    }

    /**
     * @param boolean $subscribedByDefault
     * @return \Nzolt\NetSuite\CampaignSubscription
     */
    public function setSubscribedByDefault($subscribedByDefault)
    {
      $this->subscribedByDefault = $subscribedByDefault;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUnsubscribed()
    {
      return $this->unsubscribed;
    }

    /**
     * @param boolean $unsubscribed
     * @return \Nzolt\NetSuite\CampaignSubscription
     */
    public function setUnsubscribed($unsubscribed)
    {
      $this->unsubscribed = $unsubscribed;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalName()
    {
      return $this->externalName;
    }

    /**
     * @param string $externalName
     * @return \Nzolt\NetSuite\CampaignSubscription
     */
    public function setExternalName($externalName)
    {
      $this->externalName = $externalName;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalDescription()
    {
      return $this->externalDescription;
    }

    /**
     * @param string $externalDescription
     * @return \Nzolt\NetSuite\CampaignSubscription
     */
    public function setExternalDescription($externalDescription)
    {
      $this->externalDescription = $externalDescription;
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
     * @return \Nzolt\NetSuite\CampaignSubscription
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
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
     * @return \Nzolt\NetSuite\CampaignSubscription
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
     * @return \Nzolt\NetSuite\CampaignSubscription
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
