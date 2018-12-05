<?php

namespace Nzolt\NetSuite;

class SsoLoginRequest
{

    /**
     * @var SsoPassport $ssoPassport
     */
    protected $ssoPassport = null;

    /**
     * @param SsoPassport $ssoPassport
     */
    public function __construct($ssoPassport)
    {
      $this->ssoPassport = $ssoPassport;
    }

    /**
     * @return SsoPassport
     */
    public function getSsoPassport()
    {
      return $this->ssoPassport;
    }

    /**
     * @param SsoPassport $ssoPassport
     * @return \Nzolt\NetSuite\SsoLoginRequest
     */
    public function setSsoPassport($ssoPassport)
    {
      $this->ssoPassport = $ssoPassport;
      return $this;
    }

}
