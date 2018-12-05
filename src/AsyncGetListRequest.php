<?php

namespace Nzolt\NetSuite;

class AsyncGetListRequest
{

    /**
     * @var BaseRef[] $baseRef
     */
    protected $baseRef = null;

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
     * @return \Nzolt\NetSuite\AsyncGetListRequest
     */
    public function setBaseRef(array $baseRef)
    {
      $this->baseRef = $baseRef;
      return $this;
    }

}
