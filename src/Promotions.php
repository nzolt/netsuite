<?php

namespace Nzolt\NetSuite;

class Promotions
{

    /**
     * @var RecordRef $promoCode
     */
    protected $promoCode = null;

    /**
     * @var RecordRef $couponCode
     */
    protected $couponCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getPromoCode()
    {
      return $this->promoCode;
    }

    /**
     * @param RecordRef $promoCode
     * @return \Nzolt\NetSuite\Promotions
     */
    public function setPromoCode($promoCode)
    {
      $this->promoCode = $promoCode;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCouponCode()
    {
      return $this->couponCode;
    }

    /**
     * @param RecordRef $couponCode
     * @return \Nzolt\NetSuite\Promotions
     */
    public function setCouponCode($couponCode)
    {
      $this->couponCode = $couponCode;
      return $this;
    }

}
