<?php

namespace Nzolt\NetSuite;

class WriteResponse
{

    /**
     * @var Status $status
     */
    protected $status = null;

    /**
     * @var BaseRef $baseRef
     */
    protected $baseRef = null;

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
     * @return \Nzolt\NetSuite\WriteResponse
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return BaseRef
     */
    public function getBaseRef()
    {
      return $this->baseRef;
    }

    /**
     * @param BaseRef $baseRef
     * @return \Nzolt\NetSuite\WriteResponse
     */
    public function setBaseRef($baseRef)
    {
      $this->baseRef = $baseRef;
      return $this;
    }

}
