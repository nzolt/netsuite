<?php

namespace Nzolt\NetSuite;

class PromotionCodePartners
{

    /**
     * @var RecordRef $partner
     */
    protected $partner = null;

    /**
     * @var string $code
     */
    protected $code = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getPartner()
    {
      return $this->partner;
    }

    /**
     * @param RecordRef $partner
     * @return \Nzolt\NetSuite\PromotionCodePartners
     */
    public function setPartner($partner)
    {
      $this->partner = $partner;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return \Nzolt\NetSuite\PromotionCodePartners
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

}
