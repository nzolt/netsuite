<?php

namespace Nzolt\NetSuite;

class WriteResponseList
{

    /**
     * @var Status $status
     */
    protected $status = null;

    /**
     * @var WriteResponse[] $writeResponse
     */
    protected $writeResponse = null;

    /**
     * @param Status $status
     * @param WriteResponse[] $writeResponse
     */
    public function __construct($status, array $writeResponse)
    {
      $this->status = $status;
      $this->writeResponse = $writeResponse;
    }

    /**
     * @return Status
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param Status $status
     * @return \Nzolt\NetSuite\WriteResponseList
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return WriteResponse[]
     */
    public function getWriteResponse()
    {
      return $this->writeResponse;
    }

    /**
     * @param WriteResponse[] $writeResponse
     * @return \Nzolt\NetSuite\WriteResponseList
     */
    public function setWriteResponse(array $writeResponse)
    {
      $this->writeResponse = $writeResponse;
      return $this;
    }

}
