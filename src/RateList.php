<?php

namespace Nzolt\NetSuite;

class RateList
{

    /**
     * @var Rate[] $rate
     */
    protected $rate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Rate[]
     */
    public function getRate()
    {
      return $this->rate;
    }

    /**
     * @param Rate[] $rate
     * @return \Nzolt\NetSuite\RateList
     */
    public function setRate(array $rate = null)
    {
      $this->rate = $rate;
      return $this;
    }

}
