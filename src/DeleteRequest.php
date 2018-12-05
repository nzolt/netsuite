<?php

namespace Nzolt\NetSuite;

class DeleteRequest
{

    /**
     * @var BaseRef $baseRef
     */
    protected $baseRef = null;

    /**
     * @var DeletionReason $deletionReason
     */
    protected $deletionReason = null;

    /**
     * @param BaseRef $baseRef
     */
    public function __construct($baseRef)
    {
      $this->baseRef = $baseRef;
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
     * @return \Nzolt\NetSuite\DeleteRequest
     */
    public function setBaseRef($baseRef)
    {
      $this->baseRef = $baseRef;
      return $this;
    }

    /**
     * @return DeletionReason
     */
    public function getDeletionReason()
    {
      return $this->deletionReason;
    }

    /**
     * @param DeletionReason $deletionReason
     * @return \Nzolt\NetSuite\DeleteRequest
     */
    public function setDeletionReason($deletionReason)
    {
      $this->deletionReason = $deletionReason;
      return $this;
    }

}
