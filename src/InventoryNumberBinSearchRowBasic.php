<?php

namespace Nzolt\NetSuite;

class InventoryNumberBinSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnSelectField[] $binNumber
     */
    protected $binNumber = null;

    /**
     * @var SearchColumnSelectField[] $inventoryNumber
     */
    protected $inventoryNumber = null;

    /**
     * @var SearchColumnSelectField[] $location
     */
    protected $location = null;

    /**
     * @var SearchColumnDoubleField[] $quantityAvailable
     */
    protected $quantityAvailable = null;

    /**
     * @var SearchColumnDoubleField[] $quantityOnHand
     */
    protected $quantityOnHand = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBinNumber()
    {
      return $this->binNumber;
    }

    /**
     * @param SearchColumnSelectField[] $binNumber
     * @return \Nzolt\NetSuite\InventoryNumberBinSearchRowBasic
     */
    public function setBinNumber(array $binNumber = null)
    {
      $this->binNumber = $binNumber;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInventoryNumber()
    {
      return $this->inventoryNumber;
    }

    /**
     * @param SearchColumnSelectField[] $inventoryNumber
     * @return \Nzolt\NetSuite\InventoryNumberBinSearchRowBasic
     */
    public function setInventoryNumber(array $inventoryNumber = null)
    {
      $this->inventoryNumber = $inventoryNumber;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param SearchColumnSelectField[] $location
     * @return \Nzolt\NetSuite\InventoryNumberBinSearchRowBasic
     */
    public function setLocation(array $location = null)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityAvailable()
    {
      return $this->quantityAvailable;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityAvailable
     * @return \Nzolt\NetSuite\InventoryNumberBinSearchRowBasic
     */
    public function setQuantityAvailable(array $quantityAvailable = null)
    {
      $this->quantityAvailable = $quantityAvailable;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityOnHand()
    {
      return $this->quantityOnHand;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityOnHand
     * @return \Nzolt\NetSuite\InventoryNumberBinSearchRowBasic
     */
    public function setQuantityOnHand(array $quantityOnHand = null)
    {
      $this->quantityOnHand = $quantityOnHand;
      return $this;
    }

}
