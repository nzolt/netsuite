<?php

namespace Nzolt\NetSuite;

class InventoryItemBinNumber
{

    /**
     * @var RecordRef $binNumber
     */
    protected $binNumber = null;

    /**
     * @var string $onHand
     */
    protected $onHand = null;

    /**
     * @var string $onHandAvail
     */
    protected $onHandAvail = null;

    /**
     * @var string $location
     */
    protected $location = null;

    /**
     * @var boolean $preferredBin
     */
    protected $preferredBin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getBinNumber()
    {
      return $this->binNumber;
    }

    /**
     * @param RecordRef $binNumber
     * @return \Nzolt\NetSuite\InventoryItemBinNumber
     */
    public function setBinNumber($binNumber)
    {
      $this->binNumber = $binNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getOnHand()
    {
      return $this->onHand;
    }

    /**
     * @param string $onHand
     * @return \Nzolt\NetSuite\InventoryItemBinNumber
     */
    public function setOnHand($onHand)
    {
      $this->onHand = $onHand;
      return $this;
    }

    /**
     * @return string
     */
    public function getOnHandAvail()
    {
      return $this->onHandAvail;
    }

    /**
     * @param string $onHandAvail
     * @return \Nzolt\NetSuite\InventoryItemBinNumber
     */
    public function setOnHandAvail($onHandAvail)
    {
      $this->onHandAvail = $onHandAvail;
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
     * @return \Nzolt\NetSuite\InventoryItemBinNumber
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPreferredBin()
    {
      return $this->preferredBin;
    }

    /**
     * @param boolean $preferredBin
     * @return \Nzolt\NetSuite\InventoryItemBinNumber
     */
    public function setPreferredBin($preferredBin)
    {
      $this->preferredBin = $preferredBin;
      return $this;
    }

}
