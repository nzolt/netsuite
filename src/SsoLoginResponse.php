<?php

namespace Nzolt\NetSuite;

class SsoLoginResponse
{

    /**
     * @var SessionResponse $sessionResponse
     */
    protected $sessionResponse = null;

    /**
     * @param SessionResponse $sessionResponse
     */
    public function __construct($sessionResponse)
    {
      $this->sessionResponse = $sessionResponse;
    }

    /**
     * @return SessionResponse
     */
    public function getSessionResponse()
    {
      return $this->sessionResponse;
    }

    /**
     * @param SessionResponse $sessionResponse
     * @return \Nzolt\NetSuite\SsoLoginResponse
     */
    public function setSessionResponse($sessionResponse)
    {
      $this->sessionResponse = $sessionResponse;
      return $this;
    }

}
