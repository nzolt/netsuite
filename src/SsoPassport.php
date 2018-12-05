<?php

namespace Nzolt\NetSuite;

class SsoPassport
{

    /**
     * @var string $authenticationToken
     */
    protected $authenticationToken = null;

    /**
     * @var string $partnerId
     */
    protected $partnerId = null;

    /**
     * @var string $partnerAccount
     */
    protected $partnerAccount = null;

    /**
     * @var string $partnerUserId
     */
    protected $partnerUserId = null;

    /**
     * @param string $authenticationToken
     * @param string $partnerId
     * @param string $partnerAccount
     * @param string $partnerUserId
     */
    public function __construct($authenticationToken, $partnerId, $partnerAccount, $partnerUserId)
    {
      $this->authenticationToken = $authenticationToken;
      $this->partnerId = $partnerId;
      $this->partnerAccount = $partnerAccount;
      $this->partnerUserId = $partnerUserId;
    }

    /**
     * @return string
     */
    public function getAuthenticationToken()
    {
      return $this->authenticationToken;
    }

    /**
     * @param string $authenticationToken
     * @return \Nzolt\NetSuite\SsoPassport
     */
    public function setAuthenticationToken($authenticationToken)
    {
      $this->authenticationToken = $authenticationToken;
      return $this;
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
     * @return \Nzolt\NetSuite\SsoPassport
     */
    public function setPartnerId($partnerId)
    {
      $this->partnerId = $partnerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPartnerAccount()
    {
      return $this->partnerAccount;
    }

    /**
     * @param string $partnerAccount
     * @return \Nzolt\NetSuite\SsoPassport
     */
    public function setPartnerAccount($partnerAccount)
    {
      $this->partnerAccount = $partnerAccount;
      return $this;
    }

    /**
     * @return string
     */
    public function getPartnerUserId()
    {
      return $this->partnerUserId;
    }

    /**
     * @param string $partnerUserId
     * @return \Nzolt\NetSuite\SsoPassport
     */
    public function setPartnerUserId($partnerUserId)
    {
      $this->partnerUserId = $partnerUserId;
      return $this;
    }

}
