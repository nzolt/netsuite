<?php

namespace Nzolt\NetSuite;

class UpdateResponse
{

    /**
     * @var WriteResponse $writeResponse
     */
    protected $writeResponse = null;

    /**
     * @param WriteResponse $writeResponse
     */
    public function __construct($writeResponse)
    {
      $this->writeResponse = $writeResponse;
    }

    /**
     * @return WriteResponse
     */
    public function getWriteResponse()
    {
      return $this->writeResponse;
    }

    /**
     * @param WriteResponse $writeResponse
     * @return \Nzolt\NetSuite\UpdateResponse
     */
    public function setWriteResponse($writeResponse)
    {
      $this->writeResponse = $writeResponse;
      return $this;
    }

}
