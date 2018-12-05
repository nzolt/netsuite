<?php

namespace Nzolt\NetSuite;

class DimensionList
{

    /**
     * @var DimensionRef[] $dimension
     */
    protected $dimension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DimensionRef[]
     */
    public function getDimension()
    {
      return $this->dimension;
    }

    /**
     * @param DimensionRef[] $dimension
     * @return \Nzolt\NetSuite\DimensionList
     */
    public function setDimension(array $dimension = null)
    {
      $this->dimension = $dimension;
      return $this;
    }

}
