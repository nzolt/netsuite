<?php

namespace Nzolt\NetSuite;

class GetRequest
{

    /**
     * @var BaseRef $baseRef
     */
    protected $baseRef = null;

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
     * @return \Nzolt\NetSuite\GetRequest
     */
    public function setBaseRef($baseRef)
    {
      $this->baseRef = $baseRef;
      return $this;
    }

}
