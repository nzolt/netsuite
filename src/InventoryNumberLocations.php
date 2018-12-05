<?php

namespace Nzolt\NetSuite;

class InventoryNumberLocations
{

    /**
     * @var string $location
     */
    protected $location = null;

    /**
     * @var float $quantityOnHand
     */
    protected $quantityOnHand = null;

    /**
     * @var float $quantityAvailable
     */
    protected $quantityAvailable = null;

    /**
     * @var float $quantityOnOrder
     */
    protected $quantityOnOrder = null;

    /**
     * @var float $quantityInTransit
     */
    protected $quantityInTransit = null;

    
    public function __construct()
    {
    
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
     * @return \Nzolt\NetSuite\InventoryNumberLocations
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityOnHand()
    {
      return $this->quantityOnHand;
    }

    /**
     * @param float $quantityOnHand
     * @return \Nzolt\NetSuite\InventoryNumberLocations
     */
    public function setQuantityOnHand($quantityOnHand)
    {
      $this->quantityOnHand = $quantityOnHand;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityAvailable()
    {
      return $this->quantityAvailable;
    }

    /**
     * @param float $quantityAvailable
     * @return \Nzolt\NetSuite\InventoryNumberLocations
     */
    public function setQuantityAvailable($quantityAvailable)
    {
      $this->quantityAvailable = $quantityAvailable;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityOnOrder()
    {
      return $this->quantityOnOrder;
    }

    /**
     * @param float $quantityOnOrder
     * @return \Nzolt\NetSuite\InventoryNumberLocations
     */
    public function setQuantityOnOrder($quantityOnOrder)
    {
      $this->quantityOnOrder = $quantityOnOrder;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityInTransit()
    {
      return $this->quantityInTransit;
    }

    /**
     * @param float $quantityInTransit
     * @return \Nzolt\NetSuite\InventoryNumberLocations
     */
    public function setQuantityInTransit($quantityInTransit)
    {
      $this->quantityInTransit = $quantityInTransit;
      return $this;
    }

}
