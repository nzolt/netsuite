<?php

namespace Nzolt\NetSuite;

class GiftCertRedemption
{

    /**
     * @var RecordRef $authCode
     */
    protected $authCode = null;

    /**
     * @var float $authCodeApplied
     */
    protected $authCodeApplied = null;

    /**
     * @var float $authCodeAmtRemaining
     */
    protected $authCodeAmtRemaining = null;

    /**
     * @var float $giftCertAvailable
     */
    protected $giftCertAvailable = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getAuthCode()
    {
      return $this->authCode;
    }

    /**
     * @param RecordRef $authCode
     * @return \Nzolt\NetSuite\GiftCertRedemption
     */
    public function setAuthCode($authCode)
    {
      $this->authCode = $authCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getAuthCodeApplied()
    {
      return $this->authCodeApplied;
    }

    /**
     * @param float $authCodeApplied
     * @return \Nzolt\NetSuite\GiftCertRedemption
     */
    public function setAuthCodeApplied($authCodeApplied)
    {
      $this->authCodeApplied = $authCodeApplied;
      return $this;
    }

    /**
     * @return float
     */
    public function getAuthCodeAmtRemaining()
    {
      return $this->authCodeAmtRemaining;
    }

    /**
     * @param float $authCodeAmtRemaining
     * @return \Nzolt\NetSuite\GiftCertRedemption
     */
    public function setAuthCodeAmtRemaining($authCodeAmtRemaining)
    {
      $this->authCodeAmtRemaining = $authCodeAmtRemaining;
      return $this;
    }

    /**
     * @return float
     */
    public function getGiftCertAvailable()
    {
      return $this->giftCertAvailable;
    }

    /**
     * @param float $giftCertAvailable
     * @return \Nzolt\NetSuite\GiftCertRedemption
     */
    public function setGiftCertAvailable($giftCertAvailable)
    {
      $this->giftCertAvailable = $giftCertAvailable;
      return $this;
    }

}
