<?php

namespace Nzolt\NetSuite;

class PromotionCodePartnersList
{

    /**
     * @var PromotionCodePartners[] $partners
     */
    protected $partners = null;

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
     * @return PromotionCodePartners[]
     */
    public function getPartners()
    {
      return $this->partners;
    }

    /**
     * @param PromotionCodePartners[] $partners
     * @return \Nzolt\NetSuite\PromotionCodePartnersList
     */
    public function setPartners(array $partners = null)
    {
      $this->partners = $partners;
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
     * @return \Nzolt\NetSuite\PromotionCodePartnersList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
