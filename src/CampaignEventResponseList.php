<?php

namespace Nzolt\NetSuite;

class CampaignEventResponseList
{

    /**
     * @var CampaignEventResponse[] $eventResponse
     */
    protected $eventResponse = null;

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
     * @return CampaignEventResponse[]
     */
    public function getEventResponse()
    {
      return $this->eventResponse;
    }

    /**
     * @param CampaignEventResponse[] $eventResponse
     * @return \Nzolt\NetSuite\CampaignEventResponseList
     */
    public function setEventResponse(array $eventResponse = null)
    {
      $this->eventResponse = $eventResponse;
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
     * @return \Nzolt\NetSuite\CampaignEventResponseList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
