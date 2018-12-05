<?php

namespace Nzolt\NetSuite;

class CampaignEventList
{

    /**
     * @var CampaignEvent[] $campaignEvent
     */
    protected $campaignEvent = null;

    /**
     * @var boolean $replaceAll
     */
    protected $replaceAll = null;

    /**
     * @param boolean $replaceAll
     */
    public function __construct($replaceAll)
    {
      $this->replaceAll = $replaceAll;
    }

    /**
     * @return CampaignEvent[]
     */
    public function getCampaignEvent()
    {
      return $this->campaignEvent;
    }

    /**
     * @param CampaignEvent[] $campaignEvent
     * @return \Nzolt\NetSuite\CampaignEventList
     */
    public function setCampaignEvent(array $campaignEvent = null)
    {
      $this->campaignEvent = $campaignEvent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReplaceAll()
    {
      return $this->replaceAll;
    }

    /**
     * @param boolean $replaceAll
     * @return \Nzolt\NetSuite\CampaignEventList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
