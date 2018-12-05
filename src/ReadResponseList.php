<?php

namespace Nzolt\NetSuite;

class ReadResponseList
{

    /**
     * @var Status $status
     */
    protected $status = null;

    /**
     * @var ReadResponse[] $readResponse
     */
    protected $readResponse = null;

    /**
     * @param Status $status
     */
    public function __construct($status)
    {
      $this->status = $status;
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
     * @return \Nzolt\NetSuite\ReadResponseList
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return ReadResponse[]
     */
    public function getReadResponse()
    {
      return $this->readResponse;
    }

    /**
     * @param ReadResponse[] $readResponse
     * @return \Nzolt\NetSuite\ReadResponseList
     */
    public function setReadResponse(array $readResponse = null)
    {
      $this->readResponse = $readResponse;
      return $this;
    }

}
