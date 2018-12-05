<?php

namespace Nzolt\NetSuite;

class AsyncDeleteListRequest
{

    /**
     * @var BaseRef[] $baseRef
     */
    protected $baseRef = null;

    /**
     * @var DeletionReason $deletionReason
     */
    protected $deletionReason = null;

    /**
     * @param BaseRef[] $baseRef
     */
    public function __construct(array $baseRef)
    {
      $this->baseRef = $baseRef;
    }

    /**
     * @return BaseRef[]
     */
    public function getBaseRef()
    {
      return $this->baseRef;
    }

    /**
     * @param BaseRef[] $baseRef
     * @return \Nzolt\NetSuite\AsyncDeleteListRequest
     */
    public function setBaseRef(array $baseRef)
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
     * @return \Nzolt\NetSuite\AsyncDeleteListRequest
     */
    public function setDeletionReason($deletionReason)
    {
      $this->deletionReason = $deletionReason;
      return $this;
    }

}
