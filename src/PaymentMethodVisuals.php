<?php

namespace Nzolt\NetSuite;

class PaymentMethodVisuals
{

    /**
     * @var string $flags
     */
    protected $flags = null;

    /**
     * @var string $location
     */
    protected $location = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getFlags()
    {
      return $this->flags;
    }

    /**
     * @param string $flags
     * @return \Nzolt\NetSuite\PaymentMethodVisuals
     */
    public function setFlags($flags)
    {
      $this->flags = $flags;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param string $location
     * @return \Nzolt\NetSuite\PaymentMethodVisuals
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

}
