<?php

namespace Nzolt\NetSuite;

class CampaignResponseResponsesList
{

    /**
     * @var CampaignResponseResponses[] $responses
     */
    protected $responses = null;

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
     * @return CampaignResponseResponses[]
     */
    public function getResponses()
    {
      return $this->responses;
    }

    /**
     * @param CampaignResponseResponses[] $responses
     * @return \Nzolt\NetSuite\CampaignResponseResponsesList
     */
    public function setResponses(array $responses = null)
    {
      $this->responses = $responses;
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
     * @return \Nzolt\NetSuite\CampaignResponseResponsesList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
