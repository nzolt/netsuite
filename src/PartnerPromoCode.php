<?php

namespace Nzolt\NetSuite;

class PartnerPromoCode
{

    /**
     * @var RecordRef $promoCode
     */
    protected $promoCode = null;

    /**
     * @var string $discount
     */
    protected $discount = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    
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
     * @return \Nzolt\NetSuite\PartnerPromoCode
     */
    public function setPromoCode($promoCode)
    {
      $this->promoCode = $promoCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiscount()
    {
      return $this->discount;
    }

    /**
     * @param string $discount
     * @return \Nzolt\NetSuite\PartnerPromoCode
     */
    public function setDiscount($discount)
    {
      $this->discount = $discount;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->endDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endDate
     * @return \Nzolt\NetSuite\PartnerPromoCode
     */
    public function setEndDate(\DateTime $endDate = null)
    {
      if ($endDate == null) {
       $this->endDate = null;
      } else {
        $this->endDate = $endDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
