<?php

namespace Nzolt\NetSuite;

class CampaignDirectMailList
{

    /**
     * @var CampaignDirectMail[] $campaignDirectMail
     */
    protected $campaignDirectMail = null;

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
     * @return CampaignDirectMail[]
     */
    public function getCampaignDirectMail()
    {
      return $this->campaignDirectMail;
    }

    /**
     * @param CampaignDirectMail[] $campaignDirectMail
     * @return \Nzolt\NetSuite\CampaignDirectMailList
     */
    public function setCampaignDirectMail(array $campaignDirectMail = null)
    {
      $this->campaignDirectMail = $campaignDirectMail;
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
     * @return \Nzolt\NetSuite\CampaignDirectMailList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
