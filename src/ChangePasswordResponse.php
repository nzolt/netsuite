<?php

namespace Nzolt\NetSuite;

class ChangePasswordResponse
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
     * @return \Nzolt\NetSuite\ChangePasswordResponse
     */
    public function setSessionResponse($sessionResponse)
    {
      $this->sessionResponse = $sessionResponse;
      return $this;
    }

}
