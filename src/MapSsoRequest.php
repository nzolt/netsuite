<?php

namespace Nzolt\NetSuite;

class MapSsoRequest
{

    /**
     * @var SsoCredentials $ssoCredentials
     */
    protected $ssoCredentials = null;

    /**
     * @param SsoCredentials $ssoCredentials
     */
    public function __construct($ssoCredentials)
    {
      $this->ssoCredentials = $ssoCredentials;
    }

    /**
     * @return SsoCredentials
     */
    public function getSsoCredentials()
    {
      return $this->ssoCredentials;
    }

    /**
     * @param SsoCredentials $ssoCredentials
     * @return \Nzolt\NetSuite\MapSsoRequest
     */
    public function setSsoCredentials($ssoCredentials)
    {
      $this->ssoCredentials = $ssoCredentials;
      return $this;
    }

}
