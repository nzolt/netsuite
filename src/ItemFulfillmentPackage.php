<?php

namespace Nzolt\NetSuite;

class ItemFulfillmentPackage
{

    /**
     * @var float $packageWeight
     */
    protected $packageWeight = null;

    /**
     * @var string $packageDescr
     */
    protected $packageDescr = null;

    /**
     * @var string $packageTrackingNumber
     */
    protected $packageTrackingNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getPackageWeight()
    {
      return $this->packageWeight;
    }

    /**
     * @param float $packageWeight
     * @return \Nzolt\NetSuite\ItemFulfillmentPackage
     */
    public function setPackageWeight($packageWeight)
    {
      $this->packageWeight = $packageWeight;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackageDescr()
    {
      return $this->packageDescr;
    }

    /**
     * @param string $packageDescr
     * @return \Nzolt\NetSuite\ItemFulfillmentPackage
     */
    public function setPackageDescr($packageDescr)
    {
      $this->packageDescr = $packageDescr;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackageTrackingNumber()
    {
      return $this->packageTrackingNumber;
    }

    /**
     * @param string $packageTrackingNumber
     * @return \Nzolt\NetSuite\ItemFulfillmentPackage
     */
    public function setPackageTrackingNumber($packageTrackingNumber)
    {
      $this->packageTrackingNumber = $packageTrackingNumber;
      return $this;
    }

}
