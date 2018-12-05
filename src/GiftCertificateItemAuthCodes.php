<?php

namespace Nzolt\NetSuite;

class GiftCertificateItemAuthCodes
{

    /**
     * @var string $authCode
     */
    protected $authCode = null;

    /**
     * @var boolean $used
     */
    protected $used = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAuthCode()
    {
      return $this->authCode;
    }

    /**
     * @param string $authCode
     * @return \Nzolt\NetSuite\GiftCertificateItemAuthCodes
     */
    public function setAuthCode($authCode)
    {
      $this->authCode = $authCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUsed()
    {
      return $this->used;
    }

    /**
     * @param boolean $used
     * @return \Nzolt\NetSuite\GiftCertificateItemAuthCodes
     */
    public function setUsed($used)
    {
      $this->used = $used;
      return $this;
    }

}
