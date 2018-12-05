<?php

namespace Nzolt\NetSuite;

class GetResponse
{

    /**
     * @var ReadResponse $readResponse
     */
    protected $readResponse = null;

    /**
     * @param ReadResponse $readResponse
     */
    public function __construct($readResponse)
    {
      $this->readResponse = $readResponse;
    }

    /**
     * @return ReadResponse
     */
    public function getReadResponse()
    {
      return $this->readResponse;
    }

    /**
     * @param ReadResponse $readResponse
     * @return \Nzolt\NetSuite\GetResponse
     */
    public function setReadResponse($readResponse)
    {
      $this->readResponse = $readResponse;
      return $this;
    }

}
