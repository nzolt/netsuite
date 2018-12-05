<?php

namespace Nzolt\NetSuite;

abstract class BaseRef
{

    /**
     * @var string $name
     */
    protected $name = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Nzolt\NetSuite\BaseRef
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
