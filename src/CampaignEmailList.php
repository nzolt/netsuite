<?php

namespace Nzolt\NetSuite;

class CampaignEmailList
{

    /**
     * @var CampaignEmail[] $campaignEmail
     */
    protected $campaignEmail = null;

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
     * @return CampaignEmail[]
     */
    public function getCampaignEmail()
    {
      return $this->campaignEmail;
    }

    /**
     * @param CampaignEmail[] $campaignEmail
     * @return \Nzolt\NetSuite\CampaignEmailList
     */
    public function setCampaignEmail(array $campaignEmail = null)
    {
      $this->campaignEmail = $campaignEmail;
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
     * @return \Nzolt\NetSuite\CampaignEmailList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
