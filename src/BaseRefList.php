<?php

namespace Nzolt\NetSuite;

class BaseRefList
{

    /**
     * @var BaseRef[] $baseRef
     */
    protected $baseRef = null;

    
    public function __construct()
    {
    
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
     * @return \Nzolt\NetSuite\BaseRefList
     */
    public function setBaseRef(array $baseRef = null)
    {
      $this->baseRef = $baseRef;
      return $this;
    }

}
