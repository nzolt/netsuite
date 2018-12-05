<?php

namespace Nzolt\NetSuite;

class NullField
{

    /**
     * @var string[] $name
     */
    protected $name = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string[] $name
     * @return \Nzolt\NetSuite\NullField
     */
    public function setName(array $name = null)
    {
      $this->name = $name;
      return $this;
    }

}
