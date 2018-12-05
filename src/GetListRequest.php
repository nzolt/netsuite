<?php

namespace Nzolt\NetSuite;

class GetListRequest
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
     * @return \Nzolt\NetSuite\GetListRequest
     */
    public function setBaseRef(array $baseRef)
    {
      $this->baseRef = $baseRef;
      return $this;
    }

}
