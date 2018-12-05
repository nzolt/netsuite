<?php

namespace Nzolt\NetSuite;

class InitializeRefList
{

    /**
     * @var InitializeRef[] $initializeRef
     */
    protected $initializeRef = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InitializeRef[]
     */
    public function getInitializeRef()
    {
      return $this->initializeRef;
    }

    /**
     * @param InitializeRef[] $initializeRef
     * @return \Nzolt\NetSuite\InitializeRefList
     */
    public function setInitializeRef(array $initializeRef = null)
    {
      $this->initializeRef = $initializeRef;
      return $this;
    }

}
