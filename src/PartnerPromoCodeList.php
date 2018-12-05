<?php

namespace Nzolt\NetSuite;

class PartnerPromoCodeList
{

    /**
     * @var PartnerPromoCode[] $promoCode
     */
    protected $promoCode = null;

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
     * @return PartnerPromoCode[]
     */
    public function getPromoCode()
    {
      return $this->promoCode;
    }

    /**
     * @param PartnerPromoCode[] $promoCode
     * @return \Nzolt\NetSuite\PartnerPromoCodeList
     */
    public function setPromoCode(array $promoCode = null)
    {
      $this->promoCode = $promoCode;
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
     * @return \Nzolt\NetSuite\PartnerPromoCodeList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
