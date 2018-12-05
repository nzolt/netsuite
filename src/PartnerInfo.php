<?php

namespace Nzolt\NetSuite;

class PartnerInfo
{

    /**
     * @var string $partnerId
     */
    protected $partnerId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getPartnerId()
    {
      return $this->partnerId;
    }

    /**
     * @param string $partnerId
     * @return \Nzolt\NetSuite\PartnerInfo
     */
    public function setPartnerId($partnerId)
    {
      $this->partnerId = $partnerId;
      return $this;
    }

}
