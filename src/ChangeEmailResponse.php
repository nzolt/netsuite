<?php

namespace Nzolt\NetSuite;

class ChangeEmailResponse
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
     * @return \Nzolt\NetSuite\ChangeEmailResponse
     */
    public function setSessionResponse($sessionResponse)
    {
      $this->sessionResponse = $sessionResponse;
      return $this;
    }

}
