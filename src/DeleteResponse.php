<?php

namespace Nzolt\NetSuite;

class DeleteResponse
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
     * @return \Nzolt\NetSuite\DeleteResponse
     */
    public function setWriteResponse($writeResponse)
    {
      $this->writeResponse = $writeResponse;
      return $this;
    }

}
