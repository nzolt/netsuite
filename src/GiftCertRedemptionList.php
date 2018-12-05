<?php

namespace Nzolt\NetSuite;

class GiftCertRedemptionList
{

    /**
     * @var GiftCertRedemption[] $giftCertRedemption
     */
    protected $giftCertRedemption = null;

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
     * @return GiftCertRedemption[]
     */
    public function getGiftCertRedemption()
    {
      return $this->giftCertRedemption;
    }

    /**
     * @param GiftCertRedemption[] $giftCertRedemption
     * @return \Nzolt\NetSuite\GiftCertRedemptionList
     */
    public function setGiftCertRedemption(array $giftCertRedemption = null)
    {
      $this->giftCertRedemption = $giftCertRedemption;
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
     * @return \Nzolt\NetSuite\GiftCertRedemptionList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
